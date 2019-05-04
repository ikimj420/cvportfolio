<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePortfolioRequest;
use App\Http\Requests\UpdatePortfolioRequest;
use App\Models\Portfolio;
use App\Repositories\PortfolioRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Flash;
use Response;

class PortfolioController extends AppBaseController
{
    /** @var  PortfolioRepository */
    private $portfolioRepository;

    public function __construct(PortfolioRepository $portfolioRepo)
    {
        $this->portfolioRepository = $portfolioRepo;
    }

    /**
     * Display a listing of the Portfolio.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $portfolios = $this->portfolioRepository->all();

        return view('portfolios.index')
            ->with('portfolios', $portfolios);
    }

    /**
     * Show the form for creating a new Portfolio.
     *
     * @return Response
     */
    public function create()
    {
        return view('portfolios.create');
    }

    /**
     * Store a newly created Portfolio in storage.
     *
     * @param CreatePortfolioRequest $request
     *
     * @return Response
     */
    public function store(CreatePortfolioRequest $request)
    {
        if($request->hasFile('cover_images')){
            // Filename with extension
            $filenameWithExt = $request->file('cover_images')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just extension
            $extension = $request->file('cover_images')->getClientOriginalExtension();
            // Filename to store
            $filenameToStor = $filename.'_'.time().'.'.$extension;
            //remove space if exist
            $filenameToStore = str_replace(' ','_', $filenameToStor);
            // Path to save file in albums folder
            $path = $request->file('cover_images')->storeAs('public/portfolio', $filenameToStore);
        } else {
            $filenameToStore = 'default.jpg';
        }

        $portfolio = new Portfolio;
        $portfolio->title = $request->input('title');
        $portfolio->dev = $request->input('dev');
        $portfolio->link = $request->input('link');
        $portfolio->desc = $request->input('desc');
        $portfolio->cover_images = $filenameToStore;

        $portfolio->save();

        Flash::success('Portfolio saved successfully.');

        return redirect(route('portfolios.index'));
    }

    /**
     * Display the specified Portfolio.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $portfolio = $this->portfolioRepository->find($id);

        if (empty($portfolio)) {
            Flash::error('Portfolio not found');

            return redirect(route('portfolios.index'));
        }

        return view('portfolios.show')->with('portfolio', $portfolio);
    }

    /**
     * Show the form for editing the specified Portfolio.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $portfolio = $this->portfolioRepository->find($id);

        if (empty($portfolio)) {
            Flash::error('Portfolio not found');

            return redirect(route('portfolios.index'));
        }

        return view('portfolios.edit')->with('portfolio', $portfolio);
    }

    /**
     * Update the specified Portfolio in storage.
     *
     * @param int $id
     * @param UpdatePortfolioRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePortfolioRequest $request)
    {
        // Upload photo
        if($request->hasFile('cover_images')){
            // Filename with extension
            $filenameWithExt = $request->file('cover_images')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just extension
            $extension = $request->file('cover_images')->getClientOriginalExtension();
            // Filename to store
            $filenameToStor = $filename.'_'.time().'.'.$extension;
            //remove space if exist
            $filenameToStore = str_replace(' ','_', $filenameToStor);
            // Path to save file in albums folder
            $path = $request->file('cover_images')->storeAs('public/portfolio', $filenameToStore);
        }

        $portfolio = Portfolio::find($id);
        $portfolio->title = $request->input('title');
        $portfolio->dev = $request->input('dev');
        $portfolio->link = $request->input('link');
        $portfolio->desc = $request->input('desc');
        if($request->hasFile('cover_images')){
            if($portfolio->cover_images != 'default.jpg'){
                // If Update Image Delete Old Image
                Storage::delete('public/portfolio/'.$portfolio->cover_images);
            };
            $portfolio->cover_images = $filenameToStore;
        }

        if (empty($portfolio)) {
            Flash::error('Portfolio not found');

            return redirect(route('portfolios.index'));
        }

        $portfolio->save();

        Flash::success('Portfolio updated successfully.');

        return redirect(route('portfolios.index'));
    }

    /**
     * Remove the specified Portfolio from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $portfolio = $this->portfolioRepository->find($id);
        //del images from app
        Storage::delete('public/portfolio/'.$portfolio->cover_images);

        if (empty($portfolio)) {
            Flash::error('Portfolio not found');

            return redirect(route('portfolios.index'));
        }

        $this->portfolioRepository->delete($id);

        Flash::success('Portfolio deleted successfully.');

        return redirect(route('portfolios.index'));
    }
}

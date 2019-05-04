<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePictureRequest;
use App\Http\Requests\UpdatePictureRequest;
use App\Models\Picture;
use App\Repositories\PictureRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Flash;
use Response;

class PictureController extends AppBaseController
{
    /** @var  PictureRepository */
    private $pictureRepository;

    public function __construct(PictureRepository $pictureRepo)
    {
        $this->pictureRepository = $pictureRepo;
    }

    /**
     * Display a listing of the Picture.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $pictures = $this->pictureRepository->all();

        return view('pictures.index')
            ->with('pictures', $pictures);
    }

    /**
     * Show the form for creating a new Picture.
     *
     * @return Response
     */
    public function create()
    {
        return view('pictures.create');
    }

    /**
     * Store a newly created Picture in storage.
     *
     * @param CreatePictureRequest $request
     *
     * @return Response
     */
    public function store(CreatePictureRequest $request)
    {
        // Upload img
        if($request->hasFile('cover_images')){
            // Filename with extension
            $filename = $request->file('cover_images')->getClientOriginalName();
            // Path to save file in images folder
            $path = $request->file('cover_images')->storeAs('public/pictures', $filename);
        } else {
            $filename = 'noimage.png';
        }

        // Save file in db
        $pictures = new Picture;
        $pictures->title = $request->input('title');
        $pictures->section = $request->input('section');
        $pictures->cover_images = $filename;

        // Save
        $pictures->save();

        Flash::success('Picture saved successfully.');

        return redirect(route('pictures.index'));
    }

    /**
     * Display the specified Picture.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $picture = $this->pictureRepository->find($id);

        if (empty($picture)) {
            Flash::error('Picture not found');

            return redirect(route('pictures.index'));
        }

        return view('pictures.show')->with('picture', $picture);
    }

    /**
     * Show the form for editing the specified Picture.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $picture = $this->pictureRepository->find($id);

        if (empty($picture)) {
            Flash::error('Picture not found');

            return redirect(route('pictures.index'));
        }

        return view('pictures.edit')->with('picture', $picture);
    }

    /**
     * Update the specified Picture in storage.
     *
     * @param int $id
     * @param UpdatePictureRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePictureRequest $request)
    {
        // Upload img
        if($request->hasFile('cover_images')){
            // Filename with extension
            $filename = $request->file('cover_images')->getClientOriginalName();
            // Path to save file in images folder
            $path = $request->file('cover_images')->storeAs('public/pictures', $filename);
        }

        // Save file in db
        $picture = Picture::find($id);
        $picture->title = $request->input('title');
        $picture->section = $request->input('section');
        if($request->hasFile('cover_images')){
            // if update img old Delete Image
            Storage::delete('public/pictures/'.$picture->cover_images);
            $picture->cover_images = $filename;
        }
        

        if (empty($picture)) {
            Flash::error('Picture not found');

            return redirect(route('pictures.index'));
        }
        
        // Save
        $picture->save();

        Flash::success('Picture updated successfully.');

        return redirect(route('pictures.index'));
    }

    /**
     * Remove the specified Picture from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $picture = $this->pictureRepository->find($id);
        Storage::delete('public/pictures/'.$picture->cover_images);
        if (empty($picture)) {
            Flash::error('Picture not found');

            return redirect(route('pictures.index'));
        }

        $this->pictureRepository->delete($id);

        Flash::success('Picture deleted successfully.');

        return redirect(route('pictures.index'));
    }
}

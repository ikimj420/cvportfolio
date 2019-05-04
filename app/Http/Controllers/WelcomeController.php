<?php

namespace App\Http\Controllers;

use App\Models\Counter;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Picture;
use App\Models\Portfolio;
use App\Models\Skill;
use App\Models\Social;
use App\User;
use GuzzleHttp\Client;

class WelcomeController extends Controller
{
    public function index()
    {
        $users = User::get();
        $pictures_user =Picture::where('title', '=', 2)->first();
        $pictures_info =Picture::where('title', '=', 3)->first();
        $pictures_expirience =Picture::where('title', '=', 4)->first();
        $pictures_quoto =Picture::where('title', '=', 5)->first();
        $pictures_radial =Picture::where('title', '=', 6)->first();
        $socials = Social::get();
        $counters = Counter::get();
        $experiences = Experience::get();
        $portfolios = Portfolio::get();
        $educations = Education::get();
        $skills = Skill::get();
        //get random quotes from Storm api using Guzzle check status send to view
        $client = new Client();
        $res = $client->get('http://quotes.stormconsultancy.co.uk/random.json');
        $results = $res->getBody();
        if($res->getStatusCode() === 200){
            $quote = json_decode($results);
        }

        return view('welcome')
            ->with('users', $users)
            ->with('pictures_user', $pictures_user)
            ->with('pictures_info', $pictures_info)
            ->with('pictures_expirience', $pictures_expirience)
            ->with('pictures_quoto', $pictures_quoto)
            ->with('pictures_radial', $pictures_radial)
            ->with('socials', $socials)
            ->with('counters', $counters)
            ->with('experiences', $experiences)
            ->with('portfolios', $portfolios)
            ->with('educations', $educations)
            ->with('skills', $skills)
            ->with('quote', $quote);
    }
}
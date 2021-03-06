<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\About2;
use App\Models\Feature;
use App\Models\Hero;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Team;
use App\Models\Testimonial;
use App\Models\TitleDescription;
use App\Models\User;
use Illuminate\Http\Request;

class HomeBackController extends Controller
{
    public function index() {
        $users = User::all();
        $titleDescriptions = TitleDescription::all();

        $heros = Hero::all();

        $abouts = About::first();

        $about2s = About2::all();

        $features = Feature::all();

        $teams = Team::all();

        $services = Service::all();

        $testimonials =Testimonial::all();
        
        $portfolio = Portfolio::all();
        return view('pages.homeBack',compact("services",'titleDescriptions', 'heros', 'abouts', 'about2s', 'features', 'teams','testimonials', 'users'));
    }
}

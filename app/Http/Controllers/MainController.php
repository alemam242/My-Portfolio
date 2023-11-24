<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        return view("pages.home");
    }

    public function about(){
        return view("pages.about");
    }

    public function showProjects(){
        $projects=[
            ['name' => 'Weather App','type' => 'Practice Project','thumbnail' => 'weather.png','details' => 'https://github.com/alemam242/weather-app'],
            ['name' => 'Library App','type' => 'Semester Project','thumbnail' => 'library.jpg','details' => 'https://github.com/alemam242/virtual-library'],
            ['name' => 'Quiz App','type' => 'Semester Project','thumbnail' => 'quiz.jpg','details' => 'https://github.com/alemam242/Quiz-app'],
            ['name' => 'Space App','type' => 'Nasa Space App Project','thumbnail' => 'space.png','details' => 'https://github.com/alemam242/Nasa-Space-App'],
            ['name' => 'E-Commerce App','type' => 'Semester Project','thumbnail' => 'ecom.png','details' => 'https://github.com/alemam242/Fashion-Store'],
            ['name' => 'Role Management App','type' => 'Practice Project','thumbnail' => 'role.png','details' => 'https://github.com/alemam242/Role-Management'],
            ['name' => 'Transport Management','type' => 'Semester Project','thumbnail' => 'bus.png','details' => 'https://github.com/alemam242/City-Transport-Management'],
            ['name' => 'Voice Assistant','type' => 'Semester Project','thumbnail' => 'voice.jpeg','details' => 'https://github.com/alemam242/Voice-Assistant-Ai-Project'],
        ];
        return view("pages.projects",compact('projects'));
    }

    public function contact(){
        return view("pages.contact");
    }

    function download(Request $request){
        $path = "assets/raw/My_CV.pdf";
        return response()->download($path);
    }
}

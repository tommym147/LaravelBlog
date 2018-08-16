<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index() {
        $title = 'Welcome to Laravel!';
        // return view('pages/index', compact('title')); one way to pass variable
        //$title = []; $title['one'] = 'Welcome'; view(pages/index, $title); // in index, {{$one}}
        return view('pages/index')->with('title', $title);
    }

    public function about() {
        $title = 'About Us';
        return view('pages/about')->with('title', $title);
    }

    public function services() {
        $data = [
            'title' => 'Services',
            'services' => ['Web Design', 'Programming', 'SEO']
        ];

        return view('pages/services', $data);
    }
}

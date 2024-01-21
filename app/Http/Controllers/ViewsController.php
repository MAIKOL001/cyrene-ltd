<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewsController extends Controller
{
    //
    public function indexs()
    {
        return view('index');
    }

    public function testimonials()
    {
        return view('testimonial');
    }

    public function services()
    {
        return view('service');
    }

    public function teams()
    {
        return view('team');
    }

    public function details()
    {
        return view('detail');
    }

    public function contacts()
    {
        return view('contact');
    }

    public function abouts()
    {
        return view('about');
    }

    public function blogs()
    {
        return view('blog');
    }

    public function managers()
    {
        return View('manager');
    }
}

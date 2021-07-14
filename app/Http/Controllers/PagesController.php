<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Rendering Home Page
     */
    public function index() {
        return view('index');
    }


    /**
     * Rendering About Page
     */
    public function aboutUs() {
        return view('about');
    }


    /**
     * Rendering contact Page
     */
    public function contactUs() {
        return view('contact');
    }

    /**
     * Rendering Services Page
     */
    public function services() {
        return view('services');
    }

    /**
     * Rendering Services Page
     */
    public function ourClients() {
        return view('clients');
    }
}

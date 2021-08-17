<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendContactMail;
use Illuminate\Support\Facades\Mail;
use App\Models\Category;

class PagesController extends Controller
{
    /**
     * Rendering Home Page
     */
    public function index() {

        $categories = Category::where('status' , 1)->get();
        return view('index' , compact('categories'));
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

    /**
     * Send Contact Mail
     */
    public function sendContactDetails() {

        $validation = request()->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'msg' => 'required'
        ]);



        // Send Mail

        Mail::send(new SendContactMail($validation));

        if(Mail::failures()) {

            if(request()->wantsJson())
        {
            return response()->json([
                'error' => 'something went wrong'
            ] , 400);
        }
            session()->flash('cterrs', 'Something went wrong');

            return redirect()
                ->back();
        }


        if(request()->wantsJson())
        {
            return response()->json([
                'success' => 'Form has been submitted. Thanks!'
            ] , 200);
        }

        session()->flash('success', 'Form has been submitted. Thanks!');
        return redirect()
            ->back();


    }



    public function category($slug) {
        $category = Category::with(['categoryList' => function($query) {
            $query->where('status' , 1)->orderBy('id' , 'DESC')->get();
        } ])->where([
            ['slug' , $slug],
            ['status' , 1 ]
        ])->first();
        return view('category' , [
            'category' => $category
        ]);
    }
}

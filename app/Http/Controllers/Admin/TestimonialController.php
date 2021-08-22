<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller {

    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index () {

        $testimonials = Testimonial::orderBy('id' , 'DESC')->get();

        return view('admin.testimonials.index' , [
            'testimonials' => $testimonials
        ]);
    }


    public function create() {
        return view('admin.testimonials.create');
    }

    public function store() {

        request()->validate([
            'title' => 'required',
            'feedback' => 'required',
            'image' => 'mimes:jpeg,jpg,png,gif|required|max:10000'
        ]);

        $testimonial = Testimonial::create([
            'title' => request()->title,
            'designation' => request()->designation,
            'company_name' => request()->company_name,
            'feedback' => request()->feedback,
            'status' =>request()->status == 'on'? 1 : 0,
        ]);

        // Image Processing
        $dir = 'testimonials/' . $testimonial->id;

        if (request()->file('image')) {
            $testimonial->image = request()->file('image')->store($dir);
            $testimonial->save();
        }

        if($testimonial) {
            session()->flash('success' , 'Gallery Added.');
            return redirect()->route('admin.testimonials.index');
        }

        session()->flash('error' , 'Something went wrong!');
        return redirect()->back();

    }

    // Edit
    public function edit($id) {

        $testimonial = Testimonial::findOrFail($id);

        return view('admin.testimonials.edit' , [
            'testimonial' => $testimonial
        ]);

    }

    // Update
    public function update($id) {

        request()->validate([
            'title' => 'required',
            'feedback' => 'required',
            'image' => 'mimes:jpeg,jpg,png,gif|sometimes|max:10000'
        ]);


        $testimonial = Testimonial::findOrFail($id);

        $testimonial->title = request()->title;
        $testimonial->feedback = request()->feedback;
        $testimonial->status = request()->status == 'on'? 1 : 0;


        // Image Processing
        $dir = 'testimonials/' . $testimonial->id;

        if (request()->file('image')) {
            $testimonial->image = request()->file('image')->store($dir);

        }


        if($testimonial->save()) {
            session()->flash('success' , 'Testimonial Updated.');
            return redirect()->route('admin.testimonials.index');
        }

        session()->flash('error' , 'Something went wrong.');
        return redirect()->back();
    }


    public function delete($id) {

        $testimonial = Testimonial::findOrFail($id);

        Storage::delete($testimonial->image);

        $testimonial->delete();


        session()->flash('success' , 'Testimonial Deleted');

        return redirect()->back();

    }

}

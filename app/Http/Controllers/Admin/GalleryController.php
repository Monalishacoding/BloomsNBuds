<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller {

    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index () {

        $galleries = Gallery::orderBy('id' , 'DESC')->get();

        return view('admin.galleries.index' , [
            'galleries' => $galleries
        ]);
    }


    public function create() {
        return view('admin.galleries.create');
    }

    public function store() {

        request()->validate([
            'title' => 'required',
            'image' => 'mimes:jpeg,jpg,png,gif|required|max:10000'
        ]);

        $gallery = Gallery::create([
            'title' => request()->title,
            'short_description' => request()->short_description,
            'status' =>request()->status == 'on'? 1 : 0,
            'is_featured' =>request()->is_featured == 'on'? 1 : 0,
            'slug' => request()->title
        ]);

        // Image Processing
        $dir = 'gallery/' . $gallery->id;

        if (request()->file('image')) {
            $gallery->image = request()->file('image')->store($dir);
            $gallery->save();
        }

        if($gallery) {
            session()->flash('success' , 'Gallery Added.');
            return redirect()->route('admin.galleries.index');
        }

        session()->flash('error' , 'Something went wrong!');
        return redirect()->back();

    }

    // Edit
    public function edit($id) {

        $gallery = Gallery::findOrFail($id);

        return view('admin.galleries.edit' , [
            'gallery' => $gallery
        ]);

    }

    // Update
    public function update($id) {

        request()->validate([
            'title' => 'required|unique:galleries,title,'.$id,
            'image' => 'mimes:jpeg,jpg,png,gif|sometimes|max:10000'
        ]);


        $gallery = Gallery::findOrFail($id);

        $gallery->title = request()->title;
        $gallery->slug = request()->title;
        $gallery->short_description = request()->short_description;
        $gallery->status = request()->status == 'on'? 1 : 0;
        $gallery->is_featured = request()->is_featured == 'on'? 1 : 0;

        // Image Processing
        $dir = 'gallery/' . $gallery->id;

        if (request()->file('image')) {
            $gallery->image = request()->file('image')->store($dir);

        }


        if($gallery->save()) {
            session()->flash('success' , 'Gallery Updated.');
            return redirect()->route('admin.galleries.index');
        }

        session()->flash('error' , 'Something went wrong.');
        return redirect()->back();
    }


    public function delete($id) {

        $gallery = Gallery::findOrFail($id);

        Storage::delete($gallery->image);

        $gallery->delete();


        session()->flash('success' , 'Gallery Deleted');

        return redirect()->back();

    }

}

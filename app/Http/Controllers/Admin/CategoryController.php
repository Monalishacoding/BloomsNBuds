<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller {

    public function __construct()
    {

    }

    public function index () {

        $categories = Category::orderBy('id' , 'DESC')->get();

        return view('admin.categories.index' , [
            'categories' => $categories
        ]);
    }


    public function create() {
        return view('admin.categories.create');
    }

    public function store() {

        request()->validate([
            'title' => 'required',
            'short_description' => 'required',
            'image' => 'mimes:jpeg,jpg,png,gif|required|max:10000'
        ]);

        $category = Category::create([
            'title' => request()->title,
            'short_description' => request()->short_description,
            'status' =>request()->status == 'on'? 1 : 0,
            'slug' => request()->title
        ]);

        // Image Processing
        $dir = 'category/' . $category->id;

        if (request()->file('image')) {
            $category->image = request()->file('image')->store($dir);
            $category->save();
        }

        if($category) {
            session()->flash('success' , 'Category Added.');
            return redirect()->route('admin.categories.index');
        }

        session()->flash('error' , 'Something went wrong!');
        return redirect()->back();

    }

    // Edit
    public function edit($id) {

        $category = Category::findOrFail($id);

        return view('admin.categories.edit' , [
            'category' => $category
        ]);

    }

    // Update
    public function update($id) {

        request()->validate([
            'title' => 'required|unique:categories,title,'.$id,
            'short_description' => 'required',
            'image' => 'mimes:jpeg,jpg,png,gif|sometimes|max:10000'
        ]);


        $category = Category::findOrFail($id);

        $category->title = request()->title;
        $category->short_description = request()->short_description;

        // Image Processing
        $dir = 'category/' . $category->id;

        if (request()->file('image')) {
            $category->image = request()->file('image')->store($dir);

        }


        if($category->save()) {
            session()->flash('success' , 'Category Updated.');
            return redirect()->route('admin.categories.index');
        }

        session()->flash('error' , 'Something went wrong.');
        return redirect()->back();
    }


    public function delete($id) {

        $category = Category::findOrFail($id);

        Storage::delete($category->image);

        $category->delete();


        session()->flash('success' , 'Category Deleted');

        return redirect()->back();

    }

}

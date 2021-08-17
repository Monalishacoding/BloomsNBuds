<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\CategoryList;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class CategoryListController extends Controller {

    public function __construct()
    {}

    public function index () {

        $categoryList = CategoryList::with('category')->get();


        return view('admin.category-list.index' , [
            'categorylists' => $categoryList
        ]);
    }


    public function create()
    {

        $categories = Category::all();

        return view('admin.category-list.create' , compact('categories'));

    }


    public function store() {

        request()->validate([
            'title' => 'required',
            'image' => 'mimes:jpeg,jpg,png,gif|required|max:10000',
            'category_id' => 'required|exists:categories,id',
        ]);


        $categoryList = CategoryList::create([
            'title' => request()->title,
            'category_id' => request()->category_id,
            'status' => request()->status == 'on' ? 1 : 0,
            'description' => request()->description
        ]);

        // Image Processing
        $dir = 'categoryList/' . $categoryList->id;

        if (request()->file('image')) {
            $categoryList->image = request()->file('image')->store($dir);
            $categoryList->save();
        }


        if($categoryList) {
            session()->flash('success' , 'Category List Added.');
            return redirect()->route('admin.categories-list.index');
        }

        session()->flash('error' , 'Something went wrong!');
        return redirect()->back();

    }


      // Edit
      public function edit($id) {

        $categorylist = CategoryList::findOrFail($id);
        $categories = Category::all();

        return view('admin.category-list.edit' , [
            'categorylist' => $categorylist,
            'categories' => $categories

        ]);

    }


      // Update
      public function update($id) {

        request()->validate([
            'title' => 'required',
            'image' => 'mimes:jpeg,jpg,png,gif|sometimes|max:10000',
            'category_id' => 'required|exists:categories,id',
        ]);


        $category = CategoryList::findOrFail($id);

        $category->title = request()->title;
        $category->description = request()->description;
        $category->status =  request()->status == 'on' ? 1 : 0;

        // Image Processing
        $dir = 'categoryList/' . $category->id;

        if (request()->file('image')) {
            $category->image = request()->file('image')->store($dir);

        }


        if($category->save()) {
            session()->flash('success' , 'Category List Updated.');
            return redirect()->route('admin.categories-list.index');
        }

        session()->flash('error' , 'Something went wrong.');
        return redirect()->back();
    }


    public function delete($id) {

        $category = CategoryList::findOrFail($id);

        Storage::delete($category->image);

        $category->delete();


        session()->flash('success' , 'Category Deleted');

        return redirect()->back();

    }

}

<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function index ()
    {
     return view('admin.sub-category.index',['categories' => Category::all()]);
    }

    public function create (Request $request )
    {

     SubCategory::newSubCategory($request);

     return back()->with('message', 'Sub category info create successfully.');

 }

    public function manage ()
    {
     return view('admin.sub-category.manage',['sub_categories' => SubCategory::all()]);
    }
    public function edit ($id)
    {
     return view('admin.sub-category.edit',[
        'categories'   => Category::all(),
        'sub_category' => SubCategory::find($id),

    ]);


    }
    public function Update (Request $request, $id)
    {
     SubCategory::UpdateSubCategory($request, $id);
     return redirect('/category/manage')->with('message', 'Sub category info update successfully.');
    }

    public function delete($id)
    {
     SUbCategory::deleteSubCategory($id);
     return redirect('/category/manage')->with('message', 'Sub category info delete successfully.');
    }
}

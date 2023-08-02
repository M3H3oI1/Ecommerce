<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\OtherImage;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\Unit;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $product;
    public function index ()
    {
     return view('admin.product.index',[
        'categories'        => Category::all(),
        'Sub_categories'    =>SubCategory::all(),
        'brands'            => Brand::all(),
        'units'             => Unit::all(),
     ]);
    }

   // ;

    public function getSubcategoryByCategory(){

        return response()->json(SubCategory::where('category_id',$_GET['id'])->get());
    }


    public function create (Request $request )
    {


     $this->product = Product::newProduct($request);
     
     OtherImage::newOtherImage($request, $this->product->id);

     return back()->with('message', 'Product info create successfully.');

 }

    public function manage ()
    {
     return view('admin.product.manage',['products' => Product::all()]);
    }
    public function edit ($id)
    {
     return view('admin.product.edit',['product' => Product::find($id) ]);
    }
    public function Update (Request $request, $id)
    {
        Product::UpdateProduct($request, $id);
     return redirect('/product/manage')->with('message', 'Product info update successfully.');
    }

    public function delete($id)
    {
        Product::deleteProduct($id);
     return redirect('/product/manage')->with('message', 'Product info delete successfully.');
    }
}

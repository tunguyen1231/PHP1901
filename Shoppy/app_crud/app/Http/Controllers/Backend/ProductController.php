<?php

namespace App\Http\Controllers\Backend;

use App\Models\Backend\ProductModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //
    public function index(){
        $items = DB::table('products')->paginate(4);
        $data = array();
        $data['products'] = $items;
        return view('admin.contents.index', $data);
       // return view('admin.contents.index');
    }
    //
    public function create(){
        return view('admin.contents.create');
    }

    public function store(Request $request) {

        $validatedData = $request->validate([
            'product_name' => 'required|unique:products|max:255|min:5',
            'product_slug' => 'required',
            'product_image' => 'required',
            'product_description' => 'required',
        ]);
        $inputs = $request->all();
        $productModel = new ProductModel();

        $productModel->product_name = isset($inputs["product_name"]) ? $inputs["product_name"] : "";
        $productModel->product_slug = isset($inputs["product_slug"]) ? $inputs["product_slug"] : "";
        $productModel->product_image = isset($inputs["product_image"]) ? $inputs["product_image"] : "";
        $productModel->product_description = isset($inputs["product_description"]) ? $inputs["product_description"] : "";

        $productModel->save();

        return redirect('admin/products');

    }
    //
    public function edit($id){
        $product = ProductModel::find($id);
        /*
         * Dữ liệu truyền xuống view
         */
        $data = array();
        $data['product'] = $product;
        return view('admin.contents.edit',$data);
       // return view('admin.contents.edit');
    }

    public function update(Request $request,$id){
        $validatedData = $request->validate([
            'product_name' => 'required|unique:products|max:255|min:5',
            'product_slug' => 'required',
            'product_image' => 'required',
            'product_description' => 'required',
        ]);
        $inputs = $request->all();

        $productModel = ProductModel::find($id);

        $productModel->product_name = isset($inputs["product_name"]) ? $inputs["product_name"] : "";
        $productModel->product_slug = isset($inputs["product_slug"]) ? $inputs["product_slug"] : "";
        $productModel->product_image = isset($inputs["product_image"]) ? $inputs["product_image"] : "";
        $productModel->product_description = isset($inputs["product_description"]) ? $inputs["product_description"] : "";

        $productModel->save();

        return redirect('admin/products');
    }
    //
    public function delete($id) {
        $product = ProductModel::find($id);
        /*
         * Dữ liệu truyền xuống view
         */
        $data = array();
        $data['product'] = $product;
        return view('admin.contents.delete',$data);
        //return view('admin.contents.delete');
    }
    public function destroy($id) {
        $productModel = ProductModel::find($id);
        $productModel->delete();
        return redirect('admin/products');
    }
}

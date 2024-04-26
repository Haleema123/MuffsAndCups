<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AdminDashboardController extends Controller
{
    
    public function adminDashboardFunction()
    {
        return redirect('/adminDashboard');
    }
    public function manageProducts()
    {
        return redirect('/manageProducts');
    }
    public function addproductsFunction()
    {
        return redirect('/addproduct');
    }
    public function updateproductFunction()
    {
        return redirect('/updateproduct');
    }


    public function addproducts(Request $request)
    {
        $product_name = $request->input('productname');
        $product_price = $request->input('productprice');
        $product_details = $request->input('productdetails');
       

        $pic = $request->file('filename');
        $picName = $pic->getClientOriginalName();
        $picType = $pic->getClientOriginalExtension();
        $picSize = $pic->getSize();

        $pic->move('uploads', $picName);
        $destination = 'uploads/' . $picName;

        DB::unprepared("insert into products (product_name, product_price, product_details, file_name) values ('$product_name','$product_price','$product_details','$destination')");
        return redirect('/manageProducts'); 
    }

    function viewProducts()
    {
        $addproducts = DB::select('select * from products');
        return view('/manageProducts', ["addproducts" => $addproducts]);  //// was manageProducts
    }

    public function deleteProduct($id)
    {
        DB::table('products')->where('id', '=', $id)->delete();
        return redirect('/manageProducts');
    }

    public function singleProduct($id)
    {
        $selectedproduct = DB::table('id')->where('id', '=', $id)->first();
        return view('manageProducts', ["selectedproduct" => $selectedproduct]);
    }

    public function updateProductInfo(Request $request, $id)
    {
        $product_name = $request->input('productname');
        $product_price = $request->input('productprice');
        $product_details = $request->input('productdetails');

        $pic = $request->file('filename');
        $picName = $pic->getClientOriginalName();
        
        $pic->move('uploads', $picName);
        $destination = 'uploads/' . $picName;

        DB::table('products')->where('id', '=', $id)->update(['product_name'=>$product_name, 'product_price'=>$product_price, 'product_details'=>$product_details, 'file_name'=>$destination]);
        return redirect('/manageProducts');


    }
     // search using ajax

     public function search(Request $request)
     {
 
         if($request->ajax()) {
 
             $output = '';
 
             $products = DB::table('products')->where('product_name', 'LIKE', '%'.$request->search.'%')
                             ->orWhere('product_price', 'LIKE', '%'.$request->search.'%')
                             ->get();
 
             if($products) {
 
                 foreach($products as $product) {
 
                     $output .=
                     '<div >
                         <img class="card-img-top" src="'.$product->file_name.'" alt="Cake image">
                         <h5><b>'.$product->product_name.'</b></h5>
                         <h5>Rs'.$product->product_price.'</h5>
                     </div><br>
                   ';
 
                }
 
                return response()->json($output);
             }

         }
 
         return view('Search');
 
    }
}

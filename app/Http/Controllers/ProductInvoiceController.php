<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class ProductInvoiceController extends Controller
{
   public function index()
   {
   
   }

    public function view($prod_name)
   {
if(product::where('prod_name',$prod_name)->exists())
{
$product = product::where('prod_name',$prod_name)->first();
return view('product_buy.confirmation', compact('product'));

   }
else{
   return redirect('/')->with('status', "Link was broken");
}
}
}
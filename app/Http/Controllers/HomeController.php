<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\product;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.home');
    }
    public function show()
    //for product manage
    {
         $product = product::all();
       
        return view('admin.prod-manage', compact('product'));

    }   

      public function display()
    {
        //for main view
         $product = product::all();
       
        return view('welcome', compact('product'));
        
    }   

    public function store(Request $request)
    {
          $request->validate([
        'pro_name' => 'required',
        'imge'=> 'required',
        'imge.*' => 'image|mimes:jpeg,jpg,png,svg,gif|max:2048',
        'price' => 'required',
        'des' => 'required',
     
    ]);
    
      $product = new product();
    
    $product->prod_name = $request->input('pro_name');
     $product->price = $request->input('price');
      $product->description = $request->input('des');
      $product->weight = $request->input('weight');
     

      if($request->hasfile('imge'))
      {
        $file = $request->file('imge');
        $extension = $file->getClientOriginalName();
        $filename = time().'.'.$extension;
        $file->move('storage/images/',$filename);
        $product->prod_img = $filename;
      }
    $product->save();

    return redirect()->back()->with('status','successfull added');
}



}

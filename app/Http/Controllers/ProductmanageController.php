<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\product;
use Illuminate\Support\Facades\File;


class ProductmanageController extends Controller
{

    //for delete
    public function destroy($id)
    {
            $product = product::find($id);

            $destination = 'storage/images/'.$product->prod_img;
            if(File::exists($destination))
            {
                File::delete($destination);
            }

            $product->delete();

            return redirect('/pro-manage');
    }

   
   public function edit($id)
    {
        //for edit

            $product = product::find($id);
            return view('admin.edit', compact('product'));

    }
    
    public function update(Request $request, $id)
    {
        $product = product::find($id);
         $product->prod_name = $request->input('pro_name');
     $product->price = $request->input('price');
     $product->weight = $request->input('weight');
      $product->description = $request->input('des');

      $destination = 'storage/images/'.$product->prod_img;

      if(File::exists($destination))
            {
                File::delete($destination);
            }
     

      if($request->hasfile('imge'))
      {
        $destination = 'storage/images/'.$product->prod_img;
        $file = $request->file('imge');
        $extension = $file->getClientOriginalName();
        $filename = time().'.'.$extension;
        $file->move('storage/images/',$filename);
        $product->prod_img = $filename;
      }
    $product->update();

    return redirect()->back()->with('status','updated');
    }

    product function updatepri(Request $request)
    {
        $id = $request->input('id');
        $prod_qty = $request->input('qua');

        if(Auth::check())
        {
            $product = product::find($id)->first();
            
           $product->quantity = $prod_qty;
           $product->update();
           return response()->json(['status'=>"Quantity update"])
        }
    }
    
}

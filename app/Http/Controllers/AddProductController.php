<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubMenuItem;
use Illuminate\Support\Facades\Storage;

use App\Models\Product;

class AddProductController extends Controller
{
    public function index()
    {
        $SubMenuItems = SubMenuItem::where('status', 'enable')->get();
        return view('admin.addproduct', compact('SubMenuItems'));
    }

    public function postData(Request $request)
    {
        $input = $request->all();
        $hobby = $input['cat'];
        $input['cat'] = implode(',', $hobby);
        $file = $request->file('gallery');
		$fileName = time() . '.' . $file->getClientOriginalExtension();
		// $file->storeAs('/img', $fileName);
        $destinationPath = public_path().'/image' ;
        $file->move($destinationPath,$fileName);
        $empData = ['name' => $request->name, 'price' => $request->price, 'category' => $request->category, 'description' => $request->description, 'category_id' => $request->category_id, 'gallery' => $fileName,'cat'=> $input['cat']];

        Product::create($empData);

        return redirect('showproduct');

        // dd('Post created successfully.');
    }

    public function showProduct()
    {

        $data = Product::all();
        return view('admin.showproduct',compact('data'));
    }

    public function edit($id)
    {
        $SubMenuItems = SubMenuItem::where('status', 'enable')->get();
        $product = Product::find($id);
        return view('admin.editproduct',compact('product','SubMenuItems'));
    }

    public function update(Request $request,$id)
    {

		$emp = Product::find($request->id);
        // $fileName = '';
        $filename=$emp->gallery;
        $input = $request->all();
        $hobby = $input['cat'];
        $emp['cat'] = implode(',', $hobby);
		// if ($request->hasFile('gallery')) {
		// 	$file = $request->file('gallery');
		// 	$fileName = time() . '.' . $file->getClientOriginalExtension();
		// 	// $file->storeAs('public/img', $fileName);
        //     $destinationPath = public_path().'/image' ;
        //     $file->move($destinationPath,$fileName);
		// 	if ($emp->gallery) {
		// 		Storage::delete($fileName . $emp->gallery);
		// 	}
        //     else {
        //         $fileName = $request->emp_avatar;
        //     }
		// }

        $emp->name = $request->name;
        $emp->price = $request->price;
        $emp->category = $request->category;
        $emp->description = $request->description;
        $emp->category_id = $request->category_id;
        // $emp->gallery = $filename;
        $emp->cat = $emp['cat'];


		// $empData = ['name' => $request->name, 'price' => $request->price, 'category' => $request->category, 'description' => $request->description, 'category_id' => $request->category_id, 'gallery' => $fileName, 'cat'=>$emp(['cat'])];
        $emp->save();
        return redirect('showproduct');
    }

    public function delete(Request $request)
    {
        $id = $request->id;
		$emp = Product::find($id);

			Product::destroy($id);
            return redirect()->back();
    }
}

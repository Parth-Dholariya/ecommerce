<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\SubMenuItem;
use Illuminate\Support\Facades\Storage;

class EmployeeController extends Controller {

	// set index page view
	public function index() {
        $SubMenuItems = SubMenuItem::where('status','enable')->get();
		return view('admin.table',compact('SubMenuItems'));
	}

	// handle fetch all eamployees ajax request
	public function fetchAll() {
		$emps = Product::all();
		$output = '';
		if ($emps->count() > 0) {
			$output .= '<table class="table table-striped table-sm text-center align-middle">
            <thead>
              <tr>
                <th>ID</th>
                <th>Gallery</th>
                <th>Name</th>
                <th>url</th>
                <th>Price</th>
                <th>Category</th>
                <th>Description</th>
                <th>category_id</th>
                <th>size</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>';
			foreach ($emps as $emp) {
				$output .= '<tr>
                <td>' . $emp->id . '</td>
                <td><img src="storage/img/' . $emp->gallery . '" width="50" class="img-thumbnail rounded-circle"></td>
                <td>' . $emp->name .  '</td>
                <td>' . $emp->url .  '</td>
                <td>' . $emp->price . '</td>
                <td>' . $emp->category . '</td>
                <td>' . $emp->description . '</td>
                <td>' . $emp->subcategory->name . '</td>
                <td>
                  <a href="#" id="' . $emp->id . '" class="text-success mx-1 editIcon" data-bs-toggle="modal" data-bs-target="#editEmployeeModal"><i class="bi-pencil-square h4"></i></a>

                  <a href="#" id="' . $emp->id . '" class="text-danger mx-1 deleteIcon"><i class="bi-trash h4"></i></a>
                </td>
              </tr>';
			}
			$output .= '</tbody></table>';
			echo $output;
		} else {
			echo '<h1 class="text-center text-secondary my-5">No record present in the database!</h1>';
		}
	}

	// handle insert a new employee ajax request
	public function store(Request $request) {
        $input = $request->all();
        $hobby = $input['cat'];
        $input['cat'] = implode(',', $hobby);

		$file = $request->file('gallery');
		$fileName = time() . '.' . $file->getClientOriginalExtension();
		$file->storeAs('public/img', $fileName);

		$empData = ['name' => $request->name, 'price' => $request->price, 'category' => $request->category, 'description' => $request->description, 'category_id' => $request->category_id, 'gallery' => $fileName,'cat'=> $input['cat']];
		Product::create($empData);
		return response()->json([
			'status' => 200,
		]);
	}

	// handle edit an employee ajax request
	public function edit(Request $request) {
		$id = $request->id;
		$emp = Product::find($id);
		return response()->json($emp);
	}

	// handle update an employee ajax request
	public function update(Request $request) {
		$fileName = '';
		$emp = Product::find($request->emp_id);
		if ($request->hasFile('gallery')) {
			$file = $request->file('gallery');
			$fileName = time() . '.' . $file->getClientOriginalExtension();
			$file->storeAs('public/img', $fileName);
			if ($emp->gallery) {
				Storage::delete('public/img/' . $emp->gallery);
			}
		} else {
			$fileName = $request->emp_avatar;
		}

		$empData = ['name' => $request->name, 'price' => $request->price, 'category' => $request->category, 'description' => $request->description, 'category_id' => $request->category_id, 'gallery' => $fileName, 'size'=>json_encode(['size'])];

		$emp->update($empData);
		return response()->json([
			'status' => 200,
		]);
	}

	// handle delete an employee ajax request
	public function delete(Request $request) {
		$id = $request->id;
		$emp = Product::find($id);
		if (Storage::delete('public/img/' . $emp->gallery)) {
			Product::destroy($id);
		}
	}
}

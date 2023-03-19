<?php

namespace App\Http\Controllers;

use App\Models\MenuItem;
use Illuminate\Http\Request;

class MenuItemController extends Controller
{
    public function menu()
    {
        return view('admin.menu');
    }

    public function store(Request $request)
    {
        MenuItem::create([
            'name' =>$request->name,
            'link' =>$request->link,
            'status' => $request->status,
        ]);
        return redirect()->back();
    }

}

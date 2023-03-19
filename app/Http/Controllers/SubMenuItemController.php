<?php

namespace App\Http\Controllers;

use App\Models\SubMenuItem;
use App\Models\MenuItem;
use Illuminate\Http\Request;

class SubMenuItemController extends Controller
{
    public function submenu()
    {
        $menuItems = MenuItem::where('status','enable')->get();
        return view('admin.submenu',compact('menuItems'));
    }
    public function store(Request $request)
    {
        SubMenuItem::create([
            'name' =>$request->name,
            'link' =>$request->link,
            'status' => $request->status,
            'menu_item_id' => $request->menu_item_id,
        ]);
        return redirect()->back();
    }
}

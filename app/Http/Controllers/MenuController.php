<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    // Create a Menu
    public function createMenu(Request $request) {
        $menu = new Menu();
        $menu->branch = $request->input('branch');
        $menu->price = $request->input('price');
        $menu->quantity = $request->input('quantity');
        $menu->save();
        return response()->json($menu);
    }

    // Get all Menus
    public function getAllMenu(Request $request) {
        $menus = Menu::all();
        return response()->json($menus);
    }

    // Get country by ID
    public function getMenuById(Request $request, $id) {
        $menu = Menu::find($id);
        return response()->json($menu);
    }
    
    // Update country by ID
    public function updateMenuById(Request $request, $id) {
        $menu = Country::find($id);
        $menu->branch = $request->input('branch');
        $menu->price = $request->input('price');
        $menu->quantity = $request->input('quantity');
        $menu->save();
        return response()->json($country);
    }
    public function deleteMenuById(Request $request, $id) {
        $menu = Menu::find($id)->delete();
        return response()->json($menu);
    }
}
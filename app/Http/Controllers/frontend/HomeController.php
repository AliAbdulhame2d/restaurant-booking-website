<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Category;
use App\Models\Table;

class HomeController extends Controller
{
    public function index() {

        $menus = Menu::all();
        $featureMenus = Menu::latest()->take(3)->get();
        $categories = Category::with('menus')->get();
        $tables = Table::all();

        return view('welcome', compact('menus', 'featureMenus', 'categories', 'tables'));
    }
}

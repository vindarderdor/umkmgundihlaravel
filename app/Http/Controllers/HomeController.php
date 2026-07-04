<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Umkm;
use App\Models\Product;
use App\Models\Category;
use App\Models\News;

class HomeController extends Controller
{
    public function index()
    {
        $umkmCount = Umkm::count();
        $productCount = Product::count();
        $categoryCount = Category::count();
        $newsCount = News::count();
        
        $latestUmkms = Umkm::with('category')->latest()->take(3)->get();
        
        return view('pages.home', compact('umkmCount', 'productCount', 'categoryCount', 'newsCount', 'latestUmkms'));
    }
}

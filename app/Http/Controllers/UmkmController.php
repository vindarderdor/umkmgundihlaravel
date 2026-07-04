<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Umkm;

class UmkmController extends Controller
{
    public function index(Request $request)
    {
        $query = Umkm::with('category');
        
        if ($search = $request->input('search')) {
            $query->where('name', 'like', "%{$search}%")
                  ->orWhere('description', 'like', "%{$search}%");
        }
        
        $umkms = $query->paginate(9)->withQueryString();
        
        return view('pages.umkm.index', compact('umkms'));
    }

    public function show($slug)
    {
        $umkm = Umkm::with(['category', 'products.category'])->where('slug', $slug)->firstOrFail();
        
        return view('pages.umkm.show', compact('umkm'));
    }
}

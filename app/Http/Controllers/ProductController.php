<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Product;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
{
    public function create(Request $request)
    {
        if ($request->user()->cannot('create', Product::class)) {
            Log::debug('test');
            abort(403);
        }
        $validated = $request->validate([
            'name' => 'required|string|max:30',
            'price' => 'required|numeric|lt:500|gt:0'
        ]);
        $product = Product::create($validated);
        return $this->show($product->id);
    }

    //
    public function show(string $id)
    {
        $product = Product::find($id);
        return Inertia::render('Product/Show', [
            'product' => $product
        ]);
    }
}

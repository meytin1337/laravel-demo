<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Shop;
use App\Http\Requests\CreateShopRequest;
use Illuminate\Support\Facades\Log;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(CreateShopRequest $request)
    {
        //
        $validated = $request->validated();
        $shop = Shop::create([
            'name' => $validated['name'],
            'postal_code' => $validated['postalCode'],
            'country' => $validated['country'],
            'city' => $validated['city'],
            'street' => $validated['street']
        ]);
        return $this->show($shop->id);
    }

    public function getCreate()
    {
        return Inertia::render('Shop/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $shop = Shop::find($id);
        return Inertia::render('Shop/Show', [
            'shop' => $shop
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

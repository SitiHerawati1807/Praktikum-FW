<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("layouts-percobaan.app");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("master-data.suplier-master.create-supplier");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi_data = $request->validate([
            'supplier_name' => 'required|string|max:50',
            'supplier_address' => 'required|string|max:255',
            'phone' => 'required|string|max:50',
            'comment' => 'required|string|max:255',
        ]);

        // Proses simpan data kedalam database
        Supplier::create($validasi_data);

        return redirect()->back()->with('success', 'Supplier created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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

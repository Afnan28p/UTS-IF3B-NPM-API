<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barang = Barang::all();
        $data['message'] = true;
        $data['result'] = $barang;
        return response()->json($data, Response::HTTP_OK);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'nama' => 'required',
            'tanggal_pembelian' => 'required|date',
            'harga' => 'required',
        ]);

        $result = Barang::create($validate);//simpan ke tabel fakultas
        if ($result) {
            $data['success'] = true;
            $data['message'] = 'Data Barang Berhasil Disimpan';
            $data['result'] = $result;
            return response()->json($data, Response::HTTP_CREATED);
    }
    }

    /**
     * Display the specified resource.
     */
    public function show(barang $barang)
    {
        $barang = Barang::find($barang);
        $data['success'] = true;
        $data['message'] = "Detail data Devices";
        $data['result'] = $barang;
        return response()->json($data, Response::HTTP_OK);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(barang $barang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, barang $barang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(barang $barang)
    {
        //
    }
}

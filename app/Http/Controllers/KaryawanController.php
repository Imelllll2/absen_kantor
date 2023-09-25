<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // asc order  by name
        $data["data"] = Karyawan::all()->sortBy("nama");
        return view('karyawan.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('karyawan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "nama" => "required",
            "alamat" => "required",
            "no_hp" => "required",
        ]);
      $data =  Karyawan::create([
            "nama" => $request->nama,
            "alamat" => $request->alamat,
            "telepon" => $request->no_hp,
      
        ]);
        
        return redirect()->route("karyawan")->with("success", "Berhasil menambahkan data karyawan");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data["data"] = Karyawan::findOrFail($id);
        $data['absen'] = $data["data"]->absensi;
        $data["count"] = $data["data"]->absensi->count();
        return view('karyawan.show', $data);
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
        $validated = $request->validate([
            "nama" => "required",
            "alamat" => "required",
            "no_hp" => "required",
        ]);
        $data = Karyawan::findOrFail($id);
        $data->update($validated);
        return redirect()->route("karyawan")->with("success", "Berhasil mengubah data karyawan");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Karyawan::findOrFail($id);
        $data->delete();
        return redirect()->route("karyawan")->with("success", "Berhasil menghapus data karyawan");
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Models\Karyawan;
use DateTime;
use Illuminate\Http\Request;
use Carbon\Carbon;
use function Termwind\render;

class AbsensiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function home()
    {
        // soty by created at
        $data["data"] = Absensi::all()->sortByDesc("created_at");

        return view('home', $data) ;
    }
    public function index()
    {
        $data["data"] = Absensi::all()->sortByDesc("created_at");
        return view('absensi.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      $data['data'] = Karyawan::all()->sortByDesc("created_at");
        return view('absensi.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $validate = $request->validate([
            "karyawan_id" => "required",
 
        ]);
          $data = Absensi::create([
            "karyawan_id" => $request->karyawan_id,
            // tanggal fate time now
          
  
        ]);
       
        return redirect()->back()->with("success", "Berhasil menambahkan data absensi");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Absensi::findOrFail($id);
        return view('absensi.show', compact('data'));

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
       

    /**
     * Remove the specified resource from storage.
     */
    }
    public function destroy(Request $request,$id)  {
        $data = Absensi::findOrFail($id);
        $data->delete();
        return redirect()->route("absensi")->with("success", "Berhasil menghapus data absensi");
    }
}

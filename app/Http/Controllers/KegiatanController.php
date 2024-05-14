<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function kegiatan()
    {
    $kegiatan = Kegiatan::orderBy('created_at' , 'DESC')->get();
    return view("admin.kegiatan", compact('kegiatan'));      }

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
    public function store (Request $request)
    {
            // Menggunakan dd untuk mencetak seluruh data yang dikirim dalam permintaan HTTP

            $request->validate([
                'nama_kegiatan' => 'required',
                'date' => 'required',
                'foto' => 'required|image|mimes:jpeg,jpg,png,svg',
            ]);
    
            $image = $request->file('foto');
            $imgName = rand(). '.' .  $image->extension();
            $path = public_path('assets/image/');
            $image->move($path, $imgName);
    
            Kegiatan::create([
                'nama_kegiatan' => $request->nama_kegiatan,
                'date' => $request->date,
                'foto' => $imgName,
    
            ]);
    
            return redirect()->back()->with('sucessAdd', 'Berhasil menambahkan data baru!');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Kegiatan $kegiatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
     public function edit($id)
    {
        $kegiatan = Kegiatan::where('id', '=', $id)->firstOrFail();
        return view('admin.editkegiatan', compact('kegiatan'));
    }


    /**
     * Update the specified resource in storage.
     */
   public function update(Request $request, $id)
    {
        $request->validate([
            'nama_kegiatan' => 'required',
            'date' => 'required',

        ]);

        if(is_null($request->file('foto'))) {
            $imgName = Kegiatan::where('id', '=', $id)->value('foto');
        }else{
            $image = $request->file('foto');
            $imgName = rand(). '.' .  $image->extension();
            $path = public_path('assets/image/');
            $image->move($path, $imgName);
        }
        // cari dlu datanya pke where, baru ubah
        kegiatan::where('id', '=', $id)->update([
            'nama_kegiatan' => $request->nama_kegiatan,
            'date' => $request->date,
            'foto' => $imgName,

            

            
        ]);
        return redirect()->route('kegiatan')->with('successUpdate', 'Berhasil mengubah data!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
    Kegiatan::where('id', '=', $id)->delete();
    return redirect()->back()->with('successDelete', 'Berhasil menghapus data!');
    
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\InfoBeasiswa;
use App\Http\Requests\infoBeasiswaValidation;

class InfoBeasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $info = InfoBeasiswa::all();
        return view('info-beasiswa.index',compact('info'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tambah = InfoBeasiswa::create([
            'nama_beasiswa'=>$request->nama,
            'tgl_mulai'=>$request->tgl_mulai,
            'tgl_berakhir'=>$request->tgl_akhir,
            'status'=>$request->status
        ]);
        if ($tambah) {
            return redirect()->route('info-beasiswa.index')->with('success','Data Berhasil Ditambahkan');

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = InfoBeasiswa::where('id',$id)->first();
        return view('info-beasiswa.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(infoBeasiswaValidation $request, $id)
    {
        $ubah = InfoBeasiswa::where('id',$id)->update([
            'nama_beasiswa' => $request->nama_beasiswa,
            'tgl_mulai'=>$request->tgl_mulai,
            'tgl_berakhir'=>$request->tgl_akhir,
            'status'=>$request->status
        ]);

        if ($ubah) {
            return redirect()->route('info-beasiswa.index')->with('success','Data Berhasil Diubah');

        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus = InfoBeasiswa::where('id',$id)->delete();
        if ($hapus) {
            return redirect()->route('info-beasiswa.index')->with('success','Data Berhasil Dihapus');

        }
    }
}

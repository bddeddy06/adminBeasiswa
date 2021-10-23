<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\jurusan;
use App\Http\Requests\jurusanValidation;

class JurusanController extends Controller
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
        $jurusan = jurusan::all();
        return view('jurusan.index',compact('jurusan'));
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
    public function store(jurusanValidation $request)
    {
        $tambah = jurusan::create([
            'nama' => $request->jurusan
        ]);
        if ($tambah) {
            return redirect()->route('jurusan.index')->with('success','Data Berhasil Ditambahkan');

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
        $data = jurusan::where('id',$id)->first();

        return view('jurusan.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(jurusanValidation $request, $id)
    {
        $ubah = jurusan::where('id',$id)->update([
            'nama' => $request->jurusan
        ]);

        if ($ubah) {
            return redirect()->route('jurusan.index')->with('success','Data Berhasil Diubah');

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
        $hapus = jurusan::where('id',$id)->delete();

        if ($hapus) {
            return redirect()->route('jurusan.index')->with('success','Data Berhasil Dihapus');

        }
    }
}

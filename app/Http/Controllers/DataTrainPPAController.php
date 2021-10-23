<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\dt_ppa;
use App\Model\jurusan;
use App\Http\Requests\ErrorFormRequest;

class DataTrainPPAController extends Controller
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
        $dt_ppa = dt_ppa::all();
        return view('dt_ppa.index',compact("dt_ppa"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     $jurusan = jurusan::all();
     return view('dt_ppa.create',compact('jurusan'));
 }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function messages()
    {
        return [
            'nim.required' => 'Nim harus diisi'
        ];
    }
    public function store(ErrorFormRequest $request)
    {

        // $request->validate([
        //     'nim' => 'required',
        //     'nama' => 'required'
        // ]);

        // $tambah = dt_ppa::create([
        //     "nim" => $request->nim,
        //     "nama" => $request->nama,
        //     "prodi" => $request->prodi,
        //     "jml_tanggungan" => $request->jml_tanggungan,
        //     "penghasilan_ortu" => $request->penghasilan_ortu,
        //     "pekerjaan_ortu" => $request->pekerjaan_ortu,
        //     "jml_sks" => $request->jml_sks,
        //     "ipk" => $request->ipk,
        //     "sertifikat" => $request->sertifikat
        // ]);

        $tambah = dt_ppa::create($request->all());
        if ($tambah) {
            return redirect()->route('dt_ppa.index')->with('success','Data Berhasil Ditambahkan');

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
        $data_mhs = dt_ppa::findOrFail($id);

        return view('dt_ppa.show', compact("data_mhs"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = dt_ppa::where('id',$id)->first();

        $jurusan = jurusan::all();
        return view('dt_ppa.edit', compact('data','jurusan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ubah = dt_ppa::where('id',$id)->update([
            "nim" => $request->nim,
            "nama" => $request->nama,
            "prodi" => $request->prodi,
            "jml_tanggungan" => $request->jml_tanggungan,
            "penghasilan_ortu" => $request->penghasilan_ortu,
            "pekerjaan_ortu" => $request->pekerjaan_ortu,
            "jml_sks" => $request->jml_sks,
            "ipk" => $request->ipk,
            "sertifikat" => $request->sertifikat
        ]);

        if ($ubah) {
            return redirect()->route('dt_ppa.index')->with('success','Data Berhasil Diupdate');

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
        $hapus = dt_ppa::where('id',$id)->delete();

        if ($hapus) {
            return redirect()->route('dt_ppa.index')->with('success','Data Berhasil Dihapus');
        }
    }
}

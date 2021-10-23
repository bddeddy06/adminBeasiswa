<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Daftar;
use App\Model\Dt_class;
use App\c45;
use App\Model\Detaildaftar;
use App\Mail\Registrasi;
use App\Model\mahasiswa;
use Illuminate\Support\Facades\Mail;

class DaftarPPAController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $data_mhs = mahasiswa::all();
        return view('user.daftarppa', compact('data_mhs'));
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
        $nim = $request->nim;
        $valid =Detaildaftar::where('nim',$nim)->first();

        if ($valid) {
            // echo "<script>
            // alert('Anda Sudah Terdaftar')
            // window.location.href = '/daftarppa'
            // </script>";
            return redirect()->route('mainpage.index')->with('daftar','Anda Sudah Terdaftar');

        }else{

            $data = Dt_class::all();
            $data2 = [];


            $attributes = [1 => "jumlah_tanggungan", 2 => "penghasilan", 3 => "jumlah_sks", 4 => 'ipk']; 

            $no = 0;
            foreach ($data as $dt_train) {
                $data2[$no][0] = $dt_train->jumlah;
                $data2[$no][1] = $dt_train->penghasilan_ortu;
                $data2[$no][2] = $dt_train->jumlah_sks;
                $data2[$no][3] = $dt_train->ipk;
                $data2[$no][4] = $dt_train->keterangan;
                $no++;
            }  


            $c45 = new c45; 

            $c45->setData($data2)->setAttributes($attributes); 

            $c45->hitung();

            $jml_tanggung = $request->jml_tanggung;
            $penghasilan = $request->penghasilan_ortu;
            $jml_sks = $request->jumlah_sks;
            $ipk = $request->ipk;

            if ($jml_tanggung >= 5) {
                $jml_tanggung = 'banyak';
            }elseif ($jml_tanggung >= 3) {
                $jml_tanggung = 'sedang';
            }elseif ($jml_tanggung >= 1) {
                $jml_tanggung = 'sedikit';
            }

            if ($penghasilan >= 5000000) {
             $penghasilan = 'besar';
         }elseif ($penghasilan >= 2500000) {
             $penghasilan = 'sedang';
         }elseif ($penghasilan >= 1000000) {
             $penghasilan = 'cukup';
         }elseif ($penghasilan < 1000000) {
             $penghasilan = 'sedikit';
         }

         if ($ipk >= 3.5) {
            $ipk = 'sangatbagus';
        }elseif ($ipk >= 3.25) {
            $ipk = 'bagus';
        }elseif ($ipk >= 3.0) {
            $ipk = 'cukup';
        }

        if ($jml_sks >= 23) {
           $jml_sks = 'banyak';
       }elseif ($jml_sks >= 21) {
           $jml_sks = 'cukup';
       }elseif ($jml_sks <= 20) {
           $jml_sks = 'sedikit';
       }

       $data_testing = [$jml_tanggung,$penghasilan,$jml_sks,$ipk]; 

       $keputusan = $c45->predictDataTesting($data_testing); 

       $daftar = Daftar::create([
        'id' => $request->no_daftar,
        'jumlah_tanggungan' => $jml_tanggung,
        'penghasilan_ortu' => $penghasilan,
        'jumlah_sks' => $jml_sks,
        'ipk' => $ipk,
        'keputusan' => $keputusan
    ]);

       $detail = Detaildaftar::create([
        'nama' => $request->nama,
        'tempat_lahir' => $request->tempatlahir,
        'tanggal_lahir' => $request->tgllahir,
        'jenis_k' => $request->jenis_k,
        'agama' => $request->agama,
        'no_telp' => $request->no_telp,
        'alamat' => $request->alamat,
        'nim' => $request->nim,
        'fakultas' => $request->fakultas,
        'prodi' => $request->prodi,
        'total_sks' => $request->jumlah_sks,
        'semester' => $request->semester,
        'ipk' => $request->ipk,
        'prestasi' => $request->prestasi,
        'nama_ayah' => $request->nama_ayah,
        'pekerjaan_ayah' => $request->pekerjaan_ayah,
        'nama_ibu' => $request->nama_ibu,
        'pekerjaan_ibu' => $request->pekerjaan_ibu,
        'jumlah_tanggungan' => $request->jml_tanggung,
        'penghasilan'=>$request->penghasilan_ortu,
        'pendaftar_id' => $request->no_daftar
    ]);


       if ($daftar) {
        Mail::to($request->email)->send(new Registrasi($request->no_daftar, $request->nama, $request->nim));
        return redirect()->route('mainpage.index')->with('berhasil','Pendaftaran Berhasil');
    }
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

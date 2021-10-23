<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Http\Requests\adminValidator;
use App\Http\Requests\editAdmin;

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::all();
        return view('admin.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(adminValidator $request)
    {
     $tambah = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'hak_akses' => $request->hak_akses,
        'password' => Hash::make($request->password),
    ]);

     return redirect()->route('admin.index')->with('success','Data Berhasil Ditambahkan');
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
        $data = User::where('id',$id)->first();
        return view('admin.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(editAdmin $request, $id)
    {
        $ubah = User::where('id',$id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'hak_akses' => $request->hak_akses,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('admin.index')->with('success','Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus = User::where('id',$id)->delete();

        return redirect()->route('admin.index')->with('success','Data Berhasil di Hapus');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('add');
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
        DB::table('pembeli')->insert([
            'nama' => $request->nama,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'nama_barang' => $request->nama_barang,
            'harga' => $request->harga_barang,
            'jumlah' => $request->jumlah_barang
        ]);
        DB::table('userx')->insert([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => $request->password
        ]);
        return redirect('/view');
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
        // $userx[] = DB::table('userx')->where('id', $id)->get();
        $pembeli = DB::table('pembeli')->where('id', $id)->get();
        // $data[] = array_replace_recursive($userx, $pembeli);
        return view('edit', ['data' => $pembeli]);
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
        DB::table('pembeli')->where('id', $id)->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'nama_barang' => $request->nama_barang,
            'harga' => $request->harga_barang,
            'jumlah' => $request->jumlah_barang
        ]);
        return redirect('/view');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('userx')->where('id', $id)->delete();
        DB::table('pembeli')->where('id', $id)->delete();
        return redirect('/view');
    }
}

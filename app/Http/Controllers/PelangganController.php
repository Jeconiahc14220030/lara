<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;
use Illuminate\Support\Facades\Http;

class PelangganController extends Controller
{
    public function create()
    {
        $this->authorize('insert');

        $pelanggans = Pelanggan::get();
        return view('pelanggan.create')->with('pelanggan', $pelanggans);
    }

    public function insert(Request $r)
    {
        $pelanggan = new Pelanggan;
        $pelanggan->nama = $r->nama;
        $pelanggan->tahun_masuk = $r->tahun_masuk;
        $pelanggan->tgl_lahir = $r->tgl_lahir;
        $pelanggan->alamat = $r->alamat;
        $pelanggan->save();

        return redirect()->route("pelanggan")->with("success","ok");
    }

    public function edit(Request $r)
    {
        $pelanggan = Pelanggan::find($r->id);
        return view('pelanggan.edit')->with('pelanggan', $pelanggan);
    }

    public function update(Request $r)
    {
        $pelanggan = Pelanggan::find($r->id);
        $pelanggan->nama = $r->nama;
        $pelanggan->tahun_masuk = $r->tahun_masuk;
        $pelanggan->tgl_lahir = $r->tgl_lahir;
        $pelanggan->alamat = $r->alamat;
        $pelanggan->save();

        return redirect()->route("pelanggan")->with("success","ok");
    }

    public function delete(Request $r)
    {
        $pelanggan = Pelanggan::find($r->id);
        $pelanggan->delete();
        return redirect()->route("pelanggan")->with("success","ok");
    }

    public function request_to_api()
    {
        return $token = Http::post('http://127.0.0.1:8000/api/get/token', [
            'email' => 'user@user.com',
            'password' => 'user',
        ]);
        return $respon_api = Http::withToken($token['data']['token'])->get('http://lara.test/api/get/pelanggan/1');
    }
}

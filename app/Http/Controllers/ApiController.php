<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Auth;

class ApiController extends Controller
{
    //
    public function get_pelanggan(Request $r)
    {
        $data = Pelanggan::where('id', $r->id)->select(['nama', 'tahun_masuk'])->first();
        if(isset($data)){
            return Response::json(['data' => $data], 200);
        } else abort(404);
    }

    public function get_token(Request $r)
    {
        if(Auth::attempt(['email' => $r->email, 'password' => $r->password]))
        {
            $auth = Auth::user();
            $data['token'] = $auth->createToken('auth_token')->plainTextToken;

            return response::json(['data'=>$data], 200);
        }
        else
        abort(404);
    }

    public function insert_pelanggan(Request $r)
    {
        $data = new Pelanggan();
        $data->nama = $r->nama;
        $data->tahun_masuk = $r->tahun_masuk;
        $data->save();

        if(isset($data)){
            return Response::json(['data' => $data], 200);
        } else abort(404);
    }
}

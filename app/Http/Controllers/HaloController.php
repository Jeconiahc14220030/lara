<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HaloController extends Controller
{
    public function index(Request $request)
    {
        $a = $request->param1;
        $b = $request->param2 ? $request->param2 : 0;

        // if($b == 2)
        $hasil = $a+$b;
        // output
        // return $hasil;
        // return 'Hello Controllers!';

        return view('halo2')
            ->with('hasil', $hasil);
    }
}

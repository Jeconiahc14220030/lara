<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CheckRoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ... $permission): Response
    {
        if(Auth::user() !== null){
            if(in_array(Auth::user()->roles[0]->role, $permission)){
                return $next($request);
            }
            else {
                abort(403);
            }
        }
        else {
            return redirect()->route('login.index');
        }
    }

    //modelnya
    // kategori [id, nama, catatan];
    // public function kategori()
    //     belongsTo(Kategori::class)

    // // belongs to
    // $event = Event::with('kategori')->whereRelation('kategori', 'nama', '=', 'aaa')
    // ->get();

    // $event->kategori->aaa->;
}

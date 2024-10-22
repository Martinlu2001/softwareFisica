<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tema;

class TemaController extends Controller
{
    public function index()
    {
        //$temas = DB::table('users')->get();
        $temas = Tema::get();

        return view('temas',compact('temas'));
    }

    /*public function show(string $name)
    {
        //return Tema::find($name);
        return view('showTema',[
            'tema'=> Tema::where('name', $name)->first()
            //'tema'=> Tema::find($name)
        ]);
    }*/

    public function index1(string $name)
    {
        
        $showTemas = Tema::where('name', $name)->first();

        return view('showTema',compact('showTemas'));
    }

    public function index2(string $tema, $experimento)
    {
        //$showExperi = Tema::get();
        /*$showExperi = Tema::where('name', $tema)
        ->where('email', $experimento)
        ->get();*/
        $showExperi = Tema::where('name', $tema)->firstOrFail();
        $showtema = Tema::where('email', $experimento)->firstOrFail();
        return view('showExperi',compact('showExperi', 'showtema'));
    }

    /*public function show1(string $email)
    {
        //return Tema::find($name);
        return view('showExperi',[
            'tema'=> Tema::where('email', $email)->first()
            //'tema'=> Tema::find($name)
        ]);
    }*/
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Noticia;

class BlogController extends Controller
{
    public function index(){

        $Noticias = Noticia::get()->toArray();

        return view('index')->with('noticias',$Noticias);

      //  return view('welcome')->with('posts',$posts);
    }

    public function agregar_noticia(){
    	return view('agrega_noticia');
    }

}

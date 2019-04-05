<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Noticia;
use App\Http\Requests\NoticiaRequest;

class BlogController extends Controller
{
    public function index(){

        $Noticias = Noticia::get()->toArray();

        return view('index')->with('noticias',$Noticias);

    }

    public function agregar_noticia(){
    	return view('agrega_noticia');
    }

    public function agrega(NoticiaRequest $request){

      $data = request()->all();
         //dd($request->all());
      Noticia::create([
        'titulo' => $data['titulo'],
        'cuerpo' => $data['cuerpo'],
        'autor' => $data['autor'],
        'fecha' => $data['fecha'],
        'imagen' => $data['imagen']->getClientOriginalName(),
        'categoria' => $data['categoria']
      ]);
      
      $nombre = $request->file('imagen')->getClientOriginalName();
      $path = $request->file('imagen')->storeAs('',$nombre,'public');

      return redirect('/');
    }

    public function lista(){

      $Noticias = Noticia::get()->toArray();

      return view('lista_noticias')->with('noticias',$Noticias);     

    }

    public function destroy(Request $request){
      //echo $id;die();   

      $noticia = Noticia::findOrFail($request->id);
      $noticia->delete();

      return redirect('/lista_noticias');
    }

    public function editar($id){
      //echo $id;die();
      $noticia = Noticia::findOrFail($id)->toArray();

      //dd($noticia);

      return view('editar_noticia')->with('noticia',$noticia);

    }


    public function update(Request $request, $id2){
       // echo $id2;die();
       $data = request()->all();
       $imagen = $request->file('imagen');
       
       if ($imagen===NULL){
           $nombre='default.png';
       }else{
         $nombre = $imagen->getClientOriginalName();
         $imagen->storeAs('',$nombre,'public');
       }

       $noticia = Noticia::findOrfail($id2);
       $noticia->imagen = $nombre;

       $noticia->fill($request->input())->save();

       return redirect('/lista_noticias');
    }
    
    // Para instalar los mensajes de error en español
    // Ejecutar en línea de comandos lo siguiente 
    // (en la carpeta del proyecto)
    //
    // d:\xampp\htdocs\blog\> composer require laraveles/spanish
    // d:\xampp\htdocs\blog\> php artisan vendor:publish --tag=lang
    // 
    // Editar el siguente archivo:
    // config/app.php ->  'locale' => 'es',
    //
    // No olvidar "Borrar los cachés"
}

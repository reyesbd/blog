@extends('layout.principal')

@section('content')
<div class="row">
    <table class="table">
        <tr>
           <th>Titulo</th>
           <th>Autor</th>
           <th>Cuerpo</th>
           <th>Fecha</th>
           <th>Categoria</th>
           <th>Imagen</th>
           <th>Acciones</th>
        </tr>
        @foreach ($noticias as $noticia)
           <tr>
               <td>{{ $noticia['titulo'] }}</td>
               <td>{{ $noticia['autor'] }}</td>
               <td>{{ $noticia['cuerpo'] }}</td>
               <td>{{ $noticia['fecha'] }}</td>
               <td>{{ $noticia['categoria'] }}</td>
               <td><img class="img-fluid" src="{{URL::to('/')}}/img/{{$noticia['imagen']}}" alt="imagen">
               </td>
               <td>
                  <a href="{{URL::to('/')}}/editar/{{ $noticia['id'] }}" class="btn btn-primary"><i class="material-icons">create</i></a>
                  <!-- a href="{{URL::to('/')}}/borrar/{{ $noticia['id'] }}" class="btn btn-primary"><i class="material-icons">delete</i></a -->
                  <form method="post" action="{{URL::to('/')}}/borrar/{{$noticia['id']}}" class="pull-left">
                  {{csrf_field()}}
                  {{method_field('DELETE')}}
                    <div>
                       <button class="btn btn-primary" type="submit">
                         <i class="material-icons">delete</i>
                       </button>
                    </div>
                  </form>
               </td>
           </tr>
        @endforeach
    </table>    
</div>  <!-- fin del row -->
@stop
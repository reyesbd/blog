@extends('layout.principal')

@section('content')
<div class="row">
          @foreach ($noticias as $noticia)
              <div class="col-4 d-flex align-items-stretch">   <!-- agregar d-flex align-items-stretch shadow -->
                <div class="card mb-3" style="width: 18rem;" >
                    <img src="{{URL::to('/')}}/img/{{$noticia['imagen']}}" class="card-img-top" alt="...">
                    <div class="card-body d-flex flex-column">  <!-- agregar  d-flex flex-column  -->
                        <h5 class="card-title">{{ $noticia['titulo'] }}</h5>
                        <p class="card-text">{{ $noticia['cuerpo'] }}</p>
                        <a href="#" class="btn btn-primary mt-auto ">Go somewhere</a>   <!-- agregar mt-auto -->
                    </div>
                </div>      
              </div>        
          @endforeach
      </div>  <!-- fin del row -->
@stop

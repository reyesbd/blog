
@extends('layout.principal')

@section('content')

<div class="row">
         <div class="col">
         	<h2>Agregar noticia</h2>
	 		<form method="post" action="{{URL::to('/')}}/agrega" enctype="multipart/form-data">
        {{ csrf_field() }}
			  <div class="form-group">
			    <label for="titulo">Titulo</label>
			    <input type="text" class="form-control" id="titulo" name="titulo">
			  </div>
			  <div class="form-group">
			    <label for="texto">Texto</label>
			    <textarea class="form-control" id="cuerpo" name="cuerpo"></textarea>
			  </div>
			  <div class="form-group ">
			    <label for="autor">Autor</label>
			    <input type="text" class="form-control" id="autor" name="autor">
			  </div>

        <div class="form-row">

				  <div class="form-group col-md-4">
				    <label for="fecha ">Fecha</label>
				    <input type="date" class="form-control " id="fecha" name="fecha">
				  </div>

				  <div class="form-group col-md-4">
				    <label for="imagen">Imagen</label>
				    <input type="file" class="form-control " id="imagen" name="imagen">
				  </div>

				  <div class="form-group col-md-4">
				    <label for="categoria">Categoria</label>
				    <select class="form-control " id="categoria" name="categoria">
				    	<option value="0">Seleccione una opción</option>
				    	<option value="1">Sistemas operativos</option>
				    	<option value="2">Seguridad</option>
				    	<option value="3">Hardware</option>
				    </select>
				  </div>

			  </div>

			  <div class="row text-right">
			  	<div class="col">
			        <button type="submit" class="btn btn-primary ">Guardar</button>			  		
			  	</div>
			  </div>



			</form>        	
         </div>


      </div>  <!-- fin del row -->

@stop



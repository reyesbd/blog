
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container mb-4">

      <div class="jumbotron jumbotron-fluid mt-2 mb-0">
        <div class="container">
          <h1 class="display-4">Blog de noticias</h1>
          <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
        </div>
      </div>

      <ul class="nav justify-content-end">
        <li class="nav-item">
          <a class="nav-link active" href="#">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Agregar noticia</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>

      <div class="row">
         <div class="col">
         	<h2>Agregar noticia</h2>
	 		<form>
			  <div class="form-group">
			    <label for="titulo">Titulo</label>
			    <input type="text" class="form-control" id="titulo" name="titulo">
			  </div>
			  <div class="form-group">
			    <label for="texto">Texto</label>
			    <textarea class="form-control" id="texto" name="texto"></textarea>
			  </div>
			  <div class="form-group ">
			    <label for="autor">Autor</label>
			    <input type="text" class="form-control" id="autor" name="autor">
			  </div>

        <div class="form-row">

				  <div class="form-group col-md-4">
				    <label for="fecha ">Fecha</label>
				    <input type="date" class="form-control " id="fecha" fecha="fecha">
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

    </div>  <!-- fin container  -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
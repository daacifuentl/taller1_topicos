<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review</title>
</head>
<body>

<div class="container">
    <h1>Review</h1>
    <hr>
    <form action = "{{route('guardarformulario')}}" method = "POST">
    @csrf
    <div class="well">
      <div class="form-group">
          <label for="dni">Comentario:</label>
          @if($errors->first('ide'))

          <p class = 'text-danger'>{{$errors->first('ide')}}</p>

          @endif


          <input type="text" name="ide" id="ide" class="form-control" placeholder="Comentario" tabindex="5">
    </div>

    <div class="col-xs-6 col-sm-6 col-md-6">

    <div class="form-group">
     <label for="dni">Calificacion:</label>



     <select name = 'idd' class="custom-select">

        @if($errors->first('idd'))

        <p class = 'text-danger'>{{$errors->first('idd')}}</p>
           
        @endif
     <option selected="">Selecciona una calificacion:</option>
     <option value="1">Buena</option>
        <option value="2">Regular</option>
         <option value="3">Mala</option>


  </select>



</div>

@if (session('success'))
<li>{{ session('success') }}</li>
@endif

<div class="row">
            <div class="col-xs-6 col-md-6"><button type="submit" value="Guardar" class="btn btn-danger btn-block btn-lg" tabindex="7"
                > Guardar </button></div>
        </div>
</form>
</div>


        <a href="{{ route('lista.index') }}"> <button type="button"> Ver </button ></a>

</body>
</html>
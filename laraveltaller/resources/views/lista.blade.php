<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Taller1</title>
</head>
<body>
    <h1>Todos los reviews (Listar objetos)</h1>


    @php
    $contador = 1;
    @endphp

    @foreach ($reviews -> reverse() as $review)
       
        @if($contador <= 2)
       <p scope="row"><a href="{{ route('lista.show', $review->id)}}"> <b>{{ $review->id }}</b> -> ID en negrilla</a></p> 
        @endif

        @if($contador > 2)
        <p scope="row"><a href="{{ route('lista.show', $review->id)}}">{{ $review->id }} -> ID</a></p>
        @endif
        
        <p>Este es el comentario : {{$review->comentario}} </p>
        <p>Esta son las estrellas :{{$review->estrellas}}</p>

@php
$contador++;
 @endphp
 
    @endforeach



</body>
</html>     
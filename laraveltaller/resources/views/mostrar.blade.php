<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Taller1</title>
</head>
<body>
    
        <p scope="row"><a href="{{ route('lista.show', $review->id)}}">{{ $review->id }}</a></p>
        <p>{{$review->comentario}}</p>
        <p>{{$review->estrellas}}</p>
 
        <form action="{{ route('lista.delete', $review->id)}}" method="POST">
                                                                @csrf
            <button>Borrar</button>
        </form>
</body>
</html>     
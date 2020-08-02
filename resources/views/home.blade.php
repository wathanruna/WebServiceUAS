<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
     
    </head>
    <body>
         @foreach ($keview as $keview )
       <p>{{$keview->id}}</p>
       <p>{{$keview->name}}</p>
       <p>{{$keview->gambar}}</p>
       <p>{{$keview->deskripsi}}</p>
       <p>{{$keview->tempat}}</p>
       <p>{{$keview->jadwal}}</p>
       <br>
        @endforeach
    </body>
</html>

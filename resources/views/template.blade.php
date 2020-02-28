@extends('home')
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Buscador</title>
  </head>
  <body>

    <header>
      <form action="/buscarp" method="post">
      <input type="text" name="buscar" id="buscar">
      <button type="button" name="button">buscar</button>
      </form>
      <ul>
         @foreach ($peli as $pe)
         <li>{{ $pe["title"] }} -- {{ $pe ["length"] }}

          @if ($pe->genero)
              {{$pe->genero->name}}
          @endif



         </li>
         @endforeach

      </ul>

    </header>
     <footer>
       <h3>gracias por usarnos!!!</h3>
     </footer>

  </body>
</html>

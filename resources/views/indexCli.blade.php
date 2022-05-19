<!doctype html>
 <html>
 <head>

   <head>
       <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Clientes</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- Styles -->
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>   
   </head>
  
<body>

   <body class="antialiased">
      <table class="table table-striped table-hover">
         <thead>         
            <th>NOMBRES</th>
            <th>APELLIDOS</th>
            <th>CORREO</th>
         </thead>
         
         <tbody>
            
         @foreach ($clientes as $cliente)
         <tr>
         <td>{{$cliente->nombres}}</td>
         <td>{{$cliente->apellidos}}</td>
         <td>{{$cliente->correo}}</td>
         </tr>
         @endforeach
            
         </tbody>

      </table>
   </body>
  

 </html>
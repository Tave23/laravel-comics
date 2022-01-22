<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="{{ asset('css/app.css') }}">
   <title>Laravel-comics</title>
</head>
<body>

   
   @include('partials.header')

   @include('partials.jumbotron')

   @include('partials.mainpart')

   @include('partials.lowJumbo')

   @include('partials.linkUtili')

   @include('partials.footer')

</body>
</html>
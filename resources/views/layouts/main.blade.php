<!doctype html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Rumah Sakit | {{ $title }}</title>
   <link href="/bootstrap-5.2.2/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

   <link rel="canonical" href="/bootstrap-5.2.2/css/sign-in/">
</head>

<body>

   @include('partials.navbar')

   <div class="container mt-4">
      @yield('container')
   </div>


   <script src="/bootstrap-5.2.2/js/bootstrap.bundle.min.js"
      integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>

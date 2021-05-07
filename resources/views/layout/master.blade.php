<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>RGPH | Accueil</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">

    <link href="{{asset('../css/rgph.css')}}"  rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

{{---------------menu-header------------------------------------------------------------------------------------------}}
<section>
    @include('layout.menu-header')
</section>
{{--------------------------------------------------------------------------------------------------------------------}}

{{---------main-banner------------------------------------------------------------------------------------------------}}
<section>
    @include('layout.main-banner')
</section>
{{--------------------------------------------------------------------------------------------------------------------}}
{{---------main----------------------------------------------------------------------------------------------------}}
    @yield('content')
{{------------------------------------------------------------------------------}}
{{------------------------Footer--------------------------------------------------------------------------------------}}
<section>
    @include('layout.footer')
</section>
</body>

</html>

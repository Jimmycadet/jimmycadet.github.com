<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">

    <link href="{{asset('../css/styletest.css')}}"  rel="stylesheet" type="text/css">

    <title>Hello, world!</title>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button><div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">{{Str::ucfirst('Accueil')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">{{Str::ucfirst('A propos du Ve RGPH')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">{{Str::ucfirst('Structure Organisationnelle')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">{{Str::ucfirst('Cadre Légal')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">{{Str::ucfirst('Partenaires')}}</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Rechercher" aria-label="Rechercher"><button class="btn btn-outline-success" type="submit">Rechercher</button>
                </form>
            </div>
        </div>
    </nav>
</header>
<h1>Hello, world!</h1>


<div class="bg"></div>
<div class="bg2"></div>

<div class="container">
    <div id="left">
        <h1>CryptoCurrencies</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque recusandae doloribus nulla dolorum, vitae ducimus tempore quisquam, maxime repellendus ipsam tenetur deleniti, odit quo consequatur deserunt commodi labore culpa repellat.</p>
    </div>
    <div id="right">
        <ul>
            <li>
                <img src="https://cdn.worldvectorlogo.com/logos/appcoins.svg" alt="Ti pidr">
                <span>
          <strong>AppCoins</strong>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.   </p>
        </span>
            </li>
            <li>
                <img src="https://cdn.worldvectorlogo.com/logos/ethos.svg" alt="">
                <span>
          <strong>Ethos</strong>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.   </p>
        </span>
            </li>
            <li>
                <img src="https://cdn.worldvectorlogo.com/logos/iota-1.svg" alt="">
                <span>
          <strong>Iota</strong>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.  </p>
        </span>
            </li>
        </ul>
    </div>
</div>




{{-----------------------------------------------------------------------------------------------------------------------}}

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

{{---------------------------------------------------------------------------------------------------------------}}
<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
-->
</body>
</html>

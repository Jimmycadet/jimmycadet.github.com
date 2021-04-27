<!DOCTYPE html>
<html lang="en">
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

{{--------------------------------------------------------------------------------------------------------------------------}}

    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle btn-lg" data-toggle="collapse" data-target="#myNavbar" style="margin-top: 30px">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>

                </button>
                <!-- Brand -->

                <a class="navbar-brand" href="#">

                    <img src="../images/logo.png" alt="Logo" class="logo img-circle img-responsive">

                </a>

                    <p class="logo-details">
                       <span style="color: #033E77;">République D’Haïti<br></span><br>V<sup>e</sup><b> Recensement Général de la<br>Population et de l'Habitat</b>
                    </p>


            </div>
            <form class="navbar-form navbar-right" action="/action_page.php">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search">
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </div>
                </div>
            </form>
            <div class="collapse navbar-collapse " id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">{{Str::ucfirst('Accueil')}}</a></li>
                    <li><a href="#">{{Str::ucfirst('A propos du Ve RGPH')}}</a></li>
                    <li><a href="#">{{Str::ucfirst('Structure Organisationnelle')}}</a></li>
                    <li><a href="#">{{Str::ucfirst('Cadre Légal')}}</a></li>
                    <li><a href="#">{{Str::ucfirst('Partenaires')}}</a></li>

                </ul>
            </div>
        </div>
    </nav>

{{---------------------------------------------------------------------------------------------------------}}

    <div class="container">
        <div class="row">
            <div class="col-md-12" style="padding-left: 0;padding-right: 0;">
                <a class="" href="#">
                    <img src="../images/banner1.png" alt="" class="img-responsive"  >
                </a>
            </div>
        </div>

    </div>

<div><p></p></div>

    <div class="container">
        <div class="row">
            <div class="col-md-8" style="background-color: #f7fafc;">
                <div class="table-responsive">
                    <p><h2 class="titre-section">{{Str::ucfirst('Projection')}}</h2></p>

                    <table class="table table-striped table-responsive">
                        <caption style="color: black; font-size: 14px;">
                            {{Str::ucfirst('Projection de la population de 2018')}}
                        </caption>
                        <thead>
                            <tr>
                                <th>{{Str::ucfirst('Unité Géographique')}}</th>
                                <th>{{Str::ucfirst('Deux Sexes')}}</th>
                                <th>{{Str::ucfirst('Masculin')}}</th>
                                <th>{{Str::ucfirst('Féminin')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{Str::ucfirst('République D’Haïti')}}</td>
                                <td>{{'11 411 527' }}</td>
                                <td>{{'5 659 140' }}</td>
                                <td>{{'5 752 387' }}</td>
                            </tr>
                        <tfoot>
                            <tr>
                                <td colspan="4" style="font-weight: lighter; font-size: 10px !important;">
                                    {{'Source: IHSI/Direction des Statistiques Démographiques et Sociales (DSDS)'}}
                                </td>
                            </tr>
                        </tfoot>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="col-md-4" style="background-color: #f7fafc;">
                <p><h2 class="titre-section">Avis</h2></p>
                <div class="alert alert-success alert-dismissible alert-shadow alert-bg">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </div>
                <div class="alert alert-success alert-dismissible alert-shadow alert-bg">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </div>
                <div class="alert alert-success alert-dismissible alert-shadow alert-bg">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </div>
            </div>
        </div>
    </div>
{{-------------------------------------------------------------------------------------------------------}}

<section>
     <div class="container" style="background-color: #f7fafc">
         <div class="row">
             <div class="col-sm-4" >
                 <p><h2 class="titre-section">{{Str::ucfirst('Liste d’actualités')}}</h2></p>
                 <div class="thumbnail" style="background-color: transparent !important; border-color: transparent;" >
                     <a href="/">
                         <img src="../images/quest_creol.png" alt="Lights" style="width:14%; display: inline !important;">
                         <p style="display: inline-block; font-size: 14px; ">
                             Ve RGPH nouvelle version du questionnaire <br>créole
                         </p>
                     </a>
                 </div>
                 <div class="thumbnail" style="background-color: transparent !important; border-color: transparent;">
                     <a href="/">
                         <img src="../images/recensement_pilote.png" alt="Lights" style="width:14%; display: inline !important;">
                         <p style="display: inline-block; font-size: 14px;">
                             En marche vers le Recensement Pilote
                         </p>
                     </a>

                 </div>
                 <div class="thumbnail" style="background-color: transparent !important; border-color: transparent;">
                     <a href="/">
                         <img src="../images/ve_rgph_21_avril_2019.png" alt="Lights" style="width:14%; display: inline !important;">
                         <p style="display: inline-block; font-size: 14px;">
                             Présentation Haïti Ve RGPH 21 Avril 2019
                         </p>
                     </a>

                 </div>
             </div> {{--liste actualites--}}
                 {{--         ---------------------------------------------------------------}}
             <div class="col-sm-4" style="background-color: #f7fafc; margin-top: 50px;">
                 <div class="thumbnail">
                     <a href="/">
                         <img src="../images/flag.png" alt="Lights" style="width:18%">
                         <div class="caption">
                             <p ><h2 style="text-align: center">Haïti en Bref</h2></p>
                             <p style="text-align: center"><b>Voir les données statistiques de nos 10 départements</b></p>
                         </div>
                     </a>
                 </div>
             </div>

             <div class="col-sm-4" style="background-color: #f7fafc;">
                 <p><h2 class="titre-section">{{Str::ucfirst('Documentation')}}</h2></p>
                 <p></p>
                 <p><h4 class="text-dark">{{Str::ucfirst('Nos Supports de communication:')}}</h4></p>
                 <div class="">
                     <ul class="">
                         <br>
                         <li><a href="#">{{Str::ucfirst('[PDF]Ve RGPH Questionnaire créole')}}</a></li><br>
                         <li><a href="#">{{Str::ucfirst('[PDF]Présentation Haïti Ve RGPH 21 Avril 0219')}}</a></li><br>
                         <li><a href="#">{{Str::ucfirst('Dépliant Ve RGPH')}}</a></li><br>
                         <li><a href="#">{{Str::ucfirst('Le Ve RGPH en bref version française')}}</a></li>
                     </ul>
                 </div>
             </div>
         </div> {{--div class="row"--}}
     </div>    {{--div class="container"--}}
</section>

{{--    ----------------------Footer------------------------------------------------------------------------------------------------------}}

<section class=" container footers">
        <div class="container ">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3 footers-one">

                    <div class="footers-info">
                        <p><h4><b>À propos</b></h4></p>
                        <p >Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <div class="social-icons">
                        <a href="https://www.facebook.com/"><i id="social-fb" class="fa fa-facebook-square fa-2x social"></i></a>
                        <a href="https://twitter.com/"><i id="social-tw" class="fa fa-twitter-square fa-2x social"></i></a>
                        <a href="https://plus.google.com/"><i id="social-gp" class="fa fa-google-plus-square fa-2x social"></i></a>
                        <a href="mailto:bootsnipp@gmail.com"><i id="social-em" class="fa fa-envelope-square fa-2x social"></i></a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-2 footers-two">
                    <p><h4><b>Menu</b></h4></p>
                    <ul class="list-unstyled">
                        <li><a href="">Accueil</a></li>
                        <li><a href="">Structure Organisationnelle</a></li>
                        <li><a href="">Cadre Légalr</a></li>

                    </ul>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-2 footers-three">
                    <p><h4><b>Partenaires</b></h4></p>
                    <ul class="list-unstyled">
                        <li><a href="">LINK</a></li>
                        <li><a href="">LINK</a></li>
                        <li><a href="">LINK</a></li>
                        <li><a href="">LINK</a></li>

                    </ul>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4 footers-five">
                    <p><h4><b>Contactez-nous</b></h4></p>
                    <div class="right box">

                        <div class="content">
                            <form action="#">

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>

                                </div>
                                <div class="msg">
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Example textarea</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                    <div class="btnEnv">
                                        <button type="submit">Envoyer</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>


                </div>



            </div>
        </div>


    <section class="copyright border">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12 pt-3">
                    <p class="text-muted" style="margin-top: 30px;">© RGPH | 2021 All right reserved. </p>
                </div>
            </div>
        </div>
    </section>
</section>

</body>

</html>

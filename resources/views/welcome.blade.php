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
            <div class="navbar-header a">
                <button type="button" class="navbar-toggle btn-lg" data-toggle="collapse" data-target="#myNavbar" style="margin-top: 30px">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>

                </button>
                <!-- Brand logo-->

                <a class="navbar-brand" href="#">

                    <img src="../images/Logo_Rgph_haiti.png" alt="RGPH" class="logo img-circle img-responsive">

                </a>
                    {{-- Brand logo details --}}
                    <p class="logo-details">
                       <span style="color: #033E77;">République D’Haïti</span><br>
                        V<sup style="color:#ED323D;">e</sup><b style="color:#ED323D;"> Recensement Général de la<br>Population et de l'Habitat</b>
                    </p>


            </div>
            <form class="navbar-form navbar-right" action="/action_page.php">
                <div class="input-group input-rechercher">
                    <input type="text" class="form-control" placeholder="Rechercher">
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </div>
                </div>
            </form>
            <div class="collapse navbar-collapse " id="myNavbar">
                <ul class="nav navbar-nav navbar-right navbar-rightless">
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
        <div class="row shine">
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
            <div class="col-md-7" style="background-color: #f7fafc;">
                <div class="table-responsive">
                    <p><h2 class="titre-section">{{Str::ucfirst('Projection')}}</h2></p>

                    <table class="table table-striped table-responsive">
                        <caption style="color: black; font-size: 14px;">
                            {{Str::ucfirst('Projection de la population de 2018')}}
                        </caption>
                        <thead >
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
                                <td colspan="4" style="font-weight: lighter; font-size: 12px !important;">
                                    {{'Source: IHSI/Direction des Statistiques Démographiques et Sociales (DSDS)'}}
                                </td>
                            </tr>
                        </tfoot>
                        </tbody>
                    </table>
                </div>

                <div class="row" style="margin-top: 60px;">
                    <div class="col-md-6">
                        <div class="thumbnail">
                            <a href="">
                                <img class="img-responsive" src="../images/statistiqueseconomiques.png" alt="Statistiques economiques" >

                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="thumbnail">
                            <a href="">
                                <img class="img-responsive" src="../images/statistiquesdemographiques.png" alt="Statistiques démographiques">

                            </a>
                        </div>
                    </div>

                </div>


            </div>

            <div class="col-md-5" style="background-color: #f7fafc;">
                <p><h2 class="titre-section">Avis</h2></p>
                <div class="alert alert-success alert-dismissible alert-shadow alert-bg">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    L’institut Haïtien de Statistiques et d’Informatique (IHSI) présente ses compliments à ses nombreux
                    internautes et en profite pour les informer que, dans le souci de leur fournir un meilleur service,
                    il est en train de travailler sur la modernisation de son site internet. Pendant les travaux, pour
                    pouvoir continuer à avoir accès aux statistiques disponibles sur le site habituel, ils n’auront qu’à
                    cliquer sur le lien conçu à cet effet. LIHSI les remercie de leurs compréhensions.
                </div>
                <div class="alert alert-success alert-dismissible alert-shadow alert-bg">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    Bulletin de l’Indice des Prix à la Consommation (IPC) des mois d’aout, septembre et d’octobre 2020
                </div>

            </div>
        </div>
    </div>
{{-------------------------------------------------------------------------------------------------------}}

<section style="padding-top: 20px;">
     <div class="container" style="background-color: #f7fafc;">
         <div class="row">
             <div class="col-sm-4" >
                 <p><h2 class="titre-section">{{Str::ucfirst('Liste d’actualités')}}</h2></p>

                 <div class="thumbnail" style="background-color: transparent !important; border-color: transparent;margin:0;padding: 0;">
                     <a href="/" style="display: inline-flex; margin-bottom-bottom: 10px;">
                         <img src="../images/quest_creol.png" alt="Lights" style="width:22%; display: inline !important;margin-top: 0;padding-top: 0;">
                         <p style=" font-size: 14px;margin-top: 0;padding-top: 0;">
                             Ve RGPH nouvelle version du questionnaire créole
                             <span class=" text-muted" style="font-size: 11px;">
                                <br ><br> il y a 1 an</span>
                         </p>
                     </a>
                     <hr style="margin: 0; padding: 0;">

                 </div>
                 <div class="thumbnail" style="background-color: transparent !important; border-color: transparent; margin:0 ;padding-top: 10px;">
                     <a href="/" style="display: inline-flex">
                         <img src="../images/recensement_pilote.png" alt="Lights" style="width:18%; display: inline !important;margin-top: 0;padding-top: 0;">
                         <p style="display: inline-block; font-size: 14px;margin-top: 0;padding-top: 0;">
                             En marche vers le Recensement Pilote
                            <span class=" text-muted" style="font-size: 11px;">
                                <br ><br> il y a 2 ans</span>
                         </p>

                     </a>
                     <P><p></p></P>
                     <hr style="margin: 0; padding: 0;">
                 </div>
                 <div class="thumbnail" style="background-color: transparent !important; border-color: transparent;margin: 0;padding-top: 10px;">
                     <a href="/" style="display: inline-flex">
                         <img src="../images/ve_rgph_21_avril_2019.png" alt="Lights" style="width:18%; display: inline !important;margin-top: 0;padding-top: 0;">
                         <p style="display: inline-block; font-size: 14px;margin-top: 0;padding-top: 0;">
                             Présentation Haïti Ve RGPH 21 Avril 2019
                             <span class="text-muted" style="font-size: 11px;">
                                <br ><br> il y a 1 an</span>
                         </p>

                 </div>
             </div> {{--liste actualites--}

             {{--         ---------------------------------------------------------------}}

             <div class="col-sm-4" style="background-color: white; margin-top: 25px;">
                 <div class="thumbnail" style="background-color: transparent; border-color: transparent">
                     <a href="/">
                         <img src="../images/flag.png" alt="Lights" style="width:18%">
                         <div class="caption">
                             <p ><h2 class="text-bref">Haïti en Bref</h2></p>
                             <p class="text-bref" style="padding:30px 0 30px 0;"><b>Voir les données statistiques de nos 10 départements</b></p>
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
                         <li><a href="#"><sup style="color: #ED323D">[PDF]</sup>V<sup>e</sup> RGPH Questionnaire créole</a></li><br>
                         <li><a href="#"><sup style="color: #ED323D">[PPT]</sup> Présentation Haïti Ve RGPH 21 Avril 0219</a></li><br>
                         <li><a href="#"><sup style="color: #ED323D">[PDF]</sup> L'IHSI en bref</a></li><br>
                         <li><a href="#"> Dépliant Ve RGPH</a></li><br>
                         <li><a href="#"> Le Ve RGPH en bref version française</a></li>
                     </ul>
                 </div>
             </div>
         </div> {{--div class="row"--}}
     </div>    {{--div class="container"--}}

    <div class="container" style="background-color: #f7fafc; margin-top: 30px;padding-top: 20px; padding-bottom: 20px;">
        <div class="row">
            <div class="col-md-4 text-center">
                <button type="button" class="btn btn-primary row-btn">CONFIDENTIALITE</button>
            </div>
            <div class="col-md-4 text-center">
                <button type="button" class="btn btn-primary row-btn">SUR QUOI PORTE LE RECENSEMENT?</button>
            </div>
            <div class="col-md-4 text-center">
                <button type="button" class="btn btn-primary row-btn btn-center">LES PHASES DU RECENSEMENT</button>
            </div>
        </div>
    </div>
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
                    <ul class="list-unstyled" >
                        <li ><a href="" style="color: white;">Accueil</a></li>
                        <li><a href="" style="color: white;">Structure Organisationnelle</a></li>
                        <li><a href="" style="color: white;">Cadre Légalr</a></li>

                    </ul>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-2 footers-three">
                    <p><h4><b>Partenaires</b></h4></p>
                    <ul class="list-unstyled">
                        <li><a href="" style="color: white;">IHSI</a></li>
                        <li><a href="" style="color: white;">LINK</a></li>
                        <li><a href="" style="color: white;">LINK</a></li>
                        <li><a href="" style="color: white;">LINK</a></li>

                    </ul>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4 footers-five">
                    <p><h4><b>Contactez-nous</b></h4></p>
                    <div class="right box">

                        <div class="content">
                            <form action="#">

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email *</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>

                                </div>

                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Message *</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"placeholder="Entrer message"></textarea>
                                    </div>
                                    <div class="btn">
                                       <button class="envoyer" type="submit">Envoyer</button>
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

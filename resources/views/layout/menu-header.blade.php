
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
                <li><a href="/">{{Str::ucfirst('Accueil')}}</a></li>
                <li><a href="/a-propos">{{Str::ucfirst('A propos du Ve RGPH')}}</a></li>
                <li><a href="/structure-organisationnelle">{{Str::ucfirst('Structure Organisationnelle')}}</a></li>
                <li><a href="/cadre-legal">{{Str::ucfirst('Cadre Légal')}}</a></li>
                <li><a href="/partenaires">{{Str::ucfirst('Partenaires')}}</a></li>

            </ul>
        </div>
    </div>
</nav>


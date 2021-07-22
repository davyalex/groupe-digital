

<div class="header" id="home">
    <div class="content white agile-info">
        <nav class="navbar navbar-default" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
                    <style>
                        .logo{
                            width: 180px;
                            margin-top: -35px;
                        }
                    </style>
                    <a class="navbar-brand" href="/">
                        <img class="img-fluid img-responsive figure-img logo" src="{{ asset('images/logo.png') }}" alt="">
                        {{-- <h1><i class="fa fa-caret-square-o-up" aria-hidden="true"></i> Groupe <label style="color:#ff9800;text-align:right;">digital</label></h1> --}}
                    </a>
                </div>
                <!--/.navbar-header-->

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <nav class="link-effect-2" id="link-effect-2">
                        <ul class="nav navbar-nav">
                            <li><a href="/" class="effect-3"><i class="fa fa-home " aria-hidden="true"></i> Acceuil</a></li>
                            {{-- <li><a href="/" class="effect-3">Services</a></li> --}}

                            <li class="dropdown">
                                <a href="{{ route('Acceuil') }}" class="dropdown-toggle effect-3" data-toggle="dropdown">L'entreprise <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#modalDev" data-toggle="modal" data-target="#modalDev"><strong>Nos services</strong></a></li>
                                    <li class="divider"></li>
                                    <li><a href="#modalMark" data-toggle="modal"><strong>Nos Packages</strong></a></li>
                                    <li class="divider"></li>
                                    <li><a href="#modalMul" data-toggle="modal"><strong>Nos Réalisations</strong></a></li>
                                    <li class="divider"></li>
                                    <li><a href="#modalMain" data-toggle="modal"><strong>Nos Partenaires</strong></a></li>
                                    <li class="divider"></li>
                                   
                                </ul>
                            </li>

                            {{-- <li><a href="/offre.index" class="effect-3">Offres</a></li> --}}

                          

                            <li class="dropdown">
                                <a href="services.html" class="dropdown-toggle effect-3" data-toggle="dropdown">Devenir Freelance <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ route('freelance.index') }}"class=""><i class="fa fa-search" aria-hidden="true"></i> <b>Rechercher un service</b></a></li>
                                    <li class="divider"></li>
                                    <li><a href="{{ route('freelance.create') }}" class=""><i class="fa fa-plus    "></i> <b>Publier un service</b></a></li>
                                    <li class="divider"></li>
                                    <li><a href="{{ route('freelance.mesannonces') }}" class=""><i class="fa fa-list    "></i> <b>Mes annonces</b></a></li>

                                    {{-- <li class="divider"></li>
                                    <li><a href="codes.html">Multimedia</a></li>
                                    <li class="divider"></li>
                                    <li><a href="icons.html">Formations</a></li>
                                    <li class="divider"></li> --}}
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="" class="dropdown-toggle effect-3" data-toggle="dropdown">Emplois & Stages <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    {{-- @forelse ($category as $categories)
                                   
                                    <li><a href="/offre.index?category={{ $categories->id}}">{{ $categories->libelle}}</a><span>({{ $categories->offres->count() }})</span></li>
                                    <li class="divider"></li>
                                    @empty
                                    PAS DE CATEGORY
                                    @endforelse --}}
                                    <li><a href="{{ route('offre.index') }}" class=""> <i class="fa fa-list" aria-hidden="true"></i> <b>Voir les offres</b></a></li>
                                    <li class="divider"></li>
                                    <li ><a href="{{ route('offre.useroffre_create') }}" data-toggle="modal" class="" style="font-weigth:bold;"><i class="fa fa-plus" aria-hidden="true"></i><b> Publier une offre</b></a></li>

                                </ul>
                            </li>
                         

                            @guest
                            <li class="dropdown">
                                <a href="pages.formation" class="dropdown-toggle effect-3" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i> <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    @if (Route::has('login'))
                                    <li><a href="{{ route('login') }}"><b>Connectez-vous</b></a></li>
                                        <div class="divider"></div>
                                    @endif
                                    @if (Route::has('register'))
                                    <li><a href="{{ route('register') }}"><b>Creer un compte</b></a></li>
                                    @endif

                                    @endguest
                                   
                                     @auth
                                    
                                     <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                           <i class="fa fa-user" aria-hidden="true"></i> <span class="text-success">{{ Auth::user()->name }}</span>
                                        </a>
                                        {{-- @if (Auth::user()->is_admin==1 OR Auth::user()->email=="groupe-digital@gmail.com" )
                                        <li><a href="{{ route('register') }}"><b>Dashboard</b></a></li>
                                        @endif --}}
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                          
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                <i class="fa fa-sign-out"></i> <strong class="text-center">{{ __('Deconnexion') }}</strong>
                                            </a>
                                           
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                           
                                        </div>
                                    </li>
                                     @endauth
                                    
                                   
                                </ul>
                            </li> 
                         
                            {{-- <li><a href="contact.html" class="effect-3">nous joindre</a></li> --}}
                        </ul>
                    </nav>
                </div>
                <!--/.navbar-collapse-->
                <!--/.navbar-->
            </div>
        </nav>
    </div>
</div>



<style>

.blog-grid:hover{
    box-shadow:4px 6px 8px 4px #cecece;background-color:#FFF;
   
    
}
.blog-grid{
  
    border-bottom: solid #ff9900
    
}
/* .ban_o:hover{
  
    box-shadow:4px 6px 8px 4px #cecece;background-color:#23b684;
    color: #fff
} */

.ban_o h2{
   color: white;
   text-transform: capitalize;
   font-size: 40px
}
.ban_o {
    box-shadow: 0 0 25px rgba(0, 0, 0, 0.25);
    padding: 70px 50px 40px 50px;
    background-color: #2196f3;border-bottom: solid #2196f3
}

}
.ban_o:hover{
   
    border-bottom: solid #ff9900
}
  .ban{
     background:transparent
  }
  .h_o{
        font-family: 'Roboto', sans-serif;
        font-weight: 400;
        margin: 0 0 15px;
        color: #26547c;
        text-align: center;
        font-weight: bold
    }
    .btn-primary{
        background-color: #26547c;
    border-color: #26547c;
    color: #ffffff;
    }
    .btn-info{
        background-color: white;
    border-color: #ffffff;
    color: #2158f3;
    margin: 5px;
    font-weight: bold;
    border-radius: 30px
    }
    .fa-html5,.fa-desktop{
        width: 100px;
    height: 100px;
    line-height: 100px;
    text-align: center;
    border-radius: 100%;
    color: #ffffff;
    background-color: #ff5722;
    border-color: #ff5722;
    font-size: 50px;
    margin-top: 30px
    }

    .fa-camera,.fa-wifi{
        width: 100px;
    height: 100px;
    line-height: 100px;
    text-align: center;
    border-radius: 100%;
    color: #ffffff;
    background-color: #ff9900;
    border-color: #a800ff;
    font-size: 50px;
    margin-top: 30px
    }
    .fa-facebook,.fa-windows{
        width: 100px;
    height: 100px;
    line-height: 100px;
    text-align: center;
    border-radius: 100%;
    color: #ffffff;
    background-color: #3f51b5;
    border-color: #3f51b5;
    font-size: 50px;
    margin-top: 30px
    }
    
</style>
<div class="container-fluid" >
    <div class="row">
    {{-- <h2 class="h_o">Offres Emploi - Stage - Freelance sont disponibles</h2> --}}
        <div class="col-md-12">
       <p class="text-center" style="font-size:17px;">
        Bienvenue chez <strong>GROUPE DIGITAL</strong> !, notre <strong>agence digital</strong> a pour objectif d’aider les entreprises à développer leurs activités grâce à internet. C’est pour cela que nous proposons des services <strong> de création de site internet, de gestion des comptes sur les réseaux sociaux, d’infographie, de référencement web, d’acquisition de trafic, de publicité sur internet, de stratégie digitale et d’accompagnement.</strong>
        <br>
        En effet, plus de 80 % de la population mondiale est connectée à Internet. Par conséquent, internet représente un marché potentiel pour une entreprise souhaitant accroître ses parts de marché.  C’est à cet effet que nous aidons et accompagnons les PME dans leur transformation digitale. Cela leur permet d’être plus compétitif et d’accroître leurs parts de marché. En plus, nos services visent à accroître votre visibilité, améliorer votre notoriété et accroître votre chiffre d’affaires.
       </p>
    </div>
</div>
<div class="container">
    <div class="inner_sec_grids_info_w3ls">
        <hr>
        <h2 class="h_o">NOS SERVICES <i class="fa fa-caret-square-o-down" aria-hidden="true"></i></h2>
        <p class="text-center">ENSEMBLE POUR LA TRANSFORMATION DIGITALE</p>
        <br><div class="col-md-4 blog-grid one">
            <a class="" href="#modalDev" data-toggle="modal"><i class="fa fa-html5" aria-hidden="true"></i></a>
            <div class="events_info">
                {{-- <h5>Oct 12,2017</h5> --}}
                <h4> <a class="" href="#modalDev" data-toggle="modal">Develeppement web & mobile</a></h4>
                {{-- <a class="btn btn-primary btn-lg" href="#modalDev" data-toggle="modal">Savoir plus »</a> --}}

                {{-- <p>Création et refonte de site web vitrine, e-commerce et institutionnels.</p>
                <p>Conception d'application mobile, web, desktop et autres</p> --}}

            </div>
        </div>
        <div class="col-md-4 blog-grid one">
            <a class="" href="#modalMul" data-toggle="modal"><i class="fa fa-camera" aria-hidden="true"></i></a>
            <div class="events_info">
                {{-- <h5>Oct 26,2017</h5> --}}
                <h4> <a class="" href="#modalMul" data-toggle="modal">Multimedia</a></h4>
                {{-- <a class="btn btn-primary btn-lg" href="#modalMul" data-toggle="modal">Savoir plus »</a> --}}
                {{-- <p>Charte graphique et Conception de visuels : carte de visite, flyers, kakemonos, affiches, logo.</p> --}}
                {{-- <p>Couverture mediatique,conception de video publicitaire</p> --}}
            </div>
        </div>
        <div class="col-md-4 blog-grid one lost">
            <a class="" href="#modalMark" data-toggle="modal"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <div class="events_info">
                {{-- <h5>Nov 06,2017</h5> --}}
                <h4> <a class="" href="#modalMark" data-toggle="modal">Marketing digital</a></h4>
                {{-- <p>Gestion de vos pages et communautés sur les réseaux sociaux.</p> --}}
                {{-- <a class="btn btn-primary btn-lg" href="#modalMark" data-toggle="modal">Savoir plus »</a> --}}

            </div>
        </div>
        <div class="col-md-4 blog-grid">
            <a class="" href="#modalRes" data-toggle="modal"><i class="fa fa-wifi" aria-hidden="true"></i></a>
            <div class="events_info">
                {{-- <h5>Oct 12,2017</h5> --}}
                <h4> <a class="" href="#modalRes" data-toggle="modal">Reseau informatique</a></h4>
                {{-- <p>Lorem ipsum dolor sit amet,vehicula vel sapien et, feugiat sapien amet.</p> --}}
                {{-- <a class="btn btn-primary btn-lg" href="#modalRes" data-toggle="modal">Savoir plus »</a> --}}
            </div>
           
        </div>
        <div class="col-md-4 blog-grid">
            <a class="" href="#modalMain" data-toggle="modal"><i class="fa fa-windows" aria-hidden="true"></i></a>
            <div class="events_info">
                {{-- <h5>Oct 26,2017</h5> --}}
                <h4> <a class="" href="#modalMain" data-toggle="modal">Maintenance informatique</a></h4>
                {{-- <a class="btn btn-primary btn-lg" href="#modalMain" data-toggle="modal">Savoir plus »</a> --}}

                {{-- <p>Lorem ipsum dolor sit amet,vehicula vel sapien et, feugiat sapien amet.</p> --}}
            </div>
        </div>
        <div class="col-md-4 blog-grid lost">
            <a class="" href="#modalForm" data-toggle="modal"><i class="fa fa-desktop" aria-hidden="true"></i></a>
            <div class="events_info">
                {{-- <h5>Nov 06,2017</h5> --}}
                <h4>  <a class="" href="#modalForm" data-toggle="modal">Formations digital</a></h4>
                {{-- <a class="btn btn-primary btn-lg" href="#modalForm" data-toggle="modal">Savoir plus »</a> --}}

                {{-- <p>Lorem ipsum dolor sit amet,vehicula vel sapien et, feugiat sapien amet.</p> --}}
                
            </div>
            
        </div>
        <div class="clearfix"></div>

    </div>

</div>
<hr>

<div class="container-fluid">
    <div class="row ban_o">
        <div class="col-md-8 text-center ">
            <h2 class="h_o">Devenir freelance chez Groupe digital</h2>
            <p style="color:white; background-color:#2158f3;border-radius:30px;">Publier vos services ,experiences et réalisations et obtenez des contrats en tant que freelance</p>
            {{-- @include('pages.partials.carousel_freelance') --}}

        </div>
            <div class="col-md-4 ">
               <a class="btn btn-info btn-lg" href="{{ route('freelance.create') }}">Publier un service »</a>  
               <a class="btn btn-info btn-lg" href="{{ route('freelance.index') }}">Rechercher un service »</a>  
            </div>
    </div>
</div>

<br>
<div class="container-fluid">
    <div class="row ban_o">
        <div class="col-md-8 text-center ">
            <h2 class="h_o">Decouvrez les offres d'emplois et stages disponibles</h2>
            <p style="color:white; background-color:#2158f3; border-radius:30px;">Consulter les offres ou poster une offres  </p>
            @include('pages.partials.carousel_offre')

        </div>
            <div class="col-md-4 ">
                <a class="btn btn-info btn-lg" href="{{ route('offre.index') }}">Voir les offres »</a>  
                <a class="btn btn-info btn-lg" href="{{ route('offre.useroffre_create') }}">Publier une offre »</a>  
            </div>
    </div>
</div>

<hr>

<hr>






<!--------------------------------*modal dev web*------------------------------->

{{-- <div id="modalDev" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="my-modal-title">Title</h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Content</p>
            </div>
            <div class="modal-footer">
                Footer
            </div>
        </div>
    </div>
</div> --}}

<!--------------------------------*//modal dev web*------------------------------->

<hr>
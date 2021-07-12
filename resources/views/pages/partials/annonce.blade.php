
        <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
            {{-- <ul id="myTab" class="nav nav-tabs" role="tablist">
                <li role="" class="active"><a href="#home" >Entreprise recrute</a></li>
            </ul>    --}}
         
            
            <div id="myTabContent" class="tab-content">
           
                <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
             
                    @forelse ($offre as $offres)

                    <div class="tab_grid border ">
                      <style>
                          .divann:hover{
                            box-shadow:4px 6px 8px 4px #cecece;background-color:#FFF;
                           
                          }
                          .divann{
                           /* border-style: solid;
                           border-color: #23b684;
                           border-width: 4px; */
                            
                          }
                      </style>
               
                        <div class=" col-md-12 col-sm-12 divann " style="">
                            <div class="location_box1">
                               <a href="#yourModal"data-toggle="modal" data-target="#myModal{{ $offres->id }}"> <h6 style="font-weight:bold;"><span class="m_1" style="float:right;color:#23b684;" >  <i class="fa fa-caret-square-o-right" aria-hidden="true"></i> {{ $offres->type }} </span>{{ $offres->titre }}</h6></a>
                                <ul class="links_bottom">
                                
                                    <li><i class="fa fa-calendar" aria-hidden="true"></i> <span class="icon_text">Date limite <i class="text-danger">{{ $offres->date_expire }}</i></span></a></li>

                                </ul>
                               
                             
                            </div>
                        </div>
                        {{-- {{  $offre->links('pagination::bootstrap-4')}}     --}}
                      
                      
                        <div class="clearfix"> </div>
                    </div>  
                    @empty
                    <h1 class="text-warning text-center ">Pas d'offre disponible </h1>
                    @endforelse    
                </div>
    

            
                
        
            </div>
        </div>
   



<!--*****************************************Modal offre detail**********************-->
@forelse ($offre as $offres)

    
<div id="myModal{{ $offres->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
   <div class="modal-dialog" role="document">
    <div class="modal-content">
        <style>
            .modal-body p{
                border-block-end-style: groove;
                margin-bottom: 15px;
                border-width: 3px
            
            }
        </style>
            
        <div class="modal-body">
            <p><strong>Poste:</strong>{{ $offres->titre }}</p>
            <p><strong>Type d'offre:</strong>{{ $offres->type }}</p>
            <p><strong>Spécialité:</strong>{{ $offres->categories->libelle }}</p>
            <p><strong>Date de pubication:</strong>{{ $offres->created_at->diffForHumans() }}</p>
            <p><strong>Date limite:</strong>{{ $offres->date_expire }}</p>
           <h4 class="text-center"> <strong ><u>Description du poste</u></strong></h4>{{ $offres->detail }}
        </div>
    </div>
</div>
</div>
@empty
@endforelse
    


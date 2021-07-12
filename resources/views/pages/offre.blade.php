@extends('layouts.template')
@section('title','Offres')
    <style>
        ul .catli li{
           list-style: none;
           display: inline-block;
           color: black;
           font-weight: bolder;
           text-transform: capitalize;
           margin: 5px
        }
        ul .catli li:hover{
    
          text-decoration-color: #ff9900;
         text-decoration-style: double;
         text-decoration-line: overline;
         color: #000066;
        }

    </style>
    @section('content')
     @include('pages.partials.inner')

        <div class="container" style="box-shadow:0 6px 8px 0 #cecece;background-color:#FFF;">
            <div class="row">
                <div class="col-md-12">
                    <ul>
                        @foreach ($category as $categories)
                           <a href="/offre.index?category={{ $categories->id}}"class="catli"> <li>{{ $categories->libelle }}</li><span>({{ $categories->offres->count() }})</span></a> <b style="color:#000066;">|</b>
                        @endforeach
                        
                    </ul>
                </div>
               
                <div class="col-md-10 col-sm-12 col-xs-12 col-md-offset-1 "style="margin-bottom:40px;">
                    @include('pages.partials.search_offre')
                </div>
            </div>   
        </div>





         <!--**************************PUB HORIZONTAL*******************-->
        <br><div class="container">
            <div class="d-flex flex-row">
                <div class="col-md-12">
                    <div class="divpub">
                        <img class="img-fluid" src="{{ asset('images/pub.png') }}" alt="" >
                        {{-- <img class="figure-img img-fluid" src="{{ asset('images/banner3.jpg') }}" alt=""> --}}

                     </div>
                </div>
               
            </div>
        </div>
 <!--**************************///PUB HORIZONTAL*******************-->


        <br><div class="container" >
            <div class="row">
               
                <div class="col-md-8"style="box-shadow:0 6px 8px 0 #cecece;background-color:#FFF;">                
                        @include('pages.partials.annonce')
                        
                </div>

                

 <!--**************************PUB LATERAL*******************-->
              
                <div class="col-md-4 ">


                    @include('pages.pagepub.pub')



                   {{-- <div class="divpub">
                       <img class="img-fluid" src="{{ asset('images/pub.png') }}" alt="" >
                       <img class="figure-img img-fluid" src="{{ asset('images/special maman2.jpg') }}" alt="">
                    </div>

                   <div class="divpub">
                    <img class="img-fluid" src="{{ asset('images/pub.png') }}" alt="">
                    <img class="figure-img img-fluid" src="{{ asset('images/CM.jpg') }}" alt="">
                   </div>

                   <div class="divpub">
                    <img class="img-fluid" src="{{ asset('images/pub.png') }}" alt="">
                    <img class="figure-img img-fluid" src="{{ asset('images/FORMATION.jpg') }}" alt="">
                   </div> --}}

                </div>
<!--**************************PUB LATERAL*******************-->
            </div>
        </div>
            <hr>
            <div class="clearfix"></div>
      
   
    
    @endsection
    

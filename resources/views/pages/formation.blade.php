@extends('layouts.template')

@section('title','Formations')
    
@section('content')
    @include('pages.partials.inner')
   
    <div class="container">
        <div class="inner_sec_grids_info_w3ls">
            <div class="col-md-4 blog-grid one">
                <a class="" href="#modalDev" data-toggle="modal"><img src="" alt=""></a>
                <div class="events_info">
                    {{-- <h5>Oct 12,2017</h5> --}}
                    <h4> <a class="" href="#modalDev" data-toggle="modal">Develeppement web & mobile</a></h4>
                    <a class="btn btn-primary btn-lg" href="#modalDev" data-toggle="modal">Savoir plus »</a>
    
                    {{-- <p>Lorem ipsum dolor sit amet,vehicula vel sapien et, feugiat sapien amet.</p> --}}
    
                </div>
            </div>
            <div class="col-md-4 blog-grid one">
                <a class="" href="#modalMul" data-toggle="modal"><img src="" alt=""></a>
                <div class="events_info">
                    {{-- <h5>Oct 26,2017</h5> --}}
                    <h4> <a class="" href="#modalMul" data-toggle="modal">Multimedia</a></h4>
                    <a class="btn btn-primary btn-lg" href="#modalMul" data-toggle="modal">Savoir plus »</a>
    
                    {{-- <p>Lorem ipsum dolor sit amet,vehicula vel sapien et, feugiat sapien amet.</p> --}}
                </div>
            </div>
            <div class="col-md-4 blog-grid one lost">
                <a class="" href="#modalMark" data-toggle="modal"><img src="" alt=""></a>
                <div class="events_info">
                    {{-- <h5>Nov 06,2017</h5> --}}
                    <h4> <a class="" href="#modalMark" data-toggle="modal">Marketing digital</a></h4>
                    {{-- <p>Lorem ipsum dolor sit amet,vehicula vel sapien et, feugiat sapien amet.</p> --}}
                    <a class="btn btn-primary btn-lg" href="#modalMark" data-toggle="modal">Savoir plus »</a>
    
                </div>
            </div>
            <div class="col-md-4 blog-grid">
                <a class="" href="#modalRes" data-toggle="modal"><img src="" alt=""></a>
                <div class="events_info">
                    {{-- <h5>Oct 12,2017</h5> --}}
                    <h4> <a class="" href="#modalRes" data-toggle="modal">Depannage & Mise en place Reseau informatique</a></h4>
                    {{-- <p>Lorem ipsum dolor sit amet,vehicula vel sapien et, feugiat sapien amet.</p> --}}
                    <a class="btn btn-primary btn-lg" href="#modalRes" data-toggle="modal">Savoir plus »</a>
                </div>
               
            </div>
            <div class="col-md-4 blog-grid">
                <a class="" href="#modalMain" data-toggle="modal"><img src="" alt=""></a>
                <div class="events_info">
                    {{-- <h5>Oct 26,2017</h5> --}}
                    <h4> <a class="" href="#modalMain" data-toggle="modal">Maintenance informatique</a></h4>
                    <a class="btn btn-primary btn-lg" href="#modalMain" data-toggle="modal">Savoir plus »</a>
    
                    {{-- <p>Lorem ipsum dolor sit amet,vehicula vel sapien et, feugiat sapien amet.</p> --}}
                </div>
            </div>
            <div class="col-md-4 blog-grid lost">
                <a class="" href="#modalForm" data-toggle="modal"><img src="" alt=""></a>
                <div class="events_info">
                    {{-- <h5>Nov 06,2017</h5> --}}
                    <h4>  <a class="" href="#modalForm" data-toggle="modal">Formations digital</a></h4>
                    <a class="btn btn-primary btn-lg" href="#modalForm" data-toggle="modal">Savoir plus »</a>
    
                    {{-- <p>Lorem ipsum dolor sit amet,vehicula vel sapien et, feugiat sapien amet.</p> --}}
                    
                </div>
                
            </div>
            <div class="clearfix"></div>
    
        </div>
    
    </div>
    <hr>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center ban_o">
                <br>
                    <h2>Offres Emploi - Stage - Freelance sont disponibles</h2>
                    <a class="btn btn-primary" href="{{ route('offre.index') }}">Savoir plus »</a>  
            <hr>
                </div>
        </div>
    </div>
    <hr>
    
@endsection

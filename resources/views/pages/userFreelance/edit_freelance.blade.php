@extends('layouts.template')

@section('title', 'Modification du poste')
    
@section('content')
    @include('pages.partials.inner')

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="alert alert-info" >
               
            </div>
          
        </div>
    </div>
</div>

   <div class="container">
        <style>
            .divForm label i{
             color: #43c791;
            }

            .divForm :hover{
            box-shadow:0 6px 8px 0 #cecece ;
            background-color: #FFF;
            }
            .row {
             /* box-shadow:0 6px 8px 0 #cecece ; */
             background-color: #FFF;
            }
            button{
                margin:10px; 
            }

            .btn-group{
                text-align: center
            }
        </style>
       <hr> <div class="d-flex flex-row row">
            <br><div class="col-md-6 col-md-offset-3 divForm" >
                @if ($message=Session::get('SuccessMsg'))
                <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">{{ $message }}</h4>
                </div>
                @endif


                @if ($errors->any())
                @foreach ($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    {{ $error }}
                 </div>   
                @endforeach
                 @endif
                <form action="{{ route('freelance.update',$freelances->id) }}" method="post" class="form-horizontal">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="my-input"><i class="fa fa-user" aria-hidden="true"></i> Votre Nom & Prenoms</label>
                        <input id="my-input" class="form-control" type="text" name="nom" value="{{ $freelances->nom }}">
                    </div>
                    <div class="form-group">
                        <label for="my-input"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Votre Spécialité</label>
                        <input id="my-input" class="form-control" type="text" name="specialite"value="{{ $freelances->specialite }}">
                    </div>
                    <div class="form-group">
                        <label for="my-input"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Votre Experience</label>
                        <input id="my-input" class="form-control" type="number" name="experience"value="{{ $freelances->experience }}">
                    </div>
                    <div class="form-group">
                        <label for="my-input"><i class="fa fa-whatsapp" aria-hidden="true"></i> Votre contact <i>(+225 xxxxxxxx)</i></label>
                        <input id="my-input" class="form-control" type="text" name="contact" value="{{ $freelances->contact }}" >
                    </div>
                    <div class="form-group">
                        <label for="my-input"><i class="fa fa-envelope" aria-hidden="true"></i> Votre email</label>
                        <input id="my-input" class="form-control" type="email" name="email" value="{{ $freelances->email }}">
                    </div>
                    <div class="form-group">
                        <label for="my-textarea"><i class="fa fa-pencil" aria-hidden="true"></i> Decrivez vos services</label>
                        <textarea id="my-textarea" class="form-control" name="detail" rows="10">{{ $freelances->detail }}</textarea>
                    </div>
                    <div class=" text-center">
                        <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Valider</button>
                        <button type="reset" class="btn btn-danger "><i class="fa fa-cross"></i> Annuler</button>
                    </div><br>
                </form>
            </div>
        </div>
    <hr></div>




   
@endsection
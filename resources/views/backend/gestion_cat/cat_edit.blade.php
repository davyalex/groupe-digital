@extends('layouts.app')


@section('title', 'Modifier une categorie')
    



@section('content')
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <br> <br>

                <div class="card">
                    <div class="card-header">
                        <a href="" class="btn btn-success">  Liste des offres</a>  
                        <a href="{{ route('offre.create') }}" class="btn btn-primary">  Ajouter Offres</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('cat.update',$categories->id) }}" method="post" class="form-horizontal">
                            @csrf
                            @method('PUT')

                            @if ($message=Session::get('SuccessMsg') )
                                <div class="alert alert-success" role="alert">
                                    <p> <strong>{{ $message }}</strong> </p>
                                </div>
                            @endif
                            
                            <div class="form-group">
                                 <label for="my-input">Libelle</label>
                                 <input id="my-input" class="form-control" type="text" name="libelle" value="{{ $categories->libelle }}" >
                             </div>
                              <div class="text-center">
                                  <button type="submit" class="btn btn-success" >Enregistrer</button>
                                  <button type="reset" class="btn btn-danger">Annuler</button>
                              </div>
                          </form>
                    </div>
                      
                 
                </div>
            </div>
        </div>
    </div>


@endsection
@extends('layouts.template')

@section('title','Poster une offre')

@section('content')
@include('pages.partials.inner')

    <div class="container">
        <div class="row" >
            <div class="col-md-6 col-md-offset-3">
                <br>
                <form action="{{ route('offre.store') }}" method="post" class="form-horizontal">
                    @csrf
                  
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
                
                    <div class="form-group">
                         <label for="my-input">Titre de l'offre</label>
                         <input id="my-input" class="form-control" type="text" name="titre">
                     </div>
                     <div class="form-group">
                        <label for="my-input">Type d'offre</label>
                        <select name="type" id="selectType" class="form-control">
                            @foreach ($type as $types)
                            <option value="{{ $types->libelle }}">{{ $types->libelle }}</option>
                            @endforeach
                          
                        </select>
                    </div>
                    <script type="text/javascript">
                        $('#selectType').select2();
                     
                    </script>
                     <div class="form-group">
                         <label for="my-input">Category</label>
                         <select   name="category_id" id="selectCategory" class="form-control">
                             @foreach ($category as $categories)
                             <option value="{{ $categories->id}}">{{ $categories->libelle }}</option>
                             @endforeach
                         </select>
                     </div>
                
                     <script type="text/javascript">
                        $('#selectCategory').select2();
                    </script>
                     <div class="form-group">
                         <label for="my-textarea">Description</label>
                         <textarea id="edit" class="form-control" name="detail" rows="3"></textarea>
                     </div>
                      <div class="form-group">
                          <label for="my-input">Date expiration</label>
                          <input id="my-input" class="form-control" type="date" name="date_expire">
                      </div>
                      <div class="text-center">
                          <button type="submit" class="btn btn-success" >Enregistrer</button>
                          <button type="reset" class="btn btn-danger">Annuler</button>
                      </div>
                  </form>
                  <br>
            </div>
        </div>
    </div>
    <hr>
@endsection
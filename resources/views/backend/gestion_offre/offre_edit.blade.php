@extends('layouts.app')


@section('title', 'Editer une offre')
    



@section('content')
    
    <div class="container-fluid">
        <div class="row justify-content-center">

          
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('offre.create') }}" class="btn btn-success">  Liste des offres</a>  
                        {{-- <a href="{{ route('cat.create') }}" class="btn btn-primary">  Categorie</a> --}}
                    </div>
                    <div class="card-body">
                        <form action="{{ route('offre.update',$offres->id) }}" method="post" class="form-horizontal">
                            @csrf
                            @method('PUT')
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
                                 <input id="my-input" class="form-control" type="text" name="titre" value="{{ $offres->titre }}">
                             </div>
                             <div class="form-group">
                                 <label for="my-input">Specialité</label>
                                 <select  name="category_id" id="category" class="form-control">
                                     @foreach ($categories as $category)
                                     <option value="{{ $category->id}}">{{ $category->libelle}}</option>
                                     {{-- <option value="{{ $category->id}}"{{ in_array($category->id, old('category') ? : $offres->categories->pluck('id')->toArray()) ? 'selected': ''  }}>{{ $category->libelle }}</option> --}}
                                     @endforeach
                                 </select>
                             </div>
                             <div class="form-group">
                                <label for="my-input">Type offre</label>
                                <select   name="type" id="type" class="form-control" >
                                    @foreach ($types as $type)
                                    <option value="{{ $type->libelle}}">{{  $type->libelle}}</option>
                                    @endforeach
                                    
                                    {{-- <option value="{{ $offres->type }}"{{ in_array($offres->id, old('offre') ? : $offres->pluck('id')->toArray()) ? 'selected': ''  }}>{{ $offres->type }}</option> --}}
                          
                                </select>
                               
                            </div>
                             <div class="form-group">
                                 <label for="my-textarea">Description</label>
                                 <textarea id="my-textarea" class="form-control" name="detail" rows="3" >{{ $offres->detail }}</textarea>
                             </div>
                              <div class="form-group">
                                  <label for="my-input">Date expiration</label>
                                  <input id="my-input" class="form-control" type="date" name="date_expire"value="{{ $offres->date_expire }}">
                              </div>
                              <div class="text-center">
                                  <button type="submit" class="btn btn-success" >Enregistrer</button>
                                  <button type="reset" class="btn btn-danger">Annuler</button>
                              </div>
                              <script type="text/javascript">
                                $('#type').select2();
                            </script>
                             <script type="text/javascript">
                                $('#category').select2();
                            </script>
                          </form>
                    </div>

                   
                  
                    
                </div>
               
            </div>
           
        </div>
    </div>

@endsection
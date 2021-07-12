@extends('layouts.app')


@section('title', 'Ajouter une categorie')
    



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
                        <form action="{{ route('type.store') }}" method="post" class="form-horizontal">
                            @csrf

                            @if ($message=Session::get('SuccessMsg') )
                                <div class="alert alert-success" role="alert">
                                    <p> <strong>{{ $message }}</strong>  Ajouté</p>
                                </div>
                            @endif
                            @if ($message=Session::get('DestroyMsg') )
                            <div class="alert alert-danger" role="alert">
                                <p> <strong>{{ $message }}</strong>  Supprimé</p>
                            </div>
                        @endif
                            <div class="form-group ">
                                 <label for="my-input">Libelle</label>
                                 <input id="my-input" class="form-control" type="text" name="libelle">
                             </div>
                              <div class="text-center">
                                  <button type="submit" class="btn btn-success">Enregistrer</button>
                                  <button type="reset" class="btn btn-danger">Annuler</button>
                              </div>
                          </form>
                          {{-- <a class="btn btn-primary clone" >clone</a> --}}

                    </div>
                        <hr>
                    {{-- <table class="table table-responsive table-striped table-bordered">
                        <thead>
                           <tr>
                               <th>#</th>
                               <th>Libellé</th>
                               
                           </tr>
                        </thead>
                        <tbody>
                              @foreach ($category as $key=>$categories)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{ $categories->libelle }}</td>
                                
                                <td><a href="{{ route('cat.edit',$categories->id) }}" class="btn btn-success">Edit</a></td>
                                {{-- <td><a href=""class="btn btn-warning">View</a></td>  --}}
                                {{-- <td>
                                    <form action="{{ route('cat.destroy',$categories->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"class="btn btn-danger">Trash</button>
                                    </form>
                                </td>  
                                
                            </tr>
                             @endforeach
                        </tbody>
                    
                    </table> --}} 
              
                </div>
                {{-- {{ $category->links('pagination::bootstrap-4') }}  --}}
            </div>
        </div>
    </div>

<div id="my-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <p>Content</p>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">

// $('.clone').click(function(){
//     var clone = $('.libelle').clone('.libelle');
//     $('.libelle').append(clone);
// })
</script>
@endsection

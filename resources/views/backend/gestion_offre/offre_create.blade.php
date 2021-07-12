@extends('layouts.app')


@section('title', 'Poster une offre')
    



@section('content')


    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        {{-- <a href="" class="btn btn-success">  Liste des offres</a>   --}}
                        {{-- <a href="{{ route('cat.create') }}" class="btn btn-primary"> <i class="fa fa-plus" aria-hidden="true"></i> Add Categorie</a> --}}
                        <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#my-modal"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add type</button>
                        <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#modalCat"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add category</button>

                    </div>
                    <div class="card-body">
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
                          <script>
                            (function () {
      new FroalaEditor("#edit")
    })()
                          </script>
                    </div>
                </div>
               
            </div>
           
        </div>
    </div>



    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Liste des offres
                    </div>
                    <div class="card-body">
                     <table class="table table-responsive table-striped table-bordered">
                         <thead>
                            <tr>
                                <th>#</th>
                                <th>Titre</th>
                                <th>Type offre</th>
                                <th>Specialité</th>
                                <th>Date expiration</th>
                               
                            </tr>
                         </thead>
                         <tbody>
                             @foreach ($offre as $key=>$offres)
                                 <tr>
                                     <td>{{ ++$key }}</td>
                                     <td>{{ $offres->titre }}</td>
                                     <td>{{ $offres->type}}</td>
                                     <td>{{ $offres->categories->libelle}}</td>
    
                                     <td>{{ $offres->date_expire }}</td>
                                     
                                       
                                   
                                     <td><a href="{{ route('offre.edit',$offres->id) }}" class="btn btn-success"><i class="fa fa-edit    "></i></a></td>
                                     <td> <a  class="btn btn-warning" data-toggle="modal" data-target="#mymodal{{ $offres->id }}" ><i class="fa fa-eye" aria-hidden="true"></i></a></td> 
                                     <td>
                                         <form action="{{ route('offre.destroy',$offres->id) }}" method="post">
                                             @csrf
                                             @method('DELETE')
                                             <button type="submit" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                         </form>
                                     </td> 
                                         
                                        @foreach ($offre as $offres)
                                             <div id="mymodal{{ $offres->id }}" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                         <div class="modal-dialog" role="document">
                                             <div class="modal-content">
                                                 <style>
                                                     .modal-body p{
                                                         border:1px solid #9e9e9e;
                                                         margin-bottom: 15px;
                                                     
                                                     }
                                                 </style>
                                                 <div class="modal-body">
                                                     <p><strong>Poste:</strong>{{ $offres->titre }}</p>
                                                     <p><strong>Type d'offre:</strong>{{ $offres->type }}</p>
                                                     <p><strong>Spécialité:</strong>{{ $offres->categories->libelle }}</p>
                                                     <p><strong>Date de pubication:</strong>{{ $offres->created_at->format('m/d/Y') }}</p>
                                                     <p><strong>Date limite:</strong>{{ $offres->date_expire }}</p>
                                                    <h4 class="text-center"> <strong >Description du poste</strong></h4>{{ $offres->detail }}
                                                 </div>
                                             </div>
                                         </div>
                                        </div>
                                        @endforeach
                                    
                                        
                                     
                                 </tr>
                             @endforeach
                         </tbody>
                     
                     </table>
                    </div>
                    {{  $offre->links('pagination::bootstrap-4')}}
                </div>
             </div>
    
        </div>
    </div>




    <!----------------------------------Modal Type----------------------------->
    <div id="my-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="my-modal-title">Ajout de type d'offre</h5>
                    <button class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <form action="{{ route('type.store') }}" method="post" class="form-horizontal ">
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

                        <table class="table table-responsive table-striped table-bordered">
                            <thead>
                               <tr>
                                   <th>#</th>
                                   <th>Libellé</th>
                                   
                               </tr>
                            </thead>
                            <tbody>
                               @foreach ($type as $key=>$types)
                                   <tr>
                                    <td>{{ ++$key }}</td>
                                       <td>{{ $types->libelle }}</td>
                                       <td>
                                           <form action="{{ route('type.destroy',$types->id) }}" method="post">
                                               @csrf
                                               @method('DELETE')
                                               <button type="submit" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                           </form>
                                       </td>
                                   </tr>
                               @endforeach
                            </tbody>
                        
                        </table>
                </div>
                <div class="modal-footer">
                    Footer
                </div>
            </div>
        </div>
    </div>
      <!---------------------------------- end Modal Type----------------------------->


      
    <!----------------------------------Modal Category----------------------------->
    <div id="modalCat" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="my-modal-title">Ajout de category</h5>
                    <button class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <form action="{{ route('cat.store') }}" method="post" class="form-horizontal form">
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

                    </div>
                        <hr>

                        <table class="table table-responsive table-striped table-bordered">
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
                                  
                                  <td><a href="{{ route('cat.edit',$categories->id) }}" class="btn btn-success"><i class="fa fa-edit    "></i></a></td>
                                  {{-- <td><a href=""class="btn btn-warning">View</a></td>  --}}
                                  <td>
                                      <form action="{{ route('cat.destroy',$categories->id) }}" method="post">
                                          @csrf
                                          @method('DELETE')
                                          <button type="submit"class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                      </form>
                                  </td>  
                                  
                              </tr>
                               @endforeach
                          </tbody>
                        
                        </table>
                        {{-- {{ $category->links('pagination::bootstrap-4') }}  --}}

                </div>
                <div class="modal-footer">
                    {{-- Footer --}}
                </div>
            </div>
        </div>
    </div>
      <!---------------------------------- end Modal Category----------------------------->

@endsection
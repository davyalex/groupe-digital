@extends('layouts.template')

@section('title', 'Poster mes services')
    
@section('content')
    @include('pages.partials.inner')
@auth
    
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="alert alert-info" >
                <a href="" data-toggle="modal" data-target="#myModal">
              <strong>Comment remplir le formulaire pour bien presenter ses services </strong>
                </a>
            </div>
          
        </div>
    </div>
</div>

     @if ($message=Session::get('SuccessMsg'))
                <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">{{ $message }}</h4>
                </div>
                @endif
     
                <div class="candidate">
                    <div class="tittle_head_w3ls">
                        <h3 class="tittle two">Integrer Digital groupe</h3>
                    </div>
                    <div class="inner_sec_grids_info login-form">
                        @if ($errors->any())
                        @foreach ($errors->all() as $error)
                        <div class="alert alert-danger" role="alert">
                            {{ $error }}
                         </div>   
                        @endforeach
                         @endif
                        <form action="{{ route('freelance.store') }}" method="post">
                            @csrf
                            <div class="col-md-6 form-left">
                                <div class="form-inputs email">
                                    <p>Nom & prenom  <i class="fa fa-user" aria-hidden="true"></i></p>
                                  
                                    <input type="text" name="nom" placeholder=""  />
                                </div>
                                <div class="form-inputs email">
                                    <p>Specialité  <i class="fa fa-graduation-cap" aria-hidden="true"></i></p>
                                  
                                    <input type="text" name="specialite" placeholder=""  />
                                </div>
                                <div class="form-inputs ">
                                    <p>Experience  <i class="fa fa-graduation-cap" aria-hidden="true"></i></p>
                                 
                                    <input type="number" name="experience" placeholder=""  />
                                </div>
                                <div class="form-inputs ">
                                    <p>Email   <i class="fa fa-envelope" aria-hidden="true"></i></p>
                                 
                                    <input type="email" name="email" placeholder=""  />
                                </div>
                                <div class="form-inputs ">
                                    <p>Contact    <i class="fa fa-whatsapp" aria-hidden="true"></i></p>
                                
                                    <input type="text" name="contact" placeholder=""  />
                                </div>
                
                            </div>
                            <div class="col-md-6 form-right">
                                <div class="form-inputs name">
                                    <p>Vos services</p>
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                    <textarea cols="30" rows="15" name="detail" placeholder=""id="edit"></textarea>
                                </div>
                            </div>
                            <script>
                                (function () {
          new FroalaEditor("#edit")
        })
                              </script>
                            <div class="clearfix"></div>
                            {{-- <div class="form-inputs">
                                <p>Specify your current employment status</p>
                                <ul>
                                    <li>
                                        <input type="radio" id="a-option" name="selector1">
                                        <label for="a-option">Employed </label>
                                        <div class="check"></div>
                                    </li>
                                    <li>
                                        <input type="radio" id="b-option" name="selector1">
                                        <label for="b-option">Unemployed</label>
                                        <div class="check"></div>
                                    </li>
                                    <li>
                                        <input type="radio" id="c-option" name="selector1">
                                        <label for="c-option">Self-Employed</label>
                                        <div class="check"></div>
                                    </li>
                                    <li>
                                        <input type="radio" id="d-option" name="selector1">
                                        <label for="d-option">Student</label>
                                        <div class="check"></div>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-inputs upload">
                                <p>Upload your resume</p>
                                <input type="file" id="fileselect" name="fileselect[]" multiple="multiple" />
                                <div id="filedrag">Upload</div>
                            </div> --}}
                            <input type="submit" value="Valider">
                        </form>

                
                    </div>
                </div>
                <hr>
    <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="my-modal-title">Information</h5>
                    <button class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                  <ul>
                      <li>Nom</li>
                      <li>Specialité</li>
                      <li>Experience</li>
                      <li>Contact</li>
                      <li>Email</li>
                      <li>Detail
                         <ul class="text-warning">
                             <li>Decrivez votre personnalité</li>
                             <li>Vos services en Detail si possible avec les tarifs</li>
                             <li>Noubliez pas de mettre vos pressbook, portfolio, liens de projets realisés </li>
                         </ul>
                      </li>
                  </ul>
                </div>
            </div>
        </div>
    </div>
@endauth
@endsection
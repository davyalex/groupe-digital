@extends('layouts.app')

@section('title','User_list')
    
@section('content')
    <div class="container">
        <div class="d-flex flex-row">
            <div class="col-md-6 col-md-offset-3">
                <div class="card">
                    <div class="card">
                        <div class="card-header">
                            {{-- <a href="{{ route('register') }}"class="btn btn-primary" >Creer un utilisateur</a> --}}

                          @if ($message=Session::get('SuccessMsg'))
                             <div class="alert alert-danger" role="alert">
                                  {{ $message }}
                              </div>
                              @endif
                                  
                              @if($message=Session::get('DestroyMsg'))
                              <div class="alert alert-danger" role="alert">
                                {{ $message }} <span>supprimé</span>
                            </div>
                          @endif
                        </div>
                        <div class="card-body">
                            {{-- <h5 class="card-title">Title</h5> --}}
                            <p class="card-text">
                                <table class="table  table-stripped table-light">
                                    <thead>
                                        <th>#</th>
                                        <th>Nom</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Inscrit depuis</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($user as $key=>$users)
                                           <div >
                                            <tr>
                                                <td>{{ ++$key }}</td>
                                           <td>{{ $users->name }}</td>
                                           <td>{{ $users->email }}</td>
                                           @if ($users->is_admin==1)
                                                    <td class="text-success" > admin</td>
                                               @else
                                               <td> user</td>
                                               @endif
                                               <td>{{ $users->created_at->format('d/m/Y') }}</td>
                                           <td><a class="btn btn-success" href="" data-toggle="modal" data-target="#myModal{{$users->id}}"><i class="fa fa-edit"></i></a></td>
                                               <td>
                                                   <form action="{{ route('userdestroy',$users->id) }}" method="post">
                                                       @csrf
                                                       @method('DELETE')
                                                       <button class="btn btn-danger" type="submit"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                   </form>
                                               </td>
                                       </tr>
                                      
                                           </div>
                                        @endforeach
                                    </tbody>
                                </table>

                                {{-- <script>
                                    $('#triAU').select2();
                                </script> --}}
                                @foreach ($user as $key=>$users)
                                <div id="myModal{{$users->id}}" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <p>
                                                    <form action="{{ route('userupdate',$users->id) }}" method="post">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="form-group">
                                                            <label for="my-input">Rôle</label>
                                                            <select name="is_admin" id="" class="form-control" >
                                                                <option value="" ></option>
                                                                <option value="0">User</option>
                                                                <option value="1">Admin</option>
                                                            </select>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary"><i class="fa fa-save    "></i></button>
                                                        
                                                    </form>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </p>
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection
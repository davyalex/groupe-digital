@extends('layouts.template')

@section('title', 'Freelance')
    
@section('content')
	@include('pages.partials.inner')
	@include('pages.partials.search_freelance');
    <div class="">
		<div class="container">
			{{-- <div class="tittle_head_w3ls">
				<form action="" method="post">
                   <div class="col-md-4 col-md-offset-4 form-group">
                       <label for="my-input">Rechercher un service</label>
                       <input id="my-input" class="form-control" type="search" name="">
                   <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </div>
                </form>
			</div> --}}
			<div class="inner_sec_grids_info_w3ls">
				<div class="col-md-8 col-sm-12 job_info_left">
                    @foreach ($freelance as $freelances)
					<div class="tab_grid_prof">
						<div class="col-sm-2 loc_1">
							<a href="single.html"><img src="images/avatar.jpg" alt=""></a>
                        </div>
                        <style>
                            
                        </style>
						<div class="col-sm-10">
							<div class="location_box1">
								<h6 style="text-transform:uppercase;">{{ $freelances->nom }}</h6>
								<span class="m_2_prof">{{ $freelances->specialite }}</span>
								<div class="person-info">
									<ul>

										<li><span>Status</span>: Freelance</li>
										{{-- <li><span>Gender</span>: Male</li>
										<li><span>Location</span>: Jackson, 538, USA</li> --}}
										<li><span>Experience(s)</span>: {{ $freelances->experience }} ans</li>
                                        {{-- <li><span>Contact</span>: {{ $freelances->contact }}</li> 
                                         <li><span>Email</span>: {{ $freelances->email }}</li> --}}

									</ul>
								</div>
								<div class="read"><a href="" data-toggle="modal" data-target="#myModal{{ $freelances->id }}" class="read-more"> Voir mes services</a></div>
									<div id="myModal{{ $freelances->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h2 class="modal-title alert alert-info" id="my-modal-title" class="" >Details de mes services</h2>
													<button class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<p>{{ $freelances->detail }}</p>
												</div>
												<div class="modal-footer ">
													<a href="mailto:"></a>
													<a href="tel:{{ $freelances->contact }}" class=""><i class="fa fa-whatsapp" aria-hidden="true"></i> {{ $freelances->contact }}</a>
													<a href="mailto:{{ $freelances->email }}" class=""><i class="fa fa-envelope" aria-hidden="true"></i> {{ $freelances->email }}</a>
												</div>
											</div>
										</div>
									</div>
								<ul class="top-btns">
									<li><a href="tel:{{ $freelances->contact }}" class=" fa fa-whatsapp "> <span class="" style="color:black; font-weight:bold;">{{ $freelances->contact }}</span></a></li>
									<li><a href="mailto:{{ $freelances->email }}" class="fa fa-envelope"> <span class=""style="color:black;font-weight:bold;">{{ $freelances->email }}</span></a></li>
								
								</ul>

							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
                    @endforeach
                </div>
                


				<div class="col-md-4 job_info_right">
					
					<div class="col_3 permit">
						<img class="img-fluid" src="{{ asset('images/pub.png') }}" alt="">
						{{-- <img class="figure-img img-fluid" src="{{ asset('images/CM.jpg') }}" alt=""> --}}

					
					</div>
					<div class="col_3 experience">
						<img class="img-fluid" src="{{ asset('images/pub.png') }}" alt="">
						{{-- <img class="figure-img img-fluid" src="{{ asset('images/MV.jpg') }}" alt=""> --}}

					</div>
					<div class="col_3 permit">
						<img class="img-fluid" src="{{ asset('images/pub.png') }}" alt="">
                    </div>
                    <div class="col_3 permit">
						<img class="img-fluid" src="{{ asset('images/pub.png') }}" alt="">
                    </div>
                    <div class="col_3 permit">
						<img class="img-fluid" src="{{ asset('images/pub.png') }}" alt="">
                    </div>
                    <div class="col_3 permit">
						<img class="img-fluid" src="{{ asset('images/pub.png') }}" alt="">
					</div>

				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>

    @endsection
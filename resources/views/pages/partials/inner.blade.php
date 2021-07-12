<div class="inner_page_agile">
    <h3>@yield('title')</h3>
    <p></p>

</div>
<div class="col-md-12 ">
    <div class="divpub ">
        <img class="img-fluid" src="{{ asset('images/pub.png') }}" alt="" >
     </div>
</div>
<div class="services-breadcrumb_w3layouts">
    <div class="inner_breadcrumb">

        <ul class="short_w3ls"_w3ls>
            <li><a href="javascript:history.go(-1)"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Retour</a><span>|</span> </li>
            <li><a href="/"> <i class="fa fa-home" aria-hidden="true"></i> Acceuil</a><span>|</span></li>
            <li>@yield('title')</li>
        </ul>
    </div>
</div>
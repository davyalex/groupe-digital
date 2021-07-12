<section id="demos">
    <div class="row">
     <div class="col-md-12">
        <div class="large-12 columns">
            <div class="owl-carousel owl-theme">
                @foreach ($freelance as $freelances)
                <div class="item" style="">
                    <a href="/freelance.index?freelance={{ $freelances->id}}">{{ $freelances->specialite}}</a>
                </div>
                @endforeach
            </div>
          </div>
     </div>
    </div>
    <script>
       $('.owl-carousel').owlCarousel({
        autoplay:true,
    autoplayTimeout:4000,
    loop:true,
    margin:10,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:5,
            nav:true,
            loop:false
        }
       
    }
})
      </script>
  </section>

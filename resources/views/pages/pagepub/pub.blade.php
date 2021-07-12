<section id="demos">
    <div class="large-12 columns">

        <div class="owl-carousel owl-theme">
        <div class="item divpub">
            {{-- <img class="img-fluid" src="{{ asset('images/pub.png') }}" alt=""> --}}
            {{-- <img class="figure-img img-fluid" src="{{ asset('images/CM.jpg') }}" alt=""> --}}
           </div>
           <div class="item divpub">
            {{-- <img class="img-fluid" src="{{ asset('images/pub.png') }}" alt=""> --}}
            <img class="figure-img img-fluid" src="{{ asset('images/special maman2.jpg') }}" alt="">
           </div>
        </div>
        <div class=" divpub">
            <img class="img-fluid" src="{{ asset('images/pub.png') }}" alt="">
            {{-- <img class="figure-img img-fluid" src="{{ asset('images/CM.jpg') }}" alt=""> --}}
           </div>
           <div class=" divpub">
            <img class="img-fluid" src="{{ asset('images/pub.png') }}" alt="">
            {{-- <img class="figure-img img-fluid" src="{{ asset('images/CM.jpg') }}" alt=""> --}}
           </div>
           <div class=" divpub">
            <img class="img-fluid" src="{{ asset('images/pub.png') }}" alt="">
            {{-- <img class="figure-img img-fluid" src="{{ asset('images/CM.jpg') }}" alt=""> --}}
           </div>
       
    </div>
    <script>
       $(document).ready(function() {
            var owl = $('.owl-carousel');
            owl.owlCarousel({
              items: 1,
              loop: true,
              margin: 10,
              autoplay: true,
              autoplayTimeout: 5000,
              autoplayHoverPause: true
            });
            $('.play').on('click', function() {
              owl.trigger('play.owl.autoplay', [1000])
            })
            $('.stop').on('click', function() {
              owl.trigger('stop.owl.autoplay')
            })
          })
      </script>
  </section>

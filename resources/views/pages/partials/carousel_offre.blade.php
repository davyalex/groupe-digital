
<style>
    .item a:hover{
       
    
    
    border-radius: 10%;
    color: #ffffff;
    background-color: #ff9900;
    border-color: #a800ff;
  
 
    }
    .item a{
      color: #000066;
     font-weight: bold;
     text-transform: capitalize
       }
</style>



<section id="demos">
    <div class="row">
     <div class="col-md-12">
        <div class="large-12 columns">
            <div class="owl-carousel owl-theme">
                @foreach ($category as $categories)
                <div class="item" style="">
                    <a href="/offre.index?category={{ $categories->id}}">{{ $categories->libelle}}</a><span>({{ $categories->offres->count() }})</span>             
                   </div>
                
                    @endforeach
            </div>
          </div>
     </div>
    </div>
    <script>
      $('.owl-carousel').owlCarousel({
        autoplay:true,
    autoplayTimeout:3000
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

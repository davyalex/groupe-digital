<style>
  
  #owl-demo .item img{
    display: block;
    width: 100%;
    height: auto;
}
.custom1{
  margin-top: 35px;
}
</style>






<div class="custom1 owl-carousel owl-theme">
 
  <div class="item" style=""><h4><img class="img-fluid" src="{{ asset('images/ban1.png') }}" alt=""></h4></div>
  <div class="item" style=""><h4><img class="img-fluid" src="{{ asset('images/ban2.jpg') }}" alt=""></h4></div>
  <div class="item" style=""><h4><img class="img-fluid" src="{{ asset('images/ban3.png') }}" alt=""></h4></div>
  {{-- <div class="item" style=""><h4><img class="img-fluid" src="{{ asset('images/banner1.jpg') }}" alt=""></h4></div> --}}

</div>







<script>
 $('.custom1').owlCarousel({
    animateOut: 'fadeOut',
    // animateIn: 'fadeOut',
    items:1,
    margin:30,
    stagePadding:30,
    smartSpeed:450,
    autoplay:true,
    autoplayTimeout:5000,
    autoplayHoverPause:true,
    loop:true
});
</script>





<style>
    #search_form{  background-color: #2196f3 }
</style>

<div id="search_form" class="search_top">
    <h2>BIENVENUE CHEZ GROUPE DIGITAL</h2>
    {{-- <form action="#" method="post">
        <input type="text" name="Enter Keyword(s)" placeholder="Enter Keyword(s)" required="">
        <input class="email" name="Location" type="text" placeholder="Location" required="">
        <select id="country12" onchange="change_country(this.value)" class="frm-field required">
                                                    <option value="null"> Select Category</option>
                                                    <option value="city">Banking</option>
                                                    <option value="city">Finance</option>
                                                    <option value="city">It</option>
                                                    <option value="city">Specialists</option>
                                                    
                                    </select>
        <input type="submit" value="Find Jobs">
        <div class="clearfix"></div>
    </form> --}}
</div>
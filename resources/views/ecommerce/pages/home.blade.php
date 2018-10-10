@extends('ecommerce.master.template')

@section('content')

<div class="homecover">
  <div class="cover-overlay">
  <div class="padding"></div>
    <div class="container">
      <div class="row">
          <div class="col col-md-12 col-lg-10 col-xl-88">
              <div class="full-width-left"> 
                <h4 class="makeiteasy">Make it easy with</h4>
                  <h1 class="orajen">
                    <span class="orajen-txt">POPSICLE</span><span class="ecommerce-txt"> Things</span>
                  </h1>
                  <span class="cover-desc">A best place to create, discover and share opportunities.</span>
              </div>
          </div>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="gallery">
  <h2 class="pnr">PRODUCTS OF POPSICLE STICKS</h2>
   <section class="customer-logos slider">
      <div class="slide"><img src="/images/reward1.jpg"></div>
      <div class="slide"><img src="/images/reward2.jpg"></div>
      <div class="slide"><img src="/images/reward3.jpg"></div>
      <div class="slide"><img src="/images/reward4.jpg"></div>
      <div class="slide"><img src="/images/reward5.jpg"></div>
      <div class="slide"><img src="/images/reward6.jpg"></div>
      <div class="slide"><img src="/images/reward7.jpg"></div>
      <div class="slide"><img src="/images/reward8.jpg"></div>
   </section>
   </div>
</div>


<div class="container">
  <!-- Gallery -->
      <!-- Gallery -->
<div class="featured-products">
  <span class="fp-title">POPSICLE THINGS PRODUCT</span>
</div>
</div>

<div class="row">
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="/images/reward3.jpg" alt="card image"></p>
                                    <h4 class="card-title">POPSICLE STICK FOLDABLE LADDER</h4>
                                    <p class="card-text">World Leader in stretch blow molding machines, the smart choice for PET bottle applications.</p>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside" style="display:none;">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">AOKI</h4>
                                    <p class="card-text">AOKI is providing the unique Direct Heatcon® Injection Stretch-blow molding technology that allows these containers to be molded with the least amount of energy.</p>
                                    <a href="http://www.aokitech.co.jp/" target="”_blank" class="btn btn-primary btn-sm">Visit Link</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="/images/reward1.jpg" alt="card image"></p>
                                    <h4 class="card-title">POPSICLE STICK HOUSE</h4>
                                    <p class="card-text">Becoming a worldwide benchmark in the piston compressor industry has always been ABC COMPRESSORS’ goal.</p>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside" style="display:none;">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">ABC Compressors</h4>
                                    <p class="card-text">Similarly, ABC COMPRESSORS has adapted its product range to customized solutions and to the demands of new markets, such as PET blowing, where it was a pioneer in the 80s with the four-stage PET compressor, or as gas applications since the 70s.</p>
                                    <a href="http://www.abc-compressors.com/home" target="”_blank" class="btn btn-primary btn-sm">Visit Link</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="/images/reward4.jpg" alt="card image"></p>
                                    <h4 class="card-title">POPSICLE STICK PLAY GROUND TOY</h4>
                                    <p class="card-text"> An International enterprise contributes to the well being of communities through plastics.</p>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside" style="display:none;">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">NISSEI</h4>
                                    <p class="card-text">The Leading Injection Molding Machine in Japan and world wide. Quality Policy: Promoting manufacturing activity in a way both our customers and our company can prosper.</p>
                                    <a href="http://www.nisseijushi.co.jp/" target="”_blank" class="btn btn-primary btn-sm">Visit Link</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            

        </div>


<br>
<br>
<br>
<br>
<br>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

<script>

    $('.customer-logos').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
        }]
    });


</script>
@endsection
@extends('Layouts.frontend')

    @section('container')
    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/beauty daily 1.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/beauty daily 2.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/beauty daily 3.png" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
    <!-- Banner Ends Here -->

    <div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Article</h2>
              <a href="products.html">More Articles <i class="fa fa-angle-right"></i></a>
            </div>
          </div>   
          <div class="col-md-4">
            <div class="product-item">
              <a href="#"><img src="images/product_01.jpg" alt=""></a>
              <div class="down-content">
                <a href="#"><h4>Tittle goes here</h4></a>
                <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
                
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product-item">
              <a href="#"><img src="images/product_02.jpg" alt=""></a>
              <div class="down-content">
                <a href="#"><h4>Tittle goes here</h4></a>
                <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
             
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product-item">
              <a href="#"><img src="images/product_03.jpg" alt=""></a>
              <div class="down-content">
                <a href="#"><h4>Tittle goes here</h4></a>
                <p>Sixteen Clothing is free CSS template provided by TemplateMo.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product-item">
              <a href="#"><img src="images/product_04.jpg" alt=""></a>
              <div class="down-content">
                <a href="#"><h4>Tittle goes here</h4></a>
                <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product-item">
              <a href="#"><img src="images/product_05.jpg" alt=""></a>
              <div class="down-content">
                <a href="#"><h4>Tittle goes here</h4></a>
                <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product-item">
              <a href="#"><img src="images/product_06.jpg" alt=""></a>
              <div class="down-content">
                <a href="#"><h4>Tittle goes here</h4></a>
                <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="best-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Your beauty journy start here</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <h4>Review</h4>
              <h6>Find product reviews complete with ratings, duration of usage, where to buy, and recommendation from fellow beauty enthusiasts with big love for everything that makes you glow!</h6>
              <a href="/review" class="filled-button">Go To Review </a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <h4>Trade/Buy/Sell</h4>
              <h6>Get ready to trade or buy or sell your beauty products. Trusted, authentic, and handpicked with a lot of love.</h6>
              <a href="/wantto" class="filled-button">Go To Trade/Buy/Sell </a>
            </div>
          </div>

          <div class="col-md-6">
            <div class="right-image">
              <img src="images/feature-image.jpg" alt="">
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="images/feature-image2.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
   

 @endsection
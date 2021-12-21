@extends('Layouts.frontend')

    @section('container')
    <div class="page-heading products-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>You can Trade, Buy, Sell or Donate your Beauty Products</h4>
              <h2>What do you want?</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="products">
      <div class="container">
        <div class="row">
        
          <div class="col-md-12">
            <div class="filters-content">
                <div class="row grid">
                    <div class="col-lg-4 col-md-4 all des">
                      <div class="product-item">
                        <a href="#"><img src="assets/images/product_01.jpg" alt=""></a>
                        <div class="down-content">
                          <a href="#"><h4>Want To Trade</h4></a>
                          <p>Hai, aku mau trade Toner Npure ku baru 2x pemakaian</p>
                          <span>Comments (12)</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 all dev">
                      <div class="product-item">
                        <a href="#"><img src="assets/images/product_02.jpg" alt=""></a>
                        <div class="down-content">
                          <a href="#"><h4>Want To Donate</h4></a>
                          <p>Hallo, aku mau donate serum somethinc retinol ku karna ga cocok</p>
                          <span>Comments (24)</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 all gra">
                      <div class="product-item">
                        <a href="#"><img src="assets/images/product_03.jpg" alt=""></a>
                        <div class="down-content">
                          <a href="#"><h4>Want To Sell</h4></a>
                          <p>Hai, aku mau jual Breylee Blackhead Step 1 masih baru blm dibuka segel</p>
                          <span>Comments (36)</span>
                        </div>
                      </div>
                    </div>
                   
                    <div class="col-md-12">
            <ul class="pages">
              <li><a href="#">1</a></li>
              <li class="active"><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
            </ul>
          </div>
                </div>
            </div>
@endsection
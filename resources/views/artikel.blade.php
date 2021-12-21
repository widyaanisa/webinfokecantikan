@extends('Layouts.frontend')

    @section('container')

    <div class="page-heading products-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>Beauty trends</h4>
              <h2>What's new?</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
   
   
    <div class="products">
    @php
    $no=0;
    @endphp
    @foreach($data as $a)
      <div class="container">
      
        <div class="row text-center">
                <div class="row grid">
                    <div class="col-lg-15 all des">
                      <div class="product-item">
                        <a href="#"><img src="assets/images/product_01.jpg" alt=""></a>
                        <div class="down-content">
                          <a href="#"><h4>{{$a->judul}}</h4></a>
                          <p>{{$a->deskripsi}}</p>
                        </div>
                      </div>
                    </div>
          </div>
        </div>
      </div>
  
    @endforeach
@endsection
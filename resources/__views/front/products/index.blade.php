@extends('layouts.front_master')
@section('content')
  <section class="page-title parallax">
      <div data-parallax="scroll" data-image-src="front/images/bg/19.jpg" class="parallax-bg"></div>
      <div class="parallax-overlay">
        <div class="centrize">
          <div class="v-center">
            <div class="container">
              <div class="title center">
                <h1 class="upper">Shop</h1>
                <h4>Free Delivery Worldwide.</h4>
                <hr>
              </div>
            </div>
            <!-- end of container-->
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="shop-menu ml-0 mr-0">
          <div class="row">
            <div class="col-sm-8">
              <h6 class="upper">Displaying 6 of 18 results</h6>
            </div>
            <div class="col-sm-4">
              <div class="form-select">
                <select name="type" class="form-control">
                  <option selected="selected" value="">Sort By</option>
                  <option value="">What's new</option>
                  <option value="">Price high to low</option>
                  <option value="">Price low to high</option>
                </select>
              </div>
            </div>
          </div>
          <!-- end of row-->
        </div>
        <div class="row">
          @foreach ($products as $product)
            @php
                $image = $product->images ? explode(",",$product->images)[0] : "default.png";
            @endphp
          <div class="col-md-3 col-sm-6">
            <div class="shop-product">
              <div class="product-thumb">
                <a href="{{ route('front.products.show',$product->id) }}">
                  <img src="{{url('/')}}/back_end_admin/uploads/{{$image}}" alt="" style="width: 300px;
    height: 200px;">
                </a>
                <div class="product-overlay"><a href="#" class="btn btn-color-out btn-sm">Add To Cart<i class="ti-bag"></i></a>
                </div>
              </div>
              <div class="product-info">
                <h4 class="upper"><a href="#">{{ $product->product_name}}</a></h4><span>${{ $product->price}}</span>
                <div class="save-product"><a href="#"><i class="icon-heart"></i></a>
                </div>
              </div>
            </div>
          </div>
          @endforeach
          <!-- <div class="col-md-3 col-sm-6">
            <div class="shop-product">
              <div class="product-thumb">
                <a href="#">
                  <img src="front/images/shop/2.jpg" alt="">
                </a>
                <div class="product-overlay"><a href="#" class="btn btn-color-out btn-sm">Add To Cart<i class="ti-bag"></i></a>
                </div>
              </div>
              <div class="product-info">
                <h4 class="upper"><a href="#">Premium Suit Blazer</a></h4><span>$199.99</span>
                <div class="save-product"><a href="#"><i class="icon-heart"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="shop-product">
              <div class="product-thumb">
                <a href="#">
                  <img src="front/images/shop/3.jpg" alt="">
                </a>
                <div class="product-overlay"><a href="#" class="btn btn-color-out btn-sm">Add To Cart<i class="ti-bag"></i></a>
                </div>
              </div>
              <div class="product-info">
                <h4 class="upper"><a href="#">Vintage Sweatshirt</a></h4><span>$99.99</span>
                <div class="save-product"><a href="#"><i class="icon-heart"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="shop-product">
              <div class="product-thumb">
                <a href="#">
                  <img src="front/images/shop/4.jpg" alt="">
                </a>
                <div class="product-overlay"><a href="#" class="btn btn-color-out btn-sm">Add To Cart<i class="ti-bag"></i></a>
                </div>
              </div>
              <div class="product-info">
                <h4 class="upper"><a href="#">Longline Jersey Jacket</a></h4><span>$19.99</span>
                <div class="save-product"><a href="#"><i class="icon-heart"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="shop-product">
              <div class="product-thumb">
                <a href="#">
                  <img src="front/images/shop/5.jpg" alt="">
                </a>
                <div class="product-overlay"><a href="#" class="btn btn-color-out btn-sm">Add To Cart<i class="ti-bag"></i></a>
                </div>
              </div>
              <div class="product-info">
                <h4 class="upper"><a href="#">Tailored Blazer</a></h4><span>$119.99</span>
                <div class="save-product"><a href="#"><i class="icon-heart"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="shop-product">
              <div class="product-thumb">
                <a href="#">
                  <img src="front/images/shop/6.jpg" alt="">
                </a>
                <div class="product-overlay"><a href="#" class="btn btn-color-out btn-sm">Add To Cart<i class="ti-bag"></i></a>
                </div>
              </div>
              <div class="product-info">
                <h4 class="upper"><a href="#">Overcoat In Camel</a></h4><span>$99.99</span>
                <div class="save-product"><a href="#"><i class="icon-heart"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="shop-product">
              <div class="product-thumb">
                <a href="#">
                  <img src="front/images/shop/7.jpg" alt="">
                </a>
                <div class="product-overlay"><a href="#" class="btn btn-color-out btn-sm">Add To Cart<i class="ti-bag"></i></a>
                </div>
              </div>
              <div class="product-info">
                <h4 class="upper"><a href="#">Jacket with Fringe</a></h4><span>$35.99</span>
                <div class="save-product"><a href="#"><i class="icon-heart"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="shop-product">
              <div class="product-thumb">
                <a href="#">
                  <img src="front/images/shop/8.jpg" alt="">
                </a>
                <div class="product-overlay"><a href="#" class="btn btn-color-out btn-sm">Add To Cart<i class="ti-bag"></i></a>
                </div>
              </div>
              <div class="product-info">
                <h4 class="upper"><a href="#">Notch Blazer in Longline</a></h4><span>$135.99</span>
                <div class="save-product"><a href="#"><i class="icon-heart"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="shop-product">
              <div class="product-thumb">
                <a href="#">
                  <img src="front/images/shop/9.jpg" alt="">
                </a>
                <div class="product-overlay"><a href="#" class="btn btn-color-out btn-sm">Add To Cart<i class="ti-bag"></i></a>
                </div>
              </div>
              <div class="product-info">
                <h4 class="upper"><a href="#">Waistcoat In Navy</a></h4><span>$299.99</span>
                <div class="save-product"><a href="#"><i class="icon-heart"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="shop-product">
              <div class="product-thumb">
                <a href="#">
                  <img src="front/images/shop/10.jpg" alt="">
                </a>
                <div class="product-overlay"><a href="#" class="btn btn-color-out btn-sm">Add To Cart<i class="ti-bag"></i></a>
                </div>
              </div>
              <div class="product-info">
                <h4 class="upper"><a href="#">Mini Check Co-ord</a></h4><span>$99.99</span>
                <div class="save-product"><a href="#"><i class="icon-heart"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="shop-product">
              <div class="product-thumb">
                <a href="#">
                  <img src="front/images/shop/11.jpg" alt="">
                </a>
                <div class="product-overlay"><a href="#" class="btn btn-color-out btn-sm">Add To Cart<i class="ti-bag"></i></a>
                </div>
              </div>
              <div class="product-info">
                <h4 class="upper"><a href="#">Super Skinny Suit</a></h4><span>$105.99</span>
                <div class="save-product"><a href="#"><i class="icon-heart"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="shop-product">
              <div class="product-thumb">
                <a href="#">
                  <img src="front/images/shop/12.jpg" alt="">
                </a>
                <div class="product-overlay"><a href="#" class="btn btn-color-out btn-sm">Add To Cart<i class="ti-bag"></i></a>
                </div>
              </div>
              <div class="product-info">
                <h4 class="upper"><a href="#">Blazer in Medieval Blue</a></h4><span>$45.99</span>
                <div class="save-product"><a href="#"><i class="icon-heart"></i></a>
                </div>
              </div>
            </div>
          </div> -->
        </div>
        <!-- end of row-->
        {{ $products->links() }}
        <!-- <ul class="pagination">
          <li><a href="#" aria-label="Previous"><span aria-hidden="true"><i class="ti-arrow-left"></i></span></a>
          </li>
          <li class="active"><a href="#">1</a>
          </li>
          <li><a href="#">2</a>
          </li>
          <li><a href="#">3</a>
          </li>
          <li><a href="#">4</a>
          </li>
          <li><a href="#">5</a>
          </li>
          <li><a href="#" aria-label="Next"><span aria-hidden="true"><i class="ti-arrow-right"></i></span></a>
          </li>
        </ul> -->
        <!-- end of pagination-->
      </div>
      <!-- end of container-->
    </section>
@endsection

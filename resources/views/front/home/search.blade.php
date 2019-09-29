@extends('layouts.front_master')
@section('content')
  <section class="page-title parallax">
      <div data-parallax="scroll" data-image-src="{{asset('/public/front/images/bg/19.jpg')}}" class="parallax-bg"></div>
      <div class="parallax-overlay">
        <div class="centrize">
          <div class="v-center">
            <div class="container">
              <div class="title center">
                <h1 class="upper">Search</h1>
                <!-- <h4>Free Delivery Worldwide.</h4> -->
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
              <!-- <h6 class="upper">Displaying 6 of 18 results</h6> -->
            </div>
            <div class="col-sm-4">
              
            </div>
          </div> 
          <!-- end of row-->
        </div>
        <div class="row">
          @if ($products->count()>0)
            @foreach ($products as $product)
              @php
                  $image = $product->images ? explode(",",$product->images)[0] : "default.png";
              @endphp
            <div class="col-md-3 col-sm-6">
              <div class="shop-product">
                <div class="product-thumb">
                  <a href="{{ route('front.products.show',$product->id) }}">
                    <img src="{{asset('/public/back_end_admin/uploads')}}/{{$image}}" alt="" style="width: 300px;
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
          @else
            <h4 class="upper">No Products</h4>
          @endif        
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
    <script type="text/javascript">
      $(document).ready(function(){
          $('#products-sorting').on("change", function(){
            $('#products-sorting').submit();            
          });          
      });
    </script>
@endsection
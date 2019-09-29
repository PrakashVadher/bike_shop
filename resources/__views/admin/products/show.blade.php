@extends('layouts.admin_master') 
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-body"><h5 class="card-title">View Product</h5>
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="position-relative form-group">
                                    <label for="exampleEmail11" class="">Product Name</label>
                                    <input value="{{ $product->product_name }}" name="product_name" readonly id="product_name" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="position-relative form-group">
                                    <label for="status" class="">Status</label>
                                    @php $status = $product->status == 1 ? "Active" : "InActive"; @endphp
                                    <input value="{{ $status }}" readonly type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="position-relative form-group">
                                    <label for="product_price" class="">Price</label>
                                    <input readonly value="{{$product->price}}" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="position-relative form-group">
                                    <label for="product_sale_price" class="">Sale Price</label>
                                    <input readonly value="{{$product->sale_price}}" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="position-relative form-group">
                            <label for="short_description" class="">Short Description</label>
                            <input readonly value="{{$product->short_description}}" ype="text" class="form-control">
                        </div>
                        <div class="position-relative form-group">
                            <label for="description" class="">Full Description</label>
                            <input readonly value="{{$product->description}}" type="text" class="form-control">
                        </div>
                </div>
                <div class='list-group gallery'>            
                    @php $images = $product->images; @endphp
                    @if ( count($images) > 0 )                    
                        @foreach ( explode(",", $images) as $image)
                        <a class="thumbnail fancybox" rel="ligthbox" href="{{url('/')}}/back_end_admin/uploads/{{$image}}">
                            <img style="height: auto;width: 300px;" class="img-responsive" alt="" src="{{url('/')}}/back_end_admin/uploads/{{$image}}" />                            
                        </a>
                        @endforeach           
                    @endif  
                </div>

            </div>
        </div> 

    </div>


<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    

<style type="text/css">
    .gallery { display: inline-block;margin-top: 20px;margin: 20px;padding-left: 20px;padding-right: 20px;}
</style>

<script type="text/javascript">
    $(document).ready(function(){ $(".fancybox").fancybox({ openEffect: "none",closeEffect: "none"}); });
</script>

@endsection
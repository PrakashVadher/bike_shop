@extends('layouts.admin_master') 
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-body"><h5 class="card-title">Update Product</h5>
                    <form class="" method="post" enctype="multipart/form-data" action="{{ route('admin.products.update',$product->id) }}"> 
                        @csrf
                        @method('PUT')
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="position-relative form-group">
                                    <label for="exampleEmail11" class="">Product Name</label>
                                    <input value="{{$product->product_name}}" name="product_name" id="product_name" placeholder="Enter product name" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="position-relative form-group">
                                    <label for="status" class="">Status</label>
                                    <select name="status" id="exampleSelect" class="form-control">
                                        <option value="1" <?php if ($product->status == 1){ echo "selected";} ?> >Active</option>
                                        <option value="0" <?php if ($product->status == 0){ echo "selected";} ?>>InActive</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="position-relative form-group">
                                    <label for="price" class="">Price</label>
                                    <input required value="{{$product->price}}" name="price" id="price" placeholder="Enter product price" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="position-relative form-group">
                                    <label for="sale_price" class="">Sale Price</label>
                                    <input value="{{$product->sale_price}}" name="sale_price" id="sale_price" placeholder="Enter product sale price" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="position-relative form-group">
                            <label for="short_description" class="">Short Description</label>
                            <input value="{{$product->short_description}}" name="short_description" id="short_description" placeholder="Enter Short Description" type="text" class="form-control">
                        </div>
                        <div class="position-relative form-group">
                            <label for="description" class="">Full Description</label>
                            <input value="{{$product->description}}"name="description" id="description" placeholder="Enter Description" type="text" class="form-control">
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="position-relative form-group">
                                    <label for="exampleCity" class="">Images</label>
                                    <input name="images[]" id="images" type="file" class="form-control-file" multiple>
                                </div>
                            </div>                            
                        </div>

                        <div class="form-row">                            
                            @php $images = $product->images; @endphp
                            @if ( count($images) > 0 )                    
                                @foreach ( explode(",", $images) as $image)
                                <a class="thumbnail fancybox" rel="ligthbox" href="{{url('/')}}/back_end_admin/uploads/{{$image}}">
                                    <img style="height: auto;width: 300px;" class="img-responsive" alt="" src="{{url('/')}}/back_end_admin/uploads/{{$image}}" />                            
                                </a>
                                @endforeach           
                            @endif                                                           
                        </div>                        
                        <input type="hidden" name="id" value="{{$product->id}}">
                        <button class="mt-2 btn btn-primary" type="submit">Update</button>
                    </form>
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
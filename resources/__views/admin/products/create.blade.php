@extends('layouts.admin_master') 
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-body"><h5 class="card-title">Add New Product</h5>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form class="" method="post" enctype="multipart/form-data" action="{{ route('admin.products.store') }}"> 
                        @csrf
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="position-relative form-group">
                                    <label for="product_name" class="">Product Name</label>
                                    <input required name="product_name" id="product_name" placeholder="Enter product name" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="position-relative form-group">
                                    <label for="status" class="">Status</label>
                                    <select required name="status" id="exampleSelect" class="form-control">
                                        <option value="1">Active</option>
                                        <option value="0">InActive</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="position-relative form-group">
                                    <label for="price" class="">Price</label>
                                    <input required name="price" id="price" placeholder="Enter product price" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="position-relative form-group">
                                    <label for="sale_price" class="">Sale Price</label>
                                    <input name="sale_price" id="sale_price" placeholder="Enter product sale price" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="position-relative form-group">
                            <label for="short_description" class="">Short Description</label>
                            <input required name="short_description" id="short_description" placeholder="Enter Short Description" type="text" class="form-control">
                        </div>
                        <div class="position-relative form-group">
                            <label for="description" class="">Full Description</label>
                            <input required name="description" id="description" placeholder="Enter Description" type="text" class="form-control">
                        </div>
                        <div class="form-row" id="gallery-images">
                            <div class="col-md-6" >
                                <div class="position-relative form-group">
                                    <label for="exampleCity" class="">Images</label>
                                    <input required  multiple id="gallery-photo-add" name="images[]" id="images" type="file" class="form-control-file" multiple>
                                </div>
                            </div>                                                 
                        </div>
                        <button class="mt-2 btn btn-primary" type="submit">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    
    <script type="text/javascript">
        // $(document).ready(function() {
        //       if (window.File && window.FileList && window.FileReader) {
        //         $("#gallery-photo-add").on("change", function(e) {
        //           var images = e.target.files,
        //             filesLength = images.length;
        //           for (var i = 0; i < filesLength; i++) {
        //             var f = images[i]
        //             var fileReader = new FileReader();
        //             fileReader.onload = (function(e) {
        //               var file = e.target;
        //               $("<div class='gallery'><span class=\"pip\">" +
        //                 "<img style='height:auto;width:250px' class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
        //                 "<br/><span class=\"remove\">Remove image</span>" +
        //                 "</span></div>").insertAfter("#gallery-images");
        //               $(".remove").click(function(){
        //                 $(this).parent(".pip").remove();
        //               });
                      
        //             });
        //             fileReader.readAsDataURL(f);
        //           }
        //         });
        //       } else {
        //         alert("Your browser doesn't support to File API")
        //       }
        //     });
    </script>
@endsection
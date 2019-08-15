@extends('layouts.admin_master') 
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-body"><h5 class="card-title">Add New Product</h5>
                    <form class="" method="post" enctype="multipart/form-data" action="{{ route('admin.save_product') }}"> 
                        @csrf
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="position-relative form-group">
                                    <label for="exampleEmail11" class="">Product Name</label>
                                    <input name="product_name" id="product_name" placeholder="Enter product name" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="position-relative form-group">
                                    <label for="status" class="">Status</label>
                                    <select name="status" id="exampleSelect" class="form-control">
                                        <option value="1">Active</option>
                                        <option value="0">InActive</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="position-relative form-group">
                            <label for="short_description" class="">Short Description</label>
                            <input name="short_description" id="short_description" placeholder="Enter Short Description" type="text" class="form-control">
                        </div>
                        <div class="position-relative form-group">
                            <label for="description" class="">Full Description</label>
                            <input name="description" id="description" placeholder="Enter Description" type="text" class="form-control">
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="position-relative form-group">
                                    <label for="exampleCity" class="">Images</label>
                                    <input required name="images[]" id="images" type="file" class="form-control-file" multiple>
                                </div>
                            </div>                            
                        </div>
                        <button class="mt-2 btn btn-primary" type="submit">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
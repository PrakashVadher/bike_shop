@extends('layouts.admin_master') @section('content')
<style type="text/css">
.action-btn{ float: left;}
</style>
<div class="card mb-3">
    <div class="card-header-tab card-header">
        <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
            <i class="header-icon lnr-laptop-phone mr-3 text-muted opacity-6"> </i>Products List
        </div>
        <div class="btn-actions-pane-right actions-icon-btn">
            <div class="btn-group dropdown">
                <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-icon btn-icon-only btn btn-link"><i class="pe-7s-menu btn-icon-wrapper"></i></button>
                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-right rm-pointers dropdown-menu-shadow dropdown-menu-hover-link dropdown-menu">
                    <h6 tabindex="-1" class="dropdown-header">
                                                                Header</h6>
                    <button type="button" tabindex="0" class="dropdown-item"><i class="dropdown-icon lnr-inbox"> </i><span>Menus</span>
                    </button>
                    <button type="button" tabindex="0" class="dropdown-item"><i class="dropdown-icon lnr-file-empty"> </i><span>Settings</span>
                    </button>
                    <button type="button" tabindex="0" class="dropdown-item"><i class="dropdown-icon lnr-book"> </i><span>Actions</span>
                    </button>
                    <div tabindex="-1" class="dropdown-divider"></div>
                    <div class="p-3 text-right">
                        <button class="mr-2 btn-shadow btn-sm btn btn-link">View Details
                        </button>
                        <button class="mr-2 btn-shadow btn-sm btn btn-primary">
                            Action
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
        <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Product Name</th>
                    <th>Image</th>
                    <th>Descritpion</th>
                    <th>Created Date</th>
                    <th>Updated Date</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @php $index_no = 1; @endphp
                @foreach($products as $product)
                <tr>
                    <td>{{ $index_no }}</td>
                    <td>{{ $product->product_name }}</td>
                    
                    @php
                        $image = $product->images ? explode(",",$product->images)[0] : "default.png";                        
                        $status = "Active";
                        $class = "success";
                        if ($product->status == 0){
                            $class = "danger";
                            $status = "In Active"; 
                        }
                    @endphp
                    
                    <td><img src="{{url('/')}}/back_end_admin/uploads/{{$image}}" height="40" width="40"/></td>
                    <td>{{ $product->short_description }}</td>
                    <td>{{ $product->created_at }}</td>
                    <td>{{ $product->updated_at }}</td>
                    <td><div class="badge badge-pill badge-{{$class}}">{{ $status }}</div></td>
                    <td>
                        <a href="{{ route('admin.show_product', ['id' => $product->id]) }}">
                            <div class="action-btn font-icon-wrapper">
                                <i class="lnr-eye icon-gradient bg-happy-fisher"> </i>
                            </div>
                        </a>
                        <a href="{{ route('admin.edit_product', ['id' => $product->id]) }}">
                            <div class="action-btn font-icon-wrapper">
                                <i class="lnr-cog icon-gradient bg-tempting-azure"> </i>
                            </div>
                        </a>
                        <a href="{{ route('admin.delete_product', ['id' => $product->id]) }}">
                            <div class="action-btn font-icon-wrapper">
                                <i class="lnr-trash icon-gradient bg-amy-crisp"> </i>
                            </div>
                        </a>
                        <!-- <button type="button" data-type="question" class="btn btn-primary btn-show-swal">Show Alert
                        </button> -->
                    </td>
                </tr>
                    @php $index_no++; @endphp
                @endforeach           
            </tbody>
            <tfoot>
                <tr>
                    <th>#</th>
                    <th>Product Name</th>
                    <th>Image</th>
                    <th>Descritpion</th>
                    <th>Created Date</th>
                    <th>Updated Date</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>

@endsection
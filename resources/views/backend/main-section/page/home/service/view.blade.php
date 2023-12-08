@extends('backend.main-section.body.main')
@section('main')

<div class="content">

    <!-- Start Content-->
    <div class="container-fluid">
        
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);"></a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);"></a></li>
                        </ol>
                    </div>
                    <h4 class="page-title"><br/></h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 

<div class="row">
    <div class="col-lg-7">
        <div class="card-box">
            <div class="mb-2">
                <div class="row">
                    <div class="col-12 text-sm-center form-inline">
                        <div class="form-group mr-2">
                            <select id="demo-foo-filter-status" class="custom-select custom-select-sm">
                                <option value="">Show all</option>
                                <option value="online">Online</option>
                                <option value="offline">Offline</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input id="demo-foo-search" type="text" placeholder="Search" class="form-control form-control-sm" autocomplete="on">
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="table-responsive">
                <table id="demo-foo-filtering" class="table table-bordered table-centered mb-0" data-page-size="7">
                    <thead class="thead-light">
                    <tr align="center">
                        <th>Id</th>
                        <th>Category</th>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    @foreach ($Data as $key=>$sr)
                    <tbody>
                        <tr align="center">
                            <td>#{{$key+1}}</td>
                            <td>{{ optional($sr->category)->name }}</td>
                            <td>{{$sr->title}}</td>
                            <td>
                                <img src="{{ (!empty($sr->image))? url('backend/all-images/web/channel/'.$sr->image):url('upload/no_image.jpg') }}" style="width: 80px; height: 40px;">
                            </td>
                            <td>
                                @if($sr->status == '1')
                                <a href="{{ route('se.status',$sr->id)}}" class="btn btn-xs btn-primary">Active</a>
                                @else
                                <a href="{{ route('se.status',$sr->id)}}" class="btn  btn-xs btn-danger">Inactive</a>
                                @endif
                            </td>
                            <td>
                                <a type="button" href="{{route('se.edit',$sr->id)}}" class="btn btn-xs btn-primary"><i class="fe-edit"></i></a>
                                <button type="button" class="btn btn-xs btn-danger deletebtn" data-toggle="modal" data-target="#deletemodal" data-delete-id="{{ $sr->id }}"><i class="fe-x"></i></button>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                    <tfoot>
                    <tr class="active">
                        <td colspan="8">
                            <div class="text-right">
                                <ul class="pagination pagination-rounded justify-content-end footable-pagination m-t-10 mb-0"></ul>
                            </div>
                        </td>
                    </tr>
                    </tfoot>
                </table>
            </div> <!-- end .table-responsive-->
        </div>
    </div> <!-- end col -->

    <div class="col-lg-5">
        <div class="modal-header bg-success">
            <h4 class="modal-title" id="myCenterModalLabel">
                @if(isset($editData))
                    Edit Product
                @else
                    Add Product
                @endif
            </h4>
        </div>
        <div class="card-box">
            <form action="{{ isset($editData) ? route('se', $editData->id) : route('se.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                @if(isset($editData))
                    @method('PUT')
                @endif
                <div class="row">

                    <div class="mb-3 col-md-6">
                        <div class="form-group">
                            <label for="inputState" class="form-label">Category</label>
                            <select id="inputState" name="sub_category_id" class="form-control">
                                <option value="">Choose Category</option>
                                @foreach ($allCategories as $category)
                                    <option disabled value="{{ $category->id }}" {{ (isset($editData) && $editData->sub_category_id == $category->id) ? 'selected' : '' }} class="text-danger">
                                      -----  <b>{{ $category->name }}</b>  -----
                                    </option>
                                    @if ($category->subcategories)
                                        @foreach ($category->subcategories as $subcategory)
                                            <option value="{{ $subcategory->id }}" {{ (isset($editData) && $editData->sub_category_id == $subcategory->id) ? 'selected' : '' }}>
                                                &nbsp;&nbsp;&nbsp;{{ $subcategory->name }}
                                            </option>
                                        @endforeach
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                
                    <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" id="title" placeholder="Category Name" class="form-control" value="{{ isset($editData) ? $editData->title : '' }}">
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                            <label>Guarantee</label>
                            <input type="number" class="form-control" name="gar" placeholder="Example : 7 Years" value="{{isset($editData) ? $editData->gar : '' }}">
                        </div>
                    </div>
                    
                    <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                            <label>Warranty</label>
                            <input type="number" class="form-control" name="war" placeholder="Example : 7 Years" value="{{isset($editData) ? $editData->war : '' }}">
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                            <label>Price</label>
                            <input type="number" class="form-control" name="price" placeholder="Example : 10000" value="{{isset($editData) ? $editData->price : '' }}">
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                            <label>Made In</label>
                            <input type="text" class="form-control" name="made" placeholder="Example : Chaina" value="{{isset($editData) ? $editData->made : '' }}">
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-12">
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="summery" name="summery" placeholder="Summery Here...">{{ isset($editData) ? $editData->summery : '' }}</textarea>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <label for="image" style="cursor: pointer;">
                            <img id="showImage" src="{{ (isset($editData) && !empty($editData->image)) ? url('backend/all-images/web/channel/'.$editData->image) : url('backend/all-images/web/default/site.png') }}" alt="image" class="img-fluid avatar-lg rounded" />
                            <br />
                            <span class="badge rounded-pill">Banner Image</span>
                            <input style="display: none;" type="file" name="image" id="image" accept="image/*" />
                        </label>
                    </div>


                    <div class="col-sm-12 col-md-12">
                        <div class="text-right">
                            <input type="submit" class="btn btn-success waves-effect waves-light" value="{{ isset($editData) ? 'Update' : 'Save' }}">
                            @if(isset($editData))
                            @endif
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
@include('backend.code-section.modal.live.product')
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
$(document).ready(function () {
var editData = null;

$('.edit-btn').on('click', function () {
    var categoryId = $(this).data('id');
    editData = categoryId;
    $('.card-box form').hide();

    // Assuming you have a route named 'ct.edit' to fetch category data for editing
    $.get("{{ url('ct.edit') }}/" + categoryId, function(data) {
        // Assuming data is a JSON object with category details
        // Update the form fields with the fetched data
        $('#name').val(data.name);
        $('#slug').val(data.slug);
    });
});

function showAddCategorySection() {
    editData = null;
    $('.card-box form').show();
}
});
</script>

@endsection

@section('scripts')      

@endsection
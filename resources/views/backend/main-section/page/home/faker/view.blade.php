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
                        <th>Title</th>
                        <th>Count</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    @foreach ($allData as $key=>$channel)
                    <tbody>
                        <tr align="center">
                            <td>{{$channel->name}}</td>
                            <td>{{$channel->count}}</td>
                            <td>
                                <img src="{{ (!empty($channel->image))? url('backend/all-images/web/channel/'.$channel->image):url('upload/no_image.jpg') }}" style="width: 80px; height: 40px;">
                            </td>
                            <td>
                                @if($channel->status == '1')
                                <a href="{{ route('kr.status',$channel->id)}}" class="btn btn-xs btn-primary">Active</a>
                                @else
                                <a href="{{ route('kr.status',$channel->id)}}" class="btn  btn-xs btn-danger">Inactive</a>
                                @endif
                            </td>
                            <td>
                                <a type="button" href="{{route('kr.edit',$channel->id)}}" class="btn btn-xs btn-primary"><i class="fe-edit"></i></a>
                                <button type="button" value="{{$channel->id}}" class="btn  btn-xs btn-danger deletebtn"><i class="fe-x"></i></button>
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
                    Edit Faker
                @else
                    Add Faker
                @endif
            </h4>
        </div>
        <div class="card-box">
            <form action="{{ isset($editData) ? route('kr', $editData->id) : route('kr.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                @if(isset($editData))
                    @method('PUT')
                @endif
                <div class="row">
                    <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="name" id="name" placeholder="Example : Satisfied Client" class="form-control" value="{{ isset($editData) ? $editData->name : '' }}">
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                            <label>Count No.</label>
                            <input type="number" name="count" id="count" placeholder="Example : 100" class="form-control" value="{{ isset($editData) ? $editData->count : '' }}">
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <label for="image" style="cursor: pointer;">
                            <img id="showImage" src="{{ (isset($editData) && !empty($editData->image)) ? url('backend/all-images/web/channel/'.$editData->image) : url('backend/all-images/web/default/site.png') }}" alt="image" class="img-fluid avatar-lg rounded" />
                            <br />
                            <span class="badge rounded-pill">Faker Icon</span>
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
@include('backend.code-section.modal.live.delete')
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

@include('backend.code-section.ajax-script.live.faker')

@endsection
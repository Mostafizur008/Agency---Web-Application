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

            <div class="col-lg-2">
            </div>

            <div class="col-lg-8">
                <div class="modal-header bg-success">
                    <h4 class="modal-title" id="myCenterModalLabel">Edit Team</h4>
                </div>
                <div class="card-box">
                <form action="{{route('update',$editData->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                    <div class="row">
                        <div class="col-sm-6 col-md-4">
                           <div class="form-group">
                               <label>Title</label>
                               <input type="text" name="name" id="name" value="{{$editData->name}}" placeholder="Name" class="form-control">
                           </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                           <div class="form-group">
                               <label>Email</label>
                               <input type="text" name="email" id="email" value="{{$editData->email}}" placeholder="Email" class="form-control">
                           </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="form-group">
                                <label>Position</label>
                                <input type="text" name="position" id="position" value="{{$editData->position}}" placeholder="Position" class="form-control">
                            </div>
                         </div>
                         <div class="col-sm-6 col-md-4">
                            <div class="form-group">
                                <label>Experience</label>
                                <input type="text" name="experience" id="experience" value="{{$editData->experience}}" placeholder="Experience" class="form-control">
                            </div>
                         </div>
                         <div class="col-sm-6 col-md-4">
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="number" name="mobile" id="mobile" value="{{$editData->mobile}}" placeholder="Phone No" class="form-control">
                            </div>
                         </div>
                         <div class="col-sm-6 col-md-4">
                            <div class="form-group">
                                <label>Deapartment</label>
                                <input type="text" name="address" id="address" value="{{$editData->address}}" placeholder="Address" class="form-control">
                            </div>
                         </div>
                         <div class="col-sm-6 col-md-3">
                            <div class="form-group">
                                <label>Success Rate</label>
                                <input type="number" name="rate" id="rate" value="{{$editData->rate}}" placeholder="Rate" class="form-control">
                            </div>
                         </div>
                         <div class="col-sm-6 col-md-2">
                            <div class="form-group">
                                <label>C. Work</label>
                                <input type="number" name="work" id="work" value="{{$editData->work}}" placeholder="Work" class="form-control">
                            </div>
                         </div>
                         <div class="col-sm-6 col-md-2">
                            <div class="form-group">
                                <label>S. Client</label>
                                <input type="number" name="satisfied" id="satisfied" value="{{$editData->satisfied}}" placeholder="Satisfied Client" class="form-control">
                            </div>
                         </div>
                         <div class="col-sm-6 col-md-2">
                            <label for="image" style="cursor: pointer;">
                            <img id="showImage" src="{{ (!empty($editData->image)) ? url('backend/all-images/web/channel/'.$editData->image): url('backend/all-images/others/default/site.png') }}" alt="image" class="img-fluid avatar-lg rounded"/>
                            <br/>
                        </label>
                        <input style="display: none;" type="file" name="image" id="image" accept="image/*" />
                        </div>
                        <div class="col-sm-6 col-md-2">
                            <label for="photo" style="cursor: pointer;">
                            <img id="showPhoto" src="{{ (!empty($editData->photo)) ? url('backend/all-images/web/channel/'.$editData->photo): url('backend/all-images/others/default/site.png') }}" alt="image" class="img-fluid avatar-lg rounded"/>
                        </label>
                        <input style="display: none;" type="file" name="photo" id="photo" accept="photo/*" />
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="form-group">
                                <label>Facebook</label>
                                <input type="text" name="fb" id="fb" value="{{$editData->fb}}" placeholder="Link" class="form-control">
                            </div>
                         </div>
                         <div class="col-sm-6 col-md-4">
                            <div class="form-group">
                                <label>Twiteer</label>
                                <input type="text" name="tw" id="tw" value="{{$editData->tw}}" placeholder="Link" class="form-control">
                            </div>
                         </div>
                         <div class="col-sm-6 col-md-4">
                            <div class="form-group">
                                <label>Instagram</label>
                                <input type="text" name="in" id="in" value="{{$editData->in}}" placeholder="Link" class="form-control">
                            </div>
                         </div>
                         <div class="col-sm-12 col-md-12">
                            <div class="form-group">
                                <textarea class="summery" name="summery" placeholder="Summery Here...">{{$editData->summery}}</textarea>
                            </div>
                         </div>


                        <div class="col-sm-12 col-md-12">
                           <div class="text-right">
                            <input type="submit" class="btn btn-success waves-effect waves-light" value="Update">
                           </div>
                        </div>
                    </form>
                       </div>
                </div> <!-- end card-box -->
                <div class="col-lg-2">
                </div>
            </div><!-- end col -->
        </div>
</div>
    <script type="text/javascript">

       @include('backend.code-section.ajax-script.image.show')
            
    </script>
@endsection

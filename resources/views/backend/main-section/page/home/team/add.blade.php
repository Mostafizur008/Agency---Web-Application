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
                    <h4 class="modal-title" id="myCenterModalLabel">Add Team</h4>
                </div>
                <div class="card-box">
                <form id="data" action="{{route('team.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                    <div class="row">
                        <div class="col-sm-6 col-md-4">
                           <div class="form-group">
                               <label>Name</label>
                               <input type="text" name="name" id="name" placeholder="Name" class="form-control">
                           </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                           <div class="form-group">
                               <label>Email</label>
                               <input type="text" name="email" id="email" placeholder="Email" class="form-control">
                           </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="form-group">
                                <label>Position</label>
                                <input type="text" name="position" id="position" placeholder="Position" class="form-control">
                            </div>
                         </div>
                         <div class="col-sm-6 col-md-4">
                            <div class="form-group">
                                <label>Experience</label>
                                <input type="text" name="experience" id="experience" placeholder="Experience" class="form-control">
                            </div>
                         </div>
                         <div class="col-sm-6 col-md-4">
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="number" name="mobile" id="mobile" placeholder="Phone No" class="form-control">
                            </div>
                         </div>
                         <div class="col-sm-6 col-md-4">
                            <div class="form-group">
                                <label>Department</label>
                                <input type="text" name="address" id="address" placeholder="Address" class="form-control">
                            </div>
                         </div>
                         <div class="col-sm-16 col-md-3">
                            <div class="form-group">
                                <label>Success Rate %</label>
                                <input type="number" name="rate" id="rate" placeholder="Rate" class="form-control">
                            </div>
                         </div>
                         <div class="col-sm-6 col-md-2">
                            <div class="form-group">
                                <label>C. Work %</label>
                                <input type="number" name="work" id="work" placeholder="Work" class="form-control">
                            </div>
                         </div>
                         <div class="col-sm-6 col-md-2">
                            <div class="form-group">
                                <label>S. Client %</label>
                                <input type="number" name="satisfied" id="satisfied" placeholder="Satisfied" class="form-control">
                            </div>
                         </div>
                        <div class="col-sm-6 col-md-2">
                            <label for="image" style="cursor: pointer;">
                                <img id="showImage" src="{{ (!empty($channel->image)) ? url('backend/all-images/web/channel/'.$channel->image) : url('backend/all-images/web/default/site.png') }}" alt="image" class="img-fluid avatar-lg rounded" />
                            </label>
                            <input style="display: none;" type="file" name="image" id="image" accept="image/*" />
                        </div>
                        <div class="col-sm-6 col-md-2">
                            <label for="photo" style="cursor: pointer;">
                                <img id="showPhoto" src="{{ (!empty($channel->photo)) ? url('backend/all-images/web/channel/'.$channel->photo) : url('backend/all-images/web/default/site.png') }}" alt="image" class="img-fluid avatar-lg rounded" />
                            </label>
                            <input style="display: none;" type="file" name="photo" id="photo" accept="photo/*" />
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="form-group">
                                <label>Facebook</label>
                                <input type="text" name="fb" id="fb" placeholder="Facebook Link" class="form-control">
                            </div>
                         </div>
                         <div class="col-sm-6 col-md-3">
                            <div class="form-group">
                                <label>Twiteer</label>
                                <input type="text" name="tw" id="tw" placeholder="Twiteer Link" class="form-control">
                            </div>
                         </div>
                         <div class="col-sm-6 col-md-3">
                            <div class="form-group">
                                <label>Whatsapp</label>
                                <input type="text" name="wh" id="wh" placeholder="WhatsApp Link" class="form-control">
                            </div>
                         </div>
                         <div class="col-sm-6 col-md-3">
                            <div class="form-group">
                                <label>Instagram</label>
                                <input type="text" name="in" id="in" placeholder="Instagram Link" class="form-control">
                            </div>
                         </div>
                         <div class="col-sm-12 col-md-12">
                            <div class="form-group">
                                <textarea class="summery" name="summery" placeholder="Summery Here..."></textarea>
                            </div>
                         </div>
                         
                        <div class="col-sm-12 col-md-12">
                           <div class="text-right">
                            <input type="submit" id="submitBtn" class="btn btn-success waves-effect waves-light" value="Save">
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

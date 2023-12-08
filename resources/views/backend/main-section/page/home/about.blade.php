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
                    <h4 class="modal-title" id="myCenterModalLabel">About</h4>
                </div>
                <div class="card-box">
                <form action="{{route('about.update')}}" method="post" enctype="multipart/form-data">
                @csrf
                    <div class="row">
                        <div class="col-sm-6 col-md-6">
                           <div class="form-group">
                               <label>Owner Statements</label>
                               <textarea name="owner" class="form-control">{{$abouts->owner}}</textarea>
                           </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                           <div class="form-group">
                               <label>Mission</label>
                               <textarea name="mission" class="form-control">{{$abouts->mission}}</textarea>
                           </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <label>Vission</label>
                                <textarea name="vission" class="form-control">{{$abouts->vission}}</textarea>
                            </div>
                         </div>
                         <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <label>Since</label>
                                <input type="text" name="since" value="{{$abouts->since}}" class="form-control">
                            </div>
                         </div>

                         <div class="col-sm-6 col-md-2">
                            <label for="image" style="cursor: pointer;">
                            <img id="showImage" src="{{ (!empty($abouts->image)) ? url('backend/all-images/web/all/'.$abouts->image): url('backend/all-images/web/default/site.png') }}" alt="image" class="img-fluid avatar-lg rounded"/>
                            <br/>
                            <span class="badge rounded-pill">Owner Image</span>
                            <input style="display: none;" type="file" name="image" id="image" accept="image/*" />
                        </label>
                        </div>

                        <div class="col-sm-4 col-md-2">
                            <label for="photo" style="cursor: pointer;">
                            <img id="showPhoto" src="{{ (!empty($abouts->photo)) ? url('backend/all-images/web/all/'.$abouts->photo): url('backend/all-images/web/default/site.png') }}" alt="photo" width="10px" height="10px" class="img-fluid avatar-lg rounded"/>
                            <br/>
                            <span class="badge rounded-pill">Cover Banner</span>
                            <input style="display: none;" type="file" name="photo" id="photo" accept="photo/*" />
                        </label>
                        </div>
                        <div class="col-sm-4 col-md-2">
                            <label for="ico" style="cursor: pointer;">
                            <img id="showIco" src="{{ (!empty($abouts->ico)) ? url('backend/all-images/web/all/'.$abouts->ico): url('backend/all-images/web/default/site.png') }}" alt="ico" width="10px" height="10px" class="img-fluid avatar-lg rounded"/>
                            <br/>
                            <span class="badge rounded-pill">Since Logo</span>
                            <input style="display: none;" type="file" name="ico" id="ico" accept="ico/*" />
                        </label>
                        </div>
                        <br/>

                        <div class="col-sm-12 col-md-12">
                           <div class="text-right">
                            <input type="submit" class="btn btn-success waves-effect waves-light" value="Save">
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

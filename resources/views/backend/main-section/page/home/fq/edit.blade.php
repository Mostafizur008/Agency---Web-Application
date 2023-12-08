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
                    <h4 class="modal-title" id="myCenterModalLabel">Edit Fq</h4>
                </div>
                <div class="card-box">
                <form action="{{route('fq',$editData->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                    <div class="row">
                        <div class="col-sm-6 col-md-6">
                           <div class="form-group">
                               <label>Question</label>
                               <textarea type="text" name="question" id="question" placeholder="Question" class="form-control">{{$editData->question}}</textarea>
                           </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                           <div class="form-group">
                               <label>Answare</label>
                               <textarea type="text" name="ans" id="ans" placeholder="Answare" class="form-control">{{$editData->ans}}</textarea>
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

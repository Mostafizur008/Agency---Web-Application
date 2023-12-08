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
                    <h4 class="page-title"><br /></h4>
                </div>
            </div>
        </div>
        <!-- end page title -->
        <div class="row">
            <div class="col-lg-2">
            </div>
            <div class="col-lg-8">
                <div class="modal-header bg-success">
                    <h4 class="modal-title" id="myCenterModalLabel">Add Fq</h4>
                </div>
                <div class="card-box">
                    <form id="faqForm" action="{{ route('fq.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div id="faqItems">
                            <div class="faq-item">
                                <div  class="col-sm-12 col-md-12 text-right">
                                    <button type="button" class="btn btn-info" onclick="addMore()"><i class="fe-plus"></i></button>
                            </div>
                                <div class="row">
                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label>Question</label>
                                            <textarea type="text" name="question[]" placeholder="Question" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label>Answer</label>
                                            <textarea type="text" name="ans[]" placeholder="Answer" class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6"><br/></div>
                        <div class="col-sm-12 col-md-12">
                            <div class="text-right">
                                <input type="submit" class="btn btn-success waves-effect waves-light" value="Save">
                            </div>
                        </div>
                    </form>
                </div> <!-- end card-box -->
                <div class="col-lg-2">
                </div>
            </div><!-- end col -->
        </div>
    </div>

    <script type="text/javascript">
        @include('backend.code-section.ajax-script.image.show')

        function addMore() {
            var faqItems = document.getElementById('faqItems');
            var newItem = document.createElement('div');
            newItem.className = 'faq-item';
            newItem.innerHTML = `
            <div class="row">
                    <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                            <label>Question</label>
                            <textarea type="text" name="question[]" placeholder="Question" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                            <label>Answer</label>
                            <textarea type="text" name="ans[]" placeholder="Answer" class="form-control"></textarea>
                        </div>
                    </div>
                </div>
                    <div class="col-sm-12 col-md-12 text-right">
                        <button type="button" class="btn btn-danger" onclick="removeItem(this)"><i class="fe-x"></i></button>
                </div>
            `;
            faqItems.appendChild(newItem);
        }

        function removeItem(btn) {
            var faqItem = btn.closest('.faq-item');
            faqItem.remove();
        }
    </script>
</div>
@endsection

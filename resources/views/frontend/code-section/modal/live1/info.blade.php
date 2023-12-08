@include('backend.code-section.js.head-js.head')

@php
$setting = DB::table('settings')->first();  
@endphp
 
<div class="account-pages mt-5 mb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-8 col-xl-8">
                <div class="card bg-pattern">

                    <div class="card-body p-4">
                        
                        <div class="text-center w-75 m-auto">
                            <div class="auth-logo">
                                <a href="/" class="logo logo-dark text-center">
                                    <span class="logo-lg">
                                        <img src="{{ (!empty($setting->image)) ? url('backend/all-images/web/logo/'.$setting->image): url('backend/all-images/web/default/logo.png') }}" alt="" height="42">
                                    </span>
                                </a>
            
                                <a href="/" class="logo logo-light text-center">
                                    <span class="logo-lg">
                                        <img src="{{ (!empty($setting->image)) ? url('backend/all-images/web/logo/'.$setting->image): url('backend/all-images/web/default/logo.png') }}" alt="" height="42">
                                    </span>
                                </a>
                            </div>
                            <p class="text-muted mb-4 mt-3"></p>
                        </div>

                        <form method="POST" action="{{ route('info') }}">
                            @csrf
                          <div class="row">

                         <div class="col-sm-6 col-md-4">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" id="name" placeholder="Enter Your Name" class="form-control">
                            </div>
                         </div>

                         <div class="col-sm-6 col-md-4">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="email" id="email" placeholder="Enter Your Email" class="form-control">
                            </div>
                         </div>

                         <div class="col-sm-6 col-md-4">
                            <div class="form-group">
                                <label>Mobile</label>
                                <input type="text" name="mobile" id="mobile" placeholder="Enter Your Mobile" class="form-control">
                            </div>
                         </div>

                         <div class="col-sm-12 col-md-12">
                            <div class="form-group">
                                <label>Subject</label>
                                <input type="text" name="subject" id="subject" placeholder="Enter Your Subject" class="form-control">
                            </div>
                         </div>

                         <div class="col-sm-12 col-md-12">
                            <div class="form-group">
                                <textarea class="form-control" name="message" placeholder="Your Message Here..."></textarea>
                            </div>
                        </div>

                         <div class="col-sm-12 col-md-12">
                            <div class="form-group mb-0 text-right">
                                <button id="form_submit" class="btn btn-success waves-effect waves-light" type="submit"> Send </button>
                            </div>
                         </div>
                          </div>
                        </form> 
                    </div> <!-- end card-body -->
                </div>
                <!-- end card -->
            </div> <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>


@include('backend.code-section.js.main-js.main')

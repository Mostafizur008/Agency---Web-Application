@php
$setting = DB::table('settings')->first();
@endphp

<meta charset="utf-8" />
<title>Dashboard | {{$setting->title}}</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<!----Tostr------->
<link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">

<!-- App favicon -->
<link rel="shortcut icon" type="image/x-icon" href="{{ (!empty($setting->photo)) ? url('backend/all-images/web/logo/icon/'.$setting->photo) : url('backend/all-images/web/default/logo.png') }}">

<!-- Plugins css -->
<link href="{{asset('backend/mrs-code/libs/flatpickr/flatpickr.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('backend/mrs-code/libs/selectize/css/selectize.bootstrap3.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('backend/mrs-code/libs/dropzone/min/dropzone.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('backend/mrs-code/libs/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('backend/mrs-code/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('backend/mrs-code/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('backend/mrs-code/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('backend/mrs-code/libs/datatables.net-select-bs4/css//select.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('backend/mrs-code/libs/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('backend/mrs-code/libs/clockpicker/bootstrap-clockpicker.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('backend/mrs-code/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}" rel="stylesheet" type="text/css" />

<!-- App css -->
<link href="{{asset('backend/mrs-code/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
<link href="{{asset('backend/mrs-code/css/app.min.css')}}" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

<link href="{{asset('backend/mrs-code/css/bootstrap-dark.min.css')}}" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" disabled />
<link href="{{asset('backend/mrs-code/css/app-dark.min.css')}}" rel="stylesheet" type="text/css" id="app-dark-stylesheet"  disabled />

<!-- icons -->
<link href="{{asset('backend/mrs-code/css/icons.min.css')}}" rel="stylesheet" type="text/css" />

<link href="{{asset('backend/mrs-code/libs/dropzone/min/dropzone.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('backend/mrs-code/libs/dropify/css/dropify.min.css')}}" rel="stylesheet" type="text/css" />


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.6/handlebars.min.js"></script>

<link href="{{asset('backend/mrs-code/libs/bootstrap-table/bootstrap-table.min.css')}}" rel="stylesheet" type="text/css" />

<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script src="https://cdn.tiny.cloud/1/32h5e1ybg4dm9g3oc9bhuju713zy18y2pcotiohuschvm2xk/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>


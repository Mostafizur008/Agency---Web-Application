<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\Auth\LoginController;
use App\Http\Controllers\Backend\Dashboard\DashboardController;
use App\Http\Controllers\Backend\Logout\LogoutController;
use App\Http\Controllers\Backend\User\UserController;
use App\Http\Controllers\Backend\User\Profile\ProfileController;
use App\Http\Controllers\Backend\Setting\SettingController;
use App\Http\Controllers\Backend\Home\AboutusController;
use App\Http\Controllers\Backend\Home\TeamsController;
use App\Http\Controllers\Backend\Live\ChannelController;
use App\Http\Controllers\Backend\Home\SupplierController;
use App\Http\Controllers\Backend\Home\ClientsController;
use App\Http\Controllers\Backend\Home\FqController;
use App\Http\Controllers\Backend\Home\PatnerController;
use App\Http\Controllers\Backend\Home\BenifitsController;
use App\Http\Controllers\Backend\Home\ServiceController;
use App\Http\Controllers\Backend\Home\ProductController;
use App\Http\Controllers\Backend\Home\HelpController;
use App\Http\Controllers\Backend\Home\FakerController;
use App\Http\Controllers\Backend\Category\CategoryController;
use App\Http\Controllers\Backend\Category\SubcategoryController;
use App\Http\Controllers\Backend\Others\Client\ClientController;
use App\Http\Controllers\Frontend\Home\HomeController;
use App\Http\Controllers\Frontend\Home\AboutController;
use App\Http\Controllers\Frontend\Home\ContactController;
use App\Http\Controllers\Frontend\Home\TeamController;
use App\Http\Controllers\Frontend\Home\SuppliersController;
use App\Http\Controllers\Frontend\Home\ClienteController;
use App\Http\Controllers\Frontend\Home\PatnersController;
use App\Http\Controllers\Frontend\Home\FqsController;
use App\Http\Controllers\Frontend\Home\PostController;
use App\Http\Controllers\Frontend\Home\HelpsController;
use App\Http\Controllers\Frontend\Home\ServicesController;
use App\Http\Controllers\Frontend\Others\Info\InfoController;




Route::get('/', function () {
    return view('frontend.home.view');
});

Route::get('/about', [AboutController::class, 'About'])->name('about');
Route::get('/contact', [ContactController::class, 'Contact'])->name('contact');
Route::get('/team', [TeamController::class, 'Team'])->name('team');
Route::get('/team/{id}', [TeamController::class, 'TeamC'])->name('team.c');
Route::get('/suppliers', [SuppliersController::class, 'Supplier'])->name('supplier');
Route::get('/clients', [ClienteController::class, 'Cl'])->name('cl');
Route::get('/category-menu/post/{id}', [PostController::class, 'Ps'])->name('ps');
Route::get('/product_category/post/detail/{id}', [PostController::class, 'Pd'])->name('pd');
Route::get('/office-location', [HelpsController::class, 'Help'])->name('help');
Route::get('/service', [ServicesController::class, 'Sh'])->name('sh');
Route::get('load-more-products', [HomeController::class, 'loadMoreProducts'])->name('load-more-products');


Auth::routes([
   'register' => false,
   'login' => false,
]);

Route::get('/', [HomeController::class, 'Home'])->name('home');

// User Logout
Route::get('/logout',[LogoutController::class,'Logout'])->name('user.logout');

// Login Admin/User
Route::get('/auth/login',[LoginController::class,'AdminLogin'])->name('auth.login');
Route::post('/login/submit',[LoginController::class,'SubmitLogin'])->name('submit.login');

// Info
Route::get('/info/view',[InfoController::class,'InfoView'])->name('info.view');
Route::post('/info',[InfoController::class,'Info'])->name('info');
Route::post('/info_send',[ContactController::class,'Info'])->name('info_c');

Route::group(['middleware' => 'auth'],function(){

// Dashboard
Route::get('/dashboard',[DashboardController::class,'Dashboard'])->name('dashboard');

// User List
Route::post('/user',[UserController::class,'Store']);
Route::get('/fetch-user', [UserController::class, 'fetchuser']);
Route::get('/edit-user/{id}', [UserController::class, 'edit']);
Route::put('update-user/{id}', [UserController::class, 'update']);
Route::delete('delete-user/{id}', [UserController::class, 'destroy']);

Route::prefix('users')->group(function()
{
   Route::get('/view',[UserController::class,'UserView'])->name('user.view');
   Route::get('/add',[UserController::class,'UserAdd'])->name('user.add');
   Route::post('/store',[UserController::class,'UserStore'])->name('Store');
});

 // Live
 Route::delete('delete-live/{id}', [ChannelController::class, 'destroy']);

Route::prefix('api')->group(function()
{
   Route::get('/slider/view',[ChannelController::class,'Live'])->name('live.view');
   Route::get('/slider/add',[ChannelController::class,'LiveAdd'])->name('live.add');
   Route::post('/slider/store',[ChannelController::class,'LiveStore'])->name('live.store');
   Route::get('/slider/edit/{id}',[ChannelController::class,'LiveEdit'])->name('live.edit');
   Route::post('/slider/update/{id}',[ChannelController::class,'LiveUpdate'])->name('update');
   Route::get('/slider-status/{id}',[ChannelController::class,'ChangeStatus'])->name('ch.status');
});

// Team
Route::delete('delete-team/{id}', [TeamsController::class, 'destroy']);

Route::prefix('api')->group(function()
{
   Route::get('/team/view',[TeamsController::class,'Teams'])->name('team.view');
   Route::get('/team/add',[TeamsController::class,'TeamsAdd'])->name('team.add');
   Route::post('/team/store',[TeamsController::class,'TeamsStore'])->name('team.store');
   Route::get('/team/edit/{id}',[TeamsController::class,'TeamsEdit'])->name('team.edit');
   Route::post('/team/update/{id}',[TeamsController::class,'TeamsUpdate'])->name('update');
   Route::get('/team-status/{id}',[TeamsController::class,'TeamsStatus'])->name('change.status');
});

// Supplier
Route::delete('delete-supplier/{id}', [SupplierController::class, 'destroy']);

Route::prefix('api')->group(function()
{
   Route::get('/supplier/view',[SupplierController::class,'Supplier'])->name('supplier.view');
   Route::get('/supplier/add',[SupplierController::class,'SupplierAdd'])->name('supplier.add');
   Route::post('/supplier/store',[SupplierController::class,'SupplierStore'])->name('supplier.store');
   Route::get('/supplier/edit/{id}',[SupplierController::class,'SupplierEdit'])->name('supplier.edit');
   Route::post('/supplier/update/{id}',[SupplierController::class,'SupplierUpdate'])->name('supplier');
   Route::get('/supplier-status/{id}',[SupplierController::class,'SupplierStatus'])->name('supplier.status');
});

// Client
Route::delete('delete-client/{id}', [ClientsController::class, 'destroy']);

Route::prefix('api')->group(function()
{
   Route::get('/client/view',[ClientsController::class,'Client'])->name('clients.view');
   Route::get('/client/add',[ClientsController::class,'ClientAdd'])->name('clients.add');
   Route::post('/client/store',[ClientsController::class,'ClientStore'])->name('clients.store');
   Route::get('/client/edit/{id}',[ClientsController::class,'ClientEdit'])->name('clients.edit');
   Route::post('/client/update/{id}',[ClientsController::class,'ClientUpdate'])->name('clients');
   Route::get('/client-status/{id}',[ClientsController::class,'ClientStatus'])->name('clients.status');
});

// Patner
Route::delete('delete-pt/{id}', [PatnerController::class, 'destroy']);

Route::prefix('api')->group(function()
{
   Route::get('/patner/view',[PatnerController::class,'Pt'])->name('pt.view');
   Route::get('/patner/add',[PatnerController::class,'PtAdd'])->name('pt.add');
   Route::post('/patner/store',[PatnerController::class,'PtStore'])->name('pt.store');
   Route::get('/patner/edit/{id}',[PatnerController::class,'PtEdit'])->name('pt.edit');
   Route::post('/patner/update/{id}',[PatnerController::class,'PtUpdate'])->name('pt');
   Route::get('/patner-status/{id}',[PatnerController::class,'PtStatus'])->name('pt.status');
});

// FQ
Route::delete('delete-fq/{id}', [FqController::class, 'destroy']);

Route::prefix('api')->group(function()
{
   Route::get('/fq/view',[FqController::class,'Fq'])->name('fq.view');
   Route::get('/fq/add',[FqController::class,'FqAdd'])->name('fq.add');
   Route::post('/fq/store',[FqController::class,'FqStore'])->name('fq.store');
   Route::get('/fq/edit/{id}',[FqController::class,'FqEdit'])->name('fq.edit');
   Route::post('/fq/update/{id}',[FqController::class,'FqUpdate'])->name('fq');
   Route::get('/fq-status/{id}',[FqController::class,'FqStatus'])->name('fq.status');
});

// Benefit
Route::delete('delete-bn/{id}', [BenifitsController::class, 'destroy']);

Route::prefix('api')->group(function()
{
   Route::get('/bn/view',[BenifitsController::class,'Bn'])->name('bn.view');
   Route::get('/bn/add',[BenifitsController::class,'BnAdd'])->name('bn.add');
   Route::post('/bn/store',[BenifitsController::class,'BnStore'])->name('bn.store');
   Route::get('/bn/edit/{id}',[BenifitsController::class,'BnEdit'])->name('bn.edit');
   Route::post('/bn/update/{id}',[BenifitsController::class,'BnUpdate'])->name('bn');
   Route::get('/bn-status/{id}',[BenifitsController::class,'BnStatus'])->name('bn.status');
});

// Category
Route::delete('delete-ct/{id}', [CategoryController::class, 'destroy']);

Route::prefix('api')->group(function()
{
   Route::get('/category/view',[CategoryController::class,'Ct'])->name('ct.view');
   Route::get('/category/add',[CategoryController::class,'CtAdd'])->name('ct.add');
   Route::post('/category/store',[CategoryController::class,'CtStore'])->name('ct.store');
   Route::get('/category/edit/{id}',[CategoryController::class,'CtEdit'])->name('ct.edit');
   Route::put('/category/update/{id}',[CategoryController::class,'CtUpdate'])->name('ct');
   Route::get('/category-status/{id}',[CategoryController::class,'CtStatus'])->name('ct.status');
});

// Sub Category

Route::prefix('api')->group(function()
{
   Route::get('/sub_category/view',[SubcategoryController::class,'Sc'])->name('sc.view');
   Route::get('/sub_category/add',[SubcategoryController::class,'ScAdd'])->name('sc.add');
   Route::post('/sub_category/store',[SubcategoryController::class,'ScStore'])->name('sc.store');
   Route::get('/sub_category/edit/{id}',[SubcategoryController::class,'ScEdit'])->name('sc.edit');
   Route::put('/sub_category/update/{id}',[SubcategoryController::class,'ScUpdate'])->name('sc');
   Route::get('/sub_category-status/{id}',[SubcategoryController::class,'ScStatus'])->name('sc.status');
   Route::get('delete-sub_category/{id}', [SubcategoryController::class, 'destroy'])->name('sc.delete');
});

// Product

Route::prefix('api')->group(function()
{
   Route::get('/product/view',[ServiceController::class,'Se'])->name('se.view');
   Route::get('/product/add',[ServiceController::class,'SeAdd'])->name('se.add');
   Route::post('/product/store',[ServiceController::class,'SeStore'])->name('se.store');
   Route::get('/product/edit/{id}',[ServiceController::class,'SeEdit'])->name('se.edit');
   Route::put('/product/update/{id}',[ServiceController::class,'SeUpdate'])->name('se');
   Route::get('/product-status/{id}',[ServiceController::class,'SeStatus'])->name('se.status');
   Route::get('delete-product/{id}', [ServiceController::class, 'destroy'])->name('se.delete');
});

// Service

Route::delete('delete-service/{id}', [ProductController::class, 'destroy']);

Route::prefix('api')->group(function()
{
   Route::get('/service/view',[ProductController::class,'Pe'])->name('pe.view');
   Route::get('/service/add',[ProductController::class,'PeAdd'])->name('pe.add');
   Route::post('/service/store',[ProductController::class,'PeStore'])->name('pe.store');
   Route::get('/service/edit/{id}',[ProductController::class,'PeEdit'])->name('pe.edit');
   Route::put('/service/update/{id}',[ProductController::class,'PeUpdate'])->name('pe');
   Route::get('/service-status/{id}',[ProductController::class,'PeStatus'])->name('pe.status');
});

// Help

Route::delete('delete-help/{id}', [HelpController::class, 'destroy']);

Route::prefix('api')->group(function()
{
   Route::get('/help-center/view',[HelpController::class,'Hl'])->name('hl.view');
   Route::get('/help-center/add',[HelpController::class,'HlAdd'])->name('hl.add');
   Route::post('/help-center/store',[HelpController::class,'HlStore'])->name('hl.store');
   Route::get('/help-center/edit/{id}',[HelpController::class,'HlEdit'])->name('hl.edit');
   Route::put('/help-center/update/{id}',[HelpController::class,'HlUpdate'])->name('hl');
   Route::get('/help-center-status/{id}',[HelpController::class,'HlStatus'])->name('hl.status');
});

// Faker

Route::delete('delete-faker/{id}', [FakerController::class, 'destroy']);

Route::prefix('api')->group(function()
{
   Route::get('/faker/view',[FakerController::class,'Kr'])->name('kr.view');
   Route::get('/faker/add',[FakerController::class,'KrAdd'])->name('kr.add');
   Route::post('/faker/store',[FakerController::class,'KrStore'])->name('kr.store');
   Route::get('/faker/edit/{id}',[FakerController::class,'KrEdit'])->name('kr.edit');
   Route::put('/faker/update/{id}',[FakerController::class,'KrUpdate'])->name('kr');
   Route::get('/faker-status/{id}',[FakerController::class,'KrStatus'])->name('kr.status');
});

// User Admin Profile
Route::prefix('profile')->group(function()
{
   Route::get('/view',[ProfileController::class,'AdminProfile'])->name('profile.view');
   Route::get('/edit',[ProfileController::class,'AdminProfileEdit'])->name('profile.edit');
   Route::post('/store',[ProfileController::class,'AdminStore'])->name('user.profile.store');
   Route::get('/change/password',[ProfileController::class,'ChPassword'])->name('change.password');
   Route::post('/change/password',[ProfileController::class,'ChPasswordUpdate'])->name('user.change.password.update');
});

// Client
Route::delete('delete-info/{id}', [ClientController::class, 'destroy']);

Route::prefix('client')->group(function()
{
   Route::get('/request',[ClientController::class,'ClView'])->name('client.view');
   Route::get('/detail/{id}',[ClientController::class,'ClDetail'])->name('client.detail');
});

// Setting
Route::prefix('setting')->group(function()
{
   Route::get('/update',[SettingController::class,'SettingView'])->name('setting.view');
   Route::post('/update',[SettingController::class,'SettingUpdate'])->name('setting.update');
});

// About
Route::prefix('api')->group(function()
{
   Route::get('/about/update',[AboutusController::class,'AboutView'])->name('about.view');
   Route::post('/about/update',[AboutusController::class,'AboutUpdate'])->name('about.update');
});

});

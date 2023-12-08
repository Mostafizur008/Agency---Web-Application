<div class="left-side-menu">

    <div class="h-100" data-simplebar>

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul id="side-menu">


                <li class="menu-title mt-2">User Module</li>
                <li>
                    <a href="#sidebarEcommerce" data-toggle="collapse">
                        <i data-feather="users"></i>
                        <span> User Management </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarEcommerce">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{route('user.view')}}">User List</a>
                            </li>
                            <li>
                                <a href="{{route('user.add')}}">User Add</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#sidebarCrm" data-toggle="collapse">
                        <i data-feather="user"></i>
                        <span> Profile Management </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarCrm">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{route('profile.view')}}">My Profile</a>
                            </li>
                            <li>
                                <a href="{{route('change.password')}}">Change Password</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="menu-title mt-2">Category Module</li>
                <li>
                    <a href="#sidebar7" data-toggle="collapse">
                        <i class="fe-layers"></i>
                        <span> Category Section </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebar7">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{route('ct.view')}}">Category List</a>
                            </li>
                            <li>
                                <a href="{{route('sc.view')}}">Sub Category List</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="menu-title mt-2">Slider Module</li>
                <li>
                    <a href="#sidebar" data-toggle="collapse">
                        <i class="fe-toggle-left"></i>
                        <span> Slider Section </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebar">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{route('live.view')}}">Slider List</a>
                            </li>
                            <li>
                                <a href="{{route('live.add')}}">Slider Add</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="menu-title mt-2">Others Module</li>
                <li>
                    <a href="#sidebar8" data-toggle="collapse">
                        <i class="fe-eye"></i>
                        <span> Others Section </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebar8">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{route('pe.view')}}">Service List</a>
                            </li>
                            <li>
                                <a href="{{route('se.view')}}">Product List</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="menu-title mt-2">Page Module</li>
                <li>
                    <a href="{{route('about.view')}}" data-toggle="">
                        <i class="fe-info"></i>
                        <span> About Section </span>
                    </a>
                </li>
                <li>
                    <a href="#sidebar1" data-toggle="collapse">
                        <i class="fe-sliders"></i>
                        <span> Team Section </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebar1">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{route('team.view')}}">Team List</a>
                            </li>
                            <li>
                                <a href="{{route('team.add')}}">Team Add</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#sidebar2" data-toggle="collapse">
                        <i class="fe-package"></i>
                        <span> Supplier Section </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebar2">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{route('supplier.view')}}">Supplier List</a>
                            </li>
                            <li>
                                <a href="{{route('supplier.add')}}">Supplier Add</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#sidebar3" data-toggle="collapse">
                        <i class="fe-user-check"></i>
                        <span> Client Section </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebar3">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{route('clients.view')}}">Client List</a>
                            </li>
                            <li>
                                <a href="{{route('clients.add')}}">Client Add</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#sidebar4" data-toggle="collapse">
                        <i class="fe-user-minus"></i>
                        <span> Patner Section </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebar4">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{route('pt.view')}}">Patner List</a>
                            </li>
                            <li>
                                <a href="{{route('pt.add')}}">Patner Add</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#sidebar5" data-toggle="collapse">
                        <i class="fe-slack"></i>
                        <span> Fq Section </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebar5">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{route('fq.view')}}">Fq List</a>
                            </li>
                            <li>
                                <a href="{{route('fq.add')}}">Fq Add</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#sidebar6" data-toggle="collapse">
                        <i class="fe-stop-circle"></i>
                        <span> Benefit Section </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebar6">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{route('bn.view')}}">Benefit List</a>
                            </li>
                            <li>
                                <a href="{{route('bn.add')}}">Benefit Add</a>
                            </li>
                        </ul>
                    </div>
                </li>
              <li>
                    <a href="{{route('client.view')}}" data-toggle="">
                        <i data-feather="info"></i>
                        <span> Client Message </span>
                    </a>
                </li>

                <li class="menu-title mt-2">Setting Module</li>
                <li>
                    <a href="#sidebar7" data-toggle="collapse">
                        <i class="fe-settings"></i>
                        <span> Setting Section </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebar7">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{route('setting.view')}}">Settings</a>
                            </li>
                            <li>
                                <a href="{{route('hl.view')}}">Contact</a>
                            </li>
                            <li>
                                <a href="{{route('kr.view')}}">Faker</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
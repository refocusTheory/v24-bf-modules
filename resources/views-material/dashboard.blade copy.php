@extends('layouts/layoutMaster')

@section('sidebar')

<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
            <div class="wrapit">
            <div class="app-brand demo">
            <a href="index.html" class="app-brand-link">
            <img alt="Logo" id="logo" src="https://d23zqfvqndw8ja.cloudfront.net/images/greenhouse-logo-long-light.png" class="h-35px app-sidebar-logo-default img-fluid" />
						
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
              <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M11.4854 4.88844C11.0081 4.41121 10.2344 4.41121 9.75715 4.88844L4.51028 10.1353C4.03297 10.6126 4.03297 11.3865 4.51028 11.8638L9.75715 17.1107C10.2344 17.5879 11.0081 17.5879 11.4854 17.1107C11.9626 16.6334 11.9626 15.8597 11.4854 15.3824L7.96672 11.8638C7.48942 11.3865 7.48942 10.6126 7.96672 10.1353L11.4854 6.61667C11.9626 6.13943 11.9626 5.36568 11.4854 4.88844Z"
                  fill="currentColor"
                  fill-opacity="0.6" />
                <path
                  d="M15.8683 4.88844L10.6214 10.1353C10.1441 10.6126 10.1441 11.3865 10.6214 11.8638L15.8683 17.1107C16.3455 17.5879 17.1192 17.5879 17.5965 17.1107C18.0737 16.6334 18.0737 15.8597 17.5965 15.3824L14.0778 11.8638C13.6005 11.3865 13.6005 10.6126 14.0778 10.1353L17.5965 6.61667C18.0737 6.13943 18.0737 5.36568 17.5965 4.88844C17.1192 4.41121 16.3455 4.41121 15.8683 4.88844Z"
                  fill="currentColor"
                  fill-opacity="0.38" />
              </svg>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

            <ul class="menu-inner py-1">

                <!-- Dashboards -->
                <li class="menu-item active ">

                  <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons mdi mdi-home-outline"></i>
                    <div data-i18n="Dashboards">Dashboards</div>
                    <div class="badge bg-primary rounded-pill ms-auto">5</div>
                  </a>

                  <ul class="menu-sub">
                    <li class="menu-item">
                      <a href="app-ecommerce-dashboard.html" class="menu-link">
                        <div data-i18n="eCommerce">eCommerce</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="dashboards-crm.html" class="menu-link">
                        <div data-i18n="CRM">CRM</div>
                      </a>
                    </li>
                    <li class="menu-item ">
                      <a href="index.html" class="menu-link">
                        <div data-i18n="Analytics">Analytics</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="app-logistics-dashboard.html" class="menu-link">
                        <div data-i18n="Logistics">Logistics</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="app-academy-dashboard.html" class="menu-link">
                        <div data-i18n="Academy">Academy</div>
                      </a>
                    </li>
                  </ul>

                </li>

            <!-- Page -->
            <div class="menu-item">
              @if(Module::has('ManagerBrand'))
              <div class="menu-item">
                <!--begin:Menu link-->
                <a class="menu-link  " href="{{ route('brand-manager') }}">
                <span class="">
                  <i class="menu-icon fa fa-meteor "></i> 
                </span>
                  <span class="menu-title">Brands</span>
                </a>
                <!--end:Menu link-->
              </div>
              @else

              @endif
                        
              @if(Module::has('ManagerChannel'))
                          <!--begin:Menu item-->
              <div class="menu-item">
                <!--begin:Menu link-->
                <a class="menu-link  " href="{{ route('channel-manager') }}">
                <span class="">
                  <i class="menu-icon fa fa-tower-broadcast "></i> 
                </span>
                  <span class="menu-title">Channels</span>
                </a>
                <!--end:Menu link-->
              </div>
              @else

              @endif

              @if(Module::has('ManagerAsset'))
                          <!--begin:Menu item-->
              <div class="menu-item">
                <!--begin:Menu link-->
                <a class="menu-link  " href="{{ route('asset-manager') }}">
                <span class="">
                  <i class="menu-icon fa fa-photo-film "></i> 
                </span>
                  <span class="menu-title">Assets</span>
                </a>
                <!--end:Menu link-->
              </div>
              @else

              @endif

              @if(Module::has('ManagerEcommerce'))
                          <!--begin:Menu item-->
              <div class="menu-item">
                <!--begin:Menu link-->
                <a class="menu-link  " href="{{ route('ecommerce-manager') }}">
                <span class="">
                  <i class="menu-icon fa fa-barcode "></i> 
                </span>
                  <span class="menu-title">Ecommerce</span>
                </a>
                <!--end:Menu link-->
              </div>
              @else

              @endif

              @if(Module::has('ManagerMarketing'))
                          <!--begin:Menu item-->
              <div class="menu-item">
                <!--begin:Menu link-->
                <a class="menu-link  " href="{{ route('marketing-manager') }}">
                <span class="">
                  <i class="menu-icon fa fa-square-poll-vertical "></i> 
                </span>
                  <span class="menu-title">Marketing</span>
                </a>
                <!--end:Menu link-->
              </div>
              @else

              @endif
              @if(Module::has('ManagerData'))
              <div class="menu-item">
                <!--begin:Menu link-->
                <a class="menu-link  " href="{{ route('data-manager') }}">
                <span class="">
                  <i class="menu-icon fa fa-dna "></i> 
                </span>
                  </span>
                  <span class="menu-title">Data</span>
                </a>
                <!--end:Menu link-->
              </div>
              @else

              @endif
              @if(Module::has('ManagerIntegration'))
              <div class="menu-item">
                <!--begin:Menu link-->
                <a class="menu-link  " href="{{ route('app-manager') }}">
                <span class="">
                  <i class="menu-icon fa fa-arrows-spin "></i> 
                </span>
                  <span class="menu-title">App Manager</span>
                </a>
                <!--end:Menu link-->
              </div>
              @else

              @endif

              <hr>

              <div class="menu-item">
                <!--begin:Menu link-->
                <a class="menu-link  " href="{{ route('app-manager') }}">
                <span class="">
                  <i class="menu-icon fa fa-arrows-spin "></i> 
                </span>
                  <span class="menu-title">App Manager</span>
                </a>
                <!--end:Menu link-->
              </div>
              @if(Auth::user()->email == 'refocustheory@gmail.com')
                    <!--begin:Menu item-->
                    <div class="menu-item">
                    <!--begin:Menu link-->
                    <a class="menu-link" href="{{ route('harvest-form-io-builder') }}">
                    <span class="menu-icon">
                      <i class="fa fa-id-card fa-2">
                        
                      </i>
                    </span>
                      <span class="menu-title">BS5 Form Builder</span>
                    </a>
                    <!--end:Menu link-->
                  </div>
                  <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                    <!--begin:Menu link-->
                    <a class="menu-link" href="{{ route('harvest-formbuilder') }}">
                    <span class="menu-icon">
                      <i class="fa fa-id-card fa-2">
                        
                      </i>
                    </span>
                      <span class="menu-title">Form Builder</span>
                    </a>
                    <!--end:Menu link-->
                  </div>
                  <!--end:Menu item-->
              @endif


          </ul>

            </div>

        </aside>

        @endsection
@section('content')
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">

  
              <h4 class="py-3 mb-4"><span class="text-muted fw-light">User Profile /</span> Profile</h4>

              <!-- Header -->
              <div class="row">
                <div class="col-12">
                  <div class="card mb-4">
                          <!--        <div class="user-profile-header-banner ">
                          <img src="https://brandflowr.com/assets/img/mike-u-IdtnNvoP7M0-unsplash.jpg" alt="Banner image" class="rounded-top img-fluid" />
                        </div> -->
                    <div class="user-profile-header d-flex flex-column flex-sm-row text-sm-start text-center mb-4">
                      <div class="flex-shrink-0 mt-n2 mx-sm-0 mx-auto">
                        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                        <img
                          src="{{ Auth::user()->profile_photo_url }}"
                          style="max-width:200px;"
                          alt="user image"
                          class="d-block h-auto ms-0 ms-sm-4 rounded user-profile-img img-fluid" />
                          @endif
                      </div>
                      <div class="flex-grow-1 mt-3 mt-sm-5">
                        <div
                          class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-4 flex-md-row flex-column gap-4">
                          <div class="user-profile-info">
                            <h4>{{ Auth::user()->name }}</h4>
                            <ul
                              class="list-inline mb-0 d-flex align-items-center flex-wrap justify-content-sm-start justify-content-center gap-2">
                              <li class="list-inline-item">
                                <i class="mdi mdi-invert-colors me-1 mdi-20px"></i
                                ><span class="fw-medium">UX Designer</span>
                              </li>
                              <li class="list-inline-item">
                                <i class="mdi mdi-map-marker-outline me-1 mdi-20px"></i
                                ><span class="fw-medium">Vatican City</span>
                              </li>
                              <li class="list-inline-item">
                                <i class="mdi mdi-calendar-blank-outline me-1 mdi-20px"></i
                                ><span class="fw-medium"> Joined April 2021</span>
                              </li>
                            </ul>
                          </div>
                          <a href="javascript:void(0)" class="btn btn-primary">
                            <i class="mdi mdi-account-check-outline me-1"></i>Connected
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--/ Header -->

              <!-- Navbar pills -->
              <div class="row">
                <div class="col-md-12">
                  <ul class="nav nav-pills flex-column flex-sm-row mb-4">
                    <li class="nav-item">
                      <a class="nav-link active" href="javascript:void(0);"
                        ><i class="mdi mdi-account-outline me-1 mdi-20px"></i>Profile</a
                      >
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="pages-profile-teams.html"
                        ><i class="mdi mdi-account-multiple-outline me-1 mdi-20px"></i>Teams</a
                      >
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="pages-profile-projects.html"
                        ><i class="mdi mdi-view-grid-outline me-1 mdi-20px"></i>Projects</a
                      >
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="pages-profile-connections.html"
                        ><i class="mdi mdi-link me-1 mdi-20px"></i>Connections</a
                      >
                    </li>
                  </ul>
                </div>
              </div>
              <!--/ Navbar pills -->



              <div class="row mb-5">

                <div class="col-md">
                  <div class="card mb-3">
                    <div class="row g-0">
                      <div class="col-md-4 text-center text-white"style="background:url('https://d23zqfvqndw8ja.cloudfront.net/images/mike-u-IdtnNvoP7M0-unsplash.jpg'); background-size:cover;background-position:center center;min-height:200px;">
                        <h5 class="text-light text-center"></h5>
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                        <img src="https://d23zqfvqndw8ja.cloudfront.net/images/hive-logo-long-light.png" alt="" class="img-fluid" style="max-width:250px;">
                          <!-- <h2 class="card-title mt-3">Hive</h2> -->
                          <div class="p-3">
                          <p class="card-text"><small class="text-muted">by Brandflowr™</small></p> 
                                      <p class="card-text">Data and Infrasturcture.</p>
                                      <a href="javascript:void(0)" class="btn btn-primary waves-effect waves-light">Go</a>
                          </div>

                          <!-- <p class="card-text">
                            This is a wider card with supporting text below as a natural lead-in to additional content. This content
                            is a
                            little bit longer.
                          </p> -->
                          <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md">
                  <div class="card mb-3">
                    <div class="row g-0">
                      <div class="col-md-4 text-center text-white"style="background:url('https://d23zqfvqndw8ja.cloudfront.net/images/lights-5310589_1920.jpg'); background-size:cover;background-position:center center;min-height:200px;">
                        <h5 class="text-light text-center"></h5>
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                        <img src="https://d23zqfvqndw8ja.cloudfront.net/images/firefly-logo-long-light.png" alt="" class="img-fluid" style="max-width:250px;">
                          <!-- <h2 class="card-title mt-3">Hive</h2> -->
                          <div class="p-3">
                          <p class="card-text"><small class="text-muted">by Brandflowr™</small></p> 
                                      <p class="card-text">Data and Infrasturcture.</p>
                                      <a href="javascript:void(0)" class="btn btn-primary waves-effect waves-light">Go</a>
                          </div>

                          <!-- <p class="card-text">
                            This is a wider card with supporting text below as a natural lead-in to additional content. This content
                            is a
                            little bit longer.
                          </p> -->
                          <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>


<div class="row mb-5">
  <div class="col-md">
    <div class="card mb-3">
      <div class="row g-0">
        <div class="col-md-4 text-center text-white"style="background:url('https://d23zqfvqndw8ja.cloudfront.net/images/timothy-dykes-0DReXzfXa3w-unsplash.jpg'); background-size:cover;background-position:center center;min-height:200px;">
        <h5 class="text-light text-center"></h5>
        </div>
        <div class="col-md-8">
          <div class="card-body">
          <img src="https://d23zqfvqndw8ja.cloudfront.net/images/pollinate-logo-long-light.png" alt="" class="img-fluid" style="max-width:300px;">
            <!-- <h2 class="card-title mt-3">Pollinate</h2> -->
            <div class="p-3">
            <p class="card-text"><small class="text-muted">by Brandflowr™</small></p> 
                        <p class="card-text">Data and Infrasturcture.</p>
            <p class="card-text">
              This is a wider card with supporting text below as a natural lead-in to additional content. This content
              is a
              little bit longer.
            </p>
            <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md">
    <div class="card mb-3">
      <div class="row g-0">
        <div class="col-md-8">
          <div class="card-body">
          <img src="https://d23zqfvqndw8ja.cloudfront.net/images/harvest-logo-long-light.png" alt=""class="img-fluid" style="max-width:300px;">
          <!-- <h2 class="card-title mt-3">FireFly</h2> -->
            <p class="card-text"><small class="text-muted">by Brandflowr™</small></p> 
                        <p class="card-text">Data and Infrasturcture.</p>
            <p class="card-text">
              This is a wider card with supporting text below as a natural lead-in to additional content. This content
              is a
              little bit longer.
            </p>
          </div>
        </div>
        <div class="col-md-4"style="background:url('https://d23zqfvqndw8ja.cloudfront.net/images/marek-piwnicki-HAdgiEVS0hw-unsplash (1).jpg'); background-size:cover;background-position:center center;">
          <!-- <img class="card-img card-img-right" src="../../assets/img/elements/17.jpg" alt="Card image"> -->
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row mb-5">
  <div class="col-md-12">
    <div class="card mb-3">
      <div class="row g-0">
        <div class="col-md-4 text-center text-white"style="background:url('https://d23zqfvqndw8ja.cloudfront.net/images/nathan-dumlao-xvacAs7KyM4-unsplash.jpg'); background-size:cover;background-position:center center;min-height:200px;">
        <h5 class="text-light text-center"></h5>
        </div>
        <div class="col-md-8">
          <div class="card-body">
          <img src="https://d23zqfvqndw8ja.cloudfront.net/images/roots-logo-long-light.png" alt="" class="img-fluid" style="max-width:250px;">
            <!-- <h2 class="card-title mt-3">Pollinate</h2> -->
            <p class="card-text"><small class="text-muted">by Brandflowr™</small></p> 
                        <p class="card-text">The CRM.</p>
            <p class="card-text">
              This is a wider card with supporting text below as a natural lead-in to additional content. This content
              is a
              little bit longer.
            </p>
            <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md">
   
  </div>
</div>
           



              <!-- User Profile Content -->
              <div class="row">

                  <div class="col-md-4 col-lg-3 col-xxl-2 mb-3">
                    <div class="card text-center">
                      <div class="card-header">
                      <img src="https://d23zqfvqndw8ja.cloudfront.net/images/hive-logo-sq.png" alt="" width="70px"class="img">
                      </div>
                      <div class="card-body">
                     <strong class="test"><h4 class="">HIVE </h4></strong>   
                     <p class="small">by Brandflowr™</p>
                        <p class="card-text">Data and Infrasturcture.</p>
                        <a href="javascript:void(0)" class="btn btn-primary waves-effect waves-light">Go</a>
                      </div>
                      <div class="card-footer text-muted">
                      
                      </div>
                    </div>
                  </div>
                
                  <div class="col-md-4 col-lg-3 col-xxl-2 mb-3">
                    <div class="card text-center">
                      <div class="card-header">
                      <img src="https://d23zqfvqndw8ja.cloudfront.net/images/firefly-logo-sq.png" alt="" width="70px"class="img">
                      </div>
                      <div class="card-body">
                      <h4 class="card-title text-bold">FireFly </h4>
                      <p class="small">by Brandflowr™</p>
                        <p class="card-text">Lead Generation for a New Generation.</p>
                        <a href="javascript:void(0)" class="btn btn-primary waves-effect waves-light">Go</a>
                      </div>
                      <div class="card-footer text-muted">
                      
                      </div>
                    </div>
                  </div>
                
                  <div class="col-md-4 col-lg-3 col-xxl-2 mb-3">
                    <div class="card text-center">
                      <div class="card-header">
                      <img src="https://d23zqfvqndw8ja.cloudfront.net/images/pollinate-logo-sq.png" alt="" width="60px"class="img">
                      </div>
                      <div class="card-body">
                      <h4 class="card-title text-bold">POLLINATE </h4>
                        <p class="small">by Brandflowr™</p>
                        <p class="card-text">Marketing,Naturally.</p>
                        <a href="javascript:void(0)" class="btn btn-primary waves-effect waves-light">Go</a>
                      </div>
                      <div class="card-footer text-muted">
                      
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4 col-lg-3 col-xxl-2 mb-3">
                    <div class="card text-center">
                      <div class="card-header">
                      <img src="https://d23zqfvqndw8ja.cloudfront.net/images/harvest-logo-sq.png" alt="" width="60px"class="img">
                      </div>
                      <div class="card-body">
                      <h4 class="card-title text-bold">HARVEST </h4>
                      <p class="small">by Brandflowr™</p>
                        <p class="card-text">Transforming Interactions into Opportunities</p>
                        <a href="javascript:void(0)" class="btn btn-primary waves-effect waves-light">Go</a>
                      </div>
                      <div class="card-footer text-muted">
                      
                      </div>
                    </div>
                  </div>
                  <!-- <div class="col-md-4 col-lg-3 col-xxl-2  mb-3">
                    <div class="card text-center">
                      <div class="card-header">
                      <img src="https://d23zqfvqndw8ja.cloudfront.net/images/pollinate-logo-sq.png" alt="" width="60px"class="img">
                      </div>
                      <div class="card-body">
                      <h2 class="card-title text-bold">POLLINATE </h2>
                        <h6>by Brandflowr™</h6>
                        <p class="card-text">With supporting text below as a natural.</p>
                        <a href="javascript:void(0)" class="btn btn-primary waves-effect waves-light">Go</a>
                      </div>
                      <div class="card-footer text-muted">
                      
                      </div>
                    </div>
                  </div> -->

                  <div class="col-md-4 col-lg-3 col-xxl-2 mb-3">
                    <div class="card text-center">
                      <div class="card-header">
                      <img src="https://d23zqfvqndw8ja.cloudfront.net/images/roots-dark-logo-sq.png" alt="" width="60px"class="img">
                      </div>
                      <div class="card-body">
                      <h2 class="card-title text-bold">Roots </h2>
                      <p class="small">by Brandflowr™</p>
                        <p class="card-text">With supporting text below as a natural.</p>
                        <a href="javascript:void(0)" class="btn btn-primary waves-effect waves-light">Go</a>
                      </div>
                      <div class="card-footer text-muted">
                      
                      </div>
                    </div>
                  </div>
              </div>
              <!--/ User Profile Content -->
              <hr class="m-5">
              <div class="row">
              <div class="col-md-4 col-lg-3 mb-3">
                    <div class="card text-center">
                      <div class="card-header">
                      <img src="https://d23zqfvqndw8ja.cloudfront.net/images/blueprint-logo-sq.png" alt="" width="100px"class="img">
                      </div>
                      <div class="card-body">
                        <h2 class="card-title text-bold">Blueprint </h2>
                        <h6>by Brandflowr™</h6>
                        <p class="card-text">With supporting text below as a natural.</p>
                        <a href="javascript:void(0)" class="btn btn-primary waves-effect waves-light">Go somewhere</a>
                      </div>
                      <div class="card-footer text-muted">
                      
                      </div>
                    </div>
                  </div>
                
                  <div class="col-md-4 col-lg-3 mb-3">
                    <div class="card text-center">
                      <div class="card-header">
                      <img src="https://d23zqfvqndw8ja.cloudfront.net/images/architect-logo-sq.png" alt="" width="100px"class="img">
                      </div>
                      <div class="card-body">
                      <h2 class="card-title text-bold">ARCHITECT </h2>
                        <h6>by Brandflowr™</h6>
                        <p class="card-text">With supporting text below as a natural.</p>
                        <a href="javascript:void(0)" class="btn btn-primary waves-effect waves-light">Go somewhere</a>
                      </div>
                      <div class="card-footer text-muted">
                      
                      </div>
                    </div>
                  </div>
                
                  <div class="col-md-4 col-lg-3 mb-3">
                    <div class="card text-center">
                      <div class="card-header">
                      <img src="https://d23zqfvqndw8ja.cloudfront.net/images/bloom-logo-sq.png" alt="" width="100px"class="img">
                      </div>
                      <div class="card-body">
                      <h2 class="card-title text-bold">BLOOM </h2>
                        <h6>by Brandflowr™</h6>
                        <p class="card-text">With supporting text below as a natural.</p>
                        <a href="javascript:void(0)" class="btn btn-primary waves-effect waves-light">Go somewhere</a>
                      </div>
                      <div class="card-footer text-muted">
                       
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4 col-lg-3 mb-3">
                    <div class="card text-center">
                      <div class="card-header">
                      <img src="https://d23zqfvqndw8ja.cloudfront.net/images/vine-logo-sq.png" alt="" width="100px"class="img">
                      </div>
                      <div class="card-body">
                      <h2 class="card-title text-bold">VINE </h2>
                        <h6>by Brandflowr™</h6>
                        <p class="card-text">With supporting text below as a natural.</p>
                        <a href="javascript:void(0)" class="btn btn-primary waves-effect waves-light">Go somewhere</a>
                      </div>
                      <div class="card-footer text-muted">
                      
                      </div>
                    </div>
                  </div>
              </div>
            </div>
            <!-- / Content -->
@endsection
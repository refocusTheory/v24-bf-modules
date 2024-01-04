@extends('layouts.horizontalLayout')
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
                      <a href="{{ route('harvest-formbuilder') }}" class="btn btn-primary">
                        <i class="mdi mdi-account-check-outline me-1"></i>Survey Editor
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="javascript:void(0)" class="btn btn-primary">
                        <i class="mdi mdi-account-check-outline me-1"></i>Web Editor
                      </a>
                    </li>
                    {{-- <li class="list-inline-item">
                      <i class="mdi mdi-calendar-blank-outline me-1 mdi-20px"></i
                      ><span class="fw-medium"> Joined April 2021</span>
                    </li> --}}
                  </ul>
                </div>
                {{-- <a href="javascript:void(0)" class="btn btn-primary">
                  <i class="mdi mdi-account-check-outline me-1"></i>Connected
                </a>
                <a href="javascript:void(0)" class="btn btn-primary">
                  <i class="mdi mdi-account-check-outline me-1"></i>Connected
                </a> --}}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!--/ Header -->

    <!-- Navbar pills -->
    <div class="row">
      <div class="col-md-12">
        <ul class="nav nav-pills flex-column flex-sm-row mb-4">
          <li class="nav-item">
            <a class="nav-link active" href="{{ route('harvest-formbuilder') }}"
              ><i class="mdi mdi-account-outline me-1 mdi-20px"></i>Form Editor</a
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
    </div><!--/ Navbar pills -->
         
  </div><!-- / Content -->
  
@endsection
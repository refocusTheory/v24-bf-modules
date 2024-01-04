@php
//$configData = Helper::appClasses();
@endphp
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="index.html" class="app-brand-link">
            <img alt="Logo" src="https://d23zqfvqndw8ja.cloudfront.net/images/greenhouse-logo-long-light.png" class="h-20px h-lg-25px theme-dark-show img-fluid" />
					
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
              <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
              <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
                <li class="menu-item {{ request()->is('dashboard*') ? ' active' : '' }}">
                  <a href="{{  route('dashboard') }}" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-smart-home"></i>
                    <div data-i18n="Brand Manager">Home</div>
                  </a>
                </li>

                <li class="menu-item {{ request()->is('brand-manager*') ? ' active' : '' }}">
                  <a href="{{  route('brand-manager') }}" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-smart-home"></i>
                    <div data-i18n="Brand Manager">Brands</div>
                  </a>
                </li>
                <li class="menu-item {{ request()->is('channel-manager*') ? ' active' : '' }}">
                  <a href="{{  route('channel-manager') }}" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-app-window"></i>
                    <div data-i18n="Channel Manager">Channels</div>
                  </a>
                </li>
                <li class="menu-item {{ request()->is('asset-manager*') ? ' active' : '' }}">
                  <a href="{{  route('asset-manager') }}" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-app-window"></i>
                    <div data-i18n="Asset Manager">Assets</div>
                  </a>
                </li>
                <li class="menu-item {{ request()->is('marketing-manager*') ? ' active' : '' }}">
                  <a href="{{  route('marketing-manager') }}" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-app-window"></i>
                    <div data-i18n="{{  route('marketing-manager') }}">Marketing</div>
                  </a>
                </li>
                <li class="menu-item {{ request()->is('ecommerce-manager*') ? ' active' : '' }}">
                  <a href="{{  route('ecommerce-manager') }}" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-app-window"></i>
                    <div data-i18n="Page 2">eCommerce</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="page-2.html" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-app-window"></i>
                    <div data-i18n="Page 2">Blueprints</div>
                  </a>
                </li>
            <!-- Page -->

            <li class="menu-item {{ request()->is('integrations-manager*') ? ' active' : '' }}">
              <a href="{{  route('integrations-manager') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-app-window"></i>
                <div data-i18n="Page 2">Connections</div>
              </a>
            </li>
            <hr>
            <li class="menu-item  " style="">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div data-i18n="Dashboards">Account</div>
                <!-- <div class="badge bg-label-primary rounded-pill ms-auto">3</div> -->
              </a>
              <ul class="menu-sub">
                <li class="menu-item ">
                  <a href="{{  route('brand-manager') }}" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-smart-home"></i>
                    <div data-i18n="Brand Manager">Brand</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="{{  route('channel-manager') }}" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-app-window"></i>
                    <div data-i18n="Channel Manager">Channels</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="{{  route('asset-manager') }}" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-app-window"></i>
                    <div data-i18n="Asset Manager">Assets</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="{{  route('marketing-manager') }}" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-app-window"></i>
                    <div data-i18n="{{  route('marketing-manager') }}">Marketing</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="page-2.html" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-app-window"></i>
                    <div data-i18n="Page 2">eCommerce</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="page-2.html" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-app-window"></i>
                    <div data-i18n="Page 2">Business Manager</div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="menu-item  {{ request()->is('harvest*') ? ' open' : '' }}" style="">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div data-i18n="Dashboards">Modules</div>
                <!-- <div class="badge bg-label-primary rounded-pill ms-auto">3</div> -->
              </a>
              <ul class="menu-sub">
                <li class="menu-item {{ request()->is('harvest*') ? ' active' : '' }}">
                  <a href="{{  route('harvest') }}" class="menu-link ">
                    <i class="menu-icon tf-icons ti ti-smart-home"></i>
                    <div data-i18n="Brand Manager">Harvest</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="{{  route('channel-manager') }}" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-app-window"></i>
                    <div data-i18n="Channel Manager">Bloom</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="{{  route('asset-manager') }}" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-app-window"></i>
                    <div data-i18n="Asset Manager">Hive</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="{{  route('marketing-manager') }}" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-app-window"></i>
                    <div data-i18n="{{  route('marketing-manager') }}">Vine</div>
                  </a>
                </li>
           
              </ul>
            </li>
          </ul>
        </aside>
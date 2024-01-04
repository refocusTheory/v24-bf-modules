<!--begin::App-->
<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
    <!--begin::Page-->
    <div class="app-page  flex-column flex-column-fluid " id="kt_app_page">
        <!--layout-partial:layout/partials/_header.html-->
        @include('app::layouts.partials._header')
        <!--begin::Wrapper-->
        <div class="app-wrapper  flex-column flex-row-fluid " id="kt_app_wrapper">
            <!--begin::Main-->
            <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                <!--begin::Content wrapper-->
                <div class="d-flex flex-column flex-column-fluid">
                    <!--layout-partial:layout/partials/_toolbar.html-->
                    @include('app::layouts.partials._toolbar')
                    <!--layout-partial:layout/partials/_content.html-->
                    @include('app::layouts.partials._content')
                </div>
                <!--end::Content wrapper-->
                    <!--layout-partial:layout/partials/_footer.html-->
                    @include('app::layouts.partials._footer')
                            </div>
            <!--end:::Main-->
                    </div>
        <!--end::Wrapper-->
            </div>
    <!--end::Page-->
</div>
<!--end::App-->
<!--layout-partial:partials/_drawers.html-->
@include('app::partials._drawers')
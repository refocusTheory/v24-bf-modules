@extends('app::layouts.main')

@section('content')
<!--begin::Contacts App- Getting Started-->
<div class="row g-7">
    <!--begin::Content-->
    <div class="col-lg-8">
        <!--begin::Card-->
        <div class="card card-flush h-lg-100" id="kt_contacts_main">
            <!--begin::Card body-->
            <div class="card-body p-0">
                <!--begin::Wrapper-->
                <div class="text-center py-20 my-2">
                    <!--begin::Title-->
                    <h2 class="fs-2x fw-bold mb-2">Welcome to the Brand Manager</h2> <!--end::Title-->

           
                </div>
                <!--end::Wrapper-->
                <div class="row-fluid ">
                        <!--begin::Mobile toolbar-->
                        <div class="d-flex d-lg-none align-items-center justify-content-end mb-10">
                            <div class="d-flex align-items-center gap-2">
                                <div class="btn btn-icon btn-active-color-primary w-30px h-30px" id="kt_social_start_sidebar_toggle">
                                    <i class="ki-duotone ki-profile-circle fs-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </div>
                                <div class="btn btn-icon btn-active-color-primary w-30px h-30px" id="kt_social_end_sidebar_toggle">
                                    <i class="ki-duotone ki-scroll fs-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </div>
                            </div>
                        </div> <!--end::Mobile toolbar-->
                        <!--begin::Connected Accounts-->
                        <div class=" mb-5 mb-xl-10">
                            <!--begin::Card header-->
                            <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_connected_accounts" aria-expanded="true" aria-controls="kt_account_connected_accounts">
                                <div class="card-title m-0">
                                    <h3 class="fw-bold m-0">Brand Manager</h3>
                                </div>
                            </div>
                            <!--end::Card header-->
                            <!--begin::Content-->
                            <div id="kt_account_settings_connected_accounts" class="collapse show">
                                <!--begin::Card body-->
                                <div class="card-body border-top p-9">

                                    <!--begin::Description-->
                                    <p class="text-gray-400 fs-4 fw-semibold mb-10">It's time to expand our contacts.
                                    <br />Kickstart your contacts growth by adding a your next contact.</p><!--end::Description-->
                                    <!--begin::Action-->
                                    <!--begin::Notice-->
                                    <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6">
                                        <!--begin::Icon-->
                                        <i class="ki-duotone ki-design-1 fs-2tx text-primary me-4"></i>
                                        <!--end::Icon-->
                                        <!--begin::Wrapper-->
                                        <div class="d-flex flex-stack flex-grow-1">
                                            <!--begin::Content-->
                                            <div class="fw-semibold">
                                                <div class="fs-6 text-gray-700">Two-factor authentication adds an extra layer of security to your account. To log in, in you'll need to provide a 4 digit amazing code.
                                                <a href="#" class="fw-bold">Learn More</a></div>
                                            </div>
                                            <!--end::Content-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Notice-->
                                   
           
                                    
                                </div>
                                <!--end::Card body-->
                                <!--begin::Card footer-->
                                <div class="card-footer d-flex justify-content-end py-6 px-9">
                                    <!-- <button class="btn btn-light btn-active-light-primary me-2">Discard</button>
                                    <button class="btn btn-primary">Save Changes</button> -->
                                </div>
                                <!--end::Card footer-->
                            </div>
                            <!--end::Content-->
                        </div> <!--end::Connected Accounts-->
                    </div>
                <!--begin::Illustration-->
                <div class="text-center px-4">
                    <img class="mw-100 mh-300px" alt="" src="assets/media/illustrations/sketchy-1/5.png" />
                </div><!--end::Illustration-->
            </div><!--end::Card body-->
        </div> <!--end::Card-->
    </div><!--end::Content-->
</div><!--end::Contacts App- Getting Started-->
@endsection

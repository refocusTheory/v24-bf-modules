@extends('app::layouts.main-app')

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
                <div class="text-center py-20 my-10">
                    <!--begin::Title-->
                    <h2 class="fs-2x fw-bold mb-2">Welcome to the Integrations Manager</h2> <!--end::Title-->
                    <!--begin::Description-->
                    <p class="text-gray-400 fs-4 fw-semibold mb-10">It's time to expand our contacts.
                    <br />Kickstart your contacts growth by adding a your next contact.</p><!--end::Description-->
                    <!--begin::Action-->
                    <a href="../../demo1/dist/apps/contacts/add-contact.html" class="btn btn-primary">Add New Connection</a> <!--end::Action-->
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
                                    <h3 class="fw-bold m-0">Connected Accounts</h3>
                                </div>
                            </div>
                            <!--end::Card header-->
                            <!--begin::Content-->
                            <div id="kt_account_settings_connected_accounts" class="collapse show">
                                <!--begin::Card body-->
                                <div class="card-body border-top p-9">
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
                                    <!--begin::Items-->
                                    <div class="py-2">
                                    @foreach($integrations as $integration)
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack">
                                            <div class="d-flex">
                                                <img src="https://d1v9e8mkwkmsub.cloudfront.net/{{  isset($integration['img']) ? $integration['img'] : '' }}" class="w-40px me-6" alt="">
                                                <div class="d-flex flex-column">
                                                    <a href="#" class="fs-5 text-dark text-hover-primary fw-bold">{{ isset($integration['service']) ? $integration['service'] : $integration['name'] }}</a>
                                                    <div class="fs-6 fw-semibold text-gray-400">Profile: {{ $integration['profile'] }}</div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-end">
                                                <div class="form-check form-check-solid form-check-custom form-switch">
                                                    <input class="form-check-input w-45px h-30px" type="checkbox" id="googleswitch" checked="checked">
                                                    <label class="form-check-label" for="googleswitch"></label>
                                                </div>
                                            </div>
                                        </div>

                                        <!--end::Item-->
                                        <div class="separator separator-dashed my-5"></div>
                                        @endforeach
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack">
                                            <div class="d-flex">
                                                <img src="https://d1v9e8mkwkmsub.cloudfront.net/assets-app-channel/assets/media/svg/brand-logos/github.svg" class="w-30px me-6" alt="">
                                                <div class="d-flex flex-column">
                                                    <a href="#" class="fs-5 text-dark text-hover-primary fw-bold">Github</a>
                                                    <div class="fs-6 fw-semibold text-gray-400">Keep eye on on your Repositories</div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-end">
                                                <div class="form-check form-check-solid form-check-custom form-switch">
                                                    <input class="form-check-input w-45px h-30px" type="checkbox" id="githubswitch" checked="checked">
                                                    <label class="form-check-label" for="githubswitch"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Item-->
                                        <div class="separator separator-dashed my-5"></div>
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack">
                                            <div class="d-flex">
                                                <img src="https://d1v9e8mkwkmsub.cloudfront.net/assets-app-channel/assets/media/svg/brand-logos/slack-icon.svg" class="w-30px me-6" alt="">
                                                <div class="d-flex flex-column">
                                                    <a href="#" class="fs-5 text-dark text-hover-primary fw-bold">Slack</a>
                                                    <div class="fs-6 fw-semibold text-gray-400">Integrate Projects Discussions</div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-end">
                                                <div class="form-check form-check-solid form-check-custom form-switch">
                                                    <input class="form-check-input w-45px h-30px" type="checkbox" id="slackswitch">
                                                    <label class="form-check-label" for="slackswitch"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Items-->
                                </div>
                                <!--end::Card body-->
                                <!--begin::Card footer-->
                                <div class="card-footer d-flex justify-content-end py-6 px-9">
                                    <button class="btn btn-light btn-active-light-primary me-2">Discard</button>
                                    <button class="btn btn-primary">Save Changes</button>
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
<div class="col-md-12">
<iframe src="https://davinci.brandflowr.app/user/dashboard" width="100%" height="1400px" frameborder="0" id="iframe" ></iframe>
</div>
@endsection

@section('jscode')
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/iframe-resizer/4.2.11/iframeResizer.contentWindow.min.js"></script>-->
<script>

</script> 

@endsection
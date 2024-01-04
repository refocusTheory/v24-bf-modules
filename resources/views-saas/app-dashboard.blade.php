@extends('app::layouts.main')

@section('content')

									<!--begin::Row-->
									<div class="row g-5 g-xl-10">
                                    @foreach($apps as $integration)
										<!--begin::Col-->
										<div class="col-sm-6 col-xl-4 mb-xl-10">
											<!--begin::Card widget 2-->
											<div class="card h-lg-100">
												<!--begin::Body-->
												<div class="card-body d-flex justify-content-between align-items-start flex-column">
													<!--begin::Icon-->
													<div class="m-0">
														<img src="https://d1v9e8mkwkmsub.cloudfront.net/{{  isset($integration['img']) ? $integration['img'] : '' }}" class="w-65px" alt="" />
													</div>
													<!--end::Icon-->
													<!--begin::Section-->
													<div class="d-flex flex-column my-7">
														<!--begin::Number-->
														<h3 class="fw-semibold text-gray-800 lh-1 ls-n2">{{ isset($integration['service']) ? $integration['service'] : $integration['name'] }}</h3>
														<!--end::Number-->
														<!--begin::Follower-->
														<div class="m-0">
															<span class="fw-semibold fs-6 text-gray-400">Followers</span>
														</div>
														<!--end::Follower-->
													</div>
													<!--end::Section-->
													<!--begin::Badge-->
                                                    <div class="d-flex justify-content-end">
                                                <div class="form-check form-check-solid form-check-custom form-switch">
                                                    <input class="form-check-input w-45px h-30px" type="checkbox" id="slackswitch" checked/>
                                                    <label class="form-check-label" for="slackswitch"></label>
                                                </div>
                                            </div>
													<span class="badge badge-light-success fs-base">
													<i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>2.1%
                                                </span>
													<!--end::Badge-->
												</div>
												<!--end::Body-->
											</div>
											<!--end::Card widget 2-->
										</div>
										<!--end::Col-->
@endforeach

									</div>
									<!--end::Row-->

@endsection

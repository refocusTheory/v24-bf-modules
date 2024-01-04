									<!--begin:Menu item-->
									<div data-kt-menu-trigger="click" class="menu-item here menu-accordion ">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-icon">
												<i class="fonticon-house fs-2"></i>
											</span>
											<span class="menu-title">Suppport</span>
											<span class="menu-arrow"></span>
										</span>
										<!--end:Menu link-->
										<!--begin:Menu sub-->
										<div class="menu-sub menu-sub-accordion">
										<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Overview</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link {{ request()->route()->getName() == 'pocketagent-dashboard' ? 'active' : '' }}" data-app="pocketagent-dashboard" href="{{  route('pocketagent-dashboard') }}">
											<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Tutorials</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="{{  route('architect-dashboard') }}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">FAQ</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link {{ request()->route()->getName() == 'fusion-dashboard' ? 'active' : '' }}" data-app="fusion-dashboard" href="{{  route('fusion-dashboard') }}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Contact Us</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
										
										</div>
										<!--end:Menu sub-->
									</div>
									<!--end:Menu item-->
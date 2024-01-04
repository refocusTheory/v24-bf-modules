									<!--begin:Menu item-->
									<div data-kt-menu-trigger="click" class="menu-item here menu-accordion ">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-icon">
												<i class="fonticon-house fs-2"></i>
											</span>
											<span class="menu-title">Settings</span>
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
													<span class="menu-title">Dashboard</span>
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
													<span class="menu-title">Pocket Agent Pro</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											


										</div>
										<!--end:Menu sub-->
									</div>
									<!--end:Menu item-->
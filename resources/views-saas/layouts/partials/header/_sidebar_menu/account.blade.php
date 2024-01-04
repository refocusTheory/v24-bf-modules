									<!--begin:Menu item-->
									<div data-kt-menu-trigger="click" class="menu-item here menu-accordion ">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-icon">
												<i class="fonticon-house fs-2"></i>
											</span>
											<span class="menu-title">Account</span>
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
													<span class="menu-title">Settings</span>
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
													<span class="menu-title">Security</span>
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
													<span class="menu-title">Activity</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link {{ request()->route()->getName() == 'davinci-dashboard' ? 'active' : '' }}" data-app="dashboard" href="{{  route('davinci-dashboard') }}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Billing</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link " href="{{  route('bio-dashboard') }}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Statements</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->

											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link " href="{{  route('mail-dashboard') }}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">API Keys</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link " href="{{  route('connect-dashboard') }}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Logs</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->

										</div>
										<!--end:Menu sub-->
									</div>
									<!--end:Menu item-->
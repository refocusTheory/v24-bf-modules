									<!--begin:Menu item-->
									<div data-kt-menu-trigger="click" class="menu-item here menu-accordion {{ in_array(request()->route()->getName(), ['app-dashboard', 'pocketagentpro', 'bloom', 'fusion', 'davinci', 'bio' , 'connect']) ? 'show' : '' }}">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-icon">
												<i class="fonticon-house fs-2"></i>
											</span>
											<span class="menu-title">Apps</span>
											<span class="menu-arrow"></span>
										</span>
										<!--end:Menu link-->
										<!--begin:Menu sub-->
										<div class="menu-sub menu-sub-accordion ">
										<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link {{ request()->route()->getName() == 'app-dashboard' ? 'active' : '' }}" data-app="app-dashboard" href="{{  route('app-dashboard') }}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">AppBoard</span>
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
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="{{  route('bloom-dashboard') }}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Bloom</span>
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
													<span class="menu-title">Fusion</span>
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
													<span class="menu-title">Davinci AI</span>
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
													<span class="menu-title">Bio</span>
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
													<span class="menu-title">Mail</span>
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
													<span class="menu-title">Connect</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->

										</div>
										<!--end:Menu sub-->
									</div>
									<!--end:Menu item-->
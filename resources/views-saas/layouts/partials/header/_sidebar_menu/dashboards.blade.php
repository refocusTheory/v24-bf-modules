									<!--begin:Menu item-->
									<div data-kt-menu-trigger="click" class="menu-item here menu-accordion {{ in_array(request()->route()->getName(), ['dashboard', 'brand-manager', 'channel-manager', 'asset-manager', 'marketing-manager', 'integrations-manager']) ? 'show' : '' }}">
					

											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link {{ request()->route()->getName() == 'brand-manager' ? 'active' : '' }}" data-app="brand-manager" href="{{  route('brand-manager') }}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Brand Manager</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link {{ request()->route()->getName() == 'channel-manager' ? 'active' : '' }}" data-app="channel-manager" href="{{  route('channel-manager') }}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Channel Manager</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->

											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link {{ request()->route()->getName() == 'asset-manager' ? 'active' : '' }}" data-app="asset-manager" href="{{  route('asset-manager') }}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Asset Manager</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->


											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link {{ request()->route()->getName() == 'marketing-manager' ? 'active' : '' }}" data-app="marketing-manager" href="{{  route('marketing-manager') }}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Marketing Manager</span>
												</a>
												<!--end:Menu link-->
											</div>
						
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link {{ request()->route()->getName() == 'integrations-manager' ? 'active' : '' }}" data-app="integrations-manager" href="{{  route('integrations-manager') }}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Integration Manager</span>
												</a>
												<!--end:Menu link-->
											</div>
						
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link {{ request()->route()->getName() == 'integrations-manager' ? 'active' : '' }}" data-app="integrations-manager" href="{{  route('integrations-manager') }}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">App Manager</span>
												</a>
												<!--end:Menu link-->
											</div>
									</div>
									<!--end:Menu item-->
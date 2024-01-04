<div class="menu-item">
	<a class="menu-link {{ request()->route()->getName() == 'dashboard' ? 'active' : '' }}"  data-app="dashboard" href="{{  route('dashboard') }}">
	<span class="menu-icon">
				<i class="ki-duotone ki-element-11 fs-2">
					<span class="path1"></span>
					<span class="path2"></span>
					<span class="path3"></span>
					<span class="path4"></span>
				</i>
			</span>
		<span class="menu-title">Home</span>
	</a>
</div>

<hr>

@if(Module::has('ManagerBrand'))
<div class="menu-item">
	<!--begin:Menu link-->
	<a class="menu-link  " href="{{ route('brand-manager') }}">
	<span class="menu-icon">
		<i class="fa fa-meteor fs-2"></i> 
	 </span>
		<span class="menu-title">Brands</span>
	</a>
	<!--end:Menu link-->
</div>
@else

@endif
					
@if(Module::has('ManagerChannel'))
						<!--begin:Menu item-->
<div class="menu-item">
	<!--begin:Menu link-->
	<a class="menu-link  " href="{{ route('channel-manager') }}">
	<span class="menu-icon">
		<i class="fa fa-tower-broadcast fs-2"></i> 
	 </span>
		<span class="menu-title">Channels</span>
	</a>
	<!--end:Menu link-->
</div>
@else

@endif

@if(Module::has('ManagerAsset'))
						<!--begin:Menu item-->
<div class="menu-item">
	<!--begin:Menu link-->
	<a class="menu-link  " href="{{ route('asset-manager') }}">
	<span class="menu-icon">
		<i class="fa fa-photo-film fs-2"></i> 
	 </span>
		<span class="menu-title">Assets</span>
	</a>
	<!--end:Menu link-->
</div>
@else

@endif

@if(Module::has('ManagerEcommerce'))
						<!--begin:Menu item-->
<div class="menu-item">
	<!--begin:Menu link-->
	<a class="menu-link  " href="{{ route('ecommerce-manager') }}">
	<span class="menu-icon">
		<i class="fa fa-barcode fs-2"></i> 
	 </span>
		<span class="menu-title">Ecommerce</span>
	</a>
	<!--end:Menu link-->
</div>
@else

@endif

@if(Module::has('ManagerMarketing'))
						<!--begin:Menu item-->
<div class="menu-item">
	<!--begin:Menu link-->
	<a class="menu-link  " href="{{ route('marketing-manager') }}">
	<span class="menu-icon">
		<i class="fa fa-square-poll-vertical fs-2"></i> 
	 </span>
		<span class="menu-title">Marketing</span>
	</a>
	<!--end:Menu link-->
</div>
@else

@endif
@if(Module::has('ManagerData'))
<div class="menu-item">
	<!--begin:Menu link-->
	<a class="menu-link  " href="{{ route('data-manager') }}">
	<span class="menu-icon">
		<i class="fa fa-dna fs-2"></i> 
	 </span>
		</span>
		<span class="menu-title">Data</span>
	</a>
	<!--end:Menu link-->
</div>
@else

@endif
@if(Module::has('ManagerIntegration'))
<div class="menu-item">
	<!--begin:Menu link-->
	<a class="menu-link  " href="{{ route('app-manager') }}">
	<span class="menu-icon">
		<i class="fa fa-arrows-spin fs-2"></i> 
	 </span>
		<span class="menu-title">App Manager</span>
	</a>
	<!--end:Menu link-->
</div>
@else

@endif


				<!--begin:Menu item-->
				<div data-kt-menu-trigger="click" class="menu-item here menu-accordion">



<!--begin:Menu item-->
<div data-kt-menu-trigger="click" class="menu-item here menu-accordion">

	<!--begin:Menu link-->
	<span class="menu-link">
	<span class="menu-icon">
		<i class="fa fa-globe fs-2"></i> 
	 </span>
		<span class="menu-title">All Apps</span>
		<span class="menu-arrow"></span>
	</span><!--end:Menu link-->

	<!--begin:Menu sub-->
	<div class="menu-sub menu-sub-accordion">



		<!--begin:Menu item-->
		<div class="menu-item">
			<!--begin:Menu link-->
			<a class="menu-link" href="{{ route('app-harvest') }}" onClick="goToUrl(event, this)">
			<span class="menu-icon">
		<i class="fa fa-rocket fs-2"></i> 
	 </span>
				<span class="menu-title">Harvest</span>
			</a> <!--end:Menu link-->
		</div><!--end:Menu item-->



		<!--begin:Menu item-->
		<div class="menu-item">
			<!--begin:Menu link-->
			<a class="menu-link" href="{{ route('app-roots') }}" onClick="goToUrl(event, this)">
			<span class="menu-icon">
		<i class="fa fa-rocket fs-2"></i> 
	 </span>
				<span class="menu-title">Roots</span>
			</a> <!--end:Menu link-->
		</div><!--end:Menu item-->

		<!--begin:Menu item-->
		<div class="menu-item">
			<!--begin:Menu link-->
			<a class="menu-link" href="{{ route('app-hive') }}" onClick="goToUrl(event, this)">
			<span class="menu-icon">
		<i class="fa fa-rocket fs-2"></i> 
	 </span>
				<span class="menu-title">Hive</span>
			</a> <!--end:Menu link-->
		</div><!--end:Menu item-->

		<!--begin:Menu item-->
		<div class="menu-item">
			<!--begin:Menu link-->
			<a class="menu-link" href="{{ route('app-pollinate') }}" onClick="goToUrl(event, this)">
			<span class="menu-icon">
		<i class="fa fa-rocket fs-2"></i> 
	 </span>
				<span class="menu-title">Pollinate</span>
			</a> <!--end:Menu link-->
		</div><!--end:Menu item-->






<!--begin:Menu item-->
<div class="menu-item">
	<!--begin:Menu link-->
	<a class="menu-link" href="/user/images" onClick="goToUrl(event, this)">
	<span class="menu-icon">
		<i class="fa fa-rocket fs-2"></i> 
	 </span>
		<span class="menu-title">Architect</span>
	</a> <!--end:Menu link-->
</div><!--end:Menu item-->

<!--begin:Menu item-->
<div class="menu-item">
	<!--begin:Menu link-->
	<a class="menu-link" href="/user/images" onClick="goToUrl(event, this)">
	<span class="menu-icon">
		<i class="fa fa-rocket fs-2"></i> 
	 </span>
		<span class="menu-title">Vine</span>
	</a> <!--end:Menu link-->
</div><!--end:Menu item-->

<!--begin:Menu item-->
<div class="menu-item">
	<!--begin:Menu link-->
	<a class="menu-link" href="/user/images" onClick="goToUrl(event, this)">
	<span class="menu-icon">
		<i class="fa fa-rocket fs-2"></i> 
	 </span>
		<span class="menu-title">Mosaic</span>
	</a> <!--end:Menu link-->
</div><!--end:Menu item-->


	</div><!--end:Menu sub-->
</div><!--end:Menu item-->











</div><!--end:Menu item-->

<hr>

<!--begin:Menu item-->
<div class="menu-item pt-5">
	<!--begin:Menu content-->
	<div class="menu-content">
		<span class="menu-heading fw-bold text-uppercase fs-7">Settings</span>
	</div>
	<!--end:Menu content-->
</div>

	<!--begin:Menu item-->
	<div class="menu-item">
			<!--begin:Menu link-->
			<a class="menu-link" href="{{ route('profile-manager') }}">
			<span class="menu-icon">
			<i class="fa fa-chalkboard-user fa-2">
					
					</i>
			</span>
				<span class="menu-title">Profile</span>
			</a>
			<!--end:Menu link-->
		</div>
		<!--end:Menu item-->

			<!--begin:Menu item-->
	<div class="menu-item">
			<!--begin:Menu link-->
			<a class="menu-link" href="{{ route('account-manager') }}">
			<span class="menu-icon">
				<i class="fa fa-id-card fa-2">
					
				</i>
			</span>
				<span class="menu-title">Account</span>
			</a>
			<!--end:Menu link-->
		</div>
		<!--end:Menu item-->







<!--begin:Menu item-->
<div class="menu-item pt-5">
	<!--begin:Menu content-->
	<div class="menu-content">
		<span class="menu-heading fw-bold text-uppercase fs-7">Apps</span>
	</div>
	<!--end:Menu content-->
</div><!--end:Menu item-->
@if(Auth::user()->email == 'refocustheory@gmail.com')
			<!--begin:Menu item-->
			<div class="menu-item">
			<!--begin:Menu link-->
			<a class="menu-link" href="{{ route('harvest-form-io-builder') }}">
			<span class="menu-icon">
				<i class="fa fa-id-card fa-2">
					
				</i>
			</span>
				<span class="menu-title">BS5 Form Builder</span>
			</a>
			<!--end:Menu link-->
		</div>
		<!--end:Menu item-->
			<!--begin:Menu item-->
			<div class="menu-item">
			<!--begin:Menu link-->
			<a class="menu-link" href="{{ route('harvest-formbuilder') }}">
			<span class="menu-icon">
				<i class="fa fa-id-card fa-2">
					
				</i>
			</span>
				<span class="menu-title">Form Builder</span>
			</a>
			<!--end:Menu link-->
		</div>
		<!--end:Menu item-->
@endif
<!--begin:Menu item-->
<div class="menu-item pt-5">
	<!--begin:Menu content-->
	<div class="menu-content">
		<span class="menu-heading fw-bold text-uppercase fs-7">Help</span>
	</div>
	<!--end:Menu content-->
</div><!--end:Menu item-->
<!--begin:Menu item-->
<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
	<!--begin:Menu link-->
	<span class="menu-link">
		<span class="menu-icon">
			<i class="ki-duotone ki-chart fs-2">
				<span class="path1"></span>
				<span class="path2"></span>
			</i>
		</span>
		<span class="menu-title">Support Center</span>
		<span class="menu-arrow"></span>
	</span>
	<!--end:Menu link-->
	<!--begin:Menu sub-->
	<div class="menu-sub menu-sub-accordion">
		<!--begin:Menu item-->
		<div class="menu-item">
			<!--begin:Menu link-->
			<a class="menu-link" href="../../demo1/dist/apps/support-center/overview.html">
				<span class="menu-bullet">
					<span class="bullet bullet-dot"></span>
				</span>
				<span class="menu-title">Overview</span>
			</a>
			<!--end:Menu link-->
		</div>
		<!--end:Menu item-->
		<!--begin:Menu item-->
		<div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
			<!--begin:Menu link-->
			<span class="menu-link">
				<span class="menu-bullet">
					<span class="bullet bullet-dot"></span>
				</span>
				<span class="menu-title">Tickets</span>
				<span class="menu-arrow"></span>
			</span>
			<!--end:Menu link-->
			<!--begin:Menu sub-->
			<div class="menu-sub menu-sub-accordion">
				<!--begin:Menu item-->
				<div class="menu-item">
					<!--begin:Menu link-->
					<a class="menu-link" href="../../demo1/dist/apps/support-center/tickets/list.html">
						<span class="menu-bullet">
							<span class="bullet bullet-dot"></span>
						</span>
						<span class="menu-title">Tickets List</span>
					</a>
					<!--end:Menu link-->
				</div>
				<!--end:Menu item-->
				<!--begin:Menu item-->
				<div class="menu-item">
					<!--begin:Menu link-->
					<a class="menu-link" href="../../demo1/dist/apps/support-center/tickets/view.html">
						<span class="menu-bullet">
							<span class="bullet bullet-dot"></span>
						</span>
						<span class="menu-title">View Ticket</span>
					</a>
					<!--end:Menu link-->
				</div>
				<!--end:Menu item-->
			</div>
			<!--end:Menu sub-->
		</div>
		<!--end:Menu item-->
		<!--begin:Menu item-->
		<div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
			<!--begin:Menu link-->
			<span class="menu-link">
				<span class="menu-bullet">
					<span class="bullet bullet-dot"></span>
				</span>
				<span class="menu-title">Tutorials</span>
				<span class="menu-arrow"></span>
			</span>
			<!--end:Menu link-->
			<!--begin:Menu sub-->
			<div class="menu-sub menu-sub-accordion">
				<!--begin:Menu item-->
				<div class="menu-item">
					<!--begin:Menu link-->
					<a class="menu-link" href="../../demo1/dist/apps/support-center/tutorials/list.html">
						<span class="menu-bullet">
							<span class="bullet bullet-dot"></span>
						</span>
						<span class="menu-title">Tutorials List</span>
					</a>
					<!--end:Menu link-->
				</div>
				<!--end:Menu item-->
				<!--begin:Menu item-->
				<div class="menu-item">
					<!--begin:Menu link-->
					<a class="menu-link" href="../../demo1/dist/apps/support-center/tutorials/post.html">
						<span class="menu-bullet">
							<span class="bullet bullet-dot"></span>
						</span>
						<span class="menu-title">Tutorial Post</span>
					</a>
					<!--end:Menu link-->
				</div>
				<!--end:Menu item-->
			</div>
			<!--end:Menu sub-->
		</div>
		<!--end:Menu item-->
		<!--begin:Menu item-->
		<div class="menu-item">
			<!--begin:Menu link-->
			<a class="menu-link" href="../../demo1/dist/apps/support-center/faq.html">
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
			<a class="menu-link" href="../../demo1/dist/apps/support-center/licenses.html">
				<span class="menu-bullet">
					<span class="bullet bullet-dot"></span>
				</span>
				<span class="menu-title">Licenses</span>
			</a>
			<!--end:Menu link-->
		</div>
		<!--end:Menu item-->
		<!--begin:Menu item-->
		<div class="menu-item">
			<!--begin:Menu link-->
			<a class="menu-link" href="../../demo1/dist/apps/support-center/contact.html">
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
</div><!--end:Menu item-->
<!--begin:Menu item-->
<div class="menu-item">
	<!--begin:Menu link-->
	<a class="menu-link" href="https://preview.keenthemes.com/html/metronic/docs" target="_blank">
		<span class="menu-icon">
			<i class="ki-duotone ki-abstract-26 fs-2">
				<span class="path1"></span>
				<span class="path2"></span>
			</i>
		</span>
		<span class="menu-title">Documentation</span>
	</a>
	<!--end:Menu link-->
</div><!--end:Menu item-->
			

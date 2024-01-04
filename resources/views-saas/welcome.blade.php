<!DOCTYPE html>
<html lang="en">

	<head>
	<title>GreenHouse | by BrandFlowr</title>
		<meta charset="utf-8" />
		<meta name="description" content="The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. Grab your copy now and get life-time updates for free." />
		<meta name="keywords" content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Metronic - Bootstrap Admin Template, HTML, VueJS, React, Angular. Laravel, Asp.Net Core, Ruby on Rails, Spring Boot, Blazor, Django, Express.js, Node.js, Flask Admin Dashboard Theme & Template" />
		<meta property="og:url" content="https://keenthemes.com/metronic" />
		<meta property="og:site_name" content="Keenthemes | Metronic" />
		<link rel="canonical" href="https://brandflowr.app" />
		<link rel="shortcut icon" href="https://d23zqfvqndw8ja.cloudfront.net/pwa/greenhouse/favicon.ico" />
		<link rel="icon" href="https://d23zqfvqndw8ja.cloudfront.net/pwa/greenhouse/favicon.ico">
		<link rel="manifest" href="{{ route('manifest') }}" data-pwa-version="set_in_manifest_and_pwa_js">	<!--begin::Fonts(mandatory for all pages)-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />

		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
		<link href="https://d1v9e8mkwkmsub.cloudfront.net/assets-app-channel/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="https://d1v9e8mkwkmsub.cloudfront.net/assets-app-channel/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
		<style>
			#overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(255, 255, 255, 0.7);  /* black with 70% opacity */
    z-index: -1;  /* ensures overlay is on top of other content */
    /* display: none;  hidden by default */
}
		</style>
	</head>

	<!--begin::Body-->
	<body id="kt_body" class="app-blank bgi-size-cover bgi-attachment-fixed bgi-position-center bgi-no-repeat">
	<div id="overlay"></div>
		<!--begin::Theme mode setup on page load-->
		<script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) 
        { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } 
        else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }</script>

		<!--begin::Root-->
		<div class="d-flex flex-column flex-root" id="kt_app_root">
			<!--begin::Page bg image-->
			<style>body { background-image: url('https://d23zqfvqndw8ja.cloudfront.net/images/soff-garavano-puw-GnAPRgSibGI-unsplash.jpg'); } [data-bs-theme="dark"] body { background-image: url('https://d23zqfvqndw8ja.cloudfront.net/images/soff-garavano-puw-GnAPRgSibGI-unsplash.jpg'); }</style>
		
			<!--begin::Authentication - Sign-in -->
			<div class="d-flex flex-column flex-column-fluid flex-lg-row">
				<!--begin::Aside-->
				<div class="d-flex flex-center text-center w-lg-50 pt-15 pt-lg-0 px-10">
					<!--begin::Aside-->
					<div class="d-flex flex-center   flex-column">
						<!--begin::Logo-->
						<a href="https://brandflowr.com" class="mb-7">
							<img alt="Logo" class="img-fluid" width="650px"src="https://d23zqfvqndw8ja.cloudfront.net/images/greenhouse-logo-long-light.png" />
						</a>
					
						<!--begin::Title-->
						<h2 class="text-dark  fw-bolder m-0 bold mx-auto" style="    font-size: x-large;">Revitalize, reinvent, reignite your brand</h2>
						
					</div>
					
				</div>
			
				<!--begin::Body-->
				<div class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center justify-content-lg-end p-12 p-lg-20">
					<!--begin::Card-->
					<div class="bg-body d-flex flex-column align-items-stretch flex-center rounded-4 w-md-600px p-20">
						<!--begin::Wrapper-->
						<div class="d-flex flex-center flex-column flex-column-fluid px-lg-10 pb-15 pb-lg-20">
							<!--begin::Form-->
							<img alt="Logo" class="img-fluid " width="80px" src="https://d23zqfvqndw8ja.cloudfront.net/images/greenhouse-logo-sq.png" />
				
	
                                <!--begin::Heading-->
								<div class="text-center mb-11">
									<!--begin::Title-->
									<h1 class="text-dark fw-bolder mb-3">Sign In</h1>
									
									<!--begin::Subtitle-->
									<!-- <div class="text-gray-500 fw-semibold fs-6">Your Social Campaigns</div> -->
									
								</div>

								<!--begin::Login options-->
								<div class="row g-3 mb-9">
									<!--begin::Col-->
									<div class="col-md-12">
										<!--begin::Google link=-->
										<a href="" class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">
										<img alt="Logo" src="https://d1v9e8mkwkmsub.cloudfront.net/assets-app-channel/assets/media/svg/brand-logos/google-icon.svg" class="h-15px me-3" />Sign in with Google</a>
									<!--end::Google link=-->
									</div>
								
									<!--begin::Col-->
									<!-- <div class="col-md-6">
									
										<a href="#" class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">
										<img alt="Logo" src="https://d1v9e8mkwkmsub.cloudfront.net/assets-app-channel/assets/media/svg/brand-logos/apple-black.svg" class="theme-light-show h-15px me-3" />
										<img alt="Logo" src="https://d1v9e8mkwkmsub.cloudfront.net/assets-app-channel/assets/media/svg/brand-logos/apple-black-dark.svg" class="theme-dark-show h-15px me-3" />Sign in with Apple</a>
									
									</div> -->
								
								</div>
								
								<!--begin::Separator-->
								<div class="separator separator-content my-14">
									<span class="w-125px text-gray-500 fw-semibold fs-7">Or with email</span>
								</div>
							
                                <form class="form w-100" novalidate="novalidate" method="POST" action="{{ route('login') }}">
							
                        
                                @csrf

								<!--begin::Input group=-->
								<div class="fv-row mb-8">
									<!--begin::Email-->
									<input type="email" name="email" id="email" placeholder="Email"  required autofocus autocomplete="username" class="form-control bg-transparent" />
									<!--end::Email-->
								</div>
								<!--end::Input group=-->
								<div class="fv-row mb-3">
									<!--begin::Password-->
									<input type="password" name="password" id="password" placeholder="Password" autocomplete="off" class="form-control bg-transparent" />
									<!--end::Password-->
								</div>
								<!--end::Input group=-->

								<!--begin::Wrapper-->
								<div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
									<div></div>
									<!--begin::Link-->
									<a href="../../demo1/dist/authentication/layouts/creative/reset-password.html" class="link-primary">Forgot Password ?</a>
									<!--end::Link-->
								</div>
								<!--end::Wrapper-->
								<!--begin::Submit button-->
								<div class="d-grid mb-10">
									<button type="submit" id="kt_sign_in_submit" class="btn btn-primary">
										<!--begin::Indicator label-->
										<span class="indicator-label">Sign In</span>
										<!--end::Indicator label-->
										<!--begin::Indicator progress-->
										<span class="indicator-progress">Please wait...
										<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
										<!--end::Indicator progress-->
									</button>
								</div>
								<!--end::Submit button-->
								<!--begin::Sign up-->
								<div class="text-gray-500 text-center fw-semibold fs-6">Not a Member yet?
								<a href="../../demo1/dist/authentication/layouts/creative/sign-up.html" class="link-primary">Sign up</a></div>
								<!--end::Sign up-->
							</form>
							<!--end::Form-->
						</div>
						<!--end::Wrapper-->
						<!--begin::Footer-->
						<div class="d-flex flex-stack px-lg-10">
							<!--begin::Languages-->
							<div class="me-0">
								<!--begin::Toggle-->
								<button class="btn btn-flex btn-link btn-color-gray-700 btn-active-color-primary rotate fs-base" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" data-kt-menu-offset="0px, 0px">
									<img data-kt-element="current-lang-flag" class="w-20px h-20px rounded me-3" src="https://d1v9e8mkwkmsub.cloudfront.net/assets-app-channel/assets/media/flags/united-states.svg" alt="" />
									<span data-kt-element="current-lang-name" class="me-1">English</span>
									<i class="ki-duotone ki-down fs-5 text-muted rotate-180 m-0"></i>
								</button>
								<!--end::Toggle-->
								<!--begin::Menu-->
								<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-4 fs-7" data-kt-menu="true" id="kt_auth_lang_menu">
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link d-flex px-5" data-kt-lang="English">
											<span class="symbol symbol-20px me-4">
												<img data-kt-element="lang-flag" class="rounded-1" src="https://d1v9e8mkwkmsub.cloudfront.net/assets-app-channel/assets/media/flags/united-states.svg" alt="" />
											</span>
											<span data-kt-element="lang-name">English</span>
										</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link d-flex px-5" data-kt-lang="Spanish">
											<span class="symbol symbol-20px me-4">
												<img data-kt-element="lang-flag" class="rounded-1" src="https://d1v9e8mkwkmsub.cloudfront.net/assets-app-channel/assets/media/flags/spain.svg" alt="" />
											</span>
											<span data-kt-element="lang-name">Spanish</span>
										</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link d-flex px-5" data-kt-lang="German">
											<span class="symbol symbol-20px me-4">
												<img data-kt-element="lang-flag" class="rounded-1" src="https://d1v9e8mkwkmsub.cloudfront.net/assets-app-channel/assets/media/flags/germany.svg" alt="" />
											</span>
											<span data-kt-element="lang-name">German</span>
										</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link d-flex px-5" data-kt-lang="Japanese">
											<span class="symbol symbol-20px me-4">
												<img data-kt-element="lang-flag" class="rounded-1" src="https://d1v9e8mkwkmsub.cloudfront.net/assets-app-channel/assets/media/flags/japan.svg" alt="" />
											</span>
											<span data-kt-element="lang-name">Japanese</span>
										</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link d-flex px-5" data-kt-lang="French">
											<span class="symbol symbol-20px me-4">
												<img data-kt-element="lang-flag" class="rounded-1" src="https://d1v9e8mkwkmsub.cloudfront.net/assets-app-channel/assets/media/flags/france.svg" alt="" />
											</span>
											<span data-kt-element="lang-name">French</span>
										</a>
									</div>
									<!--end::Menu item-->
								</div>
								<!--end::Menu-->
							</div>
							<!--end::Languages-->
							<!--begin::Links-->
							<div class="d-flex fw-semibold text-primary fs-base gap-5">
								<a href="../../demo1/dist/pages/team.html" target="_blank">Terms</a>
								<a href="../../demo1/dist/pages/pricing/column.html" target="_blank">Plans</a>
								<a href="../../demo1/dist/pages/contact.html" target="_blank">Contact Us</a>
							</div>
							<!--end::Links-->
						</div>
						<!--end::Footer-->
					</div>
					<!--end::Card-->
				</div>
				<!--end::Body-->
			</div>
			<!--end::Authentication - Sign-in-->
		</div>
		<!--end::Root-->
		<!--begin::Javascript-->
		<script>var hostUrl = "https://d1v9e8mkwkmsub.cloudfront.net/assets-app-channel/assets/";</script>
		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
	
		
		<!--end::Global Javascript Bundle-->
		<!--begin::Custom Javascript(used for this page only)-->
		
		<!--end::Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>
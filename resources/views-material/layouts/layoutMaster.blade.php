<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-navbar-fixed layout-menu-fixed layout-compact"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="https://d23zqfvqndw8ja.cloudfront.net/v2024-bundle-material/assets/"
  data-template="vertical-menu-template-starter">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>GreenHouse by Brandflowr</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="https://d23zqfvqndw8ja.cloudfront.net/pwa/greenhouse/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&ampdisplay=swap"
      rel="stylesheet" />

    <link rel="stylesheet" href="https://d23zqfvqndw8ja.cloudfront.net/v2024-bundle-material/assets/vendor/fonts/materialdesignicons.css" />
    <link rel="stylesheet" href="https://d23zqfvqndw8ja.cloudfront.net/v2024-bundle-material/assets/vendor/fonts/fontawesome.css" />
    <!-- <link rel="stylesheet" href="https://d23zqfvqndw8ja.cloudfront.net/v2024-bundle-material/assets/vendor/fonts/flag-icons.css" /> -->

    <!-- Menu waves for no-customizer fix -->
    <link rel="stylesheet" href="https://d23zqfvqndw8ja.cloudfront.net/v2024-bundle-material/assets/vendor/libs/node-waves/node-waves.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="https://d23zqfvqndw8ja.cloudfront.net/v2024-bundle-material/assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="https://d23zqfvqndw8ja.cloudfront.net/v2024-bundle-material/assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="https://d23zqfvqndw8ja.cloudfront.net/v2024-bundle-material/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="https://d23zqfvqndw8ja.cloudfront.net/v2024-bundle-material/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="https://d23zqfvqndw8ja.cloudfront.net/v2024-bundle-material/assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="https://d23zqfvqndw8ja.cloudfront.net/v2024-bundle-material/assets/vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="https://d23zqfvqndw8ja.cloudfront.net/v2024-bundle-material/assets/js/config.js"></script>
  
    <style>
      :root {
          --bs-primary: #66aa30;
          --btn-primary: #66aa30;
      }
      .menu-icon::before {
          font-size: 1.1rem;
          color: #66aa30;
      }
        /*          :root {
                --bs-card-box-shadow: 0 0.125rem 0.2rem 0 rgba(76, 78, 100, 0.3) !important;
            }


        .layout-navbar{
            background-color: white;
            box-shadow:  var(--bs-card-box-shadow);
        }
        #layout-menu{    
            box-shadow: var(--bs-card-box-shadow);
        }
        .bg-menu-theme {
            background-color: #ffffff !important;
            color: #636578;
        }
        */
body {
				animation: fadeInAnimation ease 1.5s;
				animation-iteration-count: 1;
				animation-fill-mode: forwards;
			}
			
			@keyframes fadeInAnimation {
				0% {
					opacity: 0;
				}
				100% {
					opacity: 1;
				}
			}

  html.dark-style   .bg-menu-theme {
    background-color: #00050c !important;
    color: #d2d2e8;
}
html.dark-style .bg-navbar-theme {
    color: #d2d2e8;
    background-color: #00050c !important;
}
    </style>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

     @yield('sidebar')
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar">
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="mdi mdi-menu mdi-24px"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <div class="navbar-nav align-items-center">
                <li class="nav-item dropdown-style-switcher dropdown me-2 me-xl-0">
                  <a
                    class="nav-link btn btn-text-secondary rounded-pill btn-icon dropdown-toggle hide-arrow"
                    href="javascript:void(0);"
                    data-bs-toggle="dropdown">
                    <i class="mdi mdi-24px"></i>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-start dropdown-styles">
                    <li>
                      <a class="dropdown-item" href="javascript:void(0);" data-theme="light">
                        <span class="align-middle"><i class="mdi mdi-weather-sunny me-2"></i>Light</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="javascript:void(0);" data-theme="dark">
                        <span class="align-middle"><i class="mdi mdi-weather-night me-2"></i>Dark</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="javascript:void(0);" data-theme="system">
                        <span class="align-middle"><i class="mdi mdi-monitor me-2"></i>System</span>
                      </a>
                    </li>
                  </ul>
                </li>
              </div>

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="{{ Auth::user()->profile_photo_url }}" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="https://d23zqfvqndw8ja.cloudfront.net/v2024-bundle-material/assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-medium d-block">John Doe</span>
                            <small class="text-muted">Admin</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="mdi mdi-account-outline me-2"></i>
                        <span class="align-middle">My Profile</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="mdi mdi-cog-outline me-2"></i>
                        <span class="align-middle">Settings</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <span class="d-flex align-items-center align-middle">
                          <i class="flex-shrink-0 mdi mdi-credit-card-outline me-2"></i>
                          <span class="flex-grow-1 align-middle">Billing</span>
                          <span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <!-- <li>
                      <a class="dropdown-item" href="javascript:void(0);">
                        <i class="mdi mdi-power me-2"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    </li> -->


                    <li>

                      <form method="POST" action="{{ route('logout') }}" x-data>

                      @csrf

                      <button type="submit" class="dropdown-item" >
                        <i class="mdi mdi-power me-2"></i>
                        <span class="align-middle">Log Out</span>
                      </button>

                      </form>

                    </li>



                   
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

          @yield('content')
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl">
                <div
                  class="footer-container d-flex align-items-center justify-content-between py-3 flex-md-row flex-column">
                  <div class="mb-2 mb-md-0">
                    ©
                    <script>
                      document.write(new Date().getFullYear());
                    </script>
                    , made with <span class="text-danger"><i class="tf-icons mdi mdi-heart"></i></span> by
                    <a href="https://pixinvent.com" target="_blank" class="footer-link fw-medium">Pixinvent</a>
                  </div>
                  <div class="d-none d-lg-inline-block">
                    <a
                      href="https://demos.pixinvent.com/materialize-html-admin-template/documentation/"
                      target="_blank"
                      class="footer-link me-4"
                      >Documentation</a
                    >
                  </div>
                </div>
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>

      <!-- Drag Target Area To SlideIn Menu On Small Screens -->
      <div class="drag-target"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="https://d23zqfvqndw8ja.cloudfront.net/v2024-bundle-material/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="https://d23zqfvqndw8ja.cloudfront.net/v2024-bundle-material/assets/vendor/libs/popper/popper.js"></script>
    <script src="https://d23zqfvqndw8ja.cloudfront.net/v2024-bundle-material/assets/vendor/js/bootstrap.js"></script>
    <script src="https://d23zqfvqndw8ja.cloudfront.net/v2024-bundle-material/assets/vendor/libs/node-waves/node-waves.js"></script>
    <script src="https://d23zqfvqndw8ja.cloudfront.net/v2024-bundle-material/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="https://d23zqfvqndw8ja.cloudfront.net/v2024-bundle-material/assets/vendor/libs/hammer/hammer.js"></script>

    <script src="https://d23zqfvqndw8ja.cloudfront.net/v2024-bundle-material/assets/vendor/js/menu.js"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="https://d23zqfvqndw8ja.cloudfront.net/v2024-bundle-material/assets/js/main.js"></script>
		<script>
/* window.addEventListener('load', function() {
    document.body.classList.add('page-loaded');
});

var observer = new MutationObserver(function(mutations) {
    mutations.forEach(function(mutation) {
        if (mutation.attributeName === "class") {
            var targetElement = mutation.target;
            if(targetElement.classList.contains("dark-style")){
                document.getElementById('logo').src = 'https://d23zqfvqndw8ja.cloudfront.net/images/greenhouse-logo-long-dark.png';
            }
            else if(targetElement.classList.contains("light-style")){
                document.getElementById('logo').src = 'https://d23zqfvqndw8ja.cloudfront.net/images/greenhouse-logo-long-light.png';
            }
        }
    });
});

observer.observe(document.querySelector('html'), {
    attributes: true
}); */

		</script>
      <script>
            function logOut() {
                document.getElementById("logOutSubmit").submit();
            }
        </script>
    <!-- Page JS -->
  </body>
</html>

<!DOCTYPE html>
<html
  lang="en"
  class="light-style layout-navbar-fixed layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="https://d23zqfvqndw8ja.cloudfront.net/assets/">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Blueprint by BrandFlowr | Dashboard</title>

    <meta name="description" content="" />

    @include('partials.head')
<style>
  .menu-icon::before {
    font-size: 1rem;
    color: #66aa30;
}
</style>
  </head>
  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">

        <!-- Menu -->
        @include('partials.menu')
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">

          <!-- Navbar -->
          @include('partials.header')
          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">

            <!-- Content -->
            @yield('content')
            <!-- / Content -->

            <!-- Footer -->
            @include('partials.footer')
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>

          </div> <!-- Content wrapper -->
        </div><!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>

     
      <div class="drag-target"></div>
    </div><!-- / Layout wrapper -->

    <!-- Core JS -->
    @include('partials.scripts')
<script>
   function logOut() {
                document.getElementById("logOutSubmit").submit();
            }
</script>
  </body>
</html>

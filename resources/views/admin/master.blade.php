<!DOCTYPE html>

<html dir="rtl"
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="{{asset("assets")}}/"
  data-template="vertical-menu-template-free"
>
@include('admin.partials.head')


  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->
        @include('admin.partials.sidebar')

        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->
          @include('admin.partials.navbare')



          <div class="content-wrapper">
            <!-- Content -->
           @yield('content')

           @include('admin.partials.footer')


            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

 @include('admin.partials.scripts')
    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

  </body>
</html>

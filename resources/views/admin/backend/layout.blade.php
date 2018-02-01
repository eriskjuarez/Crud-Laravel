<!DOCTYPE html>
<html>
  <head>
    @include('admin.backend.partials.head')
  </head>
  <body>
  <!--Begin header -->
  @include('admin.backend.partials.header')
  <!--End header -->
    <section class="container-fluid">
        @yield('container')
    </section>

          <!--Begin footer-->
            @include('admin.backend.partials.footer')
          <!--end footer-->

          <!--Begin scrits-->
          @include('admin.backend.partials.scripts')
          <!--end scripts-->
  </body>
</html>

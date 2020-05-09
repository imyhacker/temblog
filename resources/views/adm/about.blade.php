
<!-- HEADER -- >
  @include('adm.incadm.header')

  <!-- END HEADER-->
  <body id="page-top">
    <div id="wrapper">

      <!-- Sidebar -->
      @include('adm.incadm.sidebar')
      <!-- End of Sidebar -->


      <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

          <!-- Topbar -->
          @include('adm.incadm.astop')
          <!-- End of Topbar -->

          <!-- Begin Page Content -->
          @include('adm.incadm.ABOUT')
          <!-- End of Main Content -->

        </div>
        <!-- Footer -->
        @include('adm.incadm.footer')
        <!-- End of Footer -->

      </div>
      <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
@include('adm.incadm.modal')


@include('adm.incadm.asset')

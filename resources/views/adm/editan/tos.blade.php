
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
          

<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">TOS Page</h1>
    <a href="/post" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-upload fa-sm text-white-50"></i> New Article</a>
  </div>

  <!-- Content Row -->


  <!-- Content Row -->

  <div class="row">

    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-7">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Term Of Service</h6>
          
        </div>
        <!-- Card Body -->
        <div class="card-body">
          <form method="POST" action="/home/{{$data->id}}/updatetos">
            @csrf
          <textarea class="form-control" id="tos" name="tos">{{$data->tos}}</textarea>
        </div>
        <div class="modal-footer">
           <button type="submit" class="btn btn-primary">Update!</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>
  <!-- /.container-fluid -->


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


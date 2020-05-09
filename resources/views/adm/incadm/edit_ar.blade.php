
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">About Page</h1>
    <a href="/post" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-upload fa-sm text-white-50"></i> New Article</a>
  </div>

  <!-- Content Row -->


  <!-- Content Row -->

  <div class="row">

    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-7">
      <div class="card shadow mb-4">
        <form method="POST" action="/home/{{$data->id}}/asdet">
          @csrf
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">{{$data->judul}}</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
          <textarea class="form-control" id="diedit" name="isi">{{$data->isi}}</textarea>
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


<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Disclaimer Page</h1>
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
          <h6 class="m-0 font-weight-bold text-primary">Disclaimer</h6>
          
        </div>
        <!-- Card Body -->
        <div class="card-body">
          @foreach($disclaimer as $ds)
          <textarea class="form-control" readonly>{!! $ds->disclaimer !!}</textarea>
        </div>
        <div class="modal-footer">
           <a href="/home/disclaimer/{{$ds->id}}/get"><button type="submit" class="btn btn-primary">Update!</button></a>
          </form>
        </div>
          @endforeach
      </div>
    </div>
  </div>
  </div>
  <!-- /.container-fluid -->

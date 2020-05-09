
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Posting</h1>
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
          <h6 class="m-0 font-weight-bold text-primary">Posting</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
          
            <form method="POST" action="/kirimartikel"  enctype="multipart/form-data">
              @csrf
              <input type="text" name="judul" class="form-control" placeholder="Judul Artikel"><br>
              <div class="form-group">
                <select class="form-control" id="exampleFormControlSelect1" name="tag">
                  <option> - Pilih Label - </option>
                  @foreach($tag as $lbl)
                  <option value="{{$lbl->tag}}">{{$lbl->tag}}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
               <input type="file" name="image" class="custom-control-file" accept="image/png, image/jpeg">
             </div>
             <input type="text" name="author" class="form-control" value="{{Auth::user()->name}}" readonly><br>
             <input type="text" name="tanggal" class="form-control" value="{{date('D, d-m-Y')}}" readonly><br>
             <textarea id="isi" class="form-control" name="isi" rows="10" cols="50"></textarea>

           </div>
         </div>
         <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Posting!</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- /.container-fluid -->

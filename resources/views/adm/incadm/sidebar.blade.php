<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">{{config('app.name')}}</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item">
    <a class="nav-link" href="{{route('home')}}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="" data-toggle="modal" data-target="#exampleModal">
        <i class="fas fa-fw fa-tag"></i>
        <span>Add Tag</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Page</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Page : </h6>
            <a class="collapse-item" href="/home/about">About</a>
            <a class="collapse-item" href="/home/contact">Contact</a>
            <a class="collapse-item" href="/home/disclaimer">Disclaimer</a>
            <a class="collapse-item" href="/home/tos">TOS</a>
            <a class="collapse-item" href="/home/privacy">Privacy Policy</a>
            <a class="collapse-item" href="/home/adsen">Adsense</a>
            <a class="collapse-item" href="/home/pixel">FB Pixel</a>
            <a class="collapse-item" href="/home/fp">FP Facebook</a>
          </div>
        </div>
      </li>
<li class="nav-item">
    <a class="nav-link" href="/home/social">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Social Media</span></a>
    </li>
     
      <!-- Nav Item - Utilities Collapse Menu -->
      

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Tag</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="POST" action="/addtag">
              @csrf
              <input type="text" name="tag" class="form-control" placeholder="Add Tag Baru">
              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
          </form>
        </div>
      </div>
    </div>
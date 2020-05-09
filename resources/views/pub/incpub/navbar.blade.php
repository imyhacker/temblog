<header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <div class="container">
        <a class="navbar-brand nn topnav" href="/">[ {{config('app.name')}} ]</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav ml-auto topnav">
            <li class="nav-item">
              <div class="dropdown show">
                <a class="nav-link nn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-key"></i> Features</a>


                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <a class="dropdown-item" href="/about"><i class="fa fa-info-circle"></i> About</a>
                  <a class="dropdown-item" href="/contact"><i class="fa fa-user"></i> Contact</a>
                  <a class="dropdown-item" href="/disclaimer"><i class="fa fa-copyright"></i> Disclaimer</a>
                  <a class="dropdown-item" href="/tos"><i class="fa fa-legal"></i> TOS</a>
                  <a class="dropdown-item" href="/privacy"><i class="fa fa-lock"></i> Privacy Policy</a>
                </div>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link nn" href="/about"><i class="fa fa-info-circle"></i> About</a>
            </li>
            <li class="nav-item">
              @foreach($soc as $so)
              <a class="nav-link nn" href="{{$so->youtube}}" target="_blank"><i class="fa fa-youtube"></i> Youtube</a>
              @endforeach
            </li>
            <li class="nav-item">
              <a class="nav-link nn" href="/c19"><i class="fa fa-exclamation-triangle"></i> Data Covid-19</a>
            </li>
          </ul>
        </div>




      </div>
    </nav>

  </header>
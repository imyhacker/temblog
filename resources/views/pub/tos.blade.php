@include('pub.incpub.header')
<body class="d-flex flex-column h-100">
  @include('pub.incpub.navbar')
  <!-- Begin page content -->
  <main role="main" class="flex-shrink-0">
    <div class="container">
      <div class="row">
        @include('pub.incpub.tos')
        <div class="col-md-4 mt-4">
          @include('pub.con.tag')
          @include('pub.con.social')
          @include('pub.con.fp')
          @include('pub.con.ads')
        </div>
      </main>

      @include('pub.incpub.footer')

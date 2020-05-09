@include('pub.incpub.header')
<body class="d-flex flex-column h-100">
  @include('pub.incpub.navbar')
  <!-- Begin page content -->
  <main role="main" class="flex-shrink-0">
    <div class="container">
      <div class="row">
        <div class="col-md-8 mt-4">
          @forelse($lbl as $label)
          <h4><strong><b><a href="/{{$label->id}}/baca" style="color: #343A40; text-decoration: none;"> {{$label->judul}} </a></b></strong></h4>
          <p class="p">Posted By: {{$label->author}} | Tag: [{{$label->tag}}]</p>
          <hr>
          <p>{!! Str::substr($label->isi, 0, 300); !!}</p>
          @empty
          Tidak Ada Postingan Apapun Disini

          @endforelse
        </div>
        <div class="col-md-4 mt-4">
          @include('pub.con.tag')
          @include('pub.con.social')
          @include('pub.con.fp')
          @include('pub.con.ads')
        </div>
      </main>

      @include('pub.incpub.footer')

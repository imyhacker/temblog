<div class="col-md-8 mt-4">
          <h4><strong><b> {{$baca->judul}} </b></strong></h4>
          <hr>
          <p>
          	{!! $baca->isi !!}
          </p>
          <hr>
          @include('pub.incpub.disqus')
        </div>
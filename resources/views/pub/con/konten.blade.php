<div class="col-md-8 mt-4">
     @forelse($artikel as $post)
     <h4><strong><b><a href="/{{$post->id}}/baca" style="color: #343A40; text-decoration: none;"> {{$post->judul}} </a></b></strong></h4>
     <p class="p">Posted By: {{$post->author}} | Tag: [{{$post->tag}}]</p>
     <hr>
     <p>{!! Str::substr($post->isi, 0, 300); !!}</p>
     @empty
     Tidak Ada Postingan Apapun Disini

     @endforelse

     {!! $artikel->render('vendor.pagination.bootstrap-4')!!}
</div>

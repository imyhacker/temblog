<div class="col-md-8 mt-4">
          <h4><strong><b> About </b></strong></h4>
          <hr>
          <p>
          	@foreach($about as $as)
               {!! $as->about !!}
               @endforeach
          </p>
        </div>
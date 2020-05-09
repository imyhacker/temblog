<div class="col-md-8 mt-4">
          <h4><strong><b> Term Of Service </b></strong></h4>
          <hr>
          <p>
          	@foreach($tos as $ts)
               {!! $ts->tos !!}
               @endforeach
          </p>
        </div>
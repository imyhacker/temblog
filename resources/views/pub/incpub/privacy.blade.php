<div class="col-md-8 mt-4">
          <h4><strong><b> Privacy Policy </b></strong></h4>
          <hr>
          <p>
          	@foreach($privacy as $pv)
               {!! $pv->privacy !!}
               @endforeach
          </p>
        </div>
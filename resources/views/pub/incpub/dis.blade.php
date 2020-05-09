<div class="col-md-8 mt-4">
          <h4><strong><b> Disclaimer </b></strong></h4>
          <hr>
          <p>
            @foreach($Dis as $ds)
               {!! $ds->disclaimer !!}
               @endforeach
          </p>
        </div>
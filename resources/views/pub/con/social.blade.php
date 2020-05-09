<h5 class="mt-3"> Social Media </h5>
          <hr>
          <div class="row">
            <div class="col-lg-6">
              <ul class="list-unstyled mb-0">
                @foreach($soc as $social)
                  <a href="{{$social->facebook}}" style="text-decoration: none;color: #343A40;"><li class="align-items"><i class="fa fa-facebook-square"></i> Facebook</li></a> 
                  <a href="{{$social->whatsapp}}" style="text-decoration: none;color: #343A40;"> <li class="align-items"><i class="fa fa-whatsapp"></i> Whatsapp</li></a> 
                  <a href="{{$social->instagram}}" style="text-decoration: none;color: #343A40;"> <li class="align-items"><i class="fa fa-instagram"></i> Instagram</li></a> 
                  <a href="{{$social->telegram}}" style="text-decoration: none;color: #343A40;"> <li class="align-items"><i class="fa fa-telegram"></i> Telegram</li></a> 
              </ul>
            </div>
            <div class="col-lg-6">
              <ul class="list-unstyled mb-0">
                  <a href="{{$social->twitter}}" style="text-decoration: none;color: #343A40;"> <li class="align-items"><i class="fa fa-twitter"></i> Twitter</li></a> 
                  <a href="{{$social->linkedin}}" style="text-decoration: none;color: #343A40;"> <li class="align-items"><i class="fa fa-linkedin"></i> LinkedIn</li></a> 
                  <a href="{{$social->gmail}}" style="text-decoration: none;color: #343A40;"> <li class="align-items"><i class="fa fa-google"></i> Gmail</li></a> 
                  <a href="{{$social->youtube}}" style="text-decoration: none;color: #343A40;"> <li class="align-items"><i class="fa fa-youtube"></i> Youtube</li></a> 
              </ul>
              @endforeach
            </div>
          </div>
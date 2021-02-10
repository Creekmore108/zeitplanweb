<section id="price" class="section-with-bg wow fadeInUp">
  <div class="container">
  <p>&nbsp;</p>
    <div class="section-header">
      <h2>Pricing</h2>
      <p>These are introdctory prices as we progress and develop more functionality<br>prices may be higher for orginzations who join at a later date.</p>
    </div>

    <div class="row">
      @foreach($prices as $price)
        <div class="col-lg-4">
          <div class="card mb-5 mb-lg-0">
            <div class="card-body">
              <h5 class="card-title text-muted text-uppercase text-center">{{ $price->name }}</h5>
              <h6 class="card-price text-center">${{ number_format($price->price) }}</h6>
              <hr>
              <ul class="fa-ul">
                @foreach($prices as $price)
                  <li>
                    <span class="fa-li"><i class="fa fa-check"></i></span>{{ $price->name }}
                  </li>
                @endforeach
              </ul>
              <hr>
              <div class="text-center">
                <button type="button" class="btn" data-toggle="modal" data-target="#buy-ticket-modal" data-ticket-type="{{ Str::slug($price->name) }}">Sign Up</button>
              </div>
            </div>
          </div>
        </div>
      @endforeach
      
  </div>
  <p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>

  <!-- Modal Order Form -->
  <div id="buy-ticket-modal" class="modal fade">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Zeitplans</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          
            <div class="form-group">
              <h2>We are still in development</h2>
            </div>
            <div class="form-group">
              Test drive the app by clicking the <b>demo</b> "link in nav bar"
            </div>
            <div class="form-group">
              Be sure and signup for our mailing list to be updated on our progress and Go Live date.
            </div>
            
          
          
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

</section>

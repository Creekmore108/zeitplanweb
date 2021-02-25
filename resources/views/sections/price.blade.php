<section id="price" class="section-with-bg wow fadeInUp">
  <div class="container">
  <p>&nbsp;</p>
    <div class="section-header">
      <h2>Pricing</h2>
      <p>These are introdctory prices as we progress and develop more functionality<br>prices may be higher for orginzations who join at a later date.</p>
    </div>

    <div class="row">
      @foreach($plans as $plan)
        <div class="col-lg-3">
          <div class="card mb-5 mb-lg-0">
            <div class="card-body">
              <h5 class="card-title text-muted text-uppercase text-center">{{ $plan->plan_name }}</h5>
              <h6 class="card-price text-center">${{ number_format($plan->base_price) }} base</h6>
              <h6 class="card-price text-center">${{ $plan->user_price }} per user</h6>
              <hr>
              <ul class="fa-ul">
                @foreach($features as $feature)
                  <!-- if( $feature->plan_id  ==  $plan->id ) -->
                  <li>
                    <span class="fa-li"><i class="fa fa-check"></i></span>{{ $feature->feature_name }}
                  </li>
                  <!-- endif -->
                @endforeach
              </ul>
              
              <!-- <hr>
              <div class="sliderId">
                <span>Total: $<div id="total"> </div>Users: <input type="number" value="{{ $plan->min }}" min="{{ $plan->min }}" max="{{ $plan->max }}" onChange="calc({{{ $plan->base_price }}},{{{ $plan->user_price }}})"/></span>
                <input value="{{ $plan->min }}" min="{{ $plan->min }}" max="{{ $plan->max }}" step="1" type="range" onChange="calc({{{ $plan->base_price }}},{{{ $plan->user_price }}})"/> 
                
                <svg width="100%" height="25">
                  <line x1="4" x2="520" stroke="#212121" stroke-width="20" stroke-dasharray="1 31"></line>
                </svg>
              </div> -->
              <hr>
              <div class="text-center">
                <button type="button" class="btn" data-toggle="modal" data-target="#buy-ticket-modal" data-ticket-type="{{ Str::slug($plan->plan_name) }}">Sign Up</button>
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
  </style>
  
    <!-- <div class="sliderId">
      <span>Users: <input type="number" value="3" min="1" max="10" />
      Total: $<input type="number" id="total" value="38" min="1" max="56" /></span>
      <input value="3" min="1" max="10" step="1" type="range" /> 
      
      <svg width="100%" height="25">
        <line x1="4" x2="520" stroke="#212121" stroke-width="20" stroke-dasharray="1 31"></line>
      </svg>
    </div> -->
    <script>
    
      var calc = function(base, rate){
        var base ;
        var rate ;
        var total; 
        let parent = document.querySelector(".sliderId");
        if(!parent) return;
        let rangeSlide = parent.querySelectorAll("input[type=range]");
        let numberSlide = parent.querySelectorAll("input[type=number]");
        
            rangeSlide.forEach(function(el) {
            el.oninput = function() {
                let slide1 = parseFloat(rangeSlide[0].value);
                numberSlide[0].value = slide1;
                total = (slide1 * rate) + base;
                document.getElementById("total").innerHTML = total ;
            }
        });

        numberSlide.forEach(function(el) {
            el.oninput = function() {
                let number1 = parseFloat(numberSlide[0].value);
                rangeSlide[0].value = number1;
                total = (number1 * rate) + base;
                document.getElementById("total").innerHTML = total ;
            }
        });


      };
      // window.onload = calc(2,2);
    </script>
</section>

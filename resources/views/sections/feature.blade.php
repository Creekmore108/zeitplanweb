<section id="features" class="wow fadeInUp">
  <div class="container">
    <div class="section-header" >
      <p>&nbsp;</p>
      <h2>Features</h2>
      <p>Here are some of our features</p>
    </div>

    <div class="row">
      @foreach($features as $feature)
        <div class="col-lg-4 col-md-6">
          <div class="details" >
              <h3>{{ $feature->feature_name }} 
                @if($feature->plan_id == 2)<span style="color:blue">(Mid-Level)</span>@endif
                @if($feature->plan_id == 3)<span style="color:green">(advanced-Level)</span>@endif
              </h3>
              <p>{{ $feature->feature_detail }}</p>
          </div>
        </div>
      @endforeach
    </div>
  </div>

</section>
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
              <h3>{{ $feature->name }}</h3>
              <p>{{ $feature->text }}</p>
          </div>
        </div>
      @endforeach
    </div>
  </div>

</section>
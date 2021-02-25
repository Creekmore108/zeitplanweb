<section id="gallery" class="wow fadeInUp">
 <!-- ======= Gallery Section ======= -->
<div class="container" data-aos="fade-up">
  <div class="section-header">
    <h2>Gallery</h2>
  </div>
</div>

<div class="owl-carousel gallery-carousel" data-aos="fade-up" data-aos-delay="100">
  <a href="img/gallery/1.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/1.jpg" alt=""></a>
  <a href="img/gallery/2.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/2.jpg" alt=""></a>
  <a href="img/gallery/3.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/3.jpg" alt=""></a>
  <a href="img/gallery/4.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/4.jpg" alt=""></a>
</div>

</section><!-- End Gallery Section -->
  <!-- <div class="container">
    <div class="section-header">
      <h2>Gallery</h2>
      <p>Check our gallery from the recent events</p>
    </div>
  </div>
  //@foreach($galleries as $gallery)
    <div class="owl-carousel gallery-carousel">
      @foreach($gallery->photos as $photo)
        <a href="{{ $photo->getUrl() }}" class="venobox" data-gall="gallery-carousel"><img src="{{ $photo->getUrl() }}" alt="{{ $gallery->name }}" title="{{ $gallery->name }}"></a>
     // @endforeach
    </div>
  @endforeach
</section> -->
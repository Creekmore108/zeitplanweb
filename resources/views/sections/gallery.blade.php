<section id="gallery" class="wow fadeInUp">
 <!-- ======= Gallery Section ======= -->

<div class="container" data-aos="fade-up">
  <div class="section-header">
    <h2>Gallery</h2>
    <p>Gallery of Screens in Application</p>
  </div>
</div>
  
    <div class="owl-carousel gallery-carousel">
      @foreach($galleries as $photo)
        <a href="img/gallery/{{ $photo->name }}" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/{{ $photo->name }}" alt="" ></a>
      @endforeach
    </div>
  
</section> 

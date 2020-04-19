{{-- <div id='preloader' ></div> --}}

<!--==========================
Hero Section
============================-->
@if(empty($header))
<section id="hero">
@else
<section id="hero" style="background:url({{'storage/'.$header->img_path}})">
@endif
  <div class="hero-container">
    <div class="wow fadeIn">
      <div class="hero-logo">
        <img class="" src="img/logo.png" alt="Imperial">
      </div>

      <h1>Welcome to Imperial studios</h1>
      <h2>We create <span class="rotating">beautiful graphics, functional websites, working mobile apps</span></h2>
      <div class="actions">
        <a href="#about" class="btn-get-started">Get Started</a>
        <a href="#services" class="btn-services">Our Services</a>
      </div>
    </div>
  </div>
</section>


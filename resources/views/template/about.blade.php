<!--==========================
About Section
============================-->
<section id="about">
  <div class="container wow fadeInUp">
    <div class="row">
      <div class="col-md-12">
        {{-- <h3 class="section-title">About us</h3> --}}
      <h3 class="section-title">{{empty($about) ? '' : $about->section_title}}</h3>

        <div class="section-title-divider"></div>
        <p class="section-description">{{empty($about) ? '' : $about->section_description}}</p>
      </div>
    </div>
  </div>
  <div class="container about-container wow fadeInUp">
    <div class="row">

      <div class="col-lg-6 about-img">
        @if(!empty($about))
        <img src="{{asset('storage/' .$about->img_path)}}" alt="">
        @endif
      </div>

      <div class="col-md-6 about-content">
        <h2 class="about-title">{{empty($about) ? '' : $about->about_title}}</h2>
        <p class="about-text">
          {{empty($about) ? '' : $about->about_text}}
        </p>
      
      </div>
    </div>
  </div>
</section>

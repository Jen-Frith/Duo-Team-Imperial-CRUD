
  <!--==========================
  Subscrbe Section
  ============================-->
  
  
  @if (empty($subscriber))
  
  
  <section id="subscribe">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-8">
          <h3 class="subscribe-title">Subscribe For Updates</h3>
          <p class="subscribe-text">Join our 1000+ subscribers and get access to the latest tools, freebies, product announcements and much more!</p>
        </div>
        <div class="col-md-4 subscribe-btn-container">
          <a class="subscribe-btn" href="http://www.google.be">Subscribe Now</a>
        </div>
      </div>
    </div>
  </section>



  @else
  <section id="subscribe">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-8">
          <h3 class="subscribe-title">Subscribe For Updates</h3>
          <p class="subscribe-text">Join our 1000+ subscribers and get access to the latest tools, freebies, product announcements and much more!</p>
        </div>
        <div class="col-md-4 subscribe-btn-container">
          <a class="subscribe-btn" href="{{$subscriber->subscriberLink}}">Subscribe Now</a>
        </div>
      </div>
    </div>
  </section>
@endif
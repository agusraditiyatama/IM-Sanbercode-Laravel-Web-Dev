@extends('layouts.master')

@section('title')
CONTACT ME
@endsection

@section('content')
    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <div class="container" data-aos="fade">

        <div class="row gy-5 gx-lg-5">

          <div class="col-lg-4">

            <div class="info">
              <h3>Get in touch</h3>
              <p>Agus Permadi Raditiyatama, Web developer pemula yang haus belajar.</p>

              <div class="info-item d-flex">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h4>Location:</h4>
                  <p>Bero, no 20, RT 12, RW 03, Bedoro, Sambungmacan, Sragen</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h4>Email:</h4>
                  <p>agus7raditiyatama@gmail.com</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-phone flex-shrink-0"></i>
                <div>
                  <h4>Call:</h4>
                  <p>+62 8222 1591 021</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <a href="https://www.linkedin.com/in/agus-raditiyatama-497334145/" >
                <i class="bi bi-linkedin flex-shrink-0"></i>
                <div>
                  <a href="https://www.linkedin.com/in/agus-raditiyatama-497334145/" >
                  <h4>Linkedin:</h4>
                  <p>Agus Raditiyatama</p>
                  </a>
                </div>
               
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                
                <i class="bi bi-twitter-x flex-shrink-0"></i>
                <div>
                  <a href="https://x.com/ARaditiyatama">
                  <h4>X:</h4>
                  <p>@ARaditiyatama</p>
                  </a>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-youtube flex-shrink-0"></i>
                <div>
                  <a href="https://www.youtube.com/@kingcr2741">
                  <h4>Youtube:</h4>
                  <p>Guss</p>
                  </a>
                </div>
              </div><!-- End Info Item -->

            </div>

          </div>

          <div class="col-lg-8">
            <form action="" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required="">
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required="">
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required="">
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" placeholder="Message" required=""></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->
@endsection
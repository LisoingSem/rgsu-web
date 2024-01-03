<footer>
      <div class="wrapper container-lg max-w-screen-xl mx-auto">
            <section class="top-wrapper">
                  <img src="{{asset('assets/images/main/logo.png')}}" alt="">
                  <ul>
                        <li><a href="#">The RGC's six policies</a></li>
                        <li><a href="#">Prime Minister</a></li>
                        <li><a href="#">Pentagonal Strategy</a></li>
                        <li><a href="#">Monthly Updated</a></li>
                        <li><a href="#">Spokespersons</a></li>
                        <li><a href="#">Help</a></li>
                  </ul>
            </section>

            <section class="body-wrapper grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
                  <div >
                        <h2>@lang('website.footer.help')</h2>
                        <ul>
                              <li><a href="#">Press Brieifing Schedule</a></li>
                              <li><a href="#">PublicSchedule</a></li>
                              <li><a href="#">Press Release</a></li>
                        </ul>
                  </div>

                  <div>
                        <h2>@lang('website.footer.further-info')</h2>
                        <ul>
                              <li><a href="#">Drop Everything</a></li>
                              <li><a href="#">Affiliate programme</a></li>
                              <li><a href="#">Privacy</a></li>
                              <li><a href="#">Terms & conditions</a></li>
                        </ul>
                  </div>

                  <div class="sm:col-span-2 lg:col-span-1">
                        <h2>@lang('website.footer.contact')</h2>
                        <ul class="contact">
                              <li><i class="fa-solid fa-map-location-dot"></i> <span>Friendship Building, 38 Confederation de la Russie Blvd (110), Phnom Penh, Kingdom of Cambodia</span></li>
                              <li><i class="fa-solid fa-phone"></i><span>023 212 409</span></li>
                              <li><i class="fa-solid fa-envelope"></i><span>info@rgsu.gov.kh/</span></li>
                        </ul>
                  </div>
            </section>

            <section class="footer-wrapper">
                  <div class="news-letter">
                        <h2>@lang('website.footer.news-letter')</h2>
                        <div class="input-wrapper">
                              <input type="text" value="Enter your Email..." onfocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue">
                              <div class="icon"><i class="fa-regular fa-envelope"></i></div>
                        </div>
                  </div>

                  <div class="follow">
                        <h2>@lang('website.footer.follow')</h2>
                        <ul>
                              <li><a href="#"><img src="{{asset('assets/images/social/facebook.png')}}" alt=""></a></li>
                              <li><a href="#"><img src="{{asset('assets/images/social/twitter.png')}}" alt=""></a></li>
                              <li><a href="#"><img src="{{asset('assets/images/social/linkin.png')}}" alt=""></a></li>
                              <li><a href="#"><img src="{{asset('assets/images/social/tiktok.png')}}" alt=""></a></li>
                              <li><a href="#"><img src="{{asset('assets/images/social/youtube.png')}}" alt=""></a></li>
                              <li><a href="#"><img src="{{asset('assets/images/social/telegram.png')}}" alt=""></a></li>
                        </ul>
                  </div>
            </section>

      </div>
</footer>
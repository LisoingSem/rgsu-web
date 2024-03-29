<footer>
      <div class="wrapper container-lg max-w-screen-xl mx-auto">
            <section class="top-wrapper">
                  <a href="{{ route('home') }}"><img src="{{asset('assets/images/main/logo.png')}}" alt=""></a>
                  <ul>
                        <li><a href="#">@lang('website.footer.policy')</a></li>
                        <li><a href="#">@lang('website.footer.pm')</a></li>
                        <li><a href="#">@lang('website.footer.pentagonal')</a></li>
                        <li><a href="#">@lang('website.footer.monthly')</a></li>
                        <li><a href="#">@lang('website.footer.spokesperson')</a></li>
                        <li><a href="#">@lang('website.footer.help')</a></li>
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
                        <form class="input-wrapper">
                              <input type="email" value="@lang('website.email')" onfocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue">
                              <button class="icon"><i class="fa-regular fa-envelope"></i></button>
                        </form>
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

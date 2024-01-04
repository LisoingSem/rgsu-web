<header>
      <section class="top-wrapper">
            <div class="wrapper container-lg max-w-screen-xl mx-auto">
                  <div class="left-side">
                        <ul>
                              <li><a href="#">@lang('website.menu.about.text')</a></li>
                              <li><a href="#">FQA</a></li>
                              <li><a href="#">@lang('website.menu.contact.text')</a></li>
                        </ul>
                  </div>
                  <div class="right-side">
                        <ul>
                              <li><a href="#">@lang('website.menu.achieve.text')</a></li>
                              <li class="language">
                                    @include('website::components.switch-lang')
                              </li>
                        </ul>
                  </div>
            </div>
      </section>

      <section class="header-wrapper">
            <div class="wrapper container-lg max-w-screen-xl mx-auto">
                  <img src="{{ asset('assets/images/main/logo.png') }}" alt="">

                  <div class="search-wrapper hidden lg:flex">
                        @include('website::components.search')
                  </div>
            </div>
      </section>
</header>

@include('website::components.navbar')

<script type="module">
      $(document).ready(function() {
        $('.selected').click(function() {
            $('.sub-menu').fadeToggle();
            $('.lang-item i').toggleClass('rotate rotate-up');
        });

        $('.text').click(function() {
            $('.list-category').slideToggle();
            $('.text i').toggleClass('rotate rotate-up');
        });
    });
</script>

<a href="#" class="lang-item {{ app()->getLocale() === 'km' ? 'selected' : '' }}"><img src="{{ asset('assets/images/flag/cambodia.png') }}"
            alt="" />@lang('website.flag.khmer') <i class="fa-solid fa-angle-down"></i></a>
<a href="#" class="lang-item {{ app()->getLocale() === 'en' ? 'selected' : '' }}"><img src="{{ asset('assets/images/flag/english.png') }}"
            alt="" />@lang('website.flag.english') <i class="fa-solid fa-angle-down"></i></a>
<ul class="sub-menu">
      <li><a href="{{ route('website-switch-lang',
           config('dummy.locale.km')) }}"><img src="{{ asset('assets/images/flag/cambodia.png') }}"
                        alt="" />@lang('website.flag.khmer')</a></li>
      <li><a href="{{ route('website-switch-lang',
            config('dummy.locale.en')) }}"><img src="{{ asset('assets/images/flag/english.png') }}"
                        alt="" />@lang('website.flag.english')</a></li>
</ul>
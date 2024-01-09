@extends('website::layouts.body')
@include('website::components.meta', [
    'title' => '',
    // 'title' => config('dummy.menu.home.text') . ' -',
])

@section('content')
    <section class="slider-container">
        @include('website::pages.homepage.swiper')
    </section>
    <main>
        <section class="container-lg max-w-screen-xl mx-auto mission-wrapper">
            @include('website::pages.homepage.mission')
        </section>

        <section class="container-lg max-w-screen-xl mx-auto policies-wrapper">
            @include('website::pages.homepage.policies')
        </section>

        <section class="container-lg max-w-screen-xl mx-auto news-wrapper">
            @include('website::pages.homepage.news')
        </section>

        <section class="container-lg max-w-screen-xl mx-auto menu-wrapper">
            <div class="grid grid-cols-1 lg:grid-cols-2 wrapper">
                <div class="order-2">
                    <a href="#">
                        <h1>{{ __('website.menu.about-unit.text') }}</h1>
                    </a>
                </div>
                <div class="order-1">
                    <a href="#">
                        <h1>{{ __('website.menu.unit-activity.text') }}</h1>
                    </a>
                </div>
            </div>
        </section>
    </main>
@endsection

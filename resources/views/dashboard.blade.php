{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}


<x-app-layout>

    <!-- Banner area start -->
    <section class="banner__area banner-height d-flex align-items-center p-relative">
        <div class="banner-shape d-none d-lg-block">
            <img class="{{ Vite::asset('resources/imgs/shape/tower-shape-small.png') }}" alt="image not found">
            {{-- <img class="banner__shape-two" src="assets/imgs/shape/tower-shape-small.png" alt="image not found"> --}}
        </div>
        <!-- when slide active remove this class -->
        <div class="swiper banner__active overflow-visible">
            <div class="swiper-wrapper">
                <div class="swiper-slide banner_more_item">
                    <div class="container">
                        <div class="row align-items-center gy-5">
                            <div class="col-xl-6 col-lg-6">
                                <div class="banner__content p-relative">
                                    <h1 class="banner__title large wow fadeInUp" data-wow-delay=".3s"
                                        data-wow-duration=".7s">Hi, <span class="banner__shape-hand">´<img
                                                src="{{ Vite::asset('resources/imgs/shape/hand-shape.png') }}" alt="image not found"></span>
                                        I’m <span class="bd-text-primary">Portlu</span> UI Designer Based in Florida
                                    </h1>
                                    <p class="wow fadeInUp" data-wow-delay=".4s" data-wow-duration=".9s">We are a
                                        creative agency that specializes in providing high-quality design and
                                        branding solutions to design and coding.</p>
                                </div>
                                <div class="banner__btn wow fadeInUp" data-wow-delay=".6s" data-wow-duration="1.1s">
                                    <a class="bd-btn is-btn-anim" href="portfolio.html">
                                        <span class="bd-btn-inner">
                                            <span class="bd-btn-normal">Get my work</span>
                                            <span class="bd-btn-hover">Get my work</span>
                                            <i class="contentHidden"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="banner__thumb-wrapper wow fadeInRight" data-wow-delay=".8s"
                                    data-wow-duration="1.2s">
                                    <div class="banner__shape">
                                        <img class="banner__shape-one" src="{{ Vite::asset('resources/imgs/shape/tower-shape.png') }}"
                                            alt="image not found">
                                    </div>
                                    <div class="banner__bg"></div>
                                    <div class="banner__thumb">
                                        <img src="{{ Vite::asset('resources/imgs/banner/banner-01.png') }}" alt="image not found">
                                    </div>
                                    <div class="theme__social banner-social">
                                        <a href="#"><i class="fa-brands fa-facebook-f"></i>
                                            <div class="banner__social-tooltip">
                                                <p>Facebook</p>
                                            </div>
                                        </a>
                                        <a href="#"><i class="icon-twiter"></i>
                                            <div class="banner__social-tooltip">
                                                <p>Twitter</p>
                                            </div>
                                        </a>
                                        <a href="#"><i class="fa-brands fa-linkedin"></i>
                                            <div class="banner__social-tooltip">
                                                <p>Linkedin</p>
                                            </div>
                                        </a>
                                        <a href="#"><i class="fa-brands fa-behance"></i>
                                            <div class="banner__social-tooltip">
                                                <p>Behance</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner area end -->

     <!-- About area start -->
     <section id="homeabout" class="bd-about__area section-space theme-bg-secondary">
        <div class="container">
            <div class="row g-5 align-items-lg-center">
                <div class="col-lg-6 col-md-6">
                    <div class="about__thumb-wrapper wow fadeInLeft tilt" data-wow-delay=".3s">
                        <div class="about__thumb">
                            <img src="{{ Vite::asset('resources/imgs/about/about-01.png') }}" alt="image not found">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="about__content wow fadeInRight" data-wow-delay=".3s">
                        <div class="section__title-wrapper mb-25">
                            <div class="section__title-wrapper">
                                <span class="section__subtitle">ABOUT ME</span>
                                <h2 class="section__title">Young Man Student With Notebooks</h2>
                                <p class="contentHidden">contentHiddenText</p>
                            </div>
                        </div>
                        <p class="about__text">Our journey began with a simple belief that every idea, no matter how
                            small, has the power to make a significant impact.passion meets progress and company to
                            grow </p>
                        <p class="about__text-two">In a world saturated with noise, we stand out by embracing a
                            commitment to authenticity and originality. </p>
                        <div class="about__counter-wrapper">
                            <div class="about__counter-info">
                                <div class="about__counter-count">
                                    <h3><span class="counter">20</span>th</h3>
                                </div>
                                <p>Years of Experience</p>
                            </div>
                            <div class="about__counter-info">
                                <div class="about__counter-count">
                                    <h3><span class="counter">150</span>+</h3>
                                </div>
                                <p>Project Completed</p>
                            </div>
                        </div>
                        <div class="about__btn">
                            <a class="bd-btn is-btn-anim" href="about.html">
                                <span class="bd-btn-inner">
                                    <span class="bd-btn-normal">Know more</span>
                                    <span class="bd-btn-hover">Know more</span>
                                    <i class="contentHidden"></i>
                                </span>
                            </a>
                            <a class="play__btn popup-video animate-play"
                                href="https://www.youtube.com/watch?v=9341cn0KokE"><span><i
                                        class="icon-play"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About area end -->
</x-app-layout>

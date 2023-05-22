@if ($banners->count())
    <section class="banner ratio ratio-6x9 ratio-md-16x9 ratio-xl-21x9 overflow-hidden">
        <div class="banner-swiper">
            <div class="swiper-wrapper">
                @foreach ($banners as $banner)
                    <div class="swiper-slide banner-slide position-relative">

                        <picture>
                            {{-- Desktop --}}
                            <source srcset="{{ $banner->getImagemDesktop()->url() }}" media="(min-width: 767px)">
                            {{-- Mobile --}}
                            <img class="object-fit-cover w-100 h-100" src="{{ $banner->getImagemMobile()->url() }}" alt="">
                        </picture>

                        @if ($banner->link_1)
                            <a href="{{ $banner->link_1 }}" class="stretched-link"></a>
                        @endif

                    </div>
                @endforeach
            </div>
            <div class="swiper-button-prev">
                <svg width="1.25em" height="1.25em" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                </svg>
            </div>
            <div class="swiper-button-next">
                <svg width="1.25em" height="1.25em" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                </svg>
            </div>
        </div>
    </section>
@endif

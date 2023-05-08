@extends('front.layout.app')

@section('content')
    <main id="produto">
        <section class="produto-detalhe py-lg-4 py-2">
            <div class="container">
                <div class="row ">
                    @if ($product->image->count())
                        <div class="col-lg-6 ps-1 col-xxl-4 col-md-10 col-sm-12 d-flex justify-content-center">
                            <div class="swiper produtos-detalhe-swiper">
                                <div class="swiper-wrapper">
                                    @foreach ($product->image as $image)
                                        <div class="swiper-slide h-100">
                                            <div class="slide-img">
                                                <a href="{{ $image->url() }}">
                                                    <div class="cor">
                                                        <span>{{ $image->title }}</span>
                                                    </div>
                                                    <img src="{{ $image->url() }}" alt="">
                                                    @if ($product->code)
                                                        <div class="span bg-white">
                                                            <span>{{ $product->code }}</span>
                                                        </div>
                                                    @endif
                                                </a>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                    @endif
                    <div class="col-lg-6 col-xxl-5 col-md-12 col-sm-12 px-lg-4 py-4 py-sm-0 info">
                        <div class="d-flex justify-content-start titulo">
                            <h2>{{ $product->code }}</h2>
                        </div>
                        <div class="p p-text pt-4">
                            <p><span>Descrição:</span>{!! $product->text !!}</p>
                        </div>
                        @if ($product->applications->count())
                            <div class="aplicabilidade p d-flex align-items-center pt-2">
                                <p>Aplicabilidade</p>
                                <div class="ms-2">
                                    @foreach ($product->applications as $application)
                                        <img src="{{ $application->image->first()->url() }}" class="ms-0-50 mb-1" width="40" alt="">
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="col-lg-12 py-sm-4  py-md-4 py-lg-4 py-xl-4 py-xxl-0 col-xxl-3 col-md-12 form-contato ps-1">
                        <div class="d-flex">
                            <h2>Formulário para contato</h2>
                        </div>

                        <livewire:form-interest-product :product_id="$product->id" />
                    </div>
                </div>
            </div>
        </section>
        @if ($relatedProducts->count())
            <section class="relacionados">
                <div class="container">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-start titulo">
                            <h2 class="ps-lg-4 ">Relacionados</h2>
                        </div>
                        <div class="swiper produtos-relacionados-swiper mt-2 col-11">
                            <div class="swiper-wrapper">
                                @foreach ($relatedProducts as $relatedProduct)
                                    <div class="swiper-slide">
                                        <div class="slide-img">
                                            <div class=" cards-conteudo">
                                                <x-product-card :product="$product" />
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
            </section>
        @endif
    </main>
@endsection

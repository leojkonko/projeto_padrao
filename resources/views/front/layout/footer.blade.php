<footer id="footer" class="overflow-hidden bg-light">
    <div class="container">
        <div class="row gy-2 gy-lg-0 text-center text-lg-start align-items-center justify-content-between py-2 py-lg-4">
            <div class="col-lg-auto">
                <a href="{{ route_lang('home') }}" class="d-block logo m-auto m-lg-0">
                    <img class="object-fit-contain w-100 h-100" src="{{ asset('front/images/logos/logo.svg') }}" title="Página principal" alt="Logo {{ env('APP_NAME') }}">
                </a>
            </div>
            <div class="col-lg-auto">
                <x-site-menu type="footer" />
            </div>
            <div class="col-lg-5 col-xl-4">
                <x-footer-contacts />
            </div>
            <div class="col-lg-auto">
                <x-footer-socials />
            </div>
        </div>
    </div>
    <div class="py-1 copyright">
        <div class="container">
            <div class="d-flex flex-column flex-lg-row text-center text-lg-start gap-1 justify-content-center align-items-center justify-content-sm-between">
                <small class="text-muted small">Copyright &copy{{ date('Y') }} {{ env('APP_NAME') }}. Todos os direitos reservados. CNPJ 00.000.000/0000-00</small>
                <div class="col-12 col-md-6 col-lg-auto">
                    @inject('site', 'App\\Services\\SiteService')
                    @if ($site->hasPrivacy())
                        <a href="{{ route_lang('privacy') }}" class="small" title="Política de privacidade">Política de privacidade</a>
                    @elseif ($site->useLgpd())
                        <button onClick="ElliteLgpdApi.showModal()" class="btn btn-link p-0">Gerenciar preferências de cookies</button>
                    @endif
                </div>
                <div class="col-12  col-md-6 col-lg-auto d-flex justify-content-center justify-content-lg-end">
                    <a href="https://www.ellitedigital.com.br" target="_blank">
                        <img src="https://www.ellitedigital.com.br/logo-sites/logo-ellite-black.svg" alt="Ellite Agência Digital" width="80" height="18">
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>

{{-- Whatsapp fixed button --}}
<x-whatsapp-fixed />

{{-- Jquery --}}
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

{{-- Swiper.js --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.2.0/swiper-bundle.min.js" integrity="sha512-KBCt3sdFOcFtYTgEfE3uJckVpvPr1w8HPugyPgHFE/4iJOwhwj6eSaF27bDJTHRX2jyAFOgV3Ve9vOD97rbjrg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

{{-- Fancybox --}}
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>

{{-- GSAP (caso necessário) --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.0/gsap.min.js"></script> --}}

{{-- Front js --}}
@vite(['resources/front/js/vendors/bootstrap.bundle.min.js', 'resources/front/js/main.js'])

@livewireScripts

</body>

</html>

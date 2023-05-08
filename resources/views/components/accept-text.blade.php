@inject('site', 'App\\Services\\SiteService')

@if ($site->hasPrivacy())
    Li e aceito a <a href="{{ route_lang('privacy') }}" target="_blank">política de privacidade</a> da {{ env('APP_NAME') }}
@else
    Aceito com a utilização de meus dados pela {{ env('APP_NAME') }}
@endif
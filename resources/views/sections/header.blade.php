@php
    $site = config('site');
    $contacts = config('contacts');
    $navigation = config('navigation');
@endphp

<header class="header" role="banner">
    <div class="container header__inner">
        <div class="header__logo">
            <x-logo src="img/logo.svg" alt="{{ $site['name'] }}" variant="header" />
        </div>

        <nav class="header__nav nav" aria-label="Основная навигация">
            <ul class="nav__list">
                @foreach ($navigation as $item)
                    <li>
                        <a href="{{ $item['url'] }}" class="nav__link">{{ $item['label'] }}</a>
                    </li>
                @endforeach
            </ul>
        </nav>

        <div class="header__contacts">
            <a href="tel:{{ $contacts['phone_link'] }}" class="header__contact-link header__contact-link--phone">
                {{ $contacts['phone'] }}
            </a>
            <a href="mailto:{{ $contacts['email'] }}" class="header__contact-link header__contact-link--email">
                {{ $contacts['email'] }}
            </a>
        </div>
    </div>
</header>

<button
    type="button"
    class="burger"
    aria-label="Открыть меню"
    aria-expanded="false"
    aria-controls="mobile-menu"
    data-menu-toggle
>
    <svg class="burger__icon burger__icon--menu" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
        <path d="M3 6h18M3 12h18M3 18h18" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
    </svg>
    <svg class="burger__icon burger__icon--close" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
        <path d="M6 6l12 12M18 6L6 18" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
    </svg>
</button>

<div class="mobile-menu__overlay" data-menu-overlay aria-hidden="true"></div>

<aside class="mobile-menu" id="mobile-menu" data-mobile-menu aria-hidden="true">
    <div class="mobile-menu__inner">
        <nav class="mobile-menu__nav" aria-label="Мобильная навигация">
            <ul class="mobile-menu__list">
                @foreach ($navigation as $item)
                    <li>
                        <a href="{{ $item['url'] }}" class="mobile-menu__link">{{ $item['label'] }}</a>
                    </li>
                @endforeach
            </ul>
        </nav>

        <div class="mobile-menu__contacts">
            <a href="tel:{{ $contacts['phone_link'] }}" class="mobile-menu__contact mobile-menu__contact--phone">
                {{ $contacts['phone'] }}
            </a>
            <a href="mailto:{{ $contacts['email'] }}" class="mobile-menu__contact mobile-menu__contact--email">
                {{ $contacts['email'] }}
            </a>
        </div>
    </div>
</aside>

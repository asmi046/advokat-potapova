@php
    $site = config('site');
    $contacts = config('contacts');
    $navigation = config('navigation');
@endphp

<header class="header" role="banner">
    <div class="container header__inner">
        <div class="header__logo">
            <x-logo src="img/logo.svg" alt="{{ $site['name'] }}" />
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

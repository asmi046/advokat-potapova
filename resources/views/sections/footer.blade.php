@php
    $contacts = config('contacts');
    $navigation = config('navigation');
    $site = config('site');
@endphp

<footer class="footer" role="contentinfo">
    <div class="container footer__inner">
        <div class="footer__logo">
            <img src="{{ asset('img/logo.svg') }}" alt="{{ $site['name'] }}" loading="lazy" />
        </div>

        <nav aria-label="Навигация в подвале">
            <ul class="footer__nav">
                @foreach ($navigation as $item)
                    <li>
                        <a href="{{ $item['url'] }}" class="footer__link">{{ $item['label'] }}</a>
                    </li>
                @endforeach
            </ul>
        </nav>

        <div class="footer__contacts">
            <a href="tel:{{ $contacts['phone_link'] }}" class="footer__contact-link">
                {{ $contacts['phone'] }}
            </a>
            <a href="mailto:{{ $contacts['email'] }}" class="footer__contact-link">
                {{ $contacts['email'] }}
            </a>
        </div>

        <p class="footer__copy">© {{ date('Y') }} {{ $site['name'] }}. Все права защищены.</p>
    </div>
</footer>

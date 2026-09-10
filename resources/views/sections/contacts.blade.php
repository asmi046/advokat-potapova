@php
    $contacts = config('contacts');
    $map = $contacts['map'];
    $apiKeyParam = $map['api_key'] ? '&apikey=' . $map['api_key'] : '';
@endphp

<section class="contacts" id="contacts" aria-labelledby="contacts-title">
    <div class="container">
        <x-heading id="contacts-title">Контакты</x-heading>

        <div class="contacts__grid">
            <div class="contacts__info">
                <div class="contacts__group">
                    <p class="contacts__label">Телефоны:</p>
                    @foreach ($contacts['phones'] as $phone)
                        <a href="tel:{{ $phone['link'] }}" class="contacts__link contacts__link--lg">
                            {{ $phone['label'] }}
                        </a>
                    @endforeach
                </div>

                <div class="contacts__group">
                    <p class="contacts__label">Email:</p>
                    <a href="mailto:{{ $contacts['email'] }}" class="contacts__link">
                        {{ $contacts['email'] }}
                    </a>
                </div>

                <div class="contacts__group">
                    <p class="contacts__label">Адрес:</p>
                    <p class="contacts__text">{{ $contacts['address'] }}</p>
                </div>
            </div>

            <div class="contacts__map" id="contacts-map"
                data-center="{{ implode(',', $map['center']) }}"
                data-zoom="{{ $map['zoom'] }}"
                data-pin="{{ asset($map['pin']) }}"
            ></div>
        </div>
    </div>
</section>

@once
    @push('scripts')
        <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU{{ $apiKeyParam }}" defer></script>
    @endpush
@endonce

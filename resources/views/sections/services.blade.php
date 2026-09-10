@php
    $services = config('services');
@endphp

<section class="services" id="services" aria-labelledby="services-title">
    <div class="container">
        <x-heading id="services-title">Услуги</x-heading>

        <div class="services__grid">
            @foreach ($services['cards'] as $card)
                <x-service-card
                    :modifier="$card['modifier']"
                    :title="$card['title']"
                    :list="$card['list']"
                >
                    <div class="service-card__cta">
                        <x-button
                            :type="$card['button']['type']"
                            :url="$card['button']['url']"
                            :label="$card['button']['label']"
                            data-popup-open="{{ $card['popup']['id'] ?? '' }}"
                        />
                    </div>
                </x-service-card>
            @endforeach
        </div>
    </div>
</section>

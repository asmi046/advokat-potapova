@php
    $pricing = config('pricing');
@endphp

<section class="pricing" id="pricing" aria-labelledby="pricing-title">
    <div class="container">
        <x-heading id="pricing-title">Стоимость услуг</x-heading>

        @foreach ($pricing as $groupIndex => $group)
            <div class="pricing__group">
                <h3 class="pricing__group-title">{{ $group['title'] }}</h3>

                <div class="pricing__grid">
                    @foreach ($group['items'] as $item)
                        <x-price-card
                            :description="$item['description']"
                            :price="$item['price']"
                            :muted="$groupIndex === 1"
                        />
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
</section>

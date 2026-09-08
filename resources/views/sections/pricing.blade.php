@php
    $pricing = config('pricing');
@endphp

<section class="pricing" id="pricing" aria-labelledby="pricing-title">
    <div class="container">
        <x-heading id="pricing-title">Стоимость услуг</x-heading>

        @foreach ($pricing as $groupIndex => $group)
            @php
                $items = $group['items'];
                $third = (int) ceil(count($items) / 3);
            @endphp

            <div class="pricing__group">
                <h3 class="pricing__group-title">{{ $group['title'] }}</h3>

                <div class="pricing__grid">
                    @foreach ($items as $i => $item)
                        @php
                            $positionInGroup = $i % 3;
                            $muted = $positionInGroup === 2;
                        @endphp
                        <x-price-card
                            :description="$item['description']"
                            :price="$item['price']"
                            :muted="$muted"
                        />
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
</section>

@props([
    'description' => '',
    'price' => '',
    'muted' => false,
])

<div {{ $attributes->merge(['class' => 'price-card ' . ($muted ? 'price-card--muted' : '')]) }}>
    <p class="price-card__desc">{{ $description }}</p>
    <hr class="price-card__divider" />
    <div class="price-card__price">{{ $price }}</div>
</div>

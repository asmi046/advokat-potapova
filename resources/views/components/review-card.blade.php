@props([
    'photo' => '',
    'name' => '',
    'type' => '',
    'text' => '',
])

<article {{ $attributes->merge(['class' => 'review-card']) }}>
    <div class="review-card__top">
        <img class="review-card__photo" src="{{ asset($photo) }}" alt="" loading="lazy" />
        <h3 class="review-card__name">{!! $name !!}</h3>
        <p class="review-card__type">{{ $type }}</p>
    </div>
    <div class="review-card__bottom">
        <p class="review-card__text">{{ $text }}</p>
    </div>
</article>

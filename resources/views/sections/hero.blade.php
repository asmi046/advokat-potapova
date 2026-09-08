@php
    $hero = config('hero.hero');
@endphp

<section class="hero" aria-labelledby="hero-title">
    <div class="container hero__inner">
        <div class="hero__content">
            <h1 id="hero-title" class="hero__title">{!! $hero['title'] !!}</h1>
            <p class="hero__role">{{ $hero['role'] }}</p>
            <p class="hero__subtitle">{{ $hero['subtitle'] }}</p>
            <div class="hero__cta">
                <x-button
                    :type="$hero['button']['type']"
                    :url="$hero['button']['url']"
                    :label="$hero['button']['label']"
                />
            </div>
        </div>

        <div class="hero__photo">
            <img src="{{ asset($hero['photo']) }}" alt="{{ config('site.name') }}" loading="eager" />
        </div>
    </div>
</section>

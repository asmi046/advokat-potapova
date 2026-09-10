@php
    $cta = config('hero.cta');
@endphp

<section class="cta" aria-labelledby="cta-title">
    <div class="container cta__inner">
        <x-heading id="cta-title">{!! $cta['title'] !!}</x-heading>
        <p class="cta__text">{{ $cta['text'] }}</p>
        <div class="cta__btn">
            <x-button
                :type="$cta['button']['type']"
                :url="$cta['button']['url']"
                :label="$cta['button']['label']"
            />
        </div>
    </div>

    <img class="cta__smile" src="{{ asset($cta['smile_logo']) }}" alt="" aria-hidden="true" loading="lazy" />
</section>

@php
    $about = config('about');
@endphp

<section class="about" id="about" aria-labelledby="about-title">
    <div class="container">
        <div class="about__grid">
            <div class="about__photo-wrap">
                <div class="about__photo">
                    <img src="{{ asset($about['photo']) }}" alt="{{ config('site.name') }}" loading="lazy" />
                </div>
                <div class="about__bar" aria-hidden="true">
                    <img src="{{ asset($about['smile_logo']) }}" alt="" loading="lazy" />
                </div>
            </div>

            <div class="about__content">
                <x-heading id="about-title">Обо мне</x-heading>

                <div class="about__text">
                    @foreach ($about['paragraphs'] as $paragraph)
                        <p class="about__paragraph">{{ $paragraph }}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

@php
    $cases = config('cases');
    $carouselId = 'cases';
@endphp

<section class="cases" id="cases" aria-labelledby="cases-title">
    <div class="container">
        <div class="cases__top">
            <x-heading id="cases-title">Мои кейсы</x-heading>

            <div class="cases__controls">
                <button
                    type="button"
                    class="cases__nav"
                    data-carousel-prev="{{ $carouselId }}"
                    aria-label="Предыдущий кейс"
                >
                    <svg viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M7 1L1 7L7 13M1 7H17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                <button
                    type="button"
                    class="cases__nav"
                    data-carousel-next="{{ $carouselId }}"
                    aria-label="Следующий кейс"
                >
                    <svg viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M11 1L17 7L11 13M17 7H1" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </div>
        </div>

        <div class="cases__carousel" data-carousel="{{ $carouselId }}">
            <div class="cases__carousel-track">
                @foreach ($cases as $case)
                    <x-case-card :title="$case['title']" :description="$case['description']" />
                @endforeach
            </div>
        </div>
    </div>
</section>

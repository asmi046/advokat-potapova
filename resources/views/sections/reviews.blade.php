@php
    $reviews = config('reviews');
    $carouselId = 'reviews';
@endphp

<section class="reviews" id="reviews" aria-labelledby="reviews-title">
    <div class="container">
        <div class="reviews__top">
            <x-heading id="reviews-title">Отзывы</x-heading>

            <div class="reviews__controls">
                <button
                    type="button"
                    class="reviews__nav"
                    data-carousel-prev="{{ $carouselId }}"
                    aria-label="Предыдущий отзыв"
                >
                    <svg viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M7 1L1 7L7 13M1 7H17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                <button
                    type="button"
                    class="reviews__nav"
                    data-carousel-next="{{ $carouselId }}"
                    aria-label="Следующий отзыв"
                >
                    <svg viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M11 1L17 7L11 13M17 7H1" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </div>
        </div>

        <div class="reviews__carousel" data-carousel="{{ $carouselId }}">
            <div class="reviews__carousel-track">
                @foreach ($reviews as $review)
                    <x-review-card
                        :photo="$review['photo']"
                        :name="$review['name']"
                        :type="$review['type']"
                        :text="$review['text']"
                    />
                @endforeach
            </div>
        </div>
    </div>
</section>

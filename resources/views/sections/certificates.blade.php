@php
    $certificates = config('certificates');
    $carouselId = 'certificates';
@endphp

<section class="certificates" id="certificates" aria-labelledby="certificates-title">
    <div class="container">
        <div class="certificates__top">
            <x-heading id="certificates-title">Мои грамоты</x-heading>

            <div class="certificates__controls">
                <button type="button" class="certificates__nav" data-carousel-prev="{{ $carouselId }}"
                    aria-label="Предыдущий сертификат">
                    <svg viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M7 1L1 7L7 13M1 7H17" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </button>
                <button type="button" class="certificates__nav" data-carousel-next="{{ $carouselId }}"
                    aria-label="Следующий сертификат">
                    <svg viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M11 1L17 7L11 13M17 7H1" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
        </div>

        <div class="certificates__carousel" data-carousel="{{ $carouselId }}">
            <div class="certificates__carousel-track">
                @foreach ($certificates as $cert)
                    <div class="certificates__slide">
                        <a href="{{ asset($cert['image']) }}" class="glightbox" data-gallery="certificates-gallery"
                            data-title="{{ $cert['title'] }}">
                            <img src="{{ asset($cert['image']) }}" alt="{{ $cert['title'] }}" loading="lazy"
                                class="certificates__image" />
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

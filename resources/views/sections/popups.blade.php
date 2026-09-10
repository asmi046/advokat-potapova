@php
    use Illuminate\Support\Facades\File;

    $services = config('services.cards');
    $popupMap = [
        'popup-criminal' => 'criminal.html',
        'popup-civil' => 'civil.html',
    ];
@endphp

@foreach ($services as $card)
    @isset($card['popup'])
        @php
            $file = $popupMap[$card['popup']['id']] ?? null;
            $content = $file && File::exists(public_path('service_text/' . $file))
                ? File::get(public_path('service_text/' . $file))
                : null;
        @endphp

        <dialog class="popup" id="{{ $card['popup']['id'] }}" data-popup aria-labelledby="{{ $card['popup']['id'] }}-title">
            <button type="button" class="popup__close" data-popup-close aria-label="Закрыть">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path d="M6 6l12 12M18 6L6 18" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                </svg>
            </button>

            <div class="popup__inner">
                <h3 class="popup__title" id="{{ $card['popup']['id'] }}-title">{{ $card['title'] }}</h3>

                <div class="popup__content">
                    {!! $content !!}
                </div>

                <div class="popup__cta">
                    <x-button type="primary" url="#contacts" label="Связаться со мной" />
                </div>
            </div>
        </dialog>
    @endisset
@endforeach

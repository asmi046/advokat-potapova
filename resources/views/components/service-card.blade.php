@props([
    'modifier' => 'light',
    'title' => '',
    'list' => [],
])

@php
    $titleClass = 'heading-h3 ' . ($modifier === 'dark' ? 'heading-h3--light' : '');
@endphp

<div class="service-card service-card--{{ $modifier }}">
    <h3 {{ $attributes->merge(['class' => $titleClass]) }}>{!! $title !!}</h3>

    <ul class="service-card__list">
        @foreach ($list as $item)
            <li class="service-card__item">{{ $item }}</li>
        @endforeach
    </ul>

    {{ $slot }}
</div>

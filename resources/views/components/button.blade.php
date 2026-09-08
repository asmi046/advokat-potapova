@props([
    'type' => 'primary',
    'url' => '#',
    'label' => '',
    'tag' => 'a',
])

@php
    $modifier = $type === 'secondary' ? 'btn--secondary' : null;
    $classes = trim('btn ' . ($modifier ?? ''));
@endphp

@if ($tag === 'button')
    <button type="button" {{ $attributes->merge(['class' => $classes]) }}>
        {{ $label }}
    </button>
@else
    <a href="{{ $url }}" {{ $attributes->merge(['class' => $classes]) }}>
        {{ $label }}
    </a>
@endif

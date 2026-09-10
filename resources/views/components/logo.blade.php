@props([
    'src' => '',
    'alt' => '',
    'variant' => '',
])

@php
    $classes = trim('logo ' . ($variant ? "logo--{$variant}" : ''));
@endphp

<a href="/" {{ $attributes->merge(['class' => $classes]) }} aria-label="На главную">
    <img src="{{ asset($src) }}" alt="{{ $alt }}" loading="lazy" />
</a>

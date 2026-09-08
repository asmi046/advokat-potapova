@props([
    'level' => 'h2',
    'center' => false,
    'cta' => false,
])

@php
    $tag = in_array($level, ['h1', 'h2', 'h3', 'h4', 'h5', 'h6'], true) ? $level : 'h2';
    $classes = trim('heading ' . ($center ? 'heading--center' : '') . ' ' . ($cta ? 'heading--cta' : ''));
@endphp

<{{ $tag }} {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</{{ $tag }}>

@props([
    'src' => '',
    'alt' => '',
])

<a href="/" class="logo" aria-label="На главную">
    <img src="{{ asset($src) }}" alt="{{ $alt }}" loading="lazy" />
</a>

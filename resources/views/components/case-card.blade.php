@props([
    'title' => '',
    'description' => '',
])

<div class="case-card">
    <div class="case-card__inner">
        <h3 class="case-card__title">{!! $title !!}</h3>
        <p class="case-card__desc">{{ $description }}</p>
    </div>
</div>

@php
    $site = config('site');
    $og = $site['og'];
    $twitter = $site['twitter'];
    $url = url()->current();
    $ogImage = $og['image'] ? asset($og['image']) : '';
    $twImage = $twitter['image'] ? asset($twitter['image']) : '';
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', $site['locale']) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $site['title'] }}</title>
    <meta name="description" content="{{ $site['description'] }}">
    <meta name="keywords" content="{{ $site['keywords'] }}">
    <meta name="author" content="{{ $site['author'] }}">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#C1AB74">
    <link rel="canonical" href="{{ $url }}">

    {{-- Open Graph --}}
    <meta property="og:type" content="{{ $og['type'] }}">
    <meta property="og:site_name" content="{{ $og['site_name'] }}">
    <meta property="og:title" content="{{ $og['title'] }}">
    <meta property="og:description" content="{{ $og['description'] }}">
    <meta property="og:url" content="{{ $url }}">
    <meta property="og:locale" content="{{ $og['locale'] }}">
    @if ($ogImage)
        <meta property="og:image" content="{{ $ogImage }}">
        <meta property="og:image:alt" content="{{ $og['image_alt'] }}">
        <meta property="og:image:type" content="image/webp">
        <meta property="og:image:width" content="1200">
        <meta property="og:image:height" content="630">
    @endif

    {{-- Twitter --}}
    <meta name="twitter:card" content="{{ $twitter['card'] }}">
    <meta name="twitter:title" content="{{ $twitter['title'] }}">
    <meta name="twitter:description" content="{{ $twitter['description'] }}">
    @if ($twImage)
        <meta name="twitter:image" content="{{ $twImage }}">
    @endif

    {{-- Favicon --}}
    <link rel="icon" href="{{ asset('favicon.ico') }}">

    {{-- Vite assets --}}
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])

    {{-- Schema.org --}}
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "Attorney",
        "name": "{{ $site['name'] }}",
        "description": "{{ $site['description'] }}",
        "url": "{{ url('/') }}",
        "telephone": "{{ config('contacts.phone_link') }}",
        "email": "{{ config('contacts.email') }}",
        "image": "{{ asset('img/hero.webp') }}"
    }
    </script>
</head>
<body>
    @include('sections.header')

    <main role="main">
        {{ $slot }}
    </main>

    @include('sections.footer')
</body>
</html>

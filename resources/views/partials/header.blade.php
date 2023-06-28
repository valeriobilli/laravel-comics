<header class="p-3 text-center">
    <img class="logo" src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="DC Logo">
    @foreach ($links as $link)
        <a href="/">{{ $link }}</a>
    @endforeach
</header>
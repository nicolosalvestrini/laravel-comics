@php
    $navbarItems = config('navbar');
@endphp

<header class="container">
    <div class="d-flex align-items-center py-2 justify-content-between">

        <img
            src="{{ Vite::asset('resources/img/dc-logo.png') }}"
            alt="DC Comics Logo"
            class="logo-dc"
        >

        <nav>
            <ul class="nav style">
                @foreach($navbarItems as $item)
                    <li class="nav-item">
                        <a
                            class="nav-link text-dark {{ $item['active'] ? 'active' : '' }}"
                            href="{{ $item['href'] }}"
                        >
                            {{ $item['label'] }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </nav>

    </div>
</header>
@php
    $navbarItems = config('navbar');
@endphp

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
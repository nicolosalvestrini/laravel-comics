@php
    $footerData = config('footer');
@endphp

<section class="pt-5 pb-5">
    <div class="container">

        <div class="row">

            <div class="col-md-3">

                @foreach($footerData as $section)

                    @if(in_array($section['title'], ['DC COMICS', 'SHOP']))

                        <ul class="list-unstyled mb-3">

                            <li class="fw-bold text-white fs-6 mb-2">
                                {{ $section['title'] }}
                            </li>

                            @foreach($section['links'] as $link)

                                <li>
                                    <a href="{{ $link['href'] }}" class="text-secondary text-decoration-none">
                                        {{ $link['label'] }}
                                    </a>
                                </li>

                            @endforeach

                        </ul>

                    @endif

                @endforeach

            </div>

            <div class="col-md-3">

                @foreach($footerData as $section)

                    @if($section['title'] == 'DC')

                        <ul class="list-unstyled mb-3">

                            <li class="fw-bold text-white fs-6 mb-2">
                                {{ $section['title'] }}
                            </li>

                            @foreach($section['links'] as $link)

                                <li>
                                    <a href="{{ $link['href'] }}" class="text-secondary text-decoration-none">
                                        {{ $link['label'] }}
                                    </a>
                                </li>

                            @endforeach

                        </ul>

                    @endif

                @endforeach

            </div>

            <div class="col-md-3">

                @foreach($footerData as $section)

                    @if($section['title'] == 'SITES')

                        <ul class="list-unstyled mb-3">

                            <li class="fw-bold text-white fs-6 mb-2">
                                {{ $section['title'] }}
                            </li>

                            @foreach($section['links'] as $link)

                                <li>
                                    <a href="{{ $link['href'] }}" class="text-secondary text-decoration-none">
                                        {{ $link['label'] }}
                                    </a>
                                </li>

                            @endforeach

                        </ul>

                    @endif

                @endforeach

            </div>

        </div>

    </div>
</section>
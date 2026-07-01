@php
    $comics = config('comics');
@endphp

<main class="bg-dark">

    <div class="container py-5">

        <section class="row">

            @foreach($comics as $comic)

                @include('components.card', ['comic' => $comic])

            @endforeach

        </section>

        <button class="button d-block mx-auto">
            LOAD MORE
        </button>

    </div>

</main>
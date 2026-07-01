<footer>

    <section class="backround logo-bg overflow-hidden">
        <div class="container d-flex justify-content-start position-relative">
            <img
                src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}"
                alt="DC Logo"
                class="backround-logo"
            >
            @include('partials.footer-link')
        </div>
    </section>

    <section class="bg-dark">
        <div class="container pt-4 pb-4 d-flex justify-content-between align-items-center">
            <section>
                <button class="btn border-primary text-white">
                    SIGN-UP NOW!
                </button>
            </section>
            <section>
                <ul class="list-unstyled d-flex align-items-center mb-0">
                    <li class="fw-bold text-primary fs-6">
                        FOLLOW US
                    </li>
                    <li>
                        <a href="#">
                            <img
                                src="{{ Vite::asset('resources/img/footer-facebook.png') }}"
                                alt="Facebook"
                                class="image-dimension"
                            >
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img
                                src="{{ Vite::asset('resources/img/footer-twitter.png') }}"
                                alt="Twitter"
                                class="image-dimension"
                            >
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img
                                src="{{ Vite::asset('resources/img/footer-youtube.png') }}"
                                alt="YouTube"
                                class="image-dimension"
                            >
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img
                                src="{{ Vite::asset('resources/img/footer-pinterest.png') }}"
                                alt="Pinterest"
                                class="image-dimension"
                            >
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img
                                src="{{ Vite::asset('resources/img/footer-periscope.png') }}"
                                alt="Periscope"
                                class="image-dimension"
                            >
                        </a>
                    </li>
                </ul>
            </section>
        </div>
    </section>
    
</footer>
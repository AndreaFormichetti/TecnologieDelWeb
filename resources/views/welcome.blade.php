@extends('layouts.main')


@section('content')
    <!-- ****** Welcome Post Area Start ****** -->
    <div class="slider">
        <div class="intestazione ">
            <strong> Riprendi l'ascolto </strong>
        </div>
        <section class="welcome-post-sliders owl-carousel">

        <!-- Single Slide -->
        <div class="welcome-single-slide">
            <!-- Post Thumb -->
            <img src="https://i1.wp.com/www.lercio.it/wp-content/uploads/2014/02/galeazzi.jpg?fit=609%2C343&ssl=1" alt="">
            <!-- Overlay Text -->
                <div class="project_title">
                <div class="post-date-commnents d-flex">
                    <a href="#">May 19, 2017</a>
                    <a href="#">5 Comment</a>
                </div>
                <a href="#">
                    <h5>“I’ve Come and I’m Gone”: A Tribute to Istanbul’s Street</h5>
                </a>
            </div>
        </div>

        <!-- Single Slide -->
        <div class="welcome-single-slide">
            <!-- Post Thumb -->
            <img src="data:image/jpeg;base64,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" alt="">
            <!-- Overlay Text -->
            <div class="project_title">
                <div class="post-date-commnents d-flex">
                    <a href="#">May 19, 2017</a>
                    <a href="#">5 Comment</a>
                </div>
                <a href="#">
                    <h5>“I’ve Come and I’m Gone”: A Tribute to Istanbul’s Street</h5>
                </a>
            </div>
        </div>

        <!-- Single Slide -->
        <div class="welcome-single-slide">
            <!-- Post Thumb -->
            <img src="{{ asset('img/bg-img/slide-3.jpg') }}" alt="">
            <!-- Overlay Text -->
            <div class="project_title">
                <div class="post-date-commnents d-flex">
                    <a href="#">May 19, 2017</a>
                    <a href="#">5 Comment</a>
                </div>
                <a href="#">
                    <h5>“I’ve Come and I’m Gone”: A Tribute to Istanbul’s Street</h5>
                </a>
            </div>
        </div>

        <!-- Single Slide -->
        <div class="welcome-single-slide">
            <!-- Post Thumb -->
            <img src="{{ asset('img/bg-img/slide-4.jpg') }}" alt="">
            <!-- Overlay Text -->
            <div class="project_title">
                <div class="post-date-commnents d-flex">
                    <a href="#">May 19, 2017</a>
                    <a href="#">5 Comment</a>
                </div>
                <a href="#">
                    <h5>“I’ve Come and I’m Gone”: A Tribute to Istanbul’s Street</h5>
                </a>
            </div>
        </div>

        <!-- Single Slide -->
        <div class="welcome-single-slide">
            <!-- Post Thumb -->
            <img src="{{ asset('img/bg-img/slide-4.jpg') }}" alt="">
            <!-- Overlay Text -->
            <div class="project_title">
                <div class="post-date-commnents d-flex">
                    <a href="#">May 19, 2017</a>
                    <a href="#">5 Comment</a>
                </div>
                <a href="#">
                    <h5>“I’ve Come and I’m Gone”: A Tribute to Istanbul’s Street</h5>
                </a>
            </div>
        </div>

    </section>
    </div>

    <div class="slider">
        <div class="intestazione ">
            <strong> Piu votati </strong>
        </div>

        <!-- da generare automaticamente -->
        <section class="welcome-post-sliders owl-carousel">
            <!-- Single Slide -->
            <div class="welcome-single-slide">
                <!-- Post Thumb -->
                <img src="https://i1.wp.com/www.lercio.it/wp-content/uploads/2014/02/galeazzi.jpg?fit=609%2C343&ssl=1" alt="">
                <!-- Overlay Text -->
                <div class="project_title">
                    <div class="post-date-commnents d-flex">
                        <a href="#">Data pubblicazione?</a>
                        <a href="#">Prezzo?</a>
                    </div>
                    <a href="#">
                        <h5>Titolo libro</h5>
                    </a>
                </div>
            </div>

            <!-- Single Slide -->
            <div class="welcome-single-slide">
                <!-- Post Thumb -->
                <img src="data:image/jpeg;base64,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" alt="">
                <!-- Overlay Text -->
                <div class="project_title">
                    <div class="post-date-commnents d-flex">
                        <a href="#">May 19, 2017</a>
                        <a href="#">5 Comment</a>
                    </div>
                    <a href="#">
                        <h5>“I’ve Come and I’m Gone”: A Tribute to Istanbul’s Street</h5>
                    </a>
                </div>
            </div>

            <!-- Single Slide -->
            <div class="welcome-single-slide">
                <!-- Post Thumb -->
                <img src="{{ asset('img/bg-img/slide-3.jpg') }}" alt="">
                <!-- Overlay Text -->
                <div class="project_title">
                    <div class="post-date-commnents d-flex">
                        <a href="#">May 19, 2017</a>
                        <a href="#">5 Comment</a>
                    </div>
                    <a href="#">
                        <h5>“I’ve Come and I’m Gone”: A Tribute to Istanbul’s Street</h5>
                    </a>
                </div>
            </div>

            <!-- Single Slide -->
            <div class="welcome-single-slide">
                <!-- Post Thumb -->
                <img src="{{ asset('img/bg-img/slide-4.jpg') }}" alt="">
                <!-- Overlay Text -->
                <div class="project_title">
                    <div class="post-date-commnents d-flex">
                        <a href="#">May 19, 2017</a>
                        <a href="#">5 Comment</a>
                    </div>
                    <a href="#">
                        <h5>“I’ve Come and I’m Gone”: A Tribute to Istanbul’s Street</h5>
                    </a>
                </div>
            </div>

            <!-- Single Slide -->
            <div class="welcome-single-slide">
                <!-- Post Thumb -->
                <img src="{{ asset('img/bg-img/slide-4.jpg') }}" alt="">
                <!-- Overlay Text -->
                <div class="project_title">
                    <div class="post-date-commnents d-flex">
                        <a href="#">May 19, 2017</a>
                        <a href="#">5 Comment</a>
                    </div>
                    <a href="#">
                        <h5>“I’ve Come and I’m Gone”: A Tribute to Istanbul’s Street</h5>
                    </a>
                </div>
            </div>

        </section>
    </div>
    <!-- ****** Welcome Area End ****** -->

    <!-- ****** Categories Area Start ****** -->
    <section class="categories_area clearfix" id="about">
        <h3 class="flex-center categorie">Categorie</h3>
        <div class="container d-flex flex-row flex-wrap col-12 justify-content-md-center">
            <!-- da generare automaticamente -->
            <div class="categoria">
                    <div class="single_catagory wow fadeInUp" data-wow-delay=".3s">
                        <img src="{{ asset('img/catagory-img/1.jpg') }}" alt="">
                        <div class="catagory-title">
                            <a href="#">
                                <h5>demenziali</h5>
                            </a>
                        </div>
                    </div>
                 </div>
        </div>
    </section>
    <!-- ****** Categories Area End ****** -->








@endsection

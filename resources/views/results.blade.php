@extends('layouts.main')


@section('content')
    <section class="archive-area section_padding_80">
        <div class="container">
            <div class="row">

                <!-- Single Post -->
                <div class="single-wishlist">
                    <div class="single-post wow fadeInUp post-wishlist" data-wow-delay="0.1s">
                        <!-- Post Thumb -->
                        <div class="post-thumb results-image">
                            <img class="wishimage" src="img/blog-img/2.jpg" alt="">
                        </div>
                        <!-- Post Content -->
                        <div class="post-content">
                            <div class="post-meta d-flex">
                                <div class="post-author-date-area d-flex">
                                    <!-- Post Author -->
                                    <div class="post-author">
                                        <a href="#">autore</a>
                                    </div>
                                    <!-- Post Date -->
                                    <div class="post-date">
                                        <a href="#">categoria</a>
                                    </div>
                                </div>
                            </div>
                            <a href="#" style="">
                                <h4 class="post-headline">Titolo</h4>
                            </a>
                            <div class="descrizione-wishlist">
                                <h6>gli oranghi sono degli animali pacifici che provengono dalle case popolari tua mamma si fa le canne all'inferno insieme ad hitler e la fatina DEI DENTIIIIIYYYEAHH</h6>
                            </div>
                            <div class="post-comment-share-area d-flex">
                                <!-- Post Favourite -->
                                <div class="post-favourite pr-2">
                                    <i class="fa fa-heart-o" aria-hidden="true"></i> 4
                                </div>
                                <!-- Post Share -->
                                <div class="post-share">
                                    <a href="#"><i class="fas fa-shopping-cart pr-3" aria-hidden="true"></i></a>
                                </div>
                               <!-- mettici il bottone per aggiungere alla wishlist
                                <div class="post-share">
                                    <a href="#"><i class="fas fa-shopping-cart pr-3" aria-hidden="true"></i></a>
                                </div>
                                -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection

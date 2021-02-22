@extends('incs.base')

@section('content')

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Détail du projet</h2>
                    <ol>
                        <li><a href="/">Accueil/</a></li>
                        <li>{{ $project->title }}</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-8">
                        <div class="portfolio-details-slider swiper-container">
                            <div class="swiper-wrapper align-items-center">

                                <div class="swiper-slide">
                                    <img src="{{ $project->img1 }}" alt="">
                                </div>
                                @if(!empty($project->img2))
                                <div class="swiper-slide">
                                    <img src="{{ $project->img2 }}" alt="">
                                </div>
                                @endif
                                @if(!empty($project->img3))
                                <div class="swiper-slide">
                                    <img src="{{ $project->img3 }}" alt="">
                                </div>
                                @endif
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="portfolio-info">
                            <h3>Information</h3>
                            <ul>
                                <li><strong>Catégorie</strong>: <span style="text-transform: capitalize;">{{ $project->category }}</span></li>
                                <li><strong>Type</strong>: {{ $project->type }}</li>
                                <li><strong>Client</strong>: {{ $project->client }}</li>
                                @if(!empty($project->link))<li><strong>Lien</strong>: <a href="{{ $project->link }}">{{ $project->link }}</a></li>@endif
                                @if(!empty($project->sources))<li><strong>Sources</strong>: <a href="{{ $project->sources }}">{{ $project->sources }}</a></li>@endif
                            </ul>
                        </div>
                        <div class="portfolio-description">
                            <h2>{{ $project->title }}</h2>
                            <p>
                                {{ $project->desc }}
                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Portfolio Details Section -->

    </main><!-- End #main -->

@endsection

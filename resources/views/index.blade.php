@extends('incs.base')

@section('content')

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
        <div class="hero-container" data-aos="fade-in">
            <h1>Luca Alsina</h1>
            <p><span class="typed" data-typed-items="Étudiant, Développeur Back-End Autodidacte"></span></p>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="section-title">
                    <h2>Profil</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="row">
                    <div class="col-lg-4" data-aos="fade-right">
                        <img src="{{ asset('img/profile.jpg') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                        <div class="row">
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Date de naissance:</strong> <span>28 Juillet 2003</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Site WEB:</strong> <span><a href="https://alsinaluca.fr">www.alsinaluca.fr</a></span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Pays:</strong> <span>France</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Zone géographique:</strong> <span>Perpignan, Occitanie</span></li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Âge:</strong> <span>17</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Études:</strong> <span>Terminale Générale (en cours)</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Mail:</strong> <span>contact@alsinaluca.fr</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Status:</strong> <span>Étudiant</span></li>
                                </ul>
                            </div>
                        </div>
                        <p>
                            Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis.
                            Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus itaque neque. Aliquid amet quidem ut quaerat cupiditate. Ab et eum qui repellendus omnis culpa magni laudantium dolores.
                        </p>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Skills Section ======= -->
        <section id="skills" class="skills section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Skills</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="row skills-content">

                    <div class="col-lg-6" data-aos="fade-up">

                        <div class="progress">
                            <span class="skill">Design <i class="val">40%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" style="background-color: mediumseagreen;" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">HTML / CSS <i class="val">60%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" style="background-color: darkorange;" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">JavaScript <i class="val">30%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" style="background-color: yellow;" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">Bootstrap <i class="val">50%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" style="background-color: #6f42c1;" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">Français (Qualité de rédaction & orthographe)<i class="val">80%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

                        <div class="progress">
                            <span class="skill">PHP <i class="val">90%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" style="background-color: royalblue;" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">Laravel <i class="val">70%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" style="background-color: red;" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">Photoshop <i class="val">50%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" style="background-color: darkblue;" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">Gestion de projets <i class="val">75%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" style="background-color: #18d26e;" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">Prestation orale (Présentations, entretiens, ...) <i class="val">85%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </section><!-- End Skills Section -->

        <!-- ======= Resume Section ======= -->
        <section id="resume" class="resume">
            <div class="container">

                <div class="section-title">
                    <h2>Parcours</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="row">
                    <div class="col-lg-6" data-aos="fade-up">
                        <h3 class="resume-title">Formations</h3>
                        <div class="resume-item pb-0">
                            <h4>Udemy</h4>
                            <p><em>Formations diverses achetées sur le site Udemy afin d'approfondir dans mes domaines d'apprentissage.</em></p>
                            <ul>
                                <li>Cours de développement WEB Front-End avec HTML & CSS</li>
                                <li>Cours de développement POO Back-End avec PHP</li>
                                <li>Cours de développement Back-End MVC avec Laravel</li>
                            </ul>
                        </div>

                        <h3 class="resume-title">Scolarité</h3>
                        <div class="resume-item">
                            <h4>Bac Général</h4>
                            <h5>2018 - ...</h5>
                            <p><em>LPO Pablo Picasso, Perpignan, France</em></p>
                            <ul>
                                <li>2<sup>nde</sup> Générale option SI & CIT</li>
                                <li>1<sup>ère</sup> Générale spécialité Maths, SI, SES</li>
                                <li>T<sup>le</sup> Générale spécialité SI, SES</li>
                            </ul>
                        </div>
                        <!--
                        <div class="resume-item">
                          <h4>Bachelor of Fine Arts &amp; Graphic Design</h4>
                          <h5>2010 - 2014</h5>
                          <p><em>Rochester Institute of Technology, Rochester, NY</em></p>
                          <p>Quia nobis sequi est occaecati aut. Repudiandae et iusto quae reiciendis et quis Eius vel ratione eius unde vitae rerum voluptates asperiores voluptatem Earum molestiae consequatur neque etlon sader mart dila</p>
                        </div>
                        -->
                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <h3 class="resume-title">Expérience professionnelle</h3>
                        <div class="resume-item">
                            <h4>Développeur d'extensions de panneaux d'administration pour des produits en PHP</h4>
                            <h5>Novembre 2018</h5>
                            <p><em>Selecom Critical Coms, Prades, France</em></p>
                            <ul>
                                <li>Lead in the design, development, and implementation of the graphic, layout, and production communication materials</li>
                                <li>Delegate tasks to the 7 members of the design team and provide counsel on all aspects of the project. </li>
                                <li>Supervise the assessment of all graphic materials in order to ensure quality and accuracy of the design</li>
                                <li>Oversee the efficient use of production project budgets ranging from $2,000 - $25,000</li>
                            </ul>
                        </div>
                        <div class="resume-item">
                            <h4>Responsable support & développeur WEB</h4>
                            <h5>Octobre 2019 - Mai 2020</h5>
                            <p><em>OuiHeberg</em></p>
                            <ul>
                                <li>Developed numerous marketing programs (logos, brochures,infographics, presentations, and advertisements).</li>
                                <li>Managed up to 5 projects or tasks at a given time while under pressure</li>
                                <li>Recommended and consulted with clients on the most appropriate graphic design</li>
                                <li>Created 4+ design presentations and proposals a month for clients and account managers</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Resume Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Portfolio</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="row" data-aos="fade-up">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">Tous</li>
                            <li data-filter=".solo">Solo</li>
                            <li data-filter=".equipe">Collaboration</li>
                            <li data-filter=".autre">Autre</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

                @foreach($projects as $project)
                        <div class="col-lg-4 col-md-6 portfolio-item {{ $project->category }}">
                            <div class="portfolio-wrap">
                                <img src="{{ $project->img1 }}" class="img-fluid" alt="">
                                <div class="portfolio-links">
                                    <a href="{{ $project->img1 }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="{{ $project->title }}"><i class="bx bx-plus"></i></a>
                                    <a href="{{ route('project', $project->id) }}" title="Plus d'informations"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                @endforeach

                </div>

            </div>
        </section><!-- End Portfolio Section -->

    </main><!-- End #main -->

@endsection

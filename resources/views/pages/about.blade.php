@extends('layout.app')


@section('section')
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""
                style="transform: translateY(-71.6667px);"></div>
            <div class="container">
                <div class="banner_content text-center">
                    <h2>About Me</h2>
                    <div class="page_link">
                        <a href="index.html">Home</a>
                        <a href="about-us.html">About Me</a>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="welcome_area p_120">
        <div class="container">
            <div class="row welcome_inner">
                <div class="col-lg-6">
                    <div class="welcome_text">
                        <h4>About Myself</h4>
                        <p>I am a student at the Bangladesh University of Business and Technology (BUBT) currently doing
                            my Bachelor of Science (B.Sc) in Computer Science and Engineering (CSE). I am an open-source
                            Contributor and a web and app development addict.</p>

                        <h3 class="text-dark">Education Qualification</h3>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item text-dark">B.Sc. in Computer Science & Engineering <br>
                                <span>Bangladesh University of Business and Technology (BUBT)</span> <br>
                                <span>2020-2023</span>
                            </li>
                            <li class="list-group-item text-dark">Higher Secondary School Certificate <br>
                                <span>Adina Fazlul Haque Govt. Collage</span><br>
                                <span>2018</span>
                            </li>
                            <li class="list-group-item text-dark">Seondary School Certificate <br>
                                <span>Humayun Reza High School</span><br>
                                <span>2016</span>
                            </li>
                        </ul>



                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="tools_expert">
                        <h3>Skills</h3>
                        <div class="skill_main">
                            <div class="skill_item">
                                <h4><img src="{{ asset('assets/img/icons/html.png') }}" alt=""
                                        class="image-icon">HTML <span class="counter">70</span>%</h4>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                                        aria-valuemax="100" style="width: 70%;"></div>
                                </div>
                            </div>
                            <div class="skill_item">
                                <h4><img src="{{ asset('assets/img/icons/css.png') }}" alt="" class="image-icon">CSS
                                    <span class="counter">55</span>%
                                </h4>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0"
                                        aria-valuemax="100" style="width: 55%;"></div>
                                </div>
                            </div>
                            <div class="skill_item">
                                <h4><img src="{{ asset('assets/img/icons/js.png') }}" alt=""
                                        class="image-icon">Javascript <span class="counter">60</span>%</h4>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                                        aria-valuemax="100" style="width: 60%;"></div>
                                </div>
                            </div>
                            <div class="skill_item">
                                <h4><img src="{{ asset('assets/img/icons/bootstrap.png') }}" alt=""
                                        class="image-icon">Bootstrap <span class="counter">60</span>%</h4>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                                        aria-valuemax="100" style="width: 60%;"></div>
                                </div>
                            </div>
                            <div class="skill_item">
                                <h4><img src="{{ asset('assets/img/icons/php.png') }}" alt="" class="image-icon">PHP
                                    <span class="counter">70</span>%
                                </h4>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                                        aria-valuemax="100" style="width: 70%;"></div>
                                </div>
                            </div>
                            <div class="skill_item">
                                <h4><img src="{{ asset('assets/img/icons/laravel.png') }}" alt=""
                                        class="image-icon">Laravel <span class="counter">30</span>%</h4>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0"
                                        aria-valuemax="100" style="width: 30%;"></div>
                                </div>
                            </div>
                            <div class="skill_item">
                                <h4><img src="{{ asset('assets/img/icons/sql.png') }}" alt=""
                                        class="image-icon">MySQL <span class="counter">75</span>%</h4>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                        aria-valuemax="100" style="width: 75%;"></div>
                                </div>
                            </div>
                            <div class="skill_item">
                                <h4><img src="{{ asset('assets/img/icons/java.png') }}" alt=""
                                        class="image-icon">Java <span class="counter">65</span>%</h4>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0"
                                        aria-valuemax="100" style="width: 65%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

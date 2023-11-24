@extends('layout.app')


@section('section')
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""
                style="transform: translateY(-71.6645px);"></div>
            <div class="container">
                <div class="banner_content text-center">
                    <h2>Portfolio</h2>
                    <div class="page_link">
                        <a href="index.html">Home</a>
                        <a href="portfolio.html">Portfolio</a>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="projects_area p_120">
        <div class="container">
            <div class="main_title">
                <h2>Recent Completed Projects</h2>
                {{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p> --}}
            </div>
            <div class="projects_fillter">
                <ul class="filter list">
                    <li class="active" data-filter="*"><a href="#">All Categories</a></li>
                </ul>
            </div>
            <div class="projects_inner row" style="position: relative; height: 738px;">
                @foreach ($projects as $project)
                    <div class="col-lg-4 col-sm-6 brand web border-1" style="position: absolute; left: 0px; top: 0px;">
                        <div class="projects_item">
                            <img class="{{ asset('assets/img') }}/-fluid"
                                src="{{ asset('assets/img') }}//projects/{{ $project['thumbnail'] }}" alt="">
                            <div class="projects_text">
                                <a href="{{ $project['details'] }}">
                                    <h4>{{ $project['name'] }}</h4>
                                </a>
                                <p>{{ $project['type'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </section>
@endsection

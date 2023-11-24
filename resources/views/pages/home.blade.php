@extends('layout.app')


@section('section')
    <section class="home_banner_area">
        <div class="banner_inner">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6">
                        <div class="banner_content">
                            <h5>This is me</h5>
                            <h2>Md. Al Emam</h2>
                            <h3>A Web and App Developer</h3>
                            <p>I am a student at the Bangladesh University of Business and Technology (BUBT) currently doing
                                my Bachelor of Science (B.Sc) in Computer Science and Engineering (CSE). I am an open-source
                                Contributor and a web and app development addict.</p>
                            {{-- <a class=" btn btn-lg btn-outline-info" href="#"><span class="small-text">Projects</span></a> --}}
                            {{-- <a class="banner_btn" href="{{ route('home.download') }}">Download CV</a> --}}

                            <div class="d-flex">
                                <a class="banner_btn mr-2" href="{{ route('home.projects') }}"><span
                                        class="small-text">Projects</span></a>

                                <form action="{{ route('home.download') }}" method="post">
                                    @csrf
                                    <button type="submit" class="banner_btn border-0">Download CV</button>
                                </form>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="home_left_img">
                            <img src="{{ asset('assets/img') }}//banner/home-left-1.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

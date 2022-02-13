@extends('layouts.user')

@section('header')
<style>
    #hero {
        background: url('{{asset('user/images/blog.jpg')}}') top center;
        background-repeat: no-repeat;
        width: 100%;
        background-size: cover;
    }

    .article-body {
        margin-top: 10rem;
    }

    /* .row .col-sm-9 {
    width: 00px;
} */

    .section-header {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .form-control {
        /* border-radius: 50px; */
        height: 48px;
    }

    .section-header .input-group input {
        padding: 0 10px 0 20px;
        background: #E9EEF2;
        height: 50px;
        margin-right: 20px;
    }

    .section-header .card-search-article {
        width: 650px;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 70px 30px;
        height: 100px;
        background: #fff;
        box-shadow: 1px 2px 24px 10px rgba(0, 0, 0, 0.1);
    }

    /* .card-search-article .input-group-append {
    background: #28A745;
    width: 85px;
    height: 50px;
    padding-left: 20px;
    margin-left: 20px;
} */

    .input-group-append .btn {
        padding: 0 2em;
        font-size: 14px;
        height: 50px;
        text-transform: uppercase;
        letter-spacing: 2.5px;
        font-weight: 500;
        color: #000;
        background-color: #706C2E;
        border: none;
        box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease 0s;
        cursor: pointer;
        outline: none;
    }

    .input-group-append .btn:hover {
        background-color: #fff;
        border: #706C2E solid;
        box-shadow: 0px 15px 20px rgba(223, 223, 223, 0.83);
        color: #fff;
        transform: translateY(-7px);
    }

    .input-group-append .btn:active {
        transform: translateY(-1px);
    }

    .input-group-append .btn i {
        color: #fff;
    }

    .input-group-append .btn:hover i {
        color: #474747;
    }

    .card-footer {
        background: transparent;
    }

    .card-footer .btn {
        font-size: 12px;
        letter-spacing: 1px;
        display: inline-block;
        text-align: center;
        font-weight: bold;
        padding: 0.7em 1em;
        border: 3px solid #706C2E;
        border-radius: 2px;
        position: relative;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.1);
        color: #706C2E;
        text-decoration: none;
        transition: 0.3s ease all;
        z-index: 1;
    }

    .card-footer .btn:before {
        transition: 0.5s all ease;
        position: absolute;
        top: 0;
        left: 50%;
        right: 50%;
        bottom: 0;
        opacity: 0;
        content: '';
        background-color: #706C2E;
        z-index: -1;
    }

    .card-footer .btn:hover,
    .card-footer .btn:focus {
        color: white;
    }

    .card-footer .btn:hover:before,
    .card-footer .btn:focus:before {
        transition: 0.5s all ease;
        left: 0;
        right: 0;
        opacity: 1;
    }

    .card-footer .btn:active {
        transform: scale(0.9);
    }

    div a {
        color: #706C2E;
        text-decoration: none;
    }

    div a:hover {
        color: #706C2E;
    }

    .section-header .input-group {
        width: 600px;
        height: 50px;
        /* border-top-left-radius: 25px;
    border-bottom-left-radius: 25px; */
    }

    /* ============= Mobile Device ============= */
    @media (max-width: 576px) {
        #article .section-header {
            margin: 0 10px 0 5px;
        }

        .section-header .card-search-article {
            width: 300px;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 50px 20px;
            height: 40px;
            background: #fff;
            box-shadow: 1px 2px 24px 10px rgba(0, 0, 0, 0.1);
        }

        .section-header .input-group {
            height: 40px;
            width: 300px;
        }

        .section-header .input-group input {
            font-size: 10px;
            height: 40px;
        }

        .input-group-append .btn {
            height: 40px;
        }

        #article .article-header {
            margin: 0 10px 0 13px;
        }

        .article-body {
            margin-top: 70px;
        }

        .article-body .article-inner .row {
            display: flex;
            flex-direction: column-reverse;
        }

        /* .article-body .article-inner .row .col-sm-9 {
        display: flex;
        flex-direction: column-reverse;
    } */

        .card-deck {
            margin: 50px 20px 0 11px;
        }

        .card-deck .card .row {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            align-content: center;
        }

        .no-gutters .col-md-8 .card-body .card-text {
            text-align: justify;
        }

        .col-sm-3 .latest-post {
            margin-top: 50px;
        }

    }
</style>
@endsection

@section('hero')
<h1>Artikel Kami</h1>
<h2>Kumpulan artikel-artikel mental health, keluarga, dan tips komunikasi</h2>
@endsection

@section('content')
{{-- ====================== Article Section ===================== --}}
<section id="article" class="container">
    <div class="article-header">
        <div class="header-article">
            <div class="section-header">
                <h3 class="section-title" style="padding-bottom: 10px;">Artikel Kami</h3>
                <form action="{{route('article')}}" class="mt-5">
                    <div class="card-search-article wow zoomIn">
                        <div class="input-group">
                            <input type="text" name="s" value="{{Request::get('s')}}" placeholder="Search title/topics?"
                                class="form-control bg-none border-0">
                        </div>
                        <div class="input-group-append border-0">
                            <button type="submit" class="btn text-success"><i class="fa fa-search"></i></button>
                        </div>
                    </div>

                </form>
                <!-- <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p> -->
            </div>
        </div>

        <div class="article-body">
            <div class="article-inner">
                <div class="row">
                    <div class="col-sm-9">
                        @if (empty(request()->segment(2)) )
                        @component('user.component.all_article', ['articles'=> $articles])
                        @endcomponent
                        @else
                        @component('user.component.single_article', ['article'=> $articles])
                        @endcomponent
                        @endif
                    </div>
                    <div class="col-sm-3">
                        {{-- <div class="mb-3 font-weight-bold categories">Categories</div>
                        @foreach ($other as $item)
                        <div class="wow zoomIn">
                            <h6 class="card-title" style="color: #666666 !important;">
                                <a href="{{route('article.show', [$item->slug])}}"> <i class="fa fa-dot-circle-o"
                                        aria-hidden="true"></i>
                                    {{$item->title}}
                                </a>
                            </h6>
                            <hr>
                        </div>
                        @endforeach --}}

                        <div class="mb-3 font-weight-bold latest-post">Latest Posts</div>
                        @foreach ($other as $item)
                        <div class="wow zoomIn">
                            <h6 class="card-title" style="color: #666666 !important;">
                                <a href="{{route('article.show', [$item->slug])}}"> <i class="fa fa-dot-circle-o"
                                        aria-hidden="true"></i>
                                    {{$item->title}}
                                </a>
                            </h6>
                            <hr>
                        </div>
                        @endforeach


                    </div>
                </div>
            </div>
        </div>

</section>
@endsection
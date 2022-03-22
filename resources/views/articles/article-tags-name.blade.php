<?php use App\Http\Controllers\ArticleController; ?>

@extends('layouts.layout')

@section('content')
    <!-- component -->
    <link rel="stylesheet" href="https://cdn.tailgrids.com/tailgrids-fallback.css" />

    <style>
        .carousel-open:checked+.carousel-item {
            position: static;
            opacity: 100;
        }

        .carousel-item {
            -webkit-transition: opacity 0.6s ease-out;
            transition: opacity 0.6s ease-out;
        }

        #carousel-1:checked~.control-1,
        #carousel-2:checked~.control-2,
        #carousel-3:checked~.control-3 {
            display: block;
        }

        .carousel-indicators {
            list-style: none;
            margin: 0;
            padding: 0;
            position: absolute;
            bottom: 2%;
            left: 0;
            right: 0;
            text-align: center;
            z-index: 10;
        }

        #carousel-1:checked~.control-1~.carousel-indicators li:nth-child(1) .carousel-bullet,
        #carousel-2:checked~.control-2~.carousel-indicators li:nth-child(2) .carousel-bullet,
        #carousel-3:checked~.control-3~.carousel-indicators li:nth-child(3) .carousel-bullet {
            color: #0e1925;
        }

        .gradient-card {
            background: linear-gradient(10deg, #050507 0%, #040214 100%);
        }

        .gradient {
            background: linear-gradient(90deg, #000000 50%, #0f171a 100%);
        }

        @import url(https://fonts.googleapis.com/css?family=Montserrat);

        html,
        body {
            height: 50%;
        }

        body {
            background: #000000;
            font-family: 'Courier New', Courier, monospace;
        }

        svg {
            display: block;
            font: 10.5em 'Montserrat';
            width: 300px;
            height: 120px;
            margin: 0 auto;
        }

        .text-copy {
            fill: none;
            stroke: white;
            stroke-dasharray: 6% 29%;
            stroke-width: 5px;
            stroke-dashoffset: 0%;
            animation: stroke-offset 5.5s infinite linear;
        }

        .text-copy:nth-child(1) {
            stroke: #072c55;
            animation-delay: -1;
        }

        .text-copy:nth-child(2) {
            stroke: #060229;
            animation-delay: -2s;
        }

        .text-copy:nth-child(3) {
            stroke: #0078bd;
            animation-delay: -3s;
        }

        .text-copy:nth-child(4) {
            stroke: #c7c0c2;
            animation-delay: -4s;
        }

        .text-copy:nth-child(5) {
            stroke: #5031fd;
            animation-delay: -5s;
        }

        @keyframes stroke-offset {
            100% {
                stroke-dashoffset: -35%;
            }
        }

    </style>

    <div class="carousel mt-16 relative grid-cols-1 h-auto md:h-screen shadow-2xl  ">
        <div class="carousel-inner  h-auto md:h-screen relative overflow-hidden w-full">
            <!--Slide 1-->
            <input class="carousel-open  " type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden=""
                checked="checked">
            <div class="carousel-item absolute  opacity-0" style="height:50vh;">
                <div class="block  md:mt-0  h-auto md:h-screen w-full bg-gray-500 text-white text-5xl text-center"><img
                        src="https://www.ecestaticos.com/imagestatic/clipping/230/55f/23055f478d7df66637da852b3a1cc1ea/el-secreto-detras-del-increible-documental-the-beatles-get-back.jpg?mtime=1639152447"
                        class="w-full md:w-full lg:w-full xl:w-full " alt="">
                </div>
            </div>
            <label for="carousel-3"
                class="prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-white hover:text-gray-900 rounded-full bg-gray-900 hover:bg-white leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
            <label for="carousel-2"
                class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-white hover:text-gray-900 rounded-full bg-gray-900 hover:bg-white leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

            <!--Slide 2-->
            <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
            <div class="carousel-item absolute opacity-0" style="height:50vh;">
                <div
                    class="block  h-auto md:h-screen w-full md:w-full lg:w-full xl:w-full bg-gray-900 text-white text-5xl text-center">
                    <img src="https://www.wallpapertip.com/wmimgs/252-2525973_136-the-beatles-hd-wallpapers.jpg"
                        class="w-full md:w-full lg:w-full xl:w-full">

                </div>
            </div>
            {{-- https://cdnb.artstation.com/p/assets/images/images/026/589/373/large/wali-yudhistira-img-20200511-141547.jpg?1589197412&dl=1 --}}
            <label for="carousel-1"
                class="prev control-2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold  text-white hover:text-gray-900 rounded-full bg-gray-900 hover:bg-white leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
            <label for="carousel-3"
                class="next control-2 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold  text-white hover:text-gray-900 rounded-full bg-gray-900 hover:bg-white leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

            <!--Slide 3-->
            <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
            <div class="carousel-item absolute opacity-0" style="height:50vh;">
                <div class="block  h-auto md:h-screen w-full bg-green-500 text-white text-5xl text-center"><img
                        src="https://i.pinimg.com/originals/82/87/21/82872195d6b7a8d3af858dbfc71c4b86.jpg"
                        class="w-full md:w-full lg:w-full xl:w-full" alt=""></div>
            </div>
            <label for="carousel-2"
                class="prev control-3 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold  text-white hover:text-gray-900 rounded-full bg-gray-900 hover:bg-white leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
            <label for="carousel-1"
                class="next control-3 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold  text-white hover:text-gray-900 rounded-full bg-gray-900 hover:bg-white leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

            <!-- Puntos de posición de usuario-->
            <ol class="carousel-indicators">
                <li class="inline-block mr-3">
                    <label for="carousel-1"
                        class="carousel-bullet cursor-pointer block  text-4xl  text-gray-400 hover:text-gray-600">•</label>
                </li>
                <li class="inline-block mr-3">
                    <label for="carousel-2"
                        class="carousel-bullet cursor-pointer block text-4xl  text-gray-400 hover:text-gray-600">•</label>
                </li>
                <li class="inline-block mr-3">
                    <label for="carousel-3"
                        class="carousel-bullet cursor-pointer block text-4xl  text-gray-400 hover:text-gray-600">•</label>
                </li>
            </ol>

        </div>
    </div>

    <div class="w-full md:w-full gradient ">
        
        <svg-2 viewBox="0 0 960 300" class="w-full mb-2 md:w-full">
            <symbol id="s-text">
                <text text-anchor="middle" x="50%" y="80%">a</text>
            </symbol>

            <g class="g-ants">
                <use xlink:href="#s-text" class="text-copy"></use>
                <use xlink:href="#s-text" class="text-copy"></use>
                <use xlink:href="#s-text" class="text-copy"></use>
                <use xlink:href="#s-text" class="text-copy"></use>
                <use xlink:href="#s-text" class="text-copy"></use>
            </g>
        </svg-2>

        <!-- ====== Cards Section Start -->
        <div class=" grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 items-center ">
            
            @forelse ($articles as $article => $value )
                {{-- {{$value}} --}}
                <div class="container">
                    <section
                        class=" transform hover:scale-105 hover:brightness-150 motion-reduce:transform-none duration-500 lg:pt-[20px] pb-5 lg:pb-5 bg-#000">

                        <div class="bg-black border border-cyan-900  rounded-lg overflow-hidden ">
                            <img src="https://www.elindependiente.com/wp-content/uploads/2017/04/cropped-the-beatles-1440x808.jpg"
                                alt="image" class="w-full" />

                            <div class="gradient-card  p-8 sm:p-9 md:p-4 xl:p-5 text-center">

                                <div class="text-gray-400 pb-2 text-sm text-right"> <i
                                        class="fas fa-calendar-week text-sky-500"></i>
                                    {{ $rest = substr($value->article->created_at, 0, -9) }} </div>
                                {{-- <div class="text-gray-400" >{{$article->name }}  </div> --}}

                                <h3>
                                    <div href="javascript:void(0)"
                                        class="
                                              break-words
                                              font-semibold
                                              text-white text-2xl
                                              sm:text-[25px]
                                              md:text-2xl
                                              lg:text-[22px]
                                              xl:text-2xl
                                              2xl:text-[22px]
                                              mb-4
                                              block
                                              hover:text-primary
                                              ">
                                        {{ $value->article->title }}

                                </div>
                                </h3>
                                <p class="text-base text-justify break-words text-body-color px-5 leading-relaxed mb-7">
                                    {{ $rest = substr($value->article->content, 0, 180) . '...' }}
                                </p>
                                <a href="{{ route('crud.articles.show-articles', ['id' => $value->article->id]) }}"
                                    class="
                                    transition ease-in-out delay-150 bg-white
                                    hover:-translate-y-1 hover:scale-110 hover:bg-transparent duration-200
                                    inline-block py-2 px-7 border border-[#152e61] rounded-full
                                    font-semibold text-base text-gray-800
                                    hover:text-white        
                                    ">
                                    See More
                                </a>
                            </div>
                        </div>



                    </section>
                </div>

            @empty

            @endforelse

        </div>

    </div>
@endsection

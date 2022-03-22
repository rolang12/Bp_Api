<?php use App\Http\Controllers\ArticleController; ?>

@extends('layouts.layout')

@section('content')
    
    <style> 
        body {
            background: #000000;
            font-family: 'Courier New', Courier, monospace;
        }

        
        span-1{
            font-size: 52px;
            margin: 0 15px;
            line-height: .7;
            text-shadow: 0 0 2px rgba(255, 255, 255, 0.45);
            animation: span 3s ease-in infinite alternate;
            
        }
    </style>

    <!-- Inicio de Texto sobrepuesto Principal -->
        <p class="absolute fontpri ml-10 md:ml-28 top-28 md:top-60 text-white z-40">
            One of the best band in the history <br>
            Explore, enjoy and learn into the comunity!
        </p>
    <!-- Fin de Texto sobrepuesto Principal -->

    <!-- Inicio de Slider -->
        <div class="carousel mt-16 relative grid-cols-1 h-auto md:h-screen shadow-2xl  ">
            <div class="carousel-inner  h-auto md:h-screen relative overflow-hidden w-full">
                <!--Slide 1-->
                
                <input class="carousel-open  " type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden=""
                    checked="checked">
                <div class="carousel-item absolute  opacity-0" style="height:50vh;">
                    <div class="block  md:mt-0  h-auto md:h-screen w-full bg-gray-500 text-white text-5xl text-center"><img
                            src="https://www.ecestaticos.com/imagestatic/clipping/230/55f/23055f478d7df66637da852b3a1cc1ea/el-secreto-detras-del-increible-documental-the-beatles-get-back.jpg?mtime=1639152447"
                            class="w-full hover:contrast-150 duration-700 brightness-50 md:w-full lg:w-full xl:w-full " alt="">
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
                            class="w-full hover:contrast-150 duration-700 brightness-50 md:w-full lg:w-full xl:w-full">

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
                            class="w-full hover:contrast-150 duration-700 brightness-50 md:w-full lg:w-full xl:w-full" alt=""></div>
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
    <!-- Fin de Slider -->

    <!-- Inicio de Sección Categorías -->
        <div class="bg-white  text-center ">
            <div class="main">
                <span-1>C</span-1>
                <span-1>A</span-1>
                <span-1>T</span-1>
                <span-1>E</span-1>
                <span-1>G</span-1>
                <span-1 class="letter"></span-1>
                <span-1>R</span-1>
                <span-1>I</span-1>
                <span-1>E</span-1>          
                <span-1>S</span-1>
            </div>

            {{-- Images --}}
            <div class="text-white  pb-16 justify-evenly grid grid-cols-1  md:grid-cols-4">

                <div class="col mx-auto w-full h-full" >
                    <a  href="{{ route ('articles.articles-tags-name', ['tags' => 'john' ]) }}">
                        <img src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/john-lennon-el-senor-de-los-anillos-1637857124.jpg" alt=""
                        class="h-96 mx-auto brightness-50 hover:brightness-100 duration-200 " >
                    </a>
                </div>
                <div class="col mx-auto w-full h-full">
                    <a  href="{{ route ('articles.articles-tags-name', ['tags' => 'paul' ]) }}">
                        <img  src="https://los40es00.epimg.net/los40/imagenes/2020/12/23/los40classic/1608723212_225459_1608723516_noticia_normal.jpg" alt=""
                        class="h-96 mx-auto brightness-50 hover:brightness-100 duration-200 ">
            
                    </a>
                </div>
                <div class="col mx-auto w-full h-full">
                    <a  href="{{ route ('articles.articles-tags-name', ['tags' => 'ringo' ]) }}">
                        <img src="http://2.bp.blogspot.com/-vtbBqeey0HI/Ts6aUM0OUyI/AAAAAAAAACs/sXZXzqSjup0/s1600/Ringo%252BStarr%252BRINGO3.png" alt=""
                        class="h-96 mx-auto brightness-50 hover:brightness-100 duration-300 ">
                    </a>
                </div>
                <div class="col mx-auto w-full h-full">
                    <a  href="{{ route ('articles.articles-tags-name', ['tags' => 'george' ]) }}">
                        <img src="http://pm1.narvii.com/6822/cd9c847553ba8a0552a4ffb5f770601adca7394cv2_00.jpg" alt=""
                        class="h-96 mx-auto brightness-50 hover:brightness-100 duration-300 ">
                    </a>
                </div>
            </div>

        </div>
    <!-- Fin de Categorías -->

    <!-- Inicio de Recent Posts -->

        <div class="bg-red-900 py-10  text-center ">
            <p class="text-7xl animate-pulse duration-300 delay-200  text-white font-bold " >Recent Posts</p>
        </div>

            <div class="bg-red-900 px-3 h-max py-16 grid md:grid-cols-4 grid-cols-1 items-center">        
                @foreach ($recentPosts as $post)

                    <section class="px-4 col gradient-card-recent h-5/5 transform hover:scale-95 motion-reduce:transform-none hover:brightness-150 duration-500 lg:pt-[20px] pb-5 lg:pb-5 bg-#000">

                        <div class="rounded-lg overflow-hidden ">
                            <img src="{{ asset('/storage/images/'.$post->file)}}" alt="" class="w-max" />

                            <div class=" p-7 sm:p-9 md:p-4 xl:p-5 text-center">

                                <div class="text-gray-200 pb-2 text-sm text-right"> <i
                                        class="fas fa-calendar-week text-white"></i>
                                    {{ $rest = substr($post->created_at, 0, -9) }} </div>

                                <h3>
                                    <div href="javascript:void(0)"
                                        class="
                                                break-words
                                                font-semibold
                                                text-gray-100 text-2xl
                                                sm:text-[25px]
                                                md:text-2xl
                                                lg:text-[22px]
                                                xl:text-2xl
                                                2xl:text-[22px]
                                                mb-4
                                                block">
                                        {{ $post->title }}
                                </div>
                                </h3>

                                <a href="{{ route('crud.articles.show-articles', ['id' => $post->id]) }}"
                                    class="
                                    transition ease-in-out delay-150 bg-white
                                    hover:-translate-y-1 hover:scale-110 hover:bg-transparent duration-200
                                    inline-block py-2 px-7 border border-[#470404] rounded-full
                                    font-semibold text-base text-gray-800
                                    hover:text-white        
                                    ">
                                    See More
                                </a>
                            </div>
                        </div>

                    </section>

                @endforeach

            </div>

        </div>
    <!-- Fin de Recent Posts -->

    <div class="w-full md:w-full gradient ">

        <!-- Inicio de SVG Articles -->
        <svg viewBox="0 0 960 300" class="w-screen mb-2 md:w-max">
            <symbol id="s-text">
                <text text-anchor="middle" x="50%" y="80%">Articles</text>
            </symbol>

            <g class="g-ants">
                <use xlink:href="#s-text" class="text-copy"></use>
                <use xlink:href="#s-text" class="text-copy"></use>
                <use xlink:href="#s-text" class="text-copy"></use>
                <use xlink:href="#s-text" class="text-copy"></use>
                <use xlink:href="#s-text" class="text-copy"></use>
            </g>
        </svg> 
        <!-- Fin de SVG Articles -->
        
        @if(Session::has('message'))
            {!! Session::get('message') !!}
        @endif

        <livewire:articles.index/>
       
    </div>

    <!--Inicio REDES SOCIALES -->
        <a href="#" class="btn-flotante"><svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook" class="svg-inline--fa h-8 w-8 fa-facebook fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"></path></svg></a>
        <a href="#" class="btn-flotante2" ><svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="instagram" class="svg-inline--fa fa-instagram  h-8 w-8 fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path></svg></a>
    <!-- FIN REDES SOCIALES  -->

@endsection




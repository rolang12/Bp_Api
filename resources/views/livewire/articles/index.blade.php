<div>

    <div class=" grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 items-center ">
        @foreach ($articles as $article)
            <div class="container ">
                <section
                    class="px-2 transform hover:scale-105 motion-reduce:transform-none hover:brightness-150 duration-500 lg:pt-[20px] pb-5 lg:pb-5 bg-#000">

                    <div class="bg-black border border-blue-900  rounded-lg overflow-hidden ">
                        <img src="{{ asset('/storage/images/'.$article->file)}}"
                            alt="" class="w-full" />

                        <div class="gradient-card  p-8 sm:p-9 md:p-4 xl:p-5 text-center">

                            <div class="text-gray-400 pb-2 text-sm text-right"> <i
                                    class="fas fa-calendar-week text-sky-500"></i>
                                {{ $rest = substr($article->created_at, 0, -9) }} </div>

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
                                    {{ $article->title }}
                            </div>
                            </h3>

                            <p class="text-base text-justify break-words text-gray-400 px-5 leading-relaxed mb-7">
                                {{ $rest = substr($article->content, 0, 180) . '...' }}
                            </p>
                            
                            <a href="{{ route('crud.articles.show-articles', ['id' => $article->id]) }}"
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
        @endforeach
            
        <div class="mx-auto">
            <div class=" justify-center" >{{ $articles->links() }}</div>
        </div>
        
    </div>  

</div>

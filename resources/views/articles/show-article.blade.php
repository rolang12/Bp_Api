@extends('layouts.layout')

@section('content')
    <div class="containter">
        @if ($errors->any())
            <div class=" z-10 mt-24 mb-5   ">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>
                            <div
                                class="flex w-full my-2 max-w-sm mx-auto overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800">
                                <div class="flex items-center justify-center w-12 bg-red-500">
                                    <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 40 40"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M20 3.36667C10.8167 3.36667 3.3667 10.8167 3.3667 20C3.3667 29.1833 10.8167 36.6333 20 36.6333C29.1834 36.6333 36.6334 29.1833 36.6334 20C36.6334 10.8167 29.1834 3.36667 20 3.36667ZM19.1334 33.3333V22.9H13.3334L21.6667 6.66667V17.1H27.25L19.1334 33.3333Z" />
                                    </svg>
                                </div>

                                <div class="px-4 py-2 -mx-3">
                                    <div class="mx-3">
                                        <span class="font-semibold text-red-500 dark:text-red-400">Error</span>
                                        <p class="text-sm text-gray-600 dark:text-gray-200">{{ $error }}</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif
            
        
            <div class="max-w-2xl mb-32  mx-auto overflow-hidden bg-white rounded-lg shadow-md ">

                <img class="object-cover w-full h-full" src="{{ asset('/storage/images/'.$article->article->file)}}" />

                <div class="p-6">
                    <div>
                        <a href=" {{ route('articles.articles-tags', ['tags' => $article->category->id ]) }} "
                            class="text-xs font-medium
                            text-pink-600 uppercase
                            dark:text-blue-400  ">
                            <div class="inline-block text-sky-800 font-bold">Tags:</div> {{ $article->category->tags }}
                        </a>
                        <a href="#" class="block break-words mt-2 md:text-3xl text-xl font-semibold text-gray-800 transition-colors duration-200 transform dark:text-white hover:text-gray-600 hover:underline">{{$article->article->title }}</a>
                        <p class="mt-2 break-words md:text-lg text-md text-gray-600 dark:text-gray-400">
                            {{ $article->article->content }}</p>
                    </div>

                    <div class="mt-4">
                        <div class="flex items-center">
                            <div class="flex items-center">
                                <img class="object-cover h-10 rounded-full"
                                    src="https://images.unsplash.com/photo-1586287011575-a23134f797f9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=48&q=60"
                                    alt="Avatar">
                                <a href="{{ route('users.view-users', ['id' => $user->id]) }}  "> <div class="mx-2 font-semibold text-gray-700 hover:text-cyan-600 dark:text-gray-200">{{ $user->name }}</div></a>
                            </div>
                            <span class="mx-1 text-xs text-gray-600 dark:text-gray-300">{{ $user->created_at }}</span>
                        </div>
                    </div>
                </div>

            </div>
        

           

        <div class="bg-black p-4 md:p-8">
            @if (Session::has('status'))                                      
            <div class="flex md:w-2/2 mb-3 bg-gray-900 relative left-0 top-0 text-left max-w-sm mx-auto overflow-hidden rounded-lg shadow-md ">
                <div class="flex top items-center  justify-center w-12 bg-emerald-500">
                    <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM16.6667 28.3333L8.33337 20L10.6834 17.65L16.6667 23.6166L29.3167 10.9666L31.6667 13.3333L16.6667 28.3333Z"/>
                    </svg>
                </div>
                
                <div class="px-4 py-2 -mx-3">
                    <div class="mx-3">
                        <span class="font-semibold text-emerald-500 dark:text-emerald-400">Success</span>
                        <p class="text-sm text-gray-600 dark:text-gray-200">{{session('status')}}</p>
                    </div>
                </div>
            </div>
            @endif  
            <h3 class=" m-auto w-1/2 text-sky-800 font-bold text-2xl mb-2 ">Comments</h3>
          
           
            @forelse ($comments as $comment => $value)
                
                <div class="flex md:w-1/2 bg-black w-full m-auto py-4 border-b border-gray-300">


                    <div class="flex flex-col flex-grow ml-2">

                        <div class=" grid grid-cols-9 break-words ">

                            <div class="col-span-6  justify-self-start ">
                                <span class="font-semibold text-gray-400 text-lg">{{ $value->users->name }}
                                </span>
                            </div>
                            <div class="col-span-2  justify-self-end ">
                                <span class="font-semibold inline-block text-gray-500 text-sm md:text-base "><i class="fas fa-calendar-week  inline-block text-sky-500"></i>
                                    {{ $rest = substr($value->created_at, 0, -9) }}
                                </span> 
                            </div>

                            @if (Auth::User()->rol == 'mod' or Auth::User()->rol == 'admin')
                                <div class="col  justify-self-end w-min  text-white">
                                    <a href="{{ route('comments.delete-comments', Crypt::encrypt($value->id)) }}"><i
                                        class="fas text-red-600 fa-trash"></i>
                                    </a>
                                </div>
                            @endif

                        </div>

                        <p class="mt-1 break-words text-gray-700 md:text-lg text-base">{{ $value->content }}</p>

                    </div>

                </div>


            @empty
                <div class="m-auto w-1/2 bg-black ">
                    <p class="text-xl text-gray-500 font-semibold  ">¡There are not comments yet :( !</p>
                </div>
            @endforelse

        </div>

        <div class="flex justify-center  items-center p-7 bg-gradient-to-l from-black via-cyan-700 to-sky-900">

            <div class="h-80 px-7 w-[700px] rounded-[12px] border border-cyan-600 p-4">

                <p class="md:text-2xl text-lg font-semibold text-white cursor-pointer transition-all hover:text-sky-600">
                    Add Comment/Questions
                </p>

                {{ Form::open(['route' => 'comments.store-comments', 'class' => 'text-center  mx-auto ', 'files' => true]) }}

                {{ Form::textarea('content', null, ['class' => 'h-40 px-3 text-md py-1 mt-5 outline-none border-pink-300 w-full resize-none border rounded-lg ','required','placeholder' => 'Add your comments here']) }}

                {{ Form::number('articles_id', $article->article->id, ['hidden' => true]) }}

                <div class="flex justify-between mt-2"> {!! Form::submit('Publish', ['class' => 'h-12 w-[150px] border border-sky-700 text-basic text-white rounded-lg transition-all cursor-pointer hover:text-cyan-900 hover:bg-white']) !!}
                    <p class="text-sm text-white ">Enter atleast 15 characters</p>
                </div>

                {!! Form::close() !!}

            </div>
        </div>

    </div>
@endsection

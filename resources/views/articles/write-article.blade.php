@extends('layouts.layout')

@section('content')
    <div class="container  ">
       
       @include('livewire.messages.error') 
        @include('livewire.messages.success')

        <div class="md:text-4xl mt-32 text-xl text-center font-bold text-gray-800">Write Your Article Here.</div>

        {{ Form::open(['route' => 'articles.store', 'class' => 'text-center  mx-auto ', 'files' => true]) }}

        {{ Form::text('title', null, ['class' =>'text-light text-gray-600 border-none bg-gray-100 p-4 col-span-2 w-1/2 border border-gray-700 mt-10 h-15 rounded-sm p-3 my-2','required','placeholder' => 'Title']) }}

        {{ Form::textarea('content', null, ['class' =>'text-light text-gray-600 border-none bg-gray-100 p-4 col-span-2 w-1/2 border border-gray-700 h-15 rounded-sm p-3 my-2','required','placeholder' => 'Content']) }}

        {{ Form::file('media', [
            'class' => 'text-light file:mr-4 file:py-2 file:px-4
                        file:border-0 file:text-base file:font-semibold file:text-green-500
                        hover:file:bg-green-100  border-none bg-gray-100 p-4 col-span-2 w-1/2
                         border border-gray-700 h-15 rounded-sm p-3  my-2',
            'required',
        ]) }}

        <div class="text-center text-lg p-5 font-bold mx-auto w-1/2 ">Tags</div>

        <div class="grid grid-cols-2 mx-auto w-1/2 md:grid-cols-10 ">

            <div class="m-auto"> John</div> {!! Form::checkbox('categories[]', 'John', false, ['class' => 'm-auto p-auto text-light  checked:bg-green-700 border-none bg-green-600 p-4  border border-gray-700 h-15 rounded-sm  ']) !!}

            <div class="m-auto">George</div>{!! Form::checkbox('categories[]', 'George', false, ['class' => 'm-auto p-auto text-light col checked:bg-green-700 border-none bg-blue-600 p-4  border border-gray-700 h-15 rounded-sm  ']) !!}

            <div class="m-auto">Paul</div> {!! Form::checkbox('categories[]', 'Paul', false, ['class' => 'm-auto p-auto text-light col checked:bg-green-700 border-none bg-yellow-600 p-4   border border-gray-700 h-15 rounded-sm  ']) !!}

            <div class="m-auto">Ringo</div> {!! Form::checkbox('categories[]', 'Ringo', false, ['class' => 'm-auto p-auto text-light col checked:bg-green-700 border-none bg-red-600 p-4   border border-gray-700 h-15 rounded-sm  ']) !!}

            <div class="m-auto">Album</div> {!! Form::checkbox('categories[]', 'Album', false, ['class' => 'm-auto p-auto text-light col checked:bg-green-700 border-none bg-pink-600 p-4  border border-gray-700 h-15 rounded-sm  ']) !!}

            <div class="m-auto">News</div> {!! Form::checkbox('categories[]', 'News', false, ['class' => 'm-auto p-auto text-light col checked:bg-green-700 border-none bg-indigo-600 p-4  border border-gray-700 h-15 rounded-sm  ']) !!}

            <div class="m-auto">Remember</div>{!! Form::checkbox('categories[]', 'Remember', false, ['class' => 'm-auto p-auto text-light col checked:bg-green-700 border-none bg-purple-600 p-4  border border-gray-700 h-15 rounded-sm  ']) !!}

            <div class="m-auto">On this Day</div>{!! Form::checkbox('categories[]', 'On this Day', false, ['class' => 'm-auto p-auto text-light col checked:bg-green-700 border-none bg-yellow-300 p-4    border border-gray-700 h-15 rounded-sm  ']) !!}

            <div class="m-auto">Curiosities</div>{!! Form::checkbox('categories[]', 'Curiosities', false, ['class' => 'm-auto p-auto text-light col checked:bg-green-700 border-none bg-lime-600 focus:bg-blue-700 p-4  border border-gray-700 h-15 rounded-sm ']) !!}

            <div class="m-auto">Other</div> {!! Form::checkbox('categories[]', 'Other', false, ['class' => 'm-auto p-auto text-light col border-none bg-sky-600 p-4 border border-gray-700 h-15 rounded-sm']) !!}


            <br>
        </div>
        {!! Form::submit('Publish', ['class' => 'modal-open mb-20 text-lg transform hover:scale-110 motion-reduce:transform-none duration-500 p-4 bg-gradient-to-r from-black  via-purple-900 to-blue-900 font-bold w-1/2 my-2 rounded-md text-center text-white  col-span-2']) !!}

        {!! Form::close() !!}



        <br>
    </div>
@endsection

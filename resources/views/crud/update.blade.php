@extends('layouts.layout')

@section('content')
    <style>
        .gradient {
            background: linear-gradient(90deg, #110e0f 0%, #080322 100%);
        }
        .gradient-btn {
            background: linear-gradient(90deg, #300235 0%, #0c023f 100%);
        }

    </style>

    <div class="container  w-screen ">
        <div class="row">
            <div class="mt-16  ">
                {!! Form::model($user, ['route' => 'users.update-users', 'method' => 'put', 'novalidate']) !!}
                
                    {!! Form::hidden('id', $user->id) !!}
                <div class="w-screen h-screen pt-36 gradient  space-y-4 border border-pink-700 shadow-xl mx-auto px-96 text-center "   >   
                    <div class="form-group grid grid-cols-2  ">
                        {!! Form::label('full_name', null,['class' => 'text-left text-white font-semibold text-base' ] ) !!}
                        {!! Form::text('name', null, ['class' => 'bg-transparent text-white font-semibold border rounded border-pink-500 w-full  form-control' , 'required' => 'required']) !!}
                    </div>

                    <div class="form-group grid grid-cols-2 ">
                        {!! Form::label('email', null, ['class' => 'text-white font-semibold text-left'] ) !!}
                        {!! Form::email('email', null, ['class' => 'bg-transparent text-white font-semibold border rounded border-pink-500 w-full form-control' , 'required' => 'required']) !!}
                    </div>

                    <div class="form-group grid grid-cols-2 ">
                        {!! Form::label('rol',null,['class' => 'text-white font-semibold text-left'] ) !!}

                        <select class=" w-full p-3 rounded-lg bg-transparent text-white " name="rol" :value="old('countries_id')">
                            <option class="bg-transparent text-light text-base text-gray-700 p-4" value="user">User</option>
                            <option class="bg-transparent text-light text-base text-gray-700 p-4" value="mod">Mod</option>
                            <option class="bg-transparent text-light text-base text-gray-700 p-4" value="admin">Admin</option>
                                
                            </select>
                    </div>
                    
                        <div class="form-group my-4">
                            {!! Form::submit('Update', ['class' => 'w-full text-white gradient-btn rounded-lg transform hover:scale-110 motion-reduce:transform-none duration-500 p-5 ' ] ) !!}
                        </div>
                </div>
                    {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection
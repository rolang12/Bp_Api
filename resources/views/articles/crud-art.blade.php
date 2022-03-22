@extends('layouts.layout')

@section('content')


    <head>
        <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
        <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">
    </head>

    @if (Auth::User()->rol == 'admin' or Auth::User()->rol == 'mod' )

        <style>
            /*Overrides for Tailwind CSS */

            /*Form fields*/
            .dataTables_wrapper select,
            .dataTables_wrapper .dataTables_filter input {
                color: #4a5568;
                /*text-gray-700*/
                padding-left: 1rem;
                /*pl-4*/
                padding-right: 1rem;
                /*pl-4*/
                padding-top: .5rem;
                /*pl-2*/
                padding-bottom: .5rem;
                /*pl-2*/
                line-height: 1.25;
                /*leading-tight*/
                border-width: 2px;
                /*border-2*/
                border-radius: .25rem;
                border-color: #edf2f7;
                /*border-gray-200*/
                background-color: #edf2f7;
                /*bg-gray-200*/
            }

            /*Row Hover*/
            table.dataTable.hover tbody tr:hover,
            table.dataTable.display tbody tr:hover {
                background-color: #ebf4ff;
                /*bg-indigo-100*/
            }

            /*Pagination Buttons*/
            .dataTables_wrapper .dataTables_paginate .paginate_button {
                font-weight: 700;
                /*font-bold*/
                border-radius: .25rem;
                /*rounded*/
                /*border border-transparent*/
            }

            /*Pagination Buttons - Current selected */
            .dataTables_wrapper .dataTables_paginate .paginate_button.current {
                color: #fff !important;
                /*text-white*/
                box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
                /*shadow*/
                font-weight: 700;
                /*font-bold*/
                border-radius: .25rem;
                /*rounded*/
                background: #000 !important;
                /*bg-indigo-500*/
                transform: perspective();
                transition-duration: 500ms;
                /*border border-transparent*/
            }

            /*Pagination Buttons - Hover */
            .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
                color: rgb(39, 36, 36) !important;
                /*text-white*/
                box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
                /*shadow*/
                font-weight: 700;
                /*font-bold*/
                border-radius: .25rem;
                /*rounded*/
                background: #FFF !important;
                /*bg-indigo-500*/
                /*border border-transparent*/
            }

            /*Add padding to bottom border */
            table.dataTable.no-footer {
                border-bottom: 1px solid #fff;
                /*border-b-1 border-gray-300*/
                margin-top: 0.75em;
                margin-bottom: 0.75em;
            }

            /*Change colour of responsive icon*/
            table.dataTable.dtr-inline.collapsed>tbody>tr>td:first-child:before,
            table.dataTable.dtr-inline.collapsed>tbody>tr>th:first-child:before {
                background-color: #667eea !important;
                /*bg-indigo-500*/
            }

        </style>

        <body class="bg-black text-gray-900 tracking-wider  leading-normal">
           
            <!--Container-->
            <div class="container w-full  m-auto ">

                <div  class="grid mt-28 mb-4 grid-cols-2"  >
                    <h1 class=" col flex items-center text-gray-500 font-sans font-bold break-normaltext-indigo-500 px-2 py-3 text-2xl md:text-4xl">
                        Articles
                    </h1>
                    @include('livewire.messages.success')
                </div>
               
                <!--Card-->
                <div id='recipients' class="p-10 mt-6 lg:mt-0 rounded shadow bg-gray-200">
                   
                    <table id="example" class="stripe hover p-4 " style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                        <thead>

                            <tr class="bg-black p-3 text-white ">
                                <th data-priority="1">ID</th>
                                <th class="text-left" data-priority="2">Title</th>
                                <th data-priority="3">Content</th>
                                <th data-priority="4">Created At</th>
                                <th class="text-left" data-priority="5">User ID</th>
                                <th data-priority="6">View</th>
                                <th data-priority="7">Edit</th>
                                <th data-priority="8">Delete</th>
                            </tr>

                        </thead>

                        <tbody>
                            @foreach ($articles as $article)
                                <tr>

                                    <td class="text-center  ">{{ $article->id }}</td>
                                    <td class="text-left  ">{{ $article->title }}</td>
                                    <td class="text-left  ">{{ $rest = substr($article->content, 0, 40)}}</td>
                                    <td class="text-center  ">{{ $rest = substr($article->created_at, 0, -9) }}</td>
                                    <td class="text-center  ">{{ $article->user_id }}</td>


                                    <td class="text-center hover-text-green-600 text-green-300"><a
                                            href="{{ route('crud.articles.show-articles', ['id' => $article->id], Crypt::encrypt($article->id)) }}">
                                            <button><i class="far fa-eye"></i></button>
                                    </td>

                                    <td class="text-center hover-text-blue-600 text-blue-300 "><a
                                            href="{{ route('users.edit-users', Crypt::encrypt($article->id)) }}">
                                            <button><i class="far  fa-edit"></i></button></a>
                                    </td>
                                    
                                    <td class="text-center hover-text-red-600 font-bold "><a
                                            href="{{ route('crud.articles.destroy-articles', Crypt::encrypt($article->id)) }}">
                                            <button onclick=" return confirmDelete() "    ><i class="fas text-red-600 fa-trash"></i></button>
                                    </td>

                                </tr>
                            @endforeach
                            
                        </tbody>

                    </table>

                </div>

            </div>

            <!-- jQuery -->
            <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

            <!--Datatables -->
            <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
            <script>
                $(document).ready(function() {

                    var table = $('#example').DataTable({
                            responsive: true
                        })
                        .columns.adjust()
                        .responsive.recalc();
                });

                
                function confirmDelete()
                {
                    var respuesta = confirm("Are you sure that you want delete this post?");

                    if (respuesta)
                    {
                        return true
                    } else {

                        return false
                    }
                }

            </script>

        </body>
        
    @else

        {{ redirect()->route('dashboard') }}

    @endif

@endsection

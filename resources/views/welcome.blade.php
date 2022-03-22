<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="images/icono.png">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet"> 
    <meta name="description" content="Simple landind page" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
    <title>Beatles' Blog</title>

    <style>
        .gradient {
            background: linear-gradient(90deg, #110107 0%, #080322 100%);
        }

        .gradient-2 {
            background: linear-gradient(90deg, #1e1e1f 0%, #1e1e20 100%);
        }

        body {
            font-family: 'Nunito', sans-serif;
        }

    </style>


</head>

<body class=" tracking-normal text-white " style="font-family: 'Source Sans Pro', sans-serif;">


    <div class="relative gradient flex items-top justify-center min-h-screen h-14  sm:items-center py-4 sm:pt-0">
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('dashboard') }}"
                        class="text-sm text-gray-700 hover:text-white dark:text-gray-500 underline">Dashboard</a>

                @else
                    <a href="{{ route('login') }}"
                        class="text-base text-gray-500 hover:text-white dark:text-gray-500 ">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-4 text-base  hover:text-white text-gray-500 dark:text-gray-500 ">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="pt-24">
            <div class=" px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
                <!--Left Col-->
                <div class="flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left">
                    <p class="uppercase tracking-loose w-full">Welcome to my Blog</p>
                    <h1 class="my-4 text-5xl animate-pulse font-bold leading-tight">
                        Beatles' Blog!
                    </h1>
                    <p class="leading-normal text-xl mb-8">
                        ¡Here you'll find many articles about the band!
                    </p>
                    <button
                        class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                        @guest
                            <a href=" {{ route('register') }} ">Register now!</a>
                        @endguest
                        @auth
                            <a href=" {{ route('dashboard') }}  ">Go!</a>
                        @endauth
                    </button>
                </div>
                <!--Right Col-->
                <div class="w-full md:w-3/5 py-6 text-center">
                    <img class="w-auto md:w-4/5 z-50"
                        src="https://http2.mlstatic.com/D_NQ_NP_612826-MLM27043575939_032018-O.jpg" />
                </div>
            </div>
        </div>

    </div>

</body>

</html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="images/icono.png">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet"> 
    <meta name="description" content="Simple landind page" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
    <title>Beatles' Blog</title>

    <style>
        .gradient {
            background: linear-gradient(90deg, #110107 0%, #080322 100%);
        }

        .gradient-2 {
            background: linear-gradient(90deg, #1e1e1f 0%, #1e1e20 100%);
        }

        body {
            font-family: 'Nunito', sans-serif;
        }

    </style>


</head>

<body class=" tracking-normal text-white " style="font-family: 'Source Sans Pro', sans-serif;">


    <div class="relative gradient flex items-top justify-center min-h-screen h-14  sm:items-center py-4 sm:pt-0">
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('dashboard') }}"
                        class="text-sm text-gray-700 hover:text-white dark:text-gray-500 underline">Dashboard</a>

                @else
                    <a href="{{ route('login') }}"
                        class="text-base text-gray-500 hover:text-white dark:text-gray-500 ">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-4 text-base  hover:text-white text-gray-500 dark:text-gray-500 ">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="pt-24">
            <div class=" px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
                <!--Left Col-->
                <div class="flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left">
                    <p class="uppercase tracking-loose w-full">Welcome to my Blog</p>
                    <h1 class="my-4 text-5xl animate-pulse font-bold leading-tight">
                        Beatles' Blog!
                    </h1>
                    <p class="leading-normal text-xl mb-8">
                        ¡Here you'll find many articles about the band!
                    </p>
                    <button
                        class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                        @guest
                            <a href=" {{ route('register') }} ">Register now!</a>
                        @endguest
                        @auth
                            <a href=" {{ route('dashboard') }}  ">Go!</a>
                        @endauth
                    </button>
                </div>
                <!--Right Col-->
                <div class="w-full md:w-3/5 py-6 text-center">
                    <img class="w-auto md:w-4/5 z-50"
                        src="https://http2.mlstatic.com/D_NQ_NP_612826-MLM27043575939_032018-O.jpg" />
                </div>
            </div>
        </div>

    </div>

</body>

</html>

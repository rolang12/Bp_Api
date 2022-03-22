{{-- Header --}}
<x-app-layout>
   
</x-app-layout>

{{-- Link CDN Tailwind And FontAwesome--}}
<link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet"> 
<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<script src="https://kit.fontawesome.com/6628fdf66e.js" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<link href="/dist/output.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.tailgrids.com/tailgrids-fallback.css" />
<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>

<style>
  .bg-image {
    background-image: url(../images/fondo2.png);
    background-size:100%  
  }
  .bg-image1 {
    background-image: url(images/fondo1.png);
    background-size:100% ; 
  }

  .btn-flotante {
    font-size: 10px;
    color: #b7b7b8; 
    background-color: #010922;
    padding: 8px 8px; 
    position: fixed;
    bottom: 50px;
    left: 0px;
    
  }

  .btn-flotante:hover {
    background-color: #3c3fc3; 
    transform: translateX(-7px);
  }

  .btn-flotante2 {
    font-size: 10px;
    color: #a7a7a7; 
    background-color: #010922;
    padding: 8px 8px; 
    position: fixed;
    bottom: 95px;
    left: 0px;
  }
    
  .btn-flotante2:hover {
    background-color: #be2a68; 
    transform: translateX(-7px);
  } 

  *{
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  }
  
  body{
      
    justify-content: center;
    align-items: center;
    font-family: 'Quicksand', sans-serif;

  }

  .main{
    display: flex;
    justify-content: center;
    align-items: flex-start;
    padding-top: 5%;
    padding-bottom: 5%;
    
    @media(max-width: 600px){ transform: scale(.65); }
      
  }
  .letter{
    display: inline-flex;
    height: 38px;
    width: 27px;
    /* border: 2.5px solid #FF1EAD; */
    border: 2.35px solid rgb(10, 10, 10);
    border-radius: 14px;
    box-shadow:
        0 0 2px rgba(0, 0, 0, 0.75),
        inset 0 0 2px rgba(255, 255, 255, 0.45);

    animation: letter 3s ease-in-out infinite alternate;
  }
  @keyframes span {
      0%,30%{ margin: 0 15px; }
      70%,100%{ margin: 0 5px; }
  }
  @keyframes letter {
      0%,30%{ width: 27px; }
      70%,100%{ width: 30vw; }
  }
  .fontpri {
    font-size: 55px;
    font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;  
    font-weight: 900;
    text-outline: -60px;

  }
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

  .gradient-card-recent{
    background: linear-gradient(10deg, #8a0404 0%, #460303 100%);

  }

  ::-webkit-scrollbar {
          display: none;
  }
  
  @import url('https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css');
  @import url(https://fonts.googleapis.com/css?family=Montserrat);

  html,

  body {
    height: 100%;
  }

  svg {
    display: block;
    font: 10.5em 'Montserrat';
    width: 370px;
    height: 190px;
    margin: 0 auto;
  }
  #svg {
    width: 400px; #important
    height: 160px; #important
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
    stroke: #d0bcf5;
    animation-delay: -1;
  }

  .text-copy:nth-child(2) {
    stroke: #901a77;
    animation-delay: -2s;
  }

  .text-copy:nth-child(3) {
    stroke: #c7d5dd;
    animation-delay: -3s;
  }

  .text-copy:nth-child(4) {
    stroke: #262762;
    animation-delay: -4s;
  }

  .text-copy:nth-child(5) {
    stroke: #3a3844;
    animation-delay: -5s;
  }

  @keyframes stroke-offset {
    100% {
        stroke-dashoffset: -35%;
    }
  }

  @media (max-width: 600px) {
    span {
        font-size: 15px;
    }

    .letter {
        height: 15px;
        width: 20px;
    }
    body {
        width: 100%;
    }
    .fontpri {
        font-size: 20px;
        font-weight: 300;
    }

  }

</style>

{{-- Contenido --}}
<body class="cotainer" >
  @yield('content')  
</body>


{{-- Footer --}}
<footer class="text-center  bg-gray-900 text-white">
  <div class="container px-6 pt-6">
    <div class="flex justify-center mb-6">
      <a href="#!" type="button" class="rounded-full border-2 border-white text-white leading-normal uppercase hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out w-9 h-9 m-1">
        <svg aria-hidden="true"
        focusable="false"
        data-prefix="fab"
        data-icon="facebook-f"
        class="w-2 h-full mx-auto"
        role="img"
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 320 512"
      >
        <path
          fill="currentColor"
          d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"
        ></path>
        </svg>
      </a>

      <a href="#!" type="button" class="rounded-full border-2 border-white text-white leading-normal uppercase hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out w-9 h-9 m-1">
        <svg aria-hidden="true"
        focusable="false"
        data-prefix="fab"
          data-icon="twitter"
          class="w-3 h-full mx-auto"
          role="img"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 512 512"
        >
          <path
            fill="currentColor"
            d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"
          ></path>
        </svg>
      </a>

      <a href="#!" type="button" class="rounded-full border-2 border-white text-white leading-normal uppercase hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out w-9 h-9 m-1">
        <svg aria-hidden="true"
        focusable="false"
        data-prefix="fab"
          data-icon="google"
          class="w-3 h-full mx-auto"
          role="img"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 488 512"
        >
          <path
            fill="currentColor"
            d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"
          ></path>
        </svg>
      </a>

      <a href="#!" type="button" class="rounded-full border-2 border-white text-white leading-normal uppercase hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out w-9 h-9 m-1">
        <svg aria-hidden="true"
        focusable="false"
        data-prefix="fab"
        data-icon="instagram"
          class="w-3 h-full mx-auto"
          role="img"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 448 512"
        >
          <path
            fill="currentColor"
            d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"
          ></path>
        </svg>
      </a>

      <a href="#!" type="button" class="rounded-full border-2 border-white text-white leading-normal uppercase hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out w-9 h-9 m-1">
        <svg aria-hidden="true"
        focusable="false"
        data-prefix="fab"
        data-icon="linkedin-in"
          class="w-3 h-full mx-auto"
          role="img"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 448 512"
        >
          <path
            fill="currentColor"
            d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"
          ></path>
        </svg>
      </a>

      <a href="#!" type="button" class="rounded-full border-2 border-white text-white leading-normal uppercase hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out w-9 h-9 m-1">
        <svg aria-hidden="true"
        focusable="false"
        data-prefix="fab"
        data-icon="github"
          class="w-3 h-full mx-auto"
          role="img"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 496 512"
        >
          <path
            fill="currentColor"
            d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"
          ></path>
        </svg>
      </a>
    </div>

    <div>
      <form action="">
        <div class=" md:grid-cols-3 gird-cols-1 gap-4 flex justify-center items-center">
          <div class="md:ml-auto md:mb-6">
            <p class="">
              <strong>Sign up for our newsletter</strong>
            </p>
          </div>

          <div class="md:mb-6">
            <input
              type="text"
              class="
                form-control
                block
                w-full
                px-3
                py-1.5
                text-base
                font-normal
                text-gray-700
                bg-white bg-clip-padding
                border border-solid border-gray-300
                rounded
                transition
                ease-in-out
                m-0
                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
              "
              id="exampleFormControlInput1"
              placeholder="Email address"/>
          </div>

          <div class="md:mr-auto mb-6">
            <button type="submit" class="inline-block px-6 py-2 border-2 border-white text-white font-medium text-xs leading-tight uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out">
              Subscribe
            </button>
          </div>
        </div>
      </form>
    </div>

  <div class="text-center py-4 w-full" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2022 Copyright Blog Rolan Piñeres
  </div>
</footer>
<script src="https://cdn.tailwindcss.com"></script>

<div class="flex items-center justify-center bg-gray-900 h-screen">
    <div class="px-4 lg:py-12">
      <div class="lg:gap-4 lg:flex">
        <div
          class="flex flex-col items-center justify-center md:py-24 lg:py-32"
        >
          <h1 class="font-bold text-gray-500 text-9xl">404</h1>
          <p
            class="mb-2 text-2xl font-bold text-center text-gray-50 md:text-3xl"
          >
            <span class="text-red-500">Oops!</span> Page not found
          </p>
          <p class="mb-8 text-center text-gray-500 md:text-lg">
            The page you’re looking for doesn’t exist.
          </p>
          <a
            href="{{ route('dashboard')}}"
            class="px-6 py-2 text-sm font-semibold text-blue-800 bg-blue-100"
            >Go home</a
          >
        </div>
        <div class="mt-10 ">
            <img
            src="https://i.pinimg.com/originals/13/3b/71/133b7184d9cba047497d06eb7e947819.jpg"
            alt="img"
            class="object-cover w-96 h-fit"
          />
      </div>
    </div>
  </div>
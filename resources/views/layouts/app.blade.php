<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              ribpurple: '#06923E',
              ribgreenDark: '#005D2A',
              ribgray: '#f3f3f3',
              chocklate: '#FFCF71',
            }
          }
        }
      }
    </script>
</head>
<body class="bg-gray-100 overflow-x-hidden">

    <!-- ================= NAVBAR ================= -->
    <nav class="bg-transparent border-b border-gray-200"> <div class="container mx-auto grid grid-cols-3 items-center py-4 px-6">
        <!-- logo kiri -->
        <div>
          <a href="/" class="flex items-center">
            <img src="{{ asset('images/Logo.png') }}" alt="Logo" class="h-8 w-auto object-contain">
          </a>
        </div>

        <!-- menu tengah -->
        <div class="flex justify-center">
          <ul class="flex space-x-8 text-sm font-semibold">
            <li>
              <a href="/" class="text-gray-700 hover:text-chocklate border-b-2 border-transparent hover:border-chocklate pb-1">Home</a>
            </li>
            <li>
              <a href="/about" class="text-gray-700 hover:text-chocklate border-b-2 border-transparent hover:border-chocklate pb-1">About Us</a>
            </li>

            <!-- TOUR VISIT DROPDOWN -->
<li class="relative" x-data="{ open: false }">
  <div 
    @mouseenter="open = true" 
    @mouseleave="open = false" 
    class="group"
  >
    <!-- Tombol utama -->
    <a 
      class="flex items-center space-x-2 text-gray-700 hover:text-chocklate border-b-2 border-transparent group-hover:border-chocklate pb-1 transition-colors duration-200 cursor-pointer font-medium"
    >
      <span>Tour Visit</span>
      <svg class="w-4 h-4 text-gray-500 group-hover:text-chocklate transition" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
      </svg>
    </a>

    <!-- Dropdown -->
    <div
      x-show="open"
      x-transition:enter="transition ease-out duration-200"
      x-transition:enter-start="transform scale-y-0 opacity-0"
      x-transition:enter-end="transform scale-y-100 opacity-100"
      x-transition:leave="transition ease-in duration-150"
      x-transition:leave-start="transform scale-y-100 opacity-100"
      x-transition:leave-end="transform scale-y-0 opacity-0"
      class="absolute top-full left-1/2 transform -translate-x-1/2 mt-4 w-[650px] bg-white border border-gray-100 rounded-2xl shadow-xl z-30 p-6 origin-top"
    >
      <h3 class="text-lg font-semibold text-chocklate mb-4 text-center">Explore Our Attractions</h3>
      
      <div class="grid grid-cols-5 gap-4 text-center">
        <a href="#" class="block py-3 rounded-xl text-gray-600 hover:bg-green-400 hover:text-chocklate font-semibold transition-all duration-200 shadow-sm hover:shadow-md">
          Plaza
        </a>
        <a href="#" class="block py-3 rounded-xl text-gray-600 hover:bg-green-400 hover:text-chocklate font-semibold transition-all duration-200 shadow-sm hover:shadow-md">
          Aviary
        </a>
        <a href="#" class="block py-3 rounded-xl text-gray-600 hover:bg-green-400 hover:text-chocklate font-semibold transition-all duration-200 shadow-sm hover:shadow-md">
          Ibarbo Fun Town
        </a>
        <a href="#" class="block py-3 rounded-xl text-gray-600 hover:bg-green-400 hover:text-chocklate font-semibold transition-all duration-200 shadow-sm hover:shadow-md">
          Splash World
        </a>
        <a href="#" class="block py-3 rounded-xl text-gray-600 hover:bg-green-400 hover:text-chocklate font-semibold transition-all duration-200 shadow-sm hover:shadow-md">
          Other Area
        </a>
      </div>
    </div>
  </div>
</li>



            <li>
              <a href="/contact" class="text-gray-700 hover:text-chocklate border-b-2 border-transparent hover:border-chocklate pb-1">Contact Us</a>
            </li>
          </ul>
        </div>

        <!-- kanan -->
        <div class="flex justify-end">
          <!-- optional right side -->
        </div>
      </div>
    </nav>

    <!-- ================= CONTENT ================= -->
    {{-- Carousel / Konten Full Layar --}}
    @yield('content')

    <!-- ================= FOOTER ================= -->
    <footer class="bg-gray-900 text-gray-300 pt-12 pb-8 mt-0">
      <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-5 gap-8 border-t border-gray-800 pt-8">
          <div class="col-span-1">
            <div class="flex items-center mb-4">
              <img src="{{ asset('images/Logo.png') }}" alt="Logo" class="h-10 w-10 object-contain mr-3">
              <span class="font-bold text-lg">Ibarbo Park</span>
            </div>
            <p class="text-sm leading-relaxed text-gray-400">
              The largest souvenir center in Yogyakarta
            </p>
          </div>

          <div>
            <h4 class="font-semibold text-gray-200 mb-3">Services</h4>
            <ul class="space-y-2 text-sm text-gray-400">
              <li><a href="#" class="hover:text-white">Bike and Rickshaw rental</a></li>
              <li><a href="#" class="hover:text-white">Guided Tours of Lucca</a></li>
              <li><a href="#" class="hover:text-white">Guided Bike Tour of Lucca</a></li>
              <li><a href="#" class="hover:text-white">Trip In The Tuscan Hills</a></li>
              <li><a href="#" class="hover:text-white">Transportation With Luxury Cars</a></li>
              <li><a href="#" class="hover:text-white">Wine Tours By Bus With Guide</a></li>
            </ul>
          </div>

          <div>
            <h4 class="font-semibold text-gray-200 mb-3">Home</h4>
            <ul class="space-y-2 text-sm text-gray-400">
              <li><a href="/" class="hover:text-white">Home</a></li>
              <li><a href="/about" class="hover:text-white">About Us</a></li>
              <li><a href="/packages" class="hover:text-white">Tour Packages</a></li>
            </ul>
          </div>

          <div>
            <h4 class="font-semibold text-gray-200 mb-3">Help</h4>
            <ul class="space-y-2 text-sm text-gray-400">
              <li><a href="/terms" class="hover:text-white">Terms of Use</a></li>
              <li><a href="/privacy" class="hover:text-white">Privacy Policy</a></li>
            </ul>
          </div>

          <div>
            <h4 class="font-semibold text-gray-200 mb-3">Contacts</h4>
            <ul class="space-y-3 text-sm text-gray-400 mb-4">
              <li class="flex items-center"><span class="mr-2">📍</span> Piazza Napoleone, Lucca</li>
              <li class="flex items-center"><span class="mr-2">📞</span> +39 346 368 5708</li>
              <li class="flex items-center"><span class="mr-2">✉️</span> italiainlimo@gmail.com</li>
            </ul>

            <div class="flex space-x-3">
              <a href="#" class="w-9 h-9 flex items-center justify-center rounded-full bg-orange-500 text-white">
                <!-- Twitter -->
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M22 5.92c-.64.28-1.32.47-2.04.56.73-.44 1.3-1.14 1.57-1.97-.68.4-1.44.69-2.24.85A3.5 3.5 0 0012.7 8.5c0 .27.03.54.09.8-2.9-.15-5.48-1.54-7.21-3.65-.3.52-.47 1.12-.47 1.76 0 1.22.62 2.3 1.56 2.93-.58-.02-1.12-.18-1.6-.44v.05c0 1.7 1.21 3.12 2.82 3.44-.29.08-.6.12-.92.12-.22 0-.44-.02-.65-.06.44 1.36 1.71 2.35 3.22 2.38A7.02 7.02 0 013 19.54a9.9 9.9 0 005.36 1.57c6.43 0 9.95-5.33 9.95-9.95 0-.15-.01-.3-.02-.45.68-.48 1.27-1.08 1.74-1.77-.63.28-1.31.48-2.02.57z"/></svg>
              </a>
              <a href="#" class="w-9 h-9 flex items-center justify-center rounded-full bg-orange-500 text-white">
                <!-- Facebook -->
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M22 12.07C22 6.48 17.52 2 11.93 2S2 6.48 2 12.07c0 4.99 3.66 9.13 8.44 9.94v-7.03H8.16v-2.9h2.28V9.5c0-2.26 1.34-3.5 3.39-3.5.98 0 2.01.17 2.01.17v2.21h-1.13c-1.12 0-1.47.7-1.47 1.42v1.71h2.5l-.4 2.9h-2.1V22c4.78-.81 8.44-4.95 8.44-9.93z"/></svg>
              </a>
              <a href="#" class="w-9 h-9 flex items-center justify-center rounded-full bg-orange-500 text-white">
                <!-- Instagram -->
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M7 2h10a5 5 0 015 5v10a5 5 0 01-5 5H7a5 5 0 01-5-5V7a5 5 0 015-5zm5 6.1A3.9 3.9 0 1015.9 12 3.9 3.9 0 0012 8.1zm4.5-.6a1.1 1.1 0 11-1.1-1.1 1.1 1.1 0 011.1 1.1zM12 9.7A2.3 2.3 0 1112 14.3a2.3 2.3 0 010-4.6z"/></svg>
              </a>
            </div>
          </div>
        </div>
        <div class="mt-8">
          <p class="text-center text-sm text-gray-500">&copy; {{ date('Y') }} Ibarbo Park. All rights reserved.</p>
        </div>
      </div>
    </footer>

</body>
</html>

@extends('layouts.app')

@section('title', 'About Us')

@section('content')

<!-- ================== HERO / CAROUSEL ================== -->
<div 
  x-data="carousel()" 
  x-init="start()" 
  class="relative w-full h-screen overflow-hidden"
>
  <div 
    class="flex transition-transform duration-700 ease-in-out h-full"
    :style="'transform: translateX(-' + (activeIndex * 100) + '%)'"
  >
    <!-- Slide 1 -->
    <div class="w-full flex-shrink-0 h-full relative">
      <img src="{{ asset('images/slide1.jpg') }}" alt="Nature Adventure" class="w-full h-full object-cover">
      <div class="absolute inset-0 bg-black/40 flex flex-col items-center justify-center text-center text-white">
        <h2 class="text-5xl font-bold mb-4">Adventure Awaits</h2>
        <p class="text-lg">Experience the thrill of nature and fun activities.</p>
      </div>
    </div>

    <!-- Slide 2 -->
    <div class="w-full flex-shrink-0 h-full relative">
      <img src="{{ asset('images/slide2.jpg') }}" alt="Safari Journey" class="w-full h-full object-cover">
      <div class="absolute inset-0 bg-black/40 flex flex-col items-center justify-center text-center text-white">
        <h2 class="text-5xl font-bold mb-4">Discover Wildlife</h2>
        <p class="text-lg">Get close to exotic animals and explore the wild world.</p>
      </div>
    </div>

    <!-- Slide 3 -->
    <div class="w-full flex-shrink-0 h-full relative">
      <img src="{{ asset('images/slide3.jpg') }}" alt="Family Fun" class="w-full h-full object-cover">
      <div class="absolute inset-0 bg-black/40 flex flex-col items-center justify-center text-center text-white">
        <h2 class="text-5xl font-bold mb-4">Family & Fun</h2>
        <p class="text-lg">Create memories together at our amazing park.</p>
      </div>
    </div>
  </div>

  <!-- Tombol Navigasi -->
  <button
    @click="prev()"
    class="absolute left-5 top-1/2 transform -translate-y-1/2 bg-chocklate text-white rounded-full w-9 h-9 flex items-center justify-center shadow-md hover:bg-yellow-400 transition"
  >‹</button>
  <button
    @click="next()"
    class="absolute right-5 top-1/2 transform -translate-y-1/2 bg-chocklate text-white rounded-full w-9 h-9 flex items-center justify-center shadow-md hover:bg-yellow-400 transition"
  >›</button>

  <!-- Indikator Bulat -->
  <div class="absolute bottom-6 left-1/2 transform -translate-x-1/2 flex space-x-2">
    <template x-for="(slide, index) in slides" :key="index">
      <button
        @click="goTo(index)"
        class="w-2.5 h-2.5 rounded-full transition"
        :class="activeIndex === index ? 'bg-chocklate' : 'bg-white/70'"
      ></button>
    </template>
  </div>
</div>

<!-- OUR STORY -->
<section class="py-20 bg-[#fff7eb] px-6 lg:px-20">
  <div class="max-w-6xl mx-auto text-center">
    <h2 class="text-3xl font-bold text-gray-900 mb-6">Cerita Kami</h2>
    <p class="text-gray-700 leading-relaxed max-w-3xl mx-auto">
      Berawal dari semangat menghadirkan ruang rekreasi yang ramah keluarga, 
      <span class="font-semibold text-chocklate">Ibarbo Park</span> dibangun di tengah alam Yogyakarta sebagai destinasi wisata edukatif dan menyenangkan. 
      Di sini, pengunjung tidak hanya bersenang-senang, tetapi juga belajar mencintai alam, satwa, dan budaya lokal.
    </p>
    <p class="text-gray-700 leading-relaxed max-w-3xl mx-auto mt-4">
      Sejak dibuka, kami terus mengembangkan berbagai area seperti <span class="font-semibold">Aviary, Splash World, Fun Town,</span> dan banyak lagi, 
      agar setiap kunjungan menjadi pengalaman baru penuh cerita.
    </p>
  </div>
</section>

<!-- WHAT WE OFFER -->
<section class="py-16 px-6 lg:px-20 bg-white">
  <div class="max-w-6xl mx-auto text-center">
    <h2 class="text-3xl font-bold text-gray-900 mb-10">Apa yang Kami Tawarkan</h2>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
      <div class="p-6 bg-[#fff7eb] rounded-xl hover:bg-yellow-100 transition">
        <img src="{{ asset('images/aviary-icon.png') }}" class="w-16 mx-auto mb-3" alt="">
        <h3 class="font-semibold text-gray-800">Aviary</h3>
        <p class="text-gray-600 text-sm">Kenali berbagai burung eksotis dalam lingkungan alami mereka.</p>
      </div>
      <div class="p-6 bg-[#fff7eb] rounded-xl hover:bg-yellow-100 transition">
        <img src="{{ asset('images/fun-icon.png') }}" class="w-16 mx-auto mb-3" alt="">
        <h3 class="font-semibold text-gray-800">Ibarbo Fun Town</h3>
        <p class="text-gray-600 text-sm">Wahana permainan keluarga dengan konsep edukatif dan interaktif.</p>
      </div>
      <div class="p-6 bg-[#fff7eb] rounded-xl hover:bg-yellow-100 transition">
        <img src="{{ asset('images/splash-icon.png') }}" class="w-16 mx-auto mb-3" alt="">
        <h3 class="font-semibold text-gray-800">Splash World</h3>
        <p class="text-gray-600 text-sm">Rasakan kesegaran air dan keseruan wahana bermain air anak-anak.</p>
      </div>
      <div class="p-6 bg-[#fff7eb] rounded-xl hover:bg-yellow-100 transition">
        <img src="{{ asset('images/plaza-icon.png') }}" class="w-16 mx-auto mb-3" alt="">
        <h3 class="font-semibold text-gray-800">Plaza & Kuliner</h3>
        <p class="text-gray-600 text-sm">Nikmati suasana santai dengan aneka kuliner khas lokal.</p>
      </div>
    </div>
  </div>
</section>

<!-- CALL TO ACTION -->
<section class="py-20 bg-gradient-to-r from-yellow-400 to-orange-300 text-center text-white">
  <h2 class="text-3xl md:text-4xl font-bold mb-4">Rasakan Petualangan Seru di Ibarbo Park</h2>
  <p class="max-w-2xl mx-auto mb-8 text-white/90">Temukan keceriaan, pembelajaran, dan keindahan alam di satu tempat. Ajak keluarga Anda menjelajahi Ibarbo Park hari ini!</p>
  <a href="{{ url('/contact') }}" class="bg-white text-chocklate px-8 py-3 rounded-full font-semibold hover:bg-yellow-100 transition">
    Hubungi Kami
  </a>
</section>

@endsection

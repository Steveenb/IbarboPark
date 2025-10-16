@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div 
  x-data="carousel()" 
  x-init="start()" 
  class="relative w-full h-screen overflow-hidden"
>

  <!-- Slides Wrapper -->
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
  >
    ‹
  </button>
  <button
    @click="next()"
    class="absolute right-5 top-1/2 transform -translate-y-1/2 bg-chocklate text-white rounded-full w-9 h-9 flex items-center justify-center shadow-md hover:bg-yellow-400 transition"
  >
    ›
  </button>

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

<!-- ================== SECTION TEMPAT POPULER ================== -->
<section class="bg-[#fff7eb] py-16 px-6 lg:px-20">
  <div class="max-w-7xl mx-auto">
    <h2 class="text-2xl font-bold text-gray-900 mb-10">Jelajahi Tempat Populer Kami</h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
      <!-- Card 1 -->
      <div class="bg-white rounded-2xl shadow hover:shadow-lg transition overflow-hidden">
        <img src="{{ asset('images/aviary.jpg') }}" alt="Aviary" class="w-full h-60 object-cover">
        <div class="p-5">
          <h3 class="text-lg font-semibold text-gray-800">Aviary</h3>
          <div class="flex items-center text-sm text-yellow-600 mt-1 space-x-3">
            <span>📅 Every Day</span>
            <span>⏰ 3:10 PM</span>
          </div>
          <p class="text-gray-600 mt-2 text-sm">A tour of the city and its surroundings led by a professional guide...</p>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="bg-white rounded-2xl shadow hover:shadow-lg transition overflow-hidden">
        <img src="{{ asset('images/boomcart.jpg') }}" alt="Boomcart" class="w-full h-60 object-cover">
        <div class="p-5">
          <h3 class="text-lg font-semibold text-gray-800">Boomcart</h3>
          <div class="flex items-center text-sm text-yellow-600 mt-1 space-x-3">
            <span>📅 Monday</span>
            <span>⏰ 10:30 PM</span>
          </div>
          <p class="text-gray-600 mt-2 text-sm">The real magic is here where you can enjoy the best Tuscan wine and eat...</p>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="bg-white rounded-2xl shadow hover:shadow-lg transition overflow-hidden">
        <img src="{{ asset('images/rumahhantu.jpg') }}" alt="Rumah Hantu" class="w-full h-60 object-cover">
        <div class="p-5">
          <h3 class="text-lg font-semibold text-gray-800">Rumah Hantu</h3>
          <div class="flex items-center text-sm text-yellow-600 mt-1 space-x-3">
            <span>📅 To Be Decided</span>
            <span>⏰ 10:50 PM</span>
          </div>
          <p class="text-gray-600 mt-2 text-sm">Visiting the 5 Terre is a must, and you can never go there enough...</p>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- Alpine.js Carousel Script -->
<script>
function carousel() {
  return {
    slides: [1, 2, 3],
    activeIndex: 0,
    interval: null,

    next() {
      this.activeIndex = (this.activeIndex + 1) % this.slides.length;
    },
    prev() {
      this.activeIndex = (this.activeIndex - 1 + this.slides.length) % this.slides.length;
    },
    goTo(index) {
      this.activeIndex = index;
    },
    start() {
      this.interval = setInterval(() => this.next(), 5000);
    },
    stop() {
      clearInterval(this.interval);
    }
  }
}
</script>
@endsection

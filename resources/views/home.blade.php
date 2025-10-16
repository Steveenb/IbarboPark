@extends('layouts.app')

@section('title', 'Home')

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
    <img src="{{ asset('images/BackroundHero1.JPG') }}" alt="Nature Adventure">
      <div class="absolute inset-0 bg-black/40 flex flex-col items-center justify-center text-center text-white">
        <h2 class="text-5xl font-bold mb-4">Adventure Awaits</h2>
        <p class="text-lg">Experience the thrill of nature and fun activities.</p>
      </div>
    </div>

    <!-- Slide 2 -->
    <div class="w-full flex-shrink-0 h-full relative">
      <img src="{{ asset('images/BackroundHero2.JPG') }}" alt="Safari Journey">
      <div class="absolute inset-0 bg-black/40 flex flex-col items-center justify-center text-center text-white">
        <h2 class="text-5xl font-bold mb-4">Discover Wildlife</h2>
        <p class="text-lg">Get close to exotic animals and explore the wild world.</p>
      </div>
    </div>

    <!-- Slide 3 -->
    <div class="w-full flex-shrink-0 h-full relative">
      <img src="{{ asset('images/BackroundHero3.JPG') }}" alt="Family Fun">
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

<!-- ================== SECTION TEMPAT POPULER ================== -->
<section class="bg-[#fff7eb] py-16 px-6 lg:px-20">
  <div class="max-w-7xl mx-auto" 
       x-data="{ scrollLeft() { this.$refs.slider.scrollBy({ left: -350, behavior: 'smooth' }) }, scrollRight() { this.$refs.slider.scrollBy({ left: 350, behavior: 'smooth' }) } }">
    
    <div class="flex justify-between items-center mb-10">
      <h2 class="text-2xl font-bold text-gray-900">Jelajahi Tempat Populer Kami</h2>
      <div class="space-x-2 hidden sm:flex">
        <button @click="scrollLeft" class="p-2 bg-white rounded-full shadow hover:bg-yellow-100 transition">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-chocklate" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
          </svg>
        </button>
        <button @click="scrollRight" class="p-2 bg-white rounded-full shadow hover:bg-yellow-100 transition">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-chocklate" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
          </svg>
        </button>
      </div>
    </div>

    <div x-ref="slider" class="flex space-x-6 overflow-x-auto scroll-smooth no-scrollbar">
      <!-- contoh card -->
      @foreach ([
        ['img' => 'aviary.jpg', 'title' => 'Aviary', 'day' => 'Every Day', 'time' => '3:10 PM', 'desc' => 'A tour led by a professional guide...'],
        ['img' => 'boomcart.jpg', 'title' => 'Boomcart', 'day' => 'Monday', 'time' => '10:30 PM', 'desc' => 'Enjoy the best Tuscan wine and food...'],
        ['img' => 'rumahhantu.jpg', 'title' => 'Rumah Hantu', 'day' => 'To Be Decided', 'time' => '10:50 PM', 'desc' => 'A thrilling haunted house experience...'],
        ['img' => 'splashworld.jpg', 'title' => 'Splash World', 'day' => 'Friday', 'time' => '2:00 PM', 'desc' => 'Fun water park experience for families...'],
      ] as $card)
        <div class="min-w-[300px] bg-white rounded-2xl shadow hover:shadow-lg transition overflow-hidden">
          <img src="{{ asset('images/' . $card['img']) }}" alt="{{ $card['title'] }}" class="w-full h-60 object-cover">
          <div class="p-5">
            <h3 class="text-lg font-semibold text-gray-800">{{ $card['title'] }}</h3>
            <div class="flex items-center text-sm text-yellow-600 mt-1 space-x-3">
              <span>📅 {{ $card['day'] }}</span>
              <span>⏰ {{ $card['time'] }}</span>
            </div>
            <p class="text-gray-600 mt-2 text-sm">{{ $card['desc'] }}</p>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>

<!-- ================== SECTION TENTANG ================== -->
<section class="bg-white py-20 px-6 lg:px-20">
  <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-10 items-center">
    <div>
      <img src="{{ asset('images/about-ibarbo.jpg') }}" alt="Tentang Ibarbo Park" class="rounded-2xl shadow-lg w-full object-cover">
    </div>
    <div>
      <h2 class="text-3xl font-bold text-gray-900 mb-4">Tentang Ibarbo Park Yogyakarta</h2>
      <p class="text-gray-700 leading-relaxed">
        Ibarbo Park adalah taman wisata keluarga yang menghadirkan perpaduan antara edukasi, hiburan, dan petualangan.
        Berlokasi di Sleman, Yogyakarta, tempat ini menjadi destinasi populer bagi wisatawan yang ingin menikmati berbagai wahana seperti Aviary, Splash World, Ibarbo Fun Town, dan lainnya.
      </p>
      <p class="mt-3 text-gray-700 leading-relaxed">
        Dengan area luas, fasilitas lengkap, dan desain yang ramah keluarga, Ibarbo Park menjadi pilihan ideal untuk rekreasi akhir pekan, kegiatan sekolah, atau liburan bersama orang tercinta.
      </p>
      <a href="{{ url('/about') }}" class="mt-6 inline-block bg-chocklate text-white px-6 py-3 rounded-full shadow hover:bg-yellow-500 transition">
        Selengkapnya
      </a>
    </div>
  </div>
</section>

<!-- ================== SECTION TIKET & JAM BUKA ================== -->
<section class="bg-[#fff7eb] py-20 px-6 lg:px-20">
  <div class="max-w-5xl mx-auto text-center">
    <h2 class="text-3xl font-bold text-gray-900 mb-6">Jam Buka & Harga Tiket</h2>
    <p class="text-gray-700 mb-8">Nikmati berbagai wahana seru dengan harga terjangkau untuk seluruh keluarga.</p>
    <div class="overflow-x-auto">
      <table class="min-w-full border border-yellow-200 bg-white rounded-xl shadow">
        <thead class="bg-yellow-100">
          <tr>
            <th class="py-3 px-4 border-b text-gray-800">Hari</th>
            <th class="py-3 px-4 border-b text-gray-800">Jam Operasional</th>
            <th class="py-3 px-4 border-b text-gray-800">Harga Tiket</th>
          </tr>
        </thead>
        <tbody>
          <tr class="text-gray-700 text-center">
            <td class="py-3 px-4 border-b">Senin - Jumat</td>
            <td class="py-3 px-4 border-b">09.00 - 18.30</td>
            <td class="py-3 px-4 border-b">Rp 35.000</td>
          </tr>
          <tr class="text-gray-700 text-center bg-yellow-50">
            <td class="py-3 px-4 border-b">Sabtu - Minggu</td>
            <td class="py-3 px-4 border-b">09.00 - 20.00</td>
            <td class="py-3 px-4 border-b">Rp 40.000</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

<!-- ================== SECTION TESTIMONI ================== -->
<section class="bg-white py-20 px-6 lg:px-20">
  <div class="max-w-6xl mx-auto text-center">
    <h2 class="text-3xl font-bold text-gray-900 mb-8">Apa Kata Pengunjung?</h2>
    <div class="grid md:grid-cols-3 gap-8">
      <div class="bg-[#fff7eb] rounded-2xl shadow p-6">
        <p class="text-gray-700 italic">“Tempatnya bagus banget! Anak-anak senang banget di Splash World.”</p>
        <h4 class="mt-4 font-semibold text-chocklate">– Rina, Sleman</h4>
      </div>
      <div class="bg-[#fff7eb] rounded-2xl shadow p-6">
        <p class="text-gray-700 italic">“Konsepnya keren, banyak spot foto dan area edukatif. Recommended!”</p>
        <h4 class="mt-4 font-semibold text-chocklate">– Dimas, Bantul</h4>
      </div>
      <div class="bg-[#fff7eb] rounded-2xl shadow p-6">
        <p class="text-gray-700 italic">“Harga tiket sesuai banget dengan fasilitasnya. Bersih dan nyaman.”</p>
        <h4 class="mt-4 font-semibold text-chocklate">– Lita, Yogyakarta</h4>
      </div>
    </div>
  </div>
</section>

<!-- ================== SECTION LOKASI & KONTAK ================== -->
<section class="bg-[#fff7eb] py-20 px-6 lg:px-20">
  <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-10 items-center">
    <div>
      <h2 class="text-3xl font-bold text-gray-900 mb-4">Lokasi Ibarbo Park</h2>
      <p class="text-gray-700 mb-4">
        📍 Berlokasi di Sleman, Yogyakarta.  
        Nikmati akses mudah dari pusat kota dengan area parkir luas dan fasilitas lengkap.
      </p>
      <p class="text-gray-700">📞 Kontak: 0812-3456-7890</p>
      <p class="text-gray-700">📧 Email: info@ibarbo-park.com</p>
      <div class="mt-5">
        <a href="https://maps.app.goo.gl/WtdnrDeC1fVv8kQ79" target="_blank" class="bg-chocklate text-white px-5 py-3 rounded-full hover:bg-yellow-500 transition">
          Lihat di Google Maps
        </a>
      </div>
    </div>
    <div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.9770269482738!2d110.33696227455235!3d-7.685613776093151!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5f40b8f7af93%3A0x2d4d22c7100ea043!2sIbarbo%20Park!5e0!3m2!1sid!2sid!4v1760623550048!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
      </iframe>

    </div>
  </div>
</section>


<!-- Hapus scrollbar default -->
<style>
  .no-scrollbar::-webkit-scrollbar { display: none; }
  .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
</style>

<!-- Alpine.js Carousel Script -->
<script>
function carousel() {
  return {
    slides: [1, 2, 3],
    activeIndex: 0,
    interval: null,
    next() { this.activeIndex = (this.activeIndex + 1) % this.slides.length },
    prev() { this.activeIndex = (this.activeIndex - 1 + this.slides.length) % this.slides.length },
    goTo(i) { this.activeIndex = i },
    start() { this.interval = setInterval(() => this.next(), 5000) },
    stop() { clearInterval(this.interval) }
  }
}
</script>

@endsection

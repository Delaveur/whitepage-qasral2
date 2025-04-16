<?php include 'inc/header.php'; ?>
  <!-- Hero Slider -->
  <section x-data="slider()" x-init="start()" class="relative w-full h-60 lg:h-[500px] overflow-hidden">
    <template x-for="(slide, index) in slides" :key="index">
      <div x-show="active === index" x-cloak class="absolute inset-0 transition-opacity duration-700">
        <img :src="slide" class="w-full h-full object-cover" alt="Slide" />
        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
          <div class="text-center text-white px-6">
            <h1 class="text-4xl md:text-6xl font-bold mb-4">A Palace of Grandeur</h1>
            <p class="text-lg md:text-xl">Discover timeless architecture and cultural heritage</p>
          </div>
        </div>
      </div>
    </template>

    <!-- Navigation -->
    <div class="absolute inset-y-0 left-0 flex items-center pl-4">
      <button @click="prev()" class="bg-white/60 hover:bg-white/80 p-2 rounded-full">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#1e1e1e]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
        </svg>
      </button>
    </div>
    <div class="absolute inset-y-0 right-0 flex items-center pr-4">
      <button @click="next()" class="bg-white/60 hover:bg-white/80 p-2 rounded-full">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#1e1e1e]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
        </svg>
      </button>
    </div>

    <!-- Indicators -->
    <div class="absolute bottom-6 left-1/2 transform -translate-x-1/2 flex space-x-2">
      <template x-for="(slide, index) in slides" :key="index">
        <div :class="{'bg-white': active === index, 'bg-white/50': active !== index}" class="w-3 h-3 rounded-full"></div>
      </template>
    </div>
  </section>

<!-- Decorative Divider -->
<div class="w-full h-14 bg-repeat-x bg-[url('/images/divider.png')] bg-center"></div>

  <!-- About Section -->
  <section class="bg-[#e6e1d1] py-16 px-6 md:px-16">
    <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-10 items-center">
      <img src="/images/gallery1.png" alt="About the Palace" class="rounded-lg shadow-lg">
      <div>
        <h2 class="text-3xl md:text-4xl font-bold mb-4">A Legacy Carved in Stone</h2>
        <p class="text-lg leading-relaxed">This architectural marvel stands as a beacon of cultural heritage and timeless elegance. From domes adorned with mosaic to halls bathed in golden light, every element echoes the spirit of knowledge and leadership.</p>
      </div>
    </div>
  </section>

<!-- Decorative Divider -->
<div class="w-full h-14 bg-repeat-x bg-[url('/images/divider.png')] bg-center"></div>

  <!-- Gallery Section -->
  <section class="py-16 px-6 md:px-16">
    <h2 class="text-3xl font-bold text-center mb-10">Architectural Highlights</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 max-w-6xl mx-auto">
      <img src="/images/hospitality-1.png" class="rounded-lg shadow-lg hover:scale-105 transition-transform" alt="Gallery 1">
      <img src="/images/unity-1.png" class="rounded-lg shadow-lg hover:scale-105 transition-transform" alt="Gallery 2">
      <img src="/images/architecture-2.png" class="rounded-lg shadow-lg hover:scale-105 transition-transform" alt="Gallery 3">
      <img src="/images/hospitality-2.png" class="rounded-lg shadow-lg hover:scale-105 transition-transform" alt="Gallery 4">
      <img src="/images/explore-3.png" class="rounded-lg shadow-lg hover:scale-105 transition-transform" alt="Gallery 5">
      <img src="/images/plan-1.png" class="rounded-lg shadow-lg hover:scale-105 transition-transform" alt="Gallery 6">
    </div>
  </section>

  <!-- Knowledge Section -->
  <section class="bg-[#3c322d] text-white py-16 px-6 md:px-16">
    <div class="max-w-4xl mx-auto text-center">
      <h2 class="text-3xl font-bold mb-6">A Sanctuary of Knowledge</h2>
      <p class="text-lg leading-relaxed">The palace is more than beauty — it is a testament to the power of learning and cultural exchange. Here, past and future coexist in harmony, inspiring generations through art, literature, and wisdom.</p>
    </div>
  </section>
<!-- Decorative Divider -->
<div class="w-full h-14 bg-repeat-x bg-[url('/images/divider.png')] bg-center"></div>

<section class="bg-[#e6e1d1] py-16 px-6 md:px-16">
  <div class="max-w-4xl mx-auto">
    <h2 class="text-3xl font-bold text-center mb-12">Historical Timeline</h2>
    <div class="space-y-8 border-l-2 border-[#800020] pl-6">
      <div>
        <span class="text-[#800020] font-semibold">1901</span>
        <p class="text-lg">Construction of the central dome begins, marking the symbolic heart of the palace.</p>
      </div>
      <div>
        <span class="text-[#800020] font-semibold">1923</span>
        <p class="text-lg">Major expansion adds ceremonial halls and the central library.</p>
      </div>
      <div>
        <span class="text-[#800020] font-semibold">1975</span>
        <p class="text-lg">The palace is opened to select public events and educational tours.</p>
      </div>
      <div>
        <span class="text-[#800020] font-semibold">2020</span>
        <p class="text-lg">Restoration completed with enhanced visitor experience and exhibitions.</p>
      </div>
    </div>
  </div>
</section>

<!-- Decorative Divider -->
<div class="w-full h-14 bg-repeat-x bg-[url('/images/divider.png')] bg-center"></div>


<section class="relative bg-cover bg-center py-24 px-6 md:px-16" style="background-image: url('/images/garden.png');">
  <div class="absolute inset-0 bg-black bg-opacity-50"></div>
  <div class="relative max-w-4xl mx-auto text-white text-center">
    <h2 class="text-4xl font-bold mb-4">The Royal Gardens</h2>
    <p class="text-lg md:text-xl">Meticulously landscaped, the gardens reflect harmony between nature and architecture — a tranquil escape surrounding timeless beauty.</p>
  </div>
</section>
<section class="bg-[#e6e1d1] py-16 px-6 md:px-16">
  <div class="max-w-6xl mx-auto text-center">
    <h2 class="text-3xl font-bold mb-12">Palace in Numbers</h2>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-10">
      <div>
        <p class="text-4xl font-bold text-[#800020]">200+</p>
        <p class="mt-2 text-lg">Rooms & Halls</p>
      </div>
      <div>
        <p class="text-4xl font-bold text-[#800020]">100 yrs</p>
        <p class="mt-2 text-lg">of Legacy</p>
      </div>
      <div>
        <p class="text-4xl font-bold text-[#800020]">30M²</p>
        <p class="mt-2 text-lg">of Marble Floors</p>
      </div>
      <div>
        <p class="text-4xl font-bold text-[#800020]">12</p>
        <p class="mt-2 text-lg">Architectural Styles</p>
      </div>
    </div>
  </div>
</section>

  <script>
    function slider() {
      return {
        active: 0,
        slides: [
          "/images/architecture-1.png",
          "/images/architecture-2.png",
          "/images/architecture-3.png"
        ],
        start() {
          setInterval(() => {
            this.active = (this.active + 1) % this.slides.length
          }, 5000);
        },
        next() {
          this.active = (this.active + 1) % this.slides.length;
        },
        prev() {
          this.active = (this.active - 1 + this.slides.length) % this.slides.length;
        }
      }
    }
  </script>
<?php include($_SERVER["DOCUMENT_ROOT"] . "/inc/footer.php");  ?>
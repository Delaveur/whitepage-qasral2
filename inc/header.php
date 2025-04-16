<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="Content-Language" content="en">
  <meta name="language" content="en">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Explore the Palace of Light, a stunning historical site offering captivating exhibitions and insights into art, culture, and history. Visit us for an enriching experience." />
  <meta name="keywords" content="Palace of Light, palace, historical site, art exhibitions, cultural heritage, history, museum, art, cultural site" />

  <link rel="icon" href="/favicon.ico" type="image/x-icon">
  <title><?php echo isset($page_title) ? htmlspecialchars($page_title) : 'Palace of Light'; ?></title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const menuButton = document.getElementById('menu-button');
      const mobileMenu = document.getElementById('mobile-menu');

      menuButton.addEventListener('click', function() {
        const isExpanded = menuButton.getAttribute('aria-expanded') === 'true';
        menuButton.setAttribute('aria-expanded', !isExpanded);
        mobileMenu.classList.toggle('hidden');
        menuButton.querySelector('svg').classList.toggle('rotate-90');
      });
    });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
  <style>
    .slider-enter {
      opacity: 0;
      transform: scale(0.95);
    }

    .slider-enter-active {
      opacity: 1;
      transform: scale(1);
      transition: all 0.7s ease;
    }

    .slider-leave {
      opacity: 1;
      transform: scale(1);
    }

    .slider-leave-active {
      opacity: 0;
      transform: scale(0.95);
      transition: all 0.5s ease;
    }
  </style>
</head>

<body class="bg-[#f9f7f1] text-[#1e1e1e] font-sans">
  <!-- Navigation -->
  <nav class="bg-[#f5f0e6] shadow-md text-[#5c4332] font-serif">
    <div class="container mx-auto px-4">
      <div class="flex justify-between items-center h-20">
        <a href="/" class="text-4xl font-bold tracking-wide text-[#5c4332]">Palace of Light</a>

        <!-- Desktop menu -->
        <div class="hidden md:flex space-x-8 items-center text-base">
          <a href="/about-us/" class="relative group transition-colors duration-300">
            <span class="group-hover:text-[#a67c52]">About us</span>
            <span class="absolute bottom-0 left-1/2 w-0 h-[2px] bg-[#a67c52] group-hover:w-full group-hover:left-0 transition-all duration-300 ease-in-out"></span>
          </a>
          <a href="/en/tickets/" class="relative group transition-colors duration-300">
            <span class="group-hover:text-[#a67c52]">Tickets</span>
            <span class="absolute bottom-0 left-1/2 w-0 h-[2px] bg-[#a67c52] group-hover:w-full group-hover:left-0 transition-all duration-300 ease-in-out"></span>
          </a>
          <a href="/en/explore-the-palace/" class="relative group transition-colors duration-300">
            <span class="group-hover:text-[#a67c52]">Explore the Palace</span>
            <span class="absolute bottom-0 left-1/2 w-0 h-[2px] bg-[#a67c52] group-hover:w-full group-hover:left-0 transition-all duration-300 ease-in-out"></span>
          </a>
          <a href="/en/plan-your-visit/opening-hours#visitors-information" class="relative group transition-colors duration-300">
            <span class="group-hover:text-[#a67c52]">Visitors information</span>
            <span class="absolute bottom-0 left-1/2 w-0 h-[2px] bg-[#a67c52] group-hover:w-full group-hover:left-0 transition-all duration-300 ease-in-out"></span>
          </a>
          <a href="/en/contactus/" class="relative group transition-colors duration-300">
            <span class="group-hover:text-[#a67c52]">Contact Us</span>
            <span class="absolute bottom-0 left-1/2 w-0 h-[2px] bg-[#a67c52] group-hover:w-full group-hover:left-0 transition-all duration-300 ease-in-out"></span>
          </a>
        </div>

        <!-- Mobile button -->
        <button
          id="menu-button"
          class="md:hidden p-2 rounded-md text-[#5c4332] hover:bg-[#e8e1d6] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#a67c52]"
          aria-label="Menu"
          aria-expanded="false"
          aria-controls="mobile-menu">
          <svg class="h-6 w-6 transition-transform" xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
      </div>
    </div>
    <!-- Mobile menu -->
    <div id="mobile-menu" class="md:hidden hidden absolute w-full bg-[#f5f0e6] shadow-lg py-2 z-40 text-[#5c4332]">
      <a href="/about-us/" class="block px-4 py-3 hover:bg-[#e8e1d6] hover:text-[#a67c52] transition-colors">About us</a>
      <a href="/en/tickets/" class="block px-4 py-3 hover:bg-[#e8e1d6] hover:text-[#a67c52] transition-colors">Tickets</a>
      <a href="/en/explore-the-palace/" class="block px-4 py-3 hover:bg-[#e8e1d6] hover:text-[#a67c52] transition-colors">Explore the Palace</a>
      <a href="/en/plan-your-visit/opening-hours#visitors-information" class="block px-4 py-3 hover:bg-[#e8e1d6] hover:text-[#a67c52] transition-colors">Visitors information</a>
      <a href="/en/contactus/" class="block px-4 py-3 hover:bg-[#e8e1d6] hover:text-[#a67c52] transition-colors">Contact Us</a>
    </div>
  </nav>


  <!-- Secondary Navigation -->
  <nav class="bg-[#ede6da] text-[#5c4332] w-full px-4 py-5 shadow-inner border-t border-[#d4cabb]">
    <div class="max-w-screen-xl mx-auto grid grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-4 text-center text-sm font-medium tracking-wide">
      <a href="/symbol/" class="relative group transition-colors duration-300">
        <span class="group-hover:text-[#a67c52] transition-colors">A Symbol of Unity</span>
        <span class="absolute bottom-0 left-1/2 w-0 h-[2px] bg-[#a67c52] group-hover:w-full group-hover:left-0 transition-all duration-300 ease-in-out"></span>
      </a>
      <a href="/traditions/" class="relative group transition-colors duration-300">
        <span class="group-hover:text-[#a67c52] transition-colors">Traditions of Hospitality</span>
        <span class="absolute bottom-0 left-1/2 w-0 h-[2px] bg-[#a67c52] group-hover:w-full group-hover:left-0 transition-all duration-300 ease-in-out"></span>
      </a>
      <a href="/marvels/" class="relative group transition-colors duration-300">
        <span class="group-hover:text-[#a67c52] transition-colors">Architectural Marvels</span>
        <span class="absolute bottom-0 left-1/2 w-0 h-[2px] bg-[#a67c52] group-hover:w-full group-hover:left-0 transition-all duration-300 ease-in-out"></span>
      </a>
      <a href="/evening/" class="relative group transition-colors duration-300">
        <span class="group-hover:text-[#a67c52] transition-colors">Evening Light Show</span>
        <span class="absolute bottom-0 left-1/2 w-0 h-[2px] bg-[#a67c52] group-hover:w-full group-hover:left-0 transition-all duration-300 ease-in-out"></span>
      </a>
    </div>
  </nav>
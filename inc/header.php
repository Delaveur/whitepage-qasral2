<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Language" content="fr">
    <meta name="language" content="fr">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Explore Le Grand Palais, a stunning historical site offering captivating exhibitions and insights into art, culture, and history in France. Visit us for an enriching experience." />
    <meta name="keywords" content="Le Grand Palais, palace, Versailles, art exhibitions, cultural heritage, history, France, museum, art, cultural site, historical site" />
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <title><?php echo isset($page_title) ? htmlspecialchars($page_title) : 'Le Grand Palais'; ?></title>
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
        <a href="/decouvrir/histoire/" class="relative group transition-colors duration-300">
          <span class="group-hover:text-[#a67c52]">Histoire</span>
          <span class="absolute bottom-0 left-1/2 w-0 h-[2px] bg-[#a67c52] group-hover:w-full group-hover:left-0 transition-all duration-300 ease-in-out"></span>
        </a>
        <a href="/preparer-ma-visite/" class="relative group transition-colors duration-300">
          <span class="group-hover:text-[#a67c52]">Préparer ma visite</span>
          <span class="absolute bottom-0 left-1/2 w-0 h-[2px] bg-[#a67c52] group-hover:w-full group-hover:left-0 transition-all duration-300 ease-in-out"></span>
        </a>
        <a href="/preparer-ma-visite/informations-pratiques/" class="relative group transition-colors duration-300">
          <span class="group-hover:text-[#a67c52]">Informations Pratiques</span>
          <span class="absolute bottom-0 left-1/2 w-0 h-[2px] bg-[#a67c52] group-hover:w-full group-hover:left-0 transition-all duration-300 ease-in-out"></span>
        </a>
        <a href="/preparer-ma-visite/billets-tarifs/" class="relative group transition-colors duration-300">
          <span class="group-hover:text-[#a67c52]">Billets & Tarifs</span>
          <span class="absolute bottom-0 left-1/2 w-0 h-[2px] bg-[#a67c52] group-hover:w-full group-hover:left-0 transition-all duration-300 ease-in-out"></span>
        </a>
        <a href="/actualites/agenda-chateau-versailles/" class="relative group transition-colors duration-300">
          <span class="group-hover:text-[#a67c52]">Agenda</span>
          <span class="absolute bottom-0 left-1/2 w-0 h-[2px] bg-[#a67c52] group-hover:w-full group-hover:left-0 transition-all duration-300 ease-in-out"></span>
        </a>
        <a href="/contact-us/" class="relative group transition-colors duration-300">
          <span class="group-hover:text-[#a67c52]">Contacts</span>
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
    <a href="/decouvrir/histoire/" class="block px-4 py-3 hover:bg-[#e8e1d6] hover:text-[#a67c52] transition-colors">Histoire</a>
    <a href="/preparer-ma-visite/" class="block px-4 py-3 hover:bg-[#e8e1d6] hover:text-[#a67c52] transition-colors">Préparer ma visite</a>
    <a href="/preparer-ma-visite/informations-pratiques/" class="block px-4 py-3 hover:bg-[#e8e1d6] hover:text-[#a67c52] transition-colors">Informations Pratiques</a>
    <a href="/preparer-ma-visite/billets-tarifs/" class="block px-4 py-3 hover:bg-[#e8e1d6] hover:text-[#a67c52] transition-colors">Billets & Tarifs</a>
    <a href="/actualites/agenda-chateau-versailles/" class="block px-4 py-3 hover:bg-[#e8e1d6] hover:text-[#a67c52] transition-colors">Agenda</a>
    <a href="/contact-us/" class="block px-4 py-3 hover:bg-[#e8e1d6] hover:text-[#a67c52] transition-colors">Contacts</a>
  </div>
</nav>


<!-- Secondary Navigation -->
<nav class="bg-[#ede6da] text-[#5c4332] w-full px-4 py-5 shadow-inner border-t border-[#d4cabb]">
  <div class="max-w-screen-xl mx-auto grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4 text-center text-sm font-medium tracking-wide">
    <a href="/chambres/" class="relative group transition-colors duration-300">
      <span class="group-hover:text-[#a67c52] transition-colors">Chambres Royales</span>
      <span class="absolute bottom-0 left-1/2 w-0 h-[2px] bg-[#a67c52] group-hover:w-full group-hover:left-0 transition-all duration-300 ease-in-out"></span>
    </a>
    <a href="/tours/" class="relative group transition-colors duration-300">
      <span class="group-hover:text-[#a67c52] transition-colors">Tours Intemporelles</span>
      <span class="absolute bottom-0 left-1/2 w-0 h-[2px] bg-[#a67c52] group-hover:w-full group-hover:left-0 transition-all duration-300 ease-in-out"></span>
    </a>
    <a href="/escalier/" class="relative group transition-colors duration-300">
      <span class="group-hover:text-[#a67c52] transition-colors">Le Grand Escalier</span>
      <span class="absolute bottom-0 left-1/2 w-0 h-[2px] bg-[#a67c52] group-hover:w-full group-hover:left-0 transition-all duration-300 ease-in-out"></span>
    </a>
    <a href="/chandelles/" class="relative group transition-colors duration-300">
      <span class="group-hover:text-[#a67c52] transition-colors">Visite aux Chandelles</span>
      <span class="absolute bottom-0 left-1/2 w-0 h-[2px] bg-[#a67c52] group-hover:w-full group-hover:left-0 transition-all duration-300 ease-in-out"></span>
    </a>
    <a href="/baroque/" class="relative group transition-colors duration-300">
      <span class="group-hover:text-[#a67c52] transition-colors">Concert Baroque</span>
      <span class="absolute bottom-0 left-1/2 w-0 h-[2px] bg-[#a67c52] group-hover:w-full group-hover:left-0 transition-all duration-300 ease-in-out"></span>
    </a>
    <a href="/jardins/" class="relative group transition-colors duration-300">
      <span class="group-hover:text-[#a67c52] transition-colors">Illumination des Jardins</span>
      <span class="absolute bottom-0 left-1/2 w-0 h-[2px] bg-[#a67c52] group-hover:w-full group-hover:left-0 transition-all duration-300 ease-in-out"></span>
    </a>
  </div>
</nav>


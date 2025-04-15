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
    <nav class="bg-[#1a1a1a] shadow-md text-white font-serif">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center h-16">
                <a href="/" class="text-4xl font-bold tracking-wide italic font-imperial text-[#FFD700]">Le Grand Palais</a>
                <!-- Desktop menu -->
                <div class="hidden md:flex space-x-8 items-center text-base">
                    <a href="/decouvrir/histoire/" class="hover:text-[#FFD700] transition-colors">Histoire</a>
                    <a href="/preparer-ma-visite/" class="hover:text-[#FFD700] transition-colors">Préparer ma visite</a>
                    <a href="/preparer-ma-visite/informations-pratiques/" class="hover:text-[#FFD700] transition-colors">Informations Pratiques</a>
                    <a href="/preparer-ma-visite/billets-tarifs/" class="hover:text-[#FFD700] transition-colors">Billets & Tarifs</a>
                    <a href="/actualites/agenda-chateau-versailles/" class="hover:text-[#FFD700] transition-colors">Agenda</a>
                    <a href="/contact-us/" class="hover:text-[#FFD700] transition-colors">Contacts</a>
                </div>
                <!-- Mobile button -->
                <button
                    id="menu-button"
                    class="md:hidden p-2 rounded-md text-[#FFD700] hover:bg-[#262626] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#FFD700]"
                    aria-label="Menu"
                    aria-expanded="false"
                    aria-controls="mobile-menu">
                    <svg
                        class="h-6 w-6 transition-transform"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
        <!-- Mobile menu -->
        <div id="mobile-menu" class="md:hidden hidden absolute w-full bg-[#1a1a1a] shadow-lg py-2 z-40 text-white">
            <a href="/decouvrir/histoire/" class="block px-4 py-3 hover:bg-[#262626] hover:text-[#FFD700] transition-colors">Histoire</a>
            <a href="/preparer-ma-visite/" class="block px-4 py-3 hover:bg-[#262626] hover:text-[#FFD700] transition-colors">Préparer ma visite</a>
            <a href="/preparer-ma-visite/informations-pratiques/" class="block px-4 py-3 hover:bg-[#262626] hover:text-[#FFD700] transition-colors">Informations Pratiques</a>
            <a href="/preparer-ma-visite/billets-tarifs/" class="block px-4 py-3 hover:bg-[#262626] hover:text-[#FFD700] transition-colors">Billets & Tarifs</a>
            <a href="/actualites/agenda-chateau-versailles/" class="block px-4 py-3 hover:bg-[#262626] hover:text-[#FFD700] transition-colors">Agenda</a>
            <a href="/contact-us/" class="block px-4 py-3 hover:bg-[#262626] hover:text-[#FFD700] transition-colors">Contacts</a>
        </div>
    </nav>
    <!-- Secondary Navigation -->
    <nav class="bg-[#800020] text-yellow-200 w-full px-4 py-4">
        <div class="max-w-screen-xl mx-auto grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4 text-center text-sm font-medium tracking-wide">
            <a href="/chambres/" class="hover:text-white transition-colors">Chambres Royales</a>
            <a href="/tours/" class="hover:text-white transition-colors">Tours Intemporelles</a>
            <a href="/escalier/" class="hover:text-white transition-colors">Le Grand Escalier</a>
            <a href="/chandelles/" class="hover:text-white transition-colors">Visite aux Chandelles</a>
            <a href="/baroque/" class="hover:text-white transition-colors">Concert Baroque</a>
            <a href="/jardins/" class="hover:text-white transition-colors">Illumination des Jardins</a>
        </div>
    </nav>
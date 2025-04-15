<footer class="bg-gray-800 text-white">
  <div class="container mx-auto px-4 py-8">
    <div class="grid md:grid-cols-3 gap-8">
      <div>
        <h4 class="text-5xl text-[#FFD700] font-imperial italic mb-4">En savoir plus sur le projet</h4>
        <p class="text-gray-400">Il s'agit d'un portail informatif par IT TECH SERVICES & CONSULTATION LTD, consacré à l'un des sites les plus emblématiques de France. Ici, vous découvrirez des informations historiques, des détails fascinants sur son architecture et ses jardins, ainsi que des mises à jour sur ses expositions et événements. Notre objectif est de créer une expérience immersive pour tous ceux qui souhaitent explorer la majesté et l'héritage du Grand Palais.</p>
      </div>
      <div>
        <h4 class="text-5xl text-[#FFD700] font-imperial italic mb-4">Navigation</h4>
        <ul class="space-y-2">
          <li><a href="/" class="hover:text-[#FFD700]">Page principale</a></li>
          <li><a href="/decouvrir/histoire/" class="hover:text-[#FFD700]">À propos</a></li>
          <li><a href="/contact-us/" class="hover:text-[#FFD700]">Contacts</a></li>
          <li><a href="/privacy.php" class="hover:text-[#FFD700]">Politique de confidentialité</a></li>
          <li><a href="/terms.php" class="hover:text-[#FFD700]">Conditions d'utilisation</a></li>
        </ul>
      </div>
      <div>
        <h4 class="text-5xl text-[#FFD700] font-imperial italic mb-4">Contacts</h4>
        <p class="text-gray-400">Email: consultation@ittechservices.com</p>
        <p class="text-gray-400">Phone: +33 6 72 58 39 14</p>
        <p class="text-gray-400">Address: 15 Rue du Général Leclerc, 78000, Versailles, France</p>
      </div>
    </div>
    <div class="border-t border-gray-700 mt-8 pt-4 text-center text-gray-400">
      &copy; <?php echo date("Y"); ?> IT TECH SERVICES & CONSULTATION LTD. Tous Droits Réservés.
    </div>
  </div>
</footer>
<!-- Cookies Notice -->
<div id="cookie-notice" class="fixed bottom-0 left-0 w-full bg-gray-800 text-white p-4 text-center" style="display: none;">
  <p>Nous utilisons des cookies pour améliorer votre expérience. En continuant, vous acceptez notre <a href="/privacy.php" class="text-blue-400 underline">Politique de confidentialité</a>.</p>
  <button id="accept-cookies" class="bg-blue-500 text-white px-4 py-2 rounded mt-2">Accepter</button>
</div>
<script>
  const cookieNotice = document.getElementById('cookie-notice');
  const acceptCookies = document.getElementById('accept-cookies');
  if (!localStorage.getItem('cookiesAccepted')) {
    cookieNotice.style.display = 'block';
  }
  acceptCookies.addEventListener('click', () => {
    localStorage.setItem('cookiesAccepted', 'true');
    cookieNotice.style.display = 'none';
  });
</script>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    const faders = document.querySelectorAll('.fade-in');
    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
          observer.unobserve(entry.target);
        }
      });
    }, {
      threshold: 0.2
    });
    faders.forEach(el => observer.observe(el));
  });
</script>
</body>

</html>
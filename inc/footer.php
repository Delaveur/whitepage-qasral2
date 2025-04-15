<footer class="bg-[#2a2a2a] text-[#f2f2f2] font-serif text-base">
  <div class="max-w-screen-xl mx-auto px-4 py-12">
    <div class="grid md:grid-cols-3 gap-12">
      <!-- About -->
      <div>
        <h4 class="text-2xl font-semibold text-[#e8d8a8] mb-4 tracking-wide">About the Project</h4>
        <p class="text-[#d0d0d0] leading-relaxed">
          This is an informational portal by IT TECH SERVICES & CONSULTATION LTD, dedicated to one of the most iconic cultural landmarks of the Middle East. Discover its historical background, architectural highlights, exquisite interiors and exhibitions. Our mission is to offer an immersive experience for those seeking to explore the grandeur and legacy of the Palace of Light.
        </p>
      </div>

      <!-- Navigation -->
      <div>
        <h4 class="text-2xl font-semibold text-[#e8d8a8] mb-4 tracking-wide">Navigation</h4>
        <ul class="space-y-2 text-[#d0d0d0]">
          <li><a href="/" class="transition duration-300 hover:text-[#e8d8a8] hover:border-b border-[#e8d8a8]">Home</a></li>
          <li><a href="/decouvrir/histoire/" class="transition duration-300 hover:text-[#e8d8a8] hover:border-b border-[#e8d8a8]">About</a></li>
          <li><a href="/contact-us/" class="transition duration-300 hover:text-[#e8d8a8] hover:border-b border-[#e8d8a8]">Contact</a></li>
          <li><a href="/privacy.php" class="transition duration-300 hover:text-[#e8d8a8] hover:border-b border-[#e8d8a8]">Privacy Policy</a></li>
          <li><a href="/terms.php" class="transition duration-300 hover:text-[#e8d8a8] hover:border-b border-[#e8d8a8]">Terms of Use</a></li>
        </ul>
      </div>

      <!-- Contact -->
      <div>
        <h4 class="text-2xl font-semibold text-[#e8d8a8] mb-4 tracking-wide">Contact</h4>
        <p class="text-[#d0d0d0]">Email: consultation@ittechservices.com</p>
        <p class="text-[#d0d0d0]">Phone: +33 6 72 58 39 14</p>
        <p class="text-[#d0d0d0]">Address: 15 Rue du Général Leclerc, 78000, Versailles, France</p>
      </div>
    </div>

    <div class="border-t border-[#444] mt-12 pt-6 text-center text-sm text-[#aaa]">
      &copy; <?php echo date("Y"); ?> IT TECH SERVICES & CONSULTATION LTD. All Rights Reserved.
    </div>
  </div>
</footer>

<!-- Cookie Notice -->
<div id="cookie-notice" class="fixed bottom-0 left-0 w-full bg-[#1a1a1a] text-white p-4 text-center z-50 shadow-lg font-serif" style="display: none;">
  <p class="text-sm">
    We use cookies to improve your experience on our site. By continuing to browse, you accept our 
    <a href="/privacy.php" class="text-[#FFD700] underline hover:text-white transition">Privacy Policy</a>.
  </p>
  <button id="accept-cookies" class="mt-3 px-6 py-2 bg-[#FFD700] text-black font-semibold rounded hover:bg-yellow-400 transition">
    Accept
  </button>
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
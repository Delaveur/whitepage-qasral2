<?php
$page_title = "Contact Us";
include($_SERVER["DOCUMENT_ROOT"] . "/inc/header.php"); ?>
<section class="pt-12 mb-12 text-center">
  <h1 class="text-6xl font-serif text-[#2d2d2d] mb-4">Contact Us</h1>
  <p class="text-lg text-[#5c4332] text-center mb-12 relative">
    <span class="absolute inset-0 border-b-4 border-[#5c4332] -mb-2"></span>
    <span class="relative">We're here to help you plan your perfect visit.</span>
  </p>
</section>

<!-- Contact Section -->
<section id="contacts" class="bg-[#f9f7f1] py-16 px-6 text-[#2d2d2d]">
  <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-8 items-stretch">
    <div class="relative w-full h-full">
      <iframe src="https://maps.google.com/maps?q=Baynunah%20Street,%20Al%20Ras%20Al%20Akhdar,%20Abu%20Dhabi,%20UAE&t=&z=15&ie=UTF8&iwloc=&output=embed" class="w-full h-full min-h-[500px] rounded-2xl shadow-lg border-0"></iframe>
      <div class="absolute bottom-4 left-4 bg-white bg-opacity-90 rounded-xl p-4 shadow-lg">
        <p class="text-lg mb-1 text-[#2d2d2d]"><strong class="text-[#5c4332]">Email:</strong> consultation@ittechservices.com</p>
        <p class="text-lg mb-1 text-[#2d2d2d]"><strong class="text-[#5c4332]">Phone:</strong> +971 58 762 3147</p>
        <p class="text-lg text-[#2d2d2d]"><strong class="text-[#5c4332]">Address:</strong> Baynunah Street, Al Ras Al Akhdar, Abu Dhabi, UAE</p>
      </div>
    </div>
    <div class="bg-white rounded-2xl shadow-lg p-8 flex flex-col justify-center border border-[#e5e0d8]">
      <!-- Contact Form -->
      <form action="contact.php" method="POST">
        <div class="mb-4">
          <label for="lastName" class="block mb-2 text-[#5c4332]">Last Name</label>
          <input type="text" id="lastName" name="lastName" class="w-full p-2 border border-[#ccc] rounded-lg">
        </div>
        <div class="mb-4">
          <label for="firstName" class="block mb-2 text-[#5c4332]">First Name</label>
          <input type="text" id="firstName" name="firstName" class="w-full p-2 border border-[#ccc] rounded-lg">
        </div>
        <div class="mb-4">
          <label for="email" class="block mb-2 text-[#5c4332]">Email</label>
          <input type="email" id="email" name="email" class="w-full p-2 border border-[#ccc] rounded-lg">
        </div>
        <div class="mb-4">
          <label for="message" class="block mb-2 text-[#5c4332]">Message</label>
          <textarea id="message" name="message" rows="4" class="w-full p-2 border border-[#ccc] rounded-lg"></textarea>
        </div>
        <button type="submit" class="bg-[#5c4332] text-white font-bold py-2 px-4 rounded-lg hover:bg-[#4b3627] transition">Send</button>
      </form>
    </div>
  </div>
</section>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/inc/footer.php");  ?>
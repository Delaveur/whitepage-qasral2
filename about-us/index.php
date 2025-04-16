<?php
$page_title = "About Us";
include($_SERVER["DOCUMENT_ROOT"] . "/inc/header.php"); ?>
<div class="container mx-auto px-4 py-12 bg-[#f9f7f1]">
    <!-- Main Title -->
    <h1 class="text-6xl font-serif text-[#2d2d2d] mb-4 text-center">About Us</h1>
    
    <!-- Subtitle with decoration -->
    <p class="text-lg text-[#5c4332] text-center mb-12 relative">
        <span class="absolute inset-0 border-b-4 border-[#5c4332] -mb-2"></span>
        <span class="relative">Learn more about our mission, vision, and history.</span>
    </p>

    <!-- Block 1 -->
    <div class="flex flex-col md:flex-row items-center mb-16">
        <div class="md:w-1/2 mb-8 md:mb-0">
            <img src="/images/gallery1.png" alt="Company Image" class="w-full h-auto rounded-lg shadow-lg">
        </div>
        <div class="md:w-1/2 pl-4">
            <h2 class="text-3xl text-[#5c4332] mb-4">Our History</h2>
            <p class="text-[#2d2d2d] mb-4">Founded in the early 21st century, our company has been dedicated to providing exceptional services in various industries. With a strong focus on innovation and customer satisfaction, we have established ourselves as a leader in our field. Over the years, we have expanded our reach globally, helping clients from all corners of the world achieve their goals.</p>
            <p class="text-[#2d2d2d] mb-4">Our journey started with a single vision: to make a difference. Since then, we have continuously evolved to meet the needs of our diverse client base. Today, we stand as a beacon of excellence, driven by our passion for creating lasting solutions and fostering strong relationships with those we serve.</p>
            <blockquote class="text-xl italic text-[#5c4332]">"Innovation and excellence have always been at the heart of our mission."</blockquote>
        </div>
    </div>

    <!-- Block 2 -->
    <div class="flex flex-col md:flex-row-reverse items-center mb-16">
        <div class="md:w-1/2 mb-8 md:mb-0">
            <img src="/images/explore-2.png" alt="Company Vision" class="w-full h-auto rounded-lg shadow-lg">
        </div>
        <div class="md:w-1/2 pr-4">
            <h2 class="text-3xl text-[#5c4332] mb-4">Our Vision</h2>
            <p class="text-[#2d2d2d] mb-4">Our vision is to continue being a trusted partner to our clients, providing innovative and sustainable solutions that drive their success. We aim to be at the forefront of technological advancements and to inspire a new generation of thinkers and doers. By focusing on quality and sustainability, we plan to contribute positively to the world around us.</p>
            <p class="text-[#2d2d2d] mb-4">We believe in creating a future where collaboration and creativity shape the world. We envision a world where progress is achieved through partnership, and where everyone, regardless of their background, can contribute to a better tomorrow.</p>
            <blockquote class="text-xl italic text-[#5c4332]">"The future belongs to those who believe in the power of collaboration."</blockquote>
        </div>
    </div>

    <!-- Block 3 -->
    <div class="flex flex-col md:flex-row items-center mb-16">
        <div class="md:w-1/2 mb-8 md:mb-0">
            <img src="/images/unity-1.png" alt="Company Mission" class="w-full h-auto rounded-lg shadow-lg">
        </div>
        <div class="md:w-1/2 pl-4">
            <h2 class="text-3xl text-[#5c4332] mb-4">Our Mission</h2>
            <p class="text-[#2d2d2d] mb-4">At the core of our operations is a commitment to integrity, transparency, and excellence. We strive to ensure that every project we undertake reflects these values, delivering superior results that exceed client expectations. Our mission is not just about completing tasks, but about making a meaningful impact.</p>
            <p class="text-[#2d2d2d] mb-4">We aim to build lasting relationships, grounded in trust and mutual respect, while continuing to innovate and improve. Our mission is driven by a desire to help our clients realize their full potential, and we do this by offering tailored solutions that address their unique challenges and opportunities.</p>
            <blockquote class="text-xl italic text-[#5c4332]">"Excellence is not an act, but a habit that defines us every day."</blockquote>
        </div>
    </div>
</div>
<?php include($_SERVER["DOCUMENT_ROOT"] . "/inc/footer.php");  ?>
<?php
$page_title = "Visitors Information";
include($_SERVER["DOCUMENT_ROOT"] . "/inc/header.php"); ?>
<section class="bg-[#f9f7f1] py-16">
    <div class="container mx-auto px-6">
        <!-- Main Title -->
        <h1 class="text-6xl font-serif text-[#2d2d2d] mb-4 text-center">Visitor Information</h1>

        <!-- Subtitle with decoration -->
        <p class="text-lg text-[#5c4332] text-center mb-12 relative">
            <span class="absolute inset-0 border-b-4 border-[#5c4332] -mb-2"></span>
            <span class="relative">Everything you need to know before your visit.</span>
        </p>

        <!-- Block 1 -->
        <div id="visitors-information" class="flex flex-col md:flex-row items-center mb-16">
            <img src="/images/visitors-3.png" alt="Visitor Guidelines" class="w-full md:w-1/2 mb-6 md:mb-0 md:mr-6">
            <div class="w-full md:w-1/2 text-[#2d2d2d]">
                <h2 class="text-3xl font-serif text-[#5c4332] mb-4">Visitor Guidelines</h2>
                <p class="mb-4">To maintain the pristine elegance and cultural integrity of the Palace of Light, we ask all guests to follow a set of visitor guidelines. These ensure both safety and respect for the heritage on display. Please refrain from touching exhibits, maintain a respectful noise level, and adhere to designated walkways. Security personnel are available throughout the site to offer assistance and enforce regulations.</p>
                <p class="mb-4">Photography is permitted in most areas unless otherwise indicated. Flash photography and the use of tripods are restricted to preserve artworks. Kindly dispose of waste in provided bins and remain mindful of fellow visitors’ experience. These shared responsibilities help us preserve the palace’s beauty for generations to come.</p>
                <blockquote class="border-l-4 border-[#5c4332] pl-4 italic mb-4">“Respecting the space means honoring its story.”</blockquote>
                <ul class="list-disc list-inside">
                    <li>No flash photography</li>
                    <li>Keep noise to a minimum</li>
                    <li>Follow directional signs and staff instructions</li>
                </ul>
            </div>
        </div>

        <!-- Block 2 -->
        <div class="flex flex-col md:flex-row items-center mb-16">
            <div class="w-full md:w-1/2 text-[#2d2d2d] md:order-1 order-2">
                <h2 class="text-3xl font-serif text-[#5c4332] mb-4">Opening Hours</h2>
                <p class="mb-4">The Palace of Light welcomes visitors year-round, offering flexible schedules tailored to seasonal preferences and special events. It is recommended to check the official opening hours prior to arrival to accommodate for national holidays or exclusive ceremonies. Early morning visits provide a serene atmosphere, while late afternoon tours capture the beauty of the palace in golden hues.</p>
                <p class="mb-4">Opening times vary slightly throughout the year. Typically, doors open at 9:00 AM and close by 7:00 PM. Last admission is an hour before closing. All timings are subject to change due to private events or maintenance periods. Visitors can confirm updated timings through our official communication channels.</p>
                <blockquote class="border-l-4 border-[#5c4332] pl-4 italic mb-4">“Every hour spent here is a step deeper into magnificence.”</blockquote>
                <ul class="list-disc list-inside">
                    <li>Typical hours: 9:00 AM – 7:00 PM</li>
                    <li>Last entry: 6:00 PM</li>
                    <li>Visit during weekdays for fewer crowds</li>
                </ul>
            </div>
            <img src="/images/opening-2.png" alt="Opening Hours" class="w-full md:w-1/2 mb-6 md:mb-0 md:ml-6 md:order-2 order-1">
        </div>

        <!-- Block 3 -->
        <div class="flex flex-col md:flex-row items-center">
            <img src="/images/plan-1.png" alt="Plan Your Visit" class="w-full md:w-1/2 mb-6 md:mb-0 md:mr-6">
            <div class="w-full md:w-1/2 text-[#2d2d2d]">
                <h2 class="text-3xl font-serif text-[#5c4332] mb-4">Plan Your Visit</h2>
                <p class="mb-4">Planning your visit to the Palace of Light ensures a rich and fulfilling experience. Start by reviewing our recommendations for a well-organized trip. Be sure to check the latest guidelines on group visits, family tours, and accessibility options to make the most out of your journey. Whether you are a first-time guest or a returning admirer, having a clear plan allows you to fully appreciate the grandeur and heritage preserved within these walls.</p>
                <p class="mb-4">Visitors are encouraged to allocate sufficient time for each section of the palace, including the public halls, exhibitions, and gardens. We recommend comfortable walking shoes and light attire, as the exploration can span several hours. Complimentary maps are available at the entrance to help guide your experience, while our staff is always ready to assist with information and directions.</p>
                <blockquote class="border-l-4 border-[#5c4332] pl-4 italic mb-4">“A well-planned visit unlocks the soul of the Palace of Light.”</blockquote>
                <ul class="list-disc list-inside">
                    <li>Review our visit tips</li>
                    <li>Explore both indoor and outdoor areas</li>
                    <li>Ask staff for guided assistance</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<?php include($_SERVER["DOCUMENT_ROOT"] . "/inc/footer.php");  ?>
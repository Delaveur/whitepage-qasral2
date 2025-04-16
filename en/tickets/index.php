<?php
$page_title = "Tickets";
include($_SERVER["DOCUMENT_ROOT"] . "/inc/header.php"); ?>
<section class="bg-[#f9f7f1] py-16">
    <div class="container mx-auto px-6">
        <!-- Main Title -->
        <h1 class="text-6xl font-serif text-[#2d2d2d] mb-4 text-center">Tickets</h1>

        <!-- Subtitle with decoration -->
        <p class="text-lg text-[#5c4332] text-center mb-12 relative">
            <span class="absolute inset-0 border-b-4 border-[#5c4332] -mb-2"></span>
            <span class="relative">Plan your visit to the Palace of Light with ease and elegance.</span>
        </p>

        <!-- Block 1 -->
        <div class="md:flex md:items-center mb-16">
            <div class="md:w-1/2 mb-6 md:mb-0 md:mr-8">
                <img src="/images/tickets-1.png" alt="Ticket counter" class="w-full rounded-lg shadow-lg">
            </div>
            <div class="md:w-1/2 text-[#2d2d2d] text-lg space-y-4">
                <p>The Palace of Light offers a seamless ticketing experience, designed to make your journey into history effortless and inspiring. From majestic halls to intricate courtyards, your admission grants access to an extraordinary cultural and architectural heritage.</p>
                <p>We provide flexible options that accommodate individuals, families, and groups, ensuring that every guest feels welcomed and valued. Our team is committed to creating a smooth entry experience that reflects the grandeur of the palace itself.</p>
                <ul class="list-disc list-inside">
                    <li>Flexible entry hours</li>
                    <li>Guided and self-guided options</li>
                    <li>Priority access for reservations</li>
                </ul>
                <blockquote class="border-l-4 border-[#5c4332] pl-4 italic text-[#5c4332]">“A doorway into history, made accessible for all.”</blockquote>
            </div>
        </div>

        <!-- Block 2 -->
        <div class="md:flex md:flex-row-reverse md:items-center mb-16">
            <div class="md:w-1/2 mb-6 md:mb-0 md:ml-8">
                <img src="/images/tickets-2.png" alt="Visitors at entrance" class="w-full rounded-lg shadow-lg">
            </div>
            <div class="md:w-1/2 text-[#2d2d2d] text-lg space-y-4">
                <p>Whether you're planning a quiet weekday visit or attending one of our seasonal events, it's easy to reserve your place. Our online ticket portal ensures convenient access from anywhere in the world. Once booked, tickets are valid for a future date, giving you full control over your itinerary.</p>
                <p>All visitors are encouraged to review our calendar for upcoming exhibitions and cultural programming. Entry times are designed to reduce crowding and allow guests to explore in comfort and tranquility.</p>
                <ul class="list-disc list-inside">
                    <li>Book now, visit later</li>
                    <li>Access to exhibitions and gardens included</li>
                    <li>Multilingual visitor support</li>
                </ul>
                <blockquote class="border-l-4 border-[#5c4332] pl-4 italic text-[#5c4332]">“Reserve today, explore tomorrow.”</blockquote>
            </div>
        </div>

        <!-- Block 3 -->
        <div class="md:flex md:items-center mb-16">
            <div class="md:w-1/2 mb-6 md:mb-0 md:mr-8">
                <img src="/images/tickets-3.png" alt="Ticket information display" class="w-full rounded-lg shadow-lg">
            </div>
            <div class="md:w-1/2 text-[#2d2d2d] text-lg space-y-4">
                <p>We recommend booking your visit in advance, especially during peak seasons and holidays. This ensures availability and gives you priority access during your selected time window. Please note that entry schedules are regularly updated to reflect upcoming dates.</p>
                <p>As part of our commitment to accessibility, we offer accommodations for guests with specific needs. Please contact us ahead of your visit for assistance or special arrangements.</p>
                <ul class="list-disc list-inside">
                    <li>Advance booking recommended</li>
                    <li>Current schedule updates provided below</li>
                    <li>Support for accessibility available</li>
                </ul>
                <blockquote class="border-l-4 border-[#5c4332] pl-4 italic text-[#5c4332]">“Every guest deserves a royal welcome.”</blockquote>
                <p class="mt-6 text-sm text-[#5c4332]">Next available date: <strong><?php echo date('F j, Y', strtotime('+7 days')); ?></strong></p>
            </div>
        </div>
    </div>
</section>
<?php include($_SERVER["DOCUMENT_ROOT"] . "/inc/footer.php");  ?>
<?php
    $pageTitle = "About Us | Conzura Soft Solutions";
    include 'partials/header.php';
?>

<section class="relative py-32 lg:py-40 bg-dark-charcoal text-center overflow-hidden">
    <div class="relative z-10 px-4">
        <h1 class="hero-headline font-display text-5xl md:text-7xl font-extrabold text-white" data-aos="fade-up">
            About Conzura
        </h1>
        <p class="hero-subheadline text-lg md:text-xl max-w-3xl mx-auto mt-6 text-gray-300" data-aos="fade-up" data-aos-delay="100">
            We are a team of passionate creators, thinkers, and innovators dedicated to building the future of digital products.
        </p>
    </div>
</section>

<section class="py-24 bg-dark-bg">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div data-aos="fade-right">
                <img src="./assets/images/logo2.png" alt="Conzura Soft Solutions Team" class="rounded-2xl shadow-2xl">
            </div>
            <div data-aos="fade-left" data-aos-delay="100">
                <h2 class="font-display text-4xl font-bold text-white mb-4">Our Story</h2>
                <p class="text-lg text-gray-300 mb-6">
                    Based in Hyderabad, Conzura Soft Solutions was founded with a single mission: to transform ambitious ideas into powerful, web-based realities. We build, develop, and shape your initial thoughts into complete digital solutions.
                </p>
                <p class="text-gray-400">
                    Our client list of over 1500 customers worldwide is a testament to our commitment to quality, dedication, and timely project completion. The loyalty of our clients is our greatest achievement.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-dark-charcoal border-y border-gray-800">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
            <div data-aos="fade-up">
                <span class="counter-number text-accent-orange" data-target="1500">0</span><span class="counter-number text-accent-orange">+</span>
                <p class="text-gray-400 mt-2 text-lg">Satisfied Clients</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="100">
                <span class="counter-number text-accent-cyan" data-target="2000">0</span><span class="counter-number text-accent-cyan">+</span>
                <p class="text-gray-400 mt-2 text-lg">Projects Completed</p>
            </div>
             <div data-aos="fade-up" data-aos-delay="200">
                <span class="counter-number text-primary" data-target="10">0</span><span class="counter-number text-primary">+</span>
                <p class="text-gray-400 mt-2 text-lg">Years of Experience</p>
            </div>
        </div>
    </div>
</section>

<?php include 'partials/footer.php'; ?>
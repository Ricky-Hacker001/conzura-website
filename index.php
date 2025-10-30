<?php
    $pageTitle = "Conzura Soft Solutions | Premium Tech Solutions";
    include 'partials/header.php';
?>

<section class="h-screen w-full relative flex flex-col justify-center items-center text-center overflow-hidden">
    <div class="absolute top-0 left-0 w-full h-full z-0">
        <video autoplay loop muted playsinline class="absolute top-1/2 left-1/2 min-w-full min-h-full w-auto h-auto object-cover transform -translate-x-1/2 -translate-y-1/2">
            <source src="assets/videos/hero1.mp4" type="video/mp4">
        </video>
        <div class="absolute inset-0 bg-black/70"></div>
    </div>
    <div class="relative z-10 px-4">
        <h1 class="hero-headline font-display text-5xl md:text-8xl font-extrabold text-white leading-tight">
            <span class="block">Digital Excellence,</span>
            <span class="block text-transparent bg-clip-text bg-gradient-to-r from-accent-orange to-accent-cyan">Engineered.</span>
        </h1>
        <p class="hero-subheadline text-lg md:text-xl max-w-2xl mx-auto mt-6 text-gray-300">
            We architect and build premium software solutions that empower visionary businesses.
        </p>
    </div>
</section>

<div class="marquee-container py-8 bg-dark-bg overflow-hidden whitespace-nowrap border-y border-gray-900">
    <div class="marquee-track inline-block">
        <span class="mx-8 text-2xl font-display text-gray-500">Web Development</span> <span class="mx-8 text-2xl font-display text-gray-500">App Development</span> <span class="mx-8 text-2xl font-display text-gray-500">SEO & Marketing</span> <span class="mx-8 text-2xl font-display text-gray-500">UI/UX Design</span> <span class="mx-8 text-2xl font-display text-gray-500">Cloud Solutions</span>
    </div>
    <div class="marquee-track inline-block">
        <span class="mx-8 text-2xl font-display text-gray-500">Web Development</span> <span class="mx-8 text-2xl font-display text-gray-500">App Development</span> <span class="mx-8 text-2xl font-display text-gray-500">SEO & Marketing</span> <span class="mx-8 text-2xl font-display text-gray-500">UI/UX Design</span> <span class="mx-8 text-2xl font-display text-gray-500">Cloud Solutions</span>
    </div>
</div>

<section id="services" class="py-24 bg-dark-bg">
    <div class="container mx-auto px-6 text-center">
        <h2 class="font-display text-4xl font-bold text-white mb-4" data-aos="fade-up">Our Core Expertise</h2>
        <p class="max-w-2xl mx-auto text-gray-400 mb-16" data-aos="fade-up" data-aos-delay="100">Innovative solutions tailored for performance, engagement, and growth.</p>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="service-card" data-aos="fade-up" data-aos-delay="200">
                <div class="card-border"></div>
                <div class="card-content">
                    <h3 class="font-display text-2xl font-bold text-white mb-2">Web Development</h3>
                    <p class="text-gray-400">Crafting responsive, high-performance websites and applications that drive results.</p>
                </div>
            </div>
            <div class="service-card" data-aos="fade-up" data-aos-delay="300">
                <div class="card-border"></div>
                <div class="card-content">
                    <h3 class="font-display text-2xl font-bold text-white mb-2">App Development</h3>
                    <p class="text-gray-400">Building intuitive iOS and Android apps that your users will love.</p>
                </div>
            </div>
            <div class="service-card" data-aos="fade-up" data-aos-delay="400">
                <div class="card-border"></div>
                <div class="card-content">
                    <h3 class="font-display text-2xl font-bold text-white mb-2">Digital Marketing</h3>
                    <p class="text-gray-400">Engaging your audience with expert strategies across all digital channels.</p>
                </div>
            </div>
            <div class="service-card" data-aos="fade-up" data-aos-delay="400">
    <div class="card-border"></div>
    <div class="card-content">
        <h3 class="font-display text-2xl font-bold text-white mb-2">Finance Solutions</h3>
        <p class="text-gray-400">Revolutionizing financial operations with secure, scalable, and compliant software.</p>
    </div>
</div>
        </div>
    </div>
</section>

<section id="process" class="py-24 bg-dark-bg border-t border-gray-900">
    <div class="container mx-auto px-6 text-center">
        <h2 class="font-display text-4xl font-bold text-white mb-16" data-aos="fade-up">Our Proven Process</h2>
        <div class="relative">
            <div class="absolute top-1/2 left-0 w-full h-0.5 bg-gray-800">
                <div id="process-line" class="h-0.5 bg-primary"></div>
            </div>
            <div class="relative grid grid-cols-1 md:grid-cols-3 gap-16">
                <div class="process-step" data-aos="fade-up" data-aos-delay="100">
                    <div class="step-number">01</div>
                    <h3 class="font-display text-2xl font-bold text-white mt-4 mb-2">Discovery</h3>
                    <p class="text-gray-400">We begin by understanding your vision, goals, and challenges to define a clear roadmap for success.</p>
                </div>
                <div class="process-step" data-aos="fade-up" data-aos-delay="200">
                    <div class="step-number">02</div>
                    <h3 class="font-display text-2xl font-bold text-white mt-4 mb-2">Design & Develop</h3>
                    <p class="text-gray-400">Our team designs and develops your project with precision, transparency, and regular feedback loops.</p>
                </div>
                <div class="process-step" data-aos="fade-up" data-aos-delay="300">
                    <div class="step-number">03</div>
                    <h3 class="font-display text-2xl font-bold text-white mt-4 mb-2">Deploy & Grow</h3>
                    <p class="text-gray-400">We ensure a seamless launch and provide ongoing support to help you scale and adapt.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="about" class="py-24 bg-dark-bg border-t border-gray-900">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div data-aos="fade-right">
                <h2 class="font-display text-4xl font-bold text-white mb-4">Who We Are</h2>
                <p class="text-lg text-gray-300 mb-6">
                    Conzura Soft Solutions is a team of passionate technologists, designers, and strategists dedicated to crafting exceptional digital products.
                </p>
                <p class="text-gray-400">
                    With over a decade of experience and 1500+ successful projects, we are the trusted partner for businesses aiming for digital leadership and tangible results.
                </p>
            </div>
            <div data-aos="fade-left" data-aos-delay="100">
                <h3 class="font-display text-2xl font-bold text-white mb-6">Technology We Use</h3>
                <div class="grid grid-cols-3 sm:grid-cols-4 gap-6">
                    <div class="tech-logo-container" title="PHP"><svg class="tech-logo" viewBox="0 0 24 24"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg></div>
                    <div class="tech-logo-container" title="JavaScript"><svg class="tech-logo" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm-2-10h4v2h-4v-2zm0 4h4v2h-4v-2z"/></svg></div>
                    <div class="tech-logo-container" title="React"><svg class="tech-logo" viewBox="0 0 24 24"><path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5C21.27 7.61 17 4.5 12 4.5zm0 13c-3.31 0-6-2.69-6-6s2.69-6 6-6 6 2.69 6 6-2.69 6-6 6zm0-10c-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4z"/></svg></div>
                    <div class="tech-logo-container" title="Laravel"><svg class="tech-logo" viewBox="0 0 24 24"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5-10-5-10 5z"/></svg></div>
                    <div class="tech-logo-container" title="MySQL"><svg class="tech-logo" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zM11 7h2v6h-2V7zm0 8h2v2h-2v-2z"/></svg></div>
                    <div class="tech-logo-container" title="Amazon Web Services"><svg class="tech-logo" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 17h-2v-2h2v2zm0-4h-2V7h2v8z"/></svg></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="testimonial" class="py-24 bg-dark-bg border-t border-gray-900">
    <div class="testimonial-container container mx-auto px-6" data-aos="fade-up">
        <div class="relative max-w-4xl mx-auto text-center p-12">
            <div class="absolute top-0 left-0 text-gray-800 text-9xl font-display opacity-50 transform -translate-x-4 -translate-y-8">“</div>
            <p class="relative z-10 text-3xl font-display text-white leading-relaxed">
                Working with Conzura was a game-changer. Their expertise and dedication to our project were outstanding, delivering results beyond our expectations.
            </p>
            <p class="relative z-10 text-accent-cyan font-semibold mt-8 text-lg">— Valued Client, Tech Startup</p>
        </div>
    </div>
</section>

<section id="faq" class="py-24 bg-dark-bg border-t border-gray-900">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="font-display text-4xl font-bold text-white" data-aos="fade-up">Frequently Asked Questions</h2>
        </div>
        <div class="max-w-4xl mx-auto" data-aos="fade-up" data-aos-delay="100">
            <div class="faq-item border-b border-gray-800 py-6">
                <button class="faq-question flex justify-between items-center w-full text-left">
                    <span class="text-xl font-display text-white">What kind of projects do you specialize in?</span>
                    <div class="faq-icon-container">
                        <svg class="faq-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                    </div>
                </button>
                <div class="faq-answer">
                    <p class="text-gray-400 pt-4">We specialize in a wide range of projects including custom web application development, native mobile app creation for iOS and Android, and comprehensive digital marketing campaigns. We are experts in turning complex business challenges into elegant software solutions.</p>
                </div>
            </div>
            <div class="faq-item border-b border-gray-800 py-6">
                <button class="faq-question flex justify-between items-center w-full text-left">
                    <span class="text-xl font-display text-white">How long does a typical project take?</span>
                    <div class="faq-icon-container">
                        <svg class="faq-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                    </div>
                </button>
                <div class="faq-answer">
                    <p class="text-gray-400 pt-4">Project timelines vary based on scope and complexity. A standard business website might take 4-6 weeks, while a custom web application or mobile app can range from 3 to 6+ months. We provide a detailed project timeline after our initial discovery phase.</p>
                </div>
            </div>
            <div class="faq-item border-b border-gray-800 py-6">
                <button class="faq-question flex justify-between items-center w-full text-left">
                    <span class="text-xl font-display text-white">What is your process for working with clients?</span>
                    <div class="faq-icon-container">
                        <svg class="faq-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                    </div>
                </button>
                <div class="faq-answer">
                    <p class="text-gray-400 pt-4">Our process is collaborative and transparent. It begins with a 'Discovery' phase to understand your needs, followed by 'Design & Develop' where we build and refine with your feedback, and concludes with 'Deploy & Grow' to ensure a successful launch and provide ongoing support.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="contact-cta" class="py-32 aurora-background relative">
     <div class="relative z-10 container mx-auto px-6 text-center">
        <h2 class="font-display text-5xl font-bold text-white mb-4">Have a project in mind?</h2>
        <p class="max-w-2xl mx-auto text-gray-300 text-xl mb-8">Let's turn your idea into a reality. Get in touch with us today.</p>
        <a href="contact.php" class="cta-button inline-block bg-white text-dark-bg font-bold py-4 px-12 rounded-full text-lg hover:bg-gray-200 transition-all duration-300 transform hover:scale-105">
            Let's Talk
        </a>
    </div>
</section>

<?php include 'partials/footer.php'; ?>
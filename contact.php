<?php
    $pageTitle = "Contact Us | Conzura Soft Solutions";
    include 'partials/header.php';
?>

<section class="py-24 lg:py-32 bg-dark-bg overflow-hidden">
    <div class="container mx-auto px-6">
        <div class="text-center max-w-4xl mx-auto mb-16 lg:mb-24">
            <h1 class="font-display text-5xl md:text-7xl font-bold text-white" data-aos="fade-up">Let's Build Together</h1>
            <p class="mt-4 text-lg text-gray-400" data-aos="fade-up" data-aos-delay="100">Have a project in mind, or just want to say hello? We'd love to hear from you.</p>
        </div>

        <div class="grid lg:grid-cols-5 gap-16 items-start">

            <div class="lg:col-span-2" data-aos="fade-right" data-aos-delay="200">
                <div class="space-y-8">
                    <div class="flex items-start gap-4">
                        <div class="bg-dark-charcoal p-3 rounded-lg border border-gray-800">
                            <svg class="w-6 h-6 text-primary" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-display text-white">Email Us</h3>
                            <a href="mailto:info@conzurasoft.com" class="text-gray-400 hover:text-primary transition-colors">info@conzurasoft.com</a>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="bg-dark-charcoal p-3 rounded-lg border border-gray-800">
                           <svg class="w-6 h-6 text-primary" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.219-.995-.616-1.348l-2.25-2.25a1.125 1.125 0 00-1.591 0L14.25 10.5l-6-6 1.5-1.5a1.125 1.125 0 000-1.591l-2.25-2.25a1.125 1.125 0 00-1.348-.616z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-display text-white">Call Us</h3>
                            <a href="tel:+919177951075" class="text-gray-400 hover:text-primary transition-colors">+91 91779 51075</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-3 bg-dark-charcoal/50 border border-gray-800 p-8 lg:p-12 rounded-2xl" data-aos="fade-left" data-aos-delay="300">
                <form action="#" method="POST">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label for="name" class="block text-gray-400 font-medium mb-2">Name</label>
                            <input type="text" name="name" class="w-full bg-gray-900/50 border border-gray-700 text-white rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-primary transition-all" required>
                        </div>
                        <div>
                            <label for="email" class="block text-gray-400 font-medium mb-2">Email</label>
                            <input type="email" name="email" class="w-full bg-gray-900/50 border border-gray-700 text-white rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-primary transition-all" required>
                        </div>
                    </div>
                    <div class="mb-6">
                        <label for="message" class="block text-gray-400 font-medium mb-2">Message</label>
                        <textarea name="message" rows="5" class="w-full bg-gray-900/50 border border-gray-700 text-white rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-primary transition-all" required></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="cta-button bg-primary text-white font-bold py-3 px-12 rounded-full hover:bg-opacity-90 transition-all duration-300 transform hover:scale-105">Send Message</button>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</section>

<?php include 'partials/footer.php'; ?>
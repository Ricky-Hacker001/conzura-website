<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle ?? 'Conzura Soft Solutions'; ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&family=Poppins:wght@600;700;800&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: { 'sans': ['Inter', 'sans-serif'], 'display': ['Poppins', 'sans-serif'] },
                    colors: { 'primary': '#6d28d9', 'accent-orange': '#f97316', 'accent-cyan': '#0891b2', 'dark-charcoal': '#1f2937', 'dark-bg': '#0a0a0a' }
                }
            }
        }
    </script>
</head>
<body class="bg-dark-bg text-gray-200 font-sans">
    <div class="custom-cursor"></div>

    <header id="main-header" class="fixed top-0 left-0 w-full z-50 transition-all duration-300">
        <nav class="container mx-auto px-6 py-4 flex justify-between items-center">
            <a href="index.php" class="logo-link">
                <img src="./assets/images/logo2.png" alt="Conzura Logo" class="h-10">
            </a>
            <div class="hidden lg:flex items-center space-x-8 nav-links">
                <a href="index.php" class="font-medium hover:text-accent-orange transition">Home</a>
                <a href="index.php#services" class="font-medium hover:text-accent-orange transition">Services</a>
                <a href="index.php#about" class="font-medium hover:text-accent-orange transition">About</a>
                <a href="contact.php" class="font-medium hover:text-accent-orange transition">Contact</a>
            </div>
            <a href="contact.php" class="cta-button hidden lg:block bg-white text-dark-bg font-bold py-2 px-6 rounded-full hover:bg-gray-200 transition-all duration-300 transform hover:scale-105">
                Get a Quote
            </a>
            <button id="mobile-menu-button" class="lg:hidden text-white z-50">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" /></svg>
            </button>
        </nav>
    </header>
    <div id="mobile-menu" class="fixed inset-0 bg-dark-bg/95 backdrop-blur-lg z-40 hidden flex-col items-center justify-center space-y-8">
        <a href="index.php#services" class="text-3xl font-display text-white">Services</a>
        <a href="index.php#about" class="text-3xl font-display text-white">About</a>
        <a href="contact.php" class="text-3xl font-display text-white">Contact</a>
    </div>
    <main>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UK Casino Hotel Guide (18+)</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'bg-light-gray': '#f8f9fa',
                        'primary-blue': '#007bff',
                        'accent-gold': '#ffc107',
                        'text-dark': '#343a40',
                        'header-footer-bg': '#343a40',
                        'header-footer-text': '#ffffff',
                        'warning-bg': '#fff3cd',
                        'warning-border': '#ffeeba',
                        'warning-accent': '#ffc107',
                    },
                    fontFamily: {
                        display: ['Montserrat', 'sans-serif'],
                        body: ['Roboto', 'sans-serif'],
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: 0, transform: 'translateY(10px)' },
                            '100%': { opacity: 1, transform: 'translateY(0)' },
                        },
                        slideInLeft: {
                            '0%': { opacity: 0, transform: 'translateX(-20px)' },
                            '100%': { opacity: 1, transform: 'translateX(0)' },
                        },
                        slideInRight: {
                            '0%': { opacity: 0, transform: 'translateX(20px)' },
                            '100%': { opacity: 1, transform: 'translateX(0)' },
                        }
                    },
                    animation: {
                        fadeIn: 'fadeIn 0.5s ease-out forwards',
                        slideInLeft: 'slideInLeft 0.5s ease-out forwards',
                        slideInRight: 'slideInRight 0.5s ease-out forwards',
                    },
                }
            }
        }
    </script>
    <style>
        /* Base styles using CSS variables for theme consistency */
        :root {
            --bg-light-gray: #f8f9fa;
            --primary-blue: #007bff;
            --accent-gold: #ffc107;
            --text-dark: #343a40;
            --header-footer-bg: #343a40;
            --header-footer-text: #ffffff;
            --warning-bg: #fff3cd;
            --warning-border: #ffeeba;
            --warning-accent: #ffc107;

            --font-display: 'Montserrat', sans-serif;
            --font-body: 'Roboto', sans-serif;
        }

        body {
            font-family: var(--font-body);
            color: var(--text-dark);
            background-color: var(--bg-light-gray);
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .main-content-area {
            max-width: 960px;
            width: 100%;
            margin-left: auto;
            margin-right: auto;
            padding-left: 1rem; /* px-4 */
            padding-right: 1rem; /* px-4 */
        }

        /* Hide scrollbar but allow scrolling */
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }
        .no-scrollbar {
            -ms-overflow-style: none;  /* IE and Edge */
            scrollbar-width: none;  /* Firefox */
        }

        /* Custom styles for accenting filter chips */
        .filter-chip {
            transition: background-color 0.3s ease, transform 0.2s ease, box-shadow 0.2s ease;
            cursor: pointer;
        }
        .filter-chip:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .filter-chip.active {
            background-color: var(--primary-blue);
            color: var(--header-footer-text);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        /* Custom styles for accordion items */
        .accordion-item {
            border-bottom: 1px solid rgba(0,0,0,0.1);
        }
        .accordion-header {
            cursor: pointer;
            padding: 1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-family: var(--font-display);
            font-weight: 600;
            background-color: rgba(255,255,255,0.8);
            transition: background-color 0.3s ease;
        }
        .accordion-header:hover {
            background-color: rgba(240,240,240,0.8);
        }
        .accordion-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.5s ease-out, padding 0.5s ease-out;
            padding: 0 1rem;
            background-color: #fcfcfc;
        }
        .accordion-content.active {
            max-height: 500px; /* Adjust based on expected content size */
            padding: 1rem;
        }
        .accordion-arrow {
            transition: transform 0.3s ease;
        }
        .accordion-header.active .accordion-arrow {
            transform: rotate(180deg);
        }

        /* Button hover effects */
        .btn-primary, .btn-secondary, .btn-link {
            transition: background-color 0.3s ease, transform 0.2s ease, box-shadow 0.2s ease;
        }
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(255, 193, 7, 0.4);
            filter: brightness(1.05);
        }
        .btn-secondary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(0, 123, 255, 0.4);
            filter: brightness(1.05);
        }
        .btn-link:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        /* Card hover effects */
        .hotel-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .hotel-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 25px rgba(0,0,0,0.15);
        }
        
    </style>
</head>
<body class="font-body text-text-dark bg-bg-light-gray flex flex-col min-h-screen">
    <!-- Header -->
    <header class="fixed top-0 left-0 w-full bg-header-footer-bg text-header-footer-text shadow-lg z-50">
        <nav class="main-content-area flex items-center justify-between py-4">
            <a href="#" class="text-xl md:text-2xl font-display font-bold tracking-tight text-white hover:text-accent-gold transition-colors duration-300" onclick="navigateTo('home-page'); return false;">
                UK Casino Hotel Guide <span class="text-sm">(18+)</span>
            </a>

            <!-- Hamburger menu for mobile -->
            <div class="md:hidden">
                <button id="hamburger-menu" class="text-white focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>

            <!-- Navigation links for desktop and mobile menu -->
            <ul id="nav-links" class="hidden md:flex md:space-x-8 absolute md:static top-full left-0 w-full md:w-auto bg-header-footer-bg md:bg-transparent shadow-lg md:shadow-none py-4 md:py-0 transition-transform duration-300 ease-in-out transform -translate-y-full md:translate-y-0">
                <li><a href="#" class="nav-link text-white hover:text-accent-gold transition-colors duration-300 px-4 py-2 block md:inline-block active-link" data-page="home-page" onclick="navigateTo('home-page'); return false;">Home</a></li>
                <li><a href="#" class="nav-link text-white hover:text-accent-gold transition-colors duration-300 px-4 py-2 block md:inline-block" data-page="learn-page" onclick="navigateTo('learn-page'); return false;">Learn</a></li>
                <li><a href="#" class="nav-link text-white hover:text-accent-gold transition-colors duration-300 px-4 py-2 block md:inline-block" data-page="explore-page" onclick="navigateTo('explore-page'); return false;">Explore</a></li>
                <li><a href="#" class="nav-link text-white hover:text-accent-gold transition-colors duration-300 px-4 py-2 block md:inline-block" data-page="responsible-gambling-page" onclick="navigateTo('responsible-gambling-page'); return false;">Responsible Gambling</a></li>
                <li><a href="#" class="nav-link text-white hover:text-accent-gold transition-colors duration-300 px-4 py-2 block md:inline-block" data-page="legal-page" onclick="navigateTo('legal-page'); return false;">Legal</a></li>
            </ul>
        </nav>
    </header>

    <!-- Main Content Area -->
    <main class="flex-grow pt-20 pb-8 bg-bg-light-gray">
        <!-- Home Page -->
        <section id="home-page" class="main-content-area py-8 md:py-16 animate-fadeIn">
            <div class="bg-white p-8 md:p-12 rounded-xl shadow-lg border border-gray-100 text-center">
                <h1 class="text-4xl md:text-6xl font-display font-bold text-primary-blue mb-6 leading-tight animate-slideInLeft">
                    Your Premium UK Casino Hotel Guide
                </h1>
                <p class="text-lg md:text-xl text-text-dark mb-10 max-w-2xl mx-auto animate-slideInRight">
                    Discover the finest casino hotels across the United Kingdom. We provide an unbiased, comprehensive guide to help you find your perfect blend of luxury, entertainment, and responsible enjoyment.
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-6 animate-fadeIn">
                    <button class="btn-secondary px-8 py-3 text-lg font-semibold bg-primary-blue text-white rounded-lg shadow-md hover:scale-105" onclick="navigateTo('learn-page');">
                        Learn More
                    </button>
                    <button class="btn-primary px-8 py-3 text-lg font-semibold bg-accent-gold text-header-footer-bg rounded-lg shadow-md hover:scale-105" onclick="navigateTo('explore-page');">
                        Explore Hotels
                    </button>
                </div>
            </div>
        </section>

        <!-- Learn Page -->
        <section id="learn-page" class="main-content-area py-8 hidden animate-fadeIn">
            <h2 class="text-3xl md:text-4xl font-display font-bold text-primary-blue mb-8 text-center">Learn More About UK Casino Hotels</h2>
            <div class="bg-white rounded-xl shadow-lg border border-gray-100 overflow-hidden">
                <div class="accordion-item">
                    <div class="accordion-header" role="button" aria-expanded="false" aria-controls="accordion-content-1">
                        <h3 class="text-xl font-display font-semibold text-text-dark">Understanding Casino Hotel Ratings</h3>
                        <svg class="w-6 h-6 text-primary-blue accordion-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </div>
                    <div id="accordion-content-1" class="accordion-content">
                        <p class="text-text-dark leading-relaxed">Casino hotels in the UK are rated based on various factors including luxury of accommodation, range of gaming options, quality of dining, and customer service. Star ratings typically reflect the overall standard, with higher stars indicating more premium amenities and services.</p>
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-header" role="button" aria-expanded="false" aria-controls="accordion-content-2">
                        <h3 class="text-xl font-display font-semibold text-text-dark">Key Amenities to Look For</h3>
                        <svg class="w-6 h-6 text-primary-blue accordion-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </div>
                    <div id="accordion-content-2" class="accordion-content">
                        <p class="text-text-dark leading-relaxed">Beyond the casino floor, look for amenities like spas, fitness centers, multiple dining options, live entertainment venues, and concierge services. Some hotels offer exclusive access to private gaming rooms or dedicated non-gaming lounges.</p>
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-header" role="button" aria-expanded="false" aria-controls="accordion-content-3">
                        <h3 class="text-xl font-display font-semibold text-text-dark">The Best Gaming Experiences</h3>
                        <svg class="w-6 h-6 text-primary-blue accordion-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </div>
                    <div id="accordion-content-3" class="accordion-content">
                        <p class="text-text-dark leading-relaxed">UK casino hotels offer a diverse range of gaming. From classic table games like Blackjack and Roulette to modern slot machines and poker rooms, there's something for every enthusiast. Many venues also host regular tournaments and high-stakes games.</p>
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-header" role="button" aria-expanded="false" aria-controls="accordion-content-4">
                        <h3 class="text-xl font-display font-semibold text-text-dark">Booking Tips and Deals</h3>
                        <svg class="w-6 h-6 text-primary-blue accordion-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </div>
                    <div id="accordion-content-4" class="accordion-content">
                        <p class="text-text-dark leading-relaxed">To get the best deals, consider booking during off-peak seasons or looking for packages that combine accommodation with dining or spa credits. Always compare prices across different booking platforms. Joining a hotel's loyalty program can also provide exclusive discounts and perks.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Explore Page -->
        <section id="explore-page" class="main-content-area py-8 hidden animate-fadeIn">
            <h2 class="text-3xl md:text-4xl font-display font-bold text-primary-blue mb-8 text-center">Explore UK Casino Hotels</h2>

            <div class="bg-white p-6 md:p-8 rounded-xl shadow-lg border border-gray-100 mb-8">
                <div class="mb-6">
                    <label for="hotel-search" class="block text-text-dark text-lg font-display font-semibold mb-2">Search by Name or Description</label>
                    <input type="text" id="hotel-search" placeholder="e.g., Grand Victoria, Luxury, Spa..." class="w-full p-3 border border-gray-300 rounded-lg focus:ring-primary-blue focus:border-primary-blue transition-all duration-200 text-text-dark placeholder-gray-400">
                </div>

                <div class="mb-6">
                    <label class="block text-text-dark text-lg font-display font-semibold mb-2">Filter by City</label>
                    <div id="city-filters" class="flex flex-wrap gap-3 overflow-x-auto no-scrollbar pb-2">
                        <!-- City filter chips will be injected here by JS -->
                    </div>
                </div>

                <div>
                    <label class="block text-text-dark text-lg font-display font-semibold mb-2">Filter by Vibe</label>
                    <div id="vibe-filters" class="flex flex-wrap gap-3 overflow-x-auto no-scrollbar pb-2">
                        <!-- Vibe filter chips will be injected here by JS -->
                    </div>
                </div>
            </div>

            <div id="hotel-cards-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Hotel cards will be injected here by JS -->
            </div>
            <div id="no-results-message" class="hidden text-center text-xl text-text-dark py-12">
                No hotels match your current filters. Please try adjusting your search.
            </div>
        </section>

        <!-- Hotel Detail Page -->
        <section id="hotel-detail-page" class="main-content-area py-8 hidden animate-fadeIn">
            <a href="#" class="inline-flex items-center text-primary-blue hover:text-accent-gold transition-colors duration-300 mb-6" onclick="navigateTo('explore-page'); return false;">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                Back to Hotels
            </a>
            <div class="bg-white p-6 md:p-10 rounded-xl shadow-lg border border-gray-100">
                <div id="detail-header" class="mb-8">
                    <h2 id="hotel-detail-name" class="text-4xl md:text-5xl font-display font-bold text-primary-blue mb-4 leading-tight animate-slideInLeft"></h2>
                    <div id="hotel-detail-image-placeholder" class="w-full h-60 md:h-80 rounded-lg overflow-hidden mb-6 bg-gray-200 flex items-center justify-center text-white font-display text-2xl shadow-inner animate-fadeIn">
                        Hotel Image Placeholder
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-8">
                    <div class="lg:col-span-2 space-y-8">
                        <div id="hotel-detail-overview" class="p-6 bg-gray-50 rounded-lg shadow-sm">
                            <h3 class="text-2xl font-display font-semibold text-text-dark mb-4">Overview</h3>
                            <p class="text-lg text-text-dark leading-relaxed"></p>
                        </div>
                        <div id="hotel-detail-rooms-amenities" class="p-6 bg-gray-50 rounded-lg shadow-sm">
                            <h3 class="text-2xl font-display font-semibold text-text-dark mb-4">Rooms & Amenities</h3>
                            <p class="text-lg text-text-dark leading-relaxed"></p>
                        </div>
                        <div id="hotel-detail-dining" class="p-6 bg-gray-50 rounded-lg shadow-sm">
                            <h3 class="text-2xl font-display font-semibold text-text-dark mb-4">Dining</h3>
                            <p class="text-lg text-text-dark leading-relaxed"></p>
                        </div>
                        <div id="hotel-detail-entertainment" class="p-6 bg-gray-50 rounded-lg shadow-sm">
                            <h3 class="text-2xl font-display font-semibold text-text-dark mb-4">Entertainment</h3>
                            <p class="text-lg text-text-dark leading-relaxed"></p>
                        </div>
                        <div id="hotel-detail-getting-there" class="p-6 bg-gray-50 rounded-lg shadow-sm">
                            <h3 class="text-2xl font-display font-semibold text-text-dark mb-4">Getting There</h3>
                            <p class="text-lg text-text-dark leading-relaxed"></p>
                        </div>
                        <div id="hotel-detail-notes" class="p-6 bg-gray-50 rounded-lg shadow-sm">
                            <h3 class="text-2xl font-display font-semibold text-text-dark mb-4">Important Notes</h3>
                            <p class="text-lg text-text-dark leading-relaxed"></p>
                        </div>
                    </div>

                    <div class="lg:col-span-1 flex flex-col space-y-8">
                        <!-- Responsible Gambling Info Box -->
                        <div class="bg-warning-bg border border-warning-border rounded-lg p-6 shadow-md relative overflow-hidden">
                            <div class="absolute top-0 left-0 w-full h-2 bg-warning-accent"></div>
                            <h3 class="text-xl font-display font-bold text-text-dark mb-3 mt-2">Responsible Gambling</h3>
                            <p class="text-base text-text-dark mb-4 leading-relaxed">
                                Gambling should be a fun and entertaining activity. Always set limits, never chase losses, and know when to stop.
                            </p>
                            <a href="#" class="text-primary-blue hover:underline text-sm font-semibold" onclick="navigateTo('responsible-gambling-page'); return false;">Learn more about responsible gambling</a>
                        </div>

                        <!-- External Links -->
                        <div class="p-6 bg-gray-50 rounded-lg shadow-sm">
                            <h3 class="text-xl font-display font-semibold text-text-dark mb-4">External Links</h3>
                            <div class="flex flex-col gap-4">
                                <button id="hotel-website-btn" class="btn-link w-full flex items-center justify-center px-6 py-3 bg-primary-blue text-white rounded-lg shadow-md hover:bg-opacity-90">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                                    Visit Hotel Website
                                </button>
                                <button id="hotel-booking-btn" class="btn-link w-full flex items-center justify-center px-6 py-3 bg-accent-gold text-header-footer-bg rounded-lg shadow-md hover:bg-opacity-90">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                    Book Your Stay
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Responsible Gambling Page -->
        <section id="responsible-gambling-page" class="main-content-area py-8 hidden animate-fadeIn">
            <h2 class="text-3xl md:text-4xl font-display font-bold text-primary-blue mb-8 text-center">Responsible Gambling</h2>
            <div class="bg-white p-8 md:p-10 rounded-xl shadow-lg border border-gray-100">
                <p class="text-lg text-text-dark leading-relaxed mb-6">
                    We believe in providing an enjoyable and safe experience for everyone. Gambling should always be approached with caution and responsibility. Here are some key principles to ensure your experience remains positive:
                </p>
                <ul class="list-disc list-inside text-lg text-text-dark mb-8 space-y-3 pl-4">
                    <li><strong>Set Limits:</strong> Decide on a budget and stick to it. Never gamble more than you can afford to lose.</li>
                    <li><strong>Time Management:</strong> Set time limits for your gambling sessions to avoid excessive play.</li>
                    <li><strong>Never Chase Losses:</strong> Do not try to win back money you've lost. This can lead to larger losses and financial distress.</li>
                    <li><strong>Gambling is Entertainment:</strong> View gambling as a form of entertainment, not a way to make money.</li>
                    <li><strong>Don't Gamble When Stressed:</strong> Avoid gambling when you are feeling down, anxious, or under the influence of alcohol or drugs.</li>
                    <li><strong>Balance:</strong> Ensure gambling is balanced with other activities in your life.</li>
                </ul>

                <p class="text-lg text-text-dark leading-relaxed mb-8">
                    If you feel that gambling is becoming a problem for you or someone you know, please seek help immediately.
                </p>

                <div class="flex flex-col sm:flex-row flex-wrap justify-center gap-6">
                    <button class="btn-secondary px-8 py-3 text-lg font-semibold bg-primary-blue text-white rounded-lg shadow-md hover:scale-105" onclick="window.open('https://www.gamcare.org.uk/', '_blank', 'noopener noreferrer');">
                        <span class="mr-2">Visit GamCare</span>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                    </button>
                    <button class="btn-primary px-8 py-3 text-lg font-semibold bg-accent-gold text-header-footer-bg rounded-lg shadow-md hover:scale-105" onclick="window.open('https://www.begambleaware.org/', '_blank', 'noopener noreferrer');">
                        <span class="mr-2">BeGambleAware</span>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                    </button>
                    <button class="btn-secondary px-8 py-3 text-lg font-semibold bg-primary-blue text-white rounded-lg shadow-md hover:scale-105" onclick="window.open('https://www.gamstop.co.uk/', '_blank', 'noopener noreferrer');">
                        <span class="mr-2">GAMSTOP Self-Exclusion</span>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                    </button>
                </div>
            </div>
        </section>

        <!-- Legal Page -->
        <section id="legal-page" class="main-content-area py-8 hidden animate-fadeIn">
            <h2 class="text-3xl md:text-4xl font-display font-bold text-primary-blue mb-8 text-center">Legal Information</h2>
            <div class="bg-white p-8 md:p-10 rounded-xl shadow-lg border border-gray-100 space-y-10">
                <div>
                    <h3 class="text-2xl font-display font-semibold text-text-dark mb-4">Privacy Policy</h3>
                    <p class="text-lg text-text-dark leading-relaxed">
                        Your privacy is important to us. This guide does not collect any personal identifiable information. We do not use cookies for tracking, nor do we store any user data. All interactions are local to your browser session. If you navigate to external sites via our links, their privacy policies will apply. We are committed to protecting your anonymity and ensuring a safe browsing experience.
                    </p>
                </div>
                <div>
                    <h3 class="text-2xl font-display font-semibold text-text-dark mb-4">Terms and Conditions</h3>
                    <p class="text-lg text-text-dark leading-relaxed">
                        This "UK Casino Hotel Guide (18+)" is provided for informational purposes only. While we strive to ensure the accuracy of the information, we cannot guarantee its completeness or correctness. Users must be 18 years or older to engage in gambling activities in the UK. By using this guide, you agree to assume full responsibility for your actions and decisions related to gambling. We are not liable for any losses or damages incurred.
                    </p>
                </div>
                <div>
                    <h3 class="text-2xl font-display font-semibold text-text-dark mb-4">Disclaimer</h3>
                    <p class="text-lg text-text-dark leading-relaxed">
                        This website is an independent guide and is not affiliated with any specific casino, hotel, or gambling operator. The content provided herein is for general informational purposes only and does not constitute financial, legal, or gambling advice. We promote responsible gambling and strongly advise users to seek professional help if they suspect they have a gambling problem. External links are provided for convenience and do not imply endorsement.
                    </p>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-header-footer-bg text-header-footer-text py-6 text-center shadow-inner mt-auto">
        <div class="main-content-area">
            <p class="text-sm md:text-base font-body">
                18+ &bull; Responsible Gambling &bull; Informational guide only
            </p>
        </div>
    </footer>

    <script>
        // Sample Hotel Data (generated based on user instructions)
        const hotels = [
            {
                id: 'hotel-1',
                name: 'The Grand Victoria Casino & Hotel',
                city: 'London',
                vibe: 'Luxury',
                description: 'Iconic luxury hotel with a sprawling casino floor, fine dining, and entertainment.',
                image: './images/aria.jpg', // Placeholder for image class
                overview: 'Nestled in the heart of London, The Grand Victoria offers unparalleled luxury with its opulent rooms and world-class casino. Experience high-stakes gaming, exquisite culinary journeys, and vibrant nightlife.',
                roomsAmenities: 'Spacious suites, king-sized beds, marble bathrooms, concierge services, spa & wellness center, indoor pool, high-speed Wi-Fi.',
                dining: 'Three Michelin-starred restaurants, casual bistro, 24/7 room service, multiple bars and lounges.',
                entertainment: 'Live music, nightly shows, exclusive private gaming rooms, a state-of-the-art theatre.',
                gettingThere: 'Centrally located, easily accessible via tube and bus. Valet parking available. 30 minutes from Heathrow Airport.',
                notes: 'Strict dress code in certain areas. Age 18+ for casino access. Gamble responsibly.',
                website: 'https://www.caesars.com/grand-victoria-casino?utm_campaign=gmb&utm_source=goolge&utm_medium=local&utm_term=GrandVictoriaCasino&utm_content=hotel&y_source=1_MTk1MTkyOTctNzE1LWxvY2F0aW9uLndlYnNpdGU%3D',
                booking: 'https://www.booking.com/grandvictoria',
            },
            {
                id: 'hotel-2',
                name: 'Edinburgh Royal Casino Resort',
                city: 'Edinburgh',
                vibe: 'Modern',
                description: 'Contemporary design meets Scottish charm, featuring a modern casino and stunning city views.',
                image: './images/atlantis.jpg',
                overview: 'Experience the blend of historic charm and modern luxury at the Edinburgh Royal. Overlooking the historic city, it boasts a vibrant casino, stylish rooms, and a renowned Scottish restaurant.',
                roomsAmenities: 'Contemporary decor, comfortable beds, en-suite bathrooms, fitness center, business facilities, excellent city views.',
                dining: 'Award-winning Scottish restaurant, casual cafe, whisky bar, afternoon tea.',
                entertainment: 'Regular live entertainment, poker tournaments, sports bar.',
                gettingThere: 'Located near the city center, short walk to major attractions. Public transport readily available. 20 minutes from Edinburgh Airport.',
                notes: 'Special packages for golf enthusiasts. Check for seasonal events. Age 18+ gambling.',
                website: 'https://www.tripadvisor.com/Attractions-g186525-Activities-c53-Edinburgh_Scotland.html',
                booking: 'https://www.booking.com/edinburghroyal',
            },
            {
                id: 'hotel-3',
                name: 'Manchester Palace Casino & Spa',
                city: 'Manchester',
                vibe: 'Relaxed',
                description: 'A tranquil urban oasis offering a serene spa, diverse gaming options, and comfortable stays.',
                image: './images/caesars.jpg',
                overview: 'Find your escape at the Manchester Palace, an urban retreat combining the excitement of a casino with the serenity of a luxury spa. Perfect for those seeking both thrills and relaxation.',
                roomsAmenities: 'Comfortable rooms, spa access included, comprehensive wellness treatments, free parking, dog-friendly options.',
                dining: 'Mediterranean restaurant, healthy eating cafe, cocktail bar.',
                entertainment: 'Spa treatments, poker room, slot machines, occasional DJ nights.',
                gettingThere: 'On the outskirts of Manchester, easily accessible by car. Shuttle service to city center available. 45 minutes from Manchester Airport.',
                notes: 'Book spa treatments in advance. Casino loyalty program available. Remember to gamble aware.',
                website: 'https://www.tripadvisor.co.uk/HotelsList-Manchester-Casino-Spa-Hotels-zfp29364760.html',
                booking: 'https://www.booking.com/manchesterpalace',
            },
            {
                id: 'hotel-4',
            name: 'Birmingham Grand Casino Hotel',
                city: 'Birmingham',
                vibe: 'Classic',
                description: 'A classic casino hotel experience with elegant interiors and a wide array of gaming choices.',
                image: './images/encore.jpg',
                overview: 'The Birmingham Grand offers a timeless casino hotel experience with its elegant decor, extensive gaming floor, and high-quality service. A favorite among traditionalists.',
                roomsAmenities: 'Classic design, spacious, 24-hour room service, business center, valet parking.',
                dining: 'Traditional British restaurant, international buffet, lounge bar.',
                entertainment: 'Table games, slot machines, bingo, sports viewing parties.',
                gettingThere: 'Centrally located in Birmingham. Excellent public transport links. 25 minutes from Birmingham Airport.',
                notes: 'Conferences and event facilities available. Ask about group bookings. Keep gambling fun.',
                website: 'https://www.tripadvisor.com/Hotels-g30375-zff14-Birmingham_Alabama-Hotels.html',
                booking: 'https://www.booking.com/birminghamgrand',
            },
            {
                id: 'hotel-5',
                name: 'Glasgow Riverfront Casino Hotel',
                city: 'Glasgow',
                vibe: 'Lively',
                description: 'Vibrant riverside location with a dynamic casino, bustling bars, and contemporary rooms.',
                image: './images/monte.jpg',
                overview: 'Perched on the vibrant Glasgow riverfront, this hotel is a hub of activity. Enjoy a lively casino, modern accommodations, and fantastic views of the Clyde.',
                roomsAmenities: 'Modern design, river views, mini-bar, gym access, complimentary Wi-Fi.',
                dining: 'Modern European bistro, grab-and-go cafe, lively pub.',
                entertainment: 'Regular DJ sets, live bands, themed casino nights, pool tables.',
                gettingThere: 'Riverside location, close to concert venues and cultural sites. Good bus and train links. 15 minutes from Glasgow Airport.',
                notes: 'Popular for events and nightlife. Check age restrictions for certain venues. Know your limits.',
                website: 'https://www.expedia.com/Glasgow-Hotels-Casino-Hotel.0-0-d1334-tCasinoHotel.Travel-Guide-Filter-Hotels',
                booking: 'https://www.booking.com/glasgowriverfront',
            },
            {
                id: 'hotel-6',
                name: 'Liverpool Waterfront Casino',
                city: 'Liverpool',
                vibe: 'Upscale',
                description: 'Sophisticated hotel overlooking the iconic Liverpool docks, offering a chic casino and premium services.',
                image: './images/resortsworld.jpg',
                overview: 'Experience elegance at the Liverpool Waterfront Casino, where stunning views of the Mersey meet a sophisticated gaming environment. Perfect for a refined getaway.',
                roomsAmenities: 'Elegant rooms, dock views, luxury toiletries, dedicated concierge, valet parking.',
                dining: 'Fine dining restaurant, chic cocktail bar, espresso lounge.',
                entertainment: 'Exclusive gaming tables, high-limit salon, regular wine tasting events.',
                gettingThere: 'Prime waterfront location, walking distance to museums and attractions. Easy access to public transport. 30 minutes from Liverpool John Lennon Airport.',
                notes: 'Reservations recommended for dining. Special packages for theatre-goers. Gamble responsibly.',
                website: 'https://www.tripadvisor.com/Restaurant_Review-g186337-d2014554-Reviews-Grosvenor_Casino_Leo-Liverpool_Merseyside_England.html',
                booking: 'https://www.booking.com/liverpoolwaterfront',
            }
        ];

        // Page Navigation
        let currentPage = 'home-page';

        function navigateTo(pageId, hotelId = null) {
            const pages = document.querySelectorAll('main section');
            pages.forEach(page => {
                page.classList.add('hidden');
                page.classList.remove('animate-fadeIn'); // Reset animation
            });

            const targetPage = document.getElementById(pageId);
            if (targetPage) {
                targetPage.classList.remove('hidden');
                targetPage.classList.add('animate-fadeIn'); // Apply animation
                currentPage = pageId;

                // Update active navigation link
                document.querySelectorAll('.nav-link').forEach(link => {
                    link.classList.remove('active-link', 'text-accent-gold');
                    link.classList.add('text-white');
                });
                const activeLink = document.querySelector(`.nav-link[data-page="${pageId}"]`);
                if (activeLink) {
                    activeLink.classList.add('active-link', 'text-accent-gold');
                    activeLink.classList.remove('text-white');
                }

                // Close mobile nav if open
                const navLinks = document.getElementById('nav-links');
                if (navLinks.classList.contains('translate-y-0') && window.innerWidth < 768) { // Only for mobile
                    toggleHamburgerMenu();
                }

                if (pageId === 'explore-page') {
                    renderHotels();
                } else if (pageId === 'hotel-detail-page' && hotelId) {
                    renderHotelDetail(hotelId);
                }
                window.scrollTo({ top: 0, behavior: 'smooth' });
            }
        }

        // Hamburger Menu Toggle
        function toggleHamburgerMenu() {
            const navLinks = document.getElementById('nav-links');
            if (navLinks.classList.contains('-translate-y-full')) {
                navLinks.classList.remove('hidden', '-translate-y-full');
                navLinks.classList.add('translate-y-0');
            } else {
                navLinks.classList.remove('translate-y-0');
                navLinks.classList.add('-translate-y-full');
                // Use a timeout to re-add hidden after transition
                setTimeout(() => {
                    navLinks.classList.add('hidden');
                }, 300);
            }
        }

        // Accordion Functionality
        document.querySelectorAll('.accordion-header').forEach(header => {
            header.addEventListener('click', () => {
                const content = header.nextElementSibling;
                const isActive = header.classList.toggle('active');
                content.classList.toggle('active');
                header.setAttribute('aria-expanded', isActive);
            });
        });

        // Explore Page: Search, Filters, and Hotel Rendering
        const hotelSearchInput = document.getElementById('hotel-search');
        const cityFiltersContainer = document.getElementById('city-filters');
        const vibeFiltersContainer = document.getElementById('vibe-filters');
        const hotelCardsGrid = document.getElementById('hotel-cards-grid');
        const noResultsMessage = document.getElementById('no-results-message');

        let activeCityFilter = 'All';
        let activeVibeFilter = 'All';
        let searchTerm = '';

        function getUniqueValues(key) {
            const values = hotels.map(hotel => hotel[key]);
            return ['All', ...new Set(values)].sort();
        }

        function createFilterChips(container, type, activeFilter, values, onClickHandler) {
            container.innerHTML = '';
            values.forEach(value => {
                const chip = document.createElement('span');
                chip.className = `filter-chip px-4 py-2 rounded-full text-sm font-semibold whitespace-nowrap ${value === activeFilter ? 'active' : 'bg-gray-200 text-text-dark hover:bg-gray-300'}`;
                chip.textContent = value;
                chip.dataset[type] = value;
                chip.addEventListener('click', () => onClickHandler(value));
                container.appendChild(chip);
            });
        }

        function updateCityFilter(city) {
            activeCityFilter = city;
            renderHotels();
            createFilterChips(cityFiltersContainer, 'city', activeCityFilter, getUniqueValues('city'), updateCityFilter);
        }

        function updateVibeFilter(vibe) {
            activeVibeFilter = vibe;
            renderHotels();
            createFilterChips(vibeFiltersContainer, 'vibe', activeVibeFilter, getUniqueValues('vibe'), updateVibeFilter);
        }

        function renderHotels() {
            let filteredHotels = hotels.filter(hotel => {
                const matchesSearch = hotel.name.toLowerCase().includes(searchTerm.toLowerCase()) || hotel.description.toLowerCase().includes(searchTerm.toLowerCase());
                const matchesCity = activeCityFilter === 'All' || hotel.city === activeCityFilter;
                const matchesVibe = activeVibeFilter === 'All' || hotel.vibe === activeVibeFilter;
                return matchesSearch && matchesCity && matchesVibe;
            });

            hotelCardsGrid.innerHTML = '';
            if (filteredHotels.length === 0) {
                noResultsMessage.classList.remove('hidden');
            } else {
                noResultsMessage.classList.add('hidden');
                filteredHotels.forEach(hotel => {
                    const card = document.createElement('div');
                    card.className = 'hotel-card bg-white rounded-xl shadow-lg border border-gray-100 overflow-hidden group hover:shadow-xl';
                    card.innerHTML = `
                        <div class="w-full h-48 md:h-56 overflow-hidden bg-gray-200">
  <img
    src="${escapeHTML((hotel.images && hotel.images[0]) || hotel.image || '')}"
    alt="${escapeHTML(hotel.name)} photo"
    class="w-full h-full object-cover"
    onerror="this.style.display='none'; this.parentElement.classList.add('flex','items-center','justify-center'); this.parentElement.innerHTML='Image not found';"
  />
</div>

                        <div class="p-6">
                            <h3 class="text-2xl font-display font-bold text-primary-blue mb-2">${escapeHTML(hotel.name)}</h3>
                            <p class="text-text-dark text-sm mb-3">${escapeHTML(hotel.city)} • ${escapeHTML(hotel.vibe)}</p>
                            <p class="text-text-dark text-base leading-relaxed mb-4">${escapeHTML(hotel.description)}</p>
                            <button class="btn-secondary w-full px-5 py-2.5 text-md font-semibold bg-primary-blue text-white rounded-lg shadow-md hover:scale-105" onclick="navigateTo('hotel-detail-page', '${hotel.id}')">
                                View Details
                            </button>
                        </div>
                    `;
                    hotelCardsGrid.appendChild(card);
                });
            }
        }

        // Hotel Detail Page Rendering
        function renderHotelDetail(hotelId) {
            const hotel = hotels.find(h => h.id === hotelId);
            if (!hotel) {
                console.error('Hotel not found:', hotelId);
                navigateTo('explore-page'); // Fallback
                return;
            }

            document.getElementById('hotel-detail-name').textContent = escapeHTML(hotel.name);
            const imgPlaceholder = document.getElementById('hotel-detail-image-placeholder');
            imgPlaceholder.className = `${hotel.imagePlaceholder} w-full h-60 md:h-80 rounded-lg overflow-hidden mb-6 flex items-center justify-center text-white font-display text-2xl shadow-inner`;
            imgPlaceholder.textContent = `${hotel.name.split(' ')[0]} Image`; // Update text content dynamically

            document.querySelector('#hotel-detail-overview p').textContent = escapeHTML(hotel.overview);
            document.querySelector('#hotel-detail-rooms-amenities p').textContent = escapeHTML(hotel.roomsAmenities);
            document.querySelector('#hotel-detail-dining p').textContent = escapeHTML(hotel.dining);
            document.querySelector('#hotel-detail-entertainment p').textContent = escapeHTML(hotel.entertainment);
            document.querySelector('#hotel-detail-getting-there p').textContent = escapeHTML(hotel.gettingThere);
            document.querySelector('#hotel-detail-notes p').textContent = escapeHTML(hotel.notes);

            const websiteBtn = document.getElementById('hotel-website-btn');
            websiteBtn.onclick = () => window.open(hotel.website, '_blank', 'noopener noreferrer');

            const bookingBtn = document.getElementById('hotel-booking-btn');
            bookingBtn.onclick = () => window.open(hotel.booking, '_blank', 'noopener noreferrer');
        }

        // Utility for escaping HTML content
        function escapeHTML(str) {
            const div = document.createElement('div');
            div.appendChild(document.createTextNode(str));
            return div.innerHTML;
        }

        // Initialize on DOMContentLoaded
        document.addEventListener('DOMContentLoaded', () => {
            // Initial render for Explore page filters
            createFilterChips(cityFiltersContainer, 'city', activeCityFilter, getUniqueValues('city'), updateCityFilter);
            createFilterChips(vibeFiltersContainer, 'vibe', activeVibeFilter, getUniqueValues('vibe'), updateVibeFilter);

            // Event listeners
            document.getElementById('hamburger-menu').addEventListener('click', toggleHamburgerMenu);
            hotelSearchInput.addEventListener('input', (e) => {
                searchTerm = e.target.value; // Text input, don't lowercase here
                renderHotels();
            });

            // Initial page load
            navigateTo('home-page');
        });
    </script>
</body>
</html>

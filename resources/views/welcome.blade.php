<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>9javerify - Identity Verification & Business Services</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="icon" href="{{ asset('assets/images/images/logo.png') }}" type="image">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        #loader-wrapper {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.95);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            transition: opacity 0.5s ease-out;
        }

        #loader-wrapper.hidden {
            opacity: 0;
            pointer-events: none;
        }

        .loader {
            border: 6px solid #f3f3f3;
            border-top: 6px solid #082851;
            border-radius: 50%;
            width: 60px;
            height: 60px;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .brand-color {
            color: #082851;
        }

        .brand-bg {
            background-color: #082851;
        }

        .brand-border {
            border-bottom: 2px solid #082851;
        }

        .brand-gradient {
            background: linear-gradient(135deg, #08285133 0%, #ffffff 50%, #08285133 100%);
        }

        a[href^="mailto:"]:hover {
            color: #082851;
        }

        .hover\:brand-bg:hover {
            background-color: #082851;
        }
    </style>
</head>

<body class="brand-gradient text-gray-800 antialiased">

    <!-- Loader -->
    <div id="loader-wrapper">
        <div class="loader"></div>
    </div>

    <!-- Navigation -->
    <nav class="bg-white/80 backdrop-blur-md shadow-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex-shrink-0 flex items-center">
                    <images src="{{ asset('assets/images/images/logo.png') }}" alt="9javerify Logo" class="h-8 w-auto">
                    <span class="ml-2 text-xl font-semibold text-gray-700">9javerify</span>
                </div>
                <div class="hidden sm:ml-6 sm:flex sm:space-x-8">
                    <a href="#" class="text-gray-900 brand-border px-1 pt-1 text-sm font-medium">Home</a>
                    <a href="#services"
                        class="text-gray-600 hover:text-gray-900 px-1 pt-1 text-sm font-medium">Services</a>
                    <a href="#about" class="text-gray-600 hover:text-gray-900 px-1 pt-1 text-sm font-medium">About</a>
                    <a href="#contact"
                        class="text-gray-600 hover:text-gray-900 px-1 pt-1 text-sm font-medium">Contact</a>
                </div>
                <div class="sm:hidden flex items-center">
                    <!-- Mobile menu button -->
                    <button type="button" id="mobile-menu-button"
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-700 hover:text-gray-900 focus:outline-none">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile menu -->
        <div id="mobile-menu" class="hidden sm:hidden bg-white/95 backdrop-blur-md">
            <div class="pt-2 pb-3 space-y-1 px-4">
                <a href="#"
                    class="block px-3 py-2 text-base font-medium text-gray-900 border-l-4 brand-border">Home</a>
                <a href="#services"
                    class="block px-3 py-2 text-base font-medium text-gray-600 hover:text-gray-900">Services</a>
                <a href="#about"
                    class="block px-3 py-2 text-base font-medium text-gray-600 hover:text-gray-900">About</a>
                <a href="#contact"
                    class="block px-3 py-2 text-base font-medium text-gray-600 hover:text-gray-900">Contact</a>
                <div class="mt-4 pt-4 border-t border-gray-200">
                    <a href="{{ route('auth.login') }}"
                        class="block w-full brand-bg text-white px-4 py-2 rounded-md text-center font-medium">
                        Login Portal
                    </a>
                    <a href="{{ route('auth.register') }}"
                        class="block w-full mt-2 border-2 border-[#082851] px-4 py-2 rounded-md text-center font-medium">
                        Register Now
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="overflow-hidden">
        <!-- Hero Section -->
        <section class="relative py-12 sm:py-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="lg:grid lg:grid-cols-12 lg:gap-16 items-center">
                    <div class="lg:col-span-6 text-center lg:text-left">
                        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold tracking-tight text-gray-900">
                            Trusted <span class="brand-color">Business & Verification</span> Solutions
                        </h1>
                        <p class="mt-4 text-lg sm:text-xl text-gray-600">
                            Professional services for identity verification, business registration, and financial
                            solutions. Fast, reliable, and secure.
                        </p>
                        <div class="mt-8 flex gap-4 justify-center lg:justify-start">
                            <a href="{{ route('auth.login') }}"
                                class="brand-bg text-white px-6 py-3 rounded-lg font-medium shadow-lg hover:opacity-90 transition-all hover:shadow-xl">
                                Login Portal
                            </a>
                            <a href="{{ route('auth.register') }}"
                                class="border-2 border-[#082851] px-6 py-3 rounded-lg font-medium hover:bg-[#082851] hover:text-white transition-all">
                                Register Now
                            </a>
                        </div>
                        <div class="mt-8 flex items-center justify-center lg:justify-start space-x-4">
                            <div class="flex items-center">
                                <svg class="h-5 w-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="ml-2 text-sm text-gray-600">Secure Verification</span>
                            </div>
                            <div class="flex items-center">
                                <svg class="h-5 w-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="ml-2 text-sm text-gray-600">Fast Processing</span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-10 lg:mt-0 lg:col-span-6 flex justify-center">
                        <div class="relative">
                            <images src="{{ asset('assets/images/images/verification-site.png') }}"
                                alt="Verification Services"
                                class="rounded-xl shadow-2xl w-full max-w-2xl transform hover:scale-105 transition-transform duration-300">
                            <div class="absolute -bottom-4 -right-4 bg-white p-4 rounded-lg shadow-lg hidden sm:block">
                                <div class="flex items-center">
                                    <div class="p-2 rounded-full brand-bg">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7" />
                                        </svg>
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-sm font-medium text-gray-900">Trusted by 500+ businesses</p>
                                        <div class="flex mt-1">
                                            <svg class="w-4 h-4 text-yellow-400" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <svg class="w-4 h-4 text-yellow-400" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <svg class="w-4 h-4 text-yellow-400" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <svg class="w-4 h-4 text-yellow-400" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <svg class="w-4 h-4 text-yellow-400" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Stats Section -->
        <section class="py-12 bg-white/50 backdrop-blur-sm">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
                    <div class="bg-white p-6 rounded-xl shadow-md">
                        <p class="text-3xl font-bold brand-color">10,000+</p>
                        <p class="mt-2 text-gray-600">Verified Identities</p>
                    </div>
                    <div class="bg-white p-6 rounded-xl shadow-md">
                        <p class="text-3xl font-bold brand-color">500+</p>
                        <p class="mt-2 text-gray-600">Business Clients</p>
                    </div>
                    <div class="bg-white p-6 rounded-xl shadow-md">
                        <p class="text-3xl font-bold brand-color">24/7</p>
                        <p class="mt-2 text-gray-600">Support Available</p>
                    </div>
                    <div class="bg-white p-6 rounded-xl shadow-md">
                        <p class="text-3xl font-bold brand-color">99.9%</p>
                        <p class="mt-2 text-gray-600">Success Rate</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section id="services" class="py-16 sm:py-24 bg-white/50 backdrop-blur-sm">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center">
                    <h2 class="text-sm brand-color font-semibold uppercase tracking-wide">Our Services</h2>
                    <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
                        Comprehensive Business Solutions
                    </p>
                    <p class="mt-4 max-w-2xl mx-auto text-lg text-gray-600">
                        We provide a range of services to help businesses and individuals with their verification and
                        registration needs.
                    </p>
                </div>

                <div class="mt-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- NIN Service -->
                    <div
                        class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition-all hover:transform hover:-translate-y-2 group">
                        <div class="w-16 h-16 brand-bg rounded-lg flex items-center justify-center mx-auto">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h3 class="mt-6 text-xl font-semibold text-center group-hover:brand-color">NIN Verification
                        </h3>
                        <p class="mt-4 text-gray-600 text-center">
                            Instant National Identity Number verification with multiple lookup options for businesses
                            and individuals.
                        </p>
                        <div class="mt-6 text-center">
                            <a href="#" class="text-sm font-medium brand-color hover:underline">Learn more →</a>
                        </div>
                    </div>

                    <!-- BVN Service -->
                    <div
                        class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition-all hover:transform hover:-translate-y-2 group">
                        <div class="w-16 h-16 brand-bg rounded-lg flex items-center justify-center mx-auto">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                        </div>
                        <h3 class="mt-6 text-xl font-semibold text-center group-hover:brand-color">BVN Services</h3>
                        <p class="mt-4 text-gray-600 text-center">
                            Bank Verification Number validation, lookup, and document generation services for financial
                            institutions.
                        </p>
                        <div class="mt-6 text-center">
                            <a href="#" class="text-sm font-medium brand-color hover:underline">Learn more →</a>
                        </div>
                    </div>

                    <!-- Business Registration -->
                    <div
                        class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition-all hover:transform hover:-translate-y-2 group">
                        <div class="w-16 h-16 brand-bg rounded-lg flex items-center justify-center mx-auto">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                        </div>
                        <h3 class="mt-6 text-xl font-semibold text-center group-hover:brand-color">Business
                            Registration</h3>
                        <p class="mt-4 text-gray-600 text-center">
                            Complete CAC business registration services to legally establish your company with ease.
                        </p>
                        <div class="mt-6 text-center">
                            <a href="#" class="text-sm font-medium brand-color hover:underline">Learn more →</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section id="about" class="py-16 sm:py-24 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="lg:grid lg:grid-cols-12 lg:gap-16 items-center">
                    <div class="lg:col-span-6">
                        <images src="{{ asset('assets/images/logo.png') }}" alt="About 9javerify"
                            class="rounded-xl shadow-xl w-full">
                    </div>
                    <div class="mt-10 lg:mt-0 lg:col-span-6">
                        <h2 class="text-sm brand-color font-semibold uppercase tracking-wide">About Us</h2>
                        <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
                            Your Trusted Partner for Business Solutions
                        </p>
                        <p class="mt-4 text-lg text-gray-600">
                            9javerify is a leading provider of identity verification and business registration
                            services.
                            We help businesses and individuals navigate complex verification processes with ease and
                            confidence.
                        </p>
                        <div class="mt-8 space-y-6">
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <svg class="h-6 w-6 brand-color" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <p class="text-lg font-medium text-gray-900">Secure & Reliable</p>
                                    <p class="mt-1 text-gray-600">Our systems use advanced encryption to protect your
                                        data.</p>
                                </div>
                            </div>
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <svg class="h-6 w-6 brand-color" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <p class="text-lg font-medium text-gray-900">Fast Processing</p>
                                    <p class="mt-1 text-gray-600">Get results in minutes, not days with our efficient
                                        systems.</p>
                                </div>
                            </div>
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <svg class="h-6 w-6 brand-color" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <p class="text-lg font-medium text-gray-900">Expert Support</p>
                                    <p class="mt-1 text-gray-600">Our team is available 24/7 to assist with any
                                        questions.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials Section -->
        <section class="py-16 sm:py-24 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center">
                    <h2 class="text-sm brand-color font-semibold uppercase tracking-wide">Testimonials</h2>
                    <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
                        What Our Clients Say
                    </p>
                </div>
                <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-white p-8 rounded-xl shadow-md">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <images class="h-12 w-12 rounded-full"
                                    src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                    alt="">
                            </div>
                            <div class="ml-4">
                                <p class="text-lg font-medium text-gray-900">Sarah Johnson</p>
                                <p class="text-sm text-gray-600">CEO, Tech Solutions Ltd</p>
                            </div>
                        </div>
                        <p class="mt-4 text-gray-600">
                            "9javerify made our business registration process incredibly smooth. Their team was
                            professional and efficient."
                        </p>
                        <div class="flex mt-4">
                            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                        </div>
                    </div>
                    <div class="bg-white p-8 rounded-xl shadow-md">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <images class="h-12 w-12 rounded-full"
                                    src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                    alt="">
                            </div>
                            <div class="ml-4">
                                <p class="text-lg font-medium text-gray-900">Michael Adebayo</p>
                                <p class="text-sm text-gray-600">Bank Manager</p>
                            </div>
                        </div>
                        <p class="mt-4 text-gray-600">
                            "The BVN verification services from 9javerify have been invaluable for our customer
                            onboarding process."
                        </p>
                        <div class="flex mt-4">
                            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                        </div>
                    </div>
                    <div class="bg-white p-8 rounded-xl shadow-md">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <images class="h-12 w-12 rounded-full"
                                    src="https://images.unsplash.com/photo-1527980965255-d3b416303d12?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                    alt="">
                            </div>
                            <div class="ml-4">
                                <p class="text-lg font-medium text-gray-900">David Okafor</p>
                                <p class="text-sm text-gray-600">Entrepreneur</p>
                            </div>
                        </div>
                        <p class="mt-4 text-gray-600">
                            "As a small business owner, their NIN verification service saved me countless hours of
                            paperwork and waiting."
                        </p>
                        <div class="flex mt-4">
                            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="py-16 sm:py-24 brand-bg text-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-3xl font-bold tracking-tight sm:text-4xl">
                    Ready to streamline your verification process?
                </h2>
                <p class="mt-4 text-lg">
                    Join hundreds of businesses who trust 9javerify for their identity verification needs.
                </p>
                <div class="mt-8 flex gap-4 justify-center">
                    <a href="{{ route('auth.register') }}"
                        class="bg-white text-[#082851] px-6 py-3 rounded-lg font-medium shadow-lg hover:opacity-90 transition-all">
                        Get Started Now
                    </a>
                    <a href="#contact"
                        class="border-2 border-white px-6 py-3 rounded-lg font-medium hover:bg-white/10 transition-all">
                        Contact Sales
                    </a>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="py-16 sm:py-24 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center">
                    <h2 class="text-sm brand-color font-semibold uppercase tracking-wide">Get Support</h2>
                    <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
                        Contact Our Team
                    </p>
                    <p class="mt-4 max-w-2xl mx-auto text-lg text-gray-600">
                        Have questions or need assistance? Our support team is here to help.
                    </p>
                </div>

                <div class="mt-12 grid lg:grid-cols-2 gap-12">
                    <div class="space-y-8">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900">Support Information</h3>
                            <div class="mt-4 space-y-4 text-gray-600">
                                <div class="flex items-start">
                                    <svg class="h-6 w-6 flex-shrink-0 brand-color" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                    <span class="ml-3">talk2naijaverify@gmail.com</span>
                                </div>
                                <div class="flex items-start">
                                    <svg class="h-6 w-6 flex-shrink-0 brand-color" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                    </svg>
                                    <span class="ml-3">07073366996</span>
                                </div>
                                <div class="flex items-start">
                                    <svg class="h-6 w-6 flex-shrink-0 brand-color" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    <span class="ml-3">Lagos, Nigeria</span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900">Business Hours</h3>
                            <div class="mt-4 space-y-2 text-gray-600">
                                <p class="flex justify-between max-w-xs"><span>Monday - Friday</span> <span>8:00 AM -
                                        6:00 PM</span></p>
                                <p class="flex justify-between max-w-xs"><span>Saturday</span> <span>9:00 AM - 4:00
                                        PM</span></p>
                                <p class="flex justify-between max-w-xs"><span>Sunday</span> <span>Closed</span></p>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Form -->
                    <div class="bg-gray-50 p-8 rounded-xl shadow-lg">
                        <form class="space-y-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Full Name</label>
                                <input type="text" required
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm p-3 focus:border-[#082851] focus:ring-[#082851]">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Email Address</label>
                                <input type="email" required
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm p-3 focus:border-[#082851] focus:ring-[#082851]">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Subject</label>
                                <input type="text" required
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm p-3 focus:border-[#082851] focus:ring-[#082851]">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Message</label>
                                <textarea rows="4" required
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm p-3 focus:border-[#082851] focus:ring-[#082851]"></textarea>
                            </div>
                            <button type="submit"
                                class="w-full brand-bg text-white py-3 rounded-md font-medium hover:opacity-90 transition-all shadow-md">
                                Send Message
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-gray-400 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="md:col-span-2">
                    <div class="flex items-center">
                        <images src="{{ asset('assets/images/images/logo2.png') }}" alt="9javerify Logo" class="h-10">
                        <span class="ml-2 text-xl font-semibold text-white">9javerify</span>
                    </div>
                    <p class="mt-4 text-sm">
                        Providing trusted identity verification and business solutions to help you grow with confidence.
                    </p>
                    <div class="mt-6 flex space-x-6">
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <span class="sr-only">Facebook</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <span class="sr-only">Twitter</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path
                                    d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <span class="sr-only">LinkedIn</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div>
                    <h3 class="text-sm font-semibold text-white uppercase tracking-wider">Services</h3>
                    <ul class="mt-4 space-y-2">
                        <li><a href="#" class="text-sm hover:text-white transition-colors">NIN Verification</a>
                        </li>
                        <li><a href="#" class="text-sm hover:text-white transition-colors">BVN Services</a></li>
                        <li><a href="#" class="text-sm hover:text-white transition-colors">Business
                                Registration</a></li>
                        <li><a href="#" class="text-sm hover:text-white transition-colors">Agent Enrollment</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-sm font-semibold text-white uppercase tracking-wider">Company</h3>
                    <ul class="mt-4 space-y-2">
                        <li><a href="#" class="text-sm hover:text-white transition-colors">About Us</a></li>
                        <li><a href="#" class="text-sm hover:text-white transition-colors">Contact</a></li>
                        <li><a href="#" class="text-sm hover:text-white transition-colors">Privacy Policy</a>
                        </li>
                        <li><a href="#" class="text-sm hover:text-white transition-colors">Terms of Service</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="mt-12 border-t border-gray-700 pt-8 text-center">
                <p class="text-xs text-gray-500">
                    &copy; {{ date('Y') }} 9javerify. All rights reserved.
                </p>
                <p class="text-xs text-gray-500 mt-1">
                    Trusted verification and business solutions partner
                </p>
            </div>
        </div>
    </footer>

    <script>
        window.onload = function() {
            document.getElementById('loader-wrapper').classList.add('hidden');
        };

        // Mobile menu toggle
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });
    </script>

</body>

</html>

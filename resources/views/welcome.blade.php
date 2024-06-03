<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>{{ __('messages.page_title') }}</title>
    <style>



     .whatsapp-float {
        position: fixed;
        width: 60px;
        height: 60px;
        bottom: 40px;
        right: 40px;
        background-color: #25d366;
        color: #FFF;
        border-radius: 50px;
        text-align: center;
        font-size: 30px;
        box-shadow: 2px 2px 3px #999;
        z-index: 1000;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: transform 0.3s ease-in-out;
    }

    .whatsapp-float:hover {
        transform: scale(1.1);
    }

    .whatsapp-icon {
        animation: whatsapp-bounce 2s infinite;
    }

    @keyframes whatsapp-bounce {
        0%, 20%, 50%, 80%, 100% {
            transform: translateY(0);
        }
        40% {
            transform: translateY(-10px);
        }
        60% {
            transform: translateY(-5px);
        }
    }

        .dark .blog-post,
        .dark .subscription-plan {
            background-color: #4a5568;
            color: #cbd5e0;
        }
    </style>
</head>
<body class="bg-gray-100 text-gray-800 dark:bg-gray-800 dark:text-gray-100 transition-all duration-300">
<nav class="bg-white border-gray-200 dark:bg-gray-900">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo"/>
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
        </a>
        <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">{{ __('messages.open_menu') }}</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                <li>
                    <a href="#" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500" aria-current="page">{{ __('messages.home') }}</a>
                </li>
                <li>
                    <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">{{ __('messages.about') }}</a>
                </li>
                <li>
                    <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">{{ __('messages.services') }}</a>
                </li>
                <li>
                    <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">{{ __('messages.pricing') }}</a>
                </li>
                <li>
                    <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">{{ __('messages.contact') }}</a>
                </li>
                <li>
                    <button onclick="toggleTheme()" class="px-4 py-2 bg-blue-500 text-white font-bold rounded hover:bg-blue-600 transition duration-200">
                        <span id="themeIcon">☀️</span>
                    </button>
                </li>
                <li>
                    <button onclick="toggleDirection()" class="px-4 py-2 bg-green-500 text-white font-bold rounded hover:bg-green-600 transition duration-200">{{ __('messages.change_language') }}</button>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="p-6">
    <header>
        <div id="default-carousel" class="relative w-full" data-carousel="slide">
            <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 4 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 5 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="/docs/images/carousel/carousel-5.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
            </div>
            <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                <button type="button" class="w-3 h-3" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                <button type="button" class="w-3 h-3" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
            </div>
            <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                    </svg>
                    <span class="sr-only">{{ __('messages.previous') }}</span>
                </span>
            </button>
            <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>
                    <span class="sr-only">{{ __('messages.next') }}</span>
                </span>
            </button>
        </div>
    </header>
    <section class="mt-8">
        <h2 class="text-2xl font-bold">{{ __('messages.about_us') }}</h2>
        <p class="mt-4">{{ __('messages.company_description') }}</p>
    </section>
    <div class="mt-8">
        <h2 class="text-2xl font-bold text-center">{{ __('messages.our_values') }}</h2>
        <div class="flex justify-center items-center space-x-4 mt-4">
            <div class="max-w-sm bg-white rounded-lg shadow-md p-6 text-center">
                <div class="flex justify-center">
                    <img class="h-12 w-12" src="https://icons.iconarchive.com/icons/custom-icon-design/flatastic-9/1024/Award-icon.png" alt="{{ __('messages.commitment') }}">
                </div>
                <div class="mt-4">
                    <h3 class="text-lg font-semibold">{{ __('messages.commitment') }}</h3>
                    <p>{{ __('messages.commitment_description') }}</p>
                </div>
            </div>
            <div class="max-w-sm bg-white rounded-lg shadow-md p-6 text-center">
                <div class="flex justify-center">
                    <img class="h-12 w-12" src="https://icons.iconarchive.com/icons/custom-icon-design/flatastic-9/1024/Check-icon.png" alt="{{ __('messages.reliability') }}">
                </div>
                <div class="mt-4">
                    <h3 class="text-lg font-semibold">{{ __('messages.reliability') }}</h3>
                    <p>{{ __('messages.reliability_description') }}</p>
                </div>
            </div>
            <div class="max-w-sm bg-white rounded-lg shadow-md p-6 text-center">
                <div class="flex justify-center">
                    <img class="h-12 w-12" src="https://icons.iconarchive.com/icons/custom-icon-design/flatastic-9/1024/Star-icon.png" alt="{{ __('messages.transparency') }}">
                </div>
                <div class="mt-4">
                    <h3 class="text-lg font-semibold">{{ __('messages.transparency') }}</h3>
                    <p>{{ __('messages.transparency_description') }}</p>
                </div>
            </div>
        </div>
    </div>
    <section class="mt-8">
        <h2 class="text-2xl font-bold">{{ __('messages.blog') }}</h2>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-8 mt-4">
            <div class="bg-white p-6 rounded shadow dark:text-gray-300 blog-post">
                <h3 class="font-semibold">{{ __('messages.blog_post_1_title') }}</h3>
                <p class="text-sm mt-4">{{ __('messages.blog_post_1_description') }}</p>
            </div>
            <div class="bg-white p-6 rounded shadow dark:text-gray-300 blog-post">
                <h3 class="font-semibold">{{ __('messages.blog_post_2_title') }}</h3>
                <p class="text-sm mt-4">{{ __('messages.blog_post_2_description') }}</p>
            </div>
            <div class="bg-white p-6 rounded shadow dark:text-gray-300 blog-post">
                <h3 class="font-semibold">{{ __('messages.blog_post_3_title') }}</h3>
                <p class="text-sm mt-4">{{ __('messages.blog_post_3_description') }}</p>
            </div>
        </div>
    </section>
    <section class="mt-8">
        <h2 class="text-2xl font-bold">{{ __('messages.our_team') }}</h2>
        <div class="grid grid-cols-1 sm:grid-cols-4 gap-8 mt-4">
            <div class="text-center">
                <img src="https://i.pravatar.cc/150?img=3" alt="{{ __('messages.team_member_1') }}" class="w-24 h-24 rounded-full mx-auto">
                <h3 class="mt-4 font-semibold">{{ __('messages.team_member_1') }}</h3>
                <p class="text-sm">{{ __('messages.ceo') }}</p>
            </div>
            <div class="text-center">
                <img src="https://i.pravatar.cc/150?img=4" alt="{{ __('messages.team_member_2') }}" class="w-24 h-24 rounded-full mx-auto">
                <h3 class="mt-4 font-semibold">{{ __('messages.team_member_2') }}</h3>
                <p class="text-sm">{{ __('messages.software_developer') }}</p>
            </div>
            <div class="text-center">
                <img src="https://i.pravatar.cc/150?img=5" alt="{{ __('messages.team_member_3') }}" class="w-24 h-24 rounded-full mx-auto">
                <h3 class="mt-4 font-semibold">{{ __('messages.team_member_3') }}</h3>
                <p class="text-sm">{{ __('messages.product_designer') }}</p>
            </div>
            <div class="text-center">
                <img src="https://i.pravatar.cc/150?img=6" alt="{{ __('messages.team_member_4') }}" class="w-24 h-24 rounded-full mx-auto">
                <h3 class="mt-4 font-semibold">{{ __('messages.team_member_4') }}</h3>
                <p class="text-sm">{{ __('messages.marketing_manager') }}</p>
            </div>
        </div>
    </section>
    <section class="mt-8">
        <h2 class="text-2xl font-bold">{{ __('messages.subscription_plans') }}</h2>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-8 mt-4">
            <div class="bg-white p-6 rounded shadow dark:text-gray-300 subscription-plan">
                <h3 class="font-semibold">{{ __('messages.basic_plan') }}</h3>
                <p class="text-sm mt-4">{{ __('messages.basic_plan_description') }}</p>
                <ul class="list-disc pl-5 mt-4">
                    <li>{{ __('messages.feature_1') }}</li>
                    <li>{{ __('messages.feature_2') }}</li>
                    <li>{{ __('messages.feature_3') }}</li>
                </ul>
            </div>
            <div class="bg-white p-6 rounded shadow dark:text-gray-300 subscription-plan">
                <h3 class="font-semibold">{{ __('messages.medium_plan') }}</h3>
                <p class="text-sm mt-4">{{ __('messages.medium_plan_description') }}</p>
                <ul class="list-disc pl-5 mt-4">
                    <li>{{ __('messages.feature_1') }}</li>
                    <li>{{ __('messages.feature_2') }}</li>
                    <li>{{ __('messages.feature_3') }}</li>
                </ul>
            </div>
            <div class="bg-white p-6 rounded shadow dark:text-gray-300 subscription-plan">
                <h3 class="font-semibold">{{ __('messages.advanced_plan') }}</h3>
                <p class="text-sm mt-4">{{ __('messages.advanced_plan_description') }}</p>
                <ul class="list-disc pl-5 mt-4">
                    <li>{{ __('messages.feature_1') }}</li>
                    <li>{{ __('messages.feature_2') }}</li>
                    <li>{{ __('messages.feature_3') }}</li>
                </ul>
            </div>
        </div>
        <a href="https://wa.me/yourphonenumber" class="whatsapp-float" target="_blank">
    <i class="fab fa-whatsapp whatsapp-icon"></i>
</a>

    </section>
    <div class="bg-white shadow-xl rounded-xl p-8 mt-8">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-10">{{ __('messages.contact_us') }}</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
            <div class="bg-gray-50 p-6 rounded-lg shadow">
                <h3 class="text-xl font-semibold text-gray-700 mb-4">{{ __('messages.sales') }}</h3>
                <p class="flex items-center text-gray-600 mb-3">
                    <i class="fas fa-phone-alt mr-2"></i>
                    0566929995
                </p>
                <p class="flex items-center text-gray-600">
                    <i class="fab fa-whatsapp mr-2"></i>
                    0566929995
                </p>
            </div>
            <div class="bg-gray-50 p-6 rounded-lg shadow">
                <h3 class="text-xl font-semibold text-gray-700 mb-4">{{ __('messages.support') }}</h3>
                <p class="flex items-center text-gray-600 mb-3">
                    <i class="fas fa-phone-alt mr-2"></i>
                    0550958877
                </p>
                <p class="flex items-center text-gray-600">
                    <i class="fab fa-whatsapp mr-2"></i>
                    0550958877
                </p>
            </div>
            <div class="bg-gray-50 p-6 rounded-lg shadow">
                <form action="" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-2">{{ __('messages.name') }}:</label>
                        <input type="text" id="name" name="name" class="block w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">{{ __('messages.email') }}:</label>
                        <input type="email" id="email" name="email" class="block w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
                    </div>
                    <div class="mb-6">
                        <label for="message" class="block text-sm font-medium text-gray-700 mb-2">{{ __('messages.message') }}:</label>
                        <textarea id="message" name="message" rows="4" class="block w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"></textarea>
                    </div>
                    <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white font-bold py-3 px-4 rounded-lg shadow-lg transition-colors duration-200">{{ __('messages.send') }}</button>
                </form>
            </div>
        </div>
    </div>
    <footer class="mt-8 text-center">
        <p>{{ __('messages.copyright') }} © 2024. {{ __('messages.all_rights_reserved') }}.</p>
    </footer>
</div>
<script>
    function toggleTheme() {
        const body = document.body;
        const themeIcon = document.getElementById('themeIcon');
        body.classList.toggle('dark');
        if (body.classList.contains('dark')) {
            themeIcon.innerText = '🌙';
        } else {
            themeIcon.innerText = '☀️';
        }
    }

    function toggleDirection() {
        const html = document.documentElement;
        const currentDir = html.getAttribute('dir');
        html.setAttribute('dir', currentDir === 'rtl' ? 'ltr' : 'rtl');
    }

    document.addEventListener('DOMContentLoaded', function () {
        const navbarToggle = document.querySelector('[data-collapse-toggle="navbar-default"]');
        const navbarMenu = document.getElementById('navbar-default');

        navbarToggle.addEventListener('click', function () {
            const expanded = this.getAttribute('aria-expanded') === 'true' || false;
            navbarToggle.setAttribute('aria-expanded', !expanded);
            navbarMenu.classList.toggle('hidden');
        });
    });
</script>
</body>
</html>

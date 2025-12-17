<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Job Board {{isset($title) ? " - " . $title : "" }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Animation for mobile menu */
        .menu-enter {
            transform: translateY(-20px);
            opacity: 0;
        }
        .menu-enter-active {
            transform: translateY(0);
            opacity: 1;
            transition: all 0.3s ease-in-out;
        }
        .menu-leave {
            transform: translateY(0);
            opacity: 1;
        }
        .menu-leave-active {
            transform: translateY(-20px);
            opacity: 0;
            transition: all 0.3s ease-in-out;
        }
    </style>
</head>
<body>

<div class="min-h-full">
    <nav class="bg-gray-800">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <div class="flex items-center">
                    <div class="shrink-0">
                        <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company" class="size-8" />
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-10 flex items-baseline space-x-4">
                            <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                            <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
                            <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
                            <x-nav-link href="/blog" :active="request()->is('blog')">Blog</x-nav-link>
                        </div>
                    </div>
                </div>

                <!-- Mobile menu button -->
                <div class="-mr-2 flex md:hidden">
                    <button id="mobile-menu-btn" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-white/5 hover:text-white focus:outline-2 focus:outline-offset-2 focus:outline-indigo-500">
                        <span class="sr-only">Open main menu</span>
                        <svg id="hamburger-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="h-6 w-6">
                            <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <svg id="close-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="h-6 w-6 hidden">
                            <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile menu -->
        <div id="mobile-menu" class="md:hidden hidden px-2 pt-2 pb-3 space-y-1">
            <a href="/" class="block rounded-md px-3 py-2 text-base font-medium {{ request()->is('/') ? 'bg-gray-950/50 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' }}">Home</a>
            <a href="/about" class="block rounded-md px-3 py-2 text-base font-medium {{ request()->is('about') ? 'bg-gray-950/50 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' }}">About</a>
            <a href="/contact" class="block rounded-md px-3 py-2 text-base font-medium {{ request()->is('contact') ? 'bg-gray-950/50 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' }}">Contact</a>
            <a href="/blog" class="block rounded-md px-3 py-2 text-base font-medium {{ request()->is('blog') ? 'bg-gray-950/50 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' }}">Posts</a>
        </div>
    </nav>
    @if (isset($title))
        <header class="relative bg-white after:pointer-events-none after:absolute after:inset-x-0 after:inset-y-0 after:border-y after:border-white/10">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold tracking-tight">{{ $title ?? "" }}</h1>
        </div>
    </header>
    @endif

    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
         {{ $slot }}
        </div>
    </main>
</div>

<script>
    const btn = document.getElementById('mobile-menu-btn');
    const menu = document.getElementById('mobile-menu');
    const hamburger = document.getElementById('hamburger-icon');
    const closeIcon = document.getElementById('close-icon');

    btn.addEventListener('click', () => {
        // toggle hidden class
        if(menu.classList.contains('hidden')){
            menu.classList.remove('hidden');
            menu.classList.add('menu-enter');
            setTimeout(() => menu.classList.add('menu-enter-active'), 10);
            hamburger.classList.add('hidden');
            closeIcon.classList.remove('hidden');
        } else {
            menu.classList.remove('menu-enter-active');
            menu.classList.add('menu-leave');
            setTimeout(() => {
                menu.classList.add('menu-leave-active');
                setTimeout(() => {
                    menu.classList.add('hidden');
                    menu.classList.remove('menu-leave', 'menu-leave-active');
                }, 300);
            }, 10);
            hamburger.classList.remove('hidden');
            closeIcon.classList.add('hidden');
        }
    });
</script>

</body>
</html>
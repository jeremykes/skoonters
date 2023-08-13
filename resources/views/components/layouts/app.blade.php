<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @yield('page_title_meta')

    <script type="application/ld+json">
    {
        "@context": "http://schema.org/",
        "@type": ["Software Developer", "Website Developer", "Mobile App Developer"],
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Eldon Trading Henau Drive Gordons Port Moresby 121 Papua New Guinea",
            "addressLocality": "Port Moresby",
            "addressRegion": "NCD",
            "postalCode": "121",
            "addressCountry": "PG"
        },
        "name": "Skoonters",
        "telephone": "+67576074402",
        "url": "https://skoonters.com",
        "logo": "https://skoonters.com/imgs/logo.png"
    }
    </script>

    @vite('resources/css/app.css')

    @yield('my_styles')

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Handjet&family=Montserrat&family=Orbitron:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

    {{-- font-family: 'Handjet', cursive;
    font-family: 'Montserrat', sans-serif;
    font-family: 'Orbitron', sans-serif; --}}

    <style>
        .glass {
            background: rgba(255, 255, 255, 0.25);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
            backdrop-filter: blur(4px);
            -webkit-backdrop-filter: blur(4px);
            border-radius: 10px;
            border: 1px solid rgba(255, 255, 255, 0.18);
        }

        .input-container {
            display: flex;
            background: white;
            border-radius: 1rem;
            background: linear-gradient(135deg, #23272F 0%, #14161a 100%);
            box-shadow: 10px 10px 20px #0e1013, -10px -10px 40px #383e4b;
            padding: 0.3rem;
            gap: 0.3rem;
        }

        .input-container input {
            border-radius: 0.8rem 0 0 0.8rem;
            background: #23272F;
            box-shadow: inset 5px 5px 10px #0e1013, inset -5px -5px 10px #383e4b, 0px 0px 100px rgba(255, 212, 59, 0), 0px 0px 100px rgba(255, 102, 0, 0);
            width: 100%;
            flex-basis: 75%;
            padding: 1rem;
            border: none;
            border: 1px solid transparent;
            color: white;
            transition: all 0.2s ease-in-out;
        }

        .input-container input:focus {
            border: 1px solid #FFD43B;
            outline: none;
            box-shadow: inset 0px 0px 10px rgba(255, 102, 0, 0.5), inset 0px 0px 10px rgba(255, 212, 59, 0.5), 0px 0px 100px rgba(255, 212, 59, 0.5), 0px 0px 100px rgba(255, 102, 0, 0.5);
        }

        .input-container button {
            flex-basis: 25%;
            padding: 1rem;
            background: linear-gradient(135deg, rgb(255, 212, 59) 0%, rgb(255, 102, 0) 100%);
            box-shadow: 0px 0px 1px rgba(255, 212, 59, 0.5), 0px 0px 1px rgba(255, 102, 0, 0.5);
            font-weight: 900;
            letter-spacing: 0.3rem;
            text-transform: uppercase;
            color: #23272F;
            border: none;
            width: 100%;
            border-radius: 0 1rem 1rem 0;
            transition: all 0.2s ease-in-out;
        }

        .input-container button:hover {
            background: linear-gradient(135deg, rgb(255, 212, 59) 50%, rgb(255, 102, 0) 100%);
            box-shadow: 0px 0px 100px rgba(255, 212, 59, 0.5), 0px 0px 100px rgba(255, 102, 0, 0.5);
        }

        @media (max-width: 500px) {
            .input-container {
                flex-direction: column;
            }

            .input-container input {
                border-radius: 0.8rem;
            }

            .input-container button {
                padding: 1rem;
                border-radius: 0.8rem;
            }
        }

        /* Spinning cube */
        .spinner {
            width: 70.4px;
            height: 70.4px;
            --clr: rgb(172, 84, 242);
            --clr-alpha: rgb(247, 197, 159, .1);
            animation: spinner 1.6s infinite ease;
            transform-style: preserve-3d;
        }

        .spinner>div {
            background-color: var(--clr-alpha);
            height: 100%;
            position: absolute;
            width: 100%;
            border: 3.5px solid var(--clr);
        }

        .spinner div:nth-of-type(1) {
            transform: translateZ(-35.2px) rotateY(180deg);
        }

        .spinner div:nth-of-type(2) {
            transform: rotateY(-270deg) translateX(50%);
            transform-origin: top right;
        }

        .spinner div:nth-of-type(3) {
            transform: rotateY(270deg) translateX(-50%);
            transform-origin: center left;
        }

        .spinner div:nth-of-type(4) {
            transform: rotateX(90deg) translateY(-50%);
            transform-origin: top center;
        }

        .spinner div:nth-of-type(5) {
            transform: rotateX(-90deg) translateY(50%);
            transform-origin: bottom center;
        }

        .spinner div:nth-of-type(6) {
            transform: translateZ(35.2px);
        }

        @keyframes spinner {
            0% {
                transform: rotate(45deg) rotateX(-25deg) rotateY(25deg);
            }

            50% {
                transform: rotate(45deg) rotateX(-385deg) rotateY(25deg);
            }

            100% {
                transform: rotate(45deg) rotateX(-385deg) rotateY(385deg);
            }
        }

        /* Information Card */
        .card {
            position: relative;
            width: 190px;
            height: 254px;
            background-color: #000;
            display: flex;
            flex-direction: column;
            justify-content: end;
            padding: 12px;
            gap: 12px;
            border-radius: 8px;
            cursor: pointer;
        }

        .card::before {
            content: '';
            position: absolute;
            inset: 0;
            left: -5px;
            margin: auto;
            width: 200px;
            height: 264px;
            border-radius: 10px;
            background: linear-gradient(-45deg, #e81cff 0%, #40c9ff 100%);
            z-index: -10;
            pointer-events: none;
            transition: all 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        .card::after {
            content: "";
            z-index: -1;
            position: absolute;
            inset: 0;
            background: linear-gradient(-45deg, #fc00ff 0%, #00dbde 100%);
            transform: translate3d(0, 0, 0) scale(0.95);
            filter: blur(20px);
        }

        .heading {
            font-size: 20px;
            text-transform: capitalize;
            font-weight: 700;
        }

        .card p:not(.heading) {
            font-size: 14px;
        }

        .card p:last-child {
            color: #e81cff;
            font-weight: 600;
        }

        .card:hover::after {
            filter: blur(30px);
        }

        .card:hover::before {
            transform: rotate(-90deg) scaleX(1.34) scaleY(0.77);
        }

        /* Request a Quote Form */
        .form-container {
            /* width: 400px; */
            background: linear-gradient(#141417, #141417) padding-box,
                linear-gradient(145deg, transparent 35%, #e81cff, #40c9ff) border-box;
            border: 2px solid transparent;
            padding: 32px 24px;
            font-size: 14px;
            font-family: inherit;
            /* color: white; */
            display: flex;
            flex-direction: column;
            gap: 20px;
            box-sizing: border-box;
            border-radius: 16px;
        }

        .form-container button:active {
            scale: 0.95;
        }

        .form-container .form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .form-container .form-group {
            display: flex;
            flex-direction: column;
            gap: 2px;
        }

        .form-container .form-group label {
            display: block;
            margin-bottom: 5px;
            /* color: #717171; */
            font-weight: 600;
            font-size: 12px;
        }

        .form-container .form-group input {
            width: 100%;
            padding: 12px 16px;
            border-radius: 8px;
            /* color: #fff; */
            font-family: inherit;
            background-color: transparent;
            border: 1px solid #414141;
        }

        .form-container .form-group textarea {
            width: 100%;
            padding: 12px 16px;
            border-radius: 8px;
            resize: none;
            /* color: #fff; */
            height: 96px;
            border: 1px solid #414141;
            background-color: transparent;
            font-family: inherit;
        }

        .form-container .form-group input::placeholder {
            opacity: 0.5;
        }

        .form-container .form-group input:focus {
            outline: none;
            border-color: #e81cff;
        }

        .form-container .form-group textarea:focus {
            outline: none;
            border-color: #e81cff;
        }

        .form-container .form-submit-btn {
            display: flex;
            align-items: flex-start;
            justify-content: center;
            align-self: flex-start;
            font-family: inherit;
            /* color: #717171; */
            font-weight: 600;
            width: 40%;
            background: #313131;
            border: 1px solid #414141;
            padding: 12px 16px;
            font-size: inherit;
            gap: 8px;
            margin-top: 8px;
            cursor: pointer;
            border-radius: 6px;
        }

        .form-container .form-submit-btn:hover {
            background-color: #fff;
            border-color: #fff;
        }

        /* Request Quote button */
        .codepen-button {
            display: block;
            cursor: pointer;
            color: white;
            margin: 0 auto;
            position: relative;
            text-decoration: none;
            font-weight: 600;
            border-radius: 6px;
            overflow: hidden;
            padding: 3px;
            isolation: isolate;
        }

        .codepen-button::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 200%;
            height: 100%;
            background: linear-gradient(115deg, #4fcf70, #fad648, #a767e5, #12bcfe, #44ce7b);
            background-size: 25% 100%;
            animation: an-at-keyframe-css-at-rule-that-translates-via-the-transform-property-the-background-by-negative-25-percent-of-its-width-so-that-it-gives-a-nice-border-animation_-We-use-the-translate-property-to-have-a-nice-transition-so-it_s-not-a-jerk-of-a-start-or-stop .75s linear infinite;
            animation-play-state: paused;
            translate: -5% 0%;
            transition: translate 0.25s ease-out;
        }

        .codepen-button:hover::before {
            animation-play-state: running;
            transition-duration: 0.75s;
            translate: 0% 0%;
        }

        @keyframes an-at-keyframe-css-at-rule-that-translates-via-the-transform-property-the-background-by-negative-25-percent-of-its-width-so-that-it-gives-a-nice-border-animation_-We-use-the-translate-property-to-have-a-nice-transition-so-it_s-not-a-jerk-of-a-start-or-stop {
            to {
                transform: translateX(-25%);
            }
        }

        .codepen-button span {
            position: relative;
            display: block;
            padding: 1rem 1.5rem;
            font-size: 1.1rem;
            background: #000;
            border-radius: 3px;
            height: 100%;
        }

        /* Loading Spinner */
        .typing-indicator {
            width: 60px;
            height: 30px;
            position: relative;
            z-index: 4;
        }

        .typing-circle {
            width: 8px;
            height: 8px;
            position: absolute;
            border-radius: 50%;
            background-color: #ffffff;
            left: 15%;
            transform-origin: 50%;
            animation: typing-circle7124 0.5s alternate infinite ease;
        }

        @keyframes typing-circle7124 {
            0% {
                top: 20px;
                height: 5px;
                border-radius: 50px 50px 25px 25px;
                transform: scaleX(1.7);
            }

            40% {
                height: 8px;
                border-radius: 50%;
                transform: scaleX(1);
            }

            100% {
                top: 0%;
            }
        }

        .typing-circle:nth-child(2) {
            left: 45%;
            animation-delay: 0.2s;
        }

        .typing-circle:nth-child(3) {
            left: auto;
            right: 15%;
            animation-delay: 0.3s;
        }

        .typing-shadow {
            width: 5px;
            height: 4px;
            border-radius: 50%;
            background-color: rgba(0, 0, 0, 0.4);
            position: absolute;
            top: 30px;
            transform-origin: 50%;
            z-index: 3;
            left: 15%;
            filter: blur(1px);
            animation: typing-shadow046 0.5s alternate infinite ease;
        }

        @keyframes typing-shadow046 {
            0% {
                transform: scaleX(1.5);
            }

            40% {
                transform: scaleX(1);
                opacity: 0.7;
            }

            100% {
                transform: scaleX(0.2);
                opacity: 0.4;
            }
        }

        .typing-shadow:nth-child(4) {
            left: 45%;
            animation-delay: 0.2s;
        }

        .typing-shadow:nth-child(5) {
            left: auto;
            right: 15%;
            animation-delay: 0.3s;
        }
    </style>

</head>

<body class="leading-normal tracking-normal text-indigo-400 bg-cover bg-fixed" style="font-family: 'Montserrat', sans-serif;background-image: url('{{ asset('imgs/header.png') }}')">

    <!--Nav-->
    <div style="font-family: 'Orbitron', sans-serif" class="w-full container mx-auto pt-6  px-4 md:px-10">
        <div class="w-full flex items-center justify-between">
            <a wire:navigate href="/" class="flex items-center text-indigo-400 no-underline hover:no-underline font-bold text-2xl lg:text-4xl">
                Skoo<span class="bg-clip-text text-transparent bg-gradient-to-r from-green-400 via-pink-500 to-purple-500">nters</span>
            </a>

            <div class="flex w-1/2 justify-end content-center">
                {{-- <a class="inline-block text-blue-300 no-underline hover:text-pink-500 hover:text-underline text-center h-10 p-2 md:h-auto md:p-4 transform hover:scale-125 duration-300 ease-in-out" href="https://twitter.com/intent/tweet?url=#">
                    Blogs
                </a> --}}
                <a class="inline-block text-blue-300 no-underline hover:text-pink-500 hover:text-underline text-center h-10 p-2 md:h-auto md:p-4 transform hover:scale-125 duration-300 ease-in-out" href="https://twitter.com/intent/tweet?url=#">
                    <svg class="fill-current h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                        <path d="M30.063 7.313c-.813 1.125-1.75 2.125-2.875 2.938v.75c0 1.563-.188 3.125-.688 4.625a15.088 15.088 0 0 1-2.063 4.438c-.875 1.438-2 2.688-3.25 3.813a15.015 15.015 0 0 1-4.625 2.563c-1.813.688-3.75 1-5.75 1-3.25 0-6.188-.875-8.875-2.625.438.063.875.125 1.375.125 2.688 0 5.063-.875 7.188-2.5-1.25 0-2.375-.375-3.375-1.125s-1.688-1.688-2.063-2.875c.438.063.813.125 1.125.125.5 0 1-.063 1.5-.25-1.313-.25-2.438-.938-3.313-1.938a5.673 5.673 0 0 1-1.313-3.688v-.063c.813.438 1.688.688 2.625.688a5.228 5.228 0 0 1-1.875-2c-.5-.875-.688-1.813-.688-2.75 0-1.063.25-2.063.75-2.938 1.438 1.75 3.188 3.188 5.25 4.25s4.313 1.688 6.688 1.813a5.579 5.579 0 0 1 1.5-5.438c1.125-1.125 2.5-1.688 4.125-1.688s3.063.625 4.188 1.813a11.48 11.48 0 0 0 3.688-1.375c-.438 1.375-1.313 2.438-2.563 3.188 1.125-.125 2.188-.438 3.313-.875z"></path>
                    </svg>
                </a>
                <a class="inline-block text-blue-300 no-underline hover:text-pink-500 hover:text-underline text-center h-10 p-2 md:h-auto md:p-4 transform hover:scale-125 duration-300 ease-in-out" href="https://www.facebook.com/sharer/sharer.php?u=#">
                    <svg class="fill-current h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                        <path d="M19 6h5V0h-5c-3.86 0-7 3.14-7 7v3H8v6h4v16h6V16h5l1-6h-6V7c0-.542.458-1 1-1z"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>

    {{-- Body --}}
    {{ $slot }}

    {{-- Footer --}}
    <div class="px-4 pt-16 mx-auto md:px-24 lg:px-8 bg-zinc-900">
        <div class="grid gap-10 row-gap-6 mb-8 sm:grid-cols-2 lg:grid-cols-4">
            <div class="sm:col-span-2">
                <a wire:navigate href="/" aria-label="Go home" title="Skoonters" class="inline-flex items-center">
                    <img src="{{ asset('imgs/logo.png') }}" class="h-10" alt="Skoonters logo">
                    <span class="ml-2 text-xl font-bold tracking-wide text-indigo-400 uppercase">Skoo<span class="bg-clip-text text-transparent bg-gradient-to-r from-green-400 via-pink-500 to-purple-500">nters</span></span>
                </a>
                <div class="mt-6 lg:max-w-sm">
                    <p class="text-sm text-gray-300">
                        Skoonters is a Papua New Guinea software company registered in 2014, based in Port Moresby.
                    </p>
                    <p class="mt-4 text-sm text-gray-300">
                        We specialize in software development, specifically web technologies such as websites and mobile apps.
                    </p>
                </div>
            </div>
            <div class="space-y-2 text-sm">
                <p class="text-base font-bold tracking-wide text-gray-900">Contacts</p>
                <div class="flex">
                    <p class="mr-1 text-gray-300">Phone:</p>
                    <a href="tel:+67576074402" aria-label="Our phone" title="Our phone" class="transition-colors duration-300 text-deep-purple-accent-400 hover:text-deep-purple-800">+675 76074402</a>
                </div>
                <div class="flex">
                    <p class="mr-1 text-gray-300">Email:</p>
                    <a href="mailto:admin@skoonters.com" aria-label="Our email" title="Our email" class="transition-colors duration-300 text-deep-purple-accent-400 hover:text-deep-purple-800">admin@skoonters.com</a>
                </div>
                <div class="flex">
                    <p class="mr-1 text-gray-300">Address:</p>
                    <a href="https://www.google.com/maps" target="_blank" rel="noopener noreferrer" aria-label="Our address" title="Our address" class="transition-colors duration-300 text-deep-purple-accent-400 hover:text-deep-purple-800">
                        Eldon Trading, Henau Drive, Gordons, Port Moresby, Papua New Guinea, 121.
                    </a>
                </div>
            </div>
            <div>
                <span class="text-base font-bold tracking-wide text-gray-400">Social</span>
                <div class="flex items-center mt-1 space-x-3">
                    <a href="https://twitter.com/Jeremy_Palme" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-400">
                        <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
                            <path d="M24,4.6c-0.9,0.4-1.8,0.7-2.8,0.8c1-0.6,1.8-1.6,2.2-2.7c-1,0.6-2,1-3.1,1.2c-0.9-1-2.2-1.6-3.6-1.6 c-2.7,0-4.9,2.2-4.9,4.9c0,0.4,0,0.8,0.1,1.1C7.7,8.1,4.1,6.1,1.7,3.1C1.2,3.9,1,4.7,1,5.6c0,1.7,0.9,3.2,2.2,4.1 C2.4,9.7,1.6,9.5,1,9.1c0,0,0,0,0,0.1c0,2.4,1.7,4.4,3.9,4.8c-0.4,0.1-0.8,0.2-1.3,0.2c-0.3,0-0.6,0-0.9-0.1c0.6,2,2.4,3.4,4.6,3.4 c-1.7,1.3-3.8,2.1-6.1,2.1c-0.4,0-0.8,0-1.2-0.1c2.2,1.4,4.8,2.2,7.5,2.2c9.1,0,14-7.5,14-14c0-0.2,0-0.4,0-0.6 C22.5,6.4,23.3,5.5,24,4.6z"></path>
                        </svg>
                    </a>
                    <a href="https://www.instagram.com/jeremykes/" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-400">
                        <svg viewBox="0 0 30 30" fill="currentColor" class="h-6">
                            <circle cx="15" cy="15" r="4"></circle>
                            <path d="M19.999,3h-10C6.14,3,3,6.141,3,10.001v10C3,23.86,6.141,27,10.001,27h10C23.86,27,27,23.859,27,19.999v-10   C27,6.14,23.859,3,19.999,3z M15,21c-3.309,0-6-2.691-6-6s2.691-6,6-6s6,2.691,6,6S18.309,21,15,21z M22,9c-0.552,0-1-0.448-1-1   c0-0.552,0.448-1,1-1s1,0.448,1,1C23,8.552,22.552,9,22,9z"></path>
                        </svg>
                    </a>
                    <a href="https://facebook.com/jeremy.palme.3" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-400">
                        <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
                            <path d="M22,0H2C0.895,0,0,0.895,0,2v20c0,1.105,0.895,2,2,2h11v-9h-3v-4h3V8.413c0-3.1,1.893-4.788,4.659-4.788 c1.325,0,2.463,0.099,2.795,0.143v3.24l-1.918,0.001c-1.504,0-1.795,0.715-1.795,1.763V11h4.44l-1,4h-3.44v9H22c1.105,0,2-0.895,2-2 V2C24,0.895,23.105,0,22,0z"></path>
                        </svg>
                    </a>
                </div>
                <p class="mt-4 text-sm text-gray-500">
                    You can contact us on any of the social platforms above.
                </p>
            </div>
        </div>
        <div class="flex flex-col-reverse justify-between pt-5 pb-10 border-t border-gray-800 lg:flex-row">
            <p class="text-xs text-gray-600">
                © Copyright 2023 Skoonters. All rights reserved.
            </p>
            <ul class="flex flex-col mb-3 space-y-2 lg:mb-0 sm:space-y-0 sm:space-x-5 sm:flex-row">
                {{-- <li>
                    <a href="{{ url('/blog') }}" class="text-xs text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">Blog</a>
                </li> --}}
                <li>
                    <a wire:navigate href="/terms-conditions" class="text-xs text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">Terms &amp; Conditions</a>
                </li>
            </ul>
        </div>
    </div>

</body>

</html>

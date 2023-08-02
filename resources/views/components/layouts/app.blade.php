<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>
    @vite('resources/css/app.css')

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

        .absolute {
            position: absolute;
        }

        .inline-block {
            display: inline-block;
        }

        .loader {
            display: flex;
            margin: 0.25em 0;
        }

        .w-2 {
            width: 0.5em;
        }

        .dash {
            animation: dashArray 2s ease-in-out infinite,
                dashOffset 2s linear infinite;
        }

        .spin {
            animation: spinDashArray 2s ease-in-out infinite,
                spin 8s ease-in-out infinite,
                dashOffset 2s linear infinite;
            transform-origin: center;
        }

        @keyframes dashArray {
            0% {
                stroke-dasharray: 0 1 359 0;
            }

            50% {
                stroke-dasharray: 0 359 1 0;
            }

            100% {
                stroke-dasharray: 359 1 0 0;
            }
        }

        @keyframes spinDashArray {
            0% {
                stroke-dasharray: 270 90;
            }

            50% {
                stroke-dasharray: 0 360;
            }

            100% {
                stroke-dasharray: 270 90;
            }
        }

        @keyframes dashOffset {
            0% {
                stroke-dashoffset: 365;
            }

            100% {
                stroke-dashoffset: 5;
            }
        }

        @keyframes spin {
            0% {
                rotate: 0deg;
            }

            12.5%,
            25% {
                rotate: 270deg;
            }

            37.5%,
            50% {
                rotate: 540deg;
            }

            62.5%,
            75% {
                rotate: 810deg;
            }

            87.5%,
            100% {
                rotate: 1080deg;
            }
        }

        .css-selector {
            background: linear-gradient(214deg, #dd1db4, #122b14, #6312c1);
            background-size: 600% 600%;

            -webkit-animation: AnimationName 9s ease infinite;
            -moz-animation: AnimationName 9s ease infinite;
            animation: AnimationName 9s ease infinite;
        }

        @-webkit-keyframes AnimationName {
            0% {
                background-position: 94% 0%
            }

            50% {
                background-position: 7% 100%
            }

            100% {
                background-position: 94% 0%
            }
        }

        @-moz-keyframes AnimationName {
            0% {
                background-position: 94% 0%
            }

            50% {
                background-position: 7% 100%
            }

            100% {
                background-position: 94% 0%
            }
        }

        @keyframes AnimationName {
            0% {
                background-position: 94% 0%
            }

            50% {
                background-position: 7% 100%
            }

            100% {
                background-position: 94% 0%
            }
        }
    </style>
</head>

<body class="leading-normal tracking-normal text-indigo-400 m-6 bg-no-repeat" style="background-image: url('{{ asset('header.png') }}')">

    <!--Nav-->
    <div class="w-full container mx-auto">
        <div class="w-full flex items-center justify-between">
            <a class="flex items-center text-indigo-400 no-underline hover:no-underline font-bold text-2xl lg:text-4xl" href="#">
                Skoo<span class="bg-clip-text text-transparent bg-gradient-to-r from-green-400 via-pink-500 to-purple-500">nters</span>
            </a>

            <div class="flex w-1/2 justify-end content-center">
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

    <!--Main-->
    <div class="container pt-24 md:pt-36 mx-auto flex flex-wrap flex-col md:flex-row items-center">
        <!--Left Col-->
        <div class="flex flex-col w-full xl:w-2/5 justify-center lg:items-start overflow-y-hidden">
            <h1 class="my-4 text-3xl md:text-5xl text-white opacity-75 font-bold leading-tight text-center md:text-left">
                We do
                <span class="bg-clip-text text-transparent bg-gradient-to-r from-green-400 via-pink-500 to-purple-500">
                    Apps & Websites
                </span>
                and we do it well!
            </h1>
            <p class="leading-normal text-base md:text-2xl mb-8 text-center md:text-left">
                The BEST App and Website development company in PNG right now...and it's all local.
            </p>

            <div class="relative w-20 left-[40px] -z-10 top-6 glass rotate-45">
                <div class="text-5xl pt-4 w-20 h-20 text-center">🔥</div>
            </div>

            <form class="glass px-8 w-full pt-6 pb-20">
                <div class="mb-4">
                    <label class="block text-blue-300 py-2 font-bold mb-2" for="emailaddress">
                        Signup for my blogs
                    </label>
                    <div class="input-container">
                        <input type="text" placeholder="you@somewhere.com">
                        <button class="button">Signup</button>
                    </div>
                </div>
            </form>
            <div class="relative">
                <div class="absolute w-20 left-[170px] -z-10 -top-7 glass rotate-45">
                    <div class="text-5xl pt-4 w-20 h-20 text-center">🎯</div>
                </div>
                <div class="relative w-20 left-[400px] z-100 -top-[110px] glass rotate-45">
                    <div class="text-5xl pt-4 w-20 h-20 text-center">🤩</div>
                </div>
            </div>
        </div>

        <!--Right Col-->
        <div class="w-full xl:w-3/5 p-12 overflow-hidden">
            <img class="mx-auto w-full md:w-4/5 transform -rotate-6 transition hover:scale-105 duration-700 ease-in-out hover:rotate-6" src="{{ asset('macbook.svg') }}" />
        </div>

    </div>

    <div class="container pt-24 mx-auto bg-stone-900">
        <div class="flex flex-row items-center align-middle justify-center ">
            <div class="text-blue-400 text-4xl font-bold pb-8 lg:pb-6 text-center">
                We create custom solutions just for
            </div>
            <div class="loader">
                <svg height="0" width="0" viewBox="0 0 64 64" class="absolute">
                    <defs class="s-xJBuHA073rTt" xmlns="http://www.w3.org/2000/svg">
                        <linearGradient class="s-xJBuHA073rTt" gradientUnits="userSpaceOnUse" y2="2" x2="0" y1="62" x1="0" id="b">
                            <stop class="s-xJBuHA073rTt" stop-color="#973BED"></stop>
                            <stop class="s-xJBuHA073rTt" stop-color="#007CFF" offset="1"></stop>
                        </linearGradient>
                        <linearGradient class="s-xJBuHA073rTt" gradientUnits="userSpaceOnUse" y2="0" x2="0" y1="64" x1="0" id="c">
                            <stop class="s-xJBuHA073rTt" stop-color="#FFC800"></stop>
                            <stop class="s-xJBuHA073rTt" stop-color="#F0F" offset="1"></stop>
                            <animateTransform repeatCount="indefinite" keySplines=".42,0,.58,1;.42,0,.58,1;.42,0,.58,1;.42,0,.58,1;.42,0,.58,1;.42,0,.58,1;.42,0,.58,1;.42,0,.58,1" keyTimes="0; 0.125; 0.25; 0.375; 0.5; 0.625; 0.75; 0.875; 1" dur="8s" values="0 32 32;-270 32 32;-270 32 32;-540 32 32;-540 32 32;-810 32 32;-810 32 32;-1080 32 32;-1080 32 32" type="rotate" attributeName="gradientTransform"></animateTransform>
                        </linearGradient>
                        <linearGradient class="s-xJBuHA073rTt" gradientUnits="userSpaceOnUse" y2="2" x2="0" y1="62" x1="0" id="d">
                            <stop class="s-xJBuHA073rTt" stop-color="#00E0ED"></stop>
                            <stop class="s-xJBuHA073rTt" stop-color="#00DA72" offset="1"></stop>
                        </linearGradient>
                    </defs>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 64 64" height="64" width="64" class="inline-block">
                    <path stroke-linejoin="round" stroke-linecap="round" stroke-width="8" stroke="url(#b)" d="M 54.722656,3.9726563 A 2.0002,2.0002 0 0 0 54.941406,4 h 5.007813 C 58.955121,17.046124 49.099667,27.677057 36.121094,29.580078 a 2.0002,2.0002 0 0 0 -1.708985,1.978516 V 60 H 29.587891 V 31.558594 A 2.0002,2.0002 0 0 0 27.878906,29.580078 C 14.900333,27.677057 5.0448787,17.046124 4.0507812,4 H 9.28125 c 1.231666,11.63657 10.984383,20.554048 22.6875,20.734375 a 2.0002,2.0002 0 0 0 0.02344,0 c 11.806958,0.04283 21.70649,-9.003371 22.730469,-20.7617187 z" class="dash" id="y" pathLength="360"></path>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" style="--rotation-duration:0ms; --rotation-direction:normal;" viewBox="0 0 64 64" height="64" width="64" class="inline-block">
                    <path stroke-linejoin="round" stroke-linecap="round" stroke-width="10" stroke="url(#c)" d="M 32 32 m 0 -27 a 27 27 0 1 1 0 54 a 27 27 0 1 1 0 -54" class="spin" id="o" pathLength="360"></path>
                </svg>
                <div class="w-2"></div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" style="--rotation-duration:0ms; --rotation-direction:normal;" viewBox="0 0 64 64" height="64" width="64" class="inline-block">
                    <path stroke-linejoin="round" stroke-linecap="round" stroke-width="8" stroke="url(#d)" d="M 4,4 h 4.6230469 v 25.919922 c -0.00276,11.916203 9.8364941,21.550422 21.7500001,21.296875 11.616666,-0.240651 21.014356,-9.63894 21.253906,-21.25586 a 2.0002,2.0002 0 0 0 0,-0.04102 V 4 H 56.25 v 25.919922 c 0,14.33873 -11.581192,25.919922 -25.919922,25.919922 a 2.0002,2.0002 0 0 0 -0.0293,0 C 15.812309,56.052941 3.998433,44.409961 4,29.919922 Z" class="dash" id="u" pathLength="360"></path>
                </svg>
            </div>
        </div>
    </div>

    {{ $slot }}
</body>

</html>

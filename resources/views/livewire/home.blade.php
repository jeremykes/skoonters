@section('page_title_meta')
    <title>Skoonters - Website and Mobile App Developers</title>
    <meta name="description" content="Skoonters is a Papua New Guinea software company that provides software development services that specialize in Websites and Mobile Apps. We offer custom built software built from the ground up tailored to each customer.">
@endsection

<div class="h-full">

    {{-- Hero --}}
    <div class="container pt-20 md:pt-32  px-4 md:px-10 mx-auto flex flex-wrap flex-col md:flex-row items-center">
        <!--Left Col-->
        <div class="flex flex-col w-full xl:w-2/5 justify-center lg:items-start overflow-y-hidden">
            <h1 style="font-family: 'Orbitron', sans-serif" class="my-4 text-3xl md:text-5xl opacity-75 font-bold leading-tight text-center md:text-left">
                We do
                <span class="bg-clip-text text-transparent bg-gradient-to-r from-green-400 via-pink-500 to-purple-500">
                    Apps & Websites
                </span>
                and we do it well!
            </h1>
            <p class="leading-normal text-base md:text-xl mb-8 pt-5 text-center md:text-left">
                The BEST App and Website development company in PNG right now...and it's all local.
            </p>

            <div class="relative hidden md:block w-20 left-[40px] -z-10 top-6 glass rotate-45">
                <div class="text-5xl pt-4 w-20 h-20 text-center">🔥</div>
            </div>

            <div class="glass px-8 w-full pt-6 pb-20">
                <div class="mb-4">
                    <label class="block text-blue-300 py-2 font-bold mb-2" for="emailaddress">
                        Subscribe for our newsletter
                    </label>

                    <form wire:submit="subscribeToNewsletter" class="input-container">
                        <input wire:model="subscribeEmail" type="text" name="email" placeholder="you@somewhere.com">

                        <button wire:click="subscribeToNewsletter" wire:loading.attr="disabled" class="button">Subscribe</button>
                    </form>

                    <div class="block text-gray-200 py-2 pt-5 px-5 font-bold mb-2 h-10">
                        @error('subscribeEmail')
                            <span class="error">{{ $message }}</span>
                        @enderror
                        @if ($subscribed == true)
                            <span class="text-gray-200">Thank you for subscribing! <br>You should get a welcome email soon <br><span class="text-3xl">😊😉</span></span>
                        @endif

                        <div wire:loading wire:target="subscribeToNewsletter">
                            <div class="typing-indicator">
                                <div class="typing-circle"></div>
                                <div class="typing-circle"></div>
                                <div class="typing-circle"></div>
                                <div class="typing-shadow"></div>
                                <div class="typing-shadow"></div>
                                <div class="typing-shadow"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="relative">
                <div class="absolute hidden md:block w-20 left-[170px] -z-10 -top-7 glass rotate-45">
                    <div class="text-5xl pt-4 w-20 h-20 text-center">🎯</div>
                </div>
                <div class="relative hidden md:block w-20 left-[380px] z-100 -top-[110px] glass rotate-45">
                    <div class="text-5xl pt-4 w-20 h-20 text-center">🤩</div>
                </div>
            </div>
        </div>

        <!--Right Col-->
        <div class="w-full hidden md:block xl:w-3/5 p-20 overflow-hidden">
            <img class="mx-auto w-full md:w-4/5 transform -rotate-6 transition hover:scale-105 duration-700 ease-in-out hover:rotate-6 bg-purple-500 shadow-xl shadow-purple-500/50" src="{{ asset('imgs/chatify-screenshot.png') }}" alt="Chatify live messaging software" />
        </div>

    </div>

    {{-- Delivering beautiful software --}}
    <div class="grid grid-cols-8 pt-32 pb-32 mx-auto">
        <div class="col-span-8">
            <div class="flex flex-col justify-center items-center text-center">
                <h1 class="my-4 text-3xl md:text-5xl opacity-75 leading-tight text-center md:text-left">
                    Delivering <span style="font-family: 'Orbitron', sans-serif;" class="bg-clip-text text-transparent bg-gradient-to-r from-green-400 via-pink-500 to-purple-500">beautiful</span> software
                </h1>
                <div class="w-full md:w-1/3 pt-10 text-center px-6 text-gray-200">
                    Our team of Developers bring you an unparalleled expertise in software development from websites to mobile apps.
                </div>
            </div>
        </div>

        <div class="col col-span-8 mx-auto px-20 pt-20">
            <div class="flex md:flex-row flex-col gap-20">
                <div class="card">
                    <p class="heading">Projects</p>
                    <p>Well documented, versioned and backed up.</p>
                    <p>From planning through design and delivery.</p>
                </div>

                <div class="card">
                    <p class="heading">Development</p>
                    <p>Elite group of developers who kick @#s.</p>
                    <p>Who have thousands of hours of coding experience.</p>
                </div>

                <div class="card">
                    <p class="heading">Support</p>
                    <p>Smooth running, constant, stable support.</p>
                    <p>Available 24/7 to assist you, making sure you are good to go.</p>
                </div>
            </div>
        </div>
    </div>

    {{-- Custom designed software --}}
    <div class="relative isolate overflow-hidden bg-zinc-900 px-6 py-24 sm:py-32 lg:overflow-visible lg:px-0">
        <div class="absolute inset-0 -z-10 overflow-hidden">
            <svg class="absolute left-[max(50%,25rem)] top-0 h-[64rem] w-[128rem] -translate-x-1/2 stroke-stone-800 [mask-image:radial-gradient(64rem_64rem_at_top,white,transparent)]" aria-hidden="true">
                <defs>
                    <pattern id="e813992c-7d03-4cc4-a2bd-151760b470a0" width="200" height="200" x="50%" y="-1" patternUnits="userSpaceOnUse">
                        <path d="M100 200V.5M.5 .5H200" fill="none" />
                    </pattern>
                </defs>
                <svg x="50%" y="-1" class="overflow-visible fill-[#141417]">
                    <path d="M-100.5 0h201v201h-201Z M699.5 0h201v201h-201Z M499.5 400h201v201h-201Z M-300.5 600h201v201h-201Z" stroke-width="0" />
                </svg>
                <rect width="100%" height="100%" stroke-width="0" fill="url(#e813992c-7d03-4cc4-a2bd-151760b470a0)" />
            </svg>
        </div>
        <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:mx-0 lg:max-w-none lg:grid-cols-2 lg:items-start lg:gap-y-10">
            <div class="lg:col-span-2 lg:col-start-1 lg:row-start-1 lg:mx-auto lg:grid lg:w-full lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8">
                <div class="lg:pr-4">
                    <div class="lg:max-w-lg">
                        <p class="text-base font-semibold leading-7 text-blue-300">Full Stack</p>
                        <h1 class="mt-2 text-3xl font-bold tracking-tight text-gray-300 sm:text-4xl"><span class="bg-clip-text text-transparent bg-gradient-to-r from-green-400 via-pink-500 to-purple-500">Custom Designed Software</span></h1>
                        <p class="mt-6 text-xl leading-8 text-gray-300">At Skoonters, we strive to create software that is tailored to you. We love to find solutions for complex problems. We will help you solve any software needs you have, customized to your every whim.</p>
                    </div>
                </div>
            </div>
            <div class="-ml-12 -mt-12 p-12 lg:sticky lg:top-4 lg:col-start-2 lg:row-span-2 lg:row-start-1 lg:overflow-hidden">
                <img class="w-[48rem] max-w-none rounded-xl bg-purple-900 shadow-xl shadow-purple-500/30 ring-1 ring-purple-400/10 sm:w-[57rem]" src="https://tailwindui.com/img/component-images/dark-project-app-screenshot.png" alt="TailwindUI dark project app">
            </div>
            <div class="lg:col-span-2 lg:col-start-1 lg:row-start-2 lg:mx-auto lg:grid lg:w-full lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8">
                <div class="lg:pr-4">
                    <div class="max-w-xl text-base leading-7 text-gray-400 lg:max-w-lg">
                        <p>We can transform your business or idea with powerful and adaptable software solutions that will open your eyes to new possibilities. We provide full-cycle, end-to-end solutions - all built from the ground up so you have total control over what you want and how you want it.</p>
                        <ul role="list" class="mt-8 space-y-8 text-gray-400">
                            <li class="flex gap-x-3">
                                <svg class="mt-1 h-5 w-5 flex-none text-blue-300" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M5.5 17a4.5 4.5 0 01-1.44-8.765 4.5 4.5 0 018.302-3.046 3.5 3.5 0 014.504 4.272A4 4 0 0115 17H5.5zm3.75-2.75a.75.75 0 001.5 0V9.66l1.95 2.1a.75.75 0 101.1-1.02l-3.25-3.5a.75.75 0 00-1.1 0l-3.25 3.5a.75.75 0 101.1 1.02l1.95-2.1v4.59z" clip-rule="evenodd" />
                                </svg>
                                <span><strong class="font-semibold text-gray-200">Custom software.</strong> Every function, integration, button, page, color, etc, all up to you. Or you can rely on us to advise and provide you the best digital solution.</span>
                            </li>
                            <li class="flex gap-x-3">
                                <svg class="mt-1 h-5 w-5 flex-none text-blue-300" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M10 1a4.5 4.5 0 00-4.5 4.5V9H5a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-.5V5.5A4.5 4.5 0 0010 1zm3 8V5.5a3 3 0 10-6 0V9h6z" clip-rule="evenodd" />
                                </svg>
                                <span><strong class="font-semibold text-gray-200">Strong Security.</strong> If Security is what keeps you up at night, fret not, we employ the latest in software security that is available today.</span>
                            </li>
                            <li class="flex gap-x-3">
                                <svg class="mt-1 h-5 w-5 flex-none text-blue-300" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path d="M4.632 3.533A2 2 0 016.577 2h6.846a2 2 0 011.945 1.533l1.976 8.234A3.489 3.489 0 0016 11.5H4c-.476 0-.93.095-1.344.267l1.976-8.234z" />
                                    <path fill-rule="evenodd" d="M4 13a2 2 0 100 4h12a2 2 0 100-4H4zm11.24 2a.75.75 0 01.75-.75H16a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75h-.01a.75.75 0 01-.75-.75V15zm-2.25-.75a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75H13a.75.75 0 00.75-.75V15a.75.75 0 00-.75-.75h-.01z" clip-rule="evenodd" />
                                </svg>
                                <span><strong class="font-semibold text-gray-200">Critical backups.</strong> All software is versioned, backed-up and fully available to you. You can do whatever you want with it; share it, sell it, or even shred it.</span>
                            </li>
                        </ul>
                        <p class="mt-8">All our software employ the latest and greatest in development technologies that the world has to offer. We don't settle for second best. Rest assured that your software will stand the test of time and todays harsh digital environment.</p>
                        <h2 class="mt-16 text-2xl font-bold tracking-tight"><span class="bg-clip-text text-transparent bg-gradient-to-r from-green-400 via-pink-500 to-purple-500">Not sure what you need?</span></h2>
                        <p class="mt-6">As forever immortalized by the words of the great poet, Taylor Swift, "You don't know what you don't know". Our team can look at your business or idea and give you a digital solution that will not only exceed your expectations, but unlock your opportunities for tomorrow.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Testimonial --}}
    <div class="container my-40 mx-auto md:px-6">
        <section class="mb-10 text-center">
            <h2 class="mb-12 pb-10 text-center text-3xl font-bold"><span style="font-family: 'Orbitron', sans-serif;" class="bg-clip-text text-transparent bg-gradient-to-r from-green-400 via-pink-500 to-purple-500">Testimonials</span></h2>

            <div class="grid gap-20 md:grid-cols-3 xl:gap-x-12">
                <div class="mb-6 lg:mb-0 md:px-0 px-8">
                    <div class="relative block rounded-lg shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] bg-zinc-900">
                        <div class="flex justify-center">
                            <div class="relative mx-4 -mt-4 w-1/2 overflow-hidden rounded-lg bg-cover bg-no-repeat shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)]" data-te-ripple-init data-te-ripple-color="light">
                                <img src="{{ asset('imgs/scott_osborne.jpeg') }}" class="w-full" alt="Scott Osborne testimonial" />
                            </div>
                        </div>
                        <div class="p-6">
                            <h5 class="mb-2 text-lg font-bold text-white">Scott Osborne</h5>
                            <h6 class="mb-4 font-medium text-primary dark:text-primary-400">
                                <span style="font-family: 'Orbitron', sans-serif;" class="bg-clip-text text-transparent bg-gradient-to-r from-green-400 via-pink-500 to-purple-500">Foodstation PNG</span>
                            </h6>
                            <p class="text-gray-300 italic text-sm font-extralight">
                                "Choosing Skoonters was the best decision for our startup website, their attention to detail is excellent."
                            </p>
                        </div>
                    </div>
                </div>

                <div class="mb-6 lg:mb-0 md:px-0 px-8">
                    <div class="relative block rounded-lg shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] bg-zinc-900">
                        <div class="flex justify-center">
                            <div class="relative mx-4 -mt-4 w-1/2 overflow-hidden rounded-lg bg-cover bg-no-repeat shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)]" data-te-ripple-init data-te-ripple-color="light">
                                <img src="{{ asset('imgs/sylvia_pascoe.jpg') }}" class="w-full" alt="Sylvia Pascoe testimonial" />
                            </div>
                        </div>
                        <div class="p-6">
                            <h5 class="mb-2 text-lg font-bold text-white">Sylvia Pascoe</h5>
                            <h6 class="mb-4 font-medium text-primary dark:text-primary-400">
                                <span style="font-family: 'Orbitron', sans-serif;" class="bg-clip-text text-transparent bg-gradient-to-r from-green-400 via-pink-500 to-purple-500">Pascoe Events &amp; Marketing</span>
                            </h6>
                            <p class="text-gray-300 italic text-sm font-extralight">
                                "I’ve used Skoonters for years and will continue to do so because they always go above and beyond. They deliver on budget and on time and always provide the added expert advice to ensure we get the best functionality to make our sites and apps as user friendly as possible."
                            </p>
                        </div>
                    </div>
                </div>

                <div class="mb-0 md:px-0 px-8">
                    <div class="relative block rounded-lg shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] bg-zinc-900">
                        <div class="flex justify-center">
                            <div class="relative mx-4 -mt-4 w-1/2 overflow-hidden rounded-lg bg-cover bg-no-repeat shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] bg-white" data-te-ripple-init data-te-ripple-color="light">
                                <img src="{{ asset('imgs/emmanuel_narakobi.jpeg') }}" class="w-full" alt="Emmanuel Narakobi testimonial" />
                            </div>
                        </div>
                        <div class="p-6">
                            <h5 class="mb-2 text-lg font-bold text-white">Emmanuel Narakobi</h5>
                            <h6 class="mb-4 font-medium text-primary dark:text-primary-400">
                                <span style="font-family: 'Orbitron', sans-serif;" class="bg-clip-text text-transparent bg-gradient-to-r from-green-400 via-pink-500 to-purple-500">Masalai Communications</span>
                            </h6>
                            <p class="text-gray-300 italic text-sm font-extralight">
                                "We've been using Skoonters for over 3 years now. If you're after deep software solutions in PNG like API integrations and payment gateways and more, they have the skills to fit your bill. Happy customers who are still using Skoonters!"
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    {{-- Subscribe to our newsletter --}}
    <div class="relative isolate overflow-hidden bg-zinc-900 py-16 sm:py-24 lg:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-2">
                <div class="max-w-xl lg:max-w-lg">
                    <h2 class="text-3xl font-bold tracking-tight text-gray-200 sm:text-4xl">Subscribe to our newsletter.</h2>
                    <p class="mt-4 text-lg leading-8 text-gray-300">We create a lot of in-house software that we hope can help people. Keep up to date with what we are doing and also the latest news on digital solutions.</p>
                    <div class="text-blue-300 mt-8 px-2 py-2 font-bold mb-2">
                        Subscribe for our newsletter
                    </div>
                    <form wire:submit="subscribeToNewsletter" class="input-container">
                        <input wire:model="subscribeEmail" type="text" name="email" placeholder="you@somewhere.com">
                        <button type="submit" wire:loading.attr="disabled" class="button">Subscribe</button>
                    </form>

                    <div class="block text-gray-200 py-2 pt-5 px-5 font-bold mb-2 h-10">
                        @error('subscribeEmail')
                            <span class="error">{{ $message }}</span>
                        @enderror
                        @if ($subscribed == true)
                            <span class="text-gray-200">Thank you for subscribing! <br>You should get a welcome email soon <br><span class="text-3xl">😊😉</span></span>
                        @endif

                        <div wire:loading wire:target="subscribeToNewsletter">
                            <div class="typing-indicator">
                                <div class="typing-circle"></div>
                                <div class="typing-circle"></div>
                                <div class="typing-circle"></div>
                                <div class="typing-shadow"></div>
                                <div class="typing-shadow"></div>
                                <div class="typing-shadow"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <dl class="grid grid-cols-1 gap-x-8 gap-y-10 sm:grid-cols-2 lg:pt-2">
                    <div class="flex flex-col items-start">
                        <div class="rounded-md bg-white/5 p-2 ring-1 ring-white/10">
                            <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                            </svg>
                        </div>
                        <dt class="mt-4 font-semibold text-white">Blog stories</dt>
                        <dd class="mt-2 leading-7 text-gray-400">We will be posting blog articles for aspiring developers and the general audience as well.</dd>
                    </div>
                    <div class="flex flex-col items-start">
                        <div class="rounded-md bg-white/5 p-2 ring-1 ring-white/10">
                            <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.05 4.575a1.575 1.575 0 10-3.15 0v3m3.15-3v-1.5a1.575 1.575 0 013.15 0v1.5m-3.15 0l.075 5.925m3.075.75V4.575m0 0a1.575 1.575 0 013.15 0V15M6.9 7.575a1.575 1.575 0 10-3.15 0v8.175a6.75 6.75 0 006.75 6.75h2.018a5.25 5.25 0 003.712-1.538l1.732-1.732a5.25 5.25 0 001.538-3.712l.003-2.024a.668.668 0 01.198-.471 1.575 1.575 0 10-2.228-2.228 3.818 3.818 0 00-1.12 2.687M6.9 7.575V12m6.27 4.318A4.49 4.49 0 0116.35 15m.002 0h-.002" />
                            </svg>
                        </div>
                        <dt class="mt-4 font-semibold text-white">No spam</dt>
                        <dd class="mt-2 leading-7 text-gray-400">We PROMISE, we will not send you any spam and unnecessary emails. We all hate those kinds of emails.</dd>
                    </div>
                </dl>
            </div>
        </div>
        <div class="absolute left-1/2 top-0 -z-10 -translate-x-1/2 blur-3xl xl:-top-6" aria-hidden="true">
            <div class="aspect-[1155/678] w-[72.1875rem] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>
    </div>

    {{-- Some of our products --}}
    <div class="bg-zinc-900">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-2xl py-16 sm:py-24 lg:max-w-none lg:py-32">
                <p class="text-base font-semibold leading-7 text-blue-300">Off The Shelf</p>
                <h2 class="text-2xl font-bold text-gray-900"><span style="font-family: 'Orbitron', sans-serif;" class="bg-clip-text text-transparent bg-gradient-to-r from-green-400 via-pink-500 to-purple-500">Some of our Products</span></h2>

                <div class="mt-6 gap-y-12 space-y-12 lg:grid lg:grid-cols-3 lg:gap-x-6 lg:space-y-0">
                    <div class="group relative">
                        <div class="shadow-xl shadow-purple-500/50 relative h-full w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
                            <div class="bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-900 flex flex-col h-full px-3 py-3">
                                <img src="{{ asset('imgs/chatify-screenshot.png') }}" class="h-full w-full rounded-lg" alt="Chatify live messaging software">
                            </div>
                        </div>
                        <h3 class="mt-6 text-sm text-gray-400">
                            <p>
                                <span class="absolute inset-0"></span>
                                One-to-one chat software that adds complete real-time chatting system to your new/existing site.
                            </p>
                        </h3>
                        <p class="text-base font-semibold text-gray-300">Live Chat/Messaging</p>
                    </div>
                    <div class="group relative">
                        <div class="shadow-xl shadow-purple-500/50 relative h-full w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
                            <div class="bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-900 flex flex-col h-full px-3 py-3">
                                <img src="{{ asset('imgs/lunar_headless_ecommerce.webp') }}" class="h-full w-full rounded-lg" alt="Lunar headless ecommerce software">
                            </div>
                        </div>
                        <h3 class="mt-6 text-sm text-gray-400">
                            <p>
                                <span class="absolute inset-0"></span>
                                Full fledged E-Commerce software to power your online store. Full Mobile App integration capable.
                            </p>
                        </h3>
                        <p class="text-base font-semibold text-gray-300">E-Commerce</p>
                    </div>
                    <div class="group relative">
                        <div class="shadow-xl shadow-purple-500/50 relative h-full w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
                            <div class="bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-900 flex flex-col h-full px-3 py-3">
                                <img src="{{ asset('imgs/akaunting-dashboard.png') }}" class="h-full w-full rounded-lg" alt="Akaunting online accounting software">
                            </div>
                        </div>
                        <h3 class="mt-6 text-sm text-gray-400">
                            <p>
                                <span class="absolute inset-0"></span>
                                Bookkeeping Software that has invoicing to expense tracking to accounting.
                            </p>
                        </h3>
                        <p class="text-base font-semibold text-gray-300">Bookkeeping and Accounting</p>
                    </div>
                    <div class="group relative">
                        <div class="shadow-xl shadow-purple-500/50 relative h-full w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
                            <div class="bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-900 flex flex-col h-full px-3 py-3">
                                <img src="{{ asset('imgs/tasty_igniter.png') }}" class="h-full w-full rounded-lg" alt="TastyIgniter online food ordering and table reservation software">
                            </div>
                        </div>
                        <h3 class="mt-6 text-sm text-gray-400">
                            <p>
                                <span class="absolute inset-0"></span>
                                Software for restaurants to offer online food ordering and table reservation.
                            </p>
                        </h3>
                        <p class="text-base font-semibold text-gray-300">Food Ordering/Table Reservation</p>
                    </div>
                    <div class="group relative">
                        <div class="shadow-xl shadow-purple-500/50 relative h-full w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
                            <div class="bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-900 flex flex-col h-full px-3 py-3">
                                <img src="{{ asset('imgs/attendize.jpg') }}" class="h-full w-full rounded-lg" alt="Attendize ticketing and event management software">
                            </div>
                        </div>
                        <h3 class="mt-6 text-sm text-gray-400">
                            <p>
                                <span class="absolute inset-0"></span>
                                Ticketing and Event management software to track all your events.
                            </p>
                        </h3>
                        <p class="text-base font-semibold text-gray-300">Event Management</p>
                    </div>
                    <div class="group relative">
                        <div class="shadow-xl shadow-purple-500/50 relative h-full w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
                            <div class="bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-900 flex flex-col h-full px-3 py-3">
                                <img src="{{ asset('imgs/officelife.png') }}" class="h-full w-full rounded-lg" alt="OfficeLife employee lifecycle software">
                            </div>
                        </div>
                        <h3 class="mt-6 text-sm text-gray-400">
                            <p>
                                <span class="absolute inset-0"></span>
                                HR, project management, time tracking, holidays and time offs, team management, etc.
                            </p>
                        </h3>
                        <p class="text-base font-semibold text-gray-300">Employee Lifecycle</p>
                    </div>
                </div>


                <p class="text-base font-semibold leading-7 text-blue-300 pt-10 pb-3">more software galore...</p>
                <div class="flex flex-row flex-wrap gap-3 text-sm text-white font-extrabold">
                    <span class="px-3 bg-gradient-to-r from-indigo-700 via-purple-700 to-pink-900 rounded-full">Custom Payment Gateway</span>
                    <span class="px-3 bg-gradient-to-r from-indigo-700 via-purple-700 to-pink-900 rounded-full">FinTech Solution</span>
                    <span class="px-3 bg-gradient-to-r from-indigo-700 via-purple-700 to-pink-900 rounded-full">Content Management Systems (CMS)</span>
                    <span class="px-3 bg-gradient-to-r from-indigo-700 via-purple-700 to-pink-900 rounded-full">Customer Relation Management (CRM)</span>
                    <span class="px-3 bg-gradient-to-r from-indigo-700 via-purple-700 to-pink-900 rounded-full">Personal Relation Management</span>
                    <span class="px-3 bg-gradient-to-r from-indigo-700 via-purple-700 to-pink-900 rounded-full">Forums Management</span>
                    <span class="px-3 bg-gradient-to-r from-indigo-700 via-purple-700 to-pink-900 rounded-full">Video Game Server Management</span>
                    <span class="px-3 bg-gradient-to-r from-indigo-700 via-purple-700 to-pink-900 rounded-full">Social Network</span>
                    <span class="px-3 bg-gradient-to-r from-indigo-700 via-purple-700 to-pink-900 rounded-full">VPS-Powered Sites Cloud Management</span>
                    <span class="px-3 bg-gradient-to-r from-indigo-700 via-purple-700 to-pink-900 rounded-full">Video Chat</span>
                    <span class="px-3 bg-gradient-to-r from-indigo-700 via-purple-700 to-pink-900 rounded-full">Help Desk</span>
                    <span class="px-3 bg-gradient-to-r from-indigo-700 via-purple-700 to-pink-900 rounded-full">Ticketing</span>
                    <span class="px-3 bg-gradient-to-r from-indigo-700 via-purple-700 to-pink-900 rounded-full">Warehouse and Asset Management</span>
                </div>

                <p class="text-lg font-semibold leading-7 text-blue-300 pt-20 pb-3">and EVERYTHING built from the ground up, <span style="font-family: 'Orbitron', sans-serif;" class="text-3xl bg-clip-text text-transparent bg-gradient-to-r from-green-400 via-pink-500 to-purple-500">customized, and tailored</span> to you.</p>
            </div>
        </div>
    </div>

    {{-- We do apps too --}}
    <div class="relative isolate px-6 pt-14 lg:px-8">
        <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
            <div class="text-center text-white">
                <h1 class="text-4xl font-bold tracking-tight text-gray-200 sm:text-6xl">Oh yeah, and we do <span style="font-family: 'Orbitron', sans-serif;" class="bg-clip-text text-transparent bg-gradient-to-r from-green-400 via-pink-500 to-purple-500">Apps</span> too!</h1>
                <p class="mt-6 text-lg leading-8 text-gray-300">All Software solutions we provide can also come with full mobile Apps. All solutions have total App integration capability and seamless synchronization between all platforms.</p>

                <div class="flex justify-center items-center md:justify-start pb-24 pt-20 lg:pb-0 fade-in">
                    <div class="flex flex-row mx-auto">
                        <div class="spinner">
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Work with us --}}
    <div class="relative isolate overflow-hidden bg-zinc-900 py-24 sm:py-32">

        <img src="{{ asset('imgs/traditional.jpg') }}" class="absolute inset-0 -z-10 h-full w-full object-cover object-right md:object-center" alt="Papua New Guinea traditional">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <h2 class="text-4xl font-bold tracking-tight text-white sm:text-6xl pb-16 pt-10 text-center"><span style="font-family: 'Orbitron', sans-serif;" class="text-3xl bg-clip-text text-transparent bg-gradient-to-r from-green-400 via-pink-500 to-purple-500">Work with us</span></h2>
            <div class="grid lg:grid-cols-2 gap-10 justify-end align-middle">

                <div class="form-container float-right">
                    <form wire:submit="requestInfo" class="form">
                        <div class="form-group">
                            <label for="email" class="text-gray-200">Your Name</label>
                            <input wire:model="requestName" type="text" name="name" class="text-gray-200">
                        </div>
                        <div class="form-group">
                            <label for="email" class="text-gray-200">Your Email</label>
                            <input wire:model="requestEmail" type="text" name="email" class="text-gray-200">
                        </div>
                        <div class="form-group pb-5">
                            <label for="message" class="text-gray-200">How Can We Help You?</label>
                            <textarea wire:model="requestMessage" name="message" type="text" rows="10" cols="50" class="text-gray-200"></textarea>
                        </div>
                        <button wire:loading.attr="disabled" type="submit" class="codepen-button"><span>Contact us</span></button>
                    </form>

                    <div class="block text-gray-200 py-2 pt-5 px-5 font-bold mb-2 h-10">
                        @error('requestName')
                            <span class="error">{{ $message }}</span>
                        @enderror
                        @error('requestEmail')
                            <span class="error">{{ $message }}</span>
                        @enderror
                        @error('requestMessage')
                            <span class="error">{{ $message }}</span>
                        @enderror

                        @if ($requested == true)
                            <span class="text-gray-200">Message sent! Thank you for reaching out! <br>We will get back to you as soon as humanly possible.</span>
                        @endif

                        <div wire:loading wire:target="requestInfo">
                            <div class="typing-indicator">
                                <div class="typing-circle"></div>
                                <div class="typing-circle"></div>
                                <div class="typing-circle"></div>
                                <div class="typing-shadow"></div>
                                <div class="typing-shadow"></div>
                                <div class="typing-shadow"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="px-10 my-auto">
                    <p class="mt-6 leading-8 text-gray-200">Get in touch with us and we will get back to you as soon as we can. We will be happy to work with you; whatever budget, problem or query you have.</p>
                    <p class="mt-6 text-2xl leading-8 text-gray-300 pt-10">We would also love to hear about your next great idea. We can work with you and create something <span style="font-family: 'Orbitron', sans-serif;" class="text-3xl bg-clip-text text-transparent bg-gradient-to-r from-green-400 via-pink-500 to-purple-500">amazing!</span></p>
                </div>
            </div>


        </div>
    </div>

    {{-- Who we have worked with --}}
    <div class="py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <h2 class="mb-12 pb-10 text-center text-3xl font-bold"><span style="font-family: 'Orbitron', sans-serif;" class="bg-clip-text text-transparent bg-gradient-to-r from-green-400 via-pink-500 to-purple-500">Who we have worked with</span></h2>
            <div class="mx-auto mt-10 grid max-w-lg grid-cols-4 items-center gap-x-8 gap-y-10 sm:max-w-xl sm:grid-cols-6 sm:gap-x-10 lg:mx-0 lg:max-w-none lg:grid-cols-5">
                <img class="col-span-2 max-h-20 w-full object-contain lg:col-span-1" src="{{ asset('imgs/Pascoe_Events_Marketing_logo.jpg') }}" width="158" height="48" alt="Pascoe Events & Marketing company">
                <img class="col-span-2 max-h-24 w-full object-contain lg:col-span-1" src="{{ asset('imgs/Stop_and_Shop_logo.png') }}" width="158" height="48" alt="Stop & Shop company">
                <img class="col-span-2 max-h-30 w-full object-contain lg:col-span-1" src="{{ asset('imgs/Food_Station_Logo.jpg') }}" width="158" height="48" alt="Food Station PNG company">
                <img class="col-span-2 max-h-24 w-full object-contain lg:col-span-1" src="{{ asset('imgs/Meat_Haus_Logo.png') }}" width="158" height="48" alt="MeatHaus company">
                <img class="col-span-2 max-h-24 w-full object-contain lg:col-span-1" src="{{ asset('imgs/tscf.png') }}" width="158" height="48" alt="TSCF">
                <img class="col-span-2 max-h-24 w-full object-contain lg:col-span-1" src="{{ asset('imgs/pom-city-markets-logo.png') }}" width="158" height="48" alt="POM City Markets company">
                <img class="col-span-2 max-h-32 w-full object-contain lg:col-span-1" src="{{ asset('imgs/Namani_Capital_Partners_Logo.jpg') }}" width="158" height="48" alt="Namani Capital Partners company">
                <img class="col-span-2 max-h-24 w-full object-contain lg:col-span-1" src="{{ asset('imgs/weklwm.png') }}" width="158" height="48" alt="WEKLWM company">
                <img class="col-span-2 max-h-16 w-full object-contain lg:col-span-1" src="{{ asset('imgs/Namani_and_Associates_Logo.png') }}" width="158" height="48" alt="Namani and Associates company">
                <img class="col-span-2 max-h-24 w-full object-contain lg:col-span-1" src="{{ asset('imgs/ypomcci.png') }}" width="158" height="48" alt="YPOMCCI company">
                <img class="col-span-2 max-h-24 w-full object-contain lg:col-span-1" src="{{ asset('imgs/NMAG.png') }}" width="158" height="48" alt="NMAG company">
                <img class="col-span-2 max-h-20 w-full object-contain lg:col-span-1" src="{{ asset('imgs/tagali-logo.png') }}" width="158" height="48" alt="Tagali Construction company">
                <img class="col-span-2 max-h-16 w-full object-contain lg:col-span-1" src="{{ asset('imgs/lekmak.jpg') }}" width="158" height="48" alt="LekMak company">
                <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" src="{{ asset('imgs/Kapit_Gortumil_Logo.png') }}" width="158" height="48" alt="Kapit Gortumil company">
                <img class="col-span-2 max-h-32 w-full object-contain lg:col-span-1" src="{{ asset('imgs/seap.png') }}" width="158" height="48" alt="SEAP PNG">
                <img class="col-span-2 max-h-24 w-full object-contain lg:col-span-1" src="{{ asset('imgs/cpl-large-min.png') }}" width="158" height="48" alt="CPL Group company">
                <img class="col-span-2 max-h-24 w-full object-contain lg:col-span-1" src="{{ asset('imgs/UPNG_CORE_Logo.webp') }}" width="158" height="48" alt="UPNG CORE">
                <img class="col-span-2 col-start-2 max-h-30 w-full object-contain sm:col-start-auto lg:col-span-1" src="{{ asset('imgs/WMW-logos.png') }}" width="158" height="48" alt="WMW company">
            </div>
        </div>
    </div>

</div>

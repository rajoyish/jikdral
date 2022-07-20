<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Jikdral Thinley Rinpoche Organization</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <section class="bg-accent p-4">
        <div class="lg:flex lg:justify-between">
            <!-- Site Title with logo -->
            <header class="flex flex-col space-y-4 md:flex-row md:items-start md:gap-8">
                <img src="{{ asset('images/Jikdral-rinpoche-color-logo-01.svg') }}" alt="jikdral logo"
                    class="inline-block h-32 w-full md:h-40 md:w-40" />
                <div class="text-center text-xl tracking-tighter md:space-y-2 md:text-left">
                    <h1 class="font-bo text-2xl text-primary md:text-3xl">
                        ༄༅། །འཇིགས་བྲལ་ཕྲིན་ལས་རིན་པོ་ཆེ་ཚོགསཔ།།
                    </h1>
                    <p class="mt-2 text-3xl font-bold">
                        जिक्ड्रल ठिन्ले रिम्पोछे संस्था
                    </p>
                    <p class="font-bold md:text-2xl">
                        JIKDRAL THINLEY RINPOCHE ORGANIZATION
                    </p>
                </div>
            </header>

            <!-- Rinpoche Photo -->
            <div class="-p-4 -m-4 hidden w-64 lg:block">
                <img src="{{ asset('images/yangsi-of-chatral-rinpoche-sangye-dorje.png') }}"
                    alt="photo of Yangsi Of Chatral Rinpoche Sangye Dorje" />
            </div>
        </div>
    </section>

    <!-- navbar goes here -->
    <nav x-data="{ navOpen: false }" class="bg-primary text-lg text-white">
        <div class="mx-auto max-w-6xl px-4">
            <div class="flex justify-between">
                <div class="flex space-x-4">
                    <!-- Mobile Login Link -->
                    <div class="flex items-center md:hidden">
                        <a href="" class="py-5 px-3 transition duration-300 hover:text-accent">Login</a>
                        <a href=""
                            class="rounded bg-accent py-2 px-3 text-primary transition duration-300 hover:bg-yellow-300 hover:text-prime-dark">Register
                            Now</a>
                    </div>

                    <!-- primary nav -->
                    <div class="hidden items-center space-x-1 md:flex">
                        <a href="#"
                            class="block py-5 px-3 transition-all duration-300 hover:bg-prime-dark hover:text-accent">About
                            us</a>
                        <a href="#"
                            class="block py-5 px-3 transition-all duration-300 hover:bg-prime-dark hover:text-accent">Donation</a>
                    </div>
                </div>

                <!-- secondary nav -->
                <div class="hidden items-center space-x-1 md:flex">
                    <a href="" class="py-5 px-3 transition duration-300 hover:text-accent">Login</a>
                    <a href=""
                        class="rounded bg-accent py-2 px-3 text-primary transition duration-300 hover:bg-yellow-300 hover:text-prime-dark">Register
                        Now</a>
                </div>

                <!-- mobile button goes here -->
                <div class="flex items-center md:hidden">
                    <button @click="navOpen = !navOpen">
                        <!-- Hemburger Icon -->
                        <svg class="h-8 w-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- mobile menu -->
        <div x-bind:class=" navOpen ? '' : 'hidden' " class="md:hidden">
            <a href="#" class="block py-5 px-3 transition-all duration-300 hover:bg-prime-dark hover:text-accent">About
                us</a>
            <a href="#"
                class="block py-5 px-3 transition-all duration-300 hover:bg-prime-dark hover:text-accent">Donation</a>
        </div>
    </nav>

    <!-- content goes here -->
    <section class="p-10">
        <article class="prose prose-slate mx-auto lg:prose-lg">
            <h1 style="line-height: 1.4">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quia,
                ducimus!
            </h1>
            <p>
                For years parents have espoused the health benefits of eating garlic
                bread with cheese to their <em>children</em>, with the food earning
                such an iconic status in our culture that kids will often dress up as
                warm, cheesy loaf for Halloween.
            </p>
            <p>
                But a recent study shows that the celebrated appetizer may be linked
                to a series of rabies cases springing up around the country.
            </p>
        </article>
    </section>
</body>

</html>

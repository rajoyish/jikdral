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
        <div x-bind:class=" navOpen ? '' : 'hidden'" class="md:hidden">
            <a href="#"
                class="block py-5 px-3 transition-all duration-300 hover:bg-prime-dark hover:text-accent">About
                us</a>
            <a href="#"
                class="block py-5 px-3 transition-all duration-300 hover:bg-prime-dark hover:text-accent">Donation</a>
        </div>
    </nav>

    <!-- content goes here -->
    <section class="p-10">
        <article class="prose prose-slate mx-auto lg:prose-lg">
            <h1 class="text-primary" style="line-height: 1.4">
                About Jikdral Thinley Rinpoche Organization
            </h1>
            <figure>
                <img src="{{ asset('jikdral-rinpoche-banner.png') }}" class="rounded"
                    alt="His Holiness Chatral Rinpoche, Sangye Dorje and Jikdral Thinley Rinpoche from the left" />
                <figcaption>
                    His Holiness Chatral Rinpoche, Sangye Dorje and Jikdral Thinley
                    Rinpoche from the left.
                </figcaption>
            </figure>
            <p>
                Jikdral Thinley Rinpoche Organization is registered in the Kathmandu
                district administration office with acceptance of all legal norms and
                terms according to the rule of the Nepal government and other
                concerned state government bodies in accordance with Jikdral Thinley
                Rinpoche's holy wishes and sentiments (reincarnate lama).
            </p>
            <p>
                Jikdral Thilney Rinpoche was born in Kathmandu, the capital city of
                Nepal, which is located 1400 meters above sea level in the hill
                region. On February 16, 2015, he bestowed blessings upon his parents,
                Nawang Dorje Sherpa and Nima Lhamu Sherpa.
            </p>
            <p>
                Jikdral Thinley Rinpoche was extremely gentle and virtuous from an
                early age. He was filled with knowledge and insight. He stood out from
                the rest of his coworkers. Dup Chen Rinpoche, the abbot of Gangtok,
                Sikkim, Deurali, Chürten Monastery, has declared Jikdral Thinley
                Rinpoche to be the reincarnation of Kyabje Chatral Sangtrul Dorje
                Rinpoche after carefully observing his extraordinary abilities,
                supernatural knowledge, extraordinary talents, and personalities
                (Chatral Rinpoche).
            </p>
            <p>
                Master and recluse yogi Chatral Rinpoche was renowned for his
                enlightenment and rigorous discipline. Chatral Rinpoche was one of the
                few surviving Buddhist followers and was regarded as one of the most
                enlightened, intelligent, and pious gurus. During his monastic life,
                he had provided donations to the Pharping and Godawari Monasteries in
                Kathmandu. He disseminated his knowledge to all monks, so fostering
                wisdom, peace, and harmony among diverse religious communities.
            </p>
            <p>
                “प्रभस्वर महासन्धीअन्तर्गत सम्पूर्ण परम्पराधारक विद्याधर साधकहरुको
                महासम्पद” जिक्ड्रल ठिन्ले रिम्पोछेज्यूको सोलुखुम्बु जिल्ला साविक जुभिङ
                गाउँ विकास समिति वडा नं. ९ को हाल खुम्बु पासाङल्हामु गाउँपालिका वडा
                नं. १ निवासी पिता ङवाङ दोर्जी शेर्पा र माता ङिमा ल्हामु शेर्पाको कोखमा
                जन्म भएको हुनाले महासम्प रिम्पोछेको हेरचाह, स्याहार सम्भार, शिक्षा
                दिक्षालगायत बौद्ध बिधी अनुरुप जिक्ड्रल ठिन्ले रिम्पोछे संस्था समितिको
                नामबाट गर्ने र बौद्धमार्गी समुदायमा धार्मिक चेतना अभिवृद्धि गराई
                स्थानीय तह, सरकारी तथा गैर सरकारी संघ संस्थासँग समन्वयको माध्यमबाट
                बौद्धिक व्यक्तित्त्व विकासका कार्यक्रमहरु सञ्चालन गर्न “जिक्ड्रल
                ठिन्ले रिम्पोछे संस्था” नामक संस्था स्थापना गरी सामाजिक संस्थाको रूपमा
                संस्था संचालन गर्न संस्था दर्ता ऐन २०३४ को अधीनमा रही विधान तर्जुमा
                गरी जारी गरिएको छ।
            </p>
        </article>
    </section>
</body>

</html>

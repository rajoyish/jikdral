<x-app-layout>
    {{-- Slider --}}
    <div class="w-full overflow-hidden flex flex-nowrap text-center items-start text-prime-dark" id="slider">
        <div class="flex-none w-full flex flex-col items-center justify-center">
            <img src="{{ asset('images/slider-1.jpg') }}" class="object-cover w-full h-full">
            <p class="text-3xl mt-8 font-bo">༄༅།
                །ཨོཾ་ཨཱ༔ཧཱུྃ་བཛྲ་གུ་རུ་པདྨ་མིདྡྷི་ཧཱུྃ༔མཱ་ཧཱ་གུརུ་སརྦ་སིདྡྷཱ་ཧཱུྃ༔</p>
        </div>
        <div class="flex-none w-full flex flex-col items-center justify-center">
            <img src="{{ asset('images/slider-2.jpg') }}" class="object-cover w-full h-full">
            <p class="text-3xl mt-8">Secretory of Dodrupchen Rinpoche addressing the official letter from Jikdral
                Thinley
                Rinpoche</p>
        </div>
        <div class="flex-none w-full flex flex-col items-center justify-center">
            <img src="{{ asset('images/slider-1.jpg') }}" class="object-cover w-full h-full">
            <p class="text-3xl mt-8 font-bo">༄༅།
                །ཨོཾ་ཨཱ༔ཧཱུྃ་བཛྲ་གུ་རུ་པདྨ་མིདྡྷི་ཧཱུྃ༔མཱ་ཧཱ་གུརུ་སརྦ་སིདྡྷཱ་ཧཱུྃ༔</p>
        </div>
    </div>

    {{-- About us --}}
    <div class="grid grid-flow-col grid-rows-2 sm:grid-rows-1 sm:grid-cols-2 gap-4 my-10">

        <div class="flex items-center justify-center">
            <main class="max-w-screen-xl px-4 lg:px-16">
                <div class="text-left">
                    <h2
                        class="text-4xl tracking-tight leading-10 font-extrabold text-primary sm:text-5xl sm:leading-none md:text-6xl">
                        Jikdral Thinley Rinpoche
                        <br>
                        <span class="text-accent inline-block mt-2">aka Jamyang Tsultrim Rinpoche</span>
                    </h2>
                    <div class="leading-relaxed space-y-4 text-lg mt-8">
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

                    </div>
                    <div class="mt-5 sm:mt-8 sm:flex justify-start">
                        <div class="rounded-md shadow">
                            <a href="{{ route('about') }}"
                                class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-primary hover:bg-accent focus:outline-none focus:border-accent focus:shadow-outline-indigo transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">
                                Discover More
                            </a>
                        </div>
                        <div class="mt-3 sm:mt-0 sm:ml-3">
                            <a href="{{ route('gallery') }}"
                                class="w-full flex items-center justify-center px-8 py-3 border-2 border-transparent text-base leading-6 font-medium rounded-md text-primary border-accent hover:text-primary hover:bg-accent focus:outline-none focus:shadow-outline-indigo focus:border-primary transition-all duration-150 ease-in-out md:py-4 md:text-lg md:px-10">
                                View Gallery
                            </a>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div class="w-full object-cover h-72 lg:w-full md:h-screen bg-cover bg-center"
            style="background-image:url({{ asset('images/gallery-img/5.jpg') }});">
        </div>

    </div>



    <article class="px-8 py-20">
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
</x-app-layout>

<x-app-layout>
    {{-- Slider --}}
    <div class="w-full overflow-hidden flex flex-nowrap text-center items-start" id="slider">
        <div class="flex-none w-full flex flex-col items-center justify-center">
            <img src="{{ asset('images/slider-1.jpg') }}" alt="">
            <p class="text-xl mt-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sint, quos.</p>
        </div>
        <div class="flex-none w-full flex flex-col items-center justify-center">
            <img src="{{ asset('images/slider-2.jpg') }}" alt="">
            <p class="text-xl mt-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sint, quos.</p>
        </div>
        <div class="flex-none w-full flex flex-col items-center justify-center">
            <img src="{{ asset('images/slider-1.jpg') }}" alt="">
            <p class="text-xl mt-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sint, quos.</p>
        </div>
    </div>

    {{-- About us --}}
    <article class="px-8 py-20">
        <h1 class="text-primary text-5xl font-bold text-center leading-normal mb-8">
            About Jikdral Thinley Rinpoche Organization
        </h1>
        <figure>
            <img src="{{ asset('images/jikdral-rinpoche-banner.png') }}" class="rounded mx-auto mb-2 "
                alt="His Holiness Chatral Rinpoche, Sangye Dorje and Jikdral Thinley Rinpoche from the left" />
            <figcaption class="mb-8 text-accent text-center">
                His Holiness Chatral Rinpoche, Sangye Dorje and Jikdral Thinley
                Rinpoche from the left.
            </figcaption>
        </figure>
        <div class="text-justify leading-relaxed space-y-4 text-lg">
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
        </div>
    </article>
</x-app-layout>

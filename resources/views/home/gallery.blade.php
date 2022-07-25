<x-app-layout>
    <section class="min-h-screen bg-gray-100 px-8 py-20">
        <div class="mx-auto">
            <div class="mb-16 text-center">
                <h2 class="text-center text-5xl font-bold  text-primary">
                    Gallery
                </h2>
            </div>

            <div class="md:gap-8 md:columns-2">
                <div class="mb-8">
                    <img class="w-full object-top object-cover aspect-video mb-2"
                        src="{{ asset('images/gallery-img/1.jpg') }}" />
                    <p>Jikdral Thinley Rinpoche at his room during the morning puja.</p>
                </div>
                <div class="mb-8">
                    <img class="w-full object-top object-cover aspect-square mb-2"
                        src="{{ asset('images/gallery-img/2.jpg') }}" />
                    <P>Visiting Dodrupchen Rinpoche at Sikkim Lupcham Monastery</P>
                </div>
                <div class="mb-8">
                    <img class="w-full object-top object-cover aspect-square mb-2"
                        src="{{ asset('images/gallery-img/3.jpg') }}" />
                    <p>Secretory of Dodrupchen Rinpoche addressing the official letter from Jikdral Thinley Rinpoche</p>
                </div>
                <div class="mb-8">
                    <img class="w-full object-top object-cover aspect-square mb-2"
                        src="{{ asset('images/gallery-img/4.jpg') }}" />
                    <p>Communicating with Dodrupchen Rinpche</p>
                </div>
                <div class="mb-8">
                    <img class="w-full object-top object-cover aspect-video mb-2"
                        src="{{ asset('images/gallery-img/5a.jpg') }}" />
                    <p>Secretory of Dodrupchen Rinpoche reading out letter from Jikdral Thinley Rinpoche.</p>
                </div>
                <div class="mb-8">
                    <img class="w-full object-top object-cover aspect-video mb-2"
                        src="{{ asset('images/gallery-img/6.jpg') }}" />
                    <p>Dodrupchen Rinpoche performing Tapche (hair cutting ceremony).</p>
                </div>
                <div class="mb-8">
                    <img class="w-full object-top object-cover aspect-square mb-2"
                        src="{{ asset('images/gallery-img/7.jpg') }}" />
                    <p>Dodrupchen Rinpoche offering blessing after Tapche (hair cutting ceremony)</p>
                </div>
                <div class="mb-8">
                    <img class="w-full object-top object-cover aspect-video mb-2"
                        src="{{ asset('images/gallery-img/8.jpg') }}" />
                    <p>Group photo with Secretory of Dodrupchen Rinpoche</p>
                </div>
                <div class="mb-8">
                    <img class="w-full object-top object-cover aspect-square mb-2"
                        src="{{ asset('images/gallery-img/9.jpg') }}" />
                    <p>Jikdral Thinley Rinpoche with Secretory of Dodrupchen Rinpoche</p>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>

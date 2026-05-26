<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carwash Cologne</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-black text-white overflow-x-hidden scroll-smooth">

    <!-- Background Glow -->
    <div class="fixed top-0 left-1/2 -translate-x-1/2 w-[700px] h-[700px] bg-blue-600/20 blur-[180px] rounded-full"></div>

    <!-- Navbar -->
    <nav class="fixed top-0 left-0 w-full z-50 backdrop-blur-xl bg-black/40 border-b border-white/10">

        <div class="max-w-7xl mx-auto flex items-center justify-between px-6 py-5">

            <h1 class="text-2xl font-bold tracking-wide">
                Carwash Cologne
            </h1>

            <div class="hidden md:flex gap-10 text-gray-300">

                <a href="#leistungen" class="hover:text-white transition">
                    Leistungen
                </a>

                <a href="#preise" class="hover:text-white transition">
                    Preise
                </a>

                <a href="#galerie" class="hover:text-white transition">
                    Galerie
                </a>

                <a href="#kontakt" class="hover:text-white transition">
                    Kontakt
                </a>

            </div>

            <a href="https://wa.me/491785729707" target="_blank"
               class="bg-blue-600 hover:bg-blue-700 transition px-5 py-3 rounded-xl font-semibold">
                WhatsApp
            </a>

        </div>

    </nav>

    <!-- Hero -->
    <section class="relative z-10 min-h-screen flex items-center justify-center px-6">

        <div class="text-center max-w-5xl">

            <p class="uppercase tracking-[8px] text-blue-400 mb-8 text-sm">
                Mobile Fahrzeugpflege
            </p>

            <h1 class="text-6xl md:text-8xl font-black leading-none mb-8">
                Mobile<br>
                Autowäsche<br>
                Köln
            </h1>

            <p class="text-gray-400 text-lg md:text-2xl mb-12 max-w-3xl mx-auto">
                Professionelle Fahrzeugpflege direkt bei Ihnen vor Ort.
                Schnell, hochwertig und flexibel im gesamten Kölner Norden.
            </p>

            <div class="flex justify-center gap-6 flex-wrap">

                <a href="https://wa.me/491785729707" target="_blank"
                   class="bg-blue-600 hover:bg-blue-700 transition px-8 py-4 rounded-2xl text-lg font-semibold shadow-lg shadow-blue-500/30">
                    Termin buchen
                </a>

                <a href="#leistungen"
                   class="border border-white/20 hover:border-white/50 backdrop-blur-md transition px-8 py-4 rounded-2xl text-lg">
                    Leistungen ansehen
                </a>

            </div>

        </div>

    </section>

    <!-- Leistungen -->
    <section id="leistungen" class="relative z-10 py-32 px-6">

        <div class="max-w-7xl mx-auto">

            <div class="text-center mb-20">

                <p class="text-blue-400 uppercase tracking-[6px] mb-4">
                    Unsere Leistungen
                </p>

                <h2 class="text-5xl font-black">
                    Professionelle Fahrzeugpflege
                </h2>

            </div>

            <div class="grid md:grid-cols-3 gap-8">

                <!-- Außenwäsche -->
                <div class="bg-white/5 border border-white/10 rounded-3xl p-8 hover:border-blue-500/40 transition">

                    <div class="text-5xl mb-6">🚘</div>

                    <h3 class="text-2xl font-bold mb-4">
                        Außenwäsche
                    </h3>

                    <p class="text-gray-400 leading-relaxed">
                        Schonende und gründliche Reinigung Ihres Fahrzeugs direkt vor Ort.
                    </p>

                </div>

                <!-- Innenreinigung -->
                <div class="bg-white/5 border border-white/10 rounded-3xl p-8 hover:border-blue-500/40 transition">

                    <div class="text-5xl mb-6">✨</div>

                    <h3 class="text-2xl font-bold mb-4">
                        Innenreinigung
                    </h3>

                    <p class="text-gray-400 leading-relaxed">
                        Tiefenreinigung für Sitze, Teppiche und Cockpit für ein frisches Fahrgefühl.
                    </p>

                </div>

                <!-- Felgenreinigung -->
                <div class="bg-white/5 border border-white/10 rounded-3xl p-8 hover:border-blue-500/40 transition">

                    <div class="text-5xl mb-6">🛞</div>

                    <h3 class="text-2xl font-bold mb-4">
                        Felgenreinigung
                    </h3>

                    <p class="text-gray-400 leading-relaxed">
                        Professionelle Reinigung und Pflege Ihrer Felgen für maximalen Glanz.
                    </p>

                </div>

            </div>

        </div>

    </section>

    <!-- Preise -->
    <section id="preise" class="relative z-10 py-32 px-6">

        <div class="max-w-7xl mx-auto">

            <div class="text-center mb-20">

                <p class="text-blue-400 uppercase tracking-[6px] mb-4">
                    Preise & Pakete
                </p>

                <h2 class="text-5xl font-black">
                    Wähle dein Paket
                </h2>

            </div>

            <div class="grid md:grid-cols-3 gap-8">

                <!-- Basic -->
                <div class="bg-white/5 border border-white/10 rounded-3xl p-10">

                    <h3 class="text-3xl font-bold mb-4">
                        Basic
                    </h3>

                    <p class="text-5xl font-black mb-8">
                        49€
                    </p>

                    <ul class="space-y-4 text-gray-300 mb-10">

                        <li>✓ Außenwäsche</li>
                        <li>✓ Felgenreinigung</li>
                        <li>✓ Scheibenreinigung</li>

                    </ul>

                    <a href="https://wa.me/491785729707" target="_blank"
                       class="block text-center bg-blue-600 hover:bg-blue-700 transition px-6 py-4 rounded-2xl font-semibold">
                        Jetzt buchen
                    </a>

                </div>

                <!-- Premium -->
                <div class="bg-blue-600 text-white rounded-3xl p-10 scale-105 shadow-2xl shadow-blue-500/30">

                    <p class="uppercase tracking-[4px] mb-4 text-sm">
                        Beliebt
                    </p>

                    <h3 class="text-3xl font-bold mb-4">
                        Premium
                    </h3>

                    <p class="text-5xl font-black mb-8">
                        89€
                    </p>

                    <ul class="space-y-4 mb-10">

                        <li>✓ Außenwäsche</li>
                        <li>✓ Innenreinigung</li>
                        <li>✓ Felgenreinigung</li>
                        <li>✓ Cockpitpflege</li>

                    </ul>

                    <a href="https://wa.me/491785729707" target="_blank"
                       class="block text-center bg-black hover:bg-gray-900 transition px-6 py-4 rounded-2xl font-semibold">
                        Jetzt buchen
                    </a>

                </div>

                <!-- Deluxe -->
                <div class="bg-white/5 border border-white/10 rounded-3xl p-10">

                    <h3 class="text-3xl font-bold mb-4">
                        Deluxe
                    </h3>

                    <p class="text-5xl font-black mb-8">
                        149€
                    </p>

                    <ul class="space-y-4 text-gray-300 mb-10">

                        <li>✓ Komplettaufbereitung</li>
                        <li>✓ Lederpflege</li>
                        <li>✓ Politur</li>
                        <li>✓ Premium Finish</li>

                    </ul>

                    <a href="https://wa.me/491785729707" target="_blank"
                       class="block text-center bg-blue-600 hover:bg-blue-700 transition px-6 py-4 rounded-2xl font-semibold">
                        Jetzt buchen
                    </a>

                </div>

            </div>

        </div>

    </section>

</body>
</html>

<!-- Leistungen -->
<section id="leistungen" class="relative z-10 py-32 px-6">

    <div class="max-w-7xl mx-auto">

        <!-- Titel -->
        <div class="text-center mb-20">

            <p class="uppercase tracking-[6px] text-blue-400 mb-4 text-sm">
                Unsere Leistungen
            </p>

            <h2 class="text-5xl md:text-6xl font-black mb-6">
                Premium Fahrzeugpflege
            </h2>

            <p class="text-gray-400 max-w-2xl mx-auto text-lg">
                Professionelle Reinigung und Pflege direkt bei Ihnen vor Ort.
            </p>

        </div>

    </div>

</section>

<!-- Galerie -->
<section id="galerie" class="relative z-10 py-32 px-6">

    <div class="max-w-7xl mx-auto">

        <!-- Titel -->
        <div class="text-center mb-20">

            <p class="uppercase tracking-[6px] text-blue-400 mb-4 text-sm">
                Vorher / Nachher
            </p>

            <h2 class="text-5xl md:text-6xl font-black mb-6">
                Unsere Ergebnisse
            </h2>

            <p class="text-gray-400 max-w-2xl mx-auto text-lg">
                Überzeuge dich selbst von unserer professionellen Arbeit.
            </p>

        </div>

        <!-- Galerie Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            <!-- Bild 1 -->
            <div class="group relative overflow-hidden rounded-3xl border border-white/10">

                <img
                    src="https://images.unsplash.com/photo-1503376780353-7e6692767b70?q=80&w=1200"
                    class="w-full h-[400px] object-cover group-hover:scale-110 transition duration-700"
                >

                <div class="absolute inset-0 bg-black/40"></div>

                <div class="absolute bottom-6 left-6">

                    <p class="text-sm text-blue-400 uppercase tracking-[4px] mb-2">
                        Premium Wash
                    </p>

                    <h3 class="text-2xl font-bold">
                        Außenreinigung
                    </h3>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- Bewertungen -->
<section class="relative z-10 py-32 px-6">

    <div class="max-w-7xl mx-auto">

        <!-- Titel -->
        <div class="text-center mb-20">

            <p class="uppercase tracking-[6px] text-blue-400 mb-4 text-sm">
                Kundenbewertungen
            </p>

            <h2 class="text-5xl md:text-6xl font-black mb-6">
                Was unsere Kunden sagen
            </h2>

            <p class="text-gray-400 max-w-2xl mx-auto text-lg">
                Zufriedene Kunden sind unsere beste Werbung.
            </p>

        </div>

        <!-- Bewertungen Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

            <!-- Bewertung 1 -->
            <div class="bg-white/5 border border-white/10 rounded-3xl p-8">

                <div class="flex gap-1 text-yellow-400 text-2xl mb-6">
                    ★★★★★
                </div>

                <p class="text-gray-300 leading-relaxed mb-8">
                    Mein Auto sah danach besser aus als beim Kauf.
                    Extrem professionell und super freundlich.
                </p>

                <div>

                    <h3 class="font-bold text-xl">
                        Max Müller
                    </h3>

                    <p class="text-gray-500">
                        BMW M4 Besitzer
                    </p>

                </div>

            </div>

            <!-- Bewertung 2 -->
            <div class="bg-white/5 border border-white/10 rounded-3xl p-8">

                <div class="flex gap-1 text-yellow-400 text-2xl mb-6">
                    ★★★★★
                </div>

                <p class="text-gray-300 leading-relaxed mb-8">
                    Super bequem direkt vor der Haustür.
                    Das Ergebnis war wirklich Premium.
                </p>

                <div>

                    <h3 class="font-bold text-xl">
                        Sarah Klein
                    </h3>

                    <p class="text-gray-500">
                        Audi A5 Besitzerin
                    </p>

                </div>

            </div>

            <!-- Bewertung 3 -->
            <div class="bg-white/5 border border-white/10 rounded-3xl p-8">

                <div class="flex gap-1 text-yellow-400 text-2xl mb-6">
                    ★★★★★
                </div>

                <p class="text-gray-300 leading-relaxed mb-8">
                    Pünktlich, sauber und sehr hochwertig gearbeitet.
                    Werde definitiv wieder buchen.
                </p>

                <div>

                    <h3 class="font-bold text-xl">
                        Daniel Weber
                    </h3>

                    <p class="text-gray-500">
                        Mercedes C63 Besitzer
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- Floating WhatsApp Button -->
<a
    href="https://wa.me/491785729707"
    target="_blank"
    class="
        fixed
        bottom-6
        right-6
        z-50
        bg-green-500
        hover:bg-green-600
        transition
        w-16
        h-16
        rounded-full
        flex
        items-center
        justify-center
        text-3xl
        shadow-2xl
        shadow-green-500/40
        animate-bounce
    "
>
    💬
</a>


</body>
</html>
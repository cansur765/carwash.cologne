<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carwash Cologne</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-black text-white overflow-x-hidden">

    <!-- Background Glow -->
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[700px] h-[700px] bg-blue-600/20 blur-[180px] rounded-full"></div>

    <!-- Navbar -->
<nav class="
    fixed
    top-0
    left-0
    w-full
    z-50
    flex
    items-center
    justify-between
    px-8
    py-6
    bg-black/70
    backdrop-blur-xl
    border-b
    border-white/10
">
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

        <a href="https://wa.me/491785729707" target="_blank" class="
            bg-blue-600
            hover:bg-blue-700
            transition
            px-5
            py-3
            rounded-xl
            font-semibold
        ">
            WhatsApp
        </a>

    </nav>

    <!-- Hero -->
    <section class="relative z-10 min-h-screen flex items-center justify-center px-6">

        <div class="text-center max-w-5xl">

            <p class="uppercase tracking-[8px] text-blue-400 mb-8 text-sm">
                Mobile Fahrzeugpflege
            </p>

            <h1 class="
                text-6xl
                md:text-8xl
                font-black
                leading-none
                mb-8
            ">
                Mobile<br>
                Autowäsche<br>
                Köln
            </h1>

            <p class="
                text-gray-400
                text-lg
                md:text-2xl
                mb-12
                max-w-3xl
                mx-auto
            ">
                Professionelle Fahrzeugpflege direkt bei Ihnen vor Ort.
                Schnell, hochwertig und flexibel im gesamten Kölner Norden.
            </p>

            <div class="flex justify-center gap-6 flex-wrap">

                <a href="https://wa.me/491785729707" target="_blank" class="
                    bg-blue-600
                    hover:bg-blue-700
                    transition
                    px-8
                    py-4
                    rounded-2xl
                    text-lg
                    font-semibold
                ">
                    Termin buchen
                </a>

                <a href="#leistungen" class="
                    border
                    border-white/20
                    hover:border-white/50
                    backdrop-blur-md
                    transition
                    px-8
                    py-4
                    rounded-2xl
                    text-lg
                ">
                    Leistungen ansehen
                </a>

            </div>

        </div>

    </section>

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

        <!-- Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            <!-- Card -->
            <div class="bg-white/5 border border-white/10 rounded-3xl p-8 hover:border-blue-500 transition">

                <div class="text-5xl mb-6">
                    🚗
                </div>

                <h3 class="text-2xl font-bold mb-4">
                    Außenwäsche
                </h3>

                <p class="text-gray-400 leading-relaxed">
                    Schonende Handwäsche für maximalen Glanz und Lackschutz.
                </p>

            </div>

            <!-- Card -->
            <div class="bg-white/5 border border-white/10 rounded-3xl p-8 hover:border-blue-500 transition">

                <div class="text-5xl mb-6">
                    🧼
                </div>

                <h3 class="text-2xl font-bold mb-4">
                    Innenreinigung
                </h3>

                <p class="text-gray-400 leading-relaxed">
                    Tiefenreinigung von Sitzen, Teppichen und Cockpit.
                </p>

            </div>

            <!-- Card -->
            <div class="bg-white/5 border border-white/10 rounded-3xl p-8 hover:border-blue-500 transition">

                <div class="text-5xl mb-6">
                    ✨
                </div>

                <h3 class="text-2xl font-bold mb-4">
                    Politur
                </h3>

                <p class="text-gray-400 leading-relaxed">
                    Hochglanzpolitur für ein perfektes Finish Ihres Fahrzeugs.
                </p>

            </div>

            <!-- Card -->
            <div class="bg-white/5 border border-white/10 rounded-3xl p-8 hover:border-blue-500 transition">

                <div class="text-5xl mb-6">
                    🛞
                </div>

                <h3 class="text-2xl font-bold mb-4">
                    Felgenreinigung
                </h3>

                <p class="text-gray-400 leading-relaxed">
                    Entfernung von Bremsstaub und hartnäckigem Schmutz.
                </p>

            </div>

            <!-- Card -->
            <div class="bg-white/5 border border-white/10 rounded-3xl p-8 hover:border-blue-500 transition">

                <div class="text-5xl mb-6">
                    🪑
                </div>

                <h3 class="text-2xl font-bold mb-4">
                    Lederpflege
                </h3>

                <p class="text-gray-400 leading-relaxed">
                    Pflege und Schutz hochwertiger Lederausstattungen.
                </p>

            </div>

            <!-- Card -->
            <div class="bg-white/5 border border-white/10 rounded-3xl p-8 hover:border-blue-500 transition">

                <div class="text-5xl mb-6">
                    ⭐
                </div>

                <h3 class="text-2xl font-bold mb-4">
                    Premium Finish
                </h3>

                <p class="text-gray-400 leading-relaxed">
                    Hochwertige Versiegelung und perfekter Abschluss.
                </p>

            </div>

        </div>

    </div>

</section>

  <!-- Preise -->
<section id="preise" class="relative z-10 py-32 px-6">

    <div class="max-w-7xl mx-auto">

        <!-- Titel -->
        <div class="text-center mb-20">

            <p class="uppercase tracking-[6px] text-blue-400 mb-4 text-sm">
                Preise & Pakete
            </p>

            <h2 class="text-5xl md:text-6xl font-black">
                Wähle dein Paket
            </h2>

        </div>

        <!-- Pricing Cards -->
        <div class="grid md:grid-cols-3 gap-8 items-center">

            <!-- Basic -->
            <div class="
                bg-white/5
                border border-white/10
                rounded-[35px]
                p-10
                backdrop-blur-xl
                hover:border-blue-500/40
                transition
            ">

                <h3 class="text-4xl font-bold mb-6">
                    Basic
                </h3>

                <div class="text-6xl font-black mb-10">
                    49€
                </div>

                <ul class="space-y-5 text-gray-300 mb-10 text-lg">

                    <li>✓ Außenwäsche</li>
                    <li>✓ Felgenreinigung</li>
                    <li>✓ Scheibenreinigung</li>

                </ul>

                <a href="https://wa.me/491785729707" class="
                    block
                    text-center
                    bg-blue-600
                    hover:bg-blue-700
                    transition
                    py-4
                    rounded-2xl
                    font-semibold
                    text-lg
                ">
                    Jetzt buchen
                </a>

            </div>

            <!-- Premium -->
            <div class="
                relative
                bg-blue-600
                rounded-[40px]
                p-12
                scale-105
                shadow-[0_0_80px_rgba(37,99,235,0.5)]
            ">

                <!-- Badge -->
                <div class="
                    absolute
                    top-6
                    left-1/2
                    -translate-x-1/2
                    uppercase
                    tracking-[5px]
                    text-sm
                    text-blue-100
                ">
                    Beliebt
                </div>

                <h3 class="text-5xl font-bold mb-6 mt-6">
                    Premium
                </h3>

                <div class="text-7xl font-black mb-10">
                    89€
                </div>

                <ul class="space-y-5 text-white/90 mb-12 text-xl">

                    <li>✓ Außenwäsche</li>
                    <li>✓ Innenreinigung</li>
                    <li>✓ Felgenreinigung</li>
                    <li>✓ Cockpitpflege</li>

                </ul>

                <a href="#kontakt" class="
                    block
                    text-center
                    bg-black
                    hover:bg-neutral-900
                    transition
                    py-5
                    rounded-2xl
                    font-bold
                    text-xl
                ">
                    Jetzt buchen
                </a>

            </div>

            <!-- Deluxe -->
            <div class="
                bg-white/5
                border border-white/10
                rounded-[35px]
                p-10
                backdrop-blur-xl
                hover:border-blue-500/40
                transition
            ">

                <h3 class="text-4xl font-bold mb-6">
                    Deluxe
                </h3>

                <div class="text-6xl font-black mb-10">
                    149€
                </div>

                <ul class="space-y-5 text-gray-300 mb-10 text-lg">

                    <li>✓ Komplettaufbereitung</li>
                    <li>✓ Lederpflege</li>
                    <li>✓ Politur</li>
                    <li>✓ Premium Finish</li>

                </ul>

                <a href="#kontakt" class="
                    block
                    text-center
                    bg-blue-600
                    hover:bg-blue-700
                    transition
                    py-4
                    rounded-2xl
                    font-semibold
                    text-lg
                ">
                    Jetzt buchen
                </a>

            </div>

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

            <!-- Bild 2 -->
            <div class="group relative overflow-hidden rounded-3xl border border-white/10">

                <img
                    src="https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?q=80&w=1200"
                    class="w-full h-[400px] object-cover group-hover:scale-110 transition duration-700"
                >

                <div class="absolute inset-0 bg-black/40"></div>

                <div class="absolute bottom-6 left-6">

                    <p class="text-sm text-blue-400 uppercase tracking-[4px] mb-2">
                        Interior Care
                    </p>

                    <h3 class="text-2xl font-bold">
                        Innenreinigung
                    </h3>

                </div>

            </div>

            <!-- Bild 3 -->
            <div class="group relative overflow-hidden rounded-3xl border border-white/10">

                <img
                    src="https://images.unsplash.com/photo-1511919884226-fd3cad34687c?q=80&w=1200"
                    class="w-full h-[400px] object-cover group-hover:scale-110 transition duration-700"
                >

                <div class="absolute inset-0 bg-black/40"></div>

                <div class="absolute bottom-6 left-6">

                    <p class="text-sm text-blue-400 uppercase tracking-[4px] mb-2">
                        Premium Finish
                    </p>

                    <h3 class="text-2xl font-bold">
                        Hochglanz Finish
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

<!-- Social Media -->
<section class="relative z-10 py-20 px-6">

    <div class="max-w-5xl mx-auto text-center">

        <p class="uppercase tracking-[6px] text-blue-400 mb-4 text-sm">
            Social Media
        </p>

        <h2 class="text-5xl font-black mb-6">
            Folge uns online
        </h2>

        <p class="text-gray-400 text-lg mb-12">
            Vorher/Nachher Ergebnisse, Reels und echte Kundenfahrzeuge.
        </p>

        <div class="flex justify-center gap-6 flex-wrap">

            <!-- Instagram -->
            <a 
                href="https://instagram.com/carwash.cologne"
                target="_blank"
                class="
                    bg-white/5
                    border
                    border-white/10
                    hover:border-pink-500/50
                    hover:bg-pink-500/10
                    transition
                    px-8
                    py-5
                    rounded-2xl
                    text-lg
                    font-semibold
                    backdrop-blur-xl
                "
            >
                Instagram
            </a>

            <!-- TikTok -->
            <a 
                href="https://tiktok.com/@carwash.cologne"
                target="_blank"
                class="
                    bg-white/5
                    border
                    border-white/10
                    hover:border-cyan-400/50
                    hover:bg-cyan-400/10
                    transition
                    px-8
                    py-5
                    rounded-2xl
                    text-lg
                    font-semibold
                    backdrop-blur-xl
                "
            >
                TikTok
            </a>

        </div>

    </div>

</section>

</body>
</html>
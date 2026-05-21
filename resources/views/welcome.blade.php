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
    <nav class="relative z-50 flex items-center justify-between px-8 py-6">

        <h1 class="text-2xl font-bold tracking-wide">
            Carwash Cologne
        </h1>

        <div class="hidden md:flex gap-10 text-gray-300">

            <a href="#" class="hover:text-white transition">
                Leistungen
            </a>

            <a href="#" class="hover:text-white transition">
                Preise
            </a>

            <a href="#" class="hover:text-white transition">
                Galerie
            </a>

            <a href="#" class="hover:text-white transition">
                Kontakt
            </a>

        </div>

        <a href="#" class="
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

                <a href="#" class="
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

                <a href="#" class="
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

</body>
</html>
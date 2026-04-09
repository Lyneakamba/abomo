<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="INSIDE COMMERCIAL SARL — Votre partenaire en matériaux de gypse et solutions de construction au Cameroun et en Afrique Centrale.">
    <title>@yield('title', 'INSIDE COMMERCIAL SARL — Matériaux de construction & Gypse')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Playfair+Display:wght@700;800&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        /* Fallback styles in case Vite isn't running */
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="antialiased text-slate-800">

    <x-navbar />

    <main>
        @yield('content')
    </main>

    <x-footer />

    <script>
        // Mobile menu toggle
        document.addEventListener('DOMContentLoaded', function () {
            const menuBtn = document.getElementById('mobile-menu-btn');
            const mobileMenu = document.getElementById('mobile-menu');

            if (menuBtn && mobileMenu) {
                menuBtn.addEventListener('click', function () {
                    mobileMenu.classList.toggle('hidden');
                });
            }

            // Products filter
            const filterBtns = document.querySelectorAll('[data-filter]');
            const productCards = document.querySelectorAll('[data-category]');

            filterBtns.forEach(btn => {
                btn.addEventListener('click', function () {
                    const filter = this.getAttribute('data-filter');

                    filterBtns.forEach(b => {
                        b.classList.remove('bg-blue-600', 'text-white');
                        b.classList.add('bg-white', 'text-slate-700');
                    });
                    this.classList.add('bg-blue-600', 'text-white');
                    this.classList.remove('bg-white', 'text-slate-700');

                    productCards.forEach(card => {
                        if (filter === 'tous' || card.getAttribute('data-category') === filter) {
                            card.style.display = 'block';
                        } else {
                            card.style.display = 'none';
                        }
                    });
                });
            });

            // Scroll navbar shadow
            const navbar = document.getElementById('navbar');
            window.addEventListener('scroll', function () {
                if (window.scrollY > 10) {
                    navbar?.classList.add('shadow-md');
                } else {
                    navbar?.classList.remove('shadow-md');
                }
            });
        });
    </script>
</body>
</html>

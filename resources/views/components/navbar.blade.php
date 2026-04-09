<nav id="navbar" class="fixed top-0 left-0 right-0 z-50 bg-white transition-shadow duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">

            {{-- Logo --}}
            <a href="{{ url('/') }}" class="flex items-center gap-2 flex-shrink-0">
                <img src="{{ asset('logo_simple.png') }}"
                     alt="INSIDE COMMERCIAL SARL"
                     class="h-10 w-auto object-contain">
                <div class="leading-tight hidden sm:block">
                    <span class="block font-bold text-slate-900 text-sm tracking-wide">INSIDE COMMERCIAL</span>
                    <span class="block text-xs text-slate-500 font-medium">SARL</span>
                </div>
            </a>

            {{-- Desktop nav --}}
            <div class="hidden md:flex items-center gap-7">
                <a href="{{ url('/') }}" class="text-sm font-medium text-slate-700 hover:text-blue-600 transition-colors">Accueil</a>
                <a href="{{ url('/#apropos') }}" class="text-sm font-medium text-slate-700 hover:text-blue-600 transition-colors">À propos</a>
                <div class="relative group">
                    <button class="flex items-center gap-1 text-sm font-medium text-slate-700 hover:text-blue-600 transition-colors">
                        Produits
                        <svg class="w-3.5 h-3.5 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div class="absolute top-full left-0 mt-2 w-56 bg-white rounded-xl shadow-lg border border-slate-100 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200">
                        <div class="p-2">
                            <a href="{{ url('/#produits') }}" class="block px-3 py-2 text-sm text-slate-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg">Tous les produits</a>
                            <a href="{{ url('/#produits') }}" class="block px-3 py-2 text-sm text-slate-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg">Plâtre de construction</a>
                            <a href="{{ url('/#produits') }}" class="block px-3 py-2 text-sm text-slate-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg">Produits de finition</a>
                            <a href="{{ url('/#produits') }}" class="block px-3 py-2 text-sm text-slate-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg">Mortiers & Enduits</a>
                        </div>
                    </div>
                </div>
                <a href="{{ url('/#partenaires') }}" class="text-sm font-medium text-slate-700 hover:text-blue-600 transition-colors">Partenaires</a>
                <a href="{{ url('/#qualite') }}" class="text-sm font-medium text-slate-700 hover:text-blue-600 transition-colors">Qualité & Innovation</a>
                <a href="{{ url('/#contact') }}" class="text-sm font-medium text-slate-700 hover:text-blue-600 transition-colors">Contact</a>
            </div>

            {{-- CTA Button --}}
            <div class="hidden md:block">
                <a href="{{ url('/#contact') }}" class="bg-blue-600 hover:bg-blue-700 text-white text-sm font-semibold px-5 py-2.5 rounded-lg transition-colors duration-200">
                    Demander un devis
                </a>
            </div>

            {{-- Mobile hamburger --}}
            <button id="mobile-menu-btn" class="md:hidden p-2 rounded-lg text-slate-700 hover:bg-slate-100 transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>
    </div>

    {{-- Mobile menu --}}
    <div id="mobile-menu" class="hidden md:hidden border-t border-slate-100 bg-white">
        <div class="px-4 py-4 space-y-1">
            <a href="{{ url('/') }}" class="block px-3 py-2.5 text-sm font-medium text-slate-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg">Accueil</a>
            <a href="{{ url('/#apropos') }}" class="block px-3 py-2.5 text-sm font-medium text-slate-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg">À propos</a>
            <a href="{{ url('/#produits') }}" class="block px-3 py-2.5 text-sm font-medium text-slate-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg">Produits</a>
            <a href="{{ url('/#partenaires') }}" class="block px-3 py-2.5 text-sm font-medium text-slate-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg">Partenaires</a>
            <a href="{{ url('/#qualite') }}" class="block px-3 py-2.5 text-sm font-medium text-slate-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg">Qualité & Innovation</a>
            <a href="{{ url('/#contact') }}" class="block px-3 py-2.5 text-sm font-medium text-slate-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg">Contact</a>
            <div class="pt-2 border-t border-slate-100">
                <a href="{{ url('/#contact') }}" class="block text-center bg-blue-600 hover:bg-blue-700 text-white text-sm font-semibold px-5 py-3 rounded-lg transition-colors duration-200">
                    Demander un devis
                </a>
            </div>
        </div>
    </div>
</nav>

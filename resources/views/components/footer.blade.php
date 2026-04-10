<footer class="bg-slate-900 text-slate-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">

            {{-- Brand column --}}
            <div>
                <a href="{{ url('/') }}" class="inline-flex items-center gap-3 mb-5">
                    <div class="bg-white rounded-xl p-1 flex-shrink-0">
                        <img src="{{ asset('logo_simple.png') }}"
                             alt="INSIDE COMMERCIAL SARL"
                             class="h-10 w-auto object-contain">
                    </div>
                    <div class="leading-tight">
                        <span class="block font-bold text-white text-sm tracking-wide">INSIDE COMMERCIAL</span>
                        <span class="block text-xs text-slate-400 font-medium">SARL</span>
                    </div>
                </a>
                <p class="text-slate-400 text-sm leading-relaxed">
                    Votre partenaire de confiance pour des matériaux de gypse de qualité et des solutions de construction performantes au Cameroun et en Afrique Centrale.
                </p>
            </div>

            {{-- Liens rapides --}}
            <div>
                <h4 class="text-white font-semibold text-sm uppercase tracking-widest mb-5">Liens rapides</h4>
                <ul class="space-y-3">
                    <li><a href="{{ url('/') }}" class="text-slate-400 hover:text-white text-sm transition-colors">Accueil</a></li>
                    <li><a href="{{ url('/#apropos') }}" class="text-slate-400 hover:text-white text-sm transition-colors">À propos</a></li>
                    <li><a href="{{ url('/#produits') }}" class="text-slate-400 hover:text-white text-sm transition-colors">Produits</a></li>
                    <li><a href="{{ url('/#partenaires') }}" class="text-slate-400 hover:text-white text-sm transition-colors">Partenaires</a></li>
                    <li><a href="{{ url('/#qualite') }}" class="text-slate-400 hover:text-white text-sm transition-colors">Qualité</a></li>
                    <li><a href="{{ url('/#contact') }}" class="text-slate-400 hover:text-white text-sm transition-colors">Contact</a></li>
                </ul>
            </div>

            {{-- Produits --}}
            <div>
                <h4 class="text-white font-semibold text-sm uppercase tracking-widest mb-5">Produits</h4>
                <ul class="space-y-3">
                    <li><a href="{{ url('/#produits') }}" class="text-slate-400 hover:text-white text-sm transition-colors">Plâtre de construction</a></li>
                    <li><a href="{{ url('/#produits') }}" class="text-slate-400 hover:text-white text-sm transition-colors">Produits de finition</a></li>
                    <li><a href="{{ url('/#produits') }}" class="text-slate-400 hover:text-white text-sm transition-colors">Mortiers & Enduits</a></li>
                    <li><a href="{{ url('/#produits') }}" class="text-slate-400 hover:text-white text-sm transition-colors">Nouveautés</a></li>
                    <li><a href="{{ url('/#produits') }}" class="text-slate-400 hover:text-white text-sm transition-colors">Catalogue complet</a></li>
                </ul>
            </div>

            {{-- Contact --}}
            <div>
                <h4 class="text-white font-semibold text-sm uppercase tracking-widest mb-5">Contact</h4>
                <ul class="space-y-3">
                    <li class="text-slate-400 text-sm">Yaoundé, Cameroun</li>
                    <li><a href="tel:+237622326872" class="text-slate-400 hover:text-white text-sm transition-colors">(+237) 622 326 872</a></li>
                    <li><a href="mailto:contact@insidecommercial.cm" class="text-slate-400 hover:text-white text-sm transition-colors">contact@insidecommercial.cm</a></li>
                </ul>

                {{-- Social links --}}
                <div class="flex gap-3 mt-6">
                    <a href="#" class="w-9 h-9 bg-slate-800 hover:bg-blue-600 rounded-lg flex items-center justify-center transition-colors duration-200" aria-label="Facebook">
                        <svg class="w-4 h-4 text-slate-300" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/>
                        </svg>
                    </a>
                    <a href="#" class="w-9 h-9 bg-slate-800 hover:bg-blue-600 rounded-lg flex items-center justify-center transition-colors duration-200" aria-label="LinkedIn">
                        <svg class="w-4 h-4 text-slate-300" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"/>
                            <circle cx="4" cy="4" r="2"/>
                        </svg>
                    </a>
                    <a href="#" class="w-9 h-9 bg-slate-800 hover:bg-blue-600 rounded-lg flex items-center justify-center transition-colors duration-200" aria-label="Instagram">
                        <svg class="w-4 h-4 text-slate-300" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <rect x="2" y="2" width="20" height="20" rx="5" ry="5"/>
                            <circle cx="12" cy="12" r="4"/>
                            <circle cx="17.5" cy="6.5" r="0.5" fill="currentColor"/>
                        </svg>
                    </a>
                    <a href="#" class="w-9 h-9 bg-slate-800 hover:bg-blue-600 rounded-lg flex items-center justify-center transition-colors duration-200" aria-label="Twitter/X">
                        <svg class="w-4 h-4 text-slate-300" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>

    {{-- Bottom bar --}}
    <div class="border-t border-slate-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-5 flex flex-col sm:flex-row items-center justify-between gap-3">
            <p class="text-slate-500 text-sm">© {{ date('Y') }} INSIDE COMMERCIAL SARL. Tous droits réservés.</p>
            <p class="text-slate-600 text-xs">Membre du groupe <span class="text-slate-400 font-medium">THE INSIDE GROUP</span></p>
        </div>
    </div>
</footer>

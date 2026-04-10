@extends('layouts.app')

@section('title', 'INSIDE COMMERCIAL SARL — Matériaux de gypse & Solutions de construction')

@section('content')

{{-- ===================== HERO ===================== --}}
<section id="accueil" class="relative min-h-screen flex items-center overflow-hidden pt-16">

    {{-- Background image avec overlay bleu foncé --}}
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-gradient-to-r from-[#0d2b5e] via-[#0d2b5e]/90 to-[#0d2b5e]/70 z-10"></div>
        {{-- Texture industrielle simulée en CSS --}}
        <div class="w-full h-full bg-[#0d2b5e]"
             style="background-image: repeating-linear-gradient(45deg, rgba(255,255,255,0.02) 0px, rgba(255,255,255,0.02) 2px, transparent 2px, transparent 12px);"></div>
    </div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 w-full">
        <div class="max-w-2xl">
            {{-- Badge --}}
            <div class="inline-flex items-center gap-2 bg-white/10 border border-white/20 text-white text-xs font-medium px-4 py-1.5 rounded-full mb-8 backdrop-blur-sm">
                <span class="w-1.5 h-1.5 bg-blue-400 rounded-full"></span>
                Votre partenaire en gypse depuis 2023
            </div>

            {{-- Headline --}}
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white leading-tight font-serif mb-6">
                Des matériaux fiables pour<br>des projets durables
            </h1>

            {{-- Subtext --}}
            <p class="text-white/75 text-lg md:text-xl leading-relaxed mb-10 max-w-xl">
                INSIDE COMMERCIAL SARL vous propose des solutions professionnelles de qualité en gypse et matériaux de construction pour le Cameroun et l'Afrique Centrale.
            </p>

            {{-- CTAs --}}
            <div class="flex flex-wrap gap-4">
                <a href="#produits" class="inline-flex items-center gap-2 bg-blue-600 hover:bg-blue-500 text-white font-semibold px-7 py-3.5 rounded-full transition-all duration-200 shadow-lg shadow-blue-900/50">
                    Découvrir nos produits
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
                <a href="#contact" class="inline-flex items-center gap-2 border-2 border-white/40 hover:border-white/80 text-white font-semibold px-7 py-3.5 rounded-full transition-all duration-200 backdrop-blur-sm">
                    Demander un devis
                </a>
            </div>
        </div>

        {{-- Stats --}}
        <div class="mt-20 grid grid-cols-2 md:grid-cols-4 gap-6 border-t border-white/15 pt-10">
            @foreach([
                ['2023', 'Fondée en'],
                ['5+', 'Produits certifiés'],
                ['AL ALAMIA', 'Partenaire expert'],
                ['100%', 'Qualité garantie'],
            ] as [$val, $label])
            <div>
                <p class="text-3xl font-bold text-white font-serif">{{ $val }}</p>
                <p class="text-white/50 text-sm mt-1">{{ $label }}</p>
            </div>
            @endforeach
        </div>
    </div>

    {{-- Scroll indicator --}}
    <a href="#apropos" class="absolute bottom-8 left-1/2 -translate-x-1/2 z-10 flex flex-col items-center gap-1 text-white/40 hover:text-white/70 transition-colors animate-bounce">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
        </svg>
    </a>
</section>


{{-- ===================== À PROPOS ===================== --}}
<section id="apropos" class="bg-slate-50 py-20 md:py-28">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="grid lg:grid-cols-2 gap-16 items-center">

            {{-- Left: text --}}
            <div>
                <p class="section-label mb-3">À Propos</p>
                <h2 class="section-title mb-6">
                    Un acteur engagé dans le développement de la construction en Afrique Centrale
                </h2>
                <div class="prose prose-slate max-w-none text-slate-600 leading-relaxed space-y-4">
                    <p>
                        <strong>THE INSIDE GROUP</strong>, créé en 2023, est une société de projet de droit camerounais qui porte à son actif la société <strong>INSIDE COMMERCIAL SARL</strong>. Il a comme partenaire stratégique <strong>AL ALAMIA</strong>, l'un des leaders du marché de la production et de la distribution de plâtre en République arabe d'Égypte.
                    </p>
                    <p>
                        Fondée en 2005 en vertu de la loi n° 8 de 1997 relative à la production et au commerce de gypse et de produits dérivés, AL ALAMIA poursuit aujourd'hui sa croissance et devient un moteur d'innovation dans le secteur du plâtre.
                    </p>
                </div>

                {{-- Value cards --}}
                <div class="mt-10 space-y-4">
                    @foreach([
                        [
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>',
                            'title' => 'Notre Mission',
                            'desc' => 'Répondre efficacement aux besoins du marché camerounais et d\'Afrique Centrale en matériaux de gypse de qualité supérieure, tout en stimulant l\'innovation dans la construction.'
                        ],
                        [
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>',
                            'title' => 'Notre Vision',
                            'desc' => 'Face à l\'expansion urbaine croissante au Cameroun et en Afrique Centrale, nous entendons devenir le partenaire de référence en matériaux de construction propres et durables.'
                        ],
                        [
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"/>',
                            'title' => 'Pourquoi nous choisir',
                            'desc' => 'Un partenariat stratégique avec AL ALAMIA, des produits certifiés, une expertise du marché local et un engagement pour des matériaux de construction propres et durables.'
                        ],
                    ] as $item)
                    <div class="flex gap-4 p-4 bg-white rounded-xl border border-slate-100 hover:border-blue-100 hover:shadow-sm transition-all duration-200">
                        <div class="flex-shrink-0 w-10 h-10 bg-blue-50 rounded-lg flex items-center justify-center">
                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                {!! $item['icon'] !!}
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-slate-900 text-sm mb-1">{{ $item['title'] }}</h3>
                            <p class="text-slate-500 text-sm leading-relaxed">{{ $item['desc'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- Right: visual --}}
            <div class="relative">
                <div class="relative rounded-2xl overflow-hidden bg-gradient-to-br from-[#0d2b5e] to-blue-800 aspect-[4/5]">
                    {{-- Background pattern --}}
                    <div class="absolute inset-0 opacity-20"
                         style="background-image: repeating-linear-gradient(0deg, rgba(255,255,255,0.1) 0px, rgba(255,255,255,0.1) 1px, transparent 1px, transparent 40px), repeating-linear-gradient(90deg, rgba(255,255,255,0.1) 0px, rgba(255,255,255,0.1) 1px, transparent 1px, transparent 40px);"></div>

                    {{-- Floating content --}}
                    <div class="absolute inset-0 flex flex-col items-center justify-center p-8 text-center">
                        <div class="bg-white rounded-2xl p-2 mb-6 shadow-2xl inline-flex">
                            <img src="{{ asset('logo_simple.png') }}" alt="IC" class="h-16 w-auto object-contain">
                        </div>
                        <h3 class="text-white font-bold text-2xl font-serif mb-3">THE INSIDE GROUP</h3>
                        <p class="text-blue-200 text-sm max-w-xs">Société de projet de droit camerounais, membre du réseau AL ALAMIA</p>

                        {{-- Partner badge --}}
                        <div class="mt-8 bg-white/10 backdrop-blur-sm border border-white/20 rounded-xl p-4 w-full max-w-xs">
                            <p class="text-white/60 text-xs font-medium uppercase tracking-wider mb-2">Partenaire stratégique</p>
                            <p class="text-white font-bold text-lg">AL ALAMIA</p>
                            <p class="text-blue-300 text-xs mt-1">Leader en gypse — République Arabe d'Égypte</p>
                        </div>
                    </div>
                </div>

                {{-- Floating stat card --}}
                <div class="absolute -bottom-5 -left-5 bg-white rounded-xl shadow-xl p-4 flex items-center gap-3">
                    <div class="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center flex-shrink-0">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                        </svg>
                    </div>
                    <div>
                        <p class="font-bold text-slate-900 text-sm">Qualité certifiée</p>
                        <p class="text-slate-500 text-xs">Normes internationales</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- ===================== PRODUITS ===================== --}}
<section id="produits" class="bg-white py-20 md:py-28">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Header --}}
        <div class="text-center mb-12">
            <p class="section-label mb-3">Nos Produits</p>
            <h2 class="section-title">Des solutions pour chaque besoin</h2>
            <p class="section-subtitle">
                Explorez notre gamme de produits à base de gypse couvrant la construction, la finition et les mortiers, en partenariat avec AL ALAMIA.
            </p>
        </div>

        {{-- Filter tabs --}}
        <div class="flex flex-wrap justify-center gap-2 mb-12">
            @foreach([
                ['tous', 'Tous'],
                ['construction', 'Construction'],
                ['finition', 'Finition'],
                ['mortier', 'Mortiers & Enduits'],
            ] as [$val, $label])
            <button
                data-filter="{{ $val }}"
                class="px-5 py-2 rounded-full text-sm font-medium border transition-all duration-200
                       {{ $val === 'tous' ? 'bg-blue-600 text-white border-blue-600' : 'bg-white text-slate-700 border-slate-200 hover:border-blue-300 hover:text-blue-600' }}">
                {{ $label }}
            </button>
            @endforeach
        </div>

        {{-- Products grid --}}
        @php
        $products = [
            [
                'slug' => 'mega-gypse',
                'name' => 'MEGA GYPSE',
                'category' => 'finition',
                'category_label' => 'Finition',
                'image' => 'assets/products/mega-gypse.png',
                'tagline' => 'Plâtre en couche mince',
                'description' => 'Produit à base de gypse destiné à être appliqué en couches minces (jusqu\'à 4 mm) sur des surfaces en béton. Convient pour les bâtiments, murs et plafonds.',
                'features' => ['Surface lisse nettoyable', 'Finition sans peinture', 'Excellente maniabilité', 'Durable'],
            ],
            [
                'slug' => 'crochet',
                'name' => 'CROCHET (Hook)',
                'category' => 'finition',
                'category_label' => 'Finition',
                'image' => 'assets/products/crochet.png',
                'tagline' => 'Pâte de plâtre haute qualité',
                'description' => 'Poudre blanche de haute qualité prête à l\'emploi. Haute brillance, forte adhérence, aucune fissure. Convient aux surfaces intérieures et extérieures.',
                'features' => ['Excellente adhérence', 'Aucun retrait ni fissure', 'Haute brillance', 'Sûr et inodore'],
            ],
            [
                'slug' => 'goharet-sinai-bronze',
                'name' => 'GOHARET SINAI BRONZE',
                'category' => 'construction',
                'category_label' => 'Construction',
                'image' => 'assets/products/goharet-sinai-bronze.png',
                'tagline' => 'Plâtre à séchage rapide',
                'description' => 'Plâtre blanc à séchage rapide (prise initiale 5–8 min). Idéal pour les chantiers exigeant un rythme soutenu. Excellent pour les éléments architecturaux décoratifs.',
                'features' => ['Prise initiale : 5–8 min', 'Prise finale : 9–15 min', 'Finition polie impeccable', 'Moulage décoratif'],
            ],
            [
                'slug' => 'goharet-sinai-saphir',
                'name' => 'GOHARET SINAI SAPHIR',
                'category' => 'construction',
                'category_label' => 'Construction',
                'image' => 'assets/products/goharet-sinai-saphir.png',
                'tagline' => 'Plâtre à séchage lent',
                'description' => 'Plâtre blanc à séchage lent (prise initiale 12–15 min). Idéal pour couvrir de grandes surfaces. Temps de prise personnalisable selon vos besoins.',
                'features' => ['Prise initiale : 12–15 min', 'Prise finale : 23–29 min', 'Grandes surfaces', 'Temps personnalisable'],
            ],
            [
                'slug' => 'marteau',
                'name' => 'MARTEAU (Hammer)',
                'category' => 'mortier',
                'category_label' => 'Mortier',
                'image' => 'assets/products/hammer.png',
                'tagline' => 'Mortier de plâtre prêt à l\'emploi',
                'description' => 'Mortier de plâtre prêt sur briques sans chape. Surface blanche et lisse jusqu\'à 8 cm/couche. 50% plus léger que les alternatives ciment. Résistant à l\'humidité.',
                'features' => ['50% plus léger que ciment', 'Résistant humidité & feu', 'Isolation thermique & acoustique', 'Jusqu\'à 8 cm/couche'],
            ],
        ];
        @endphp

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($products as $product)
            <div data-category="{{ $product['category'] }}"
                 class="product-card group bg-slate-50 hover:bg-white rounded-2xl border border-slate-100 hover:border-blue-100 hover:shadow-lg transition-all duration-300 overflow-hidden flex flex-col">

                {{-- Product image --}}
                <div class="bg-white flex items-center justify-center px-10 pt-8 pb-4 overflow-hidden">
                    <img src="{{ asset($product['image']) }}"
                         alt="{{ $product['name'] }}"
                         class="product-img h-44 w-auto object-contain drop-shadow-md">
                </div>

                {{-- Card body --}}
                <div class="px-6 pb-4">
                    <div class="flex items-start justify-between mb-3">
                        <div>
                            <h3 class="font-bold text-slate-900 text-lg leading-tight">{{ $product['name'] }}</h3>
                            <p class="text-blue-600 text-xs font-semibold mt-0.5">{{ $product['tagline'] }}</p>
                        </div>
                        <span class="text-xs font-semibold text-blue-600 bg-blue-50 px-3 py-1 rounded-full uppercase tracking-wide flex-shrink-0 ml-2">
                            {{ $product['category_label'] }}
                        </span>
                    </div>
                    <p class="text-slate-500 text-sm leading-relaxed">{{ $product['description'] }}</p>
                </div>

                {{-- Features list --}}
                <div class="px-6 pb-6 mt-auto">
                    <div class="border-t border-slate-100 pt-4 mt-2">
                        <ul class="space-y-1.5">
                            @foreach($product['features'] as $feature)
                            <li class="flex items-center gap-2 text-sm text-slate-600">
                                <svg class="w-3.5 h-3.5 text-blue-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                {{ $feature }}
                            </li>
                            @endforeach
                        </ul>
                    </div>

                    <a href="#contact"
                       class="mt-4 w-full flex items-center justify-center gap-2 text-sm font-semibold text-blue-600 hover:text-blue-700 hover:bg-blue-50 py-2 rounded-lg transition-colors duration-200">
                        Demander un devis
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


{{-- ===================== PARTENAIRES ===================== --}}
<section id="partenaires" class="bg-[#0d2b5e] py-20 md:py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center mb-14">
            <p class="text-blue-400 font-semibold text-sm uppercase tracking-widest mb-3">Partenaires</p>
            <h2 class="text-3xl md:text-4xl font-bold text-white font-serif">Un partenariat d'excellence</h2>
            <p class="text-blue-200/70 text-lg mt-4 max-w-2xl mx-auto">
                INSIDE COMMERCIAL SARL s'appuie sur le savoir-faire industriel d'AL ALAMIA pour vous offrir des produits répondant aux plus hautes exigences du marché.
            </p>
        </div>

        {{-- Partner card --}}
        <div class="bg-white/10 backdrop-blur-sm border border-white/10 rounded-2xl p-8 md:p-12 max-w-4xl mx-auto">
            <div class="grid md:grid-cols-2 gap-10 items-center">
                <div>
                    <div class="flex items-center gap-4 mb-6">
                        <div class="bg-white rounded-xl p-1.5 flex-shrink-0">
                            <img src="{{ asset('logo_simple.png') }}" alt="IC" class="h-12 w-auto object-contain">
                        </div>
                        <div>
                            <h3 class="text-white font-bold text-xl">AL ALAMIA</h3>
                            <p class="text-blue-300 text-sm">République Arabe d'Égypte</p>
                        </div>
                    </div>
                    <p class="text-blue-100/80 text-sm leading-relaxed mb-4">
                        Fondée en 2005 en vertu de la loi n° 8 de 1997 relative à la production et au commerce de gypse et de produits dérivés, AL ALAMIA est aujourd'hui l'un des leaders du marché de la production et de la distribution de plâtre en Égypte.
                    </p>
                    <p class="text-blue-100/80 text-sm leading-relaxed">
                        Al Alamia poursuit sa croissance et devient un moteur d'innovation dans le secteur du plâtre, avec des efforts continus en recherche et développement pour élargir la gamme et répondre à tous les besoins futurs du marché.
                    </p>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    @foreach([
                        ['20+', 'Ans d\'expertise', 'Fondée en 2005'],
                        ['R&D', 'Innovation', 'Recherche active'],
                        ['Leader', 'Marché égyptien', 'Production & distribution'],
                        ['5', 'Gammes produits', 'Gypse & dérivés'],
                    ] as [$val, $label, $sub])
                    <div class="bg-white/5 rounded-xl p-4 text-center">
                        <p class="text-white font-bold text-2xl font-serif">{{ $val }}</p>
                        <p class="text-blue-300 text-xs font-semibold mt-1">{{ $label }}</p>
                        <p class="text-blue-400/70 text-xs mt-0.5">{{ $sub }}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>


{{-- ===================== QUALITÉ & INNOVATION ===================== --}}
<section id="qualite" class="bg-slate-50 py-20 md:py-28">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="grid lg:grid-cols-2 gap-16 items-center">

            {{-- Left --}}
            <div>
                <p class="section-label mb-3">Qualité & Innovation</p>
                <h2 class="section-title mb-6">
                    Des produits pensés pour les défis de la construction moderne
                </h2>
                <p class="text-slate-500 leading-relaxed mb-8">
                    Nous sommes convaincus que l'avenir du développement camerounais repose sur la mise en place de projets d'expansion durables, guidés par la recherche et favorisant l'émergence de matériaux de construction propres et durables. Nous sommes fiers du travail accompli par notre partenaire dans leurs usines pour contribuer à la réalisation de cet avenir.
                </p>

                <div class="grid sm:grid-cols-2 gap-4">
                    @foreach([
                        ['Résistance', 'Produits durables résistants à l\'humidité, aux moisissures et aux variations thermiques.'],
                        ['Légèreté', 'Jusqu\'à 50% plus légers que les alternatives en ciment traditionnelles.'],
                        ['Isolation', 'Excellentes propriétés d\'isolation thermique et acoustique intégrées.'],
                        ['Sécurité', 'Produits sûrs, inodores et certifiés, avec une résistance au feu avérée.'],
                    ] as [$title, $desc])
                    <div class="bg-white rounded-xl p-5 border border-slate-100">
                        <div class="w-8 h-8 bg-blue-100 rounded-lg flex items-center justify-center mb-3">
                            <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                            </svg>
                        </div>
                        <h3 class="font-semibold text-slate-900 text-sm mb-1.5">{{ $title }}</h3>
                        <p class="text-slate-500 text-xs leading-relaxed">{{ $desc }}</p>
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- Right: Visual --}}
            <div class="space-y-4">
                {{-- Spec visual card --}}
                <div class="bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden">
                    <div class="bg-gradient-to-r from-[#0d2b5e] to-blue-700 p-6">
                        <h3 class="text-white font-bold text-lg mb-1">Spécifications techniques</h3>
                        <p class="text-blue-200 text-sm">Gamme GOHARET SINAI — Al Alamia</p>
                    </div>
                    <div class="p-6">
                        <div class="space-y-4">
                            <div>
                                <p class="text-xs font-semibold text-slate-500 uppercase tracking-wider mb-2">Bronze (Séchage rapide)</p>
                                <div class="grid grid-cols-2 gap-3">
                                    <div class="bg-slate-50 rounded-lg p-3">
                                        <p class="text-xs text-slate-500">Prise initiale</p>
                                        <p class="font-bold text-slate-900">5 – 8 min</p>
                                    </div>
                                    <div class="bg-slate-50 rounded-lg p-3">
                                        <p class="text-xs text-slate-500">Prise finale</p>
                                        <p class="font-bold text-slate-900">9 – 15 min</p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <p class="text-xs font-semibold text-slate-500 uppercase tracking-wider mb-2">Saphir (Séchage lent)</p>
                                <div class="grid grid-cols-2 gap-3">
                                    <div class="bg-slate-50 rounded-lg p-3">
                                        <p class="text-xs text-slate-500">Prise initiale</p>
                                        <p class="font-bold text-slate-900">12 – 15 min</p>
                                    </div>
                                    <div class="bg-slate-50 rounded-lg p-3">
                                        <p class="text-xs text-slate-500">Prise finale</p>
                                        <p class="font-bold text-slate-900">23 – 29 min</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- MEGA GYPSE specs --}}
                <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-6">
                    <div class="flex items-center justify-between mb-4">
                        <div>
                            <h3 class="font-bold text-slate-900">MEGA GYPSE</h3>
                            <p class="text-slate-500 text-xs">Application en couche mince</p>
                        </div>
                        <span class="bg-blue-50 text-blue-600 text-xs font-semibold px-3 py-1 rounded-full">Finition</span>
                    </div>
                    <div class="space-y-2">
                        @foreach([
                            ['Épaisseur max/couche', 'jusqu\'à 4 mm'],
                            ['Surfaces compatibles', 'Béton, murs, plafonds'],
                            ['Mixage', '1 part eau / 2 parts poudre'],
                        ] as [$k, $v])
                        <div class="flex justify-between items-center py-1.5 border-b border-slate-50 last:border-0">
                            <span class="text-slate-500 text-xs">{{ $k }}</span>
                            <span class="text-slate-900 text-xs font-semibold">{{ $v }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- ===================== CONTACT ===================== --}}
<section id="contact" class="bg-white py-20 md:py-28">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Header --}}
        <div class="text-center mb-14">
            <p class="section-label mb-3">Contact</p>
            <h2 class="section-title">Parlons de votre projet</h2>
            <p class="section-subtitle">
                Notre équipe commerciale est à votre disposition pour répondre à toutes vos questions et vous accompagner dans vos projets.
            </p>
        </div>

        <div class="grid lg:grid-cols-5 gap-12">

            {{-- Left: contact info --}}
            <div class="lg:col-span-2 space-y-5">

                @foreach([
                    [
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>',
                        'label' => 'Adresse',
                        'value' => "Yaoundé, Cameroun\nAfrica Centrale",
                    ],
                    [
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>',
                        'label' => 'Téléphone',
                        'value' => '(+237) 622 326 872',
                        'href' => 'tel:+237622326872',
                    ],
                    [
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>',
                        'label' => 'Email',
                        'value' => 'contact@insidecommercial.cm',
                        'href' => 'mailto:contact@insidecommercial.cm',
                    ],
                    [
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>',
                        'label' => 'Horaires',
                        'value' => "Lun – Ven : 08h00 – 17h00\nSam : 08h00 – 12h00",
                    ],
                ] as $info)
                <div class="flex gap-4">
                    <div class="w-10 h-10 bg-blue-50 rounded-xl flex items-center justify-center flex-shrink-0 mt-0.5">
                        <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            {!! $info['icon'] !!}
                        </svg>
                    </div>
                    <div>
                        <p class="font-semibold text-slate-900 text-sm">{{ $info['label'] }}</p>
                        @if(isset($info['href']))
                            <a href="{{ $info['href'] }}" class="text-slate-500 text-sm hover:text-blue-600 transition-colors">
                                {!! nl2br(e($info['value'])) !!}
                            </a>
                        @else
                            <p class="text-slate-500 text-sm">{!! nl2br(e($info['value'])) !!}</p>
                        @endif
                    </div>
                </div>
                @endforeach

                {{-- Google Maps --}}
                <div class="mt-6 rounded-2xl overflow-hidden border border-slate-100 shadow-sm h-52">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127675.11504394754!2d11.438099149999999!3d3.8689867!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x108bcf7a309a7977%3A0x7f614b5c1a3f3c73!2sYaound%C3%A9%2C%20Cameroun!5e0!3m2!1sfr!2scm!4v1712650000000!5m2!1sfr!2scm"
                        width="100%"
                        height="100%"
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                        title="Localisation INSIDE COMMERCIAL SARL — Yaoundé, Cameroun">
                    </iframe>
                </div>
            </div>

            {{-- Right: form --}}
            <div class="lg:col-span-3">
                <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-8">

                    @if(session('success'))
                    <div class="mb-6 bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-xl text-sm">
                        {{ session('success') }}
                    </div>
                    @endif

                    <form action="{{ route('contact.send') }}" method="POST" class="space-y-5">
                        @csrf

                        <div class="grid sm:grid-cols-2 gap-5">
                            <div>
                                <label class="block text-sm font-medium text-slate-700 mb-1.5">Nom complet</label>
                                <input type="text" name="nom" placeholder="Votre nom"
                                       value="{{ old('nom') }}"
                                       class="w-full border border-slate-200 rounded-xl px-4 py-3 text-sm text-slate-900 placeholder-slate-400 focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-50 transition-colors @error('nom') border-red-400 @enderror">
                                @error('nom')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-slate-700 mb-1.5">Entreprise</label>
                                <input type="text" name="entreprise" placeholder="Nom de l'entreprise"
                                       value="{{ old('entreprise') }}"
                                       class="w-full border border-slate-200 rounded-xl px-4 py-3 text-sm text-slate-900 placeholder-slate-400 focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-50 transition-colors">
                            </div>
                        </div>

                        <div class="grid sm:grid-cols-2 gap-5">
                            <div>
                                <label class="block text-sm font-medium text-slate-700 mb-1.5">Email</label>
                                <input type="email" name="email" placeholder="votre@email.com"
                                       value="{{ old('email') }}"
                                       class="w-full border border-slate-200 rounded-xl px-4 py-3 text-sm text-slate-900 placeholder-slate-400 focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-50 transition-colors @error('email') border-red-400 @enderror">
                                @error('email')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-slate-700 mb-1.5">Téléphone</label>
                                <input type="tel" name="telephone" placeholder="+237 ..."
                                       value="{{ old('telephone') }}"
                                       class="w-full border border-slate-200 rounded-xl px-4 py-3 text-sm text-slate-900 placeholder-slate-400 focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-50 transition-colors">
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-1.5">Objet</label>
                            <input type="text" name="objet" placeholder="Ex : Demande de devis pour plâtre de construction"
                                   value="{{ old('objet') }}"
                                   class="w-full border border-slate-200 rounded-xl px-4 py-3 text-sm text-slate-900 placeholder-slate-400 focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-50 transition-colors @error('objet') border-red-400 @enderror">
                            @error('objet')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-1.5">Message</label>
                            <textarea name="message" rows="5" placeholder="Décrivez votre besoin..."
                                      class="w-full border border-slate-200 rounded-xl px-4 py-3 text-sm text-slate-900 placeholder-slate-400 focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-50 transition-colors resize-none @error('message') border-red-400 @enderror">{{ old('message') }}</textarea>
                            @error('message')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                        </div>

                        <button type="submit"
                                class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-4 rounded-xl transition-colors duration-200 text-sm">
                            Envoyer le message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

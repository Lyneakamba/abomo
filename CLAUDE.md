# Projet : Site Vitrine — INSIDE COMMERCIAL SARL

## Contexte métier
INSIDE COMMERCIAL SARL est une société camerounaise (groupe THE INSIDE GROUP, créé en 2023)
spécialisée dans la distribution de produits à base de gypse/plâtre.
Partenaire stratégique : AL ALAMIA (Égypte), leader de la production de plâtre depuis 2005.

## Sources de référence
| Source | Rôle | Emplacement |
|--------|------|-------------|
| Maquettes visuelles | Design, couleurs, layout, structure | `public/maquetes/` |
| Contenu commercial | Textes officiels, descriptions produits | `public/content/INSIDE_COMMERCIAL_SITE.docx` |

> Pour lire le DOCX : `pandoc public/content/INSIDE_COMMERCIAL_SITE.docx -t markdown`

## Produits à présenter (contenu du DOCX)
1. **MEGA GYPSE** — enduit en couches minces (≤4mm) sur béton, surface finale sans peinture
2. **HOOK (Crochet)** — pâte de plâtre haute qualité, finition, 2mm/couche, intérieur/extérieur
3. **GOHARET SINAI BRONZE** — plâtre blanc séchage rapide (prise 5–8 min / final 9–15 min), moulage décoratif
4. **GOHARET SINAI SAPHIR** — plâtre blanc séchage lent (prise 12–15 min / final 23–29 min), grandes surfaces
5. **HAMMER (Marteau)** — mortier prêt à l'emploi sur briques, jusqu'à 8cm/couche, résistant humidité/feu

## Stack technique
- Framework : Laravel 11
- Templating : Blade
- CSS : Tailwind CSS v3
- JS : Alpine.js (interactions légères uniquement)
- Assets : Vite
- Commandes : `php artisan serve` | `npm run dev` | `npm run build`

## Structure des vues
- Vues : `resources/views/`
- Composants : `resources/views/components/`
- Layout principal : `resources/views/layouts/app.blade.php`
- Images/assets : `public/assets/`

## Règles de design
- Respecter exactement les couleurs des maquettes (extraire les hex depuis les images)
- Respecter les typographies visibles dans les maquettes
- En cas d'incohérence visuelle dans une maquette : ajuster intelligemment sans trahir l'esprit
- Mobile-first, site entièrement responsive

## Règles de contenu
- Utiliser les textes du DOCX tels quels, sans les reformuler
- Ne pas inventer de sections absentes des maquettes
- Ne pas modifier les noms de produits ni leurs caractéristiques techniques

## Ce que Claude NE doit PAS faire
- Utiliser Bootstrap ou d'autres frameworks CSS non mentionnés
- Reformuler ou résumer les textes officiels du DOCX
- Inventer du contenu absent des deux sources de référence
- Créer du JS complexe si Alpine.js suffit

## Workflow attendu
1. Lister `public/maquetes/` pour voir toutes les maquettes disponibles
2. Analyser chaque maquette (couleurs, sections, composants réutilisables)
3. Lire le contenu du DOCX via pandoc
4. Créer le layout Blade de base
5. Intégrer section par section en croisant maquette + contenu DOCX
6. Valider le responsive à chaque étape
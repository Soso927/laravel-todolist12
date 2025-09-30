<!DOCTYPE html>
<!-- Déclare le type de document HTML5 -->

<html lang="fr">
<!-- Élément racine de la page avec l’attribut lang pour la langue (français) -->

<head>
    <meta charset="utf-8">
    <!-- Définit l’encodage des caractères en UTF-8 -->

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Assure un rendu responsive : largeur égale à celle de l’écran et zoom initial 1 -->

    <title>Mes tâches</title>
    <!-- Titre de l’onglet/du navigateur -->

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Directive Blade pour charger les assets via Vite :
         - app.css (feuilles de style)
         - app.js (scripts JavaScript) -->
</head>
<header class="relative">
<body class="min-h-screen bg-[url('/images/background.png')] bg-cover bg-center text-white">

  <header class="relative">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

      <div class="flex items-center gap-6 pt-6">

        <a href="../#accueil" class="shrink-0 inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/10 ring-1 ring-white/20">
          <img src="{{ asset('images/Logo.png') }}" alt="">
          <span class="sr-only">Accueil</span>
        </a>

        <div class="h-px flex-1 bg-white/20"></div>
    <div class="max-w-xl lg:ml-6">
    </div>
        <nav
          class="relative rounded-l-2xl bg-slate-900/60 backdrop-blur-md ring-1 ring-white/10
                 pl-10 pr-8 py-4"
        >
          <ul class="flex items-center gap-10 text-sm tracking-[0.2em] uppercase">
            <li>
              <a href="#accueil"
                 class="group inline-flex items-center gap-3 pb-2 border-b-2 border-transparent hover:border-white/50 transition">
                <span class="font-semibold text-white/60 group-hover:text-white">00</span>
                <span class="font-medium">Accueil</span>
              </a>
            </li>

            <li>
              <a href="#destination"
                 class="is-active group inline-flex items-center gap-3 pb-2 border-b-2 border-white transition">
                <span class="font-semibold text-white/90">01</span>
                <span class="font-medium">Destination</span>
              </a>
            </li>

            <li>
              <a href="#equipage"
                 class="group inline-flex items-center gap-3 pb-2 border-b-2 border-transparent hover:border-white/50 transition">
                <span class="font-semibold text-white/60 group-hover:text-white">02</span>
                <span class="font-medium">Équipage</span>
              </a>
            </li>

            <li>
              <a href="#technologie"
                 class="group inline-flex items-center gap-3 pb-2 border-b-2 border-transparent hover:border-white/50 transition">
                <span class="font-semibold text-white/60 group-hover:text-white">03</span>
                <span class="font-medium">Technologie</span>
              </a>
            </li>
          </ul>

          <span class="pointer-events-none absolute bottom-0 left-1/2 -translate-x-1/2 w-24 h-[2px] bg-white"></span>
        </nav>
      </div>
    </div>
  </header>

</body>

</header>
<main>


<!-- Corps de la page avec un arrière-plan gris clair (classe Tailwind) -->
    <x-header />
    <div class="container mx-auto p-4 max-w-4xl">
    <!-- Conteneur centré :
         - mx-auto : marge horizontale automatique
         - p-4 : padding (espacement intérieur) de 1rem
         - max-w-4xl : largeur maximale définie à l’équivalent 56rem -->

<h1 class="text-2xl font-bold mb-4">
  <span class="text-white/60 group-hover:text-white">01</span>
  Choisissez votre Destination
</h1>
        <!-- Titre principal de la page :
             - text-2xl : taille de police plus grande (≈1.5rem)
             - font-bold : texte en gras
             - mb-4 : marge inférieure de 1rem
             -  $title  : injection de la variable $title du composant Blade -->

        
        <!-- Espace réservé au contenu enfant injecté dans ce layout -->
    </div>
    <nav>
    <img src="{{ asset('') }}" alt="">
  <div class=" justify-center "></div>
      <div class="flex justify-start">
        <img
          src="{{ asset('images/planete-lune.png') }}"
          alt="Lune"
          class="w-[300px] sm:w-[420px] lg:w-[520px] aspect-square rounded-full object-cover shadow-[0_0_120px_rgba(255,255,255,0.08)]"
        />
      </div>

<ul class="flex items-center gap-10 text-sm tracking-[0.2em] uppercase">
    
            <li>
              <a href="#lune"
                 class="group inline-flex items-center gap-3 pb-2 border-b-2 border-transparent hover:border-white/50 transition">
                <span class="font-medium">Lune</span>
              </a>
            </li>

            <li>
              <a href="#Europe"
                 class="is-active group inline-flex items-center gap-3 pb-2 border-b-2 border-white transition">
                <span class="font-medium">Mars</span>
              </a>
            </li>

            <li>
              <a href="#Europe"
                 class="group inline-flex items-center gap-3 pb-2 border-b-2 border-transparent hover:border-white/50 transition">
                <span class="font-medium">Europe</span>
              </a>
            </li>

            <li>
              <a href="#technologie"
                 class="group inline-flex items-center gap-3 pb-2 border-b-2 border-transparent hover:border-white/50 transition">
                <span class="font-medium">Titan</span>
              </a>
            </li>
          </ul>
    <H1 class="text-2xl font-bold mb-4"> LUNE </H1>



</nav>
</main>
</body>
</html>

    <!-- Knowing is not enough; we must apply. Being willing is not enough; we must do. - Leonardo da Vinci -->

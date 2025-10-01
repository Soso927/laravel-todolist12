<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destinations</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<!-- corps de la page -->
<body class="min-h-screen bg-[url('/images/background.png')] bg-cover bg-center text-white">
     <!-- Mise en place du header  -->
    <header class="relative">
        <div id="logo" class="flex items-center gap-6 pt-6">
        <!-- Logo (Accueil) -->
        <a href="#accueil"
           class="shrink-0 inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/10 ring-1 ring-white/20"
           aria-label="Aller à l’accueil">
          <img src="{{ asset('images/Logo.png') }}" alt="Logo du site" class="w-6 h-6" />
        </a>
        </div>

        <!-- trait séparateur -->
        <div class="h-px flex-1 bg-white/20"></div>

        <!-- Barre de navigation -->
        <div id="navigation-header">
           
        <nav aria-label="Navigation principale"
             class="relative rounded-l-2xl bg-slate-900/60 backdrop-blur-md ring-1 ring-white/10 pl-10 pr-8 py-4">
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
                 aria-current="page"
                 class="group inline-flex items-center gap-3 pb-2 border-b-2 border-white transition">
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


            
        </div>
    </header>

    <!-- contenu principal -->
    <main>
        <nav>
            <div id="texte">

            </div>


        </nav>
        <div id="image">

        </div>
        <div id="presentation">

        </div>

    </main>

</body>
</html>
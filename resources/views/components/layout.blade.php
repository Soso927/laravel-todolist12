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

<body class="bg-gray-100">
<!-- Corps de la page avec un arrière-plan gris clair (classe Tailwind) -->
    <x-header />
    <div class="container mx-auto p-4 max-w-4xl">
    <!-- Conteneur centré :
         - mx-auto : marge horizontale automatique
         - p-4 : padding (espacement intérieur) de 1rem
         - max-w-4xl : largeur maximale définie à l’équivalent 56rem -->

        <h1 class="text-2xl font-bold mb-4">{{ $title }}</h1>
        <!-- Titre principal de la page :
             - text-2xl : taille de police plus grande (≈1.5rem)
             - font-bold : texte en gras
             - mb-4 : marge inférieure de 1rem
             - {{ $title }} : injection de la variable $title du composant Blade -->

        {{ $slot }}
        <!-- Espace réservé au contenu enfant injecté dans ce layout -->
    </div>

</body>
</html>

    <!-- Knowing is not enough; we must apply. Being willing is not enough; we must do. - Leonardo da Vinci -->

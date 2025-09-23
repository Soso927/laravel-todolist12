<!-- Composant Blade personnalisé pour afficher un label -->
<label for="{{ $for }}" class="block text-gray-700">
    {{ $label }}
</label>
{{-- 
    – for="{{ $for }}" : relie le label à l’élément de formulaire dont l’id est contenu dans la variable $for 
    – class="block text-gray-700" : Tailwind : bloc (affichage en ligne séparé) et texte gris foncé
    – {{ $label }} : texte du label passé en paramètre (ex. “Titre :” ou “Détail :”)
-->


<!-- Bloc pour le champ “Titre” -->
<div class="mb-4">
    <x-label for="title" label="Titre :" />
    {{-- 
        – Inclusion du composant <x-label> défini ci-dessus 
        – for="title" : cible l’input id="title"
        – label="Titre :" : le texte qui apparaitra dans le <label>
    --}}

    <input
        type="text"
        id="title"
        name="title"
        class="w-full px-3 py-2 border rounded"
        value="{{ old('title') }}"
        required
    >
    {{-- 
        – type="text" : champ texte 
        – id/name="title" : identifiant et nom pour la requête 
        – class="w-full px-3 py-2 border rounded" : Tailwind pour une largeur pleine, padding, bordure et coins arrondis 
        – value="{{ old('title') }}" : conserve la valeur entrée précédemment si validation échoue 
        – required : champ obligatoire 
    --}}

    <x-error field="title" />
    {{-- 
        – Composant <x-error> qui affiche, s’il existe, le message d’erreur de validation pour le champ “title” 
    --}}
</div>


<!-- Bloc pour le champ “Détail” -->
<div class="mb-4">
    <x-label for="detail" label="Détail :" />
    {{-- 
        – for="detail" : cible la textarea id="detail" 
        – label="Détail :" : texte affiché
    --}}

    <textarea
        id="detail"
        name="detail"
        class="w-full px-3 py-2 border rounded"
        required
    >{{ old('detail') }}</textarea>
    {{-- 
        – <textarea> : zone de texte multilignes 
        – old('detail') : conserve la saisie précédente 
        – classes Tailwind similaires à l’input pour l’apparence 
        – required : champ obligatoire 
    --}}

    <x-error field="detail" />
    {{-- 
        – Affichage du message d’erreur de validation pour “detail” le cas échéant 
    --}}
</div>

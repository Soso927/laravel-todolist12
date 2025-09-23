@error($field) 
{{-- Ouvre une directive Blade qui ne s’exécute que si une erreur de validation existe pour la variable $field --}}
    <div class="mt-3 mb-4 list-disc list-inside text-sm text-red-600">
        {{ $message }} 
        {{-- Affiche automatiquement le message d’erreur associé au champ en cours (populé par la validation Laravel) --}}
    </div>
@enderror 
{{-- Ferme la directive @error, tout ce qui est entre @error et @enderror n’apparaît qu’en cas d’erreur --}}

<!-- Titre -->
<div class="mb-4">
    <label for="title" class="block text-gray-700">Titre :</label>
    {{-- Label associé à l’input via for="title" --}}
    <input
        type="text"
        id="title"
        name="title"
        class="w-full px-3 py-2 border rounded"
        value="{{ old('title') }}"
        required
    >
    {{-- old('title') préserve la saisie précédente en cas d’erreur --}}
    <x-error field="title" />
    {{-- Inclusion d’un composant Blade personnalisé <x-error>
        qui encapsule exactement le même comportement que @error('title')…@enderror
        : il affiche le message d’erreur pour 'title' si besoin --}}
</div>

<!-- Détail -->
<div class="mb-4">
    <label for="detail" class="block text-gray-700">Détail :</label>
    {{-- Label pour la textarea --}}
    <textarea
        id="detail"
        name="detail"
        class="w-full px-3 py-2 border rounded"
        required
    >{{ old('detail') }}</textarea>
    {{-- old('detail') conserve le texte saisi avant validation --}}
    <x-error field="detail" />
    {{-- Réutilisation du composant <x-error> pour afficher l’erreur du champ 'detail' --}}
</div>

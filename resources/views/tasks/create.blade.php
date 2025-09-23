<x-layout>
    <!-- Début du composant de mise en page générique -->
    <x-slot:title>
        Créer une tâche
    </x-slot:title>
    <!-- Définition du titre de la page dans le layout -->

    <!-- Message de réussite -->
    @if (session()->has('message'))
        <!-- Si la session contient une clé "message", on affiche son contenu -->
        <div class="mt-3 mb-4 list-disc list-inside text-sm text-green-600">
            {{ session('message') }}
        </div>
    @endif

    <!-- Formulaire de création de tâche -->
    <form action="{{ route('tasks.store') }}" method="post">
        @csrf
        <!-- Génère un token CSRF pour sécuriser le formulaire -->

        <!-- Champ : Titre de la tâche -->
        <div class="mb-4">
            <label for="title" class="block text-gray-700">Titre :</label>
            <!-- Label lié à l’input via l’attribut for/id -->
            <input
                type="text"
                id="title"
                name="title"
                class="w-full px-3 py-2 border rounded"
                value="{{ old('title') }}"
                required
            >
            <!-- value="{{ old('title') }}" : conserve l’ancienne saisie en cas d’erreur de validation -->

            @error('title')
                <!-- Si une erreur de validation existe pour "title", on l’affiche -->
                <div class="mt-3 mb-4 list-disc list-inside text-sm text-red-600">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <!-- Champ : Détail de la tâche -->
        <div class="mb-4">
            <label for="detail" class="block text-gray-700">Détail :</label>
            <!-- Zone de texte pour la description détaillée -->
            <textarea
                id="detail"
                name="detail"
                class="w-full px-3 py-2 border rounded"
                required
            >{{ old('detail') }}</textarea>
            <!-- old('detail') : conserve la saisie précédente en cas d’erreur -->

            @error('detail')
                <!-- Affichage de l’erreur de validation pour "detail" -->
                <div class="mt-3 mb-4 list-disc list-inside text-sm text-red-600">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <!-- Bouton de soumission -->
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">
            Envoyer
        </button>
    </form>
</x-layout>

@error($field) 
{{-- Ouvre une directive Blade qui ne s’exécute que si une erreur de validation existe pour la variable $field --}}
    <div class="mt-3 mb-4 list-disc list-inside text-sm text-red-600">
        {{ $message }} 
        {{-- Affiche automatiquement le message d’erreur associé au champ en cours (populé par la validation Laravel) --}}
    </div>
@enderror 
{{-- Ferme la directive @error, tout ce qui est entre @error et @enderror n’apparaît qu’en cas d’erreur --}}

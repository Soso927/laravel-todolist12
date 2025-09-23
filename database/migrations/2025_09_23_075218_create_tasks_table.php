<?php

use Illuminate\Database\Migrations\Migration;   // Import de la classe de base pour les migrations
use Illuminate\Database\Schema\Blueprint;     // Import du schéma Blueprint pour définir les colonnes
use Illuminate\Support\Facades\Schema;         // Import du façade Schema pour manipuler la base

// Déclaration d'une classe anonyme qui étend Migration
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Création de la table 'tasks'
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();                         // Clé primaire auto-incrémentée 'id'
            $table->timestamps();                 // Colonnes 'created_at' et 'updated_at'
            $table->string('title');              // Colonne VARCHAR(255) 'title'
            $table->text('detail');               // Colonne TEXT 'detail'
            $table->boolean('state')              // Colonne BOOL 'state'
                  ->default(false);              // Valeur par défaut = false (0)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Suppression de la table 'tasks' si elle existe
        Schema::dropIfExists('tasks');
    }
};

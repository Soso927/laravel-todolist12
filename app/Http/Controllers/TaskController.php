<?php

namespace App\Http\Controllers;        
// Déclare l’espace de noms (namespace) de ce contrôleur.
// Par convention, tous les contrôleurs se trouvent dans App\Http\Controllers.

use Illuminate\Http\Request;        
// Importe la classe Request de Laravel, qui encapsule les données HTTP 
// (input, fichiers, cookies, headers, etc.).

use illuminate\View\View;

use Illuminate\Http\RedirectResponse;
use App\Models\Task;



class TaskController extends Controller  
// Déclaration de la classe TaskController qui hérite de la classe de base Controller.
// Vous pourrez y définir la logique métier liée aux “tasks”.
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Méthode pour afficher la liste de toutes les tâches.
        // On y récupérera généralement Task::all() ou avec pagination.
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Méthode pour afficher le formulaire de création d’une nouvelle tâche.
        // On retournera typiquement une vue : return view('tasks.create');
         return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):RedirectResponse
    {
        // Méthode pour traiter la soumission du formulaire de création.
        // $request contient toutes les données validées.
        // Ex. :
        // $data = $request->validate([...]);
        // Task::create($data);
        // return redirect()->route('tasks.index');
            $data = $request->validate([
            'title' => 'required|max:100',
            'detail' => 'required|max:500',
        ]);
        $task = new Task;
        $task->title = $request->title;
        $task->detail = $request->detail;
        $task->save();
        return back()->with('message', "La tâche a bien été créée !");
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Méthode pour afficher une tâche précise identifiée par $id.
        // Ex. :
        // $task = Task::findOrFail($id);
        // return view('tasks.show', compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Méthode pour afficher le formulaire d’édition d’une tâche existante.
        // Ex. :
        // $task = Task::findOrFail($id);
        // return view('tasks.edit', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Méthode pour traiter la soumission du formulaire d’édition.
        // Ex. :
        // $data = $request->validate([...]);
        // $task = Task::findOrFail($id);
        // $task->update($data);
        // return redirect()->route('tasks.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Méthode pour supprimer la tâche identifiée par $id.
        // Ex. :
        // $task = Task::findOrFail($id);
        // $task->delete();
        // return redirect()->route('tasks.index');
    }
}

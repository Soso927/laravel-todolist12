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
     * Afficher la liste des ressources 
     */
    public function index()
    {
        // Méthode pour afficher la liste de toutes les tâches.
        // On y récupérera généralement Task::all() ou avec pagination.
        $tasks = Task::all();
        return view ('tasks.index', compact('tasks'));
    }

    /**
     * Afficher le formulaire permettant de créer une nouvelle ressource
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
     * Afficher la ressource spécifié
     */
    public function show(Task $task)
    {
        // Méthode pour afficher une tâche précise identifiée par $id.
        // Ex. :
        // $task = Task::findOrFail($id);
        // return view('tasks.show', compact('task'));
        return view ('tasks.show', compact('task'));
    }

    /**
     * Afficher le formulaire permettant de modifier la ressource spécifiée 
     */
    public function edit(Task $task):View
    {
        // Méthode pour afficher le formulaire d’édition d’une tâche existante.
        // Ex. :
        // $task = Task::findOrFail($id);
        // return view('tasks.edit', compact('task'));
         return view('tasks.edit', compact('task'));
    }

    /**
     * Mise à jour de la ressource spécifié dans le stockage 
     */
    public function update(Request $request, Task $task)
    {
        // Méthode pour traiter la soumission du formulaire d’édition.
        // Ex. :
        // $data = $request->validate([...]);
        // $task = Task::findOrFail($id);
        // $task->update($data);
        // return redirect()->route('tasks.show', $id);
       // On valide les données envoyées dans la requête
// "title" est obligatoire et limité à 100 caractères
// "detail" est obligatoire et limité à 500 caractères
$data = $request->validate([
    'title' => 'required|max:100',
    'detail' => 'required|max:500',
]);

// On assigne la valeur du champ "title" de la requête à la propriété "title" de l'objet $task
$task->title = $request->title;

// On assigne la valeur du champ "detail" de la requête à la propriété "detail" de l'objet $task
$task->detail = $request->detail;

// On vérifie si la requête contient le champ "state"
// Si oui, $task->state = true, sinon = false
$task->state = $request->has('state');

// On sauvegarde les modifications dans la base de données
$task->save();

// On renvoie l'utilisateur à la page précédente
// avec un message flash indiquant que la tâche a été modifiée
return back()->with('message', "La tâche a bien été modifiée !");
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task) : RedirectResponse
    {
        // Méthode pour supprimer la tâche identifiée par $id.
        // Ex. :
        // $task = Task::findOrFail($id);
        // $task->delete();
        // return redirect()->route('tasks.index');
        $task->delete();
        return redirect()->route('tasks.index');;
    }
}

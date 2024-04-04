<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{

    public function index()
    {
        $tasks = auth()->user()->tasks;
        return view('tasks.index', compact('tasks'));
    }

    public function create()
    {
        return view('tasks.create');
    }


    
    public function store(Request $request)
{
    $rules = [
        'title'=> 'required|max:30',
        'note'=>'nullable|string|max:30',
    ];

    // Definisco i messaggi di errore personalizzati
    $messages = [
        'title.required' => 'Il campo Titolo è obbligatorio.',
        'title.max' => 'Nel campo Titolo puoi scrivere massimo 30 caratteri',
        'note.max' => 'Nel campo Note puoi scrivere massimo 30 caratteri',
    ];

    $validatedData = $request->validate($rules, $messages);

    // Crea una nuova attività associata all'utente autenticato
    auth()->user()->tasks()->create([
        'title' => $validatedData['title'],
        'note' => $validatedData['note'],
    ]);

    // Esegui eventuali altre azioni (reindirizzamenti, ecc.)
    return redirect()->route('tasks.index');
}


    public function complete(Task $task)
    {
        // Segna l'attività come completata
        $task->completed = true;
        $task->save();

        return redirect()->route('tasks.index');
    }
}

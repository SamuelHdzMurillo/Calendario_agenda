<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    // Listar todos los eventos
    public function index()
    {
        return response()->json(Event::all(), 200);
    }

    // Guardar un nuevo evento
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'start_date' => 'required|date|before:end_date',
            'end_date' => 'required|date|after:start_date',
        ]);

        $event = Event::create($validated);

        return response()->json($event, 201);
    }

    // Mostrar un evento específico
    public function show(Event $event)
    {
        return response()->json($event, 200);
    }

    // Actualizar un evento
    public function update(Request $request, Event $event)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'start_date' => 'required|date|before:end_date',
            'end_date' => 'required|date|after:start_date',
        ]);

        $event->update($validated);

        return response()->json($event, 200);
    }

    // Eliminar un evento
    public function destroy(Event $event)
    {
        $event->delete();

        return response()->json(['message' => 'Event deleted successfully'], 200);
    }
}

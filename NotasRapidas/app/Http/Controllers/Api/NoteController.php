<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Note;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function index(): JsonResponse
    {
        $notes = Note::all();
        return response()->json([
            'success' => true,
            'data'    => $notes,
            'total'   => $notes->count(),
        ], 200);
    }

    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'note_content' => 'required|string|max:250',
        ]);

        $note = Note::create($validated);

        return response()->json([
            'success' => true,
            'message' => 'Nota creada exitosamente.',
            'data'    => $note,
        ], 201);
    }

    public function show(Note $note): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data'    => $note,
        ], 200);
    }

    public function update(Request $request, Note $note): JsonResponse
    {
        $validated = $request->validate([
            'note_content' => 'required|string|max:250',
        ]);

        $note->update($validated);

        return response()->json([
            'success' => true,
            'message' => 'Nota actualizada correctamente.',
            'data'    => $note->fresh(),
        ], 200);
    }

    public function destroy(Note $note): JsonResponse
    {
        $note->delete();

        return response()->json([
            'success' => true,
            'message' => 'Nota eliminada correctamente.',
        ], 200);
    }
}
<?php

 namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserResponse;
use Carbon\Carbon;

class UserResponseController extends Controller
{
    public function store(Request $request)
    {
        $response = new UserResponse();
        $response->responses = $request->responses;
        $response->analysis = $this->analyzeResponses($request->responses);
        $response->visited_at = Carbon::now();
        $response->save();

        return response()->json($response, 201);
    }

    private function analyzeResponses($responses)
    {
        // Logique d'analyse basée sur les réponses
        // Retourne un texte d'analyse
        return "Analyse basée sur les réponses fournies.";
    }
}

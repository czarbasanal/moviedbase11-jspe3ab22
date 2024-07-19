<?php


namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Actor;
use Illuminate\Http\Request;

class ActorController extends Controller
{
    public function index()
    {
        return response()->json(Actor::with('movies')->get());
    }

    public function show($id)
    {
        return response()->json(Actor::with('movies')->findOrFail($id));
    }
}

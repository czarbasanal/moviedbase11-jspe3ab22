<?php


namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Director;
use Illuminate\Http\Request;

class DirectorController extends Controller
{
    public function index()
    {
        return response()->json(Director::with('movies')->get());
    }

    public function show($id)
    {
        return response()->json(Director::with('movies')->findOrFail($id));
    }
}

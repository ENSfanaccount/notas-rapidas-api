<?php

namespace App\Http\Controllers;
use App\Models\Character;
use App\Models\Universe;
use Illuminate\Http\Request;

class SuperHeroController extends Controller
{
    public function index() {
        $characters = Character::with('universe')->get();
        return view('index', compact('characters'));
    }
}

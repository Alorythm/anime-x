<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
        $anime = file_get_contents('https://api.jikan.moe/v4/top/anime');
        $anime = json_decode($anime);
        $anime = $anime->data;
        return view('welcome', compact('anime'));
    }

    public function show($id)
    {
        $anime = file_get_contents("https://api.jikan.moe/v4/anime/{$id}");
        $anime = json_decode($anime);
        $anime = $anime->data;

        $characters = file_get_contents("https://api.jikan.moe/v4/anime/{$id}/characters");
        $characters = json_decode($characters);
        $characters = $characters->data;

        return view('show', compact('anime', 'characters'));
    }
}

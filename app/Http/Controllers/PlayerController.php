<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    // Pastikan method index sudah ada
    public function index()
    {
        // Mengambil semua data pemain dari database
        $players = Player::all();

        // Mengirim data pemain ke view players/index
        return view('players.index', compact('players'));
    }
}

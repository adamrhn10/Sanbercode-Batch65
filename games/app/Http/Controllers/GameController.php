<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\carbon;

class GameController extends Controller
{
    public function create()
    {
        return view('controller.tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'min:5'],
            'gameplay' => ['required'],
            'developer' => ['required'],
            'year' => ['required']
        ]);
        $now = Carbon::now();

        DB::table('game')->insert([
            'name' => $request->input("name"),
            'gameplay' => $request->input("gameplay"),
            'developer' => $request->input("developer"),
            'year' => $request->input("year"),
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        return redirect('/controller');
    }

    public function index()
    {
        $game   = DB::table('game')->get();
        return view('controller.tampil', ['game' => $game]);
    }

    public function show($id)
    {
        $games = DB::table('game')->find($id);
        return view('controller.show', ['game' => $games]);
    }
}

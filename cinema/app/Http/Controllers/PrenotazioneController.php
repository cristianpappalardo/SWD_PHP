<?php

namespace App\Http\Controllers;

use App\Models\Prenotazione;
use Illuminate\Http\Request;

class PrenotazioneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prenotazioni = Prenotazione::all();
        return view('prenotazioni.index', compact('prenotazioni'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Prenotazione $prenotazione)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prenotazione $prenotazione)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Prenotazione $prenotazione)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prenotazione $prenotazione)
    {
        //
    }
}

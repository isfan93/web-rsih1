<?php

namespace App\Http\Controllers;

use App\Models\Rekanan;
use App\Http\Requests\StoreRekananRequest;
use App\Http\Requests\UpdateRekananRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class RekananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRekananRequest $request): RedirectResponse
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Rekanan $rekanan): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rekanan $rekanan): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRekananRequest $request, Rekanan $rekanan): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rekanan $rekanan): RedirectResponse
    {
        //
    }
}

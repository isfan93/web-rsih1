<?php

namespace App\Http\Controllers;

use App\Models\Ctscan;
use App\Http\Requests\StoreCtscanRequest;
use App\Http\Requests\UpdateCtscanRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class CtscanController extends Controller
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
    public function store(StoreCtscanRequest $request): RedirectResponse
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Ctscan $ctscan): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ctscan $ctscan): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCtscanRequest $request, Ctscan $ctscan): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ctscan $ctscan): RedirectResponse
    {
        //
    }
}

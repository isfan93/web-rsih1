<?php

namespace App\Http\Controllers;

use App\Models\Ranap;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class RanapController extends Controller
{
    public function all_ranap($id)
    {
        $ranap = Ranap::all();
        $ranap_view = Ranap::find($id);
        return view('ranap.ranap', ['ranap' => $ranap_view, 'ranap_lay' => $ranap]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Gizi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GiziController extends Controller
{
    public function all_menu()
    {
        $all_menu = Gizi::all();
        return view('gizi', ['gizi' => $all_menu]);
    }
}

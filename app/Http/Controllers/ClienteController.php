<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function overview2()
    {
        $clientes = Cliente::all();
        return view('dashboard-overview-2-page', compact('clientes'));
    }

}

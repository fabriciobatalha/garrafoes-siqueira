<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\clientes;

class ClientesController extends Controller
{
    public function index()
    {
        return clientes::all();
    }

  
    public function store(Request $request)
    {
        
    }

  
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

  
    public function destroy($id)
    {
        //
    }
}

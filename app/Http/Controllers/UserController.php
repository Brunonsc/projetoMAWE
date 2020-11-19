<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuario;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = usuario::all();
        return view('index', ['usuarios' => $usuarios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $usuario = new Usuario();
        $usuario->nome = $request->nome;
        $usuario->email = $request->email;
        $usuario->telefone = $request->telefone;

        $usuario->save();
        return redirect()->route("user.create");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function edit(usuario $usuarios) {
        return view('user.edit', ['usuarios' => $usuarios]);
    }

    public function update(Request $request, usuario $usuarios) {
        $usuarios->nome = $request->nome;
        $usuarios->email = $request->email;
        $usuarios->telefone = $request->telefone;

        $usuarios->save();
        return redirect()->route("user.home");
    }

    public function delete(usuario $usuarios) {
        $usuarios->delete();
        return redirect()->route("user.home");
    }
}

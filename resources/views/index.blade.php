@extends('layout.template')
@section('title','index')
@section('container')
<div class="container">
    <h1 class="mb-3">Controle de usuarios</h1>

    <a href="{{route('user.create')}}" type="button" class="btn btn-success m-3"><i class="fas fa-plus"></i> Novo usuario</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">E-mail</th>
                <th scope="col">Telefone</th>
                <th scope="col" class="text-center">Opções</th>
            </tr>
        </thead>
        <tbody>
            @foreach($usuarios as $dadosUsuarios)
            <tr>
                <td>{{$dadosUsuarios->nome}}</td>
                <td>{{$dadosUsuarios->email}}</td>
                <td>{{$dadosUsuarios->telefone}}</td>
                <td class="text-center">
                <a href="{{route('user.edit', $dadosUsuarios)}}" type="button" class="btn btn-primary btn-sm"><i class="fas fa-edit text-light"></i> Atualizar</a>  
                    <a href="{{route('user.delete', $dadosUsuarios)}}" type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash text-light"></i> Excluir</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
@extends('layout.template')
@section('title', 'Cadastrar')
@section('container')
<div class="container">
  <div class="row">
    <div class="col-3"></div>
    <div class="col-6">
      <h1 class="mb-5">Cadastro de usuarios</h1>
      <form method="POST" action="{{route('user.store')}}">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Nome do usuario</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nome" placeholder="Nome de usuario">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Endereço de E-mail</label>
          <input type="email" class="form-control" id="exampleInputPassword1" name="email" placeholder="email@exemplo.com">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Telefone</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="telefone" placeholder="(21) 9999-9999">
        </div>
        <button type="submit" class="btn btn-primary container-fluid mt-4">Cadastrar</button>
      </form>
    </div>
    <div class="col-3"></div>
  </div>
</div>
@endsection

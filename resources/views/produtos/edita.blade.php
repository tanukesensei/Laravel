@extends('layout.principal')

@section('conteudo')

<h1>Editar produto</h1>

<form class="" action="{{action('ProdutoController@update', $p->id)}}" method="post">
  {!! method_field('put') !!}
  <input type="hidden" name="_token" value="{{{ csrf_token() }}}">

  <div class="form-group">
    <label for="">Nome</label>
    <input type="text" name="nome" value="{{$p->nome}}" class="form-control">
  </div>
  <div class="form-group">
    <label for="">Descricao</label>
    <input type="text" name="descricao" value="{{$p->descricao}}" class="form-control">
  </div>
  <div class="form-group">
    <label for="">Valor</label>
    <input type="text" name="valor" value="{{$p->valor}}" class="form-control">
  </div>
  <div class="form-group">
    <label for="">Quantidade</label>
    <input type="number" name="quantidade" value="{{$p->quantidade}}" class="form-control">
  </div>
  <button type="submit" class="btn btn-primary btn-block">Atualuzar</button>
</form>

@stop

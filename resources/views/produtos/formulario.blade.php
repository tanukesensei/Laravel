  @extends('layout.principal')

  @section('conteudo')

  <h1>Novo produto</h1>

  <form class="" action="/produtos/adiciona" method="post">

    <input type="hidden" name="_token" value="{{{ csrf_token() }}}">

    <div class="form-group">
      <label for="">Nome</label>
      <input type="text" name="nome" value="" class="form-control">
    </div>
    <div class="form-group">
      <label for="">Descricao</label>
      <input type="text" name="descricao" value="" class="form-control">
    </div>
    <div class="form-group">
      <label for="">Valor</label>
      <input type="text" name="valor" value="" class="form-control">
    </div>
    <div class="form-group">
      <label for="">Quantidade</label>
      <input type="number" name="quantidade" value="" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary btn-block">Submit</button>
  </form>

  @stop

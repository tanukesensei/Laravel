<?php

namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;
use estoque\Produto;
use Request;

/**
*
*/
class ProdutoController extends Controller
{

	public function lista() {

		$produtos = Produto::all();
		return view('produtos.listagem', ['produtos' => $produtos]);
	}

	public function mostra($id){
		$resposta = Produto::find($id);
		if(empty($resposta)) {
			return "Esse produto não existe";
		}
		return view('produtos.detalhes')->with('p', $resposta);
	}

	public function novo() {
		return view('produtos.formulario');
	}

	public function adiciona() {
		$nome  = Request::input('nome');
		$valor  = Request::input('valor');
		$descricao  = Request::input('descricao');
		$quantidade  = Request::input('quantidade');

		DB::insert('INSERT INTO produtos
			(nome, valor, descricao, quantidade) values (?,?,?,?)',
			array($nome, $valor, $descricao, $quantidade));

		return redirect()
				->action('ProdutoController@lista')
				->withInput(Request::only('nome'));
	}

	public function listaJson() {
		$produtos = Produto::all();
		return response()->json($produtos	);
	}

}
 ?>

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
		Produto::create(Request::all());

		return redirect()
				->action('ProdutoController@lista')
				->withInput(Request::only('nome'));
	}

	public function listaJson() {
		$produtos = Produto::all();
		return response()->json($produtos	);
	}

	public function remove($id) {
		$produto = Produto::find($id);
		$produto->delete();
		return redirect()
				->action('ProdutoController@lista');
	}

	public function edita($id){
		$produto = Produto::find($id);
		return view('produtos.edita')->with('p', $produto);
	}

	public function update() {
		$params = Request::all();
		$produto = new Produto($params);
		$produto->save();

		return redirect()
				->action('ProdutoController@lista')
				->withInput(Request::only('nome'));
	}

}
 ?>

<?php

namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;

/**
*
*/
class ProdutoController extends Controller
{

	public function lista() {

		$produtos = DB::select('SELECT * FROM produtos');

	return view('produtos.listagem', ['produtos' => $produtos]);
	}

	public function mostra($id){
		//$id = Request::route('id');

		$resposta =
		DB::select('select * from produtos where id = ?', [$id]);

		if (empty($resposta)) {
			return "Esse produto não existe";
		}
		return view('produtos.detalhes')->with('p', $resposta[0]);
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
		$produtos = DB::select('SELECT * FROM produtos');
		return response()->json($produtos	);
	}

}
 ?>

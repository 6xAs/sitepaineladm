<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use App\produtos;
use DB;
use File;
use Illuminate\Database\Eloquent\Model;
use App\Http\Requests\ProdutoPostRequest;
use Illuminate\Http\Request;
use App\Http\Requests;
use validador;
use Session;
use Redirect;
use App\Http\Controllers\Controller;


class ProdutoController extends Controller
{

  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      $this->middleware('auth');
  }

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Http\Response
   */

     public function index() {

       return view('templateadm.index');
     }


    //Inserir Produto - pag
    public function inserirProduto(ProdutoPostRequest $request) {


        $file_principal = Input::file('image_principal');
        $file_2 = Input::file('image_2');
        $file_3 = Input::file('image_3');
        $file_4 = Input::file('image_4');
        $destinationPath = 'uploads/';
        $fileName_principal     = $file_principal->getClientOriginalName();
        $fileName_image2        = $file_2->getClientOriginalName();


        Input::file('image_principal')->move($destinationPath, $fileName_principal);
        Input::file('image_2')->move($destinationPath, $fileName_image2);

        $nome_prod                = $request->input('nome_prod');
        $valor_prod               = $request->input('valor_prod');
        $nome_categoria           = $request->input('nome_categoria');
        $descricao_prod           = $request->input('descricao_prod');
        $image_principal          = $request->input('image_principal');
        $image_um                 = $request->input('image_um');
        $image_dois               = $request->input('image_dois');
        $image_tres               = $request->input('image_tres');


        DB::table('produtos')->insert([

        ['nome_prod' => $nome_prod, 'valor_prod' => $valor_prod, 'nome_categoria' => $nome_categoria,
        'descricao_prod' => $descricao_prod, 'image_principal' => $fileName_principal, 'image_2' => $fileName_image2]

        ]);
        // Post inserido com sucesso!
        $request->session()->flash('message', 'Produto Inserido com Sucesso');
        return Redirect::to('listarproduto');


    } // FIM inserirProduto()

    public function selectCategoria(){


      $categoria = DB::table('categoria')->lists('nome_categoria','nome_categoria');
      return View('html.inserirproduto', compact('categoria'));

    }// fim listaCategoria


    public function listarProduto() {

      $produto = \App\produtos::All();
      return view('listarproduto', compact('produto'));

    } // FIM listarLivro();

    public function edit($id) {

      $produto = \App\produtos::find($id);

      $categoria = DB::table('categoria')->lists('nome_categoria','nome_categoria');

      return view('html.editproduto', ['produto'=>$produto], ['categoria'=>$categoria]);

    } // fim edit();


    public function update($id, ProdutoPostRequest $request) {

      $file_principal = Input::file('image_principal');
      $file_2 = Input::file('image_2');
      $file_3 = Input::file('image_3');
      $file_4 = Input::file('image_4');
      $destinationPath = 'uploads/';
      $fileName_principal     = $file_principal->getClientOriginalName();
      $fileName_image2        = $file_2->getClientOriginalName();

      Input::file('image_principal')->move($destinationPath, $fileName_principal);
      Input::file('image_2')->move($destinationPath, $fileName_image2);

      $nome_prod                = $request->input('nome_prod');
      $valor_prod               = $request->input('valor_prod');
      $nome_categoria           = $request->input('nome_categoria');
      $descricao_prod           = $request->input('descricao_prod');
      $file_principal          = $request->input('image_principal');
      $image_um                 = $request->input('image_um');
      $image_dois               = $request->input('image_dois');
      $image_tres               = $request->input('image_tres');


      DB::table('produtos')
              ->where('id', $id)
              ->update(
              ['nome_prod' => $nome_prod, 'valor_prod' => $valor_prod, 'nome_categoria' => $nome_categoria,
              'descricao_prod' => $descricao_prod, 'image_principal' => $fileName_principal, 'image_2' => $fileName_image2]
            );


      //$produto = \App\produtos::find($id);
      //$produto->fill($request->all());
      //$produto->save();
      $request->session()->flash('message', 'Produto Atualizado com Sucesso!');
      return Redirect::to('listarproduto');


    } // fim update();

    public function destroy($id, Request $request) {

      $fileName_principal = DB::table('produtos')->value('image_principal');

      //example it.png, which is located in `public/uploads/masters/logocatagory_Computers` folder

      \App\produtos::destroy($id);
      File::delete('uploads/'.$fileName_principal);
      $request->session()->flash('message', 'Produto Excluído com sucesso');
      return Redirect::to('listarproduto');


    } // Fim destroy()

    public function galeriaImagem() {

      $produto = \App\produtos::All();
      return view('templatesite.produtosIndex', compact('produto'));
    }

    public function produto() {

      $categoria = DB::table('categoria')->lists('nome_categoria','nome_categoria');
      return View('html.inserirproduto', compact('categoria'));

    } // produto()

    public function countProdutos() {

      $produto = 50;
      //return view('templatesite.index', compact('produto'));

    }//countProdutos()






} //fim ProdutoController

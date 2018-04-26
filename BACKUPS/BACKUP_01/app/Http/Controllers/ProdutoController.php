<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use App\LivroModel;
use DB;
use File;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Http\Requests\ProdutoPostRequest;
use App\Http\Requests;
use validador;
use Session;
use Redirect;
use App\Http\Controllers\Controller;


class ProdutoController extends Controller
{
    //Inserir Produto - pag
    public function inserirProduto(ProdutoPostRequest $request) {


        $file_principal = Input::file('image_principal');
        $file_2 = Input::file('image_2');
        $file_3 = Input::file('image_3');
        $file_4 = Input::file('image_4');
        $destinationPath = 'uploads/';
        $fileName_principal     = $file_principal->getClientOriginalName();
        $fileName_image2        = $file_2->getClientOriginalName();
        $fileName_image3        = $file_3->getClientOriginalName();
        $fileName_image4        = $file_4->getClientOriginalName();



        Input::file('image_principal')->move($destinationPath, $fileName_principal);
        Input::file('image_2')->move($destinationPath, $fileName_image2);
        Input::file('image_3')->move($destinationPath, $fileName_image3);
        Input::file('image_4')->move($destinationPath, $fileName_image4);



        $nome_prod              = $request->input('nome_prod');
        $valor_prod             = $request->input('valor_prod');
        $id_categoria           = $request->input('id_categoria');
        $descricao_prod         = $request->input('descricao_prod');
        $image_principal        = $request->input('image_principal');
        $image_um               = $request->input('image_um');
        $image_dois             = $request->input('image_dois');
        $image_tres             = $request->input('image_tres');


        DB::table('produtos')->insert([

        ['nome_prod' => $nome_prod, 'valor_prod' => $valor_prod, 'id_categoria' => $id_categoria,
        'descricao_prod' => $descricao_prod, 'image_principal' => $fileName_principal, 'image_2' => $fileName_image2, 'image_3' => $fileName_image3, 'image_4' => $fileName_image4]

        ]);
        // Post inserido com sucesso!
        $request->session()->flash('message', 'Produto Inserido com Sucesso');
        return Redirect::to('listarproduto');


    } // FIM inserirProduto()

    public function create(){

        $categoria = Subject::all(['id', 'name_categoria']);
        return View('Selecione...', compact('categoria',$categoria));

    }// fim listaCategoria


    public function listarProduto() {

      $produto = \App\produtos::All();
      return view('listarproduto', compact('produto'));

    } // FIM listarLivro();

    public function edit($id) {

      $livro = \App\LivroModel::find($id);
      return view('livros.edit', ['livro'=>$livro]);

    } // fim edit();


    public function update($id, livroPostRequest $request) {

      $livro = \App\LivroModel::find($id);
      $livro->fill($request->all());
      $livro->save();

      $request->session()->flash('message', 'Livro Atualizado com sucesso');
      return Redirect::to('listarlivro');

    } // fim update();

    public function destroy($id, Request $request) {

      $filename = DB::table('livros')->value('image');
      //example it.png, which is located in `public/uploads/masters/logocatagory_Computers` folder

          \App\LivroModel::destroy($id);
          File::delete('uploads/'.$filename);
          $request->session()->flash('message', 'Livro Excluído com sucesso');
          return Redirect::to('listarlivro');


    }

    public function formSelect() {

      $categoria = categoria::lists('id','nome_categoria');
    }





} //fim ProdutoController

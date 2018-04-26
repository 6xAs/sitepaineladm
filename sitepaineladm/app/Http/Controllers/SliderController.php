<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use App\Banner;
use DB;
use File;
use Illuminate\Database\Eloquent\Model;
use App\Http\Requests\BannerRequest;
use Illuminate\Http\Request;
use App\Http\Requests;
use validador;
use Session;
use Redirect;
use App\Http\Controllers\Controller;

class SliderController extends Controller
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


    //NovoSlider
    public function inputSlider(BannerRequest $request) {

      $image_banner         = Input::file('image_banner');
      $destinationPath      = 'banners/';
      $fileName_banner      = $image_banner->getClientOriginalName();

      Input::file('image_banner')->move($destinationPath, $fileName_banner);

      $descricao_banner               = $request->input('descricao_banner');
      $valor_banner                   = $request->input('valor_banner');
      $image_banner                   = $request->input('image_banner');

      DB::table('banner')->insert([

      ['descricao_banner' => $descricao_banner, 'valor_banner' => $valor_banner, 'image_banner' => $fileName_banner]

      ]);
      // Post inserido com sucesso!
      $request->session()->flash('message', 'Banner Inserido com Sucesso');
      return Redirect::to('listarbanner');



    }// inputSlider()

    public function listarBanner() {

      $banner = \App\Banner::All();
      return view('html.listarbanner', compact('banner'));

    }

    public function edit($id) {

      $banner = \App\Banner::find($id);
      return view('html.editbanner', ['banner'=>$banner]);

    } // fim edit();

    public function update($id, BannerRequest $request) {

        $image_banner         = Input::file('image_banner');
        $destinationPath      = 'banners/';
        $fileName_banner      = $image_banner->getClientOriginalName();

        Input::file('image_banner')->move($destinationPath, $fileName_banner);

        $descricao_banner               = $request->input('descricao_banner');
        $valor_banner                   = $request->input('valor_banner');
        $image_banner                   = $request->input('image_banner');

        DB::table('banner')
            ->where('id', $id)
            ->update(
            ['descricao_banner' => $descricao_banner, 'valor_banner' => $valor_banner, 'image_banner' => $fileName_banner]
            );

          $request->session()->flash('message', 'Banner Atualizado com Sucesso!');
          return Redirect::to('listarbanner');



    } // Fim update()

    public function destroy($id, Request $request) {

      \App\Banner::destroy($id);
      $request->session()->flash('message', 'Banner Excluído com Sucesso!!');
      return Redirect::to('listarbanner');

    }// Fim destroy()



}

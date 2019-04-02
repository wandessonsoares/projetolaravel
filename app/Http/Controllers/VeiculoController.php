<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VeiculoModel;
use Validator;

class VeiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $veiculos = VeiculoModel::all();
        return view('veiculolist', compact('veiculos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('veiculo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nome' => 'required',
            'marca' => 'required',
            'modelo' => 'required',
            'tipo' => 'required',
            'potencia' => 'required|numeric'
        ]);

        if($validator->fails()){
                return redirect('veiculo/create')->withErrors($validator)->withInput();
        }

        $dados = $request->all();
        VeiculoModel::create($dados);
 
        return redirect()->route('veiculo.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $veiculo = VeiculoModel::find($id);
        return view('veiculoedit', compact('veiculo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $veiculo = Veiculo::find($id);

        return view('veiculo.edit', compact('veiculo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $veiculo = VeiculoModel::find($id);
        $dados = $request->all();
        $veiculo->update($dados);
         
        return redirect()->route('veiculo.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        VeiculoModel::find($id)->delete();
        return redirect()->route('veiculo.index');
    }
}

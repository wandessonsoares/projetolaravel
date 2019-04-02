@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Veículos</div>

                <div class="card-body">
                    <form method="post" action="{{route ('veiculo.update', $veiculo->id)}}">  
                        <input type="hidden" name="_method" value="PUT">
                        {{ csrf_field() }}

                        <div class="control-group">
                            <div class="controls">
                            <h3>Editar Veículo</h3>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Nome</label>
                            <div class="controls">
                            <input type="text" name="nome" value="{{$veiculo->nome}}">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Marca</label>
                            <div class="controls">
                            <input type="text" name="marca" value="{{$veiculo->marca}}">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Modelo</label>
                            <div class="controls">
                            <input type="text" name="modelo" value="{{$veiculo->modelo}}">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Tipo</label>
                            <div class="controls">
                                <select name="tipo" value="{{$veiculo->tipo}}">
                                    <option {{($veiculo->tipo =='1'?'selected':'')}}>Carro</option>
                                    <option {{($veiculo->tipo =='2'?'selected':'')}}>Moto</option>
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Potência</label>
                            <div class="controls">
                            <input type="text" name="potencia" value="{{$veiculo->potencia}}">
                            </div>
                        </div>
                        <br>
                        <div class="control-group">
                            <div class="controls">
                                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                                <a class="btn btn-primary btn-sm" href="{{route('veiculo.index')}}">Cancelar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

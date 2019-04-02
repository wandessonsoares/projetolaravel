@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cadastrar Veículo</div>

                @if($errors->any())
                    <div class="alert alert-danger" role="alert">
                        @foreach ($errors->all() as $error)
                            {{ $error }}<br>
                        @endforeach
                    </div>
                @endif

                <div class="card-body">
                    <form class="form-horizontal" action="{{route('veiculo.store')}}" method="POST">
                        {{ csrf_field() }}
                        <div class="control-group">
                            <label class="control-label">Nome</label>
                            <div class="controls">
                            <input type="text" name="nome">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Marca</label>
                            <div class="controls">
                            <input type="text" name="marca">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Modelo</label>
                            <div class="controls">
                            <input type="text" name="modelo">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Tipo</label>
                            <div class="controls">
                                <select name="tipo">
                                    <option value="1">Carro</option>
                                    <option value="2">Moto</option>
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Potência</label>
                            <div class="controls">
                            <input type="text" name="potencia">
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

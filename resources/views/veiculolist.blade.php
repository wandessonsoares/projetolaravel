@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Veículos</div>

                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Marca</th>
                                <th>Modelo</th>
                                <th>Tipo</th>
                                <th>Potencia</th>
                                <th>Ações</th>
                            </tr>
                        </thead>            
                        <tbody>            
                            @foreach($veiculos as $veiculo)
                                <tr>
                                    <td>{{$veiculo->nome}}</td>
                                    <td>{{$veiculo->marca}}</td>
                                    <td>{{$veiculo->modelo}}</td>
                                    <td>{{($veiculo->tipo =='1'?'Carro':'Moto')}}</td>
                                    <td>{{$veiculo->potencia}}</td>
                                    <td>
                                        <a class="btn btn-primary btn-sm" href="{{route('veiculo.show', $veiculo->id)}}" role="button">Editar</a>
                                        <a class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal" role="button">Remover</a>
                                    </td>                                
                                </tr>                         
                            @endforeach
                        </tbody>
                    </table> 

                    <a class="btn btn-secondary" href="{{route('veiculo.create')}}" role="button">Adicionar</a>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Excluir veículo</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Tem certeza que deseja excluir o veículo?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Não</button>
                            <a class="btn btn-primary btn-sm" href="{{route('veiculo.destroy', $veiculo->id)}}" role="button">Sim</a>
                        </div>
                        </div>
                    </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('adminlte::page')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-purple card-outline">
                <div class="card-header">
                    <div class="card-title">Lista de Fornecedores</div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">

                        <table class="table table-hover table-striped">
                            <thead>
                            <tr>
                                <th scope="col">Especialidade</th>
                                <th scope="col">Nome</th>
                                <th scope="col">E-mail</th>
                                <th scope="col">Telefone</th>
                                <th scope="col">Cidade</th>
                                <th scope="col">Estado</th>
                                <th scope="col">Ações</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($suppliers as $supplier)
                                <tr>
                                    <td>{{ $supplier->specialty }}</td>
                                    <td>{{ $supplier->user->name }}</td>
                                    <td>{{ $supplier->user->email }}</td>
                                    <td>{{ $supplier->phone }}</td>
                                    <td>{{ $supplier->city }}</td>
                                    <td>{{ $supplier->state }}</td>
                                    <td>
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-{{ $supplier->id }}">
                                            Ver informações
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="modal-{{ $supplier->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">{{ $supplier->user->name }}</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        @include("admin.suppliers._show",$supplier)
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

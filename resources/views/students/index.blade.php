@extends('students.layout')
@section('content')
    <div class="container">
        <div class="row" style="margin: 20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Alunos</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/student/create') }}" class="btn btn-success btn-sm" title="Novo Estudante">
                            Novo Estudante
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nome</th>
                                        <th>Endereço</th>
                                        <th>Movél</th>
                                        <th>Aulas</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($students as $student)
                                    <tr>
                                        <td>{{$student->id}}</td>
                                        <td>{{$student->name}}</td>
                                        <td>{{$student->address}}</td>
                                        <td>{{$student->mobile}}</td>
                                        <td>{{$student->classes_id}}</td>
                                        <td>
                                            <a href="{{ url('/student/'. $student->id) }}"><button class="btn btn-info btn-sm">Visualizar</button></a>
                                            <a href="{{ url('/student/'. $student->id . '/edit') }}"><button class="btn btn-primary btn-sm">Editar</button></a>
                                            <form action="{{ url('/student'.'/'.$student->id) }}" method="post" accept-charset="UTF-8" style="display: inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <a href=""><button class="btn btn-danger btn-sm" onclick="return confirm("Confirm delete?")"">Excluir</button></a>
                                            </form>
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
    </div>
@endsection
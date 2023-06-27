@extends('students.layout')
@section('content')

    <div class="card" style="margin: 20px;">
        <div class="card-header">Editar Estudante</div>
    
        <div class="card-body">

            <form action="{{ url('student/' . $students->id) }}" method="post">
                {!! csrf_field() !!}
                @method("PATCH")
                <input type="hidden" name="id" id="id" value="{{$students->id}}">
                <label>Nome</label><br/>
                <input type="text" name="name" id="name" class="form-control" value="{{$students->name}}"><br/>
                <label>Endereço</label><br/>
                <input type="text" name="address" id="address" class="form-control" value="{{$students->address}}"><br/>
                <label>Movel</label><br/>
                <input type="text" name="mobile" id="mobile" class="form-control" value="{{$students->mobile}}"><br/>
                <label>Aula</label><br/>
                <input type="text" name="classes_id" id="classes_id" class="form-control"><br/>
                <input type="submit" value="Atualizar" class="btn btn-success"><br/>
            </form>

        </div>
    </div>
@stop
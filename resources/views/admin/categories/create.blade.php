@extends('admin.template.main')

@section('title','crear categoria')

@section('content')

    {!! Form::open(['route' => ['categories.store'], 'method' => 'POST']) !!}

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif


        <div class="form-group">
        
            {!! Form::label('name','Nombre') !!}
            {!! Form::text('name',null,['class' => 'form-control','placeholder'=>'Nombre de la categoria', 'required']) !!}
            
        </div>

       

        <div class="form-group">
        
            {!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
        
        </div>

    {!! Form::close() !!}

@endsection
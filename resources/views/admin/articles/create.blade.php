@extends('admin.template.main')

@section('title','Agregar articulo')

@section('content')

{!! Form::open(['route' => ['articles.store'], 'method' => 'POST', 'files'=> true]) !!}

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
        
            {!! Form::label('title','Titulo') !!}
            {!! Form::text('title',null,['class' => 'form-control','placeholder'=>'Nombre del articulo', 'required']) !!}
            
        </div>


        <div class="form-group">
        
            {!! Form::label('category_id','Categoria') !!}
            {!! Form::select('category_id',$categories,null ,['class' => 'form-control select-cat','data-placeholder'=>'asddqwe' ,'required']) !!}
            
        </div>

        <div class="form-group">
        
            {!! Form::label('content','Contenido') !!}
            {!! Form::textarea('content',null,['class' => 'form-control textarea-content','placeholder'=>'Nombre del articulo', 'required']) !!}
            
        </div>

        <div class="form-group">
        
            {!! Form::label('tags','Tags') !!}
            {!! Form::select('tags[]',$tags,null ,['class' => 'form-control select-tag','multiple', 'required']) !!}
            
        </div>

        <div class="form-group">
        
            {!! Form::label('image','Imagen') !!}
            {!! Form::file('image') !!}
            
        </div>



        <div class="form-group">
        
            {!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
        
        </div>

    {!! Form::close() !!}



@endsection

@section('js')

    <script>
        $('.select-tag').chosen({
            placeholder_text_multiple:'seleccione los tags deseados...'
        });

        $('.select-cat').chosen({
            placeholder_text_single:'seleccione la categoria deseada...'
        });

        //$('.textarea-content').trumbowyg();
    </script>

@endsection
@extends('admin.template.main')

@section('title','Editar articulo')

@section('content')

{!! Form::open(['route' => ['articles.update',$article], 'method' => 'PUT', 'files'=> true]) !!}

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
            {!! Form::text('title',$article->title,['class' => 'form-control','placeholder'=>'Nombre del articulo', 'required']) !!}
            
        </div>


        <div class="form-group">
        
            {!! Form::label('category_id','Categoria') !!}
            {!! Form::select('category_id',$categories, $article->category->id ,['class' => 'form-control select-cat','data-placeholder'=>'asddqwe' ,'required']) !!}
            
        </div>

        <div class="form-group">
        
            {!! Form::label('content','Contenido') !!}
            {!! Form::textarea('content',$article->content,['class' => 'form-control textarea-content','placeholder'=>'Nombre del articulo', 'required']) !!}
            
        </div>

        <div class="form-group">
        
            {!! Form::label('tags','Tags') !!}
            {!! Form::select('tags[]',$tags, $my_tags ,['class' => 'form-control select-tag','multiple', 'required']) !!}
            
        </div>



        <div class="form-group">
        
            {!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
        
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
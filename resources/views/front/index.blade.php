@extends('front.template.main')

@section('content')

   
    <div class="form-group">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                    
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">ULTIMOS ARTICULOS</h3>
            </div>
                        @foreach($articles as $article)


                        <div class="col-md-6">
                        <br>
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <a href="{{ route('front.view.article', $article->id)}}" class=" ">
                                        @foreach($article->images as $image)
                                            <img src="{{ asset('images/articles/'.$image->name) }}" class="img-responsive img-article">
                                        @endforeach
                                    </a>
                                        <a href="{{ route('front.view.article', $article->id)}}">
                                            <h3 class="text-center">{{ $article->title }}</h3>
                                        </a>
                                    <hr>
                                    <i class="fa fa-folder-open-o"></i>
                                        <a href="{{ route('front.search.category', $article->category->name) }}">{{ $article->category->name }}</a>
                                        <div class="pull-right">
                                            <i class="fa fa-clock-o"></i>Hace 3 minutos
                                        </div>
                                </div>
                            </div>
                        </div>

                        @endforeach
        </div>

                    </div>

                    {{ $articles->render() }}
                
                </div>            
<br>
<br><br>
            @include('front.partials.aside')
     
            </div>

    </div>

@endsection

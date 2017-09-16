@extends('front.template.main')

@section('content')

   
    <div class="container">
        <h3 class="title-front left">Ultimos articulos</h3>
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                    
                        @foreach($articles as $article)


                        <div class=col-md-6>
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

                    {{ $articles->render() }}
                
                </div>            

            @include('front.partials.aside')
     
            </div>

    </div>

@endsection

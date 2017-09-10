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
                                    <a href="#" class=" ">
                                        <img src="{{ asset('images/articles/blogfacilito_1504906244.png') }}" class="img-responsive img-article">

                                    </a>
                                    <h3 class="text-center">{{ $article->title }}</h3>

                                    <hr>
                                    <i class="fa fa-folder-open-o"></i>
                                        <a href="">Category</a>
                                        <div class="pull-right">
                                            <i class="fa fa-clock-o"></i>Hace 3 minutos
                                        </div>
                                </div>
                            </div>
                        </div>

                        @endforeach

                    </div>

                    
                
                </div>            
            </div>

    </div>

@endsection

        <div class="col-md-4 aside">
            
                <div class="panel panel-info">
                
                    <div class="panel-heading">
                        <h3 class="panel-title">Categorias</h3>
                    </div>

                    <div class="panel-body">
                        <ul class="list-group"></ul>

                        @foreach($categories as $category)
                            <li class="list-group-item">
                                <span class="badge">{{ $category->articles->count() }}</span>
                                <a href=" {{ route('front.search.category',$category->name) }}">
                                    {{ $category->name }}
                                </a>
                            </li>

                        @endforeach
                    </div>
            
                </div>


            
                <div class="panel panel-danger">
                
                    <div class="panel-heading">
                        <h3 class="panel-title">Tags</h3>
                    </div>    

                    <div class="panel-body">
                        <ul class="list-group"></ul>

                        @foreach($tags as $tag)

                        <li class="list-group-item">
                            <span class="badge">{{ $tag->articles->count() }}</span>
                            <a href=" {{ route('front.search.tag',$tag->name) }}">
                                {{ $tag->name }}
                            </a>

                        </li>
                        @endforeach

                        <!--<div class="panel panel-info">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Tags</h3>
                                </div>

                                <div class="panel-body">
                                    <span class="label label-default">default</span>
                                </div>

                        
                        </div>-->
                    
                    </div>
            
                </div>

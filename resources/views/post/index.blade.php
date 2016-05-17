
@extends('app')

@section('content')
<div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                
                @foreach($posts as $artigo)
   
                <div class="post-preview">
                    <a href="#post.html">
                        <h2 class="post-title">
                            {{$artigo['titulo']}}
                        </h2>
                        <h3 class="post-subtitle">
                           {{$artigo['conteudo'] }}
                        </h3>
                    </a>
                    <p class="post-meta">Postado por <a href="#">{{$artigo['autor'] }}</a> em {{$artigo['created']}} </p>
                </div>
                <hr>
                
                 @endforeach
                 
                <!-- Pager -->
                <ul class="pager">
                    <li class="next">
                        <a href="#">Posts Anteriores &rarr;</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
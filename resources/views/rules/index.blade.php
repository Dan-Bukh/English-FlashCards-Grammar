@extends('layouts.base')
@section('content')
    <div class="container-fluid">
        <h1 style="color:#3a3f5d;" class="mb-4 text-center">{{ __('Грамматика Английского языка') }}</h1>
        <div class="row">
            @for($i = 0; $i < count($posts); $i++)
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <h4 class="mb-3">{{ $posts[$i]['title'] }}</h4>
                    <ul style="list-style-type:none">
                        @for($y = 0; $y < (count($posts[$i])-1); $y++)
                        <li><a class="link-primary" href="{{ route('grammar.show', $posts[$i][$y]['link']) }}">{{ $posts[$i][$y][0] }}</a></li>
                        @endfor
                    </ul>
                </div>       
            @endfor
        </div>
    </div>
@endsection

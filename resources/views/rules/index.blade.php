@extends('layouts.base')
@section('content')

    <div class="container-fluid">
        <h1 style="color:#3a3f5d;" class="mb-3 text-center">{{ __('Грамматика Английского языка') }}</h1>
        <div class="row">
            @foreach($posts as $post)
            <div class="col-lg-3 col-md-4 col-sm-12">
                <h4 style="color:#3a3f5d;" class="mb-3">{{ $post }}</h4>
                @foreach($test->content as $val)
                <ul style="list-style-type:none">
                    <li><a style="text-decoration:none" href="{{ $val }}">{{ $val }}</a></li>
                </ul>

                @endforeach
            </div>
            @endforeach
        </div>
    </div>
@endsection
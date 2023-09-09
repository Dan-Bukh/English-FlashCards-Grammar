@extends('layouts.base')
@section('content')
    <div class="container-fluid">
        <div class="row mx-auto">
            @foreach($words as $word)
                @php
                $image = trim(preg_img($word->title));
                @endphp
                <div class="d-flex justify-content-center col-lg-3 col-md-4 col-sm-12 text-center mb-3">
                    <div class="card bg-body-tertiary rounded-5" style="width: 15rem;">
                        <img src="{{asset("image/$image.jpg")}}" class="card-img-top rounded-top-5" alt="...">
                        <div class="card-body">
                            <a id="link-words-all" class="fs-3" href="{{ route('words.show', $word->id) }}">{{preg_title($word->title)}}</a>
                            <a class="fs-5" href="{{ route('words.edit', $word->id) }}">Редактировать</a>
                        </div>
                    </div>
                </div>
            @endforeach
            {{ $words->links() }}
            <div>
                <a style="text-decoration:none;" class="btn btn-outline-primary" href="{{ route('words.create') }}">Создать</a>
            </div>

        </div>
        
    </div>
@endsection
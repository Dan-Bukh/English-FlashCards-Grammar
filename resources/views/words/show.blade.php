
@extends('layouts.base')
@section('content')

    <div class="container-fluid">
        <div class="card mx-auto text-center" style="width: 34rem;">
            <img src="{{$word[$post]->img}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h4 class="card-title">{{$word[$post]->title}}</h4>
              <p class="card-text">{{$word[$post]->text}}</p>
              <div class="row justify-content-center">
                <div class="col-12 col-md-3 mb-1">
                    <button type="button" class="btn btn-primary">Добавить</button>
                </div>
                <div class="col-6 col-md-3 mb-1">
                    <a href="{{ route('words.show', [($post - 1)] )}}" class="btn btn-primary {{ ($post == 1 || $post == 0) ? 'disabled' : ''}}">Назад</a>
                </div>
                <div class="col-6 col-md-3 mb-1">
                    <a href="{{ route('words.show', [($post + 1)] )}}" class="btn btn-primary">Вперед</a>
                </div>
                <div class="col-6 col-md-3 mb-1">
                    <button type="button" class="btn btn-primary">Перевод</button>
                </div>
              </div>
            </div>
        </div>
    </div>
@endsection


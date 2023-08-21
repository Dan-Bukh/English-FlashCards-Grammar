@extends('layouts.base')
@section('content')
    <div class="container-fluid">
        <div class="text-center">
            @foreach ($words as $word)
                    <div class="card mx-auto text-center mb-3 bg-body-tertiary" style="width: 34rem;">
                        <img src="{{'/'. 'image/'. $word[1]. '.jpg'}}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h4 class="card-title">{{$word[1]. ' - '. $word[2]}}</h4>
                          <p style="font-size:1.2em" class="card-text">{{$word[3]. ' - '. $word[4]}}</p>
                          <div class="row justify-content-center">
                            <div class="col-6 col-md-3 mb-1">
                                <a style="text-decoration:none;" href="" class="btn btn-outline-primary">Назад</a>
                            </div>
                            <div class="col-6 col-md-3 mb-1">
                                <a  style="text-decoration:none;" href="" class="btn btn-outline-primary">Вперед</a>
                            </div>
                          </div>
                        </div>
                    </div>
            @endforeach
        </div>
    </div>
@endsection

{{-- <div class="mx-auto w-50 m-3 border">
    <h1>{{$word[1]}}</h1>
    <h3>{{$word[2]}}</h3>
    <img src="{{'/'. 'image/'. $word[1]. '.jpg'}}" alt="">
    <br>
    <p>{{$word[3]. ' - '. $word[4]}}</p>
    <br>
    <div class="row justify-content-center mb-2">
        <div class="col-12 col-md-3 mb-1">
            <button type="button" class="btn btn-primary">Добавить</button>
        </div>
        <div class="col-6 col-md-3 mb-1">
            <a href="" style="text-decoration:none;" class="btn btn-primary">Назад</a>
        </div>
        <div class="col-6 col-md-3 mb-1">
            <a href="" style="text-decoration:none;" class="btn btn-primary">Вперед</a>
        </div>
        <div class="col-6 col-md-3 mb-1">
            <button type="button" class="btn btn-primary">Перевод</button>
        </div>
      </div>
</div> --}}
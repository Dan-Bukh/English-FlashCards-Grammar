@extends('layouts.base')
@section('content')
    <div class="container-fluid">
        <div class="text-center">
            <div class="row justify-content-center mx-3">
                <div class="col-sm-12 col-md-6 col-lg-6 border bg-body-tertiary rounded-5">
                    <br>
                    <br>
                    <h1>Карточки для изучения слов</h1>
                    <br>
                    <p>Нажимайте на стрелочки ( &#x25C4; , &#x25BA; ) чтобы перемещаться по карточкам <br>или<br> воспользуйтесь поиском ( слово или номер )</p>
                    <a href="{{ route('words.show', '1') }}" style="text-decoration:none;" class="btn btn-outline-primary fs-2">Начать</a>
                    <a class="ms-4" href="{{ route('words-all') }}">Все Карточки</a>
                    <br>
                    <br>
                </div>
            </div>

            
        </div>
    </div>
@endsection
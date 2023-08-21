@extends('layouts.base')
@section('content')
    <div class="container-fluid">
        <div class="text-center">
            <div class="row justify-content-center ">
                <div class="col-6 border">
                    <br>
                    <br>
                    <h1>Карточки для изучения слов</h1>
                    <br>
                    <p>Нажимайте на стрелочки ( &#x25C4; , &#x25BA; ) чтобы перемещаться по карточкам <br>или<br> воспользуйтесь поиском ( слово или номер )</p>

                    <a href="{{ route('words.show', 'arouse') }}" style="text-decoration:none;" class="btn btn-outline-primary fs-2">Начать</a>
                    <br>
                    <br>

                </div>
            </div>

            
        </div>
    </div>
@endsection
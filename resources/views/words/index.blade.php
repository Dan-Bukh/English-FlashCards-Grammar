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
                    <br>
                    <br>
                    <a href="{{ route('words.show', 1) }}" style="text-decoration:none;" class="btn btn-primary fs-2">Начать</a>
                    <br>
                    <br>
                    <br>
                    <br>
                </div>
            </div>

            
        </div>
    </div>
@endsection
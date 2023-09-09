@extends('layouts.base')
@section('content')
    <div class="container-fluid">
        <div class="text-center">
                    <div class="card mx-auto text-center mb-3 rounded-4 bg-body-tertiary" style="width: 34rem;">
                        <img src=" {{asset($word->link_img) }}" class="card-img-top rounded-top-4" alt="{{ $word->link }}">
                        <div class="card-body">
                          <a id="link-words-none" href="https://translate.google.ru/?sl=en&tl=ru&text={{$word->text}}&op=translate" target="_blank"><h4 class="card-title">{{preg_title($word->title). ' - '. $word->title_translate}}</h4></a>
                          <p class="card-text">{{$word->text. ' - '. $word->text_translate}}</p>
                          <div class="row justify-content-center">
                                <div class="col-4 col-md-4">
                                    <a id="left-a" style="text-decoration:none;" href="{{ ($word->id <= 1) ? route('words.show', 1) : route('words.show', $word->id - 1)}}" class="btn btn-outline-primary">Назад</a>
                                </div>
                                <div class="col-4 col-md-4">
                                    <div class="input-group">
                                        <button class="btn btn-outline-primary" type="button" id="buttonaddon1">&#x2713;</button>
                                        <input id="input" type="text" class="form-control" placeholder="" value="{{ $word->id }}" aria-label="Example text with button addon" aria-describedby="buttonaddon1">
                                        <p class="ps-2 m-0">{{'/'. $wordCount }}</p>
                                    </div>
                                </div>
                                <div class="col-4 col-md-4">
                                    <a id="right-a" style="text-decoration:none;" href="{{ ($word->id >= 2010) ? route('words.show', 2010) : route('words.show', $word->id + 1)}}" class="btn btn-outline-primary">Вперед</a>
                                </div>
                          </div>
                        </div>
                    </div>
                    
                    <a class="d-flex justify-content-center" href="{{ route('words-all', ['page' => ceil($word->id / 8)]) }}">Все карточки</a>
                    <div id="str"></div>
        </div>
    </div>
        @pushOnce('js')
            <script>
                buttonaddon1.onclick = function() {
                    var val = document.getElementById('input').value;
                    window.location.href = '{{ route('words') }}' + '/' + val;
                };

                document.addEventListener('keydown', direction);

                function direction(event) {
                    if(event.keyCode == 37) {
                        document.getElementById("left-a").click()
                    } else if(event.keyCode == 39) {
                        document.getElementById("right-a").click()
                    } else if(event.keyCode == 13) {
                        document.getElementById("buttonaddon1").click()
                    }
                }
            </script>
        @endPushOnce

@endsection





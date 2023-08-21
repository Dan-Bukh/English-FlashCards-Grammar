@extends('layouts.base')
@section('content')
    <div class="container-fluid">
        <div class="text-center">
                    <div class="card mx-auto text-center mb-3 bg-body-tertiary" style="width: 34rem;">
                        <img src="{{'/'. 'image/'. $word[0]['title']. '.jpg'}}" class="card-img-top" alt="{{ $word[0]['link'] }}">
                        <div class="card-body">
                          <h4 style="color:#3a3f5d;" class="card-title">{{preg_replace('/2/', '', $word[0]['title']). ' - '. $word[0]['title_translate']}}</h4>
                          <p class="card-text">{{$word[0]['text']. ' - '. $word[0]['text_translate']}}</p>
                          <div class="row justify-content-center">
                            <div class="col-4 col-md-4">
                                <a style="text-decoration:none;" href="{{ ($word[0]['id'] <= 1) ? route('words.show', 1) : route('words.show', $word[0]['id'] - 1)}}" class="btn btn-outline-primary">Назад</a>
                            </div>
                            <div class="col-4 col-md-4">
                                <div class="input-group">
                                    <button class="btn btn-outline-primary" type="button" id="buttonaddon1">&#x2713;</button>
                                    <input id="input" type="text" class="form-control" placeholder="" value="{{ $word[0]['id'] }}" aria-label="Example text with button addon" aria-describedby="buttonaddon1">
                                    <p class="ps-2 m-0">{{'/'. $wordCount }}</p>
                                  </div>
                                  
                            </div>

                            <div class="col-4 col-md-4">
                                <a  style="text-decoration:none;" href="{{ ($word[0]['id'] >= 2010) ? route('words.show', 2010) : route('words.show', $word[0]['id'] + 1)}}" class="btn btn-outline-primary">Вперед</a>
                            </div>
                          </div>
                        </div>
                    </div>
                    

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
                    if(event.keyCode == 39 && document.location.pathname.replace('/words/','') < 2010) {
                        window.location.href = "{{route('words').'/'.$word[0]['id']+1}}";
                    } else if(event.keyCode == 37 && document.location.pathname.replace('/words/','') > 1) {
                        window.location.href = "{{route('words').'/'.$word[0]['id']-1}}";
                    } else if(event.keyCode == 13) {
                        var val = document.getElementById('input').value;
                        window.location.href = '{{ route('words') }}' + '/' + val;
                    }
                }
            </script>
        @endPushOnce

@endsection


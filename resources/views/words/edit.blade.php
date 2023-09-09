@extends('layouts.base')
@section('content')
    <div class="container-fluid">
        <div class="text-center">
                    <div class="card mx-auto text-center mb-3 rounded-4 bg-body-tertiary" style="width: 34rem;">
                        <img src=" {{asset($link_img) }}" class="card-img-top rounded-top-4" alt="">
                        <div class="card-body">
                          <h4 class="card-title">{{$word[0]['title']. ' - '. $word[0]['title_translate']}}</h4>
                          <p class="card-text">{{$word[0]['text']. ' - '. $word[0]['text_translate']}}</p>
                          <form action="{{ route('words.update', $word[0]['id']) }}" method="POST">
                            @method('PUT')
                            @csrf
                            <div class="mb-3">
                              <input class="form-control" name="img" value="{{$link_img}}" placeholder="{{$link_img}}" disabled>
                            </div>
                            <div class="mb-3">
                              <input class="form-control" name="title" value="{{$word[0]['title']}}" placeholder="{{$word[0]['title']}}">
                            </div>
                            <div class="mb-3">
                                <input class="form-control" name="title_translate" value="{{$word[0]['title_translate']}}" placeholder="{{$word[0]['title_translate']}}">
                              </div>
                              <div class="mb-3">
                                <input class="form-control" name="text" value="{{$word[0]['text']}}" placeholder="{{$word[0]['text']}}">
                              </div>
                              <div class="mb-3">
                                <input class="form-control" name="text_translate" value="{{$word[0]['text_translate']}}" placeholder="{{$word[0]['text_translate']}}">
                              </div>
                            <div class="mb-3 form-check">
                              <input type="checkbox" class="form-check-input" name="check">
                              <label class="form-check-label d-flex justify-content-start" for="check">Подтвердить изменения</label>
                              @error('check')
                                <div class="small text-danger mb-2 pt-1">
                                    {{ $message }}
                                </div>
                              @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Изменить</button>
                          </form>
                          <form class="border mt-3 bg-body-secondary rounded-3" action="{{ route('words.destroy', $word[0]['id']) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <div class="form-check my-2 ms-2">
                              <input type="checkbox" class="form-check-input" name="check2">
                              <label class="form-check-label d-flex justify-content-start" for="check2">Подтвердить удаление</label>
                            </div>
                            @error('check2')
                            <div class="small text-danger mb-2 pt-1">
                                {{ $message }}
                            </div>
                          @enderror
                            <button type="submit" class="btn btn-danger mb-2">Удалить</button>
                          </form>
                        </div>
                    </div>
                    <a class="d-flex justify-content-center" href="{{ route('words-all', ['page' => ceil($word[0]['id'] / 8)]) }}">Все карточки</a>
                    <div id="str"></div>
        </div>
    </div>
@endsection





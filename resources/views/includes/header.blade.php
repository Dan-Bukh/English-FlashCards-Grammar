<header class="py-3">
    <div class="container">
        <nav class="navbar navbar-expand-md fixed-top bg-body-tertiary border-bottom" >
            <div class="container-md">
              
              <a style="color:#3a3f5d;text-decoration:none;" href="{{route('home')}}" class="navbar-brand fst-italic ps-3">EnglishGrammar</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav nav-underline fw-medium">
                  <li class="nav-item fs-5">
                    <a style="text-decoration:none" href="{{ route('grammar') }}" class="nav-link {{Route::is('grammar') ? 'active' : ''}}" aria-current="page">Грамматика</a>
                  </li>
                  <li class="nav-item fs-5">
                    <a style="text-decoration:none" class="nav-link {{Route::is('words') ? 'active' : ''}}" href="{{route('words')}}">Новые Слова</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </div>
</header>
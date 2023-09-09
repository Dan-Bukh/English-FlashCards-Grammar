<header class="py-3">
        <nav class="navbar navbar-expand-md fixed-top border-bottom" >
            <div class="container-md">
              <a style="text-decoration:none;" href="{{route('home')}}" class="navbar-brand fst-italic ps-3"><img style="width:200px" src="{{ asset('/image/web_logo.jpeg') }}" alt=""></a>
              <a href="#" class="nav-link">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-person-fill text-tertiary" viewBox="0 0 16 16">
                  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                </svg>
              </a>
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
</header>
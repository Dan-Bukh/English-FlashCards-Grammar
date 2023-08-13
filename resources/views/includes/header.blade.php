<header class="py-3">
    <div class="container">
        <nav class="navbar navbar-expand-md fixed-top bg-body-tertiary border-bottom" >
            <div class="container-md">
    
              <a style="color:#3a3f5d;" href="{{route('home')}}" class="navbar-brand fst-italic ps-3">EnglishGrammar</a>
              <div>
                <ul class="navbar-nav fw-medium mx-5">
                  <li class="nav-item fs-5 mx-3">
                    <a href="{{route('grammar')}}" class="nav-link {{Route::is('grammar') ? 'active' : ''}}" aria-current="page">Грамматика</a>
                  </li>
                  <li class="nav-item fs-5 mx-3">
                    <a class="nav-link" href="#">Новые Слова</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </div>
</header>
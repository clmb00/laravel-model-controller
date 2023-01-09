<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark p-3 my-3 mx-5 rounded-5">
        <div class="container-fluid">

          <a class="navbar-brand text-white fw-bolder" href="{{ route('home') }}">My Theater</a>

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'home' ? 'text-info' : 'text-white'}}" href="{{ route('home') }}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'favourite' ? 'text-info' : 'text-white'}}" href="{{ route('favourite') }}">Favourites</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'explore' ? 'text-info' : 'text-white'}}" href="{{ route('explore') }}">Explore</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'account' ? 'text-info' : 'text-white'}}" href="{{ route('account') }}">Account</a>
              </li>
            </ul>
          </div>

        </div>
      </nav>

</header>

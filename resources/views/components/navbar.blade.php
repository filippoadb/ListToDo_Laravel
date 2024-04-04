<nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
          <a class="navbar-brand d-md-none d-xs-block py-3" href="#">
            <img src="/static_files/images/logos/beer_white.png" height="40" alt="Company Logo">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                <a class="nav-link mx-2 nav-link mx-2 btn rounded-0 btn-danger" aria-current="page" href="{{route('welcome')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-2 nav-link mx-2 btn rounded-0 btn-danger" href="{{route('tasks.create')}}">Crea Attività</a>
              </li>
              @guest
              <li class="nav-item">
                <a class="nav-link mx-2 nav-link mx-2 btn rounded-0 btn-danger" href="{{route('login')}}">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-2 btn rounded-0 btn-danger" href="{{route('register')}}">Register</a>
              </li>
              @else
              <li class="nav-item">
                <a class="nav-link mx-2 nav-link mx-2 btn rounded-0 btn-danger" href="{{route('tasks.index')}}">Visualizza Attività</a>
              </li>
              <form action="{{route('logout')}}" method="POST">
                @csrf
                <button class="nav-link">Logout</button>
              </form>
              @endguest
            </ul>
          </div>
        </div>
      </nav>
      <!-- <div class="text-center p-3 d-none d-md-block">
        <img src="/static_files/images/logos/beer.png" height="120" alt="Company Logo">
      </div> -->
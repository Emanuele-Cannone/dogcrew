<header>
    <nav class="navbar navbar-light bg-light fixed-top mb-5">
      <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{asset('storage/logoDogCrew.jpg')}}" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title text-capitalize" id="offcanvasNavbarLabel">dog crew asd</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-capitalize" href="#">eventi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-capitalize" href="#">classi di comunicazione</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-capitalize" href="#">seminari</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-capitalize" href="#">blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-capitalize" href="#">shop</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
</header>
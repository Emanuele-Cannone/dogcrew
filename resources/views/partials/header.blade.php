@php
  use App\Models\Section;
  $sections = Section::all();
@endphp

<header>
    <nav class="navbar navbar-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{asset('storage/logoDogCrew.jpg')}}" alt="Logo">
        </a>
        <button id="menuBtn" class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
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
              @guest
              @foreach ($sections as $section)
                <li class="nav-item">
                  {{-- <a class="nav-link text-capitalize" href="{{ route( $section->url ) }}">{{ $section->name }}</a> --}}
                  <a class="nav-link text-capitalize" href="{{ route('sections', $section->id) }}">{{ $section->name }}</a>
                </li>
              @endforeach
              <li class="nav-item">
                <a class="nav-link text-capitalize" href="{{route('login')}}">login</a>
              </li>
              @endguest
              @auth
              <li class="nav-item">
                {{-- <a class="nav-link text-capitalize" href="{{ route( $section->url ) }}">{{ $section->name }}</a> --}}
                <a class="nav-link text-capitalize" href="{{ route('post.index') }}">Post</a>
              </li>
              <li>
                <a class="nav-link text-capitalize" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
                </form>
              </li>
              @endauth
            </ul>
          </div>
        </div>
      </div>
    </nav>
</header>

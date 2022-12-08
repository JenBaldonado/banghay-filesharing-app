@extends('layouts.glvlLayout')

@section('content')

<div id="app">
  <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
      <h1 class="subject-text ps-4"><a href="{{url('/banghay/gradeone')}}">GRADE 1</a></h1>
      <h6 class="subject-text ps-4"><a href="{{url('/banghay/gradetwo')}}">GRADE 2</a></h6>
      <h6 class="subject-text ps-4"><a href="{{url('/banghay/gradethree')}}">GRADE 3</a></h6>
      <h6 class="subject-text ps-4"><a href="{{url('/banghay/gradefour')}}">GRADE 4</a></h6>
      <h6 class="subject-text ps-4"><a href="{{url('/banghay/gradefive')}}">GRADE 5</a></h6>
      <h6 class="subject-text ps-4"><a href="{{url('/banghay/gradesix')}}">GRADE 6</a></h6>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Left Side Of Navbar -->
        <ul class="navbar-nav me-auto">

        </ul>
        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ms-auto">
          <!-- Authentication Links -->
          @guest
          @if (Route::has('login'))
          <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
          </li>
          @endif

          @if (Route::has('register'))
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
          </li>
          @endif
          @else
          <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->name }}
            </a>

            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Profile</a>
              <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
            </div>
          </li>

          @endguest
        </ul>
      </div>
    </div>
  </nav>

  <div class="container px-5">

    <h3 id="English" class="subject-text mt-5">English</h3>
    <div class="card-flex-container card-text">

      <div class="card border-left-english shadow h-100 py-2">
        <div class="card-body">
          <div class="no-gutters align-items-center">
            <div>Tittle: </div>
            <div>Subject: </div>
            <div>Grade Level: </div>
            <div>Shared by: </div>
            <a href="" data-bs-toggle="modal" data-bs-target="">View</a>
            <a href="">Download</a>
          </div>
        </div>
      </div>

      <div class="modal" id="" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="staticBackdropLabel">

              </h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body ">
              <iframe src=""></iframe>
            </div>
          </div>
        </div>
      </div>


    </div>

    <hr />

    <h3 id="Math" class="subject-text mt-5">Math</h3>
    <div class="card-flex-container card-text">

      <div class="card border-left-math shadow h-100 py-2">
        <div class="card-body">
          <div class="no-gutters align-items-center">
            <div>Tittle: </div>
            <div>Subject: </div>
            <div>Grade Level: </div>
            <a href="" data-bs-toggle="modal" data-bs-target="">View</a>
            <a href="">Download</a>
          </div>
        </div>
      </div>

      <div class="modal fade" id="" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="staticBackdropLabel">Grade 1</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
              <h5>Tittle:</h5>
              <h6>Subject:</h6>
              <h6>Grade Level:</h6>
              <iframe src=""></iframe>
            </div>
          </div>
        </div>
      </div>

    </div>

    <hr />


    <h3 id="Science" class="subject-text mt-5">Science</h3>
    <div class="card-flex-container card-text">

      <div class="card border-left-science shadow h-100 py-2">
        <div class="card-body">
          <div class="no-gutters align-items-center">
            <div>Tittle:</div>
            <div>Subject: </div>
            <div>Grade Level:</div>
            <a href="" data-bs-toggle="modal" data-bs-target="">View</a>
            <a href="">Download</a>
          </div>
        </div>
      </div>

      <div class="modal fade" id="" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="staticBackdropLabel">Grade 1</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
              <h5>Tittle:</h5>
              <h6>Subject:</h6>
              <h6>Grade Level:</h6>
              <iframe src=""></iframe>
            </div>
          </div>
        </div>
      </div>

    </div>

    <hr />

    <h3 id="ESP" class="subject-text mt-5">ESP</h3>
    <div class="card-flex-container card-text">

      <div class="card border-left-esp shadow h-100 py-2">
        <div class="card-body">
          <div class="no-gutters align-items-center">
            <div>Tittle:</div>
            <div>Subject:</div>
            <div>Grade Level:</div>
            <a href="" data-bs-toggle="modal" data-bs-target="">View</a>
            <a href="">Download</a>
          </div>
        </div>
      </div>

      <div class="modal fade" id="" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="staticBackdropLabel">Grade 1</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
              <h5>Tittle:</h5>
              <h6>Subject:</h6>
              <h6>Grade Level:</h6>
              <iframe src=""></iframe>
            </div>
          </div>
        </div>
      </div>

    </div>

    <hr />

    <h3 id="AP" class="subject-text mt-5">Araling Panlipunan</h3>
    <div class="card-flex-container card-text">

      <div class="card border-left-ap shadow h-100 py-2">
        <div class="card-body">
          <div class="no-gutters align-items-center">
            <div>Tittle:</div>
            <div>Subject:</div>
            <div>Grade Level:</div>
            <a href="" data-bs-toggle="modal" data-bs-target="">View</a>
            <a href="">Download</a>
          </div>
        </div>
      </div>

      <div class="modal fade" id="" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="staticBackdropLabel">Grade 1</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
              <h5>Tittle:</h5>
              <h6>Subject:</h6>
              <h6>Grade Level:</h6>
              <iframe src=""></iframe>
            </div>
          </div>
        </div>
      </div>

    </div>

    <hr />

    <h3 id="Computer" class="subject-text mt-5">Computer</h3>
    <div class="card-flex-container card-text">

      <div class="card border-left-computer shadow h-100 py-2">
        <div class="card-body">
          <div class="no-gutters align-items-center">
            <div>Tittle:</div>
            <div>Subject: </div>
            <div>Grade Level:</div>
            <a href="" data-bs-toggle="modal" data-bs-target="">View</a>
            <a href="">Download</a>
          </div>
        </div>
      </div>

      <div class="modal fade" id="" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="staticBackdropLabel">Grade 1</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
              <h5>Tittle:</h5>
              <h6>Subject:</h6>
              <h6>Grade Level:</h6>
              <iframe src=""></iframe>
            </div>
          </div>
        </div>
      </div>

    </div>

    <hr />

    <h3 id="TLE" class="subject-text mt-5">TLE</h3>
    <div class="card-flex-container card-text">

      <div class="card border-left-tle shadow h-100 py-2">
        <div class="card-body">
          <div class="no-gutters align-items-center">
            <div>Tittle: </div>
            <div>Subject: </div>
            <div>Grade Level: </div>
            <a href="" data-bs-toggle="modal" data-bs-target="">View</a>
            <a href="">Download</a>
          </div>
        </div>
      </div>

      <div class="modal fade" id="" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="staticBackdropLabel">Grade 1</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
              <h5>Tittle:</h5>
              <h6>Subject:</h6>
              <h6>Grade Level:</h6>
              <iframe src=""></iframe>
            </div>
          </div>
        </div>
      </div>

    </div>

    <hr />

    <h3 id="Music" class="subject-text mt-5">Music</h3>
    <div class="card-flex-container card-text">

      <div class="card border-left-music shadow h-100 py-2">
        <div class="card-body">
          <div class="no-gutters align-items-center">
            <div>Tittle:</div>
            <div>Subject: </div>
            <div>Grade Level: </div>
            <a href="" data-bs-toggle="modal" data-bs-target="">View</a>
            <a href="">Download</a>
          </div>
        </div>
      </div>

      <div class="modal fade" id="" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="staticBackdropLabel">Grade 1</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
              <h5>Tittle:</h5>
              <h6>Subject:</h6>
              <h6>Grade Level:</h6>
              <iframe src=""></iframe>
            </div>
          </div>
        </div>
      </div>

    </div>

    <hr />

    <h3 id="Arts" class="subject-text mt-5">Arts</h3>
    <div class="card-flex-container card-text">

      <div class="card border-left-arts shadow h-100 py-2">
        <div class="card-body">
          <div class="no-gutters align-items-center">
            <div>Tittle: </div>
            <div>Subject: </div>
            <div>Grade Level: </div>
            <a href="" data-bs-toggle="modal" data-bs-target="">View</a>
            <a href="">Download</a>
          </div>
        </div>
      </div>

      <div class="modal fade" id="" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="staticBackdropLabel">Grade 1</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
              <h5>Tittle:</h5>
              <h6>Subject:</h6>
              <h6>Grade Level:</h6>
              <iframe src=""></iframe>
            </div>
          </div>
        </div>
      </div>

    </div>

    <hr />

    <h3 id="PE" class="subject-text mt-5">Physical Education</h3>
    <div class="card-flex-container card-text">

      <div class="card border-left-pe shadow h-100 py-2">
        <div class="card-body">
          <div class="no-gutters align-items-center">
            <div>Tittle: </div>
            <div>Subject: </div>
            <div>Grade Level: </div>
            <a href="" data-bs-toggle="modal" data-bs-target="">View</a>
            <a href="">Download</a>
          </div>
        </div>
      </div>

      <div class="modal fade" id="" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="staticBackdropLabel">Grade 1</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
              <h5>Tittle:</h5>
              <h6>Subject:</h6>
              <h6>Grade Level:</h6>
              <iframe src=""></iframe>
            </div>
          </div>
        </div>
      </div>

    </div>

    <hr />

    <h3 id="Health" class="subject-text mt-5">Health</h3>
    <div class="card-flex-container card-text mb-5">

      <div class="card border-left-health shadow h-100 py-2">
        <div class="card-body .grdlvl">
          <div class="no-gutters align-items-center">
            <div>Tittle: </div>
            <div>Subject: </div>
            <div>Grade Level: </div>
            <a href="" data-bs-toggle="modal" data-bs-target="">View</a>
            <a href="">Download</a>
          </div>
        </div>
      </div>

      <div class="modal fade" id="" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="staticBackdropLabel">Grade 1</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
              <h5>Tittle:</h5>
              <h6>Subject:</h6>
              <h6>Grade Level:</h6>
              <iframe src=""></iframe>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>


  <footer>
        <p>Copyright @ 2022</p>
        <p>Socials</p>
        <div class="container socials">
            <i class='bx bxl-facebook-square icon'></i>
            <i class='bx bxl-linkedin-square icon'></i>
            <i class='bx bxl-youtube icon'></i>
        </div>
    </footer>
  @endsection



  @section('script')
  <script>
    const body = document.querySelector('body'),
      sidebar = body.querySelector('nav'),
      toggle = body.querySelector(".toggle"),
      searchBtn = body.querySelector(".search-box"),
      modeSwitch = body.querySelector(".toggle-switch"),
      modeText = body.querySelector(".mode-text");


    toggle.addEventListener("click", () => {
      sidebar.classList.toggle("close");
    })

    searchBtn.addEventListener("click", () => {
      sidebar.classList.remove("close");
    })
  </script>
  @endsection

</div>
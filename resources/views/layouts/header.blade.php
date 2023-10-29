<nav class="navbar navbar-expand-lg  ps-4  text-white" style="background-color: #42a53b; padding-right:60px;" >
    <div class="container-fluid text-white">
      <a class="navbar-brand text-white" href="/"><h3>PEMILOS</h3></a>
       
      </button>
      
      @auth
      {{-- @if (auth()->user()->admin)
      <a href="/admin" class="btn btn-primary"> Admin </a>
      @endif


      @if (auth()->user()->commit)
      <a href="/commit" class="btn btn-primary"> Panitia </a>
      @endif --}}

      <ul class="navbar-nav ms-auto" padd >
        <li class="nav-item dropdown">
          <a class="nav-link text-white dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Hey {{ Auth::user()->name }}!
          </a>
          <ul class="dropdown-menu me-4" style="margin-right: 0px;">
            <li  class="dropdown-item">
              <form action="{{ route('logout') }}" method="post">
                @csrf
              
              <button  class="btn btn-danger" type="submit">Logout</button>
            </li>
          </form>
            {{-- <li><i a class="dropdown-item" href="/logout">Logout</i></li> --}}
            {{-- <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li> --}}
          </ul>

          </li>
        </ul>


       
        @endauth
       
      </div>
    </div>
  </nav>
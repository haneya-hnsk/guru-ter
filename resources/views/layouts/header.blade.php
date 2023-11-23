<nav class="navbar navbar-expand-lg  ps-4  text-white" style="background-color: #42a53b; padding-right:60px;" >
    <div class="container-fluid text-white">
      <a class="navbar-brand text-white" href="/"><h3>E-Voting Guru Berprestasi</h3></a>
       
      </button>
      
      @auth
      {{-- @if (auth()->user()->admin)
      <a href="/admin" class="btn btn-primary"> Admin </a>
      @endif


      @if (auth()->user()->commit)
      <a href="/commit" class="btn btn-primary"> Panitia </a>
      @endif --}}

      <ul class="navbar-nav ms-auto" padd >
        
          <a class="nav-link text-white" href="#" role="button" data-bs-toggle="" aria-expanded="false">
           Hai {{ Auth::user()->name }}!
          </a>
          <ul class="dropdown-menu me-4" style="margin-right: 0px;">
          
         
            {{-- <li><i a class="dropdown-item" href="/logout">Logout</i></li> --}}
            {{-- <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li> --}}
          </ul>

        </ul>


       
        @endauth
       
      </div>
    </div>
  </nav>
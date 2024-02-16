<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
   <div class="container">
      <a class="navbar-brand" href="/">Rumah Sakit</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
         aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
         <ul class="navbar-nav">
            <li class="nav-item">
               <a class="nav-link {{ Request::is('tindakan*') ? 'active' : '' }}" href="/tindakan">Tindakan</a>
            </li>
            <li class="nav-item">
               <a class="nav-link {{ Request::is('pasien*') ? 'active' : '' }}" href="/pasien">Pasien</a>
            </li>
            {{-- cara menggunakan gate --}}
            @can('admin')
               <li class="nav-item">
                  <a class="nav-link {{ Request::is('perawat*') ? 'active' : '' }}" href="/perawat">Perawat</a>
               </li>
            @endcan
            <li class="nav-item">
            </li>
         </ul>
      </div>

      <div class="text-end">
         @auth
            <a href="" class="text-decoration-none text-light">{{ auth()->user()->name }} | </a>
            <a href="{{ route('logout') }}" class="text-decoration-none text-light">Logout</a>
         @else
            <a href="{{ route('login') }}" class="text-decoration-none text-light">Login</a>
         @endauth
      </div>
   </div>
</nav>

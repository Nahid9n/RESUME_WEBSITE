<nav class="navbar navbar-expand-lg navbar-light menucolor">
  <div class="container-fluid">
    <img class="brand-logo m-3" src="{{asset('images/logo.png')}}" alt="">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav m-4 ">
        <a class="nav-link active text-dark m-2" aria-current="page" href="{{url('/')}}"><i class="bi bi-house-gear"></i> <b>HOME</b> </a>
        <a class="nav-link text-dark m-2" href="{{url('/qualification')}}"><i class="bi bi-gear"></i> <b>QUALIFICATION</b> </a>
        <a class="nav-link text-dark m-2" href="{{url('/project')}}"><i class="bi bi-cast"></i> <b> PROJECTS</b></a>
        <a class="nav-link text-dark m-2" href="{{url('/skill')}}"><i class="bi bi-command"></i> <b>SKILLS</b> </a>
        <a class="nav-link text-dark m-2" href="{{url('/about')}}"><i class="bi bi-person-circle"></i> <b>ABOUT</b> </a>
        
      </div>
    </div>
  </div>
</nav>
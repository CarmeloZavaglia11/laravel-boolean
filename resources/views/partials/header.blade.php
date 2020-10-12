<header>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <a class="navbar-brand" href="#"><img src="https://www.boolean.careers/images/misc/logo.png" class="" alt="logo"></a>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item {{(url()->current() == route('StaticP.home')) ? 'active' : ''}}">
                <a class="nav-link" href="{{route('StaticP.home')}}">Home</a>
            </li>
            <li class="nav-item {{(url()->current() == route('StaticP.contatti')) ? 'active' : ''}}">
                <a class="nav-link" href="{{route('StaticP.contatti')}}">Contatti</a>
            </li>
            <li class="nav-item {{(url()->current() == route('StudentsController.studenti')) ? 'active' : ''}}">
                <a class="nav-link" href="{{route('StudentsController.studenti')}}">Studenti</a>
            </li>
            </ul>
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Iscriviti</button>
        </div>
    </nav>
</header>
<nav class="navbar navbar-expand-lg navbar-dark {{ isset($_COOKIE['warna']) ? ColorNav($_COOKIE['warna'])  : ''}}" id="{{ isset($_GET['page']) && in_array($_GET['page'], ['register', 'login']) ? 'hide-nav' : '' }}">
    <div class="container px-5">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="navbar-nav">
                <a class="nav-link active"  aria-current="page" href="/">Home</a>
                <a class="nav-link"  href="my-car">Mycar</a>
            </div>
        </div>
        
        <div class="navbar-home">
            <div class="dropdown" id="{{ !isset($_COOKIE['nama']) ? 'hide' : '' }}">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ isset($_COOKIE['nama']) ? $_COOKIE['nama']: '' }}
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="Kemal_index.php?page=profil">Profile</a></li>
                    <li><a class="dropdown-item" href="Kemal_index.php?page=logout">Logout</a></li> 
                </ul>
            </div>
            <div class="navcar">
                <a id="{{ isset($_COOKIE['nama']) ? 'hide' : '' }}" class="nav-link nav-login" href="/login">Login</a>
            </div>
        </div>
        <div>
         <a href="Kemal_index.php?page=additem" id="{{ !isset($_COOKIE['nama']) ? 'hide' : '' }}" class="addcar-button">Add Car</a>
        </div>
    </div>
</nav>
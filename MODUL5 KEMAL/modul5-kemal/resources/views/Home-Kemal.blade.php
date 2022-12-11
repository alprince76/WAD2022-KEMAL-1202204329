<!DOCTYPE html>
<html lang="en">

@include('partial.header')
<body>
  
    @include('partial.navbar')
    <section>
        <div class="container">
            <div class="row home-banner">
                <div class="col home-title">
                    <h1 class="display-4"><b>Selamat Datang di Showroom Kemal</b></h1>
                    <p class="lead">Rasakan service terbaik dengan layanan kami.</p>
                    <a href="">
                        <button type="button" id="{{ !isset($_COOKIE['nama']) ? 'hide' : ''}}" class="btn btn-primary btn-lg">Mycar</button> 
                    </a>
                    <div class="rows-home d-flex">
                        <div>
                            <img src="Asset/logo-ead 1.png" alt="logo ead">
                        </div>
                        <div class="nim">
                            <p> Kemal Aziz_1202204329</p> 
                        </div>
                    </div>
                </div>
                <div class="col">
                    <img src="Asset/Image.png" alt="Mycar" class="img-fluid">
                </div>
            </div>
        </div>

    </section>
    



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
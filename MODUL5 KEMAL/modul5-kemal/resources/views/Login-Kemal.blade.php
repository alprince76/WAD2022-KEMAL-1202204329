<!DOCTYPE html>
<html lang="en">

@include('partial.header')
<body>
    @include('partial.navbar')
    <section class="register">
        <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
        <div class="row gx-lg-5 align-items-center mb-5">
            <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
            </div>

            <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
            <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
            <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

        <div class="bg-gridtongs">
            <form action="/login" method="post">
                @csrf
                    <div> <h1>Login</h1></div>
                    <div class="mb-3">
                        <label for="Name1" class="form-label"><b>Email</b></label>
                        <input type="email" value="" placeholder="Email" name="Email-user" class="form-control" id="Email" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text"></div>
                    </div>
                    <div class="mb-3">
                    <div class="mb-3">
                        <label for="DaysDur" class="form-label"><b>Kata Sandi</b></label>
                        <input type="password" value="" placeholder="Password" name="Pasd" class="form-control" id="passd">
                    </div>
                    <div class="form-check mb-4">
                        <input class="form-check-input me-2" type="checkbox" value="" name="remem" id="form2Example33" checked />
                        <label class="form-check-label" for="form2Example33">
                        Remember me
                        </label>
                    </div>
                    <div>
                        <input type="submit" class="btn btn-primary booking-cta" value="Login">
                    </div>
                    <div class="notedS">
                        <p>Anda sudah punya akun? <a href="/register">Daftar</a></p>
                    </div>
            </form>
        </div>

    </section>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
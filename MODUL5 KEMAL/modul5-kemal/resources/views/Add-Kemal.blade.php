<!DOCTYPE html>
<html lang="en">
@include('partial.header')
<body>
    @include('partial.navbar')
    <section>
        <div class="title-form">
            <h1>Tambah Mobil</h1>
            <p>Tambah mobil Baru anda Ke List Showroom Kemal</p>
        </div>

        <form class="form1"  action="{{route('my-car.store')}}" method="post" enctype="multipart/form-data">
            @csrf
                <div class="mb-3">
                    <label for="Name1" class="form-label"><b>Nama Mobil</b></label>
                    <input type="text" value="" placeholder="BMW i4" name="Nama_Mobil" class="form-control" id="Name1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text"></div>
                </div>
                <div class="mb-3">
                    <label for="Date1" class="form-label"><b>Nama Pemilik</b></label>
                    <input type="text" value="Kemal-1202204329" name="Nama_Pem" class="form-control" id="Uname1">
                </div>
                <div class="mb-3">
                    <label  class="form-label"><b>Merk</b></label>
                    <input type="text" value="" placeholder="BMW" name="Brand" class="form-control" id="brand1">
                </div>
                <div class="mb-3">
                    <label for="DaysDur" class="form-label"><b>Tanggal Beli</b></label>
                    <input type="date" value="" name="Tanggals" class="form-control" id="DaysDur">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label"><b>Deskripsi</b></label>
                    <textarea class="form-control" name="Desc" placeholder="Kita disini menjaga sesama perasaan seluruh kustomer kami" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label  class="form-label"><b>Foto</b></label>
                    <input type="file" value="" name="File" class="form-control" id="file1" accept="image/*">
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="statusbayar" value="lunas" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Lunas
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="statusbayar" id="flexRadioDefault2" value="belum-lunas" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                        Belum Lunas
                    </label>
                </div>
                    </div>
                    <button type="submit" class="btn btn-primary booking-cta" value="Selesai">Selesai</button>
                </div>
        </form>

    </section>
    



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
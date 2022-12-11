<!DOCTYPE html>
<html lang="en">
    @include('partial.header')
<body>
    @include('partial.navbar')
    <?php 
    $image = $editcar[0]['image'];
    ?>
    <section>
        <div class="title-form">
            <h1><b>Edit</b></h1>
            <p>{{$editcar[0]['name']}}</p>
        </div>
        <div class="gridtong">
            <div class="img-detail">
                <img src='{{"/Asset/$image"}}' alt="">
            </div>
            <form action="Config/edit.php" enctype="multipart/form-data" method="post">
                    <div class="mb-3">
                        <label for="Name1" class="form-label"><b>Nama Mobil</b></label>
                        <input type="text" value="{{$editcar[0]['name']}}" placeholder="BMW i4" name="Nama_Mobil" class="form-control" id="Name1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text"></div>
                    </div>
                    <div class="mb-3">
                        <label for="Date1" class="form-label"><b>Nama Pemilik</b></label>
                        <input type="text" value="{{$editcar[0]['owner']}}" name="Nama_Pem" class="form-control" id="Uname1">
                    </div>
                    <div class="mb-3">
                        <label for="Time1" class="form-label"><b>Merk</b></label>
                        <input type="text" value="{{$editcar[0]['brand']}}" placeholder="BMW" name="Brand" class="form-control" id="brand1">
                    </div>
                    <div class="mb-3">
                        <label for="DaysDur" class="form-label"><b>Tanggal Beli</b></label>
                        <input type="date" value="{{$editcar[0]['purchase_date']}}" name="Tanggals" class="form-control" id="DaysDur">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label"><b>Deskripsi</b></label>
                        <textarea class="form-control" value=">"  name="Desc" placeholder="Kita disini menjaga sesama perasaan seluruh kustomer kami" id="exampleFormControlTextarea1" rows="3">{{$editcar[0]['description']}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="Time1" class="form-label"><b>Foto</b></label>
                        <input type="file" value="" name="File" class="form-control" id="file1">
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="statusbayar"  {{ $editcar[0]['status'] == 'Lunas' ? 'checked' : '' }} id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Lunas
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="statusbayar" {{ $editcar[0]['status'] == 'Belum-Lunas' ? 'checked' : '' }} id="flexRadioDefault2" >
                        <label class="form-check-label" for="flexRadioDefault2">
                            Belum Lunas
                        </label>
                    </div>
                        <input type="submit" class="btn btn-primary booking-cta" name="edit" value="save">
                        <input type="hidden" name="id" value="{{$editcar[0]['id']}}">
                    </div>
                    
            </form>
        </div>

    </section>
    



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
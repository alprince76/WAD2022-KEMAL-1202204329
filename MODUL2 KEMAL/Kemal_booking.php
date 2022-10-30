<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>

<div class="bookingasik">
    <div class="blabel">
    <img src="<?php echo isset($_GET['type']) ? $_GET['type'] : "BMW" ?>.png" alt="car" class="booking-img">
    </div>
    <div class="br">
        <form action="Kemal_index.php?page=mybooking" method="post">
                <div class="mb-3">
                    <label for="Name1" class="form-label">Name</label>
                    <input type="text" value="KEMAL AZIZ_1202204329" name="Name" class="form-control" id="Name1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text"></div>
                </div>
                <div class="mb-3">
                    <label for="Date1" class="form-label">Book Date</label>
                    <input type="date" value="" name="Date" class="form-control" id="Date1">
                </div>
                <div class="mb-3">
                    <label for="Time1" class="form-label">Start Time</label>
                    <input type="time" value="" name="Time" class="form-control" id="Time1">
                </div>
                <div class="mb-3">
                    <label for="DaysDur" class="form-label">Duration (Days)</label>
                    <input type="number" value="" name="Duration" class="form-control" id="DaysDur">
                </div>
                <label for="">Car Type</label>
                <select class="form-select" name="carType">
                    <option value="Toyota Alphard">Toyota Alphard</option>
                    <option value="Pajero">Pajero 4x4</option>
                    <option value="BMW">BMW x6</option>
                </select>
                <div class="mb-3">
                    <label for="Phone1" class="form-label">Phone Number</label>
                    <input type="text" value="" name="Phone" class="form-control" id="Date1">
                </div>
                <div class="mb-3">
                    <label>Tambah Layanan ADD On+</label>
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Jaminan Services1" name="Jaminan" id="flexRadioDefault1" checked>
                    <label class="form-check-label" for="flexRadioDefault1">
                        Jaminan Services diperjalanan (Rp. 100.000)
                    </label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Bensin Full" name="Bensin" id="flexRadioDefault2">
                    <label class="form-check-label" for="flexRadioDefault2">
                        Bensin Full (Rp. 125.000)
                    </label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Supir" name="Supir1" id="flexRadioDefault2">
                    <label class="form-check-label" for="flexRadioDefault2">
                        Supir (Rp. 50.000)
                    </label>
                    </div>
                    </div>
                    <button type="submit" class="btn btn-primary booking-cta">BOOK</button>
                </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</div>
</body>
</html>
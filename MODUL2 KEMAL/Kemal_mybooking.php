<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="home.css">
</head>
<body>
    <div class="container mt-5">
        <h4 class="text-center" style="margin-top : 5px" >Thank You KEMAL AZIZ_1202204329 for Reserving</h4>
        <p  class="text-center" style="margin-top : 5px">please double check your reservation detail</p>
    </div>
    <?php
        $Checkin = isset($_POST['Date']) ? $_POST['Date'] : '';
        $duration = isset($_POST['Duration']) ? (int)$_POST['Duration'] : 0;
        $checkout = date("Y-m-d", strtotime("+$duration days", strtotime($Checkin)));
        $TIME = isset($_POST['Time']) ? $_POST['Time'] : '';
        $car_type = isset($_POST['carType']) ? $_POST['carType'] : '';
        $phone = isset($_POST['Phone']) ? $_POST['Phone'] : '';
        $healthcare = isset($_POST['Jaminan']) ? $_POST['Jaminan'] :  NULL;
        $driver= isset($_POST['Supir1']) ? $_POST['Supir1'] :  NULL;
        $fuel= isset($_POST['Bensin']) ? $_POST['Bensin'] :  NULL;
        $services_price = array();
        $services = array();
        $Total_Bayar = 0;


        if (isset($_POST["Jaminan"])) {
            array_push($services, $_POST["Jaminan"]);
            array_push($services_price, 100000);
        }
        if (isset($_POST["Bensin"])) {
            array_push($services, $_POST["Bensin"]);
            array_push($services_price, 125000);
        }
        if (isset($_POST["Supir1"])) {
            array_push($services, $_POST["Supir1"]);
            array_push($services_price, 50000);
        }

        switch ($car_type) {
            case 'Toyota Alphard':
                $Total_Bayar = $duration * 750000;
                break;
            case 'Pajero':
                $Total_Bayar = $duration * 550000;
                break;
            case 'BMW':
                $Total_Bayar = $duration * 1000000;
                break;
        };

        $Total_Bayar += array_sum($services_price);
    ?>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Booking Number</th>
                <th scope="col">Name</th>
                <th scope="col">Check In</th>
                <th scope="col">Check Out</th>
                <th scope="col">Car Type</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Services</th>
                <th scope="col">Total Prices</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">
                    <?php
                    echo rand()
                    ?>
                </th>
                <td> 
                    <?php
                    echo $_POST["Name"]
                    ?>
                </td>
                <td>
                    <?php
                    echo date($Checkin)
                    ?>
                    <?php
                    echo $TIME
                    ?>
                </td>
                <td>
                    <?php
                    echo $checkout
                    ?>
                    <?php
                    echo $TIME;
                    ?>
                </td>
                <td>
                    <?php
                    echo $car_type
                    ?>
                </td>
                <td>
                    <?php
                    echo $phone
                    ?>
                </td>
                <td>
                    <?php 
                        if (empty($services)) {
                            echo "<p>No Service</p>";
                        } else { ?>
                            <ul>
                                <?php foreach($services as $service) { ?>
                                    <li><?= $service ?></li>
                                <?php } ?>
                            </ul>
                    <?php }?>
                </td>
                <td><?="Rp",number_format($Total_Bayar,0,",",".")?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>
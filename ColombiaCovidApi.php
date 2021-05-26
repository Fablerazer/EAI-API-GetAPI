<?php
    $url = file_get_contents("https://api.covid19api.com/live/country/colombia");
    $data = json_decode($url, true);
?>

<!DOCTYPE html>
<html long="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
    </style>
</head>

<body>
    <div class="col-md-15">
            <div class="card badge-info p-30 mb-20 shadow rounded" style="background-color: #0093ff">
        <div class="card-header text-center">Data Covid-19 Live</div>
        <div class="card-body">
            <h5 class="card-title text-center">Data Perkembangan Covid Colombia</h5>
            <p class="card-text text-center">Jangan Lupa menjaga kesehatan dan mengikuti protokol 3M!</p>
            <p class="card-text text-center"><?= $data[0] ['Date'] ?></p>
        </div>
        </div>

    <div class="container">
    <div class="row mt-4">
        <div class="col md-3">
                <div class="card border-info mb-3" style="max-width: 18rem;">
            <div class="card-header text-center">Terkonfirmasi</div>
            <div class="card-body text-info">
                <h5 class="card-title text-center"><?= $data[0] ['Confirmed'] ?></h5>
                <p class="card-text text-center">Jiwa</p>
            </div>
            </div>
        </div>

        <div class="col md-3">
            <div class="card border-danger mb-3" style="max-width: 18rem;">
            <div class="card-header text-center">Meninggal</div>
            <div class="card-body text-danger">
                <h5 class="card-title text-center"><?= $data[0] ['Deaths'] ?></h5>
                <p class="card-text text-center">Jiwa</p>
            </div>
            </div>
        </div>

        <div class="col md-3">
            <div class="card border-warning mb-3" style="max-width: 18rem;">
            <div class="card-header text-center">Tertangani</div>
            <div class="card-body text-warning">
                <h5 class="card-title text-center"><?= $data[0] ['Active'] ?></h5>
                <p class="card-text text-center">Jiwa</p>
            </div>
            </div>
        </div>

        <div class="col md-3">
                <div class="card border-success mb-3" style="max-width: 18rem;">
            <div class="card-header text-center">Sembuh</div>
            <div class="card-body text-success">
                <h5 class="card-title text-center"><?= $data[0] ['Recovered'] ?></h5>
                <p class="card-text text-center">Jiwa</p>
            </div>
            </div>
        </div>

    </div>
    </div>
    </div>
</body>
</html>
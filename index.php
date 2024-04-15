<?php
$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css' integrity='sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==' crossorigin='anonymous' />

    <title>PHP Hotels</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <h1 class="text-center my-4">PHP Hotel</h1>

    <section class="home-page">
        <div class="container">
            <div class="row row-cols-1 ">
                <?php foreach ($hotels as $hotel) : ?>
                    <div class="col text-center">
                        <div class="h-card m-auto my-3">
                            <h3 class="mb-3">
                                <?php echo $hotel['name']; ?>
                            </h3>
                            <div class="mb-2">
                                Descrizione:
                                <span class="fw-bold">
                                    <?php echo $hotel['description']; ?>
                                </span>
                            </div>
                            <div>
                                Parcheggio:
                                <span class="fw-bold">
                                    <?php $park = $hotel['parking'] === true ? 'si' : 'no' ?>
                                    <?php echo $park ?>
                                </span>
                            </div>
                            <div>
                                Voto:
                                <span class="fw-bold">
                                    <?php echo $hotel['vote']; ?> su 5
                                </span>
                            </div>
                            <div>
                                Distanza dal centro:
                                <span class="fw-bold">
                                    <?php echo $hotel['distance_to_center']; ?> km
                                </span>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

</body>

</html>
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

$data = $_GET;

$filterHotel = $hotels;

// verifico se esiste il filtro
if (isset($data['select-parking'])) {
    // se esiste creo un array in cui pusherò gli hotel con parcheggio
    $filterHotel = [];
    if ($data['select-parking'] === 'parking') {

        foreach ($hotels as $hotel) {
            // se il booleano 'parking' è vero pusho l'hotel
            if ($hotel['parking'] === true) {
                $filterHotel[] = $hotel;
            }
        }
    } else {
        // se il valore non è 'parking' li mostro tutti
        $filterHotel = $hotels;
    }
}

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

    <h1 class="text-center fw-semibold  my-4">PHP Hotel</h1>

    <section class="home-page">
        <div class="container text-center py-3 border-bottom border-2 ">
            <form action="index.php" method="GET">
                <div class="mb-3">
                    <label for="select-parking" class="mb-1">Filtro parcheggio</label>
                    <select name="select-parking" id="parking" class="form-select m-auto">
                        <option value="all" selected>Tutti</option>
                        <option value="parking">Parcheggio</option>
                    </select>
                </div>
                <div>
                    <label for="rating" class="mb-1">Voto</label>
                    <select name="rating" id="rating" class="form-select m-auto">
                        <option selected>Seleziona</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>

                </div>
                <button type="submit" class="btn btn-primary my-3">Filtra</button>
            </form>
        </div>
        <div class="container py-4">
            <div class="row row-cols-3 ">
                <?php foreach ($filterHotel as $hotel) : ?>
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
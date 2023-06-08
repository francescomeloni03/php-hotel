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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>
    <?php
// var_dump( $hotels );
?>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- table -->
                    <table class="table border  m-4">
                        <thead>
                            <tr class=" table-info text-center">
                                <th>Nome</th>
                                <th>Descrizione</th>
                                <th>Parcheggio</th>
                                <th>Voto da 0 a 5</th>
                                <th>Distanza dal centro</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($hotels as $hotel) { ?>
                            <tr class="text-center">
                                <td> <?php echo $hotel["name"]?></td>
                                <td> <?php echo $hotel["description"]?></td>
                                <td><?php echo $hotel["parking"] ? 'Si' : 'No';  ?></td>
                                <td><?php echo $hotel["vote"] ?></td>
                                <td><?php echo $hotel["distance_to_center"] ?></td>
                            </tr>
                            <?php } ?>
                        
                        </tbody>


    </div>
   
</body>

</html>
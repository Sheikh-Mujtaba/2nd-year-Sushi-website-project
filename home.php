<!DOCTYPE>

<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid bg-dark">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link active text-light" aria-current="page" href="home.php">ZUZU</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-light" href="home.php">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-light" href="contact.php">Bestellen</a>
        </li>

    </ul>

</div>

<div class= "container-fluid">
    <div>
        <div class="col-12">
            <img src="imgs/sushi-36.jpg" height= 25% width=100%>
        </div>
    </div>
</div>

<div class="container-md ">
    <header class=" fs-1 text-center mt-5" >
    <?php

    $date = date("G");
    switch($date){
    case $date >= 6 && $date <= 12: echo "GoedeMorgen, welkom bij ZuZu."; break;
    case $date >= 13 && $date < 18: echo "Goedemiddag, welkom bij ZuZu."; break;
    default: echo "Goedenavond, welkom bij ZuZu."; break; }
        ?>

    </header>
</div>
<div class="container-md">
    <p class=" text-center ">Wij zijn gespecialiseerd in de Japnese keuken.<br> Het Woord "sushi is afkomstig van "su",wat azijn betekent. en "shi" Rijst.</p>
</div>
<div class="container">
    <p class="fs-5 text-center ">

        <?php
        $today =date ("j M Y");
        $day =date ("l");
        echo "Vandaag "."<br>". $day .":" . $today ;


        ?>

        <br> Bezorgtijd vanaf nu  <?php echo date("H") + 2 . ":" .date("i"); ?> </p>
</div>


    <div class="container-md ">
        <div class="row">

            <div class="col-6" >

                <div class="card" width=20%>
                    <img class="  ms-5 " src="imgs/sushi-3.jpg" width=550px>
                    <div class="card-body">
                        <h5 class="card-title ms-5 fst-italic">Bestel bij ons je sushi's</h5>
                    </div>
                </div>
            </div>

            <div class="col-6" >

                <div class="card" width=20%>
                    <img class="  ms-5 " src="imgs/sushi-3.jpg" width=550px>
                    <div class="card-body">
                        <h5 class="card-title ms-5 fst-italic">Bestel bij ons je sushi's</h5>
                    </div>
                </div>
            </div>

        </div>

    </div>

<footer class="bottom-0 container-fluid bg-dark">
    <div class=" container-fluid text-center text-light">
        <div class="row">
            <div class="col my-4">
                <p class="m-0"><strong>Contactgegevens</strong></p>
                <p class="m-0">Restaurant ZuZu</p>
                <p class="m-0">Appelstraat 1</p>
                <p class="m-0">1111a Fruit</p>
                <p class="m-0">zuzu@gmail.com</p>
                <p class="m-0">06-12345678</p>
            </div>
            <div class="col mt-4">
                <p class="m-0"><strong>Openingstijden</strong></p>
                <p class="m-0">Maandag: <?php echo date("H") + 2 . ":" .date("i"); ?></p>
                <p class="m-0">Dinsdag: <?php echo date("H") + 2 . ":" .date("i"); ?></p>
                <p class="m-0">Woensdag: <?php echo date("H") + 2 . ":" .date("i"); ?></p>
                <p class="m-0">Donderdag: <?php echo date("H") + 2 . ":" .date("i"); ?></p>
                <p class="m-0">Vrijdag: <?php echo date("H") + 2 . ":" .date("i"); ?></p>
                <p class="m-0">Zaterdag: <?php echo date("H") + 2 . ":" .date("i"); ?></p>
                <p class="m-0">Zondag: <?php echo date("H") + 2 . ":" .date("i"); ?></p>
            </div>
        </div>
        <div>
</footer>

</body>
</html>

<?php

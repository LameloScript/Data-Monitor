<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Ressources/css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Databot - The future at home</title>
</head>

<body>

    <div class="bck">
        <?php
        include("../Ressources/layouts/header2.php");
        ?>
        <div class="sec-h">
            <!-- <img class="arrow"  src="./Ressources/assets/arrow.svg" alt="arrow"></a>  -->
            <span class="joyy">nous contaCter</span>
        </div>
        <section class="ns">
            <div class="blc">
                <img src="../Ressources/assets/logo-nom.png" alt="">
                <p>
                    Vous pouvez nous contacter directement à :
                    <br><strong>Contacts@data-monitor.com</strong>
                    <br>Ou vous nous écrivez via le formulaire
                    de contact. Nous répondons le plus
                    rapidement possible.
                </p>
            </div>
            <div>
                <form action="#" method="post" class="form">
                    <div>
                        <input type="text" id="nom" name="nom" placeholder="Ex: JohnJoe">
                    </div>
                    <div>
                        <input type="email" id="email" name="email" placeholder="Johnjoe@gmail.com">
                    </div>
                    <div>
                        <textarea placeholder="Entrez votre message" id="txtar" cols="18" rows="10"></textarea>
                    </div>
                    <div>
                        <button type="submit">Envoyer</button>
                    </div>
                </form>
            </div>
        </section>
    </div>
    <?php
    include("../Ressources/layouts/footer.php");
    ?>
    <script src="../Ressources/js/header.js"></script>
</body>

</html>
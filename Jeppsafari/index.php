<?php
$kobling = mysqli_connect('localhost', 'root', '', 'jeppsafari')
    or die('Error connecting to MySQL server.');
?>
<html>

<head>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="utf-8">
    <title>Jepp safari</title>

</head>

<body>
    <div class="nav">
        <p id="index" class="active">Hjem
        </p>
        <p id="faq">Kommentarfelt
        </p>
    </div>

<!--tst-->
    <div class="opacity">
        <div class="container">

            <h1 class="indextext">Land Rover Safari - Kongsberg</h1>
            <p class="indextext">I Kongsberg skal det være Land Rover Safari, håper vi. <br><br>Legg igjen en kommentar
                om hva dere tenker om dette i kommentarfeltet på neste side, eller bare les andre sine😋😘🤭</p>
            <h1 class="faqtext">Kommentarer</h1>
            <form class="faqtext" method="POST">
                <h3>Skriv din egen kommentar</h3>
                <textarea name="kommentar" cols="30" rows="4" placeholder="Kommentar"></textarea>
                <input type="submit" name="submit">
            </form>


            <?php
            if (isset($_POST['submit'])) {
                $kommentar = mysqli_real_escape_string($kobling, $_POST['kommentar']);

                if ($kommentar != '') {
                    $sql = "INSERT INTO kommentarer(kommentar) VALUES ('$kommentar')";
                }

                $result = mysqli_query($kobling, $sql)
                    or die('Error querying database.');

                if ($result) {
                    Header('Location: ' . $_SERVER['PHP_SELF']);
                } else {
                    // noe funka ikke
                    echo "Noe gikk galt, prøv igjen!";
                }
            }
            ?>


        </div>
        <div id="komm">
        <?php
        $get = "SELECT kommentar FROM kommentarer";
        $result1 = mysqli_query($kobling, $get);
        while ($row = mysqli_fetch_array($result1)) {
            echo '<div class="faqtext kommentar">';
            echo '<h3>';
            echo $row['kommentar'];
            echo '</h3> </div>';
        }
        ?>
        </div>
    </div>
    <script src="js/script.js"></script>

</body>

</html>
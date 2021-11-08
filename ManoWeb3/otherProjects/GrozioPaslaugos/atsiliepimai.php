<?php include "header.php" ?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "comments";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET["email"]) && !empty($_GET["email"])) {

    $name = $_GET["name"];
    $email = $_GET["email"];
    $comment = $_GET["comment"];


    // print_r($_GET);
    echo "<br><br>";

    $sql = "INSERT INTO comments1 (name, email, comment, aprroval)
VALUES ('$name', '$email', '$comment', 0)";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        header("Location: /GrozioPaslaugos/atsiliepimai.php?status=success");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<div class="container">
    <div class="komentarai">
        <?php
        $sql = "SELECT id, name, email, comment, date  FROM comments1 where aprroval = 1 order by date desc LIMIT 10";
        $result = $conn->query($sql);



        if ($result->num_rows > 0) {
            $i = 1;
            while ($row = $result->fetch_assoc()) {


                // echo "<div class='one'>";

                // echo "<h6 class='atsiliepimuH6'>" . $i . $row["name"] . "</h6>";
                // echo "<p class='paslauguP'>" . $row["comment"] . "</p>";
                if ($i % 2 == 0) {
                    //echo "Lyginis";
                    //echo "<div class='two'>";

                    $class = 'two';
                } else {
                    //echo "Nelyginis";
                    //echo "<div class='one'>";

                    $class = 'one';
                }
                echo "<div class='".$class."'>";
                echo "<h6 class='atsiliepimuH6'>" . $i .  " " . $row["name"] . "</h6>";
                echo "<p class='paslauguP'>" . $row["comment"] . "</p>";
                echo "</div>";
                $i++;
            }
            // echo "</table>";
        } else {
            echo "0 results";
        }
        $conn->close();

        ?>

        <div class="one">

            <h6 class="atsiliepimuH6">Zarina11111 </h6>
            <p class="paslauguP"> Noreciau padekoti kosmetologei.tikrai puiki savo darbo specialiste! Labai rupestinga ir maloni! Lankiusi ne pas viena kosmetologe, bet tokia jaukia atmosfera bei puikius darbo rezultatus gavau tik pas ją! Aciu labai !:)</p>
        </div>

        <div class="two">
            <h6 class="atsiliepimuH6">Mingailė</h6>

            <p class="paslauguP">Lankiausi ne pas viena kosmetologe, bet pas Jelena sugrisiu dar ne karta ir rekomenduoju Ja visom draugem! Labai rupestinga, maloni, o proceduros prabega nepastebimai greitai. Didelis Aciu!
            </p>
        </div>

        

    </div>
    <div class="parasyk">

        <h3>Palikite atsiliepimą apie suteiktas paslaugas</h3>

        <form class="forma" action="" target="_self" id=>
            <input name="name" type="text" placeholder="name" id=five>
            <input name="email" type="email" placeholder="email" id=six>
            <textarea name="comment" id=seven cols="30" rows="8" placeholder="comment"></textarea>
            <br>
            <button>Siųsti</button>
        </form>
    </div>
</div>


<?php include "footer.php" ?>
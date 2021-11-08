<?php include "header.php" ?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kontaktai";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET["status"]) && $_GET["status"] === "success") {

    // echo "Ikelti pavyko ! <br><br>";
}

// if (isset($_GET["name"]) && !empty($_GET["name"]) && isset($_GET["phone"]) && !empty($_GET["phone"]) && isset($_GET["coment"]) && !empty($_GET["coment"]) && isset($_GET["select1"]) && !empty($_GET["select1"])
if (isset($_GET["name"]) && !empty($_GET["name"]) && (isset($_GET["coment"]) && !empty($_GET["coment"]))
) {

    $name = $_GET["name"];
    $phone = $_GET["phone"];
    $coment = $_GET["coment"];
    $select1 = $_GET["select1"];

    // bandysiu ikelti duomenis
    $sql = "INSERT INTO kontaktai (name, phone, coment,select1)
        VALUES ('$name', '$phone', '$coment','$select1')";

    if ($conn->query($sql) === TRUE) {

        //echo "New record created successfully";
        header("Location: /GrozioPaslaugos/contacts.php?status=success");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>


<div class="container">

    <div class="mainContact">

        <div class="contacts">

            <h1 class="kontaktuH1">Susisiekite!</h1>
            <h3 class="contactsH3">Darbo laikas</h3>

            <p class="contactsP">
                Pirmadienis &nbsp;&nbsp;&nbsp;&nbsp; 8.00 - 21.00 <br>
                Antradienis &nbsp;&nbsp;&nbsp;&nbsp; 8.00 - 21.00 <br>
                Trečiadienis &nbsp;&nbsp;&nbsp;&nbsp; 8.00 - 21.00 <br>
                Ketvirtadienis &nbsp;&nbsp;&nbsp;&nbsp; 8.00 - 21.00 <br>
                Penktadienis &nbsp;&nbsp;&nbsp;&nbsp; 8.00 - 21.00 <br>
                Šeštadienis &nbsp;&nbsp;&nbsp;&nbsp; 8.00 - 21.00 <br>
                Sekmadienis &nbsp;&nbsp;&nbsp;&nbsp; 8.00 - 18.00
            </p>

            <br>
            <i class="small material-icons">local_phone</i>
            <pi>&nbsp; +370 67 123 789</pi>
            <br><br>
            <i class="small material-icons">map</i>
            <pi>&nbsp; Gedimino pr. 14, Vilnius 01103</pi>


        </div>



        <div class="maps">

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d969.6835753642353!2d25.280306428351977!3d54.68659279468231!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dd941047c249c9%3A0x3160b9674b283f7b!2sGK%20klinika!5e0!3m2!1slt!2slt!4v1580576457943!5m2!1slt!2slt" frameborder="0" style="border:0;" allowfullscreen=""></iframe>


        </div>



    </div>



    <div class="parasyk">

        <h3 class="contactsH3">Parašykite</h3>

        <form class="forma" action="">
            <input type="text" placeholder="Jūsų vardas *(Privalomas laukas)" name="name" required>
            <select class="browser-default" name="select1">
                <option value="" disabled selected>Pasirinkite varianta</option>
                <option value="Laiko registracija">Laiko registracija </option>
                <option value="Konsultacija dėl proceduros">Konsultacija dėl proceduros</option>
                <option value="Skundas">Skundas</option>
                <option value="Kita">Kita</option>
            </select>
            <input type="phone" placeholder="Telefonas (nuo 9 iki 12 simboliu)" name="phone" minlength="9" maxlength="12" size="12">
            <textarea name="coment" id="" cols="30" rows="8" placeholder="Jūsų žinutė *(Privalomas laukas)" required></textarea>
            <br>
            <button>Siųsti</button>
        </form>


    </div>


</div>


<?php include "footer.php" ?>
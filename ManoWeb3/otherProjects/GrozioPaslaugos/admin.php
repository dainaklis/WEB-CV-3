<?php include "header.php" ?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "comments";


$conn = new mysqli($servername, $username, $password, $dbname);

if (
    isset($_GET["commentid"]) && !empty($_GET["commentid"])
) {

    $commentid = $_GET["commentid"];

    // bandysiu ikelti duomenis
    $sql = "UPDATE comments1 SET aprroval = 1 WHERE id = $commentid";

    if ($conn->query($sql) === TRUE) {

        echo "New record updated successfully";
       
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}







$query = $conn->query("SELECT * FROM `comments1`;");
$array = array();

while ($result = $query->fetch_assoc()) {
    $array[] = $result['comment'];
    echo "<div class=one >";
    echo "<b> Kliento vardas: </b>" . $result['name'] . "<b> Kliento elektroninis pastas: </b>" . $result['email'] . "<b> Ivestas komentaras: </b>" . $result['comment']. $result['aprroval'];
    echo "<br>";
    echo "</div>";

    
    if ($result['aprroval'] == 0) {
        echo "<form>";
        echo "<input type='text' value = '$result[id]' name = 'commentid'>";
        echo "<button> Aprrove </button>";
        echo "</form>";
        }
        // $sql = "UPDATE comments1 SET approval = 1 WHERE id = ($_GET[commentid]);
        

        // $conn->close();
    }

?>

<?php include "footer.php" ?>
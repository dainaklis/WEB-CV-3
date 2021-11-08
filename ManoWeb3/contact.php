
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="styles/contact.css">

    <!-- IDEDAM GOOGLE FONTS STYLES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&display=swap" rel="stylesheet">


    <title>Contact</title>

</head>
<body>

    <div class="hero">
        


        <form method="POST" action="mailAndSave.php" onsubmit="submitted=true;alert('Thank you. Message is sended')">

            <div class="row">
                <div class="input-group">
                    <input name="name" autocomplete = "off" type="text" id = "name" required >
                    <label for="name"> <i class="fas fa-user"></i> Your Name</label>
                </div>

                <div class="input-group">
                    <input name="number" type="text" id = "number"required>
                    <label for="number"> <i class="fas fa-phone-square-alt"></i> Phone No.</label>
                </div>
            </div>        

            <div class="input-group">
                <input name="email" type="email" id = "email"required>
                <label for="email"> <i class="fas fa-envelope"></i> Your Email</label>
            </div>

            <div class="input-group">
                <textarea name="message" id="message" rows="8" required></textarea>
                <label for="message"><i class="fas fa-comments"></i> Your Message</label>
            </div>

            <button onclick="myFunction()" type="submit"> Send Message <i class="fas fa-paper-plane"></i></button>

        </form>

        <i class="fas fa-arrow-down rodykle"></i>

    </div>

    <div class="footer">

        <div class="inside">
            <a href="projectslist.php"><i class="fas fa-backward"></i></a>
            <a href="index.php"><i class="fas fa-home"></i></a>
        </div>


    </div>  

    <script src="https://kit.fontawesome.com/bc9bcc9514.js" crossorigin="anonymous"></script>

    <!-- <script>
        function myFunction() {
            alert("Thank you. Message is sended");
        }
    </script> -->

</body>
</html>








    

<?php  
$email=$_POST["email"];
$msg=$_POST["subject"];

mail("aleksandraskrzypek97@gmail.com",$email,$msg);
 ?>

<!DOCTYPE html>
<html>
<head>
<title>Aleksandra Skrzypek</title>
<meta charset="utf-8">
<link rel="stylesheet" href="stylekontakt.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="asfav.png" type="image/png" sizes="16x16">
</head>
<body>

    <div class="grid-container">
        <div class="item1">
            <nav>
                <ul>
                    <li style="float:left"><a href="index.html">HOME</a></li>
                    <li><a class="active" href="kontakt.html">KONTAKT</a></li>
                    <li><a href="zainteresowania.html">O MNIE</a></li>
                    <li><a href="omnie2.html">MOJE CV</a></li>  
                </ul>
            </nav>
        </div>

        <div class="item2">
            <div class="kontaktzdj">
                <img src="contact.jpg" div class="wtleimg">
                <div class="middle">
                    <div class="grid-container2">
                      
                        <div class="dwa1">
                            <div class="container">
                                <p>Twoja wiadomość została wysłana.</p>
                            </div>
                        </div>
                    </div>
                </div> 
            </div> 
        </div>
        
        <div class="item3"> 
            <footer>
                <p>Autor: Aleksandra Skzypek</p>
            </footer>
        </div>
    </div>
    

</body>
</html>


<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result Oxymeter</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
</head>
<body>
    <section class="header">
        <nav>
            <a href="index.html"><img src="asset/logo.png"></a>
            <div class="nav-link" id="navLink">
                <i class="fa fa-times-circle" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Creator</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <div class="result1">
            <h1>Oxymeter Result</h1>
            <div class="row">
                <div class="suhu-kelembapan">
                    <h2>Suhu<br><br>
                        <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1494528/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"></iframe>
                    </h2>
                </div>
                <div class="suhu-kelembapan">
                    <h2>Kelembapan<br><br>
                        <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1494528/charts/2?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"></iframe>
                    </h2>
                </div>        
            </div>
            
        </div>
    </section>

    <section class="Pengguna">
        
    </section>

    <!---Togel link-->
<script>
    var navLink = document.getElementById("navLink");
    function showMenu() {
        navLink.style.right = "0";
    }
    function hideMenu() {
        navLink.style.right = "-200px";
    }
</script>

</body>
</html>
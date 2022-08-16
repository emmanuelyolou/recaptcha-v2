<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <main>

        <form action="index.php" method="post">
            <!-- <input type="hidden" name="recap-token" id="g-recap"> -->
            <h1>Recaptcha<span class="emphasize">.</span></h1>
            <br><br>
            <input type="text" name="first-name" id="" placeholder="Nom">
            <input type="text" name="last-name" id="" placeholder="Prenom">
            <button class="login">Se connecter
            </button> 
            <br>
            <div class="" id="recap"></div>

        </form>
    </main>
    <!--firebase-->
    <!-- <script src="https://www.google.com/recaptcha/api.js?render=6LdrCGUhAAAAAMjcnina0bHg4tEttexgtlgj1tcE"></script> -->
    <!--localhost-->
    <script src="app.js"></script>
    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
        async defer>
    </script>
</body>
</html>
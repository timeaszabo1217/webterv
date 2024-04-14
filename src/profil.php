<!DOCTYPE html>
<html lang = "hu">
<head>
    <meta charset = "UTF-8">
    <meta name = "viewport" content = "width=device-width, initial-scale=1">
    <link rel = "icon" type = "image/x-icon" href = "favicon.ico?">
    <link rel = "stylesheet" href = "css/style.css">
    <script src = "script/script.js"></script>
    <title>Profil</title>
</head>
<body>
<header class = "header">
    <img id = "headerTitle" src = "assets/img/header_tarnsparent.png" alt = "Calm Fauna">
</header>

<nav id = "navbar">
    <a href = "index.php">Rólunk</a>
    <div class = "subnav">
        <a class = "subnavbtn">Oktatás</a>
        <div class = "subnav-content">
            <a href = "joslas.php">Jóslás tanfolyam</a>
            <a href = "bajital.php">Bájital kotyvasztás tanfolyam</a>
            <a href = "oktatoink.php">Oktatóink</a>
        </div>
    </div>
    <a href = "galeria.php">Galéria</a>
    <a class = "active" id = "profileIcon" href = "profil.php">
        <img src = "assets/img/profile_icon.png" alt = "profil">
    </a>
</nav>



<div class = "fadeIn" id = "profil-elemek">
    <h3>Profil</h3>
    <fieldset id = "bejelentkezes">
        <h3>Bejelentkezés</h3>
        <form method = "POST">
            <label for = "username">Felhasználónév: </label>
            <input type = "text" name = "username" id = "username" required>
            <label for = "passwd">Jelszó: </label>
            <input type = "password" name = "passwd" id = "passwd" required>
            <br>
            <input type = "submit" value = "Bejelentkezés">
        </form>
    </fieldset>

    <div id = "regisztracio">
        <h3>Regisztráció</h3>
            <form action = "feldolgoz.php" method = "POST" enctype = "multipart/form-data">
                <label for = "fullname">Teljes név:</label>
                <input type = "text" name = "full-name" id = "fullname" size = "25" required>
                <label for = "uname">Felhasználónév:</label>
                <input type = "text" name = "username" id = "uname" required>
                <label for = "password">Jelszó:</label>
                <input type = "password" id = "password" name = "password">
                <label>Jelszó ismét: </label>
                <input type = "password" name = "passwd-check" required>
                <label>Születési dátum: </label>
                <input type = "date" name = "date-of-birth" min = "1920-01-01">
                <label>E-mail: </label>
                <input type = "email" name = "email" required>
                <label for = "op1">Férfi:</label>
                <input type = "radio" id = "op1" name = "sex" value = "m">
                <label for = "op2">Nő:</label>
                <input type = "radio" id = "op2" name = "sex" value = "f">
                <label for = "op3">Egyéb:</label>
                <input type = "radio" id = "op3" name = "sex" value = "other" checked>
                <label>Profilkép: </label>
                <input type = "file" name = "profile-pic">
                <label for = "introduction">Bemutatkozás (max. 200 karakter):</label>
                <textarea id = "introduction" name = "intro" maxlength = "200"></textarea>
                <br>
                <input type = "submit" name = "submit-btn" value = "Regisztráció">
            </form>
    </div>
</div>
</body>
</html>
<!DOCTYPE html>
<html lang = "hu">
<head>
    <meta charset = "UTF-8">
    <meta name = "viewport" content = "width=device-width, initial-scale=1">
    <link rel = "icon" type = "image/x-icon" href = "favicon.ico?">
    <link rel = "stylesheet" href = "css/style.css">
    <script src = "script/script.js"></script>
    <title>Jóslás</title>
    <style>
        body {
            background-image: url("assets/img/oktatas_bg.png");
            background-repeat: no-repeat;
            background-size: cover;
            height: auto;
        }
    </style>
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
            <a class = "active" href = "joslas.php">Jóslás tanfolyam</a>
            <a href = "bajital.php">Bájital kotyvasztás tanfolyam</a>
            <a href = "oktatoink.php">Oktatóink</a>
        </div>
    </div>
    <a href = "galeria.php">Galéria</a>
    <a id = "profileIcon" href = "profil.php">
        <img src = "assets/img/profile_icon.png" alt = "profil">
    </a>
</nav>

<div class = "fadeIn" id = "joslas">
    <h3>Jóslás tanfolyamunk</h3>
    <p>Ha érdeklődik a spirituális világ iránt, és szeretne mélyebb tudást szerezni a jóslás területén,
        akkor ez a tanfolyam tökéletes választás lehet az Ön számára!
        A Jóslás Tanfolyamunk olyan szakértő oktatók által vezetett intenzív kurzus,
        amelyben az alapoktól kezdve megtanulja a különböző jóslási módszerek használatát.
        A kurzus során a tarot kártyák, az asztrológia, a numerológia és a kristályok használatát fogjuk tanítani,
        és megtanítjuk, hogyan lehet helyesen értelmezni az egyes jeleket és szimbólumokat.
    </p>
    <br><br>
    <p>
        Kurzus hossza: 2 hónap.
    </p>
    <br><br>
    <p>
        Kurzus időpontja: Minden héten szerda és péntek 17 óra.
    </p>
    <br><br>
    <p>
        A tanfolyam díja: 35 000Ft.
    </p>
    <br><br>
    <p>
        <strong>Várunk szeretettel a kurzusunkon!</strong>
    </p>
</div>

<a href = "profil.php" class = "applybutton">Jelentkezés</a>

<script>
    window.onscroll = function() {stickyNav()};
</script>

<footer>
    <div>
        <h3>Nyitvatartás</h3>
        <table>
            <colgroup>
                <col style = "background-color: var(--background)">
                <col span = "1">
            </colgroup>
            <tbody>
            <tr>
                <th>Hétfő</th>
                <td>8:00 - 20:00</td>
            </tr>
            <tr>
                <th>Kedd</th>
                <td>8:00 - 20:00</td>
            </tr>
            <tr>
                <th>Szerda</th>
                <td>8:00 - 20:00</td>
            </tr>
            <tr>
                <th>Csütörtök</th>
                <td>8:00 - 20:00</td>
            </tr>
            <tr>
                <th>Péntek</th>
                <td>8:00 - 20:00</td>
            </tr>
            <tr>
                <th>Szombat</th>
                <td>10:00 - 22:00</td>
            </tr>
            <tr>
                <th>Vasárnap</th>
                <td>zárva</td>
            </tr>
            </tbody>
        </table>
    </div>
    <div>
        <h3>Elérhetőségeink</h3>
        <ul>
            <li class = "bold">
                Cím:
            <li>
                6722 Szeged, Ady tér 10.
            </li>
            <li class = "bold">
                Telefonszám:
            <li>
                +36 62 246 357
            </li>
            <li class = "bold">
                E-mail (központi):
            <li>
                info@calmfauna.hu
            </li>
        </ul>
    </div>
    <div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d689.7893652214643!2d20.14199622922919!3d46.24709742613547!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4744887a89db9c17%3A0x41b259fd93867ce2!2sSzeged%2C%20Ady%20t%C3%A9r%2010%2C%206722!5e0!3m2!1shu!2shu!4v1679173312358!5m2!1shu!2shu" width="500" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</footer>
</body>
</html>

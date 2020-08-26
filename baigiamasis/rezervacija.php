<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">
    <link rel="stylesheet" href="css/layout.css">
    <link rel="stylesheet" href="css/design.css">

    <title>baigiamasis</title>
</head>

<body>
    <header>
        <div class="menu">
            <a href="index.php">Apie mus</a>
            <a href="paslaugos.php">Paslaugos</a>
            <a href="rezervacija.php">Rezervacija</a>
            <a href="kontaktai.php">Kontaktai</a>
        </div>
    </header>

<div class="">
        <main class="float">

            <div class="rezervacija">
                <h1>Rezervacija</h1>
                <h2>Kambario rezervacijos forma</h2>

<form class="" action="index.php" method="post" onSubmit="return validuotiForma();">
    <input type="text" name="vardas" value="" placeholder="Vardas" id="vardas"> <br>
    <input type="text" name="pavarde" value="" placeholder="pavarde" id="pavarde"> <br>
    <input type="number" id="telNr" value="" placeholder="telefono nr" id="telNr"> <br>
    <input type="text" name="email" value="" placeholder="email" id="email"> <br>
    <input type="date" name="atvykimas" value="" id="atvykimas" >atvykimo data <br>
    <input type="date" name="isvykimas" value="" id="isvykimas">isvykimo data <br>
    <input type="text" name="zmoniuSkaicius" value="" placeholder="zmoniu skaicius" id="zmoniuSkaicius"> <br>
<input type="submit" name="siusti" value="siusti">
</form>

            </div>
        </main>
</div>

        <aside class="float">
            <div class="reklama">
            <p>REKLAMA Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
        </aside>
        <div class="clearfloat"> </div>
    </div>
    <footer>&copy: Justina Mockaityte, baigiamasis darbas</footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15.0.0/dist/smooth-scroll.polyfills.min.js"></script>
<script src="js\rezervacija.js"></script>

</body>


</html>

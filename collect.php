<?php

session_start();
if (isset($_GET['submit'])) {

    if (isset($_GET) && !empty($_GET)) {

        if (isset($_GET['ime']) && ($_GET['ime'])!="" &&
            isset($_GET['prezime']) && !empty($_GET['prezime']) &&
            isset($_GET['email']) && !empty($_GET['email']) &&
            isset($_GET['pol'])) {

                print "Vaseto ime: <b>{$_GET['ime']}</b> <br/>";

                print "Vaseto prezime: <b>{$_GET['prezime']}</b> <br/>";

                print "Vasiot e-mail: <b>{$_GET['email']}</b> <br/>";


                if ($_GET['pol'] == 1) {
                    print "Vasiot pol e masko <br/><br/>";
                }
                if ($_GET['pol'] == 0) {
                    print "Vasiot pol e zensko <br/><br/>";
                }


            print "Uspeshna registracija! <br/><br/>";

            if (isset($_GET['zapamtiMe'])) {
                setcookie("korIme", $_GET['ime'], time() + 7200);


                $sesijaID = session_id();
                setcookie('sesijaID', $sesijaID, time() + 3600);
                $_SESSION["id"] = $sesijaID;
                $_SESSION['korIme'] = $_GET['ime'];
                $_SESSION['last_activity'] = time();
            }
        }
        else{
            print ("Neuspeshna registracija, ne se popolneti site polinja od formata!!! <br/> <br/>");
        }


    }
}
if (isset($_SESSION['id']) && isset($_SESSION['last_activity'])
  && isset($_COOKIE['sesijaID']) && (time() - $_SESSION['last_activity'] < 3600)){
    echo "Hello {$_SESSION['korIme']}, you are still logged in!!!! <br/> <br/>";
}

echo "<a href='form.php'> Vrati se na formata </a>";
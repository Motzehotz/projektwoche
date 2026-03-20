<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $eingabe_email = trim($_POST['email']);
    $eingabe_passwort = trim($_POST['passwort']);
    
    // Alle E-Mails auslesen (Zeilen-Array)
    $emails = file('email.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $passwoerter = file('passwort.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    
    // Prüfe jede Zeile (gleiche Reihenfolge!)
    foreach($emails as $index => $email) {
        if (trim($email) === $eingabe_email && 
            isset($passwoerter[$index]) && 
            trim($passwoerter[$index]) === $eingabe_passwort) {
            
            echo "Daten richtig";
            include("intranet.html");
            // Hier Session starten: session_start(); $_SESSION['user'] = $eingabe_email;
            exit;
        }
    }
    echo "Daten Falsch";
} 
?>

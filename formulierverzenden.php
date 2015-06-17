<?php 
// Contact handel van Wobbesheerd 
$naar = "johan.vlaar.1994@gmail.com"; // Waar moet het naartoe?
$onderwerp = "Contactformulier paardensite"; // Het onderwerp van het bericht
$body = "Dit is een automatisch bericht, graag niet op reageren./n/n"; //$bericht
$headers = "MIME-version: 1.0\r\n";
$headers .= "content-type: text/html;charset=utf-8\r\n";
    $naam = trim($_POST['naam']); // Alle overbodige spaties uit het voornaam veld verwijderen
    $email = trim($_POST['email']); // Alle overbodige spaties uit het email veld verwijderen
    $bericht = trim($_POST['bericht']); // Alle overbodige spaties uit het bericht veld verwijderen
    $fout = false; // Om te kijken straks of er wat fout is
    if(empty($naam)) // Als het voornaam veld niet is ingevuld
    {
        print '<p>Helaas, het naam veld is verplicht maar is nu niet ingevuld!</p>';
        $fout = true; // Zorgen dat het script zometeen weet dat er wat fout is
    }
    if(empty($email)) // Als het email veld niet is ingevuld
    {
        print '<p>Helaas, het email veld is verplicht maar is nu niet ingevuld!</p>';
        $fout = true;
    }
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) // Als het email adres niet correct is
    {
        print '<p>Helaas, het email adres is niet correct!</p>';
        $fout = true;
    }
    if(empty($bericht)) // Als het bericht veld niet is ingevuld
    {
        print '<p>Helaas, het bericht veld is verplicht maar is nu niet ingvuld!</p>';
        $fout = true;
    }
    echo $fout;
    if($fout == false) // Als er niks fout is (alles is dus netjes ingevuld)
    {
        $headers .= 'From: ' . $naam .  '<' . $email . '>'; // Een afzender instellen zodat je kan reageren.
        echo TRUE;
        if(mail($naar, $onderwerp, $body, $naam, $bericht))
        {
            print '<p>Het bericht is succesvol verzonden!</p>';
        }
        else
        {
            print '<p>Helaas, er is wat fout gegaan tijdens het verzenden van het formulier.</p>';
        }
}
print_r($_POST);

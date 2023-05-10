<?php
    require_once('dati_connessione.php');

    $email = $connessione->real_escape_string ($_POST['email']);
    $nome = $connessione->real_escape_string ($_POST['nome']);
    $cognome = $connessione->real_escape_string ($_POST['cognome']);
    $password = $connessione->real_escape_string ($_POST['password']);
    $conferma = $connessione->real_escape_string ($_POST['conferma']);

    $myquery = "SELECT email FROM utente WHERE email = '" . $_POST["email"] . "'";

    $ris = $connessione->query($myquery);

    $num_rows = mysqli_num_rows($ris);

    if($num_rows > 0)
    {
        echo "Questa email è già in uso";
        header('Refresh: 5; URL=../pagine/pagine_php/iscrizione.php');
    }
    else
    {
        if($password !== $conferma)
        {
            header('Refresh: 5; URL=../pagine/pagine_php/iscrizione.php');
            die("le password non corrispondono");
            
        }
            $sql = "INSERT INTO utente (nome, cognome, email, password)
             VALUES ('$nome','$cognome','$email', '$password')";
         
         if(mysqli_query($connessione,$sql) === true)
         {  
                if($password === $conferma)
                {
                    header('Refresh: 2; URL=../home.php');
                }
                else{   
                    echo "Le password non corrispondono";
                    header('Refresh: 1; URL=../pagine/pagine_php/iscrizione.php');
                }
            
         }
    else{
        echo "Errore durante la registrazione" . $connessione->error;
    }
    }

    
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../stile.css">
    <link rel="icon" type="img/png" href="../../immagini/f11.png">
    <title>Pagina di iscrizione</title>
</head>
    <body>
        <header id="haccesso">
            <div class="logoaccesso">
                <a href="../../home.html"><img src="../../immagini/f1logo.png"></a>
            </div>
            <div class="cambio">
                <div class="cambio_a" id="accedi">
                   <a href="../pagine_php/accesso.php">Accedi</a> 
                </div>
                <div class="cambio_a" id="registrati">
                <a href="../pagine_php/iscrizione.php">Registrati</a> 
                </div>
            </div>
        </header>
    <div class="contenitore_accesso">
         <form action="../../file_php/registrazione.php" method="post">
            <label for="nome">Nome</label>
            <input type="text" placeholder="Inserisci Nome" name="nome" id="nome" required>
            <label for="cognome">Cognome</label>
            <input type="text" placeholder="Inserisci Cognome" name="cognome" id="cognome" required>
            <label for="email">Email</label>
            <input type="email" placeholder="Inserisci email" name="email" id="email" required>
            <label for="password">Password</label>
            <input type="password" placeholder="Inserisci Password" name="password" id="password"  required>
            <label for="conferma">Conferma password</label>
            <input type="password" placeholder="Conferma password" name="conferma" id="password"  required>
            <input type="submit" value="Accedi" id="bottone_dati">
        </form>
    </div>
  
    <div class="iscrizione_controllo">
      
    </div>

    </body>

    <script src="../../script_header_footer/script_footer.js"></script>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script>
        $(document).ready(function(){

            $(".icon_bar").click(function(e){

                $(".menu").toggleClass('is-open');
                
                  

                e.preventDefault();

            });

        });
    </script>
</html>
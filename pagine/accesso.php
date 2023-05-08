<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../stile.css">
    <link rel="icon" type="img/png" href="../immagini/f11.png">
    <title>Pagina di accesso</title>
</head>

    <body>
        <header id="haccesso">
            <div class="logoaccesso">
                <a href="../home.html"><img src="../immagini/f1logo.png"></a>
            </div>
            <div class="cambio">
                <div class="cambio_a" id="accedi">
                   <a href="../pagine/accesso.php">Accedi</a> 
                </div>
                <div class="cambio_a" id="registrati">
                <a href="../pagine/iscrizione.php">Registrati</a> 
                </div>
            </div>
        </header>
    <div class="contenitore_accesso" id="contenitoreacc">
        <div class="contenitore_form">
            <form action="../file_php/esempio.php" method="POST">
                <label for="email">Email</label>
                <input type="text" placeholder="Inserisci email" name="email" id="email">
                <label for="password">Password</label>
                <input type="text" placeholder="Inserisci password" name="password" id="password">
                <input type="submit" value="Accedi" id="bottone_dati">
            </form>
        </div>
    </div>
  

    </body>

    <script src="../script_header_footer/script_footer.js"></script>    
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
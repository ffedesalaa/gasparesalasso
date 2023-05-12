<?php
    session_start();
    
    require_once('../file_php/dati_connessione.php');

    if(isset($_SESSION["email"])) $email = $_SESSION["email"];
    if(isset($_SESSION["password"])) $password = $_SESSION["password"];
    if(isset($_SESSION["nome"])) $nome = $_SESSION["email"];
    if(isset($_SESSION["cognome"])) $cognome = $_SESSION["cognome"];
    if(isset($_SESSION["accesso"])) $accesso = $_SESSION["accesso"]; else $acceso = false;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../stile.css">
    <link rel="icon" type="img/png" href="../immagini/f11.png">
    <title>Area personale</title>
</head>
    <body>
        <?php
            include('../script_header_footer/script_header.php');
        ?>
        <div class="contenitore_area_personale">
            <div class="info">
                    <?php
                        $connessione = new mysqli("localhost", "root", "", "formula_1");
                        if($connessione->connect_error){
                          die("<p>Connessione al server non riuscita: ".$connessione->connect_error."</p>");
                        }
    
                        $sql = "SELECT nome, cognome, email, password FROM utente WHERE email = '$email'";
    
                        $ris = $connessione->query($sql) or die("<p>Query fallita!</p>");
    
                        foreach($ris as $riga)
                        {
                          echo '
                            <idv class="contenitore_info">

                                <div class="credenziali">
                                    <p>Nome: '.$riga["nome"].'</p>
                                    <p>Cognome: ' .$riga["cognome"].'</p>
                                    <p>Email: ' .$riga["email"].'</p>
                                    <p>Password: '.$riga["password"].'</p>
                                </div>

                                <div class="contieni_edit">
                                    <div class="edit" id="mnome"> <a href="">Modifica</a> </div>
                                    <div class="edit" id="mcognome"> <a href="">Modifica</a> </div>
                                    <div class="edit" id="memail"> <a href="">Modifica</a> </div>
                                    <div class="edit" id="mpassword"> <a href="">Modifica</a> </div>

                                </div>

                             
                            </div>
                            <div class="modifican">
                            <form action="'. $_SERVER['PHP_SELF'] .'" method="POST" id="form_modifica">
                               <input type="text" placeholder="Modifica" name="modifica_nome">
                               <input type="submit" value="Conferma modifica" id="bottone_modifica">
                            </form>
                           </div>

                           <div class="modificac">
                           <form action="'. $_SERVER['PHP_SELF'] .'" method="POST" id="formmodifica">
                              <input type="text" placeholder="Modifica" name="modifica_nome">
                           </form>
                          </div>

                          <div class="modificae">
                          <form action="'. $_SERVER['PHP_SELF'] .'" method="POST" id="formmodifica">
                             <input type="text" placeholder="Modifica" name="modifica_nome">
                          </form>
                         </div>

                         <div class="modificap">
                         <form action="'. $_SERVER['PHP_SELF'] .'" method="POST" id="formmodifica">
                            <input type="text" placeholder="Modifica" name="modifica_nome">
                         </form>
                        </div>
                            ';  
                        }


                     ?>
            </div>
        </div>

        

    </div>
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

    

<script>
        $(document).ready(function(){

            $("#mnome").click(function(e){

                $(".modifican").toggleClass('apri');
                
                  

                e.preventDefault();

            });

        });
    </script>

    <script>
        $(document).ready(function(){

            $("#mcognome").click(function(e){

                $(".modificac").toggleClass('apri');
                
                  

                e.preventDefault();

            });

        });
    </script>
    <script>
        $(document).ready(function(){

            $("#memail").click(function(e){

                $(".modificae").toggleClass('apri');
                
                  

                e.preventDefault();

            });

        });
    </script>
    <script>
        $(document).ready(function(){

            $("#mpassword").click(function(e){

                $(".modificap").toggleClass('apri');
                
                  

                e.preventDefault();

            });

        });
    </script>
    </body>
</html>
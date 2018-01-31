<?php
/*$PAGEU = isset($_REQUEST["PAGE"])? $_REQUEST["PAGE"] : null;
trim ($PAGEU);*/
if(isset($_REQUEST["PAGE"])){
    $PAGEU=$_REQUEST["PAGE"]; 
    trim ($PAGEU);
}else{
    $PAGEU="/Bob-TW/index.php";
}
?>
 <div id="page">
        <div id="menu">
            <ul id="menu_sito">
                <li class="punto_sito">
                    <a href="index.php"><span xml:lang="en"> Home </span></a>
                </li>
                <li class="punto_sito">
                    <a href="chi_siamo.php"> Chi siamo </a>
                </li>
                <li class="punto_sito">
                    <a href="come_raggiungerci.php"> Come raggiungerci</a>
                </li>
                <li class="punto_sito">
                    <a href="impianti.php"> Impianti </a>
                </li>
                <li class="punto_sito">
                    <a href="biglietti_prezzi.php"> Biglietti &amp; prezzi</a>
                </li>
                <li class="punto_sito">
                    <a href="noleggio_attrezzatura.php"> Noleggio attrezzature </a>
                </li>
                <li class="punto_sito">
                    <a href="galleria.php"> Galleria </a>
                </li>
            </ul>
        </div>

        <div id="middle">
            <form id="form_login" method="post" <?php echo 'action="phpf/controlloconnessione.php?PAGE='.$PAGEU.'"'; ?> >
                <h1>Login</h1>
                <label for="Username">Username:</label>
                <input type="text" class="input" size="20" name="uname" id="uname" placeholder="Username"/>
                <br/>
                <label for="Password">Password:</label>
                <input type="password" class="input" size="20" name="upassword" id="upassword" placeholder="Password"/>
                <br/>
                <input class="button"type="submit" value="Login"/>
                <br> 
                <?php
                if(isset($_REQUEST["errl"])){
                    $varl=$_REQUEST["errl"];
                    if($varl == 1)
                        echo "Username o password non validi";
                }
                //BR VA BENE? SE SI DEVO CHUDERLO? A SEMPRE FISSO O SOLO IN CASO DI ERRORE CIOE' DENTRO IF
                ?>
            </form>

            <form id="form_registrazione" method="post" action="phpf/inserisciutente.php">
                <h1>Registrati</h1>
                <label for="Username">Username:</label>
                <input type="text" class="input" size="20" name="reg_username" placeholder="Username"/><br/>
                <label for="Password">Password:</label>
                <input type="password" class="input" size="20" name="reg_password" placeholder="Password"/><br/>
                <label for="Nome">Nome:</label>
                <input type="text" class="input" size="20" name="reg_name" placeholder="Nome"/><br/>
                <label for="Cognome">Cognome:</label>
                <input type="text" class="input" size="20" name="reg_surname" placeholder="Cognome"/><br/>
                <label for="Email"><span xml:lang="en">Email</span>:</label>
                <input type="email" class="input" size="20" name="reg_email" placeholder="E-mail" required="required"/> <br/>
                <label for="Sesso M">Sesso: </label>
                <div id="sesso_form">
                    M<input type="radio" class="input" size="20" name="gender" value="M" checked="checked"/>
                    F<input type="radio" class="input" size="20" name="gender" value="F"/><br/>
                </div>
                <label for="Data di nascita">Data di nascita:</label>
                <input type="text" class="input" size="20" name="reg_d" placeholder="DD"/>
                <input type="text" class="input" size="20" name="reg_m" placeholder="MM"/>
                <input type="text" class="input" size="20" name="reg_y" placeholder="YYYY"/>
                <input class="button"type="submit" value="Registrati"/>
                <input class="button" type="reset" value="Cancella"/>
                <br> 
                <?php
                if(isset($_REQUEST["err"])){
                    $var=$_REQUEST["err"];
                    if($var == 2)
                        echo "Inserisci una data valida";
                    if($var == 3)
                        echo "Mail già presente nel database";
                    if($var == 4)
                        echo "Username già presente nel database";
                    if($var == 5)
                        echo "Inserisci username e di almento tre caratteri";
                    if($var == 6)
                        echo "Inserisci un nome";
                    if($var == 7)
                        echo "Inserisci un cognome";
                    if($var == 1)
                        echo "Inserimento non avvenuto";
                }
                //BR VA BENE? SE SI DEVO CHUDERLO? A SEMPRE FISSO O SOLO IN CASO DI ERRORE CIOE' DENTRO IF
                ?>
            </form>
        </div>
        <!-- middle -->
    </div>
    <!--page-->
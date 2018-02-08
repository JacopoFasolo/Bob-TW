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
 

        <div id="middle">
            <form id="form_login" method="post" <?php echo 'action="php/controlloconnessione.php?PAGE='.$PAGEU.'"'; ?> >
                <h1>Login</h1>
                <label for="Username">Username:</label>
                <input type="text" size="20" name="uname" id="uname" placeholder="Username" tabindex="20"/>
                <br/>
                <label for="Password">Password:</label>
                <input type="password" size="20" name="upassword" id="upassword" placeholder="Password" tabindex="21"/>
                <br/>
                <input class="button" type="submit" value="Login" tabindex="22"/>
                <br/> 
                <?php
                if(isset($_REQUEST["errl"])){
                    $varl=$_REQUEST["errl"];
                    if($varl == 1)
                        echo "Username o password non validi";
                }
                //BR VA BENE? SE SI DEVO CHUDERLO? A SEMPRE FISSO O SOLO IN CASO DI ERRORE CIOE' DENTRO IF
                ?>
            </form>

            <form id="form_registrazione" method="post" action="php/inserisciutente.php">
                <h1>Registrati</h1>
                <label for="Username">Username:</label>
                <input type="text" size="20" name="reg_username" placeholder="Username" tabindex="23"/><br/>
                <label for="Password">Password:</label>
                <input type="password" size="20" name="reg_password" placeholder="Password" tabindex="24"/><br/>
                <label for="Nome">Nome:</label>
                <input type="text" size="20" name="reg_name" placeholder="Nome" tabindex="25"/><br/>
                <label for="Cognome">Cognome:</label>
                <input type="text" size="20" name="reg_surname" placeholder="Cognome" tabindex="26"/><br/>
                <label for="Email"><span xml:lang="en">Email</span>:</label>
                <input type="email" size="20" name="reg_email" placeholder="E-mail" required="required" tabindex="27"/> <br/>
                <label for="Sesso M">Sesso: </label>
                <div id="sesso_form">
                    M<input type="radio" size="20" name="gender" value="M" checked="checked" tabindex="28"/>
                    F<input type="radio" size="20" name="gender" value="F" tabindex="29"/><br/>
                </div>
                <label for="Data di nascita">Data di nascita:</label>
                <div id="datanascita">
                    <input type="text" size="20" name="reg_d" placeholder="DD" tabindex="30"/>/
                    <input type="text" size="20" name="reg_m" placeholder="MM" tabindex="31"/>/
                    <input type="text" size="20" name="reg_y" placeholder="YYYY" tabindex="32"/>
                </div>
                <input class="button" type="submit" value="Registrati" tabindex="33"/>
                <input class="button" type="reset" value="Cancella" tabindex="34"/>
                <br/> 
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
<?php
	echo file_get_contents("../Pezzi di pagina/header_login.html");
?>

<div>
    <form action="controlloconnessione.php" method="post" >
        <div>
            <label><b>Username:</b></label>
            <input type="text" name="uname" id="uname" placeholder="nome utente"/>
            <label><b>Password</b></label>
            <input type="password" name="upassword" id="upassword" placeholder="**********" />
            <button type="submit" class="btn btn-primary">Login</button>
        </div>
        <div id="err">

            <?php
               if(isset($_REQUEST["err"]))
                    echo "Nome utente o password non valido!";
            ?>

        </div>
    </form>
</div>

<?php
	echo file_get_contents("../Pezzi di pagina/footer.html");
?>
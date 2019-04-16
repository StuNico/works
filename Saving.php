<!DOCTYPE html>
<html>
    <head>
        <title>→← saving →←</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
    </head>
    <body>
        <?php
            $db = new mysqli("localhost","root","","login");
            $comm="insert into referenze(nome,cognome,username,password) values (?,?,?,?);";
            $status =$db->prepare($comm);
            $status->bind_param(
                'ssss',
                $_POST["Name"],
                $_POST["Surn"],
                $_POST["Usrn"],
                $_POST["Pswd"]
            );
            $status->execute();
            $db->close();
        
            echo "<br>Dati Inseriti con Successo.";
        ?>
        <input type="Button" value="Back to menu" onClick="document.location.href='index.php'">
    </body>
</html>
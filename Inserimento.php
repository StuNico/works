<!DOCTYPE html>
<html>
    <head>
        <title> →Insert← </title>
        <script>
            function check()
            {
                if(document.getElementById("name").value!="" && document.getElementById("surname").value!="" && document.getElementById("username").value!="" && document.getElementById("password")!="")
                {
                    document.getElementById("sub").disabled=false;
                }
                else{
                    document.getElementById("sub").disabled=true;
                }
            }
        </script>
        <?php
            function save()
            {
                $db = new mysqli("localhost","root","login");
                $comm="insert into referenze(nome,cognome,username,password) values (".$name.",".$sur.",".$usrn.",".$pas.");";
                $status->execute();
                $db->close();
                echo "Dati Inseriti con Successo.";
            }
        ?>
        
    </head>
    <body>
        <form action="Saving.php" method="post">
            <table>
                <tr>
                    <th> Name </th>
                    <td><input type="text" id="name" name="Name"></td>
                </tr>
                <tr>
                    <th> Surname </th>
                    <td><input type="text" id="surname" name="Surn"></td>
                </tr>
                <tr>
                    <th> Username </th>
                    <td><input type="text" id="username" name="Usrn"></td>
                </tr>
                <tr>
                    <th> Password </th>
                    <td><input type="password" id="pass" name="Pswd"></td>
                </tr>
            </table>

            
            <input type='submit' id='sub' value='Sent' onClick='save()' disabled>
            <input type="button" value="Check inputs" onClick="check()">
        </form>
    </body>
</html>


<!--
CREATE TABLE referenze(
    ID int unsigned primary key auto_increment not null,
    Nome varchar(20) not null,
    Cognome varchar(20) not null,
    Username varchar(50) not null,
    password varchar(50) not null
);

INSERT INTO referenze(nome,cognome,username,password) values ($_POST["n"],$_POST["c"],$_POST["u"],$_POST["p"]);
-->
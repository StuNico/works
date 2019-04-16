<!DOCTYPE html>
<html>
    <head>
        <title> →View← </title>
        <link href="styleview.css" type="text/css" rel="stylesheet">
    </head>
    <body>
        <?php
        $db = new mysqli("localhost","root","","login");
        $comm="select * from referenze;";
        $result=$db -> query($comm);

        if($result->num_rows>0)
        {
            echo "<table>";
            echo "<tr>";
            echo "<th colspan='5' id='title'> Results</th>";
            echo "</tr>";
            echo "<tr>";
            echo "<th>ID</td>";
            echo "<th colspan='2'>Nominativo</th>";
            echo "<th>Username</th>";
            echo "<th>Password</th>";
            echo "</tr>";
            while($row=$result->fetch_assoc())
            {
                echo "<tr>";
                echo "<td>".$row["ID"]."</td>";
                echo "<td>".$row["Nome"]."</td>";
                echo "<td>".$row["Cognome"]."</td>";
                echo "<td>".$row["Username"]."</td>";
                echo "<td>".$row["password"]."</td>";
                echo "</tr>";
            }
            echo "</table>";
        }else{
            echo "No Results";
        }
        $db->close();
        ?>
        <br>
        <input type="button" value="Back to home" onClick="document.location.href='index.php'">
    </body>
</html>
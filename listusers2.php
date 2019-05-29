<?php
echo "Test";

    try{
        $dbh = new PDO('mysql:host=localhost;dbname=registration', 'root','');
       
        $dbh ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       
        $q = "SELECT * FROM users";
        
        echo "<table>";
        echo "<tr><th>User Name</th><th>Password</th></tr>";
        
        foreach ($dbh->query($q) as $row){
            echo "<tr>";
            
            echo "<td>";
            print $row['username']. "\t";
            echo "</td>";
            
            echo "<td>";
            print $row['password']. "\t";
            echo "</td>";
            
            echo "</tr>";
        }
        echo "</table>";
        
        
        
    }catch(PDOException $e){
        
    error_log('PDOException - ' . $e->getMessage(), 0);

 }
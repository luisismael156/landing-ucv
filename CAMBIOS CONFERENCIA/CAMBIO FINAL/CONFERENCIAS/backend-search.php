<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
try{
    $pdo = new PDO("mysql:host=localhost;dbname=somosucv_colegios", "somosucv_smvvocg", "x)Y1=Y.%BUgQ");
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}
 
// Attempt search query execution
try{
    if(isset($_REQUEST["term"])){
        
        $depa = $_REQUEST["depa"];
        $prov = $_REQUEST["prov"];
        $dist = $_REQUEST["dist"];
        $consulta = new PDO("mysql:host=localhost;dbname=somosucvedu_ubigeo", "somosucv_smvvocg", "x)Y1=Y.%BUgQ");
               
        function getSingleValue($conn, $sql, $parameters)
        {
            $q = $conn->prepare($sql);
            $q->execute($parameters);
            return $q->fetchColumn();
        }

        $depafinal = getSingleValue($consulta, "select name from ubdepartamento where id=?", [$depa]);
        $provfinal = getSingleValue($consulta, "select name from ubprovincia where id=?", [$prov]);
        
        // create prepared statement
        $sql = "SELECT * FROM colegios WHERE departamento = :depa AND provincia = :prov AND nombre LIKE :term ORDER BY nombre";
        $stmt = $pdo->prepare($sql);
        $term = $_REQUEST["term"] . '%';
        
        // bind parameters to statement
        
        $stmt->bindParam(":depa", $depafinal);
        $stmt->bindParam(":prov", $provfinal);
        $stmt->bindParam(":term", $term);
        // execute the prepared statement
        $stmt->execute();
        if($stmt->rowCount() > 0){
            while($row = $stmt->fetch()){
                echo "<p>" . $row["nombre"] . "</p>";
            }
        } else{
            echo "<p>No hay coincidencias</p>";
        }
    }  
} catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}
 
// Close statement
unset($stmt);
 
// Close connection
unset($pdo);
?>
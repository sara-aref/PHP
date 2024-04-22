<?php
require_once 'connect.php';

    $std_id = $_GET['id'];

    try {
        $pdo = connect_to_db();
        $delete_query = "DELETE FROM users WHERE id = :id";
        $stmt = $pdo->prepare($delete_query );
        $stmt->bindParam(':id', $std_id, PDO::PARAM_INT);
        $res = $stmt->execute();
        header("Location: table.php");
        
    } catch(PDOException $e) {
        echo $e->getMessage();
    }

?>


<?php

include 'conexion.php';

$conn = new Conexion();

function addTodo($todo)
{
    $insert = "INSERT INTO todos(nombre, descripcion, categoria, fecha_limite, estado) 
                VALUES(:nombre, :descripcion, :categoria, :fecha_limite, :estado)";

    global $conn;
    $stmt = $conn->conectar()->prepare($insert);
    $stmt->execute($todo); //se inserta
}

function getLastTodo()
{
    $select = "SELECT id, nombre, descripcion, categoria, DATE_FORMAT(fecha_limite, '%d/%m/%Y') as fecha_limite, estado from todos order by id desc limit 1";

    global $conn;
    $stmt = $conn->conectar()->prepare($select);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}
<?php
$serverName = "localhost\SQLEXPRESS"; //serverName\instanceName
$connectionInfo = array( "Database"=>"Norden", "UID"=>"sa", "PWD"=>"123456", "CharacterSet" => "UTF-8");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
     echo "Connection established.<br />";
}else{
     echo "Connection could not be established.<br />";
     die( print_r( sqlsrv_errors(), true));
}


$sql = "SELECT nome, cpf FROM Usuario";
$params = array();
$options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
$stmt = sqlsrv_query( $conn, $sql , $params, $options );

$row_count = sqlsrv_num_rows( $stmt );

while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
  echo $row['nome']."<br />";
  echo $row['cpf']."<br \>";
}

    if ($row_count === false)
       echo "Error al obtener datos.";
    else
      //echo "bien";
    echo $row_count;

    while( $row = sqlsrv_fetch_array( $stmt) ) {
          print json_encode($row);
    }

sqlsrv_close($conn);


var_dump($_POST);

echo '<script> alert("ovo" </script>';



?>
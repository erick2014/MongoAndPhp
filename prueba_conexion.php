<?php
  try{
    $mongo=new MongoClient();
    $databases=$mongo->listDBs();//listar toda las bases de datos
    echo '<pre>';
    print_r($databases);
    echo '</pre>';
    $mongo->close();
  }
  catch(MongoConnectionException $e){
    //manejar error conexion
    die($e->getMessage());
  }
?>
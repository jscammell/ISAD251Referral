<?php

    // specify your own database credentials
    const DB_SERVER = 'Proj-mysql.uopnet.plymouth.ac.uk';
    const DB_USER = 'ISAD251_JScammell';
    const DB_PASSWORD = 'ISAD251_22212869';
    const DB_DATABASE = 'ISAD251_JScammell';

    function getConnection()
        {

        try
        {
            $dbConnection = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);

        }  catch (PDOException $err)
        {
            echo 'Connection failed: ', $err->getMessage();
        }
        return $dbConnection;
        }



?>
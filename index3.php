<!DOCTYPE html>
<html>
<head>
<title>PHP Starter Application</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="style.css" />
</head>
<body>
<?php
    $driver      = "DRIVER={IBM DB2 ODBC DRIVER};";
    
    $database    = "BLUDB";         # Get these database details from
    $hostname    = "dashdb-txn-sbox-yp-dal09-04.services.dal.bluemix.net";   # the Connect page
    $port        = 50000;           # web console.
    $user        = "pjw17276";    #
    $password    = "8w+4m43c303lmwdh";    #
    $dsn         = "DATABASE=$database;" .
    "HOSTNAME=$hostname;" .
    "PORT=$port;" .
    "PROTOCOL=TCPIP;" .
    "UID=$user;" .
    "PWD=$password;";
    
    $conn_string = $driver . $dsn;
    echo $conn_string;
    
    $conn        = odbc_connect( $conn_string, "", "" );
    echo 'Connection successful.';
    ?>
</body>
</html>

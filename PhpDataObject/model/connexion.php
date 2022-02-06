<?php
    $servername = "localhost";

    // $username = "username";
    $username = "root";

    // $password = "password";
    $password = "";

    // $dbname = "myDB";
    $dbname = "dragonphp";

    try {
        //Instancier l'objet PDO
        $conn = new PDO("mysql:host=$servername;dbname=dragonphp", $username, $password, array(PDO::ATTR_PERSISTENT => true)); //$conn contient la "connexion"

        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo $dbname. '<br>';
        echo "Connected successfully, Mothafucka";
        echo '<br>';

    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        die();
    }


    // <!-- Gestion des erreurs de connexion -->
        // try {
        //     $dbhost = 'localhost';
        //     $dbuser = 'roott'; // Erreur dans le nom de l'utilisateur
        //     $dbpass = '';
        //     $dbname = 'mycomments';
        //     $conn = new PDO('mysql:host='.$dbhost.';dbname='.$dbname, $dbuser, $dbpass);

        //     //Ajout de PDO::ATTR_PERSISTENT => true : connexion persistantes
        //     //permet d'éviter la surcharge d'établissement d'une nouvelle connexion chaque fois qu'un script doit parler à une base de données, 
        //     //ce qui se traduit par une application Web plus rapide
        //     $dbh = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass, array(PDO::ATTR_PERSISTENT => true));

        // }catch (PDOException $e){

        //     echo "Error!: " . $e->getMessage() . "";
            
        //     die();
        //     //Retour : Error!: SQLSTATE[HY000] [1044] Access denied for user ''@'localhost' to database 'dragonphp'
        // }


    // <!-- Fermer une connexion :  -->
        // $dbh = new PDO('mysql:host=localhost;dbname=test', $user, $pass);
        // // use the connection here
        // // Following command close the connection. 
        // $dbh = null;

    //  en règle général, il vaut mieux la laisser ouverte, puisque PHP s'occupe de le fermer la connexion à la fin du script, tout seul.

?> 







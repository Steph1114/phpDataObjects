<?php
    include_once('connexion.php');
?>

<?php
    

//syntaxe d'une requete SQL
    // public PDO::query ( 
    //     string $statement , //le statement
    //     int $fetch_style = PDO::FETCH_COLUMN ,  //type de colonne
    //     int $colno ) : PDOStatement    //numero de colonne

    

    //  $sql =  'SELECT id, pseudo, comments FROM commentaires ORDER BY name';
    //     foreach  ($conn->query($sql) as $row) {
    //     print $row['id'] . "\t";
    //     print $row['pseudo'] . "\t";
    //     print $row['comments'] . "\n";
    // }   

    // var_dump($row);


    
    // try {
    //         $dbhost = 'localhost';
    //         $dbname='hr';
    //         $dbuser = 'root';
    //         $dbpass = '';
    //         $connec = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);

    //     }catch (PDOException $e) {
    //         echo "Error : " . $e->getMessage() . "
    //         ";
    //         die();
    //     }

    // Prepare statement
    // syntaxe
    // PDO::prepare ( string $statement [, array $driver_options = array() ] )
    // Paramètres :
    // instruction: une chaîne contient une instruction SQL valide. driver_options: un tableau contenant un nom et une valeur d'attribut (clé => paires de valeurs).

    // Valeur de retour :
    // Renvoie un objet PDOStatement en cas de succès. En cas d'échec, retourne un objet PDOException, ou false selon la valeur de PDO :: ATTR_ERRMODE.


    /* Execute a prepared statement by passing an array of values */
    $sql = 'SELECT nomDragon, longueur, sexe FROM dragon
            WHERE sexe = :sex';

    $sth = $conn->prepare($sql);
    $sth->execute(array(':sex' => 'M'));

    $c = $sth->fetchAll();
    print_r($c);

?>
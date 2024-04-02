<?php 

require_once __DIR__ . '/../utils/db.php';


class DbManager {
    private $db;

    function __construct(PDO $db) {
        $this->db = $db;
    }

    // return l'id inseré
    function insert(string $sql, array $data) {
        $sth = $this->db->prepare($sql);
        $sth->execute($data);
        return $this->db->lastInsertId();
    }

    function insert_advanced(DbObject $dbObj) {
        $tableName = strtolower(get_class($dbObj)).'s';
        $sql = 'INSERT INTO '.$tableName.'(';
        $cpt = 0;
        $data = [];
        foreach($dbObj as $clef => $value){
            if (!empty($value)){
                $sql = $sql.$clef.', ';
                array_push($data, $value);
                $cpt += 1;
            }
        }
        $sql = substr($sql,0,-2).') VALUES (';
        for ($i = 1; $i<$cpt+1; $i++){
            $sql = $sql.'?, ';
        }
        $sql = substr($sql,0,-2).')';
        return $this->insert($sql, $data);
    }

    function select(string $sql, array $data, string $className) {
        $req = $this->db->prepare($sql);
        $req->execute($data);
        $req->setFetchMode(PDO::FETCH_CLASS, $className);
        $resultat = $req->fetchAll();
        return $resultat;
    }

    function selectAll(string $sql, string $className) {
        $req = $this->db->prepare($sql);
        $req->execute();
        $req->setFetchMode(PDO::FETCH_CLASS, $className);
        $resultat = $req->fetchAll();
        return $resultat;
    }

    function getById(string $tableName, $id, string $className) {
        $req = $this->db->prepare('SELECT * FROM '.$tableName.' WHERE v_id = ?');
        $req->execute([$id]);
        $req->setFetchMode(PDO::FETCH_CLASS, $className);
        $resultat = $req->fetch();
        return $resultat;
    }

    function getByIdUser(string $tableName, $id, string $className) {
        $req = $this->db->prepare('SELECT * FROM '.$tableName.' WHERE user_id = ?');
        $req->execute([$id]);
        $req->setFetchMode(PDO::FETCH_CLASS, $className);
        $resultat = $req->fetch();
        return $resultat;
    }

    function getById_advanced($id, string $className) {
        $tableName = strtolower($className).'s';
        return $this->getById($tableName, $id, $className);
    }

    function getBy(string $tableName, string $column, $value, string $className) {
        $req = $this->db->prepare('SELECT * FROM '.$tableName.' WHERE '.$column.' = ?');
        $req->execute([$value]);
        $req->setFetchMode(PDO::FETCH_CLASS, $className);
        $resultat = $req->fetch();
        return $resultat;
    }

    function getBy_advanced(string $column, $value, string $className) {
        $tableName = strtolower($className).'s';
        return $this->getBy($tableName, $column, $value, $className);
    }

    function removeById(string $tableName, $id) {
        $req = $this->db->prepare('DELETE FROM '.$tableName.' WHERE v_id=?');
        $req->execute([$id]);
    }

    function update(string $tableName, array $data) {
        $sql = 'UPDATE '.$tableName.' SET ';
        foreach($data as $clef => $value){
            if ($clef != 'id'){
                $sql = $sql.$clef.'=:'.$clef.', ';
            }
        }
        $sql = substr($sql,0,-2);
        var_dump($sql);
        $req = $this->db->prepare($sql.' WHERE v_id=:id');
        $req->execute($data);
    }
    function updateCommande(string $tableName, array $data) {
        $sql = 'UPDATE '.$tableName.' SET date_maj = NOW(), ';
        foreach($data as $clef => $value){
            if ($clef != 'id'){
                $sql = $sql.$clef.'=:'.$clef.', ';
            }
        }
        
        $sql = substr($sql,0,-2);
        var_dump($sql);
        $req = $this->db->prepare($sql.' WHERE commande_id=:id');
        $req->execute($data);
    }

    function update_advanced(DbObject $dbObj) {
        $tableName = strtolower(get_class($dbObj)).'s';
        echo $tableName;
        $data = get_object_vars($dbObj);
        $this->update($tableName, $data);
        var_dump($data);
    }

    function insertEmailBDD(string $email) {
        $pdoStatement = $this->db->prepare('INSERT INTO utilisateur (email) VALUES (:email)');
        $pdoStatement->bindParam(':email', $email, PDO::PARAM_STR);
        $pdoStatement->execute();
    }
    // function pour insérer dans la bdd et function pour gérer connexion
    function insertUserInfoRegister(string $nom, string $prenom, string $email, string $dateOfBirth, string $mdp){
        $pdoStatement = $this->db->prepare('INSERT INTO user (first_name, last_name, email, mdp, date_of_birth) VALUES (:first_name, :last_name, :email, :mdp, :date_of_birth)');
        $pdoStatement->bindParam(':first_name', $prenom, PDO::PARAM_STR);
        $pdoStatement->bindParam(':last_name', $nom, PDO::PARAM_STR);
        $pdoStatement->bindParam(':email', $email, PDO::PARAM_STR);
        $pdoStatement->bindParam(':date_of_birth', $dateOfBirth);
        $pdoStatement->bindParam(':mdp', $mdp, PDO::PARAM_STR);
        $pdoStatement->execute();
    }

    function loginUser(string $email, string $mdp){
        //on recup le mdp dans la bdd associé à l'email donné
        $pdoStatement = $this->db->prepare('SELECT mdp FROM user WHERE email = :email ');
        $pdoStatement->bindParam(':email', $email, PDO::PARAM_STR);
        $pdoStatement->execute();

        //variable booleen qui sera true ou false si le mdp de la bdd match avec le mdp donné
        $mdpMatch=false;

        //on recup le résultat de la requete executé pour mettre dans la variable $result
        while($result=$pdoStatement->fetch(PDO::FETCH_ASSOC)){
            $mdp_bdd=$result["mdp"]; //on stock la valeur de la colonne mdp du tableau $result
            if($mdp_bdd == $mdp){
                $mdpMatch=true;
            }else{
                $mdpMatch=false;
            }
        }
        return $mdpMatch;
    }
}
<?php

function is_connected(){
    if(isset($_SESSION['user'])){
        return true;
    }else{
        return false;
    }
}

function logout(){
    if(isset($_SESSION['user'])){
        unset($_SESSION['user']);
    }
}
function login($pdo, $nom, $pass){
    try{
        $req = $pdo->prepare("SELECT pwd FROM user WHERE nom = :nom");
        $req->execute(array(':nom' => $nom));
        $req_stat = $req->rowCount();

        if($req_stat === 1){
            $data = $req->fetchAll(PDO::FETCH_ASSOC);
            if(password_verify($pass, $data[0]['pwd'])){
                $_SESSION['user']['nom'] = $nom;
                return true;
            }else{
                return false;
            }
        }else{
            return "Error to few row found, just one nedeed";
        }
    }catch(PDOException $ex){
        dump($ex->getMessage());
    }
}



// GET in DB
function getAll_pc($pdo){   // Get tout les ordinateur enregistrer
    try{
        $req = $pdo->prepare("SELECT * FROM pc ");  
        $req->execute();
        $req_stat = $req->rowCount();

        if($req_stat > 0){
            $data = $req->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        }else{
            return false;
        }
    }catch(PDOException $ex){
        dump($ex->getMessage());
    }
}

function get_attribution($pdo, $pc_id, $date, $start_houre, $id_pc){   // Get une attribution ou la date = $date, start_houre = $start_houre, id_pc = $id_pc 
    try{
        $req = $pdo->prepare("SELECT * FROM Attribution WHERE id_pc = :id_pc");
        $req->execute(array(':id_pc' => $pc_id));
        $req_stat = $req->rowCount();
        if($req_stat === 0){
            $data = $req->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        }else{
            return false;
        }
    }catch(PDOException $ex){
        dump($ex->getMessage());
    }    
}
/**
 * 
 *      $req = $pdo->prepare("SELECT pwd FROM user WHERE nom = :nom");      Preparation de la requête
  *     $req->execute(array(':nom' => $nom));                               Bind des variables en parametre de la requête et exécution
  *     $req_stat = $req->rowCount();                                       Get le nombre de ligne affecter par la requête
  *
  *     if($req_stat === 1){
  *          $data = $req->fetchAll(PDO::FETCH_ASSOC);
  *         return $data;
  *     }else{
  *        return "Error to few row found, just one nedeed";
  *     }
 */
?>
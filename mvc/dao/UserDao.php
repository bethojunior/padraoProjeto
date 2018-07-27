<?php
class UserDao extends BaseDao{

    public function getUser($email , $pass){
        try{
            $query = "SELECT * FROM users where email = :email AND pass = :pass";
            $query = $this->ConnectionDb()->prepare($query);
            $query->bindValue(':email' , $email , PDO::PARAM_STR);
            $query->bindValue(':pass' ,  $pass ,  PDO::PARAM_STR);
            $query->execute();
            $all = $query->fetchAll(PDO::FETCH_OBJ);

            if($query->rowCount() != 0){
                echo json_encode(array(
                    "status" => true,
                    "data" => $all,
                    "message" => "Cliente encontrado",
                ));
                return;
            }
            echo json_encode(array(
                "status" => false,
                "data" => $all,
                "message" => "Dados não conferem",
            ));
            
            
        }catch(PDOException $e){
            echo false;
        }
    }

    public function insertUser($nome , $email , $pass , $typeUser){
        
        try{
            $query = ("INSERT INTO users (name , email , pass , typeUser , tel) VALUES (:name , :email , :pass , :typeUser , :tel)");
            $query = $this->ConnectionDb()->prepare($query);
            $query -> bindValue(':name' , $name , PDO::PARAM_STR);
            $query -> bindValue(':email' , $email , PDO::PARAM_STR);
            $query -> bindValue(':pass' , $pass , PDO::PARAM_STR);
            $query -> bindValue(':typeUser' , $typeUser , PDO::PARAM_INT);
            $query -> bindValue(':tel' , $tel , PDO::PARAM_STR);
            
            $query->execute();

            if($query){
                return json_encode(['result' => true]);
            }else {
                return json_encode(['result' => false]);
            }

        }catch(Exception $e){
            return json_encode(['result' => false]);
        }

    }


    

}
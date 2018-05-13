<?php
    

    class UserDao{
    
    
        public function getUser($email , $pass){
            try{
                $conn = Connection::open(Connection::DB_MYSQL);
                $query = "SELECT * FROM users where email = :email AND pass = :pass";
                $query = $conn->prepare($query);
                $query->bindValue(':email' , $email , PDO::PARAM_STR);
                $query->bindValue(':pass' ,  $pass ,  PDO::PARAM_STR);
                $query->execute();
                $all = $query->fetchAll(PDO::FETCH_OBJ);

                if($query){
                    echo json_encode($all);
                }else {
                    echo json_encode($all);
                }

            }catch(PDOException $e){
                echo false;
            }
        }

        public function insertUser($nome , $email , $pass , $typeUser){
            
            try{
                $conn = Connection::open(Connection::DB_MYSQL);
                $query = ("INSERT INTO users (nome , email , pass , typeUser) VALUES (:nome , :email , :pass , :typeUser)");
                $query = $conn->prepare($query);
                $query -> bindValue(':nome' , $nome , PDO::PARAM_STR);
                $query -> bindValue(':email' , $email , PDO::PARAM_STR);
                $query -> bindValue(':pass' , $pass , PDO::PARAM_STR);
                $query -> bindValue(':typeUser' , $typeUser , PDO::PARAM_INT);
                
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
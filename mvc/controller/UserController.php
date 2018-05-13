<?php  

    
    class UserController{
            

        public function actionAuthenticate(){
            $login = $_POST['login'];
            $pass = $_POST['pass'];

            $userDao = new UserDao();
            $return = $userDao->getUser($login , $pass);

            if($return){
                echo $return;
                return $return;
            }
        }

        public function actionInsertUser(){

            $nome = $_POST['name'];
            $email = $_POST['email'];
            $pass = $_POST['pass'];
            $typeUser = 1;

            $insert = new UserDao();
            $return = $insert->insertUser($nome , $email , $pass , $typeUser);

            echo $return;
            return $return;

        }


    }
<?php
    header('Content-Type: text/html; charset=UTF-8');
    
    if(!empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["date"]))
    {

            $user='u47544';
            $pass='1432857';
            $conn= new PDO('mysql:host=localhost;dbname=u47544', $user, $pass, array(PDO::ATTR_PERSISTENT => true));
            try {
                $Insert_form=$conn->prepare("INSERT INTO users (imya, email, god, sex, col, sverh, biography) 
                VALUES (:imya, :email, :god, :sex, :col, :sverh, :biography)");

                $Insert_form->bindParam(':imya',$imya);
                $Insert_form->bindParam(':email',$email);
                $Insert_form->bindParam(':god',$god);
                $Insert_form->bindParam(':sex',$sex);
                $Insert_form->bindParam(':col',$col);
                $Insert_form->bindParam(':sverh',$sverh);
                $Insert_form->bindParam(':biography',$biography);

                $imya=$_POST["name"];
                $email=$_POST["email"];
                $god=$_POST["data"];
                $sex=$_POST["sex"];
                $col=$_POST["col_con"];
                $sverh=$_POST["sverh"];
                $biography=$_POST["biography"];
                $Insert_form->execute();
            }catch(PDOException $e){
                print('Error : ' . $e->getMessage());
                exit();
            }
    }
    else
    {   
        print("Заполните все поля!");
    }

    header("Location: index.html");
?>
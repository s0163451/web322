



<?php
    header('Content-Type: text/html; charset=UTF-8');
    
    if(!empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["date"]))
    {

            $user='u47544';
            $pass='1432857';
            $conn= new PDO('mysql:host=localhost;dbname=u47544', $user, $pass, array(PDO::ATTR_PERSISTENT => true));
            try {
                $Insert_form=$conn->prepare("INSERT INTO users(Name, Email, Year, Sex, Col_con, Sverh, Biography) 
                VALUES (:Name, :Email, :Year, :Sex, :Col_con, :Sverh, :Biography)");

                $Insert_form->bindParam(':Name',$Name);
                $Insert_form->bindParam(':Email',$Email);
                $Insert_form->bindParam(':Yaer',$Year);
                $Insert_form->bindParam(':Sex',$Sex);
                $Insert_form->bindParam(':Col_con',$Col_con);
                $Insert_form->bindParam(':Sverh',$Sverh);
                $Insert_form->bindParam(':Biography',$Biography);

                $Fio=$_POST["name"];
                $Email=$_POST["email"];
                $Date_birth=$_POST["year"];
                $Sex=$_POST["sex"];
                $Count_limbs=$_POST["col_con"];
                $Abilitys=$_POST["sverh"];
                $Biography=$_POST["biography"];
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

    header("Location: form.html");
?>
<?php
class login extends Dbh{ 

    protected function getUser($email,$pwd){
        $stmt = $this->connect()->prepare('SELECT user_password FROM users WHERE user_email=? ');

        if(!$stmt->execute(array($email, $pwd))){
            $stmt=null;
            header("location ../index.php ?error=stmtfaild");
            exit();
    }


    if($stmt->rowCount()==0){
        $stmt=null;
        header("location ../index.php?error=usernotfound");
        exit();
    }

    $pwdHashed=$stmt->fetchAll(PDO::FETCH_ASSOC);
    $checkPwd=password_verify($pwd,$pwdHashed[0]["user_password"]);

    if($checkPwd==false){
        $stmt=null;
        header("location ../index.php?error=wrongpassword");
        exit();
    }
    elseif($checkPwd==true)
    {
        $stmt = $this->connect()->prepare('SELECT user_password FROM users WHERE user_email=? ');

        if(!$stmt->execute(array($email, $pwd))){
            $stmt=null;
            header("location ../index.php ?error=stmtfaild");
            exit();

        }


            if($stmt->rowCount()==0){
                $stmt=null;
                header("location ../index.php?error=usernotfound");
                exit();
            }


            $user=$stmt->fetchAll(PDO::FETCH_ASSOC);
            session_start();
            $_SESSION['user_name']=$user[0]["user_name"];
            $_SESSION['user_email']=$user[0]["user_email"];
             $stmt=null;


    }


    $stmt=null;

}

}


?>

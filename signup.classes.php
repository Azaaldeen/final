<?php
class signup extends Dbh{ 





    protected function setUser($uname,$email,$pwd){
        $stmt = $this->connect()->prepare('INSERT INTO users (user_name ,user_email,user_password)VALUES(?,?,?);');
        $hashedpwd=password_hash($pwd, PASSWORD_DEFAULT);
        if(!$stmt->execute(array($uname,$email, $hashedpwd))){
            $stmt=null;
            header("location ../register.php ?error=stmt faild");
            exit();
    }

    $stmt=null;

}





    protected function checkUser($uname,$email){
        $conn = $this->connect();
        $q1 = "SELECT username FROM users WHERE username=? or email=?";
        $stmt = $conn->prepare($q1);
        if(!$stmt->execute(array($uname,$email))){
            $stmt=null;
            header("location ../register.php ?error=stmt faild");
            exit();
    }

    $resultCheck;
    if($stmt->rowCount() > 0){

        $resultCheck = false;

    }
    else
    {
    $resultCheck = true;
    }
    return $resultCheck;

}



}


?>

<?php

class signupContr extends Signup{

    private $uname;
    private $email;
    private $pwd;
    private $pwdcon;

    public function __constract($uname,$email,$pwd,$pwdcon){
        $this->uname=$uname;
       $this->email=$email;
       $this->pwd=$pwd;
       $this->pwdcon=$pwdcon;

    }



    public function signupUser(){
        if($this->emptyInput()==false){
            header("location ../registar.php?error=emptyinput");
            exit();
        }

        if($this->invalidUname()==false){
            header("location ../registar.php?error=username");
            exit();
        }

        if($this->invalidEmail()==false){
            header("location ../registar.php?error=email");
            exit();
        }

        if($this->pwdMatch()==false){
            header("location ../registar.php?error=passwordmatch");
            exit();
        }

        if($this-nameTakenCheck()==false){
            header("location ../registar.php?error=useroremailTaken");
            exit();
        }

        $this->setUser($this->uname, $this->email,$this->pwd);

    }


    private function emptyInput(){
        $result;
        if(empty($this->uname) || empty($this->email) || empty($this->pwd) || empty($this->pwdcon)){
            $result=false;
    }else{
        $result=true;
    }
    return $result;
    }




    public function invalidUname(){
            $result;
            if(!preg_match("/^[a-zA-Z0-9]*$/",$this->uname)){
                $result=false;
            }else{
                $result=true;
            }
            return $result;
    }


        public function invalidEmail(){
            $result;
            if(!filter_var($this->email,FILTER_VALIDATE_EMAIL)){
                $result=false;
            }else{
                $result=true;
            }
            return $result;
        }


        public function pwdMatch(){
            $result;
            if($this->pwd!==$this->pwdcon){
                $result=false;
            }else{
                $result=true;
            }
            return $result;

        }


        
        public function nameTakenCheck(){
            $result;
            if(!$this->checkUser($this->uname,$this->email)){
                $result=false;
            }else{
                $result=true;
            }
            return $result;

        }




}
?>
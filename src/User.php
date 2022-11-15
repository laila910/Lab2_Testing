<?php 
class User{
  public $name;
  public $email;
  function set_name($name){
    $this->name=$name;
  }
  function set_email($email){
    $this->email=$email;
  }
  function name() {
    $arguments = func_get_args();
    $numberOfArguments = func_num_args();
    if($numberOfArguments==1){
        $this->set_name($arguments[0]);
        return $this->name;
    }else{
        return $this->name;
    }  
  }
  function email(){
    $arguments = func_get_args();
    $numberOfArguments = func_num_args();
    if($numberOfArguments==1){
        $this->set_email($arguments[0]);
        return $this->email;
    }else{
        return $this->email;
    }
  }
  function __destruct() {
    echo "The name is {$this->name}.<br>";
    echo "The email is{$this->email}.<br>";
  }
}
?>
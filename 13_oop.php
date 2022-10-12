<?php


class User {
    public $name;
    public $email;
    public $password;


    public function __construct($name, $email , $password){
        $this->name =$name;
        $this->email =$email;
        $this->password =$password;
        
    }
    

    function set_name($name){
        $this-> name = $name;
    }

    function get_name(){
        return $this->name;
    }
}

$user1 = new User('brad','brade@gmail.com','12345');
$user2 = new User('ahmad','ahmad@gmail.com','123456');

// $user2-> set_name('john');
// $user1 -> set_name ('Brad');

echo $user1->email;
echo $user2->name;

// echo $user1-> name;

// var_dump($user1);

// echo  $user1-> get_name();
// echo $user2->get_name();
class Employee extends User{
    public function __construct($name,$email,$password,$title)
    {

        parent::__construct($name, $email, $password);
        $this->title= $title;
    }
    public function get_title(){
        return $this->title;
    }

   
}
$employee1 = new Employee('sara','sara@gmail.com','1234567','manegar');

echo $employee1->get_title();

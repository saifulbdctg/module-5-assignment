<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission Script</title>
  </head>
  <body>
    <?php
 
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $name = $_POST['name'];
      $email = $_POST['email'];
      echo "<h1> Original value  </h1>";
      echo "<p>Name: , $name!</p>";
      echo "<p> Email: , $email.</p>";
    } else {
      echo "<p>Error: invalid form submission method.</p>";
    }
    

    class Person{
      public $name;
      public $email;

      public function getName() {
       return $this->name;
      }
      public function getEmail() {
        return $this->email;
       }
       public function setName($name) {
        return $this->name=$name;
       }
       public function setEmail($email) {
         return $this->email=$email;
        }     
    }

    $person=new Person();
    $person->setName("saiful");
    $person->setEmail("saifulmba@gmail.com");
    $modifiedName  = $person->getName();
    $modifiedEmail = $person->getEmail();
    echo "<h1> Modified Form Value </h1>";
    echo "<p>Name: , $modifiedName </p>";
    echo "<p> Email: , $modifiedEmail</p>";
    ?>

  </body>
</html>
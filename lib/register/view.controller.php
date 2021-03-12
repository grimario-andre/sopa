<?php
require "../abstractclasses/restdata.abstract.php";
require "../abstractclasses/restdata.object.abstract.php";

 Class Logincontroller extends RestData{
    private $model;
    
    public function __construct( ) {

      $model = new Login();   
      var_dump($model);  
    }

    public function post( $name,$password,$email ){
     
        $model -> post($name,$password,$email);

    }


 }

  
 

?>
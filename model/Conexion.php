<?php




         $host="localhost";
         $user = "root";
         $password = "";
         $db="nota1";
      
      

     
     try {
        $conexion = new PDO(
            "mysql:host=localhost;
            dbname=" .$db,$user,$password,
            
        );
     } catch (Exception $e) {
        echo "error de conexion " .$e->getMessage();

     }
       

           

           

        
        
           

           
           


  
  
  
    
  
  
  

  
     

 
  



?>
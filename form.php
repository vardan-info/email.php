<html>
   
   <head>
      <title>PHP Form Validation</title>
   </head>
   
   <body>
      <?php
         
         //  values
         $name = $email = $gender = $comment = $website = "";
         
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = test_input($_POST["name"]);
            $email = test_input($_POST["email"]);
            $website = test_input($_POST["website"]);
            $comment = test_input($_POST["comment"]);
            $gender = test_input($_POST["gender"]);
         }
         
         function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }
      ?>
   
      <h2>Form php/h2>
      
      <form method = "post" action = "/php/php_form_introduction.htm">
        
             
               <td><input type = "text" name = "name">
            
               
               <input type = "text" name = "email">
           
               
               <input type = "text" name = "website">
            
               
            
           ><textarea name = "comment" rows = "5" cols = "40"></textarea></td>
        
                  <input type = "radio" name = "gender" value = "female">Female
                  <input type = "radio" name = "gender" value = "male">Male
             
                  <input type = "submit" name = "submit" value = "Submit"> 
             
      </form>
      
      <?php
        
         echo $name;
         echo "<br>";
         
         echo $email;
         echo "<br>";
         
         echo $website;
         echo "<br>";
         
         echo $comment;
         echo "<br>";
         
         echo $gender;
      ?>
      
   </body>
</html>

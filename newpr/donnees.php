  <?php 
    $db = new PDO('mysql:host=127.0.0.1;dbname=formulaires','root','');
    
    
    $reponse = $db->query('SELECT * FROM utilisateur');
    echo"<table class='table' style='border: 2px solid black; margin-top: 600px;position: absolute;margin-left: 400px; width: 600px;'>";
    echo"<thead class='black white-text'><tr><td style='background-color:#673AB7;color: white;border: 2px solid black;font-size:35px;'>username</td>
    <td style='background-color:#673AB7;color: white;border: 2px solid black;font-size:35px'>email</td>
    <td style='background-color:#673AB7;color: white;border: 2px solid black;font-size:35px;'>Action</td>
    </tr></thead>\n>";

   while ($donnees = $reponse->fetch() )
   {
      
       echo"<tr style='background-color:lightgrey; border: 2px solid black;font-size:20px;'>
       <td style='border: 2px solid black;font-size:20px;'>
       {$donnees["username"]}</td>
       <td>{$donnees["email"]}</td>
       </tr>\n>";  
   }
   echo"</table>";
   echo "<table ' style='border-radius: 200px; margin-top: 670px;position: absolute;margin-left: 859px; width: 141px;'>";
   echo"<thead class='black white-text'><tr>
   <td style='background-color:green;color: white;border-radius: 200px;font-size:35px'>edit</td>
   <td style='background-color:red;color: white;border-radius: 200px;font-size:35px;'>del</td>
   </tr></thead>\n>";


   echo "</table>";
   echo "<table ' style='border: 1px solid black; margin-top: 715px;position: absolute;margin-left: 859px; width: 141px;'>";
   echo"<thead class='black white-text'><tr>
   <td style='background-color:green;color: white;border: 2px solid black;font-size:35px'>edit</td>
   <td style='background-color:red;color: white;border: 2px solid black;font-size:35px;'>del</td>
   </tr></thead>\n>";


   echo "</table>";
   echo "<table ' style='border: 1px solid black; margin-top: 760px;position: absolute;margin-left: 859px; width: 141px;'>";
   echo"<thead class='black white-text'><tr>
   <td style='background-color:green;color: white;border: 2px solid black;font-size:35px'>edit</td>
   <td style='background-color:red;color: white;border: 2px solid black;font-size:35px;'>del</td>
   </tr></thead>\n>";


   echo "</table>";
  
  
  ?> 
  

    
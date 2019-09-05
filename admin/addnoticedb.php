<?php
       include("connect.php");
      if(isset($_POST['submit']))
        {    
       //echo $post_date ;exit;
       $notice =  $_POST['title'];
       $description =  $_POST['description'];
       $type =  $_POST['type'];
       $post_date = date('Y/m/d');
       $result=mysql_query("INSERT INTO noticetbl SET notice='$notice',description='$description',postdate='$post_date',type='$type'");
       echo $result;
          
   
         if($result)
       {
         echo "record inserted successfully";
           }
          else
       mysql_error();
    }   
       
   header("Location:noticelist.php")      
?> 
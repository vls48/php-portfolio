<?php 
$title;
$path=$_SERVER['PHP_SELF'];
$page=basename($path);
switch("$page")
{
case 'index.php': 
     $title = 'HOME'; 
     break; 
case 'contact.php': 
     $title = 'CONTACT'; 
     break;
case 'large.php': 
     $title = 'FULL'; 
     break;
case 'media.php': 
     $title = 'MEDIA'; 
     break; 
case 'resume.php': 
     $title = 'RESUME'; 
     break;
case 'upcoming.php': 
     $title = 'UPCOMING'; 
     break;   
case 'add.php': 
     $title = 'ADD'; 
     break;  
} 
echo $title; 
?>
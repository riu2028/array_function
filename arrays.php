<?php
//indexed array example
$cars = array("Volvo", "BMW", "Toyota","Safari"); 
echo "I like " . $cars[0] . ", " . $cars[1] . " ," . $cars[2] ." and " .$cars[3].".";
?>


<?php
//indexed array example
echo"<br/><br/>";
$color = array('white', 'green', 'red', 'blue', 'black');
echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the $color[2] carpet, the $color[1] lawn, the $color[0] house, the leaden sky. The new president and his first lady. - Richard M. Nixon"."<br/>";
?>


<?php
// count()function in array example
echo"<br/><br/>";
$cars=array("Volvo","BMW","Toyota","Alto","Range Rover","Thar");
echo count($cars);
?>


<?php 
// count()function in array example
echo"<br/><br/>";
// PHP program to illustrate working of count() 
$array = array("Aakash", "Ravi", "Prashant", "49", "50"); 

print_r(count($array)); 

?> 


<?php 
echo"<br/><br/>";
// key()function in array example 
$subject=array("java","php","ruby","python");  
echo "The key from the current position is: " . key($subject);  
?>

<?php 
// key()function in array example  
echo"<br/><br/>";
   $subjects = array("Subject1 "=> "OS", "Subject2" => "compiler", "Subject3" => "dbms"); 
	echo next($subjects);
	echo"<br>";
    echo "Current position Key is : " . key($subjects);  
?>  


<?php 
// key()function in array example  
echo"<br/><br/>"; 
$car = array("tata" => "jaguar", "maruti" => "baleno", "bmw" => "x6");  
echo "Current position Key is : " . key($car);  
?> 

<?php
//range array function examples
echo"<br/><br/>";
$number = range(0,10);
print_r ($number);
?>

<?php
//range array function examples
echo"<br/><br/>";  
$alphabet= range('a','g');  
print_r($alphabet);  
?>

<?php
//current function in array example  
echo"<br/><br/>";
    $array = array("javatpoint", "udemy", "udacity", "coursera", "edureka");  
    print_r(current($array));
?> 

<?php 
//current function in array example   
   $array = array("javatpoint", "udemy", "udacity", "coursera", "edureka");  
    next($array);  
    print_r(current($array));  
?>   




<?php 
// reset()function in array example
echo"<br/><br/>";
// input array 
$arr = array('Ram', 'Rahim', 'Geeta', 'Shita'); 

// here reset() function Moves the internal pointer to the 
// first element of the array, which is Ram and also returns 
// the first element 
$res = reset($arr); 
echo "$res"; 

?> 

<?php
// reset()function in array example
echo"<br/><br/>";
$color = array(4 => 'white', 6 => 'green', 11=> 'red');
echo reset($color)."<br/>";
?>


<?php 
// reset()function in array example 
echo"<br/><br/>";
    $arr = array('sachin', 'sehwag', 'ganguly', 'rahul');  
    $result = reset($arr);  
    print "$result";  
?>  




<?php 
// current(),next(),reset() function in array's example
echo"<br/><br/>"; 
    $animal = array("cat", "dog", "tiger", "lion");  
    echo current($animal) . "\n";  
    echo next($animal) . "\n";  
    echo reset($animal);  
?>  


<?php 
echo"<br/><br/>";   
// current(),next() function in array's example
   $array = array("javatpoint", "udemy", "udacity", "coursera", "edureka");  
    next($array);  
    next($array);  
    print_r(current($array));  
 ?>  



<?php  
// end() function in array example
echo"<br/><br/>";     
$array = array("javatpoint", "udemy", "udacity", "coursera", "edureka");  
        end($array);  
    print_r(current($array));  
?>  


<?php
// end() function in array example
echo"<br/><br/>";   
   $crickter = array("sachin", "ganguly", "virat", "sehwag");  
    echo end($crickter);   
?>  


<?php  
// current(),end() function in array example
echo"<br/><br/>";  
   $game = array("hockey", "football", "badminton", "cricketer");  
    echo current($game); 
		echo"<br/>";
    echo end($game);  
?> 


<?php  
// prev() function in array example
echo"<br/><br/>";  
$language = array("Java", "php", "python", "javascript");  
echo next($language)."<br/>";  
echo prev($language);  
?> 

<?php
// prev() function in array example
echo"<br/><br/>";   
   $language = array("Java", "php", "python", "javascript");  
    echo current($language) ."<br/>";  
    echo next($language)."<br/>";  
    echo prev($language);  
?>  

<?php
$word1 = 'class';
$word2 = 'kodego';
$word3 = 'top';
function stringChecker($string){
if (strlen($string) > 5) {
    echo "The word $string is more than 5 characters. ";
} else {
    echo "The word $string is less than 5 characters. ";
}
}

stringChecker($word1);
stringChecker($word2);
stringChecker($word3);

echo "<br> <br>";

$quantity1 = 70;
$quantity2 = 100;
$price1 = 35;
$price2 = 30;

$deal1 = ($quantity1 + $price1 )/ 2;
$deal2 =  ($quantity2 + $price2) / 2; 

if ($deal1 < $deal2) {
    echo "Deal 1 is the best deal. $deal1 / piece";
} elseif ($deal1 > $deal2) {
    echo "Deal 2 is the best deal. $deal2 / piece";
} else {
    echo "Both deals have the same cost.";
}

echo "<br> <br>";

$anyMonth = "March"; 
$month= strtolower($anyMonth);

switch ($month) {
 case "january": 
     echo "the month of $anyMonth has 31 days";
      break;
 case "february": 
     echo "the month of $anyMonth has 28 or 29 days";
     break;
case "march":
echo "the month of $anyMonth has 31 days";
 break;
    case "april":   
 echo "the month of $anyMonth has 30 days";
     break;
case "may":
  echo "the month of $anyMonth has 31 days";
      break;
case "june":
  echo "the month of $anyMonth has 30 days";
       break;
 case "july":
    echo "the month of $anyMonth has 31 days";
       break;     
 case "august":
     echo "the month of $anyMonth has 31 days";
        break;
case "september":
  echo "the month of $anyMonth has 30 days";
      break;
 case "october":
     echo "the month of $anyMonth has 31 days";
            break;
     case "november":
          echo "the month of $anyMonth has 30 days";
             break;
case "december":
     echo "the month of $anyMonth has 31 days";
       break;

    default:
        echo "Invalid month.";
        break;
}

echo "<br> <br>";

class Student {
    public $name;
    public $age;

    public function __construct($name, $age,$school) {
        $this->name = $name;
        $this->age = $age;
        $this->school=$school;
    }
}
 $student1=new Student("John Garge",15,"Ahlcon Public school");
 $student2=new Student("Smith Soy",16,"St. Marie school");
 $student3=new Student("Charle Rena",16,"St. Columba school");

 $students=[$student1,$student2,$student3];

 foreach($students as $key){
    echo "Name: " .$key->name . " Age: " . $key->age . " School: ". $key->school . "<br>";
 }


 echo "<br> <br>";
?>

 <html>
 <head>
	<title>A divison table in PHP</title>
 </head>
 <body>
	<table border="1">
	<?php
    $start=1;
    $end=10;
		print("<tr>");
		print("<th></th>");
		for($count = $start; $count <= $end; $count++) 
		print("<th>".$count."</th>");
		print("</tr>");
		
		for($count = $start; $count <= $end; $count++) 
		{
		  print("<tr><th>".$count."</th>");
		  for($count2 = $start; $count2 <= $end; $count2++) 
		  {
			$result = $count / $count2; 
			printf("<td>%.2f</td>", $result);
		  }
		  print("</tr> \n");
		}	
	?>
	</table>
 </body>
</html>
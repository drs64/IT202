<?php
	echo "<pre>" . var_export($_GET, true) . "</pre>";
	if(isset($_GET['name'])){
		echo "<br>Hello, " . $_GET['name'] . "<br>";
                $name = $_GET['name'];
             
	}
        if(isset($_GET['name1'])){
                echo "<br>Namaste, " . $_GET['name1'] . "<br>";
                $name1 = $_GET['name1'];
        }
       	echo" <br>Concatenation: " .($name.$name1) . "<br>" ;
	if(isset($_GET['number'])){
		$number = $_GET['number'];
		echo "<br>" . $number . " should be a number...";
		echo "<br>but it might not be<br>";
	}
	//TODO
	//handle addition of 2 or more parameters with proper number parsing
	//concatenate 2 or more parameter values and echo them
	//try passing multiple same-named parameters with different values
	//try passing a parameter value with special characters
	//web.njit.edu/~ucid/IT202/handleRequestData.php?parameter1=a&p2=b
        if(isset($_GET['number1'])){
                $number1 = $_GET['number1'];
                echo "<br>" . $number1 . " should be a number...";
                echo "<br>but it might not be<br>";
        }
        if(isset($_GET['number2'])){
                $number2 = $_GET['number2'];
                echo "<br>" . $number2 . " should be a number...";
                echo "<br>but it might not be<br>";
        }

        echo" <br>The addition is: " .($number1+$number2) . "<br>" ;
        echo "<br> answer for #3: if you try pass two parameters with the same name but different values, It only shows the last value on the browser. <br>";
        echo "<br> answer for #4: I noticed that &# is not showing on my browser, All other special characters showing up <br>";        
?>

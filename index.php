<?php
 $num = "";
 $cookie_equals = "eql";
 $cookie__equals_values = "false";
 $cookie_name1 = "num";
 $cookie_value1 = "";
 $cookie_name2 = "op";
 $cookie_value2 = "";
 $dot = "";
 $cookie_dot = "dot";
 $cookie__dot_value = "false";


 if(isset($_POST['submit']))
 {
     $cookie__equals_values = $_COOKIE['eql'];
     if ($cookie__equals_values == 'true')
     {
         $num = $_POST['submit'];
         $cookie__equals_values = 'false';
         setcookie($cookie_equals,$cookie__equals_values,time() + (300 * 300), "/");
     }else
     {
         $num = $_POST['display'] . $_POST['submit'];
     }
 }else
 {
     $num ="";
 }


 if(isset($_POST['clear']))
 {
     $num = "";
     $cookie_name1 = "num";
     $cookie_value1 = "";
     $cookie_name2 = "op";
     $cookie_value2 = "";
 }


 if(isset($_POST['op']))
 {
     $cookie_value1 = $_POST['display'];
     setcookie($cookie_name1,$cookie_value1, time() + (300 * 300), "/");
     $cookie_value2 = $_POST['op'];
     setcookie($cookie_name2,$cookie_value2, time() + (300 * 300), "/");
     $num = "";
 }


 if(isset($_POST['equally']))
 {
     $num = $_POST['display'];
     $cookie__equals_values = 'true';
     setcookie($cookie_equals,$cookie__equals_values,time() + (300 * 300), "/");
     switch (($_COOKIE['op']))
     {
         case '+':
             $num = $_COOKIE['num'] + $num;
             break;
         case '-':
             $num = $_COOKIE['num'] - $num;
             break;
         case '*':
             $num = $_COOKIE['num'] * $num;
             break;
         case '/':
             $num = $_COOKIE['num'] / $num;
             break;
         default:
             $num = "";
             break;
     }
 }
?>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="/style.css">
<head>
    <title>Form input</title>
</head>
<body>
<form class="container my-4" action="#" method="POST">
    <div class="calculator card">

        <input type="text" class="calculator-screen" name="display" readonly="true" value="<?php echo $num;?>"/>

        <div class="calculator-keys">

            <button type="submit" name="op" class="operator btn btn-info" value="+">+</button>
            <button type="submit" name="op" class="operator btn btn-info" value="-">-</button>
            <button type="submit" name="op" class="operator btn btn-info" value="*">&times;</button>
            <button type="submit" name="op" class="operator btn btn-info" value="/">&divide;</button>

            <button type="submit" name="submit" value="7" class="btn btn-light" name="action">7</button>
            <button type="submit" name="submit" value="8" class="btn btn-light">8</button>
            <button type="submit" name="submit" value="9" class="btn btn-light">9</button>


            <button type="submit" name="submit" value="4" class="btn btn-light">4</button>
            <button type="submit" name="submit" value="5" class="btn btn-light">5</button>
            <button type="submit" name="submit" value="6" class="btn btn-light">6</button>


            <button type="submit" name="submit" value="1" class="btn btn-light">1</button>
            <button type="submit" name="submit" value="2" class="btn btn-light">2</button>
            <button type="submit" name="submit" value="3" class="btn btn-light">3</button>


            <button type="submit" name="submit" value="0" class="btn btn-light waves-effect">0</button>
            <button type="submit" name="submit" class="decimal function btn btn-secondary" value=".">.</button>
            <button type="submit" name="clear" class="all-clear function btn btn-danger btn-sm" value="all-clear">AC</button>

            <button type="submit" name="equally" class="equal-sign operator btn btn-default" value="=">=</button>

        </div>
    </div>
</form>
</body>
</html>
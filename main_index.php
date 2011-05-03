<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="content-type" content="text/html; charset=windows-1251" />
	<meta name="author" content="trashboy.mine.nu" />
    <link href="main_style.css" rel="stylesheet" type="text/css" />
	<title>Хапни-Лапни</title>
</head>

<body>
<!--    HEADER  HEADER  HEADER  HEADER      -->
<div class="header">
<a href="main_index.php"><h1>Хапни-Лапни</h1></a>

<span class="logger">
<form method="post">
<label for="strUsername">Username: </label>
<input type="text" name="strUsername" id="strUsername" size="10" value="username" />
<label for="strPassword">Password: </label>
<input type="password" name="strPassword" id="strPassword" size="10" value="password" />
<br />
<input type="submit" name="submit" value="Enter" />
<input type="reset" value="Clear" />
</form>
</span>

<br /><br />
<h3>Тук може да срещнете Вашата сродна душа!</h3>




</div>

<!--    LEFT    LEFT    LEFT    LEFT        -->
<div class="left">
<br /><br /><br />
<a href="about_us.html">За нас</a>      <br /><br />
<a href="women.php">Жени</a>           <br /><br />
<a href="men.php">Мъже</a>             <br /><br />
<a href="info.html">Контакти</a>         <br /> 

</div>


<!-- MAIN   MAIN    MAIN    MAIN         -->
<div class="center"><h2>Добре дошли в Хапни-Лапни!</h2>
<br /><br /><br /><br /><br /><br />
<img src="pics/heart.jpg" width="200" height="200"/>
<br /><br /><br /><br /><br /><br />
</div>



<!-- RIGHT  RIGHT   RIGHT   RIGHT        -->
<div class="right">
Some of our members:<br /> 
<?php 
$intFirstMan = rand (1,3);     $intFirstGirl = rand (11,13);
$intSecondMan = rand(4,7);     $intSecondGirl = rand (14,17);
$intThirdMan = rand(8,10);      $intThirdGirl = rand (18,20);

echo "  <img src='pics/$intFirstMan.jpg' alt='$intFirstMan' width='100' height='100'  />
            &nbsp
        <img src='pics/$intFirstGirl.jpg' alt='$intFirstGirl' width='100' height='100'  />
                                                                                    <br /> <br />"; 

echo "  <img src='pics/$intSecondMan.jpg' alt='$intSecondMan' width='100' height='100'  />
            &nbsp
        <img src='pics/$intSecondGirl.jpg' alt='$intSecondGirl' width='100' height='100'  />
                                                                                    <br /> <br />";

echo "  <img src='pics/$intThirdMan.jpg' alt='$intThirdMan' width='100' height='100'  />
            &nbsp
        <img src='pics/$intThirdGirl.jpg' alt='$intThirdGirl' width='100' height='100'  />";

?>



</div>


<!-- FOOTER FOOTER  FOOTER  FOOTER       -->
<div class="footer">&trade; Всички права върху този уникален сайт са запазени!&trade;</div>

</body>
</html>
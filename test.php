<!DOCTYPE html>
<head>
<link href="style.css" type="text/css" rel="stylesheet">


 
 
</head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<body background="index.jpeg">
<h1 style="font-size:2vw;">WELCOME TO OUR QUIZ</h1> 

<p style="color:DodgerBlue;font-family: Arial font;text-align: center;position: relative;font-size: 2vw;">Please answer these questions and test your knowledge on air pollution</p>


<div>

	
		<img src="3.jpg" height="auto" alt="air pollution" style="width:100%;" />
		
	

</div>
 


<div class="question">


<form name="web_form" id="web_form" method="POST" action="test.php">
<p style="font-size:2vw;">Please enter your Email-id to subscribe to our website</p>
<p style="font-size:2vw;"><label>Enter email: </label><input type="text" name="email" id="email" /></p>
<p style="font-size:2vw;"><input type="submit" name="submit" id="submit" value="submit" /></p>
</form>
<?php
$email="";
$myfile = fopen("testfiles.txt", "a+"); 

if (isset($_POST['submit']))
{
$email = $_POST["email"];
echo $email;
if(!empty($email)){

$submit_string=$email.",";
fwrite($myfile, $submit_string);
echo "Successfull"; 

}
else
{
echo "Not-Successfull";
}
}
$test="aniket\n";
 

//$form_data=array('email_id'      =>       $email);

//fclose($myfile);

?>

</div>
<div class="question">
<p "color=white;" style="font-size:2vw;">PLEASE ANSWER THE FOLLOWING:</p>
</div>
<div style="padding bottom: 30px;">
</div>

<div class="question">

       <form method="post">  
	
	<p style="font-size:2vw;">WHAT IS THE MAJOR CAUSE OF AIR POLLUTION:</p>
	<p style="font-size:2vw;"><input type="radio" name="Factories" value="Factories">Factories</p>
	<p style="font-size:2vw;"><input type="radio" name="Wood Burning" value="Wood Burning">Wood Burning</p>
	<p style="font-size:2vw;"><input type="radio" name="Chimneys" value="Chimneys">Chimneys</p>
	<p style="font-size:2vw;"><input type="radio" name="Vehicles" value="Vehicles">Vehicles</p>
	<input type="submit" name="submit" value="Confirm" />

	</form>
<?php
$element="1\n";
$data = array(1);

if (isset($_POST['submit'])) {
if(isset($_POST['Factories']))
{
echo nl2br("The correct answer is Factories\n");
echo "\xA";
  //  Displaying Selected Value
//$count=$count+1;
if($_POST['Factories']=="Factories")
{

echo "Your answer is correct.";
$file = fopen("contacts.txt","a+");
fwrite($file,$element);
fclose($file);
}
else
{
echo "Sorry,You made a mistake.";
}

}
}
?>
	

</div>
<div class="question">

	<form method="POST">
	
	<p style="font-size:2vw;">ACCORDING TO THE WHO 2014 REPORT THE NO OF PEOPLE WHO DIED DUE TO AIR POLLUTION WAS ESTIMATED TO BE AROUND:</p>
	<p style="font-size:2vw;"><input type="radio" name="2" value="2 MILLION">2 MILLION</p>
	<p style="font-size:2vw;"><input type="radio" name="7" value="7 MILLION">7 MILLION</p>
	<p style="font-size:2vw;"><input type="radio" name="12" value="12 MILLION">12 MILLION</p>
	<p style="font-size:2vw;"><input type="radio" name="17" value="17 MILLION">17 MILLION</p>
	<input type="submit" name="submit" value="Confirm" />

	</form>
<?php
$element="1";
$data=array(1);
if (isset($_POST['submit'])) {
if(isset($_POST['7']))
{
echo "The correct answer is 7 MILLION.";  //  Displaying Selected Value
//$count=$count+1;
echo "\xA";
if($_POST['7']=="7 MILLION")
{

echo "Your answer is correct.";
$file = fopen("contacts.txt","a+");
fwrite($file,$element);
fclose($file);
}
else
{
echo "Sorry,You made a mistake.";
}

}


}
?>

	

</div>

<div class="question">

	<form method="POST">
	<p style="font-size:2vw;">WHAT IS THE CHEMICAL COMPOSITION OF AIR:</p>
	<p style="font-size:2vw;"><input type="radio" name="1" value="1">78% Nitrogen, 21% Oxygen, 1% other gases</p>
	<p style="font-size:2vw;"><input type="radio" name="2" value="2">76% Nitrogen, 18% Oxygen, 2% other gases</p>
	<p style="font-size:2vw;"><input type="radio" name="3" value="3">77% Nitrogen, 22% Oxygen, 1% other gases</p>
	<p style="font-size:2vw;"><input type="radio" name="4" value="4">79% Nitrogen, 19% Oxygen, 2% other gases</p>
	<input type="submit" name="submit" value="Confirm" />

	</form>
<?php
$element="1";
$data=array(1);
if (isset($_POST['submit'])) {
if(isset($_POST['1']))
{
echo "The correct answer is 78% Nitrogen, 21% Oxygen, 1% other gases.";  //  Displaying Selected Value
//$count=$count+1;
echo "\xA";
if($_POST['1']=="1")
{

echo "Your answer is correct.";
$file = fopen("contacts.txt","a+");
fwrite($file,$element);
fclose($file);
}
else
{
echo "Sorry,You made a mistake.";
}

}
}
?>
	

</div>
<div class="question">


	<form method="POST">
	<p style="font-size:2vw;">ACCORDING TO THE WHO THE NO OF PEOPLE OUT OF 10 WHO INTAKE AIR WITH POLLUTANTS:</p>
	<p style="font-size:2vw;"><input type="radio" name="9" value="9">9</p>
	<p style="font-size:2vw;"><input type="radio" name="6" value="6">6</p>
	<p style="font-size:2vw;"><input type="radio" name="8" value="8">8</p>
	<p style="font-size:2vw;"><input type="radio" name="7" value="7">7</p>
	<input type="submit" name="submit" value="Confirm" />

	</form>
<?php
$element="1";
$data=array(1);
if (isset($_POST['submit'])) {
if(isset($_POST['9']))
{
echo "The correct answer is 9.";  //  Displaying Selected Value
//$count=$count+1;
echo "\xA";
if($_POST['9']=="9")
{

echo "Your answer is correct.";
$file = fopen("contacts.txt","a+");
fwrite($file,$element);
fclose($file);

}
else
{
echo "Sorry,You made a mistake.";
}

}
}
?>
	

</div>
<div class="question">


	<form method="POST">
	<p style="font-size:2vw;">ACCORDING TO THE WHO WHAT PERCENTAGE OF HEART DISEASES IS CAUSED BY AIR POLLUTION:</p>
	<p style="font-size:2vw;"><input type="radio" name="5%" value="5%">5%</p>
	<p style="font-size:2vw;"><input type="radio" name="15%" value="15%">15%</p>
	<p style="font-size:2vw;"><input type="radio" name="25%" value="25%">25%</p>
	<p style="font-size:2vw;"><input type="radio" name="35%" value="35%">35%</p>
	<input type="submit" name="submit" value="Confirm" />
	
	</form>
<?php
$element="1";
$data=array(1);
if (isset($_POST['submit'])) {
if(isset($_POST['25%']))
{
echo "The correct answer is 25%.";  //  Displaying Selected Value
//$count=$count+1;
echo "\xA";
if($_POST['25%']=="25%")
{

echo "Your answer is correct.";
$file = fopen("contacts.txt","a+");
fwrite($file,$element);
fclose($file);

}
else
{
echo "Sorry,You made a mistake.";
}

}
}
?>

</div>
<div>
<h1>SOME INTERESTING NEWS FOR THIS WEEK:</h1>
<div>
<a href="https://www.vox.com/2018/5/8/17316978/india-pollution-levels-air-delhi">Link1</a>
</div>
<div>
<a href="https://www.nbcnews.com/mach/science/rising-seas-could-knock-out-internet-sooner-scientists-thought-ncna896256">Link2</a>
</div>
<div>
<a href="https://www.thehindu.com/news/national/kerala/biodiversity-spot-nurtured-by-students-set-to-open/article24617613.ece">Link3</a>
</div>
</div>
<div class=background>
<p style="font-size:2vw;">If you want to pay for the Kerala floods</p>
<p style="font-size:2vw;">Click on the following link:</p>
<a href="https://donation.cmdrf.kerala.gov.in"><p style="font-size:2vw;">LINK TO PAY FOR KERALA FLOODS</p></a>
</div>
<div class=background>
<!-- begin wwww.htmlcommentbox.com -->
 <div id="HCB_comment_box"><a href="http://www.htmlcommentbox.com">Comment Box</a> is loading comments...</div>
 <link rel="stylesheet" type="text/css" href="//www.htmlcommentbox.com/static/skins/bootstrap/twitter-bootstrap.css?v=0" />
 <script type="text/javascript" id="hcb"> /*<!--*/ if(!window.hcb_user){hcb_user={};} (function(){var s=document.createElement("script"), l=hcb_user.PAGE || (""+window.location).replace(/'/g,"%27"), h="//www.htmlcommentbox.com";s.setAttribute("type","text/javascript");s.setAttribute("src", h+"/jread?page="+encodeURIComponent(l).replace("+","%2B")+"&opts=16862&num=10&ts=1531129496819");if (typeof s!="undefined") document.getElementsByTagName("head")[0].appendChild(s);})(); /*-->*/ </script>
<!-- end www.htmlcommentbox.com -->
</div>
<div class=padding>
<footer>&copy; Copyright 2018 aniket deroy</footer>

</div>

</body>

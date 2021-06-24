<!DOCTYPE html>

<html>

<head>

<meta name="viewport" content="width=device-width, initial-scale=1">

<style>

.slidecontainer {
  width: 50%;

}

body {
  background-image: url('img.JPG');
  margin-left:150px;
}


</style>

</head>

<body>


<h1 style="margin-left:20px;">Robot Arm</h1>

       <center> <?php if(isset($_SESSION['insert_msg'])){

                         echo   $_SESSION["insert_msg"] ;

                         unset($_SESSION['insert_msg']);

       }?></center>

      



<div class="slidecontainer">

<form action="database.php" method="post">

<p>Motor 1 <input type="range" min="0" max="180" value="90" name="motor1" class="slider1" id="myRange1"><span id="demo1"></span></p>

<p>Motor 2 <input type="range" min="0" max="180" value="90" name="motor2" class="slider2" id="myRange2"><span id="demo2"></span></p>

<p>Motor 3 <input type="range" min="0" max="180" value="90" name="motor3" class="slider3" id="myRange3"><span id="demo3"></span></p>

<p>Motor 4 <input type="range" min="0" max="180" value="90" name="motor4" class="slider4" id="myRange4"><span id="demo4"></span></p>

<p>Motor 5 <input type="range" min="0" max="180" value="90" name="motor5" class="slider5" id="myRange5"><span id="demo5"></span></p>

<p>Motor 6 <input type="range" min="0" max="180" value="90" name="motor6" class="slider6" id="myRange6"><span id="demo6"></span></p>

<input type="submit" name="Save" value="Save" style=" width:70px;  height:30px; font-size:18px; margin-left:5px; margin-right:30px; border-radius:10px; background-color:#00ff7f " >

<input type="submit" name="Run" value="Run" style=" width:70px;  height:30px; font-size:18px; margin-left:15px; border-radius:10px; background-color:#ff6666">

</form>

</div>

<script>

var slider1 = document.getElementById("myRange1");

var output1 = document.getElementById("demo1");

output1.innerHTML = slider1.value;

slider1.oninput = function() {

  output1.innerHTML = this.value;

}

var slider2 = document.getElementById("myRange2");

var output2 = document.getElementById("demo2");

output2.innerHTML = slider2.value;

slider2.oninput = function() {

  output2.innerHTML = this.value;

}

var slider3 = document.getElementById("myRange3");

var output3 = document.getElementById("demo3");

output3.innerHTML = slider3.value;

slider3.oninput = function() {

  output3.innerHTML = this.value;

}

var slider4 = document.getElementById("myRange4");

var output4 = document.getElementById("demo4");

output4.innerHTML = slider4.value;

slider4.oninput = function() {

  output4.innerHTML = this.value;

}

var slider5 = document.getElementById("myRange5");

var output5 = document.getElementById("demo5");

output5.innerHTML = slider5.value;

slider5.oninput = function() {

  output5.innerHTML = this.value;

}

var slider6 = document.getElementById("myRange6");

var output6 = document.getElementById("demo6");

output6.innerHTML = slider6.value;

slider6.oninput = function() {

  output6.innerHTML = this.value;

}

</script>

</body>

</html>
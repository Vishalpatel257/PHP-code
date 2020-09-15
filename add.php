<?php
include_once("config.php");
if($_SERVER['REQUEST_METHOD']=='POST')
{
   $name=$_POST['name'];

    $appointmentdate = $_POST['appointmentdate'];
   echo "<br>";
   $appointmentdate = date( 'Y-m-d H:i:s',strtotime($appointmentdate));
    echo "<br>";
    $result=mysqli_query($mysqli,"INSERT INTO appointment(name, appointmentdate) VALUE ('$name','$appointmentdate')");
    echo "<font color='green'>sucessful</font>";
    echo "<a href='.php'>View</a>";
 }
   
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style>
    body{
      background-color:pink;
    }
   #demo {
      margin-top:200px;margin-left:450px;font-size:60px;
    
    }
    </style>
</head>

<body>
  <p id="demo" style="" ></p>
  <script>
    var simple = '<?php echo $appointmentdate; ?>';
    //console.log(simple);
    var countDownDate = new Date('<?php echo $appointmentdate; ?>');
    console.log(countDownDate);
    //var countDownDate = new Date("Dec 5, 2019 07:50:58").getTime();
    var x = setInterval(function () {
      var now = new Date();
      //console.log(now);
      var distance = countDownDate - now;
      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);
      document.getElementById("demo").innerHTML = days + "d " + hours + "h " +
        minutes + "i " + seconds + "s ";
      if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
      }
    }, 1000);
  </script>
</body>

</html>
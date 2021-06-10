<?php
session_start();
$student_name=$_SESSION['userlogin'];
require_once('application/config.php');
?>

<!DOCTYPE html>
<html lang="zh-TW">
<head>
 <meta charset="UTF-8">
 <title>SCUber_Application</title>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/service.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.5.0/moment.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
<script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-light navbar-light fixed-top container col-sm-5" style="width:100%">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar">
     <span class="navbar-toggler-icon"></span>
  </button>
  <div id="navbar" class="collapse navbar-collapse" >
    <ul class="nav nav-tabs" role="tablist">
      <li class="nav-item card">
        <div class="up">
          <table width='100%' border='1' cellpadding='3' cellspacing='5' >
            <tr>
                <th>姓名</th>
                <th>年紀</th>
                <th>性別</th>
                <th>車牌</th>
                <th>車型</th>
                <th>電話</th>
            </tr>
            <?php
$query="SELECT * FROM driver ORDER BY RAND()
LIMIT 1";

$result = $db->query($query);
foreach($result as $row){
  echo'<tr>
        <td>'.$row['Driver_name'].'</td>
        <td>'.$row['age'].'</td>
        <td>'.$row['sex'].'</td>
        <td>'.$row['number'].'</td>
        <td>'.$row['car_type'].'</td>
        <td>'.$row['phone'].'</td>
        <tr>';
    }
    $Driver_name=$row['Driver_name'];

    $res= $db->query("INSERT INTO booking(student_name,Driver_name,cost) VALUES('$student_name','$Driver_name','100')");


?>
          </table>
        </div>
      </li>
      <li class="nav-item card2">
        <div class="down">
          <table class="table-borderless" width='100%'  cellpadding='10'>
            <tr>
              <th class="left-foto">
                <img class="img-thumbnail  rounded-circle " alt="Cinque Terre"  src="images/S__8904749.jpg" >
              </th>
              <th class="right-word">
                <h2 >費用:&emsp;$ 100 </h2>
              </th>
            </tr>
            <tr>
              <td class="left-foto">
                <h3>司機</h3>
              </td>
              <td class="right-word">
                <h4 style="float: left;">預計抵達時間&emsp;<div class="countdown" style="float: right;"></div></h4>
              </td>
            </tr>
          </table>
        </div>
      </li>
    </ul>
  </div>
</nav>
  <br class="d-sm-none">
  <br class="d-sm-none">
  <iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d7226.274572387769!2d121.53233927423433!3d25.09721368577091!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3442ac228f70340d%3A0x9a0072f960485c6f!2sSoochow%20University%2C%20No.%2070%E8%99%9F%2C%20Linxi%20Road%2C%20Shilin%20District%2C%20Taipei%20City%2C%20Taiwan%2011102!3m2!1d25.094414999999998!2d121.54574799999999!4m5!1s0x3442aea484ce635d%3A0xd6170d8a7ce2ee11!2sShilin%20Station%20(Zhongshan)!3m2!1d25.092846299999998!2d121.52768529999999!5e0!3m2!1szh-TW!2stw!4v1591515458614!5m2!1szh-TW!2stw" width="600" height="748" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
  </iframe>
</body>
</html>
<script type="text/javascript">
   var duration = moment.duration({
      'minutes': 0,
      'seconds': 10

    });

    var timestamp = new Date(0, 0, 0, 2, 10, 30);
    var interval = 1;
    var timer = setInterval(function() {
      timestamp = new Date(timestamp.getTime() + interval * 1000);

      duration = moment.duration(duration.asSeconds() - interval, 'seconds');
      var min = duration.minutes();
      var sec = duration.seconds();

      sec -= 1;
      if (min < 0) return clearInterval(timer);
      if (min < 10 && min.length != 2) min = '0' + min;
      if (sec < 0 && min != 0) {
        min -= 1;
        sec = 59;
      } else if (sec < 10 && sec.length != 2) sec = '0' + sec;

      $('.countdown').text(min + ':' + sec);
      if (min == 0 && sec == 0)
    {
        alert("感謝您的搭乘！")
        location.href='./login.php';
    }

    }, 1000);

</script>
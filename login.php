<?php
require_once('application/config.php');
?>

<!DOCTYPE html>
<html lang="zh-TW">
<head>
 <meta charset="UTF-8">
 <title>Scuber</title>
 <meta name="viewport" content="width=device-width,initial-scale=1.0">
 <meta name="viewport" content="width=device-width,initial-scale=1.0">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
 <div class="container">
  <div class="card">
   <div class="card-title text-center">
    <h1>Scuber</h1>
   </div>
   <form action="#" class="was-validated card" style="margin-left:6vw ">
    <br>
    <div class="form-group">
          <label for="usr" class="ahead">Name</label>
          <input type="text" class="form-control type" name="student_name" id="student_name" placeholder="請輸入你的名字" required>
         </div>
         <div class="form-group">
          <label for="usr" class="ahead">ID</label>
          <input type="text" class="form-control type" name="student_number" id="student_number" placeholder="請輸入你的學號" required>
         </div>
         <div class="form-group">
          <label for="usr" class="mr-sm-0 ahead">Tel</label>
          <input type="text" class="form-control type" id="phone" name="phone" placeholder="請輸入你的電話" required>
         </div>
        
        <div class="sign">
		 <button type="button" name="button" id="login" class="btn btn-light">Login</button> 
        </div>
        </form>

    </div>
  </div>
 </div>
 <script src="http://code.jquery.com/jquery-3.3.1.min.js"
			  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
			  crossorigin="anonymous"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script>
	  $(function(){
		$('#login').click(function(e){

			var valid = this.form.checkValidity();
      if(valid){
				var student_name= $('#student_name').val();
				var student_number = $('#student_number').val();
        		var phone = $('#phone').val();
			}

			e.preventDefault();

			$.ajax({
				type: 'POST',
				url: 'application/validation.php',
				data:  {student_name: student_name, student_number: student_number,phone:phone},
				success: function(data){
					alert(data);
					if($.trim(data) === "Login successful"){
						setTimeout(' window.location.href =  "booking.php"');
						}
					
				},
				error: function(data){
					alert('error');
				}
			});

		});
	});
</script>

</body>
</html>
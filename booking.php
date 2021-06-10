<!DOCTYPE html>
<html lang="zh-TW">
<head>
  <meta charset="UTF-8">
  <title>Booking</title>
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/booking.css">
</head>
<body>

  <div class="container">
    <div class="card">
      <div class="card-title text-center">
        <h1>Booking</h1>
      </div>
    <form action="/action_page.php" class="card" style="margin-left:6vw" name="form" id="form">
      <br>
      <br><br><br>
        <div class="form-group">
          <label for="usr" class="ahead">性別:</label>
          <div class="type">
            <div class="form-check-inline">
              <label class="form-check-label" for="radio1">
                <input type="radio" class="form-check-input" id="radio1" name="sex" >男
              </label>
            </div>
            <div class="form-check-inline">
              <label class="form-check-label" for="radio2" >
                <input type="radio" class="form-check-input" id="radio2" name="sex">女
              </label>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for="usr" class="ahead">地點:</label>
          <div class="type">
            <div class="form-check-inline ">
              <label class="form-check-label1" for="radio3">
                <input type="radio" class="form-check-input " id="radio3" name="place" value="校內">校內
              </label>
            </div>
            <div class="form-check-inline">
              <label class="form-check-label2" for="radio4" >
                <input type="radio" class="form-check-input" id="radio4" name="place" value="校外">校外
              </label>
            </div>
          </div>
        </div>
        <div class="form-group-inline">
          <label for="sel1" class="ahead">人數:</label>
            <select name="people" class="form-control type1 ">
              <option>2~4</option>
              <option text='text' name='sum'>2人</option>
              <option text='text' name='sum'>3人</option>
              <option text='text' name='sum'>4人</option>
            </select>
        </div> 
        <br>
        <div class="form-group">
          <label for="comment" class="ahead">備註:</label>
            <textarea class="form-control type" rows="3" id="comment" name="text" placeholder="請輸入文字" value='無'></textarea>
        </div>
    </form>
    <div class="sign">
      <input class="button" type='button' value='sure' data-action="submit"/>
    </div>
        <br>
    </div>
    <div class="photo">
         
      </div> 
  </div>

</body>
</html>
<script type="text/javascript">
  const submitBtn = document.querySelector('[data-action="submit"]');
  submitBtn.addEventListener("click", processFormData);

  function processFormData(e) {
  const form = document.forms['form'];
  //取 elements 集合中 name 屬性為 name 的值
  const place = form.elements.place.value;
  //取 elements 集合中 name 屬性為 email 的值
  const sum = form.elements.people.value;
  const text = form.elements.text.value;

  alert("地點：" + place + "\n人數： " + sum + "\n備註:" + text);
  {location.href='service.php'}

}
</script>



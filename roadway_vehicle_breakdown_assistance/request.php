<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <title>Register Form</title>
  <link rel="stylesheet" href="styleh.css">
</head>
<style >
@import url('https://fonts.googleapis.com/css?family=Roboto');


body {
  background:linear-gradient(to right, #78a7ba 0%, #385D6C 50%, #78a7ba 99%);
}

        body{ font: 14px sans-serif; }
        .wrapper{ width: 360px; padding: 30px; }
    

.signup-form {
  font-family: "Roboto", sans-serif;
  width:650px;
  margin:30px auto;
  background:linear-gradient(to right, #ffffff 0%, #fafafa 50%, #ffffff 99%);
  border-radius: 10px;
}


.form-header  {
  font-size: 30px;
  text-align:center;
  color:#666;
  padding:20px 0;
  border-bottom:1px solid #cccccc;
}
.td{
  text-align: center;
  text-indent: center;
  box-sizing: 40px;
  size: 12px;

}

</style>
<body>
  <h1 class="form-header">Customer Request</h1>
 <form  class ="signup-form left"action="insert.php" method="POST">
  <div class="form-body">
  <table class="form-group left">
    <div class="horizontal-group">
          <div class="form-group left"> 
   <tr >
    <div>
    <td class="td">Name :</td>
    <td ><input class="form-group" type="text" name="username" required></td>
    </div>
   </tr>
 </div>
</div>
   <tr>
    <div>
    <td class="td">Address</td>
    <td ><input type="text" name="Address" required></td>
    </div>
   </tr>
   
   <tr>
    <div></div>
    <td class="td">Service Needed :</td>
    <td><input type="service" name="service" required></td>
   </tr> 
   <tr>
    <td class="td">Phone no :</td>
    <td>
     <input type="phone" name="phone" required>
    </td>
   </tr>
   
   
   <tr>
    <td>
      <input type="submit" value="Submit" name="submit">
    </td>
   </tr>
  </table>

</div>
 </form>
</body>
</html>
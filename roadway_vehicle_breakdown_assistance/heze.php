<?php
require_once('configii.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>User Registration | PHP</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<style >

@import url('https://fonts.googleapis.com/css?family=Roboto');


body {
  background:linear-gradient(to right, #78a7ba 0%, #385D6C 50%, #78a7ba 99%);
  background-image: url('garage.jpg');

}

.signup-form {
  font-family: "Roboto", sans-serif;
  width:650px;
  margin:30px auto;
  background:linear-gradient(to right, #ffffff 0%, #fafafa 50%, #ffffff 99%);
  border-radius: 10px;
}
.form-header  {
  background-color: #EFF0F1;
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
}
.h1{
    align text-align: left;
}
</style>
<body class="signup-form" style="background-image: url('garage.jpg');">

<div>
    <?php
    
    ?>  
</div>

<div>
    
    <form action="mailto:" method="post" enctype="text/plain">
        <div class="form-header">
        <div class="container">
            
            <div class="row">
                <div class="col-sm-3">
                </div>
                    <h1> Order Form to Mechanics    </h1>

                    

                    <hr class="mb-3">
                

                    <label for="name"><b> Name</b></label>
                    <input class="form-control" id="name" type="text" name="name" required>

                    <label for="address"><b>Address</b></label>
                    <input class="form-control" id="address"  type="text" name="address" required>

                    <label for="email"><b>Email </b></label>
                    <input class="form-control" id="email"  type="email" name="email" required>

                    <label for="phonenumber"><b>Phone Number</b></label>
                    <input class="form-control" id="phonenumber"  type="text" name="phonenumber" required>

                    <label for="password"><b>Service Needed</b></label>
                    <input class="form-control" id="service"  type="text" name="service" required>
                    <hr class="mb-3">
                   <button type="submit" >SEND MAIL</button>
                

                </div>
            </div>
        </div>
    </form>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript">
    $(function(){
        $('#register').click(function(e){

            var valid = this.form.checkValidity();

            if(valid){


            var name    = $('#name').val();
            var address = $('#address').val();
            var email       = $('#email').val();
            var phonenumber = $('#phonenumber').val();
            var service     = $('#service').val();
            

                e.preventDefault(); 

                $.ajax({
                    type: 'POST',
                    url: 'processcustomer.php',
                    data: {name: name,address: address,email: email,phonenumber: phonenumber,service: service},
                    success: function(data){
                    Swal.fire({
                                'title': 'Successful',
                                'text': data,
                                'type': 'success'
                                })
                            
                    },
                    error: function(data){
                        Swal.fire({
                                'title': 'Errors',
                                'text': 'There were errors while saving the data.',
                                'type': 'error'
                                })
                    }
                });

                
            }else{
                
            }

            



        });     

        
    });
    
</script>

  <p class="text-center"><a href="break.php" class="btn btn-primary">Back</a></p>
</body>
</html>


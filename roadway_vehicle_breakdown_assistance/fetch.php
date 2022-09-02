<?php 

    require_once("conne.php");
    $query = " select * from mechanic ";
    $result = mysqli_query($con,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <title>View Records</title>
</head>
<body class="bg-dark">

        <div class="container">
            <div class="row">
                <div class="col m-auto">
                    <div class="card mt-5">
                        <table align="center" border="1px" style="width:600px; line-height:40px;">
                           <tr> 
      <th colspan="4"><h2>Mechanics Record</h2></th> 
      </tr> 
                            <tr>
                                <td>  ID </td>
                                <td> Name </td>
                                <td> Address </td>
                                <td>  Contact </td>
                                
                            </tr>

                            <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $id = $row['id'];
                                        $name = $row['name'];
                                        $address = $row['address'];
                                        $salary = $row['salary'];
                            ?>
                                    <tr>
                                        <td><?php echo $id ?></td>
                                        <td><?php echo $name ?></td>
                                        <td><?php echo $address ?></td>
                                        <td><?php echo $salary ?></td>
                                       
                                    </tr>        
                            <?php 
                                    }  
                            ?>                                                                    
                                   

                        </table>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>
<?php 

    require_once("conn.php");
    $query = " select * from records ";
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
                                <td> Email </td>
                                <td>  Age </td>
                                
                            </tr>

                            <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $UserID = $row['User_ID'];
                                        $UserName = $row['User_Name'];
                                        $UserEmail = $row['User_Email'];
                                        $UserAge = $row['User_Age'];
                            ?>
                                    <tr>
                                        <td><?php echo $UserID ?></td>
                                        <td><?php echo $UserName ?></td>
                                        <td><?php echo $UserEmail ?></td>
                                        <td><?php echo $UserAge ?></td>
                                       
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
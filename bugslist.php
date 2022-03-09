<?php
$con=mysqli_connect("localhost","root","","buglist");
?>

<!DOCTYPE html>
<html lang="en">
<head> 
  <title>Bugs</title>
  <link rel="icon" href="./chik.png">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<style>
    table,th,tr,td{
        border:2px solid white;
        border-collapse: collapse; 
        text-align:center;
    }
    table{
        margin-top:270px;
        background-color:yellow;
        font-size:20px;
        height:120px;
        width:1200px;
    }
    body{
        background-image: url(./bugimg.png);
            background-size:     cover;               
            height:390px;
            background-repeat:   no-repeat;
            background-position: center center; 
    }
    .text{
        color:black;
        background-color:gray;
        height:70px;
        width:50px;
    }
</style>
 
    <link rel="stylesheet" href="./css/buglist.css">
</head>
<body>
    <center>
  <table id="table">
    <thead>
    	<tr>
            <th scope="col" rowspan="2" class="text">BUG</th>
        </tr>
        <tr>
            <th scope="col" class="text" >id</th>
            <th class="text">Type</th>
            
            <th scope="col" class="text">Reported By</th>
            <th scope="col" class="text">Serverity</th>
            <th scope="col" class="text">Reported date</th>
            <th scope="col" class="text">Status</th>
            <th scope="col" class="text">Action</th>
        </tr>
    </thead>

    <tbody>
    <?php
    $query=$con->prepare("SELECT * FROM bugs_check");
    $query->execute();
    $result=$query->get_result();
    while($row=$result->fetch_assoc()){
        ?>
        <tr>
    	    <th scope="row">
                <?php
                echo $row['Bugs'];
                ?>
                
                </th>

            <td>
                <?php
                echo $row['Bugs_id']

                ?>
            </td>
            <td>
                <?php
                echo $row['Bugs_Types']

                ?>
            </td>
            <td>
                <?php
                echo $row['Reported_By']

                ?>
            </td>

            <?php
             if($row['Bugs_Status']=="reported")
             { 
                 ?>
                <td style="color:blue";>
                <?php
               
                echo $row['Bugs_Status']

                ?>
            </td>
            <?php
             }
             
            
                 elseif($row['Bugs_Status']=="in-progress"){
                    ?>
                    <td style="color:green";>
                    <?php
                   
                    echo $row['Bugs_Status']
    
                    ?>
                </td>
                   <?php
                 }
                 else{
                     ?>
                    <td style="color:green";>
                    <?php
                   
                    echo $row['Bugs_Status'];
    
                    ?>
                  <i class="fas fa-check"></i>

                </td>
                     <?php
                 }
            ?>

         <!---->
         <?php
             if($row['Bugs_Saverity']=="Critical" || $row['Bugs_Saverity']=="Blocker")
             { 
                 ?>
                <td style="color:red";>
                <?php
               
                echo $row['Bugs_Saverity']

                ?>
            </td>
            <?php
             }
                 elseif($row['Bugs_Saverity']=="Major"){
                    ?>
                    <td style="color:orange";>
                    <?php
                   
                    echo $row['Bugs_Saverity']
    
                    ?>
                </td>
                   <?php
                 }
                 else{
                     ?>
                     <td style="color:black";>
                    <?php
                   
                    echo $row['Bugs_Saverity']
    
                    ?>
                </td>
                <?php
                 }
             
            ?>
         <!---->
            
           
            <td>
                <?php
                echo $row['Date_of_Report'];

                ?>
            </td>
            <td>
              
             <a href="./delete.php?id=<?php echo $row['Bugs_id'];?>" style='font-weight: bold; text-decoration:none;'><i class="fas fa-trash-alt"></i></a>
             <a href="./create.html" style='font-weight: bold; text-decoration:none; padding:6px'><i class="fas fa-plus-circle"></i></a>
            </td>
        </tr>



        <?php
    }


   ?>
    </tbody>

</table>
</center>
</body>
</html>
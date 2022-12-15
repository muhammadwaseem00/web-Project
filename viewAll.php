<?php include "head.php";  ?>
 
 


<br><br>

<div class="row">
<div class="col-md-2"></div>
<div class="col-md-8" style="background-color:gray; box-shadow:0px 0px 10px white;"> 
    <h2 style="color:white">View All</h2><br>
    
    <form method="get">
    
        <select class="form-control" required name="select" >
        <option value=""> Select</option>
        <option value="1"> Schools</option>
        <option value="2">Teachers</option>
        <option value="3">Students</option>
        </select>

        <br>
        <center> <input type="submit" name="sub" value="Search" class="btn ">  </center>
        <br>    
    </form>
    
    
</div>
</div>
<br><br>
<div class="row">
<div class="col-md-2"></div>

    <div class="col-md-8" style="background-color:white; padding:10px;">
    
        <?php

if(isset($_GET['sub'])){
  
    $id = $_GET['select'];
   
    if($id == 1){
    ?>
        <h3>School Details</h3>
<table class="table table-hover table-bordered">
<thead>
<tr>
<th> Name</th>
<th>Address</th>
<th> Contact</th>
<th> Delete</th>
</tr>    
</thead>
    
     <?php
        
        $query = "select * from school";
        $result = mysqli_query($connection , $query);
        if(!$result){
            echo "<h3> No Record Found  </h3>";
        }else{
            while($record = mysqli_fetch_assoc($result)){
                $id = $record['id'];
                $name = $record['name'];
                 $address= $record['address'];
                $contact = $record['contact'];
                
                echo "<tr>";
                echo "<td>  $name </td>";
                 echo "<td>  $address </td>";
                 echo "<td>  $contact </td>";
                 echo "<td> <a href='viewAll.php?school=$id'> Delete</a> </td>";
                echo "</tr>";
            }
        }
        
        ?>
    
</table>

<?php        
    }else if($id == 2){
         ?>
        <h3>Teacher Details</h3>
<table class="table table-hover table-bordered">
<thead>
<tr>
<th>Teacher Name</th>
<th>School</th>
<th>Address</th>
<th> Contact</th>
<th> Delete</th>
</tr>    
</thead>
    <?php
        
        $query = "select * from teacher";
        $result = mysqli_query($connection , $query);
        if(!$result){
            echo "<h3> No Record Found  </h3>";
        }else{
            while($record = mysqli_fetch_assoc($result)){
                $id = $record['id'];
                $name = $record['name'];
                $school = $record['school_id'];
                $address= $record['address'];
                $contact = $record['contact'];
                
                echo "<tr>";
                echo "<td>  $name </td>";
                 echo "<td>  $school </td>";
                 echo "<td>  $address </td>";
                 echo "<td>  $contact </td>";
                 echo "<td> <a href='viewAll.php?teacher=$id'> Delete</a> </td>";
                echo "</tr>";
            }
        }
        
        ?>
    
</table>

<?php        
    }else if($id == 3){
               ?>
        <h3>Student Details</h3>
<table class="table table-hover table-bordered">
<thead>
<tr>
<th>Student Name</th>
<th>School</th>
<th>Class</th>
<th> Address</th>
<th> Contact</th>
<th> Delete</th>
</tr>    
</thead>
    
     <?php
        
        $query = "select * from student";
        $result = mysqli_query($connection , $query);
        if(!$result){
            echo "<h3> No Record Found  </h3>";
        }else{
            while($record = mysqli_fetch_assoc($result)){
                $id = $record['Roll'];
                $name = $record['name'];
                $school = $record['school_id'];
                $address= $record['address'];
                $contact = $record['contact'];
                $class  = $record['class'];
              
                echo "<tr>";
                echo "<td>  $name </td>";
                 echo "<td>  $school </td>";
                 echo "<td>  $class </td>";
                 echo "<td> $address  </td>";
                echo "<td>  $contact </td>";
                 echo "<td> <a href='viewAll.php?student=$id'> Delete</a> </td>";
                echo "</tr>";
            }
        }
        
        ?>
    
</table>

<?php   
    }//end of else if 
    
    
}

?>
        
    </div>
</div>


<?php


if(isset($_GET['teacher'])){
    $code = $_GET['teacher'];
    
    $delete_query = "delete from teacher where id = '$code' ";
    $result = mysqli_query($connection , $delete_query);
    if(!$result){
        echo "<script> alert('Not Deleted')  </script>";
    }else{
        
        header("Location:viewAll.php?select=2&sub=Search");
    }
    
}

if(isset($_GET['student'])){
    $code = $_GET['student'];
    
    $delete_query = "delete from student where Roll = '$code' ";
    $result = mysqli_query($connection , $delete_query);
    if(!$result){
        echo "<script> alert('Not Deleted')  </script>";
    }else{
        
        header("Location:viewAll.php?select=3&sub=Search");
    }
    
}



if(isset($_GET['school'])){
    $code = $_GET['school'];
    
    $delete_query = "delete from school where id = '$code' ";
    $result = mysqli_query($connection , $delete_query);
    if(!$result){
        echo "<script> alert('Not Deleted')  </script>";
    }else{
        
        header("Location:viewAll.php?select=1&sub=Search");
    }
    
}

?>


<?php include "footer.php";  ?>
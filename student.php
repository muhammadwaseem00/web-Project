<?php include "head.php";  ?>
 
 


<br><br>

<div class="row">
<div class="col-md-2"></div>
<div class="col-md-8" style="background-color:gray; box-shadow:0px 0px 10px white;"> 
    <h2 style="color:white"> Add Student</h2><br>
    
    <form method="post">
    
    <div class="form-group">
    <label> Roll No</label>
    <input type="text" name="roll" class="form-control" required>
    </div>
        
    <div class="form-group">
    <label> Student Name</label>
    <input type="text" name="name" class="form-control" required>
    </div>
    
     <div class="form-group">
    <label>Contact</label>
    <input type="text" name="address" class="form-control" required>
    </div>    
        
     <div class="form-group">
    <label> Address</label>
    <input type="text" name="contact" class="form-control" required>
    </div>    
        
     <div class="form-group">
    <label> Class</label>
    <input type="text" name="class" class="form-control" required>
    </div>      
        
    <div class="form-group">
    <label> School</label>
   <select name="school"  class="form-control" required>
    <option value="">Select School</option>
       <?php
       $query = "select * from school";
       $result = mysqli_query($connection , $query);
       if(!$result){
           echo "No data in database";
       }else{
        
           while($row = mysqli_fetch_assoc($result)){
               $name = $row['name'];
               $id = $row['id'];
               
               echo "<option value='$name'>  $name </option> ";
               
           }
           
       }
       
       ?>
    </select>
    </div>  
        
        <center> <input type="submit" name="sub" value="Add" class="btn ">  </center>
        <br>    
    </form>
    
    
</div>
</div>

<?php

if(isset($_POST['sub'])){
    $name = $_POST['name'];
    $addrss= $_POST['address'];
    $contact = $_POST['contact'];
    $school = $_POST['school'];
    $roll = $_POST['roll'];
     $class = $_POST['class'];

    $query = "insert into student(roll, name , address, contact , school_id , class)  ";
    
    $query .= "  values('$roll' , '$name' , '$contact', '$addrss' , '$school' , '$class' )";
    $result = mysqli_query($connection , $query);
    
    if(!$result){
        echo mysqli_error($connection);
        echo "<script> alert('not submitted, This Roll number is already in database') </script>";
    }else{
         echo "<script> alert('Successfull Submitted') </script>";
    }
}

?>

<?php include "footer.php";  ?>
<?php
session_start();
require 'dbcon.php';

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Information</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	  <style>
  body {
	  background-image: url('bg.jpg');
	  background-repeat: no-repeat;
	  background-attachment: fixed;
	  background-size: 100% 100%;}
</style>
 
 </head>
  <body>

    <div class="container mt-4">


        <?php include('message.php');?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Student Information
                            <a href="newindex.php"class ="btn btn-primary float-end">Add Student</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Student ID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Course ID</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $query="SELECT * FROM studentinfo";
                                    $query_run = mysqli_query($con,$query);

                                    if(mysqli_num_rows($query_run) >0)
                                    {
                                        foreach($query_run as $student)
                                        {
                                            ?>
                                        <tr>
                                         <td><?=$student['Student_ID'];?></td>
                                         <td><?=$student['Student_Firstname'];?></td>
                                         <td><?=$student['Student_Lastname'];?></td>
                                         <td><?=$student['course_ID'];?></td>
                                         <td>
                                            <a href="edit.php?StudentID=<?=$student['Student_ID'];?>" class ="btn btn-success btn-sm">Edit</a> 
                                            <form action="code.php" method="POST" class = "d-inline">
                                                <button type="submit" name="delete" value="<?=$student['Student_ID'];?>" class ="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                         </td>
                                        </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5> No Record Found </h5>";
                                    }
                                ?>
                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
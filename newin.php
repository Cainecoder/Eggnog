<?php
session_start();
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
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Add Student
                            <a href="imindex.php"class="btn btn-danger float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">

                        <div class="mb-3">
                         <label>Student ID</label>
                         <input type="text" name ="sID" class="form-control">
                        </div>

                        <div class="mb-3">
                         <label>First Name</label>
                         <input type="text" name ="sFName" class="form-control">
                        </div>

                        <div class="mb-3">
                         <label>Last Name</label>
                         <input type="text" name ="sLName" class="form-control">
                        </div>

                        <div class="mb-3">
                         <label>Course ID</label>
                         <select name ="cID" class="form-control">
                            <option>----Course----</option>
                            <option value="IT">Information Technology</option>
                            <option value="AC">Accounting</option>
                            <option value="MK">Marketing</option>
                        </select>
                        </div>

                        <div class="mb-3">
                            <button type = "submit" name ="save" class="btn btn-primary">Save</button>
                        </div>
                        

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
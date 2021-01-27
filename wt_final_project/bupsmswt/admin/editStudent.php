<?php
require_once 'header.php';


$id = base64_decode($_GET['id']);
//echo $id;


$studentInfo = mysqli_query($conn, "SELECT * FROM `students` WHERE `id`= '$id'");

$row = mysqli_fetch_assoc($studentInfo);

//print_r($row);

//echo $row['class'] == 'Class 4' ? 'Yes' : 'No';


if (isset($_POST['Updatestudent'])) {



    $class = $_POST['class'];
    $name = $_POST['name'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];




    //$photo = $_FILES['photo'];

    //photo ke post diye dhora jay nah,FILE die dhorte hoy,because photo hoilo ekta array element.

    //print_r($photo);





    // $photo = explode('.', $_FILES['photo']['name']);

    // $photo = end($photo);

    // $photo_name = $roll . '.' . $photo;




    $dataUpdate = mysqli_query($conn, "UPDATE `students` SET`class`='$class',`name`='$name',`fname`='$fname',`mname`='$mname',`address`='$address',`phone`='$phone' WHERE `id`='$id'");


    if ($dataUpdate) {

        header('location: allstudents.php');

        //$success = 'Data insert success!';

        //move_uploaded_file($_FILES['photo']['tmp_name'], '../images/students/' . $photo_name);
    } else {
        $fail = 'Data Update failed';
    }
}



?>








<div class="col-sm-10">
    <div class="content">
        <h1 class="text-primary">
            <i class="fa fa-user-plus"> Update Student </i>
        </h1>

        <ol class="breadcrumb ">

            <li class="active"><a href="index.php"><i class=" fa fa-users"></i>Dashboard</a></li>

            <li class="active"><a href="allstudents.php"><i class=" fa fa-users"></i>All Student</a></li>


            <li class="active"><i class=" fa fa-user-plus"></i>Update Users</li>
        </ol>


        <h2>
            <div class="row">


                <div>
                    <?php
                    if (isset($fail)) {
                        echo '<p class="alert alert-denger" >' . $fail . '</p>';
                    }
                    ?>
                </div>
            </div>
        </h2>


        ------------------
        <h2 class="text-center" style="margin-left: 150px;">Add Student By Form</h2>
        <div class="col-md-12 col-md-offset-3">
            <form action="" method="POST" enctype="multipart/form-data" class="form-horizontal">


                <div class=" form-group">
                    <label for="" class="control-label col-sm-1">Name</label>
                    <div class="col-sm-4">
                        <input type="text" placeholder="Name" name="name" class="form-control" value="<?= $row['name']; ?>">
                        <!-- 
                        <span class="error">

                           //  <?php

                                // if (isset($name_error)) {
                                //   echo $name_error;
                                // }

                                // 
                                ?> 

                        </span> -->

                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="">Class</label>
                    <div class="">
                        <select name="class" id="" class="" required>
                            <option value="">Select</option>
                            <option <?php echo $row['class'] == 'Class 2' ? 'selected=""' : ''; ?>  value="Class 1">Class 1</option>
                            <option <?php echo $row['class'] == 'Class 2' ? 'selected=""' : ''; ?> value="Class 2">Class 2</option>
                            <option <?php echo $row['class'] == 'Class 2' ? 'selected=""' : ''; ?> value="Class 3">Class 3</option>
                            <option <?php echo $row['class'] == 'Class 3' ? 'selected=""' : ''; ?> value="Class 4">Class 4</option>
                            <option <?php echo $row['class'] == 'Class 4' ? 'selected=""' : ''; ?> value="Class 5">Class 5</option>


                        </select>


                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="">Father's Name</label>
                    <div class="">
                        <input type="text" placeholder="Father's Name" name="fname" class="form-control" required value="<?= $row['fname']; ?>">


                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="">Mother's Name</label>
                    <div class="col-sm-4">
                        <input type="text" placeholder="mother's Name" name="mname" class="form-control" required value="<?= $row['mname']; ?>">


                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="">Address</label>
                    <div class="col-sm-4">
                        <input type="text" placeholder="Address" name="address" class="form-control" required value="<?= $row['address']; ?>">


                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="">Phone</label>
                    <div class="">
                        <input type="text" placeholder="01***" name="phone" pattern="[0-9]{11}" class="form-control" required value="<?= $row['phone']; ?>">


                    </div>
                </div>




                <div class="form-group">

                    <div class="col-sm-4">
                        <input type="submit" value="Update" class="btn btn-primary pull-right" name="Updatestudent">
                    </div>
                </div>



            </form>
        </div>



    </div>
</div>


<?php
require_once 'footer.php'


?>
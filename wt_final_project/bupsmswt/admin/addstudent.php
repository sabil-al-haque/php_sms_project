<?php
require_once 'header.php';

if (isset($_POST['addstudent'])) {


    $roll = $_POST['roll'];
    $class = $_POST['class'];
    $name = $_POST['name'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];



    //$photo = $_FILES['photo'];

    //photo ke post diye dhora jay nah,FILE die dhorte hoy,because photo hoilo ekta array element.

    //print_r($photo);

    $photo = explode('.', $_FILES['photo']['name']);

    $photo = end($photo);

    $photo_name = $roll . '.' . $photo;




    $dataInsert = mysqli_query($conn, "INSERT INTO `students`(`roll`, `class`, `name`, `fname`, `mname`, `address`,`phone`, `photo`) VALUES ('$roll','$class','$name','$fname','$mname','$address','$phone','$photo_name')");


    if ($dataInsert) {

        $success = 'Data insert success!';

        move_uploaded_file($_FILES['photo']['tmp_name'], '../images/students/' . $photo_name);
    } else {
        $fail = 'Data insert failed';
    }
}



?>


<div class="addstudent ">

    <div class=" left">
        <div class="content">
            <h1 class="">
                <i class="fa fa-user-plus"> Add Student </i>
            </h1>


            <h2>
                <div class="row">
                    <div>
                        <?php
                        if (isset($success)) {
                            echo '<p class="success" >' . $success . '</p>';
                        }
                        ?>
                    </div>

                    <div>
                        <?php
                        if (isset($fail)) {
                            echo '<p class="fail" >' . $fail . '</p>';
                        }
                        ?>
                    </div>
                </div>
            </h2>


            ------------------
            <h2 class="text-center" style="margin-left: 150px;">Add Student By Form</h2>
            <div class="">
                <form action="" method="POST" enctype="multipart/form-data" class="form-horizontal">

                    <div class="form-group">
                        <label for="" class="">Roll</label>
                        <div class="col-sm-4">
                            <input type="text" placeholder="Roll" name="roll" class="form-control" pattern="[0-9]{8}" required>


                        </div>
                    </div>

                    <div class=" form-group">
                        <label for="" class="control-label col-sm-1">Name</label>
                        <div class="">
                            <input type="text" placeholder="Name" name="name" class="form-control">
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
                        <label for="" >Class</label>
                        <div class="">
                            <select name="class" id="" class="form-control" required>

                                <option value="">Choose Batch</option>
                                <option value="BICT-2020">BICT-2020</option>
                                <option value="BICT-2019">BICT-2019</option>
                                <option value="BICT-2018">BICT-2018</option>
                                <option value="BICT-2017">BICT-2017</option>
                                <option value="BICT-2016">BICT-2016</option>
                                <option value="BICT-2015">BICT-2015</option>

                            </select>


                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="">Father's Name</label>
                        <div class="col-sm-4">
                            <input type="text" placeholder="Father's Name" name="fname" class="form-control" required>


                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="">Mother's Name</label>
                        <div class="col-sm-4">
                            <input type="text" placeholder="mother's Name" name="mname" class="form-control" required>


                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="">Address</label>
                        <div class="col-sm-4">
                            <input type="text" placeholder="Address" name="address" class="form-control" required>


                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="">Phone</label>
                        <div class="col-sm-4">
                            <input type="text" placeholder="01***" name="phone" pattern="[0-9]{11}" class="form-control" required>


                        </div>
                    </div>


                    <div class="form-group">
                        <label for="" class="">Photo</label>
                        <div class="col-sm-4">
                            <input type="file" name="photo">
                        </div>
                    </div>
                    <div class="form-group">

                        <div class="col-sm-4">
                            <input type="submit" value="Add" class="button" name="addstudent">
                        </div>
                    </div>



                </form>
            </div>



        </div>
    </div>
</div>


<?php
require_once 'footer.php'


?>
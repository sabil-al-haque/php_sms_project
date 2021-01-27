<?php
require_once 'header.php'


?>


<div class="allstudent left">
    <div class="content">
        <div class="allstudentheader">
            <div class="">
                <h1 class="text-primary">
                    <i class="fa fa-users"> All Student </i>
                </h1>

            </div>
        </div>

        <div class="">
            <table class="table fixed-width">

                <tbody>
                    <tr>
                        <td>Roll</td>
                        <td>class</td>
                        <td>Name</td>

                        <td>Fathers name</td>
                        <td>Mothers name</td>
                        <td>Address</td>
                        <td>Phone</td>
                        <td>photo</td>
                        <td>Action</td>
                    </tr>



                    <?php

                    $student = mysqli_query($conn, 'SELECT * FROM `students` ');

                    while ($row = mysqli_fetch_assoc($student)) {


                    ?>


                        <tr>
                            <td> <?php echo $row['roll']; ?> </td>
                            <td> <?php echo $row['class']; ?> </td>
                            <td> <?php echo $row['name']; ?> </td>
                            <td> <?php echo $row['fname']; ?> </td>
                            <td> <?php echo $row['mname']; ?> </td>
                            <td> <?php echo $row['address']; ?> </td>
                            <td> <?php echo $row['phone']; ?> </td>

                            <td> <img src="../images/students/<?php echo $row['photo']; ?>" alt="Pic"> </td>

                            <td>
                                <a href="editStudent.php?id=<?= base64_encode($row['id']); ?>">
                                    <i class=" fa fa-pencil"></i> Edit
                                </a>
                                <a href="delete.php?id=<?= base64_encode($row['id']); ?>&photo=id=<?= $row['photo']; ?>" class="btn btn-xs btn-danger">
                                    <i class=" fa fa-trash"></i> Delete
                                </a>
                            </td>

                        </tr>

                    <?php


                    }

                    ?>


                </tbody>
            </table>

        </div>

    </div>
</div>



<?php
require_once 'footer.php'


?>
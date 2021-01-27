<?php
require_once 'header.php'


?>




<div class="">
    <div class="content">
        <div class="alllusersheader">
            <div class="allusersinfo">
                <h1 class="text-primary">
                    <i class="fa fa-users"> All Users </i>
                </h1>

            </div>
        </div>

        <div class="allusers fixed-width">
            <table class="table fixed-width">
                <thead>

                </thead>
                <tbody>
                    <tr>

                        <td>ID</td>
                        <td>Name</td>

                        <td>E-mail</td>
                        <td>Photo</td>
                        <td>Join Date</td>
                    </tr>

                    <?php

                    $users = mysqli_query($conn, 'SELECT * FROM `userswt` ');
                    while ($row = mysqli_fetch_assoc($users)) {


                    ?>

                        <tr>
                            <td> <?php echo $row['id']; ?> </td>
                            <td> <?php echo $row['name']; ?> </td>
                            <td> <?php echo $row['email']; ?> </td>
                            <td> <img width="100px" src="../images/users/<?php echo $row['photo']; ?>" alt="Pic"> </td>

                            <td> <?php echo date('d-M-Y', strtotime($row['date_time'])); ?> </td>




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
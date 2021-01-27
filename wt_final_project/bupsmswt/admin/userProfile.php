<?php
require_once 'header.php'


?>




<div class="userprofile">
    <div class="">
        <h1 class="">
            <i class="fa fa-user"> My Profile </i>
        </h1>









        <?php

        $user_id = mysqli_query($conn, "SELECT * FROM `userswt` WHERE `id`= '$user'");
        $userData = mysqli_fetch_assoc($user_id);

        // echo $userData['name'];

        ?>





        <div class="row">

            <div class="">
                <table class="">

                    <tr>
                        <th>ID:</th>
                        <td>
                            <?= $userData['id']; ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Name:</th>
                        <td><?= $userData['name']; ?></td>
                    </tr>
                    <tr>
                        <th>Email:</th>
                        <td><?= $userData['email']; ?></td>
                    </tr>
                    <tr>
                        <th>Join Date:</th>
                        <td><?= date('d,M,Y', strtotime($userData['date_time'])); ?></td>
                    </tr>



                </table>

                <a class="button" href="editUserProfile.php?id=<?= base64_encode($userData['id']); ?>">Edit Profile</a>

            </div>


            <br>
            <br>
            <br>

            <div class="">

                <img class="" width="150px" src="../images/users/<?= $userData['photo']; ?>" alt="">


                <form action="updatePhoto.php" method="POST" enctype="multipart/form-data">
                    <label for="">Profile Photo</label>
                    <br>
                    <input type="file" name="new_photo">
                    <br>
                    <input type="hidden" name="photo" value="<?= $userData['photo']; ?>">

                    <input type="hidden" name="name" value="<?= $userData['name']; ?>">

                    <input type="hidden" name="id" value="<?= $userData['id']; ?>">

                    <input type="submit" class="button" name="update" value="Upload">


                </form>


            </div>
        </div>

    </div>
</div>


<?php
require_once 'footer.php'


?>
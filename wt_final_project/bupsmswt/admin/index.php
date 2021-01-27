<?php
require_once 'header.php';

$student_query = mysqli_query($conn, "SELECT * FROM students");

$student_count = mysqli_num_rows($student_query);




$users_query = mysqli_query($conn, "SELECT * FROM userswt");

$users_count = mysqli_num_rows($users_query);

?>








<div class="fixed-width about clearfix index">
    <div class="content">
        <div class="">
            <h1 class="text-center">
                <i class="fa fa-users"> Dashboard </i>
            </h1>

        </div>


        <div class="numberofstudentandusers clearfix">
            <div class="subnumberofstudentandusers">
                <div class="left alluser ">
                    <div class="">
                        <div class="">
                            <div class="row">
                                <div class="">
                                    <i class=" fa fa-users fa-5x"></i>
                                </div>
                                <div class="">
                                    <div>
                                        No of All Users is
                                    </div>
                                    <div>
                                        <p>

                                            <?php

                                            echo $users_count;

                                            ?>


                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a href="allusers.php">
                            <div class="">
                                <span class="">See All Users</span>
                                <span class=""><i class=" fa fa-users"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>

                    </div>
                </div>
                <div class="left">
                    <div class="">
                        <div class="">
                            <div class="row">
                                <div class="">
                                    <i class=" fa fa-users fa-5x"></i>
                                </div>
                                <div class="">
                                    <div>
                                        No of All Students is
                                    </div>
                                    <div>
                                        <p>

                                            <?php

                                            echo $student_count;

                                            ?>


                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <a href="allstudents.php">
                            <div class="">
                                <span class="">See All Student</span>
                                <span class=""><i class=" fa fa-users"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>

                    </div>
                </div>

            </div>

        </div>

    </div>
</div>


<?php
require_once 'footer.php'


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> BUP SMS</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="style.css?v= <?php echo time(); ?>">
    <link rel="stylesheet" href="./css/responsive.css?v= <?php echo time(); ?>">

</head>

<body>

    <div class="header clearfix">

        <div class="fixed-with">
            <div class="header-left">
                <a href="#">
                    <img style="width: 60px; margin-top:8px;" src="img/logo.png" alt="">
                </a>
            </div>
            <div class="header-right">
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">ABOUT</a></li>
                    <li><a href="#">ADMISSIONS</a></li>
                    <li><a href="#"> ACADEMICS</a></li>
                    <li><a href="#"> ANNOUNCEMENTS</a></li>

                </ul>
            </div>
        </div>
    </div>

    <div class="banner">



        <div class="fixed-with">
            <a href="resister.php" class="button">Register</a>
            <a href="login.php" class="button ">Login</a>


            <div class="banner-caption text-center">
                <h2>Welcome to our website</h2>
                <h1>Bangladesh University Of Professionals(BUP)</h1>

                <form action="showInfo.php" method="POST" class="table">
                    <table class="text-center">

                        <tr>

                            <td class="text-center"> <label for="">Student information Portal</label></td>

                        </tr>


                        <tr>

                            <label for="">
                                <td><label for="">Choose Class:</label></td>
                            </label>
                            <td>
                                <select name="class" required>
                                    <option value="">Choose Batch</option>
                                    <option value="BICT-2020">BICT-2020</option>
                                    <option value="BICT-2019">BICT-2019</option>
                                    <option value="BICT-2018">BICT-2018</option>
                                    <option value="BICT-2017">BICT-2017</option>
                                    <option value="BICT-2016">BICT-2016</option>
                                    <option value="BICT-2015">BICT-2015</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="">Roll No :</label></td>
                            <td><input type="text" placeholder="Roll must be 8 digits" required name="roll" pattern="[0-9]{}"></td>

                        </tr>
                        <tr>

                            <td><input type="submit" value="Show info" name="show" class="button">
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>

    <div class="about text-center">
        <div class="fixed-with">
            <h2>Aobut Us</h2>
            <p>BUP is a unique public university run by the armed forces with upholding the motto "EXCELLENCE THROUGH KNOWLEDGE". The youngest university is confident in furthering the knowledge in the field of national security, technology and modern science to achieve the desired human resources development of the country..</p>
        </div>
    </div>




    <div class="footer clearfix">
        <div class="fixed-with">
            <div class="footer-left">
                <p class="text-center">All Right Reserved &copy; BUP 2018- <?= date('Y')   ?>
                </p>

            </div>
            <div class="footer-right">
                <ul class="social-menu">
                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                </ul>
            </div>
        </div>
    </div>

</body>

</html>
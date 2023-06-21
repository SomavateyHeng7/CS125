<?php

// PHP process
// Open Database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "schoolmanagement";

// open connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}else{

    //echo "Connected successfully";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://kit.fontawesome.com/0e1ed34929.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <title>MAMA University</title>
    <link rel="stylesheet" href="styleacademic.css">

</head>
    <section class="sub-header">
        <nav>
        <a href="index.html"><img src="images/Mama1.png"></a>
            <div class="nav-links">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="academic.php">Academic</a></li>
                    <li><a href="admission.php">Admission</a></li>
                    <li><a href="enrollment.html">Enrollment</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="registration.html">Registration</a></li>
                </ul>
            </div>
            </nav>
            <div class="text_box">
                <h1>ACADEMIC</h1>
           </div>
            </section>
            <marquee behavior="scroll" direction="right" style="font-family:'Poppins';">For More Information Please Visit Us @MAMA_University</marquee>
    <!--Information-->
  
  <!--Bachelor-->
    <section class="bachelor"><br>
        <h1>Bachelor Degree</h1>

            <div class="row"> <!-- ROW -->
                <?php
                    // Build query 
                    $sql = "SELECT
                    tbl_academic_category.cate_fac_name,
                    tbl_academic.fac_description,
                    tbl_academic.fac_name,
                    tbl_academic.fac_id,
                    tbl_academic_category.cate_fac_id
                    FROM
                    tbl_academic_category
                    INNER JOIN tbl_academic ON tbl_academic_category.cate_fac_id = tbl_academic.fac_category
                    
                    WHERE cate_fac_id = 1;
                    ";

                    // Execute query
                    $result = $conn->query($sql);

                    // Get Record
                    while($row = mysqli_fetch_assoc($result))   {
                    
                        // Start Loop 

                ?>

                <!-- Col -->
                <div class="faculty-col"> 
                    <h3><?php  echo $row["fac_name"] ?></h3>
                        <p><?php  echo $row["fac_description"] ?></p>
                </div>
                <!-- /Col -->
               
                <?php
                    
                    } //end While
                      //end loop
                
                ?>


            </div><!-- /ROW -->

   </section>
    <!-- /Bachelor-->

    <!-- Master -->

    
    <section class="master">
        <h1>Master Degree</h1>
        <div class="row"> <!-- ROW -->
        <?php
                    // Build query 
                    $sql = "SELECT
                    tbl_academic_category.cate_fac_name,
                    tbl_academic.fac_description,
                    tbl_academic.fac_name,
                    tbl_academic.fac_id,
                    tbl_academic_category.cate_fac_id
                    FROM
                    tbl_academic_category
                    INNER JOIN tbl_academic ON tbl_academic_category.cate_fac_id = tbl_academic.fac_category
                    
                    WHERE cate_fac_id = 2;
                    ";

                    // Execute query
                    $result = $conn->query($sql);

                    // Get Record
                    while($row = mysqli_fetch_assoc($result))   {
                    
                        // Start Loop 

                ?>  

        <!-- Col -->
            <div class="master-col">
                <h3><?php echo $row["fac_name"] ?></h3>
                    <p><?php echo $row["fac_description"] ?></p>
            </div>
        <!-- Col -->
        <?php
                    
                } //end While
                  //end loop
            
            ?>

        </div><!-- /ROW -->
    </section>
    <!-- Master -->


    <!--Academic Calender-->
    <section class="calender">
                <h1>Academic Calender</h1><br>
                <a href="calender.pdf"class="hero-btn">Academic Year 2022-2023</a><br><br>
    </section>
    <!--Student Handbook-->
    <section class="handbook">
                <h1>Student Handbook</h1><br>
                <a href="handbook.pdf"class="hero-btn">Handbook AY 2022-2023</a><br><br>
    </section>

<!-- Footer section -->
<section class="footer_bro" style="color:white"><br>
    <h3>Our Social Media</h3><br>
    <a>For any more information, please kindly visit our social media page.</p>
    <div class="icons">
        <i class="fab fa-facebook-f"></i>
        <i class="fa fa-instagram"></i>
        <i class="fa fa-twitter"></i>
    </div><br>
        <p>Made with <i class="fa fa-heart-o"></i></i> By Bunseng Tang<br> <i class="fab fa-facebook-f"> Bun Seng</i> <i class="fa fa-instagram">bunseng.t</i> </p><br>
        <div class="footline">
            <div id="powered">@copyright 2020 MAMA university, All Rights Reserved.</div>
        </div>
    </section>
</body>
</html>
<?php
// close Database ...
$conn->close();


?>
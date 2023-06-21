<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "schoolmanagement";

    $bachelor_title;
    $bachelor_desc;

    $master_title;
    $master_desc;

    $international_title;
    $international_desc;

    $opportunity_title;
    $opportunity_desc1;
    $opportunity_desc2;
    $opportunity_desc3;
    $opportunity_desc4;
    $opportunity_desc5;

    $primary_title;
    $primary_desc;

    $tuition_col1;
    $tuition_col2;

    $fee_title;
    $fee_desc;

    $semester_col1;
    $semester_col2;
    $semester_col3;
    $semester_col4;
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "SELECT title, desc1, desc2, desc3, desc4,desc5 FROM admission";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
    $i = 0;
    while($row = $result->fetch_assoc()) {
        if($i == 0) {
            $bachelor_title = $row['title'];
            $bachelor_desc = $row['desc1'] . $row['desc2'] . $row['desc3'] .$row['desc4'];
        }
        if($i == 1) {
            $master_title = $row['title'];
            $master_desc = $row['desc1'] . $row['desc2'] . $row['desc3'] .$row['desc4'];
        }
        if($i == 2) {
            $international_title = $row['title'];
            $international_desc = $row['desc1'] . $row['desc2'] . $row['desc3'] .$row['desc4'];
        }
        if($i == 3) {
            $opportunity_title = $row['title'];
            $opportunity_desc1 = $row['desc1'];
            $opportunity_desc2 = $row['desc2'];
            $opportunity_desc3 = $row['desc3'];
            $opportunity_desc4 = $row['desc4'];
            $opportunity_desc5 = $row['desc5'];
        }
        if($i == 4) {
            $primary_title = $row['title'];
            $primary_desc = $row['desc1'] . $row['desc2'] . $row['desc3'] .$row['desc4'];
        }
        if($i == 5) {
            $tuition_col1 = $row['desc1'];
            $tuition_col2 = $row['desc2'];
        }
        if($i == 6) {
            $fee_title = $row['title'];
            $fee_desc = $row['desc1'] . $row['desc2'] . $row['desc3'] .$row['desc4'];
        }
        if($i == 7) {
            $semester_col1 = $row['desc1'];
            $semester_col2 = $row['desc2'];
            $semester_col3 = $row['desc3'];
            $semester_col4 = $row['desc4'];
        }
        $i++;
    }
    } else {
    echo "0 results";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://kit.fontawesome.com/0e1ed34929.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <title>MAMA University</title>
    <link rel="stylesheet" href="styleadmission.css">
</head>
<body>
    <section class="header">
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
        <div class="text-box">
            <h1>ADMISSION</h1>
        </div>
    </section>
    <marquee behavior="scroll" direction="right" style="font-family:'Poppins';">For More Information Please Visit Us @MAMA_University</marquee>
    <section class="admission">
        <div class="container">
            <div class="grid-2">
                <?php 
                    echo    "<div class='box'>
                                <h1>". $bachelor_title ."</h1>
                                <p>". $bachelor_desc ."</p>
                            </div>";
                    echo    "<div class='box'>
                                <h1>". $master_title ."</h1>
                                <p>". $master_desc ."</p>
                            </div>";
                ?>
            </div>
            <div>
                <?php 
                    echo    "<div class='box'>
                                <h1>". $international_title ."</h1>
                                <p>". $international_desc ."</p>
                            </div>";
                ?>
            </div>
            <div class="international-list">
                <?php 
                    echo "<p>". $opportunity_title ."</p>
                        <ul>
                            <li>". $opportunity_desc1 ."</li>
                            <li>". $opportunity_desc2 ."</li>
                            <li>". $opportunity_desc3 ."</li>
                            <li>". $opportunity_desc4 ."</li>
                            <li>". $opportunity_desc5 ."</li>
                        </ul>";
                ?>
            </div>
            <div class="box">
                <?php 
                        echo    "<h1>". $primary_title ."</h1>
                                <p>". $primary_desc ."</p>";
                    ?>
            </div>
            <div class="center">
                <div class="table-2">
                    <?php 
                        echo $tuition_col1;
                        echo $tuition_col2;
                    ?>
                </div>
            </div>
            <div class="box">
                <?php 
                        echo    "<h1>". $fee_title ."</h1>
                                <p>". $fee_desc ."</p>";
                    ?>
            </div>
            <p style="margin-top: 2rem">If you have any questions about our admission process or criteria, please email us at <span>admission@mamaedu.kh</span>, or text, call, and Telegram us via +855 69 900 885.</p>
            <div class="center">
                <div class="table-5">
                    <div>
                        <div class="cell">Year</div>
                        <div class="cell">Semester 1</div>
                        <div class="cell">Semester 2</div>
                    </div>
                    <div>
                        <div class="cell">1</div>
                        <div class="cell">$7,500</div>
                        <div class="cell">$7,500</div>
                    </div>
                    <div>
                        <div class="cell">2</div>
                        <div class="cell">$10,000</div>
                        <div class="cell">$10,000</div>
                    </div>
                    <div>
                        <div class="cell">3</div>
                        <div class="cell">$12,500</div>
                        <div class="cell">$12,500</div>
                    </div>
                    <div>
                        <div class="cell">4</div>
                        <div class="cell">$15,000</div>
                        <div class="cell">$15,000</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="fees">
        <div class="fee1">
            <h1> Other fees</h1>
            <h2> Application fees </h2>
            <p> All applicants pay a one-time, non-refundable application fee of USD 50.</p>
            <h2> Course Materials </h2>
            <p> Books are various by courses, students are able to purchase books from finance office. Some instructors may assign copyright material for class use. If such material is under a single-user-use copyright limitation, students registered in the class will be charged for the cost to download the materials. This fee will be charged at the time of registration. Faculty should note all such fees in the course syllabus and students will be notified of the fee by the Office of the Registrar.
            </p>
            <h2> Download fees </h2>
            <p> Some instructors may assign copyright material for class use. If such material is under a single- user-use copyright limitation, students registered in the class will be charged for the cost to download the materials. This fee will be charged at the time of registration. Faculty should note all such fees in the course syllabus and students will be notified of the fee by the Office of the Registrar. </p>
            <h2> Graduation fees </h2>
            <p> A fee will be charged to each student scheduled to graduate. This fee must be paid prior to participation in Commencement and prior to the release of the final transcript and/or diploma.
            </p>
            <h2> Transcript Fee </h2>
            <p> Official transcripts (stamped and sealed by the Registrar) may be obtained by a student for USD 10 for each copy. Official transcripts that are mailed internationally cost USD 75 each. Students should be aware that some institutions do not accept hand-carried transcripts as official, and will only accept transcripts that have been certified and delivered by the Registrar.
            </p>
            <h2> Certified Diploma Copies </h2>
            <p> A photocopy of a diploma copy can be issued upon request. The fee for this service is USD 5. This copy will be authenticated and certified by the Registrar. MAMA does not retain copies of diplomas, and therefore, the original diploma or a clear photocopy must be presented to the Registrar for authentication.
            </p>
            <h2>Diploma Duplicates </h2>
            <p> Duplicate MAMA diplomas can be produced upon request for a fee of USD 10 for each duplicate. Such duplicates will be marked as ‘COPY’.
            </p>
            <h2> Parking fees</h2>
            <p> Parking on Campus:
                <ul>
                    <li>Parking outside the campus gate is free.</li>
                    <li>Motorbike: $10 per month or 32$ per semester</li>
                    <li>Parking around the building: $20 per month or $64 per semester</li>
                    <li>Basement Fee: $50 per month or $160 per semester.</li>
                </ul>
                *All students are required to apply for a Parking Permit if you want to park a motorcycle or automobile on campus.
            </p>
            <h2>Tuition refund policy</h2>
                <ul>
                    <li>Students who withdraw from all classes before the first day of instruction in a semester will be eligible for a refund of 100% of tuition paid.</li>
                    <li>Students who withdraw from all classes during the first two weeks of instruction will be eligible for a refund of 80% of tuition paid.</li>
                    <li>Students who withdraw from all classes after the first two weeks of instruction and before the end of the fourth week of instruction will be eligible for a refund of 40%.</li>
                    <li>Students who withdraw from all classes after the end of the fourth week of instruction will be not eligible for a refund.
                    </li>
                </ul>
                <p> In order to be eligible for a refund, the student must notify the Registrar in writing of the intent to withdraw from all classes.  The date that the Registrar receives and stamps the notification is the date that will be used in determining the amount of refund due to the student.
            </p>
        </div>
    </section>
<!-----Footer----->
    <section class="footer_bro" style="color:white"><br>
        <h3>Our Social Media</h3><br>
        <p>For any more information, please kindly visit our social media page.</p>
        <div class="icons">
            <i class="fab fa-facebook-f"></i>
            <i class="fa fa-instagram"></i>
            <i class="fa fa-twitter"></i>
        </div><br>
        <a>Made with <i class="fa fa-heart-o"></i></i> By Somavatey Heng<br> <i class="fab fa-facebook-f"> Somavatey Heng</i> <i class="fa fa-instagram">teyyyy_07_</i><br>
        <div class="footline">
            <div id="powered">@copyright 2020 MAMA university, All Rights Reserved.</div>
        </div>
    </section>  
</body>
</html>
<?php
    $conn->close();
?>

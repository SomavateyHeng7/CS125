<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us-MAMA University</title>
    <script src="https://kit.fontawesome.com/0e1ed34929.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="stylecontact.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,700;1,800&display=swap">
</head>

<body>
    <div class="header-container">
        <nav>
        <a href="index.html"><img src="images/Mama1.png"></a>
            <div class="nav-contact-links">
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
            <div class="text-contactus">
                <h1>CONTACT US</h1>

            </div>

        </nav>
    </div>
    <marquee behavior="scroll" direction="right" style="font-family:'Poppins';">For More Information Please Visit Us @MAMA_University</marquee>
    <div class="form-info page-wrapper">
        <div class="form-leftside">
            <h1>Reach out to us!</h1>
            <p>Our friendly team would love to hear from you!</p>
            <form action="contact_process.php" method="POST">

                <label for="fname">First Name</label>
                <input type="text" id="fname" name="firstname" placeholder="Your name..">

                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="lastname" placeholder="Your last name..">

                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Your email..">

                <label for="phnumber">Phone number</label>
                <input type="number" id="phnumber" name="phnumber" placeholder="Your Phone number..">

                <label for="Message">Message</label>
                <textarea id="Message" name="Message" placeholder="Write something.." style="height:200px"></textarea>
                
                <input name="submit" type="submit" value="submit">
                
            </form>


        </div>
        <div class="info-rightside">
            <h1>Campus location</h1>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3908.57341942695!2d104.89579291591848!3d11.582407946963484!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3109517bf7757d23%3A0x965c34888684bf1!2sParagon%20International%20University!5e0!3m2!1sen!2skh!4v1661446294747!5m2!1sen!2skh" width="630" height="680" style="border:0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>
    </div>

    <div class="info-container page-wrapper">
        <h1>Campus information</h1>
        <p>No. 8, St. 315, Boeng Kak 1, Tuol Kork, Phnom Penh, Cambodia</p>
        <p>+855 16 701 670</p>
        <h1>President Office</h1>
        <p><i class="fa-solid fa-envelope"></i> president@mamauniversity.edu.kh</p>
        <h1>Vice President Of Academic and Student Affairs</h1>
        <p><i class="fa-solid fa-envelope"></i> academic.affair@mamauniversity.edu.kh</p>
        <h1>Registrar</h1>
        <p><i class="fa-solid fa-envelope"></i> registrar@mamauniversity.edu.kh</p>
        <h1>Admissions</h1>
        <p><i class="fa-solid fa-envelope"></i> admission@mamauniversity.edu.kh</p>
        <h1>Front Desk</h1>
        <p><i class="fa-solid fa-envelope"></i> info@mamauniversity.edu.kh</p>
    </div>

    <div class="footer" style="color:white"><br>
        <h3>Our Social Media</h3><br>
        <p>For any more information, please kindly visit our social media page.</p>
        <div class="icons">
            <i class="fab fa-facebook-f"></i>
            <i class="fa fa-instagram"></i>
            <i class="fa fa-twitter"></i>
        </div><br>
        <p>Made with <i class="fa fa-heart-o"></i></i> By Sokleng Ly<br> <i class="fab fa-facebook-f"> Soklengg</i> <i class="fa fa-instagram">Sokleng.24</i> </p><br>
        <div class="footline">
            <div id="powered">@copyright 2022 MAMA university, All Rights Reserved.</div>
        </div>
    </div>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Website
    </title>
    <link rel="stylesheet" href="./css/style.css">
    <!-- ICONSCOUT CDN -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- Google fonts --><link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<script src="main.js"></script>
</head>


<body>
    <nav class="nav li">
        <div class="container nav__container">
            <a href="index.html"><h4>Zahid</h4></a>
            <ul class="nav__menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="doctors.php
                /">Our Doctors</a></li>
                <li><a href="health.php">Health Tips</a></li>
                <li><a href="contact.php">Contact Us</a></li>

            </ul>
                <button id="open-menu-btn"><i class="uil uil-bars"></i></button>
                <button id="close-menu-btn"><i class="uil uil-multiply"></i></button>

            </div>

    </nav>
    <!-- ==================================End of navbar ===================================--->

    <header>
        <div class="container header__container">
        <div class="header__left">
            <h1>Stay healthy and keep your mind fresh</h1>
            <p>The best way to stay healthy is to eat healthy food , do regular exercise
                and to keep your mind fresh by staying near to nature.Here we wil guide you to to your ultimate healthy self.
            </p>
            <a href="health.php" class="btn btn-primary">Stay Healthy?</a>
        </div>
        <div class="header__right-image"><img src="./images/bike.svg">
        </div>
        </div>
        </div>
    </header>
    <!-- ======================The end of header =============================-->

    <section class="categories">
        <div class="container categories__container">
            <div class="categories left">
                <h1>Categories</h1>
                <p>surf through your categories<br><br></p>
                <a href="health.php" class="btn">Learn More</a>
            </div>

            <div class="categories__right">
                <article class="category">
                    <span class="category__icon">
                        <i class="uil uil-pizza-slice"></i>
                    </span>
                    <h5>Diet</h5>
                    <p>Healthy diet is the utter need of your body</p>
                </article>

                <article class="category">
                    <span class="category__icon">
                        <i class="uil uil-heartbeat"></i>
                    </span>
                    <h5>Exercise</h5>
                    <p>Good workout and running is a good way to keep your body in shape</p>
                    </article>


                <article class="category">
                    <span class="category__icon">
                        <i class="uil uil-clock"></i>
                    </span>
                    <h5>Routine</h5>
                    <p>Sleep early and wake early to stay healthy</p>
                </article>


                <article class="category">
                    <span class="category__icon">
                        <i class="uil uil-brain"></i>
                    </span>
                    <h5>Mind</h5>
                    <p>Keep your mind fresh and stress free</p>
                </article>


                <article class="category">
                    <span class="category__icon">
                        <i class="uil uil-capsule"></i>
                    </span>
                    <h5>Medical</h5>
                    <p>When and what and why you need a doctor</p>
                </article>



                <article class="category">
                    <span class="category__icon">
                        <i class="uil uil-social-distancing"></i>
                    </span>
                    <h5>Social</h5>
                    <p>Keep your self involve in society</p>
                </article>



            </div>
        </div>
    </section>

 <!-- ==========================End of categories================= -->


 <!-- ==========================Our best Doctors================== -->

    <section class="courses">
        <h2>Our Best Doctors</h2>
        <div class="container courses__container">
                       <article class="course">
                <div class="course__image">

                    <img src="./images/doctor1.jpg" alt="">
                </div>
               <div class="course__info">
                <h4>Doctor Damond</h4>
                <p>if you have Simple Medical problems consult with our Medical specialist</p>
                <a href="doctorvisit.php" class="btn btn-primary">Visit Doctor</a>
               </div>
            </article>




            <article class="course">
                <div class="course__image">

                    <img src="./images/doctor2.jpg" alt="">
                </div>
               <div class="course__info">
                <h4>Doctor Elena</h4>
                <p>if you have heart problems consult with our Cardiologist</p>
                <a href="doctorvisit.php" class="btn btn-primary">Visit Doctor</a>
               </div>
            </article>

            <article class="course">
                <div class="course__image">

                    <img src="./images/1Capture.PNG" alt="">
                </div>
               <div class="course__info">
                <h4>Doctor Stephen</h4>
                <p>if you have Brain problems consult with our Neurologist specialist</p>
                <a href="doctorvisit.php" class="btn btn-primary">Visit Doctor</a>
               </div>
            </article>

        </div>
       </section>
<!-- =============================end of our best doctors=============  -->
       









<!-- ======================footer====================================== -->


 <footer class="footer">
        <div class="container footer__container">
            <div class="footer__1">
            <a href="index.php" class="footer__logo"><h4>ZAHID</h4></a>
            <p>We hope you the Healthiness<br>We hope you fitness<br>We hope you happiness</p>
        </div>


    <div class="footer__2">
        <h4>Permalinks</h4>
        <ul class="permalinks">
            <li><a href="index.php">Home</a></li>
            <li><a href="doctors.php">Our Docters</a></li>
            <li><a href="health.php">Health Tips</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </div>

        <div class="footer__3">
            <h4>Privacy</h4>
            <ul class="privacy">
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms and condition</a></li>
                <li><a href="#">our aim</a></li>
            </ul>
        </div>
        <div class="footer__4">
            <h4>Contact Us</h4>
        <div>
        <p>+923178317427</p>
        <p>myselene000@gmail.com</p>
        </div>
    </div>
    </div>
</footer>

<!-- =============================--end of footer=============== -->









</body>
</html>
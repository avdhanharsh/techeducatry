<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechEduca</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <div class="nav">
            <div class="nav-logo">
                <h2>Tech <span>Educa</span></h2>
            </div>
            <div class="nav-items">
                <li><a href="#homeid">Home</a></li>
                <li><a href="#aboutus">About Us</a></li>
                <li><a href="#feedback">Feedback</a></li>
                <li><a href="#teacherpage">Teachers</a></li>
                <li><a href="#">Contact</a></li>
            </div>
            <div class="nav-but">
                <!-- <button onclick="popup('register-popup')">SignUP</button> -->
                <!-- <button onclick="popup('login-popup')">LoginUp</button> -->
                <button id="theme-toggle" class="theme-toggle">Toggle Theme</button>
                <!-- <i class="ri-menu-3-line"></i> -->
            </div>
        </div>

        <!-- home section  -->
        <div class="home" id="homeid">
            <div class="home-left">
                <img src="images/harsh.png" alt="">
            </div>
            <div class="home-right">
                <h1>Inspiration , Innovation and Discovery.</h1>
                <p>Any Successfull Career starts with good education.Together with us you will have direct knowledge of
                    the subjects that will be especially useful for you when climbing the carrer ladder</p>
                <button>Explore More</button>
            </div>
        </div>

        <!-- about section  -->
        <div class="about" id="aboutus">
            <div class="about-left">
                <img src="images/ab1.jpeg" alt="">
            </div>
            <div class="about-right">
                <h3>Welcome to TechEduca , Enhance your skills with best online courses</h3>
                <p>you can start and finish one of these popular courses in under a day - for free! check out the list
                    below.. Take the course for free</p>
                <div class="about-rightinfo">
                    <img src="images/ab2.jpeg" alt="" height="20%">
                    <div class="about-rightinforight">
                        <h4>400+ courses</h4>
                        <p>you can start and finish one of these popular courses in under our site</p>
                    </div>
                </div><br>
                <div class="about-rightinfo">
                    <img src="images/ab3.jpg" alt="">
                    <div class="about-rightinforight">
                        <h4>400+ courses</h4>
                        <p>you can start and finish one of these popular courses in under our site</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- features section  -->
        <div class="features">
            <h2>Awesome Features</h2>
            <p>We offer a range of awesome features that enhance the learning experience and make it more engaging and
                interactive</p>
            <div class="allfeature">
                <div class="featureinfo">
                    <i class="fas fa-award"></i>
                    <h3>Scholarship Facility</h3>
                    <p>One make creepath man bearing their firmanent won't great heaven</p>
                </div>

                <div class="featureinfo">
                    <i class="fas fa-award"></i>
                    <h3>Dell online Courses</h3>
                    <p>One make creepath man bearing their firmanent won't great heaven</p>
                </div>

                <div class="featureinfo">
                    <i class="fas fa-award"></i>
                    <h3>Global certification</h3>
                    <p>One make creepath man bearing their firmanent won't great heaven</p>
                </div>
            </div>
        </div><br>

        <!-- courese  -->
<!-- 
        <div id="course-head">
            <h2>Popular Courses</h2>
            
        </div>
        <div class="courses">
            
            <div class="course-cards">
                <div class="course-img">
                    <img src="images/c1.jpg" alt="">
                </div>
                <div class="course-body">
                    <h4>HTML COURSE</h4>
                    <p>HTML full course from scartch.</p>
                </div>
                <div class="course-footer">
                    <h4>Price : &#8377; 4000</h4>
                    <a href="#">Enroll</a>
                </div>
            </div>

            <div class="course-cards">
                <div class="course-img">
                    <img src="images/c1.jpg" alt="">
                </div>
                <div class="course-body">
                    <h4>HTML COURSE</h4>
                    <p>HTML full course from scartch.</p>
                </div>
                <div class="course-footer">
                    <h4>Price : &#8377; 4000</h4>
                    <a href="#">Enroll</a>
                </div>
            </div>

            <div class="course-cards">
                <div class="course-img">
                    <img src="images/c1.jpg" alt="">
                </div>
                <div class="course-body">
                    <h4>HTML COURSE</h4>
                    <p>HTML full course from scartch.</p>
                </div>
                <div class="course-footer">
                    <h4>Price : &#8377; 4000</h4>
                    <a href="#">Enroll</a>
                </div>
            </div>

            <div class="course-cards">
                <div class="course-img">
                    <img src="images/c1.jpg" alt="">
                </div>
                <div class="course-body">
                    <h4>HTML COURSE</h4>
                    <p>HTML full course from scartch.</p>
                </div>
                <div class="course-footer">
                    <h4>Price : &#8377; 4000</h4>
                    <a href="#">Enroll</a>
                </div>
            </div>

            <div class="course-cards">
                <div class="course-img">
                    <img src="images/c1.jpg" alt="">
                </div>
                <div class="course-body">
                    <h4>HTML COURSE</h4>
                    <p>HTML full course from scartch.</p>
                </div>
                <div class="course-footer">
                    <h4>Price : &#8377; 4000</h4>
                    <a href="#">Enroll</a>
                </div>
            </div>

        </div> -->

        <!-- Teachers   -->
        <div class="experts" id="teacherpage">
            <h2>Community Experts</h2>
        <div class="expertinfo">
            <div class="expert-card">
                <img src="images/g1.jpg" alt="">
                <h3>Dr. Ashma Aggarwal</h3>
                <p>Advance java</p>
                <div class="socialicon">
                    <i class="ri-facebook-fill"></i>
                    <i class="ri-instagram-fill"></i>
                    <i class="ri-whatsapp-fill"></i>
                    <i class="ri-linkedin-fill"></i>
                </div>
            </div>

            <div class="expert-card">
                <img src="images/g2.jpg" alt="">
                <h3>Mr. Marazban Kotwal</h3>
                <p>Data Structure</p>
                <div class="socialicon">
                    <i class="ri-facebook-fill"></i>
                    <i class="ri-instagram-fill"></i>
                    <i class="ri-whatsapp-fill"></i>
                    <i class="ri-linkedin-fill"></i>
                </div>
            </div>

            <div class="expert-card">
                <img src="images/g3.jpg" alt="">
                <h3>Dr. Prasita Mukherjee</h3>
                <p>Python</p>
                <div class="socialicon">
                    <i class="ri-facebook-fill"></i>
                    <i class="ri-instagram-fill"></i>
                    <i class="ri-whatsapp-fill"></i>
                    <i class="ri-linkedin-fill"></i>
                </div>
            </div>

            <div class="expert-card">
                <img src="images/g4.jpg" alt="">
                <h3>Mr. Kevin D'Cruz</h3>
                <p>DBMS</p>
                <div class="socialicon">
                    <i class="ri-facebook-fill"></i>
                    <i class="ri-instagram-fill"></i>
                    <i class="ri-whatsapp-fill"></i>
                    <i class="ri-linkedin-fill"></i>
                </div>
            </div>

            <div class="expert-card">
                <img src="images/g5.jpg" alt="">
                <h3>Mr. Piyush Bansal</h3>
                <p>IOT</p>
                <div class="socialicon">
                    <i class="ri-facebook-fill"></i>
                    <i class="ri-instagram-fill"></i>
                    <i class="ri-whatsapp-fill"></i>
                    <i class="ri-linkedin-fill"></i>
                </div>
            </div>

            <div class="expert-card">
                <img src="images/g6.jpg" alt="">
                <h3>Dr. Ashma Aggarwal</h3>
                <p>Advance java</p>
                <div class="socialicon">
                    <i class="ri-facebook-fill"></i>
                    <i class="ri-instagram-fill"></i>
                    <i class="ri-whatsapp-fill"></i>
                    <i class="ri-linkedin-fill"></i>
                </div>
            </div>
        </div>
        </div>

        <!-- reviews  -->
        <div class="review" id="feedback">
            <h2>Students Review</h2>
            <p>What are Students say about TechEduca</p>
            <div class="review-info">
                <div class="review-card">
                    <div class="profile">
                        <img src="images/review1.jpg" alt="">
                    
                    <div class="profile-info">
                        <h3>Harsh Avadhan</h3>
                        <div class="review-star">
                            <i class="ri-star-fill checked"></i>
                            <i class="ri-star-fill checked"></i>
                            <i class="ri-star-fill checked"></i>
                            <i class="ri-star-fill checked"></i>
                            <i class="ri-star-fill "></i>
                        </div>
                    </div>
                    </div>
                    <div class="profile-descrp">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident odit rem id hic aliquam dignissimos laboriosam perferendis. Minima sint consequuntur excepturi beatae, modi aliquid impedit similique fugit delectus explicabo corrupti.</p>
                    </div>
                </div>

                <div class="review-card">
                    <div class="profile">
                        <img src="images/review2.jpg" alt="">
                    
                    <div class="profile-info">
                        <h3>Rohan Chavan</h3>
                        <div class="review-star">
                            <i class="ri-star-fill checked"></i>
                            <i class="ri-star-fill checked"></i>
                            <i class="ri-star-fill checked"></i>
                            <i class="ri-star-fill checked"></i>
                            <i class="ri-star-fill "></i>
                        </div>
                    </div>
                    </div>
                    <div class="profile-descrp">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident odit rem id hic aliquam dignissimos laboriosam perferendis. Minima sint consequuntur excepturi beatae, modi aliquid impedit similique fugit delectus explicabo corrupti.</p>
                    </div>
                </div>

                <div class="review-card">
                    <div class="profile">
                        <img src="images/review3.jpg" alt="">
                    
                    <div class="profile-info">
                        <h3>Ankita Shinde</h3>
                        <div class="review-star">
                            <i class="ri-star-fill checked"></i>
                            <i class="ri-star-fill checked"></i>
                            <i class="ri-star-fill checked"></i>
                            <i class="ri-star-fill checked"></i>
                            <i class="ri-star-fill "></i>
                        </div>
                    </div>
                    </div>
                    <div class="profile-descrp">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident odit rem id hic aliquam dignissimos laboriosam perferendis. Minima sint consequuntur excepturi beatae, modi aliquid impedit similique fugit delectus explicabo corrupti.</p>
                    </div>
                </div>

                <div class="review-card">
                    <div class="profile">
                        <img src="images/review3.jpg" alt="">
                    
                    <div class="profile-info">
                        <h3>Ankita Shinde</h3>
                        <div class="review-star">
                            <i class="ri-star-fill checked"></i>
                            <i class="ri-star-fill checked"></i>
                            <i class="ri-star-fill checked"></i>
                            <i class="ri-star-fill checked"></i>
                            <i class="ri-star-fill "></i>
                        </div>
                    </div>
                    </div>
                    <div class="profile-descrp">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident odit rem id hic aliquam dignissimos laboriosam perferendis. Minima sint consequuntur excepturi beatae, modi aliquid impedit similique fugit delectus explicabo corrupti.</p>
                    </div>
                </div>

                <div class="more-review">
                    <a href="reviewdisplay.php"><i class="ri-arrow-right-double-fill"></i></a>
                </div>
            </div>
            <div class="add-review">
                <a href="#" onclick="popup('review-popup')">Add Review</a>
            </div>
        </div>

        <!-- contact  -->
        <div class="contact">
            <h2 class="first">Quick Contact</h2>            
            <div class="contact-info">
                <div class="contact-left">
                    <img src="images/contact.png" alt="">
                </div>
                <div class="contact-right">
                <form action="submit_form.php" method="post">
                    <input type="text" name="name" placeholder="name" required><br>
                    <input type="email" name="email" placeholder="email" required><br>
                    <textarea name="message" cols="30" rows="8" placeholder="message"></textarea><br>
                    <button class="contact-but">Submit</button>
                </form>

                </div>
            </div>
            <div class="contact-details">
                <div class="contact-card">
                    <div class="card-left">
                        <i class="ri-map-pin-fill"></i>
                    </div>
                    <div class="card-right">
                        <h2>Address</h2>
                        <p>1st flr., Sai Infotech Bldg., Patel Chowk,
                            Opp. Rly. Stn. Ghatkopar E, Mumbai
                            Ghatkopar East, Mumbai, India - 400075</p>
                    </div>
                </div>

                <div class="contact-card">
                    <div class="card-left">
                        <i class="ri-phone-fill"></i>
                    </div>
                    <div class="card-right">
                        <h2>Phone</h2>
                        <p >8976854221 - <b>Rohan Chavan</b></p>
                        <p>7418529634 - <b>Harsh Avadhan</b></p>
                    </div>
                </div>

                <div class="contact-card">
                    <div class="card-left">
                        <i class="ri-mail-open-fill"></i>
                    </div>
                    <div class="card-right">
                        <h2>Email</h2>
                        <p>rohanchavan@gmail.com</p>
                        <p>avdhanharsh@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>


        <div class="popup-container" id="login-popup">
            <div class="popup">
              <form method="POST" action="login_register.php">
                <h2>
                  <span>USER LOGIN</span>
                  <button type="reset" onclick="popup('login-popup')">X</button>
                </h2>
                <input type="text" placeholder="E-mail or Username" name="email_username">
                <input type="password" placeholder="Password" name="password">
                <button type="submit" class="login-btn" name="login">LOGIN</button>
              </form>
            </div>
          </div>
        </div>
        
        
            <div class="popup-container" id="register-popup">
              <div class="register popup">
                <form method="POST" action="login_register.php">
                  <h2>
                    <span>USER REGISTER</span>
                    <button type="reset" onclick="popup('register-popup')">X</button>
                  </h2>
                  <input type="text" placeholder="Full Name" name="full_name">
                  <input type="text" placeholder="Username" name="username">
                  <input type="email" placeholder="E-mail" name="email">
                  <input type="password" placeholder="Password" name="password">
                  <button type="submit" class="register-btn" name="register">REGISTER</button>
                </form>
              </div>
            </div>

            <div class="popup-container" id="review-popup">
                <div class="Review popup" style="width: 400px;">
                    <form action="addreview.php" method="post">
                        <h2>
                            <span>Add Review</span>
                            <button type="reset" onclick="popup('review-popup')">X</button>
                        </h2>
                        <input type="text" placeholder="name" name="name"><br><br>
                        <input type="email" name="email" placeholder="email" required><br><br>
    
                        <textarea name="review" cols="30" rows="30" placeholder="Review" class="rtxt"></textarea><br><br>
                        <button class="contact-but">Submit</button>
                    </form>
                </div>
            </div>
    
            <script>
                function popup(popup_name)
                {
                  get_popup=document.getElementById(popup_name);
                  if(get_popup.style.display=="flex")
                  {
                    get_popup.style.display="none";
                  }
                  else
                  {
                    get_popup.style.display="flex";
                  }
                }

                const themeToggleBtn = document.getElementById('theme-toggle');
                const body = document.body;

                themeToggleBtn.addEventListener('click', () => {
                        if (body.classList.contains('light-theme')) {
                        body.classList.replace('light-theme', 'dark-theme');
                } else {
                        body.classList.replace('dark-theme', 'light-theme');
                         }
                });

              </script>
    </main>
</body>


</html>
?>
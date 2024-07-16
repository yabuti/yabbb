<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Personal Website</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <style>
    /* Global Styles */
body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  background: linear-gradient(to bottom, #ffffff, #9e9c97);
}

/* CSS for navigation bar */
header {
  background-color: #333;
  color: white;
  padding: 10px 0;
}

nav {
  display: flex;
  align-items: center;
  justify-content: space-between;
}

nav ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  display: flex;
  align-items: center;
}

nav ul li {
  margin-right: 20px;
}

nav ul li a {
  text-decoration: none;
  color: white;
  position: relative;
}

nav ul li a:hover::before {
  content: '';
  display: block;
  position: absolute;
  bottom: -2px;
  left: 0;
  width: 100%;
  height: 2px;
  background-color: white;
}

.login {
  margin-left: auto;
}
.login a {
  color: white;
  font-size: 25px;
}
.menu-icon {
  display: none;
  cursor: pointer;
}

/* CSS for responsive design */
@media screen and (max-width: 991px) {
  nav ul {
    display: none;
    flex-direction: column;
    align-items: center;
    position: absolute;
    top: 60px;
    left: 0;
    background-color: #333;
    width: 100%;
  }

  nav ul li {
    margin-right: 0;
    margin-bottom: 10px;
  }

  .menu-icon {
    display: block;
  }

  .menu-icon i {
    font-size: 24px;
    transform: rotate(0deg);
    transition: transform 0.3s;
  }

  .menu-icon.active i {
    transform: rotate(90deg);
  }
}

/* CSS for responsive design */
@media screen and (max-width: 991px) {
  nav ul {
    display: none;
    flex-direction: column;
    align-items: flex-start;
    position: absolute;
    top: 60px;
    left: 0;
    background-color: #333;
    width: 100%;
  }

  nav ul li {
    margin-right: 0;
    margin-bottom: 10px;
  }

  .menu-icon {
    display: block;
  }

  .menu-icon i {
    font-size: 24px;
    transform: rotate(0deg);
    transition: transform 0.3s;
  }

  .menu-icon.active i {
    transform: rotate(90deg);
  }
}

/* Home Section */
.section {
  padding: 50px 0;
  text-align: center;
}

.content {
  display: flex;
  flex-direction: row;
  justify-content: space-around;
  align-items: center;
}

.text {
  flex: 1;
}

.image {
  flex: 1;
}

.image img {
  max-width: 200px;
  height: auto;
}

.text h1 {
  font-size: 4rem;
}

.text h1 span {
  color:#3f62ad;
}

.text h3 {
  color: #333;
  font-size: 3rem;
}

.text h3 span {
  transition: color 0.5s;
}

.text h3.change span {
  color: red;
}

/* About Section */
.About {
    text-align: center;
    padding: 50px;
}

.About h2 {
    font-size: 36px;
    margin-bottom: 30px;
}

.About h2 span {
    color: #007bff;
}

.About .row {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-direction: row; /* Keep the default order */
}

.About .image {
    width: 45%;
}

.About .image img {
    max-width: 50%;
    height: auto;
    border-radius: 10px;
}

.About .contents {
    width: 45%;
}

.About .contents p {
    font-size: 18px;
    line-height: 1.6;
}
@media screen and (min-width: 768px) {
  .About .row {
    flex-direction: row; /* Change to row on larger screens */
  }

  .About .image {
    width: 45%;
  }

  .About .contents {
    width: 45%;
  }
}
@media screen and (min-width: 500px) {
  .About .row {
    flex-direction: row; /* Change to row on larger screens */
    align-items: center;
  }

  .About .image {
    width: 45%;
  }

  .About .contents {
    width: 45%;
  }
}
/* Service Section */
.services {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 20px;
  margin-top: 50px;
}

.service {
  text-align: center;
  border: 1px solid #ccc;
  border-radius: 5px;
  padding: 30px;
  width: calc(33.33% - 40px);
  background-color: #312f2f;
  color: white;
}

.service:hover {
  background-color: white;
  color: black;
}

.service i {
  font-size: 48px;
  color: #3f62ad;
  transition: transform 0.3s ease-in-out;
}

.service:hover i {
  transform: rotate(360deg);
}

.service h3 {
  margin-top: 10px;
}

.service p {
  font-size: 20px;
  color: #f8f4f4;
}

.service:hover p {
  color: #000;
}

@media screen and (max-width: 768px) {
  .service {
    width: calc(50% - 40px);
  }
}

@media screen and (max-width: 480px) {
  .service {
    width: calc(100% - 40px);
  }
}

/* Skills Section */
.skills {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  grid-gap: 20px;
}

.skill {
  text-align: center;
  margin-bottom: 20px;
}

.skill img {
  width: 100px;
  height: 100px;
  object-fit: cover;
  transition: transform 0.3s;
}

.skill p {
  color: #666;
  text-decoration: underline;
}

.skill:hover img {
  transform: rotate(360deg);
}

/* Contact Form */
.contact-form form {
  display: flex;
  flex-direction: column;
  align-items: center;
  border: 1px solid #b4a8a8;
}

.contact-form label {
  margin-bottom: 5px;
}

.contact-form input[type="text"],
.contact-form input[type="email"],
.contact-form textarea {
  width: 30%;
  padding: 20px;
  margin: 15px 0 15px;
  box-sizing: border-box;
  border: 1px solid #2b2525;
  border-radius: 5px;
  color: black;
  font-size: 28px;background-color: white;
}

.contact-form textarea {
  height: 50px;
}

.contact-form input[type="submit"] {
  width: 5px;
  padding: 10px 50px;
  margin-top: 15px;
  cursor: pointer;
  background-color: #000;
}

footer {
  position: absolute;
  width: 100%;
  background: linear-gradient(to right, #050505, #354066);
  color: #fff;
  padding: 10px 0 10px;
  font-size: 15px;
  line-height: 20px;
}

.roww {
  width: 85%;
  margin: auto;
  display: flex;
  flex-wrap: wrap;
  align-items: flex-start;
  justify-content: space-between;
}

.col {
  flex-basis: 25%;
  padding: 5px;
}

.logo {
  width: 80px;
  padding: 50px;
  margin-bottom: 20px;
}

.col h3 {
  width: fit-content;
  margin-bottom: 40px;
  position: relative;
}

form {
  padding-bottom: 15px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  border-bottom: 1px solid #ccc;
  margin-bottom: 50px;
}

form .far {
  font-size: 18px;
  margin-right: auto;
}

form input {
  width: 100%;
  background: transparent;
  color: #ccc;
  border: 0;
  outline: none;
}

form button {
  background: transparent;
  border: 0;
  outline: none;
  cursor: pointer;
}

form button .fas {
  font-size: 16px;
  color: white;
}

.social-icons .fab {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  text-align: center;
  line-height: 40px;
  font-size: 20px;
  color: #000;
  background-color: #fff;
  margin-right: 15px;
  cursor: pointer;
}

.copyright {
  text-align: center;
}

.underline {
  width: 100%;
  height: 5px;
  background: #767676;
  border-radius: 3px;
  position: absolute;
  top: 25px;
  left: 0px;
  overflow: hidden;
}

.underline span {
  width: 15px;
  height: 100%;
  background: #fff;
  border-radius: 3px;
  position: absolute;
  top: 0;
  left: 10px;
  animation: moving 2s linear infinite;
}

@keyframes moving {
  0% {
      left: -15px;
  }
  100% {
      left: 100%;
  }
}
/* Media Queries */
@media screen and (max-width: 768px) {
  .content {
    flex-direction: column;
  }

  .text, .image {
    width: 100%;
  }

  .image {
    margin-top: 20px;
  }

  .contact-form input[type="text"],
  .contact-form input[type="email"],
  .contact-form textarea {
    width: 50%;
  }

  .contact-form input[type="submit"] {
    width: 20%;
  }
}

@media screen and (max-width: 480px) {


  .contact-form input[type="text"],
  .contact-form input[type="email"],
  .contact-form textarea {
    padding: 10px;
    font-size: 20px;
  }

  .contact-form input[type="submit"] {
    padding: 10px;
    font-size: 20px;
  }
}
  </style>
</head>
<body>

  <header>
    <nav>
      <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#About">About</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#skills">Skills</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
      <div class="login">
        <a href="login.php">Login</a>
      </div>
     
    </nav>
    <div class="menu-icon" id="menu-icon">
    <i class="fas fa-bars"></i>
  </div>
  </header>
  <section id="home" class="section">
    <div class="content">
      <div class="text">
        <h1>Hello,   My Name is <span> Yeabsera Getachew</span></h1>
        <h3 class="change" id="changeText">HI</h3>
       
      </div>
      <div class="image">
        <img src="my.jpg" alt="Home Image">
      </div>
    </div>
  </section>

  <section class="About" id="About">
    <h2><span>ABOUT</span> ME</h2>
    <div class="row">
        <div class="image">
            <img src="my.jpg" alt="">
        </div>
        <div class="contents">
            <p>
              hi, my name is Yeabsera Getachew i an 3rd year computer science student. i am interested in web Development but more 
              interested in app development. i want to be app developer and i hope i will make it.
            </p>
        </div>
    </div>
</section>
  <section id="services" class="section">
    <h2>Services</h2>
    <div class="services">
      <div class="service">
        <i class="fas fa-mobile-alt"></i>
        <h3>App Development</h3>
        <p>I Possess A Comprehensive Skillset And A Passion For Creating Innovative Software Solutions That Address Real-World
           Challenges. My Expertise Encompasses A Wide Range Of Application Development Technologies, Methodologies, And Best Practices,
           Enabling Me To Deliver Projects That Are Not Only Functional But Also Scalable, Maintainable, And Secure.</p>
      </div>
      <div class="service">
        <i class="fas fa-globe"></i>
        <h3>Website Development</h3>
        <p>I Possess A Comprehensive Skill Set That Encompasses All Aspects Of Website Development, From Conception 
          To Deployment And Ongoing Maintenance. I Am Passionate About Creating Websites That Not 
          Only Look Great But Also Function Seamlessly, Providing An Engaging And User-Centric Experience For All Visitors.</p>
      </div>
      <div class="service">
        <i class="fas fa-server"></i>
        <h3>Back-end Development</h3>
        <p>I Possess A Deep Understanding Of Server-Side Technologies And Methodologies. I Am Adept At Designing, Developing,
           And Maintaining Highly Scalable And Performant Backend Applications That Power Modern Web And Mobile Experiences.</p>
      </div>
    </div>
  </section>

  <section id="skills" class="section">
    <h2>Skills</h2>
    <div class="skills">
      <div class="skill">
        <img src="java.jpg" alt="Java Logo">
        <p>Java</p>
      </div>
      <div class="skill">
        <img src="css.jpg" alt="CSS Logo">
        <p>CSS</p>
      </div>
      <div class="skill">
        <img src="R.png" alt="PHP Logo">
        <p>PHP</p>
      </div>
      <div class="skill">
        <img src="OIP.jpg" alt="JavaScript Logo">
        <p>JavaScript</p>
      </div>
      <div class="skill">
        <img src="c++.jpg" alt="C++ Logo">
        <p>C++</p>
      </div>
    </div>
  </section>

  <section id="contact" class="section">
    <h2>Contact Me</h2>
    <div class="contact-form">
      <form action="" method="post">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br>
        <label for="message">Message:</label><br>
        <textarea id="message" name="message" rows="4" required></textarea><br><br>
        <input type="submit" value="Submit">
      </form>
    </div>
  </section>
  
 <!--footer section start-->
<footer>
  <div class="roww">
  <div class="col">
    <p>Thank You for visit My website</p>
  </div>

  <div class="col">
    <h3>LOCATION <div class="underline"><span></span></div>
    </h3>
    <p>Medda Welabu University</p>
     <p class="email-id">yeabsragetachew6789@gmail.com</p>
     <h4>0967896715</h4>
  </div>
  <div class="col">
 
    <div class="social-icons">
<i class="fab fa-facebook"></i>
<i class="fab fa-twitter"></i>
<i class="fab fa-whatsapp"></i>
<i class="fab fa-telegram"></i>
    </div>
  </div>
  </div>
  <hr>
  <p class="copyright"> yeabsra getachew © 2024- All Right Reserved.</p>
</footer>

  <script src="personal.js"></script>
</body>
</html>




























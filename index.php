<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-121326446-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-121326446-1');
</script>
<?php
$ipAddress = $_SERVER["REMOTE_ADDR"];

if ($ipAddress == "99.235.13.69"){
  echo "<script type='text/javascript'>alert('$ipAddress');</script>";
}

 ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Welcome to Muhammad Aqsam's portfolio website, browse through to learn more.">
    <link rel="shortcut icon" href="/img/favicon.png" type="image/x-icon">
    <!--RESET-->
    <link rel="stylesheet" href="./css/reset.css">
    <!--STYLESHEET-->
    <link rel="stylesheet" href="./css/style.css">
    <title>Mo's Website - Software Developer/ Full-Stack Developer</title>
  </head>
  <body>
    <div class="landingpage mobile">
        <h2>moaqsam.com</h2>
        <h1>Hello, my name is Muhammad<div class="line-hor"></div></h1>
        <h2>I'm a Full-Stack/Software Developer</h2>
        <a href="#work"><img src="./icons/arrow.png" alt="down arrow"></a>
        <div class="overlay-plain"></div>
    </div>
    <div class="menu">
      <nav>
        <a href="#" id="menu-icon"><img src="./icons/menu-icon.png" alt="menu icon"></a>
<br> <br> <br> <br>
            <a href="#work">Work</a><br>
            <a href="#about">About</a><br>
            <a href="#skills">Skills</a><br>
            <a href="#contact">Contact</a><br>
      </nav>
    </div>
    <div class="clear"></div>
    <div class="work" id="work">
        <span class="h1">My recent work<div class="line-hor"></div></span>

        <div class="work-outter">
        <div class="work-box">
          <a href="https://handyenterpriseinc.com/"><h2>Handy Enterprise Inc</h2></a>
          <p>Currently developing a e-commerce website for a client on Shopify.</p>
        </div>
        <div class="work-box">
        <a href="https://moaqsam.github.io/Cell-Linx-Client-Website/" target="_blank"><h2>Cell City Website</h2></a>
          <p>Created a website for a client using HTML5, CSS3 and FlexBoxGrid framework.</p>
        </div>
        <div class="work-box">
          <a href="https://powerful-brushlands-37977.herokuapp.com/"><h2>MyApp (NodeJS)</h2></a>
          <p>Created an app using both front-end and back-end technologies and deployed on Heroku.
          Used NodeJS , HandlebarsJS, Express and databases used MongoDB and PostGresSQL.</p>
        </div>
        <div class="work-box">
          <a href="https://github.com/MoAqsam/OOP244"><h2>Aid Management App(C++)</h2></a>
          <p>Created a console app using C++ that distributes aid to different locations.</p>
        </div>
        <div class="work-box">
          <a href="https://github.com/MoAqsam/IPC-144"><h2>Grocery Store App(C)</h2></a>
          <p>Developed a grocery store app with management tools allowing the deletion, sorting, and adding of products into a store.</p>
        </div>
        <div class="work-box">
          <a href="https://github.com/MoAqsam/FlappyBird"><h2>FlappyBird (JavaScript)</h2></a>
          <p>Developed a clone for the famous mobile game Flappy Bird.</p>
        </div>
      </div>
    </div>
    <div class="about" id="about" >
      <div class="overlay-green"></div>
      <span class="h1">About me <div class="line-hor"></div></span>
      <div class="profile-outter">
        <div class="profile-img">
          <img src="./img/profile-img.jpg" alt="profile image">
        </div>
        <div class="profile-content">
          <h2>Muhammad Aqsam</h2>
            <p>Seneca College - Computer Programming and Analysis</p>
            <br>
            <p>I am a student at Seneca College currently doing an advance diploma in Computer Programming and Analysis.
               I have a great passion for development and I love trying to solve problems using technology.</p>
              <p>I have the skills of a full-stack developer with a preference for the MEAN stack. I have built websites for clients and also interned as an Application Developer at Workers Safety Insurance Board.</p>
        </div>
      </div>
      <div class="clear"></div>
    </div>
    <div class="skills" id="skills">
        <span class="h1">What I'm good at<div class="line-hor"></div></span>
        <br>
      <div class="outter">
              <a href="./files/Resume.pdf"  target="_blank" id="resume">Resume</a>
              <div class="box">
                <img src="./icons/front-end.png" alt="front-end">
                <h2>Front-End</h2>
                <p>I have got extensive experience with HTML, CSS and javascript. Including libraries such as React JS and frameworks such as Angular JS.</p>
              </div>
                <div class="box">
                    <img src="./icons/backend.png" alt="back-end">
                <h2>Back-End</h2>
                <p>In the back end I prefer technologies such as Node, Express and MongoDB.</p>
                </div>

                  <div class="box">
                      <img src="./icons/object.png" alt="object">
                    <h2>Object Oriented Programming</h2>
                    <p>I have experience using object oriented technologies such as C++ and Java. Check my works area to see relevant projects.</p>
                  </div>
                    <div class="box">
                        <img src="./icons/database.png" alt="database">
                      <h2>Database</h2>
                      <p>I have knowledge of SQL, using database technologies such as Oracle, MongoDB and DB2.</p>
                      <p></p>
                    </div>
            </div>
    </div>
    <div class="contact" id="contact">
    <div class="overlay-green"></div>
    <span class="h1">Get in touch<div class="line-hor"></div></span>
    <p>Send me a message or connect with me. </p>
    <div class="email"> <p><a href="mailto:maqsam.dev@gmail.com">maqsam.dev@gmail.com</a></p></div>
    <div class="social">
      <a href="https://github.com/MoAqsam"><img src="./icons/githubx64.png" alt="Go to Github"></a>
      <a href="https://www.linkedin.com/in/maqsam/"><img src="./icons/linkedInx64.png" alt="Go to linked In"></a>
    </div>
  </div>
    <footer>
      <p>Website made by <span style="color:rgb(43,164,172);">Muhammad Aqsam</span> &copy;</p>
      <a href="https://icons8.com">Icon pack by Icons8</a>
    </footer>

  </body>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="./js/main.js"></script>
<<<<<<< HEAD
=======
<script type="application/javascript" src="http://jsonip.appspot.com/?callback=getip"></script>
>>>>>>> 062edf297a0c2c8afc9ec90305c6a138cbf9f010
</html>

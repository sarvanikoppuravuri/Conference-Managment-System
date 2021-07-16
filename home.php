
<!DOCTYPE html>
<html>
<head>
<link href='https://fonts.googleapis.com/css?family=Montserrat|Cardo' rel='stylesheet' type='text/css'>
     <title>Your Journals</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <style>
   
    
    .main_h {
  position: sticky;
  top: 0px;
  max-height: 150px;
  z-index: 999;
  width: 100%;
  background: none;
  overflow: hidden;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
  opacity: 0;
  top: -100px;
  padding-bottom: 6px;
  font-family: "Montserrat", sans-serif;
  background-color: rgba(255, 255, 255, 0.93);
  opacity: 1;
  top: 0px;
  border-bottom: 1px solid gainsboro;
}
@media only screen and (max-width: 766px) {
  .main_h {
    padding-top: 25px;
  }
}

.open-nav {
  max-height: 400px !important;
}
.open-nav .mobile-toggle {
  transform: rotate(-90deg);
  -webkit-transform: rotate(-90deg);
}

.sec {
  float: right;
  width: 60%;
}
@media only screen and (max-width: 766px) {
  .sec {
    width: 100%;
  }
}
.sec ul {
  list-style: none;
  overflow: hidden;
  text-align: right;
  float: right;
}
@media only screen and (max-width: 766px) {
  .sec ul {
    padding-top: 10px;
    margin-bottom: 22px;
    float: left;
    text-align: center;
    width: 100%;
  }
}
.sec ul li {
  display: inline-block;
  margin-left: 35px;
  line-height: 1.5;
}
@media only screen and (max-width: 766px) {
  .sec ul li {
    width: 100%;
    padding: 7px 0;
    margin: 0;
  }
}
.sec ul a {
  color: #888888;
  text-transform: uppercase;
  font-size: 12px;
}

.mobile-toggle {
  display: none;
  cursor: pointer;
  font-size: 20px;
  position: absolute;
  right: 22px;
  top: 0;
  width: 30px;
  -webkit-transition: all 200ms ease-in;
  -moz-transition: all 200ms ease-in;
  transition: all 200ms ease-in;
}
@media only screen and (max-width: 766px) {
  .mobile-toggle {
    display: block;
  }
}
.mobile-toggle span {
  width: 30px;
  height: 4px;
  margin-bottom: 6px;
  border-radius: 1000px;
  background: #8f8f8f;
  display: block;
}

.row {
  width: 100%;
  max-width: 940px;
  margin: 0 auto;
  position: relative;
  padding: 0 2%;
}

* {
  box-sizing: border-box;
}

body {
  color: #8f8f8f;
  background: white;
  font-family: "Cardo", serif;
  font-weight: 300;
  -webkit-font-smoothing: antialiased;
}

a {
  text-decoration: none;
}

h1 {
  font-size: 30px;
  line-height: 1.8;
  text-transform: uppercase;
  font-family: "Montserrat", sans-serif;
}

p {
  margin-bottom: 20px;
  font-size: 17px;
  line-height: 2;
}

.content {
  padding: 50px 2% 250px;
}

.hero {
  position: relative;
  background: url(https://library.leeds.ac.uk/images/Copy_of_WEBSITE_CROP_800x400px__18_.png) no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  background-size: cover;
  text-align: center;
  color: #fff;
  padding-top: 110px;
  min-height: 500px;
  letter-spacing: 2px;
  font-family: "Montserrat", sans-serif;
}
.hero h1 {
  font-size: 50px;
  line-height: 1.3;
}
.hero h1 span {
  font-size: 25px;
  color: #fff;
  border-bottom: 2px solid #97bbb6;
  border-top: 2px solid #97bbb6;
  padding-bottom: 12px;
  padding-top: 12px;
  line-height: 3;
}



@-webkit-keyframes scroll {
  0% {
    opacity: 1;
    -webkit-transform: translateY(0);
    transform: translateY(0);
  }

  100% {
    opacity: 0;
    -webkit-transform: translateY(20px);
    transform: translateY(20px);
  }
}
@keyframes scroll {
  0% {
    opacity: 1;
    -webkit-transform: translateY(0);
    -ms-transform: translateY(0);
    transform: translateY(0);
  }

  100% {
    opacity: 0;
    -webkit-transform: translateY(20px);
    -ms-transform: translateY(20px);
    transform: translateY(20px);
  }
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}

.topnav-right {
  float: right;
}

.navbar-inverse {
        background-color: #3b173da8;
        border-color: #3b173da8; 
    }
.navbar-inverse .navbar-brand {
        color: white;
    }
a:hover{
        color: #50546d;
    }
.navbar-inverse .navbar-nav>li>a {
        color: white;
    }
    
</style>
</head>
<body>
    
<header class="main_h">
 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="home.php">Your Journals</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="publications.php"><span class="glyphicon glyphicon-book"></span> Publications</a></li>
        <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>


     <div class="row"> 

       
        <div class="mobile-toggle">
            <span></span>
            <span></span>
            <span></span>
        </div>

        <nav class="sec">
            <ul>
                <li><a href="#sec01">About us</a></li>
                <li><a href="#sec02">For authors</a></li>
                <li><a href="#sec03">contact us</a></li>
            </ul>
        </nav>

    </div> <!-- / row -->


    

</header>

<div class="hero">

    <h1><span>Great things take time.</span></h1>

   

</div>

<div class="row content">
    <h1 id="sec01"></h1></br></br></br></br>
    <h1 >ABOUT US</h1>
    <p>International Journal of Innovative Science and Research Technology is an open access peer-reviewed international forum for scientists and engineers involved in research to publish high quality and refereed papers. Papers reporting original research or extended versions of already published conference/journal papers are all welcome. Papers for publication are selected through peer review to ensure originality, relevance, and readability. The journal ensures a wide indexing policy to make published papers highly visible to the scientific community.

IJISRT is a highly-selective journal, covering topics that appeal to a broad readership of various branches of engineering, science and related fields. The IJISRT has many benefits all geared toward strengthening research skills and advancing academic careers. Journal publications are a vital part of academic career advancement.

We help our authors in advance engineering research in different branches like Computer Science, Electronics & Communication, Electrical Engineering, Mechanical Engineering and Information Technology etc. and in science fields by providing world-class information and innovative tools that help them make critical decisions, enhance productivity and improve outcomes.</p>
    <h1 id="sec02"></h1></br></br></br></br>
    <h1 >FOR AUTHORS</h1>
    <p>Submit only original research papers.
Provide all the permission notices from the copyright owners ensuring the belongingness of the content with the author.
We will consider only that papers whose content plagiarism will be <30%.
The authority and power of the author to execute a paper is justified by the undersigned of copyright form.
In case of any issue related found in the published research paper, only the author will be held responsible.</p>
    
    <h1 id="sec03"></h1></br></br></br></br>
    <h1 >CONTACT US</h1>
    <p>
      <ul>
  <li>Sarvani</li>
  <li>3rd year cse</li>
  <li>contact: 9999999999</li>
</ul>
    </p>
</div>
</body>
</html>

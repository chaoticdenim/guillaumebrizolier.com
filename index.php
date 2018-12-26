<?php

    if($_POST)
    {
        
        $emailFrom = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        $headers = "From: server@guillaumebrizolier.com"."\r\n".
        "Reply-To: $emailFrom";
        
        if(filter_var($emailFrom, FILTER_VALIDATE_EMAIL))
        {
            if(mail("gbrizolier@gmail.com", $subject, $message, $headers ))
            {

               $log = "Email sent by $emailFrom with subject : $subject.\n\n$message";

               file_put_contents("logs.txt", $log, FILE_APPEND);
               //mail sent
               echo "mail successfully sent";
            }
        }
        else
        {
            //do nothing
        } 
    }

?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Guillaume Brizolier - CS Student</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <link href="https://fonts.googleapis.com/css?family=Poppins:200,400,400i,800" rel="stylesheet">
      <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
      <link rel="stylesheet" href="style.css">
   </head>
   <div class="pre-loader">
      <div class="sk-fading-circle">
         <div class="sk-circle1 sk-circle"></div>
         <div class="sk-circle2 sk-circle"></div>
         <div class="sk-circle3 sk-circle"></div>
         <div class="sk-circle4 sk-circle"></div>
         <div class="sk-circle5 sk-circle"></div>
         <div class="sk-circle6 sk-circle"></div>
         <div class="sk-circle7 sk-circle"></div>
         <div class="sk-circle8 sk-circle"></div>
         <div class="sk-circle9 sk-circle"></div>
         <div class="sk-circle10 sk-circle"></div>
         <div class="sk-circle11 sk-circle"></div>
         <div class="sk-circle12 sk-circle"></div>
      </div>
   </div>
   <body data-spy="scroll" data-target = ".navbar" data-offset="0">
      <div class="jumbotron jumbotron-fluid text-white bg-gradient full-height d-flex flex-column" id="main-jumbotron">
          <canvas style="position:absolute;" class="full-height" id="myCanvas">
          
          </canvas>
          
         <div class="container fade-in-bottom" id = "hero" style="z-index:1">
            <h1 class="text-center">Hello, I'm <span id="name">Guillaume Brizolier</span>.<br>I'm a Computer Science Student <br>@ Ecole des Mines in France.</h1>
         </div>
         <span class="scroll-btn" style="z-index:1">
         
         <span class="mouse">
         <span>
         </span>
         </span>
             
         </span>
       </div>
      <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-black" style="min-height:8vh; opacity: 0.95; z-index: 1;">
         <div class="d-flex flex-grow-1">
            <span class="w-100 d-lg-none d-block">
               <!-- hidden spacer to center brand on mobile -->
            </span>
            <a class="navbar-brand d-none d-lg-inline-block" href="#">
            Guillaume Brizolier - CS Student
            </a>
            <a class="navbar-brand d-lg-none d-inline-block" href="#">
            Guillaume Brizolier
            </a>
            <div class="text-right">
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar">
               <span class="navbar-toggler-icon"></span>
               </button>
            </div>
         </div>
         <div class="collapse navbar-collapse flex-grow-1 text-right" id="myNavbar">
            <ul class="navbar-nav ml-auto flex-nowrap">
               <li class="nav-item">
                  <a href="#main-jumbotron" class="nav-link m-2 menu-item">Home</a>
               </li>
               <li class="nav-item">
                  <a href="#about" class="nav-link m-2 menu-item">About</a>
               </li>
               <li class="nav-item">
                  <a href="#my-work" class="nav-link m-2 menu-item">My work</a>
               </li>
               <li class="nav-item">
                  <a href="#contact" class="nav-link m-2 menu-item">Contact</a>
               </li>
            </ul>
         </div>
      </nav>
      <div class="jumbotron jumbotron-fluid full-height bg-white d-flex flex-column" id="about">
         <div class="container-fluid">
            <div class="row" id="aboutme">
               <div class="col-md me-column" style="height:100%;" data-aos="fade-down">
                  <div class="row skill-row">
                     <h2 class="display-4">About me</h2>
                  </div>
                  <div class="row align-items-end">
                     <div class="col-sm-3" id="pdp-container">
                        <img src="me.png" id="me">
                     </div>
                     <div class="col-sm-9">
                        <div class="msg-bubble align-self-bottom" data-aos="zoom-in">
                           <p class="lead">I'm a CS Student with a minor in Management @ <span class="text-accent"><a href="https://www.mines-stetienne.fr/en/">Ecole des mines de Saint-Etienne</a></span> in France </p>
                        </div>
                     </div>
                  </div>
                  <div class="row align-items-center">
                     <div class="col-sm-3">
                     </div>
                     <div class="col-sm-9">
                        <div class="msg-bubble" data-aos="zoom-in">
                           <p class="lead">I come from a multidisciplinary background but my passion is coding.</p>
                        </div>
                     </div>
                  </div>
                  <div class="row align-items-center">
                     <div class="col-sm-3">
                     </div>
                     <div class="col-sm-9" id="last-bubble">
                        <div class="msg-bubble" data-aos="zoom-in">
                           <p class="lead">I'm a team player and I love working with people from different backgrounds!</p>
                        </div>
                     </div>
                  </div>
                  <div class="row align-items-center">
                     <div class="col-sm-3">
                     </div>
                     <div class="col-sm-9" id="last-bubble">
                        <div class="msg-bubble" data-aos="zoom-in">
                           <p class="lead">Scroll <a href="#mywork" class ="text-accent">down</a> to see my work!</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md me-column d-flex flex-column justify-content-center" data-aos="fade-up">
                  <div class="row skill-row align-items-center">
                     <div class="col-sm-6">
                        <h2 class="display-4">My skills</h2>
                     </div>
                     <div class="col-sm-6">
                        <span><a class="btn bg-black text-white mt-auto" href="Guillaume_Brizolier_Web.pdf" role="button" target="_blank">See my CV</a></span>
                     </div>
                  </div>
                  <div class="row vertical-align skill-row">
                     <div class="col-sm-3 d-flex justify-content-end">
                        <p class="skill">C/C++</p>
                     </div>
                     <div class="col-sm-9 d-flex flex-column justify-content-center">
                        <div class="progress">
                           <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 80%;background-color: #1ABC9C" data-aos="fade-right" data-aos-duration="3000"></div>
                        </div>
                     </div>
                  </div>
                   <div class="row vertical-align skill-row">
                     <div class="col-sm-3 d-flex justify-content-end text-right">
                        <p class="skill">HTML5, CSS3</p>
                     </div>
                     <div class="col-sm-9 d-flex flex-column justify-content-center">
                        <div class="progress">
                           <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;background-color: #1ABC9C" data-aos="fade-right" data-aos-duration="3000"></div>
                        </div>
                     </div>
                  </div>
                  <div class="row vertical-align skill-row">
                     <div class="col-sm-3 d-flex justify-content-end">
                        <p class="skill">PostgreSQL</p>
                     </div>
                     <div class="col-sm-9 d-flex flex-column justify-content-center">
                        <div class="progress">
                           <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 75%;background-color: #1ABC9C" data-aos="fade-right" data-aos-duration="3000"></div>
                        </div>
                     </div>
                  </div>
                  <div class="row vertical-align skill-row">
                     <div class="col-sm-3 d-flex justify-content-end text-right">
                        <p class="skill">JavaScript</p>
                     </div>
                     <div class="col-sm-9 d-flex flex-column justify-content-center">
                        <div class="progress">
                           <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;background-color:#1ABC9C" data-aos="fade-right" data-aos-duration="3000"></div>
                        </div>
                     </div>
                  </div>
                  <div class="row vertical-align skill-row">
                     <div class="col-sm-3 d-flex justify-content-end text-right">
                        <p class="skill">Python</p>
                     </div>
                     <div class="col-sm-9 d-flex flex-column justify-content-center">
                        <div class="progress">
                           <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;background-color: #1ABC9C" data-aos="fade-right" data-aos-duration="3000"></div>
                        </div>
                     </div>
                  </div>
                   <div class="row vertical-align skill-row">
                     <div class="col-sm-3 d-flex justify-content-end">
                        <p class="skill">Android (Java)</p>
                     </div>
                     <div class="col-sm-9 d-flex flex-column justify-content-center">
                        <div class="progress">
                           <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;background-color: #1ABC9C" data-aos="fade-right" data-aos-duration="3000"></div>
                        </div>
                     </div>
                  </div>
                  <div class="row vertical-align skill-row">
                     <div class="col-sm-3 d-flex justify-content-end text-right">
                        <p class="skill">Unit testing</p>
                     </div>
                     <div class="col-sm-9 d-flex flex-column justify-content-center">
                        <div class="progress">
                           <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;background-color: #1ABC9C" data-aos="fade-right" data-aos-duration="3000"></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      
      <div class="jumbotron jumbotron-fluid full-height bg-gradient text-white" style="padding-top:0">
          
          <div class="jumbotron bg-black text-white" id="my-work" style="margin-bottom: 10vh;">
         <div class="row" id="counter">
            <div class="col-md text-center figure-container">
               <h2 class="display-1" data-aos="zoom-in">2</h2>
               <p class="lead">Nationalities</p>
               <hr style="background-color:whitesmoke">
               <div class="row d-flex flex-row justify-content-center">
                  <img src="flag-round-250.png" class="flag-pic" data-aos="zoom-in">
                  <img src="flag-round-250%20(1).png" class="flag-pic" data-aos="zoom-in">
               </div>
            </div>
            <div class="col-md text-center figure-container">
               <h2 class="display-1" data-aos="zoom-in">3.7</h2>
               <p class="lead">GPA in Computer Science (4.33 scale)</p>
               <hr style="background-color:whitesmoke">
               <i class="fas fa-trophy" data-aos="zoom-in"></i>
            </div>
            <div class="col-md text-center figure-container">
               <h2 class="display-1" data-aos="zoom-in">5</h2>
               <p class="lead">Completed Projects</p>
               <hr style="background-color:whitesmoke">
               <i class="fas fa-code-branch" data-aos="zoom-in"></i>
            </div>
         </div>
      </div>
          
          
         <div class="container">
            <h1 class="display-4">Latest Projects</h1>
            <p class="lead">I continuously learn web on my free time, through various mini-projects. Why don't you check these out?</p>
            <hr class="my-4">
            <div class="card-deck text-dark text-center">
               <div class="card" data-aos="fade-right">
                  <img class="card-img-top img-fluid" src="weather.png" alt="weather scraper screenshot">
                  <div class="card-body d-flex flex-column">
                     <h5 class="card-title">Weather Scraper</h5>
                     <p class="card-text">PHP script that scrapes weather info</p>
                     <a class="btn bg-black text-white mt-auto" href="weatherscraper" role="button" style="margin-top: 3rem" target="_blank">Check it out</a>
                  </div>
               </div>
               <div class="card" data-aos="fade-right">
                  <img class="card-img-top img-fluid" src="loginform.png" alt="react test screenshot">
                  <div class="card-body d-flex flex-column">
                     <h5 class="card-title">Login Form</h5>
                     <p class="card-text">A login form connected to a database. Go register! Uses PHP with MySQL</p>
                     <a class="btn bg-black text-white mt-auto" href="sql" role="button" style="margin-top: 3rem" target="_blank">Check it out</a>
                  </div>
               </div>
               <div class="card" data-aos="fade-right">
                  <img class="card-img-top img-fluid" src="codepic.PNG" alt="codeplayer screenshot">
                  <div class="card-body d-flex flex-column">
                     <h5 class="card-title">CodePlayer</h5>
                     <p class="card-text">Javascript/jQuery-based code editor.</p>
                     <a class="btn bg-black text-white mt-auto" href="CodePlayer/codeplayer.html" role="button" style="margin-top: 3rem" target="_blank">Check it out</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="jumbotron bg-black jumbotron-fluid text-white d-flex flex-column" id="contact">
         <div class="container d-flex flex-column align-items-center justify-content-center">
            <ul class="icons row">
               <li class = "col">
                  <a href="https://github.com/chaoticdenim" target="_blank">
                  <i class="fab fa-github" ></i>
                  </a>
               </li>
               <li class = "col">
                  <a href="https://www.hackerrank.com/gbrizolier" target="_blank">
                  <i class="fab fa-hackerrank"></i>
                  </a>
               </li>
               <li class = "col">
                  <a href="https://twitter.com/Guillaume_Briz" target="_blank">
                  <i class="fab fa-twitter"></i>
                  </a>
               </li>
               <li class = "col">
                  <a href="https://www.linkedin.com/in/guillaume-brizolier/" target="_blank">
                  <i class="fab fa-linkedin-in"></i>
                  </a>
               </li>
            </ul>
         </div>
          <div class="container d-flex flex-column align-items-center" id="contactbox">
              
              <div class="row">
                <h2 class="display-6" style="padding: 5vh;">Email me</h2>
              </div>
              
            <form style="width:100%" method="post">
            
                <div class="form-group row">
                    
                    <div class="col">
                        <input type="text" name="email" class="form-control" placeholder="Your email address goes here...">
                    </div>
                        
                </div>
                
                 <div class="form-group row">
                    
                    <div class="col">
                        <input type="text" name="subject" class="form-control" placeholder="Subject of your message...">
                    </div>
                        
                </div>
                
                <div class="form-group">
                    <textarea type="text" class="form-control" id="message-box" name="message" placeholder="Your message goes here..."></textarea>
                </div>
                <div class="form-group" style="float:right">
                
                    <button type="submit" id="send-button" class="bg-primary-custom form-control">Send <i class="far fa-paper-plane"></i>
                    </button>
                    
                </div>
              
            </form>
          
      </div>  
      </div>
      <script
         src="https://code.jquery.com/jquery-3.3.1.js"
         integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
         crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
      <script>
         AOS.init();
      </script>
      <script type="text/javascript">
         
          $(window).on('load', function() { // makes sure the whole site is loaded 
          $('.sk-fading-circle').fadeOut(); // will first fade out the loading animation 
          $('.pre-loader').delay(100).fadeOut('slow'); // will fade out the white DIV that covers the website. 
          $('body').delay(100).css({'overflow-y':'visible'});
})
          
          const canvas = document.getElementById('myCanvas')
            const c = canvas.getContext('2d')

            let mouseX
            let mouseY

            canvas.height = window.innerHeight
            canvas.width = window.innerWidth

            const canvasWidth = canvas.width
            const canvasHeight = canvas.height

            canvas.onmousemove = function(e) {
                mouseX = e.clientX
                mouseY = e.clientY
            }

            function Circle(xCoordinate, yCoordinate, radius) {
                const randomNumber = Math.floor(Math.random() * 4)
                const randomTrueOrFalse = Math.floor(Math.random() * 2)
                const sizelimit = Math.random()* 70 + 10
                this.xCoordinate = xCoordinate
                this.yCoordinate = yCoordinate
                this.radius = radius
                this.color = colorArray[randomNumber]

                if (randomTrueOrFalse == 1) {
                    this.xVelocity = -Math.random() * 0.5 + 0.3
                } else {
                    this.xVelocity = Math.random() * 0.5 - 0.3
                }

                if (randomTrueOrFalse == 1) {
                    this.yVelocity = -Math.random() * 0.5 + 0.3
                } else {
                    this.yVelocity = Math.random() * 0.5 - 0.3
                }

                // As distance gets closer to 0, increase radius

                this.update = function() {
                    this.xCoordinate += this.xVelocity
                    const xDistance = mouseX - this.xCoordinate
                    const yDistance = mouseY - this.yCoordinate
                    const originalRadius = radius
                    this.yCoordinate += this.yVelocity

                    // Movement Functions
                    if (
                        this.xCoordinate + this.radius > canvasWidth ||
                        this.xCoordinate - this.radius < 0
                    ) {
                        this.xVelocity = -this.xVelocity
                    }
                    if (
                        this.yCoordinate + this.radius > canvasHeight ||
                        this.yCoordinate - this.radius < 0
                    ) {
                        this.yVelocity = -this.yVelocity
                    }

                    // Radius Decrease Functions
                    // When distance between circle center and mouse on horizontal axis is less than 50, increase radius until it is equal to 35
                    if (
                        xDistance < 50 &&
                        xDistance > -50 &&
                        this.radius < sizelimit &&
                        yDistance < 50 &&
                        yDistance > -50
                    ) {
                        this.radius += 2
                    } else if (
                        (xDistance >= 50 && originalRadius < this.radius) ||
                        (xDistance <= -50 && originalRadius < this.radius) ||
                        (yDistance >= 50 && originalRadius < this.radius) ||
                        (yDistance <= -50 && originalRadius < this.radius)
                    ) {
                        this.radius -= 2
                    } else if (
                        xDistance < 50 &&
                        xDistance > -50 &&
                        this.radius > sizelimit &&
                        yDistance < 50 &&
                        yDistance > -50
                    ) {
                        this.radius-=2
                    } else if ((xDistance >= 50 && originalRadius > this.radius) ||
                        (xDistance <= -50 && originalRadius > this.radius) ||
                        (yDistance >= 50 && originalRadius > this.radius) ||
                        (yDistance <= -50 && originalRadius > this.radius)
                    ) {
                        
                        this.radius += 2
                    }

                    this.draw()
                }

                this.draw = function() {
                    c.beginPath()
                    c.arc(
                        this.xCoordinate,
                        this.yCoordinate,
                        Math.abs(this.radius),
                        0,
                        Math.PI * 2
                    )
                    c.fillStyle = this.color
                    c.fill()
                }
            }

            const colorArray = ["#4BC0A6", "#4ACB7B", "#32AA7C", "#34A1A4"]
            const myCircle = new Circle(30, 80, 10)
            let circleArray = []
            let numCircles = innerWidth/27;

            for (let i = 0; i < numCircles; i++) {
                const randomXCoordinate = Math.random() * canvasWidth
                const randomYCoordinate = Math.random() * canvasHeight
                const randomRadius = Math.random() * 50 + 10
                circleArray.push(
                    new Circle(randomXCoordinate, randomYCoordinate, randomRadius)
                )
            }

            function updateAll() {
                c.clearRect(0, 0, canvasWidth, canvasHeight)
                myCircle.update()
                for (let i = 0; i < circleArray.length; i++) {
                    circleArray[i].update()
                }
                window.requestAnimationFrame(updateAll)
            }

            updateAll()
         
      </script>
   </body>
</html>
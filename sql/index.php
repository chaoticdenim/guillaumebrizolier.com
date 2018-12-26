<html>
    <head>
        <title>Simple login form</title>
        <link
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
            crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,900"
            rel="stylesheet">
    </head>

    <body>
        <div class="container">
            <div class="row align-items-center justify-content-center h-100 w-100">
                <h2 class="text-center title">Hey, you! Login to my non-existent
                    web-service!<br><span id="muted">the login mechanism still works btw</span></h2>
                <div class="col-6 form-container">
                    <div class="row menu">
                        <button class="btn-dark-custom col" id="login-btn"
                            onclick="login()">Login</button>
                        <button class="btn-dark-custom col" id="reg-btn"
                            onclick="register()">Register</button>
                    </div>
                    <form class="row form" method = "POST">
                        <div class="col">
                            <input class="form-custom" type="email" name="email"
                                placeholder="Enter your email">
                            <div class="fake-border"></div>

                            <input id="fullname" class="hidden" type="text" name="name"
                                placeholder="Full name">
                            <div class="hidden" id="fullname-border"></div>
                            <input class="form-custom" type="password" name="password"
                                type="email" placeholder="Password">
                            <div class="fake-border"></div>

                            <button type="submit" class="form-custom
                                btn-custom" name="login" id="submit-btn">Login</button>
                        </div>
                    </form>
                </div>
            </div>
            <?php
    
            $link = mysqli_connect("shareddb-f.hosting.stackcp.net", "users-database-3639484e", "coucou123", "users-database-3639484e");

            if(!$link)
                die("failed to connect");
            else
            {
                if($_POST)
                {
                    $name = $_POST['name'];
                    $mail = $_POST['email'];
                    $password =$_POST['password'];
                    $login = $_POST['login'];
                    $register = $_POST['register'];

                    if(isset($register)) //register
                    {
                        if(empty($password) || empty($name) || empty($mail))
                        echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                        </button>
                        Please fill out the empty fields.
                    </div>";
                        else
                        {
                            $query = "SELECT `name` FROM `users` WHERE email = '{$mail}' AND password = '{$password}'";

                            if($result = mysqli_query($link, $query))
                            {
                                echo "test";
                                $row = mysqli_fetch_array($result);
                                if(!empty($row))
                                {
                                    //user already created
                                    echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
                                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                    <span aria-hidden='true'>&times;</span>
                                    </button>
                                    You are already registered. Please login.
                                </div>";
                                }
                                else
                                {
                                    $query = "INSERT INTO `users` (`name`, `email`, `password`) VALUES ('{$name}', '{$mail}', '{$password}')";
                                    if($result = mysqli_query($link, $query))
                                    {
                                        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                        <span aria-hidden='true'>&times;</span>
                                        </button>
                                        User created. You can login now.
                                    </div>";
                                    }
                                    else
                                    {
                                        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                        <span aria-hidden='true'>&times;</span>
                                        </button>
                                        An internal error occured. Please try again later.
                                    </div>";
                                    }
                                }
                            }
                            else
                            {
                                echo "failed request";
                            }
                        }
                    }
                    else if(isset($login, $mail, $password))
                    {
                        //login
                        $query = "SELECT `name` FROM `users` WHERE email = '{$mail}' AND password = '{$password}'";
                        
                        if($result = mysqli_query($link, $query))
                        {
                            $row = mysqli_fetch_array($result);
                            if(!empty($row))
                            {
                                echo "<div class='alert alert-success alert-dismissible alert-custom fade show' role='alert'>
                                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                        <span aria-hidden='true'>&times;</span>
                                        </button>
                                        Welcome back {$row['name']}.
                                    </div>";
                            }
                            else
                            {
                                echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                <span aria-hidden='true'>&times;</span>
                                </button>
                                User not found. Please Register.
                            </div>";
                            }
                        }
                    }
                }
            }

        ?>
        </div>


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
            integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
            crossorigin="anonymous"></script>
        <script
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
            integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
            crossorigin="anonymous"></script>

        <script type="text/javascript">
        
            var regbtn = document.getElementById("reg-btn");
            var loginbtn = document.getElementById("login-btn");
            var submitbtn = document.getElementById("submit-btn");
            var textinput = document.getElementById("fullname");
            var border = document.getElementById("fullname-border")


            function register() {
                submitbtn.innerHTML = "Register";
                submitbtn.setAttribute("name", "register");
                loginbtn.style.backgroundColor = 'transparent';
                regbtn.style.backgroundColor = '#34495E';
                textinput.classList.remove("hidden");
                textinput.classList.add("form-custom");
                border.classList.remove("hidden");
                border.classList.add("fake-border");
            }

            function login() {
                submitbtn.innerHTML = "Login";
                if(submitbtn.name = "register")
                    submitbtn.setAttribute("name", "login");
                regbtn.style.backgroundColor = 'transparent';
                loginbtn.style.backgroundColor = '#34495E';
                textinput.classList.remove("form-custom");
                textinput.classList.add("hidden");
                border.classList.remove("fake-border");
                border.classList.add("hidden");
        }
        </script>
    </body>

</html>
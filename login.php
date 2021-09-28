<?php

session_start();

    include("connection.php");
    include("functions.php");

    if($_SERVER['REQUEST_METHOD']=="POST")
    {
        //something was posted
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];

        if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
        {
            //read from database
            $query="select * from users where user_name='$user_name' limit 1";

            $result=mysqli_query($con,$query);

            if($result)
            {
                if($result && mysqli_num_rows($result)>0)
                {
                    $user_data=mysqli_fetch_assoc($result);
                    
                    if($user_data['password']==$password)
                    {
                        $_SESSION['user_id']=$user_data['user_id'];
                        header("Location: index.php");
                        die;
                    }
                }
            }

            echo"Wrong user_name or password!";
        }else
        {
            echo"Please enter some valid information!";
        }
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="index.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/f01876fc6c.js" crossorigin="anonymous"></script>
    </head>

    <style type="text/css">
            .content{
          background-color: #d4ebfa;
          margin-left: 10px;
          margin-right: 10px;
          padding-top: 5px;
          padding-bottom: 5px;
          font-weight: bold;
          margin-bottom: 50px;
          margin-top: 20px;
          text-align: justify;
          width: 900px;
          padding: 10px;
          position: relative;
          left: 300px;
          }

          h1 .topic{
              font-size: 300px;
          }

          #one{
              margin-bottom: 10px;
              margin-top: 20px;
          }

          #two{
              margin-top: 10px;
              margin-bottom: 20px;
          }
    </style>

    <body style="background-color: #d9e8f8;">
        <style type="text/css">
        #text{
            height:25px;
            border-radius:5px;
            padding:4px;
            border:solid thin #aaa;
            width:100%;
        }

        #button{
            padding:10px;
            width:100px;
            color:white;
            background-color:lightblue;
            border:none;
        }

        #box{
            background-color:grey;
            margin:auto;
            width:300px;
            padding:20px;
        }

        </style>

        <header id="heddd">
            <nav id="navbar-example2" class="navbar navbar-light bg-light px-3">
            <a class="navbar-brand">ResumeReady</a>
            <ul class="nav nav-pills">
                <li class="nav-item">
                <a class="nav-link" href="#scrollspyHeading1">Create a Resume in minutes and bag the Job of your dreams</a>
                </li>
                </ul>
            </nav>
        </header>


        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="1.png" class="d-block w-100" height="350px" alt="FAST">
              </div>
              <div class="carousel-item">
                <img src="2.png" class="d-block w-100" height="350px" alt="EASY">
              </div>
              <div class="carousel-item">
                <img src="3.png" class="d-block w-100" height="350px" alt="EFFECTIVE">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
        </div>

        <hr>
        <div id="box">
            <form method="post">
                <div style="font-size:20px; margin:10px; color:white;">Login</div>

                <input id="text" type="text" name="user_name" placeholder="User_Name:"><br><br>
                <input id="text" type="password" name="password" placeholder="Password:"><br><br>

                <input id="button" type="submit" value="Login"><br><br>
                <a href="signup.php">Don't have an account? Signup</a><br><br>
            </form>
        </div>

        <div class="content">
          <h1 class="display-5">Effortlessly make a job-worthy resume and cover letter that gets you hired faster</h1>
          <p class="lead">ResumeReady is lightning fast. There's no software to download. No long-winded tutorials. Just a straightforward process.</p>
        </div>

        <hr>
        <div class="picone">
        <div class="d-flex align-items-center">
          <div class="flex-shrink-0">
            <img src="r-one.png" alt="1">
          </div>
          <div class="flex-grow-1 ms-3">
            <h1 class="display-3">FAST</h1>
            <p class="lead">Make a Resume in minutes.You should be out there building a career, not fixing the margin size on your Resume. ResumeReady gives you the right format, modern designs, and Industry standards template.</p>
          </div>
        </div>
       </div>


       <hr>
       <div class="pictwo">
        <div class="d-flex align-items-center">
          <div class="flex-shrink-0">
            <img src="r-three.png" alt="2">
          </div>
          <div class="flex-grow-1 ms-3">
            <h1 class="display-3">EASY</h1>
            <p class="lead">Don’t let writing a Resume get in the way of your future. Stop using softwares that doesn’t work let ResumeReady help you along the way towrads your success:</p>
            <p class="lead">-> Sign-in with your mail ID</p>
            <p class="lead">-> Enter your details in the blanks</p>
            <p class="lead">-> One click and your Resume is ready</p>
          </div>
        </div>
       </div>


       <hr>
        <div class="picthree">
        <div class="d-flex align-items-center">
          <div class="flex-shrink-0">
            <img src="r-two.png" alt="1">
          </div>
          <div class="flex-grow-1 ms-3">
            <h1 class="display-3">EFFECTIVE</h1>
            <p class="lead">Land the job you want with ResumeReady. Resume experts created templates for you to use. Beat other job seekers by using our well thought out website. Get a Resume that lands you the job you always wanted.</p>
          </div>
        </div>
       </div>


       <hr>
        <div class="picfour">
        <div class="d-flex align-items-center">
          <div class="flex-shrink-0">
            <img src="r-four.png" alt="1">
          </div>
          <div class="flex-grow-1 ms-3">
            <h1 class="display-3">In a word? HIRED</h1>
            <p class="lead">You’ll never lower your expectations again. You’re more than the menial job offers you’ve been getting. Now’s the time to choose between job offers you actually want.</p>
          </div>
        </div>
       </div>

    </body>
</html>
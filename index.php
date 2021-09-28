<?php

session_start();

include("connection.php");
include("functions.php");

$user_data=check_login($con);

?>

<!DOCTYPE html>
<html>
    <head>
        <title>ResumeReady</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="index.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/f01876fc6c.js" crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital@1&display=swap" rel="stylesheet">
    </head>

    <body>
    <header id="heddd">
    <nav id="navbar-example2" class="navbar navbar-light bg-light px-3">
      <a class="navbar-brand" href="#">ResumeReady</a>
      <ul class="nav nav-pills">
        <li class="nav-item">
          <a class="nav-link" href="#scrollspyHeading1"></a>
        </li>
        <li class="nav-item">
        <a id="button" href="logout.php">Logout</a>
            Hello, <?php echo $user_data['user_name']; ?>
        </li>
        <!-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Dropdown</a>
        </li> -->
      </ul>
    </nav>
  </header>
        <style type="text/css">
            #button{
            padding:10px;
            width:100px;
            color:white;
            background-color:black;
            border:none;
        }
        </style>
        
        <main>
    <div class="container-fluid px-lg-1 mb-lg-5" id="cv-body">
      <div class="row">
        <div class="col-sm-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="#section1">
                <button type="button" class="btn  btn-lg btn-light"><i class="fas fa-user"></i> About me</button>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#section2">
                <button type="button" class="btn btn-lg btn-light"><i class="fas fa-graduation-cap"></i> Education</button>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#section3">
                <button type="button" class="btn btn-lg btn-light"><i class="fas fa-code"></i> Skills</button>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#section4">
                <button type="button" class="btn btn-lg btn-light"><i class="fas fa-chalkboard-teacher"></i> Work Experience</button>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#section5">
                <button type="button" class="btn btn-lg btn-light"><i class="fas fa-lightbulb"></i> Projects</button>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#section6">
                <button type="button" class="btn btn-lg btn-light"><i class="fas fa-award"></i> Awards</button>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#section7">
                <button type="button" class="btn btn-lg btn-light"><i class="fas fa-palette"></i> Certifications</button>
              </a>
            </li>
            <li class="nav-item"><a class="nav-link active" href="#section8">
                <button type="button" class="btn btn-lg btn-light"><i class="fas fa-language"></i> Language</button>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#section9">
                <button type="button" class="btn btn-lg btn-light"><i class="fas fa-palette"></i> Hobbies</button>
              </a>
            </li>
          </ul>
        </div>

        <div class="top-div col-sm-9">
          <div class="scroll" id="cv-form">
            <div class="container right-cont right-cont1" id="section1">
              <h1 class="personal-details">PERSONAL DETAILS</h1>
              <div class="form-group">
                <form class="form1">
                  <div class="row mb-3">
                    <label for="nameField" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="nameField" placeholder="Enter your Name">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="phoneField" class="col-sm-2 col-form-label">Phone Number</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="phoneField" placeholder="Enter you phone Number">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="addressField" class="col-sm-2 col-form-label">Address</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="addressField" placeholder="Enter your Address">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="emailField" placeholder="Enter your Email">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="linkField" class="col-sm-2 col-form-label">LinkedIn Profile</label>
                    <div class="col-sm-10">
                      <input type="url" class="form-control" id="linkField" placeholder="Enter your profile link">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="aboutField" class="col-sm-2 col-form-label">About me</label>
                    <div class="col-sm-10">
                      <textarea type="text" class="form-control abme" id="aboutField" placeholder="Enter your text here" rows="5"></textarea>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="container right-cont right-cont2" id="section2">
              <h1 class="personal-details">EDUCATION</h1>
              <div class="form-group" id="frm">
                <form class="form1" id="form2">
                  <div class="col-12 ">
                    <label for="inputclgname" class="form-label">Institution Name</label>
                    <input type="text" class="form-control" id="inputclgname" placeholder="Enter your College Name">
                  </div>
                  <div class="row mb-3">
                    <div class="col-md-6">
                      <label for="inputCity" class="col-form-label">City</label>
                      <input type="text" class="form-control" id="inputCity" placeholder="Enter your City">
                    </div>
                    <div class="col-md-4">
                      <label for="inputState" class="col-form-label">State</label>
                      <input type="text" class="form-control" id="inputstate" placeholder="Enter your State">
                    </div>
                  </div>
                  <div class="col-12">
                    <label for="inputdesc" class="form-label">Description</label>
                    <input type="text" class="form-control" id="inputdesc">
                  </div>
                  <div class="col-12 ">
                    <label for="inputpuname" class="form-label">Institution Name(Puc/Diploma)</label>
                    <input type="text" class="form-control" id="inputpuname" placeholder="Enter your College Name">
                  </div>
                  <div class="row mb-3">
                    <div class="col-md-6">
                      <label for="inputpuCity" class="col-form-label">City</label>
                      <input type="text" class="form-control" id="inputpuCity" placeholder="Enter your City">
                    </div>
                    <div class="col-md-4">
                      <label for="inputpuState" class="col-form-label">State</label>
                      <input type="text" class="form-control" id="inputpustate" placeholder="Enter your State">
                    </div>
                  </div>
                  <div class="col-12">
                    <label for="inputpudesc" class="form-label">Description</label>
                    <input type="text" class="form-control" id="inputpudesc">
                  </div>
                  <div class="col-12 ">
                    <label for="inputsklname" class="form-label">School Name</label>
                    <input type="text" class="form-control" id="inputsklname" placeholder="Enter your College Name">
                  </div>
                  <div class="row mb-3">
                    <div class="col-md-6">
                      <label for="inputsklCity" class="col-form-label">City</label>
                      <input type="text" class="form-control" id="inputsklCity" placeholder="Enter your City">
                    </div>
                    <div class="col-md-4">
                      <label for="inputsklState" class="col-form-label">State</label>
                      <input type="text" class="form-control" id="inputsklstate" placeholder="Enter your State">
                    </div>
                  </div>
                  <div class="col-12">
                    <label for="inputskldesc" class="form-label">Description</label>
                    <input type="text" class="form-control" id="inputskldesc">
                  </div>

                </form>
                
              </div>
            </div>
            <div class="container right-cont right-cont3" id="section3">
              <h1 class="personal-details">SKILLS</h1>
              <div class="col-12 " id="skill">
                <label for="skills" class="form-label">Technical Skills</label>
                <textarea type="text" class="form-control skilli" id="skills" placeholder="Enter your technical skills (use comma to seperate them from each other)" rows="6"></textarea>

                <!-- <div class="container mt-2" id="newskill"> -->
                  <!-- <button onclick="addNew6()" type="button" class="btn btn-info add-btn">To Add a new Skill</button>
                </div> -->
                <label for="skillss" class="form-label">Personal Skills</label>
                <textarea type="text" class="form-control skilli" id="skillss" placeholder="Enter your personal skills (use comma to seperate them from each other)" rows="6"></textarea>
                <!-- <div class="container mt-2" id="newskills"> -->
                  <!-- <button onclick="addNew6()" type="button" class="btn btn-info add-btn">To Add a new Skill</button>
                </div> -->
              </div>

            </div>
            <div class="container right-cont right-cont4" id="section4">
              <h1 class="personal-details">WORK EXPERIENCE</h1>
              <div class="col-12 " id="we">
                <label for="wef" class="form-label"></label>
                <textarea type="text" class="form-control wei" id="wef" placeholder="enter your experience (use numbering system if you have more than one work experience)" rows="13"></textarea>
                <!-- <div class="container mt-2" id="newwe">
                  <button onclick="adddNew7()" type="button" class="btn btn-info add-btn">To Add a new experience</button>
                </div> -->
              </div>
            </div>
            <div class="container right-cont right-cont5" id="section5">
              <h1 class="personal-details">PROJECTS</h1>
              <div class="col-12 " id="pro">
                <label for="projects" class="form-label"></label>
                <textarea type="text" class="form-control projecti" id="projects" placeholder="Enter your project description (use numbering system if you have more than one project)" rows="13"></textarea>
                <!-- <div class="container mt-2" id="newpro">
                  <button onclick="addNew5()" type="button" class="btn btn-info add-btn">To Add a Project</button>
                </div> -->
              </div>

            </div>
            <div class="container right-cont right-cont6" id="section6">
              <h1 class="personal-details">AWARDS</h1>
              <div class="col-12 " id="award">
                <label for="awards" class="form-label"></label>
                <textarea type="text" class="form-control awardi" id="awards" placeholder="Enter text" rows="6"></textarea>
                <!-- <div class="container mt-2" id="newaward">
                  <button onclick="addNew4()" type="button" class="btn btn-info add-btn">To Add a new Award</button>
                </div> -->
              </div>

            </div>
            <div class="container right-cont right-cont7" id="section7">
              <h1 class="personal-details">CERTIFICATIONS</h1>
              <div class="col-12 " id="cert">
                <label for="certificates" class="form-label"></label>
                <textarea type="text" class="form-control certi" id="certificates" placeholder="Enter your certifications(use numbering system if you have more than one certification)" rows="10"></textarea>
                <!-- <div class="container mt-2" id="newcert">
                  <button onclick="addNew3()" type="button" class="btn btn-info add-btn">To Add a new Certification</button>
                </div> -->
              </div>
             </div>

            <div class="container right-cont right-cont8" id="section8">
              <h1 class="personal-details">LANGUAGES</h1>
              <div class="col-12 " id="lang">
                <label for="languages" class="form-label"></label>
                <textarea type="text" class="form-control langy" id="languages" placeholder="Enter the languages you know (use comma to seperate them from each other)" rows="6"></textarea>
                <!-- <div class="container mt-2" id="addlang">
                  <button onclick="addNew2()" type="button" class="btn btn-info add-btn">To Add a Language</button>
                </div> -->
              </div>
            </div>

            <div class="container right-cont right-cont9" id="section9">
              <h1 class="personal-details">HOBBIES</h1>
              <div class="col-12 " id="hob">
                <label for="hobbies" class="form-label"></label>
                <textarea type="text" class="form-control hobby" id="hobbies" placeholder="Enter your hobbies(use comma to seperate from each other)" rows="6"></textarea>
                <!-- <div class="container mt-2" id="newhobby">
                  <button onclick="hobbi()" type="button" class="btn btn-info add-btn">To Add a new Hobby</button>
                </div> -->
              </div>
            </div>
          </div>
          <!-- GenerateCV Button -->
          <div class="d-grid gap-2 col-6 mx-auto">
            <button onclick="generateCV()"  class="add-btn btn btn-primary">Genrate CV</button>
          </div>
        </div>
      </div>
      <!--row-ending div-->
  </main>
  <!----------------- CV Template ---------------->
  <div class=" scnd-div container" id="cv-template">
    <div class="row">
      <div class="col-md-4 text-center py-5 bk">
        <!--default-Profile-Pic -->
        <!-- <img src="images/profile.png" alt="" class="img-fluid my-img"> -->
        <!--  -->
        <div class="container linesp">
          <h3> Personal Details : </h3>
          <p id="nameT" >narmadha v pb</p>
          <p id="phoneT">123456789 </p>
          <p id="addressT">hdhejen ddhejn</p>
          <p id="emailT">email</p>
          <p  class=" linkss " id="linkT"><a href="#1">https://www.google.com</a></p>
        </div>
        <hr>
        <!-- Skill-Template -->
        <div class="sp">
          <h3>Skills</h3>
          <h5>Technical Skills:</h5>
            <p id="skillT1">
                 <Button id="skilT"class="btn btn-secondary">Web Dev </Button>
            </p>
            <h5>Personal Skills:</h5>
            <p id="skillT2">
              <Button id="skilT1"class="btn btn-secondary">Web Dev </Button>
         </p>
             
            <hr>
        </div>
        <!-- Languages-Template -->
        <div class="sp" >
            <h3>Languages</h3>
            <p id="langT">
              <Button id="langT1"class="btn btn-secondary">English </Button>
            </p>
            <hr>
        </div>
        <!-- Hobbies-Template -->
        <div class="sp">
            <h3>Hobbies</h3>
            <p id=hobbyT >
              <Button id="hobbyT1"class="btn btn-secondary">dance </Button>  
            </p>
            <hr>
        </div>
        <!-- Awards-Template -->
        <div class="sp">
            <h3>Awards</h3>
            <p id=awardT>
              <Button id="awardT1"class="btn btn-secondary">dance </Button>  
            </p>
        </div>
      </div>

      <div class="col-md-8 py-5 cds">
        <!-- second-column -->
        <h1 id="nameT2" class="text-center pd" style="font-weight: 988;">Narmadha</h1>
        <!-- objective card -->
        <div class="card mt-4">
          <div class="card-header" style="background-color: rgb(197, 187, 176);">
            <h3>Summary</h3>
          </div>
          <div class="card-body">
            <p id="aboutT">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
              reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
              officia deserunt mollit anim id est laborum."
            <p>
          </div>
        </div>
        <!-- education card -->
        <div class="card mt-4 ">
          <div class="card-header" style="background-color: rgb(197, 187, 176);">
            <h3>Education</h3>
          </div>
          <div class="card-body">
       
                <p class="first" id="clgT1">BMSIT</p>
                <p class="first" id="cityT1">Bangalore</p>
                <p class="first" id="stateT1">Karnataka</p>
                <p id="descT1" class="dcs">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
                  <p class="first" id="clgT2">BMSIT</p>
                  <p class="first" id="cityT2">Bangalore</p>
                  <p class="first" id="stateT2">Karnataka</p>
                  <p id="descT2" class="dcs">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
                    <p class="first" id="clgT3">BMSIT</p>
                    <p class="first" id="cityT3">Bangalore</p>
                    <p class="first" id="stateT3">Karnataka</p>
                    <p id="descT3" class="dcs">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                      magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
                  
                
          </div>
        </div>
        <!-- Work-exp card -->
        <div class="card mt-4">
          <div class="card-header" style="background-color: rgb(197, 187, 176);">
            <h3>Work Experience </h3>
          </div>
          <div class="card-body">
            
              
                <p id="workT" class="dcs">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore</p> -->
              
            
          </div>
        </div>
       <!-- projects card -->
        <div class="card mt-4">
            <div class="card-header" style="background-color: rgb(197, 187, 176);">
                <h3>Projects </h3>
              </div>
              <div class="card-body">
                
                  
                     <p class="dcs" id="proT">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore</p> 
                  
                
              </div>
            </div>
            <!-- certification card -->  
            <div class="card mt-4">
                <div class="card-header" style="background-color: rgb(197, 187, 176);">
                    <h3>Certifications </h3>
                  </div>
                  <div class="card-body">
                    
                      
                         <p class="dcs" id="cerT">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore</p> 
                      
                    
                  </div>
        </div>
        <!-- print cv button -->
        <div class="container mt-3 text-center">
          <button onclick="printCV()" class="btn btn-primary" id="printcvbtn">Download CV</button>
        </div>
      </div><!--row-ending div-->
  </main>

       


  <!-- JS-Scripts -->
  <script type="text/javascript" src="index.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="clone-form-td-multiple.js"></script>
</body>
        
    </body>

</html>
<?php


$user_name=getUserField('username');
$email=getUserField('email');
$full_name=getUserField('fullname');

//echo 'Welcome '.$user_name.'<br>';
//echo 'your email id is '.$email.'<br>';
//echo 'your full name is '.$full_name.'<br>';
	 // $file_loc=getUserField('Case_File');
	  //echo ' <a href="'.$file_loc.'">click here to open your file '.$file_loc.' "</a> <br>';


?>

<!----copied from index.html------>


<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SEABED - Software Engineering - Case Based Learning Database</title>

    <!--Google web fonts-->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,300italic,400italic,600,700,600italic,200,200italic' rel='stylesheet' type='text/css'>    
    <link href='http://fonts.googleapis.com/css?family=Play:400,700' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/animate.css">
  
    <!-- font awesome-->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/skillset.css">


    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css"> 
    <link rel="stylesheet" type="text/css" href="css/owl.transitions.css">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.css">

    <link rel="stylesheet" type="text/css" href="style.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <!-- Form -->
  <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed|Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
  
  <!-- Date -->
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
  <!-- Load jQuery from Google's CDN -->
    <!-- Load jQuery UI CSS  -->
    <!--<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />-->
    
    <!-- Load jQuery JS -->
  <!--tagsinput-->
  <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="http://bootstrap-tagsinput.github.io/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">
   
    <!--select button -->
  
    <!-- Load SCRIPT.JS which will create datepicker for input field  -->
     

    <!-- file -->
  
    <!--<link rel="stylesheet" href="runnable.css" />-->


    <script>
function validateForm() {
    var x = document.forms["myForm"]["password"].value;
    var y = document.forms["myForm"]["password_again"].value;
    if (x!=y) {
        alert("password mismatch");
        return false;
    }
}
</script>

<style>
.tooltip {
    background-color:#000;
    border:1px solid #fff;
    padding:10px 15px;
    width:200px;
    display:none;
    color:#fff;
    text-align:left;
    font-size:12px;

 
    /* outline radius for mozilla/firefox only */
    -moz-box-shadow:0 0 10px #000;
    -webkit-box-shadow:0 0 10px #000;
  }
.btn btn-default{
margin-left:80%;
margin-top:20px;
}
.wrapper input[type="text"] {
    position: relative; 
}


input { font-family: 'FontAwesome'; } /* This is for the placeholder */

.wrapper:before {
    font-family: 'FontAwesome';
    color:red;
    position: relative;
    left: -5px;
    content: "\f007";
}

input[type=submit] {
   
    background-color:#3498db;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  width: 10em;  height: 2em;
}
input[type=file] {
   
    background-color: #fff;
    width: 50%;
  height: 40px;
  border: 1px solid #DBDBDB;
  padding-left: 4px;
   margin: 0 auto;
}

input[type=checkbox] {
   
    background-color:white ;
    width: 50%;
  height: 40px;
  border: 1px solid #DBDBDB;
  
}
<!--.button {
  background-color: #004A7F;
  -webkit-border-radius: 10px;
  border-radius: 10px;
  border: none;
  color: #FFFFFF;
  cursor: pointer;
  display: inline-block;
  font-family: Arial;
  font-size: 20px;
  padding: 5px 10px;
  text-align: center;
  text-decoration: none;
}
@-webkit-keyframes glowing {
  0% { background-color: #3498db; -webkit-box-shadow: 0 0 3px #3498db; }
  50% { background-color: #3498db; -webkit-box-shadow: 0 0 40px #3498db; }
  100% { background-color: #3498db; -webkit-box-shadow: 0 0 3px #3498db; }
}

@-moz-keyframes glowing {
  0% { background-color: #3498db; -moz-box-shadow: 0 0 3px #3498db; }
  50% { background-color: #3498db; -moz-box-shadow: 0 0 40px #3498db; }
  100% { background-color: #3498db; -moz-box-shadow: 0 0 3px #3498db; }
}

@-o-keyframes glowing {
  0% { background-color: #3498db; box-shadow: 0 0 3px #3498db; }
  50% { background-color: #3498db; box-shadow: 0 0 40px #3498db; }
  100% { background-color: #3498db; box-shadow: 0 0 3px #3498db; }
}

@keyframes glowing {
  0% { background-color: #3498db; box-shadow: 0 0 3px #3498db; }
  50% { background-color: #3498db; box-shadow: 0 0 40px #3498db; }
  100% { background-color: #3498db; box-shadow: 0 0 3px #3498db; }
}

.button {
  -webkit-animation: glowing 1500ms infinite;
  -moz-animation: glowing 1500ms infinite;
  -o-animation: glowing 1500ms infinite;
  animation: glowing 1500ms infinite;
}


select {
    padding: 2px 5px;
    border: 1px solid #979997;
  margin-left:10px;

    -webkit-appearance: none;
    -moz-appearance: none;
    -ms-appearance: none;
    -o-appearance: none;
    appearance: none;

    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    -ms-border-radius: 4px;
    -o-border-radius: 4px;
    border-radius: 4px;
}-->

select {  text-align-last:center;   }


select.list1{
    margin:40px;
    background: #0099CC;
    color:#fff;
    text-shadow:#fff;
}
#tags{
  float:left;
  border:1px solid #ccc;
  padding:5px;
  font-family:Arial;
}
#tags > span{
  cursor:pointer;
  display:block;
  float:left;
  color:#fff;
  background:#789;
  padding:5px;
  padding-right:25px;
  margin:4px;
}
#tags > span:hover{
  opacity:0.7;
}
#tags > span:after{
 position:absolute;
 content:"×";
 border:1px solid;
 padding:2px 5px;
 margin-left:3px;
 font-size:11px;
}
#tags > input{
  background:#eee;
  border:0;
  margin:4px;
  padding:7px;
  width:auto;
}




</style>  
    
</head>



<body>

<!-- Scroll Top Button -->
<a href="#" class="scrollup">Scroll</a>
 
<!--preloader-->
    <div id="preloader">
      <div id="status">&nbsp;</div>
    </div> 

<header class="main_header">
  <div class="row">
    <div class="content"> <a class="logo" href="#">SEABED</a>
      <div class="mobile-toggle"> <span></span> <span></span> <span></span></div>
      <nav>
        <ul class="main_menu">
          
          <li style="color:blue"><?php echo $user_name ?></li>
          <li><a href=".hero">HOME</a></li>
          <li><a href=".service_area">FEATURES</a></li>
          <li><a href=".skill_area">APPROACH</a></li>
          <li><a href=".blog_area">TEAM</a></li>
          <li><a href=".contact_area">PARTNERSHIP</a></li>
          <li ><a href="logout.php" style="color:blue">Log Out</a></li>
          <!--<li><a href=".testimonial_area">Testimonial</a></li>-->
          <!--<li><a href=".contact_area">Contact</a></li>  -->                  
        </ul>
      </nav>
    </div>
  </div>
  <!-- END row --> 
</header>

<div class="carousel fade-carousel slide" data-ride="carousel" data-interval="2000" id="bs-carousel">
  <!-- Overlay -->
  <div class="overlay"></div>

  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
    <li data-target="#bs-carousel" data-slide-to="1"></li>
    <li data-target="#bs-carousel" data-slide-to="2"></li>
  </ol>
  
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item slides active">
      <div class="slide-1"></div>
      <div class="hero">
        <hgroup>
            <h1>Software <span>Engineering</span></h1>        
            <h3>Case Database - Practice Oriented</h3>
        </hgroup>
        <!--<button class="btn btn-hero btn-lg" role="button">See all features</button>-->
      </div>
    </div>
    <div class="item slides">
      <div class="slide-2"></div>
      <div class="hero">        
        <hgroup>
            <h1>Case Based <span>Learning</span></h1>        
            <h3>Real World Challenges as Case Studies</h3>
        </hgroup>       
       <!--<button class="btn btn-hero btn-lg" role="button">See all features</button>-->
      </div>
    </div>
    <div class="item slides">
      <div class="slide-3"></div>
      <div class="hero">        
        <hgroup>
            <h1>SEABED <span>Community</span></h1>        
            <h3>Submit, Search, Collaborate, Share</h3>
        </hgroup>
        <!--<button class="btn btn-hero btn-lg" role="button">See all features</button>-->
      </div>
    </div>
  </div> 
</div>
<!--
<div class="service_area">
  <div class="container">
    <div class="row">
      <div class="service_section wow bounceInLeft animated">
          <div class="col-md-3">
            <div class="single_service">        
              <div class="ico"><i class="fa fa-mobile"></i></div>
              <h2>Fully responsive</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore</p>
            </div>
          </div>

          <div class="col-md-3">
            <div class="single_service">        
              <div class="ico"><i class="fa fa-code"></i></div>          
              <h2>Customizable file</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore</p>
            </div>
          </div>

          <div class="col-md-3">
            <div class="single_service">        
              <div class="ico"><i class="fa fa-paint-brush"></i></div>         
              <h2>Superb design</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore</p>
            </div>
          </div>

          <div class="col-md-3">
            <div class="single_service">        
              <div class="ico"><i class="fa fa-heart-o"></i></div>        
              <h2>Made with love</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore</p>
            </div>
          </div>

      </div>
    </div>
  </div>
</div>--><!-- service area end   -->
<!--
<div class="work_area">
  <div class="container">
    <div class="row">  
      <div class="work_section">
        <h1 class="wow bounceInLeft">Functional <span>work Process</span></h1>
          <div class="col-md-12 wow bounceInRight animated">
            <div class="bs-example">
              <ul class="nav nav-tabs">
                  <li class="active"><a data-toggle="tab" href="#sectionA"><i class="fa fa-lightbulb-o"></i></a></li>
                  <li><a data-toggle="tab" href="#sectionB"><i class="fa fa-compass"></i></a></li>
                  <li><a data-toggle="tab" href="#sectionC"><i class="fa fa-cogs"></i></a></li>
                  <li><a data-toggle="tab" href="#sectionD"><i class="fa fa-paper-plane"></i></a></li>
                  <li><a data-toggle="tab" href="#sectionE"><i class="fa fa-line-chart"></i></a></li>
              </ul>
              <div class="tab-content">
                  <div id="sectionA" class="tab-pane fade in active">
                      <h3>Strategy</h3>
                      <p>Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui. Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth.</p>
                  </div>
                  <div id="sectionB" class="tab-pane fade">
                      <h3>Plan</h3>
                      <p>Vestibulum nec erat eu nulla rhoncus fringilla ut non neque. Vivamus nibh urna, ornare id gravida ut, mollis a magna. Aliquam porttitor condimentum nisi, eu viverra ipsum porta ut. Nam hendrerit bibendum turpis, sed molestie mi fermentum id. Aenean volutpat velit sem. Sed consequat ante in rutrum convallis. Nunc facilisis leo at faucibus adipiscing.</p>
                  </div>
                  <div id="sectionC" class="tab-pane fade">
                      <h3>Mechanism</h3>
                      <p>Vestibulum nec erat eu nulla rhoncus fringilla ut non neque. Vivamus nibh urna, ornare id gravida ut, mollis a magna. Aliquam porttitor condimentum nisi, eu viverra ipsum porta ut. Nam hendrerit bibendum turpis, sed molestie mi fermentum id. Aenean volutpat velit sem. Sed consequat ante in rutrum convallis. Nunc facilisis leo at faucibus adipiscing.</p>
                  </div>
                  <div id="sectionD" class="tab-pane fade">
                      <h3>Title</h3>
                      <p>Vestibulum nec erat eu nulla rhoncus fringilla ut non neque. Vivamus nibh urna, ornare id gravida ut, mollis a magna. Aliquam porttitor condimentum nisi, eu viverra ipsum porta ut. Nam hendrerit bibendum turpis, sed molestie mi fermentum id. Aenean volutpat velit sem. Sed consequat ante in rutrum convallis. Nunc facilisis leo at faucibus adipiscing.</p>
                  </div>
                  <div id="sectionE" class="tab-pane fade">
                      <h3>Workflow</h3>
                      <p>Vestibulum nec erat eu nulla rhoncus fringilla ut non neque. Vivamus nibh urna, ornare id gravida ut, mollis a magna. Aliquam porttitor condimentum nisi, eu viverra ipsum porta ut. Nam hendrerit bibendum turpis, sed molestie mi fermentum id. Aenean volutpat velit sem. Sed consequat ante in rutrum convallis. Nunc facilisis leo at faucibus adipiscing.</p>
                  </div>                                                
              </div>
            </div>
          </div>
      </div>
    </div>  
  </div>    
</div> --><!-- work area end   -->
      


<div class="getit_area">
  <div class="container">
    <div class="row">
      <div class="getit_section">
        <h1>Software Engineering - Case Based Learning Database</h1>
      </div>  
    </div>
  </div>
</div><!--  getit area end -->

<div class="service_area">
  <div class="container">
    <div class="row">
      <div class="service_section wow bounceInLeft animated">
          <div class="col-md-3">
            <div class="single_service">        
              <div class="ico"><i class="fa fa-cloud-upload"></i></div>
              <h2>Case Submission</h2>
              <p>Submit real-world examples and scenarios as case-studies and contribute towards the SEABED knowledge-base</p>
            </div>
          </div>

          <div class="col-md-3">
            <div class="single_service">        
              <div class="ico"><i class="fa fa-search"></i></div>          
              <h2>Faceted Search</h2>
              <p>Search SEABED collection based on the learning goals, class size, topic of discussion and number of class meetings</p>
            </div>
          </div>

          <div class="col-md-3">
            <div class="single_service">        
              <div class="ico"><i class="fa fa-comment"></i></div>         
              <h2>Case Evolution</h2>
              <p>Improve existing cases by providing feedback. Like and follow cases. Comment, Share, Revise</p>
            </div>
          </div>

          <div class="col-md-3">
            <div class="single_service">        
              <div class="ico"><i class="fa fa-envelope"></i></div>        
              <h2>Open Feedback</h2>
              <p>Provide direct and open feedback to the founding team of SEABED on how to improve the SEABED</p>
            </div>
          </div>

      </div>
    </div>
  </div>
</div> <!-- service area end   -->

<div class="skill_area">
  <div class="container">
    <div class="row">
      <div class="skill_section">
  
          <div class="col-md-4">
            
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                  <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Case-Based Learning
                    </a>
                  </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                  <div class="panel-body">
                    Case-Based Learning (CBL) is a teaching methodology consisting of reading, and discussing real-world problems and scenarios in the form of case-studies. A case is on the form of a story and triggers brainstorming between participations, enables decision making and exploration of alternate solutions. The instructor plays the role of a facilitator and students work in groups collaborative solving the problem.
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo">
                  <h4 class="panel-title">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Our Motivation
                    </a>
                  </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                  <div class="panel-body">
                    The founding team of SEABED consists of researchers, practitioners and educators in software engineering. Our motivation was to create the first case-based learning collection in the area of software engineering. The SEABED web application and resources are free and open-source. The entire source code is publicly available in GitHub (repository: ashishsureka/seabed) for anyone to download and extend.
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingThree">
                  <h4 class="panel-title">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Open Feedback
                    </a>
                  </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                  <div class="panel-body">
                    We believe that an open and continuous user feedback is required to evolve SEABED and improve it. Please send your suggestions and feedback to Ashish Sureka (ashish.sureka@in.abb.com) and Paramvir Singh (singhpv@nitj.ac.in). Please feel free to send your feedback on any aspect of SEABED: bugs, user experience and feature requests. We appreciate your time in using our tool and providing feedback. 
                  </div>
                </div>
              </div>
            </div>
            
          </div>
    
     
      <!--right box-->
      
      
       <!--<div class="col-md-4">
            
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="heading1">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapse1">
                      Case-Based Learning
                    </a>
                  </h4>
                </div>
                <div id="collapse1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading1">
                  <div class="panel-body">
                    Case-Based Learning (CBL) is a teaching methodology consisting of reading, analyzing and discussing real-world problems and scenarios in the form of case-studies. A case is on the form of a story and triggers brainstorming between participations, enables decision making and exploration of alternate solutions. The instructor plays the role of a facilitator and students work in groups collaborative solving the problem.
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="heading2">
                  <h4 class="panel-title">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="false" aria-controls="collapse2">
                      Our Motivation
                    </a>
                  </h4>
                </div>
                <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
                  <div class="panel-body">
                    The founding team of SEABED consists of researchers, practitioners and educators in software engineering. Our motivation was to create the first case-based learning collection in the area of software engineering. The SEABED web application and resources are free and open-source. The entire source code is publicly available in GitHub (repository: ashishsureka/seabed) for anyone to download and extend.
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="heading3">
                  <h4 class="panel-title">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="false" aria-controls="collapse3">
                      Open Feedback
                    </a>
                  </h4>
                </div>
                <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                  <div class="panel-body">
                    We believe that an open and continuous user feedback is required to evolve SEABED and improve it. Please send your suggestions and feedback to Ashish Sureka (ashish.sureka@in.abb.com) and Paramvir Singh (singhpv@nitj.ac.in). Please feel free to send your feedback on any aspect of SEABED: bugs, user experience and feature requests. We appreciate your time in using our tool and providing feedback. 
                  </div>
                </div>
              </div>
            </div>
            
          </div>-->
    
       <div class="container">
     
            
   <div class="col-md-4">
  <div class="panel-group" id="accordion_One"role="tablist" aria-multiselectable="true">
    <div class="panel panel-default">
      <div class="panel-heading"role="tab" id="heading1">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion_One" href="#collapse1"aria-expanded="true" aria-controls="collapse1">Case Submission</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading1">
        <div class="panel-body">SEABED has a case submission form using which a user can submit a case-study. The form requires user to provide information such as title, abstract, keywords, author names and affiliations and upload the case as a PDF file. The case-study undergoes a review process to ensure quality of knowledge-base. The case-study is added to the SEABED database once it is approved by the moderators.
    </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading"role="tab" id="heading2">
        <h4 class="panel-title">
          <a class="collapsed" data-toggle="collapse" data-parent="#accordion_One" href="#collapse2"aria-expanded="false" aria-controls="collapse2">Faceted Search</a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse"role="tabpanel" aria-labelledby="heading2">
        <div class="panel-body">Users can search case-studies in SEABED database based on fields such as topic, author, keywords, time period (submission date) and presence of certain terms in the title and abstract. Users can also find most recent cases, most commented and most popular cases. Users can see all the versions of a particular case along with the differences in various revisions. 
    </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading"role="tab" id="heading3">
        <h4 class="panel-title">
          <a class="collapsed" data-toggle="collapse" data-parent="#accordion_One" href="#collapse3"aria-expanded="false" aria-controls="collapse3">Case Evolution</a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse"role="tabpanel" aria-labelledby="heading3">
        <div class="panel-body">SEABED allows users to comment on existing cases, follow and up-vote. We encourage users to share their implementation experiences and provide comments on how to improve the cases and make them better. The authors of the cases can then revise their cases or create different flavors of the same case based on the inputs received. Hence there is a process of continuous case improvement.</div>
      </div>
    </div>
  </div>

</div>
<!-- example-->

    
      
      
      
      
      <!--
      
          <div class="col-md-8">
              <h2 class="wow bounceInLeft animated">These are our <span>Fantastic skills</span></h2>
              <p class="skill_text wow bounceInLeft animated">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim</p>

              <main>
              <h2 id="skills wow bounceInRight animated">The Skills we have</h2>
              <div class="section skills">
              <div id="skillset" class="column"> </div>
              </div>
              </main>
          </div>-->
      </div>
      </div>
    </div>
  </div>
</div> <!-- skill area end-->


<br/>
<!-- form area-->
<div class="form_area">
  <div class="container">
    <div class="row">
      <div class="contact_section">
          <h1>CASE <span>SUBMISSION</span></h1>
          <!--<p>YOUR CONTRIBUTIONS ARE IMPORTANT TO MAKE THIS INITIATIVE A SUCCESS</p>-->

                    <!--<div class="col-md-4">-->
                        <div class="contact_form">
                        <fieldset id="contact_form">
                            <div id="result">
              <div id="form" class="result">
              <form id="data">
   <div id="inputs">
   <div class="col-sm-6">
   <input type="text"  name="title"  placeholder="&#xf1fc;  Title"  title="Please enter the title of the case" required><br/><br/>
  <!-- <input type="text" name="author"  placeholder="&#xf0c0;  Author(s)" title="Please enter the name of author(s)involved" required><br /> <br/>-->
   
<input  name="date" id="date" placeholder="&#xf073;  Submission Date" title="Please enter the date of case submission" required/><br/><br/>
 <div class="my-form">

 <p class="text-box" >
            
            <input type="text" name="boxes[]" value="" id="box1" style="width:100px;margin-left: 50px" placeholder="&#xf0c0;  Author(s)" title="Please enter the name of author(s)involved" required />
            <input type="email" name="boxes[]" value="" id="email1" style="width:120px;margin-left: 15px" placeholder="&#xf0e0;  Email Address" title="Please enter the email id of the author(s)" required />
             <input type="text" name="boxes[]" value="" id="af1" style="width:100px;margin-left: 15px" placeholder="Affiliation" title="Please provide author's affiliation" required />
      
            <a class="add-box" href="#">Add More</a>
        </p>  </div> <br/>
 <!--
 <p class="text-box">
          
      <div class="row">
    <div class="col-sm-4">  <input type="text" name="boxes[]" value="" id="box1" placeholder="&#xf0c0;  Author(s)" style="width:100px " title="Please enter the name of author(s)involved" required /> </div>
      <div class="col-sm-4"><input type="email" name="boxes[]" value="" id="email1" placeholder="&#xf0e0; Email Address" style="width:120px" title="Please enter the email id of the author(s)" required /></div>
    <div class="col-sm-4" style="width:150px"><input type="text"  name="boxes[]" id="affiliation1"  placeholder="&#xf0c0; Affiliation" style="width:100px;margin-left:0px;" title="Please provide author affiliation" required> <a class="add-box" href="#">Add More</a></div>
           
            </div>
        </p> <br/>
        -->
  
         
<div class="row">
  <div class="col-sm-6" style="background-color: white; border: 1px solid #DBDBDB;font-size:15px;color:gray; margin-left: 65px;text-align:center;margin-right: 20px;width: 250px;height:40px;font-family: 'FontAwesome';padding-top: 5px">Provide right to publish on seabed</div>
  <div class="col-sm-6" style="width:80px;padding-right: 80px;height:35px;padding-left:10px;"><input id="checkB" type="checkbox" name='copyright' value="yes" title="Copyright to publish on seabed" style="height:30px;background-color: white; width:80px"></div>
</div>


 

 </div>
   <!--<input type="date" name="date"  placeholder="&#xf272;  Submission date" title="Please enter the date of submission of the case" required><br /><br/>-->
   <div class="col-sm-6">
   <input type="text" list="fields" name="fields" placeholder="&#xf03a;  Category" title="Please select the category of the case" required />
  <datalist id="fields" name="fields">
  <option>Requirements</option>
  <option>Design</option>
  <option>Construction</option>
  <option>Testing</option>
  <option>Configuration Management</option>
  <option>Process</option>
  <option>Quality</option>
  <option>Economics</option>
  </datalist> <br/> <br/>
   <!--<input type="email" name="email" placeholder="&#xf0e0;  Email Address" title="Please enter the email id of the author(s)" required><br /><br/>-->
    <input type="textarea" name="abstract" rows="4" cols="50" maxlength="150" placeholder="&#xf1fc; abstract" title=" Please enter 150 character abstract for the case " required> <br/> <br/>
    
   <input  type="file" name="profileImg"  id="profileImg"  placeholder="file" title="Please provide a PDF file of the case. Max size 1MB." required><br />
  <!-- <input type="text" value="design,testing" id="tagsinputbox" name="tagsinputbox"data-role="tagsinput"placeholder="&#xf022;  Key Terms" title="Please enter the key terms of the case" required></input> 
   <input type="checkbox" name="copyright" title="would you like to give us right to publish this case on seabed" >  -->
   
   <div class="row">
  <div class="col-sm-6" style="padding-left: 80px;"><img src="generate.php"></img></div>
  <div class="col-sm-6" style="padding-right: 10px; width:150"><input id="captcha" type="text" name='secure' maxlength="4" title="Please enter the digits shown in the image" style="width: 120px;margin-right: 120px;height:40px" placeholder="Captcha"></div>
</div>

<br/>
<br/>
   
   </div>
   <br/>
  
   <input type="submit" value="Submit" title="Please Submit after checking all the fields">
    <!--<button type="submit" class="button">Submit</button>-->
   
  </div>
</form>
</div>
</div>
                        </fieldset>                           
                        </div>
                    <!--</div>-->
                   
      </div>
    </div>
  </div> 
</div> <!-- form area end-->












<!--
<div class="portfolio_area">
  <div class="container">
      <div class="portfolio_section">
          <div class="col-md-12 portfolio_top">
              <h1>Portfolio</h1>
              <p>OUR TEAM INCLUDES GREAT THINKERS. YOU WOULD LOVE TO WORK WITH THEM AS THEY ARE JUST AMAZING PEOPLE.</p>
          </div>  
      </div>

    <ul id="filters" class="clearfix">
      <li><span class="filter active" data-filter="app card icon logos web">All</span></li>
      <li><span class="filter" data-filter="app">App</span></li>
      <li><span class="filter" data-filter="card">Card</span></li>
      <li><span class="filter" data-filter="icon">Icon</span></li>
      <li><span class="filter" data-filter="logos">Logo</span></li>
      <li><span class="filter" data-filter="web">Web</span></li>
    </ul>

    <div id="portfoliolist">
      
      <div class="portfolio logos" data-cat="logos">
        <div class="portfolio-wrapper">       
          <img src="img/portfolios/logo/5.jpg" alt="" />
          <div class="label">
            <div class="label-text">
              <a class="text-title">Bird Document</a>
              <span class="text-category">Logo</span>
            </div>
            <div class="label-bg"></div>
          </div>
        </div>
      </div>        

      <div class="portfolio app" data-cat="app">
        <div class="portfolio-wrapper">     
          <img src="img/portfolios/app/1.jpg" alt="" />
          <div class="label">
            <div class="label-text">
              <a class="text-title">Visual Infography</a>
              <span class="text-category">APP</span>
            </div>
            <div class="label-bg"></div>
          </div>
        </div>
      </div>    
      
      <div class="portfolio web" data-cat="web">
        <div class="portfolio-wrapper">           
          <img src="img/portfolios/web/4.jpg" alt="" />
          <div class="label">
            <div class="label-text">
              <a class="text-title">Sonor's Design</a>
              <span class="text-category">Web design</span>
            </div>
            <div class="label-bg"></div>
          </div>
        </div>
      </div>        
      
      <div class="portfolio card" data-cat="card">
        <div class="portfolio-wrapper">     
          <img src="img/portfolios/card/1.jpg" alt="" />
          <div class="label">
            <div class="label-text">
              <a class="text-title">Typography Company</a>
              <span class="text-category">Business card</span>
            </div>
            <div class="label-bg"></div>
          </div>
        </div>
      </div>  
            
      <div class="portfolio app" data-cat="app">
        <div class="portfolio-wrapper">
          <img src="img/portfolios/app/3.jpg" alt="" />
          <div class="label">
            <div class="label-text">
              <a class="text-title">Weatherette</a>
              <span class="text-category">APP</span>
            </div>
            <div class="label-bg"></div>
          </div>
        </div>
      </div>      
      
      <div class="portfolio card" data-cat="card">
        <div class="portfolio-wrapper">     
          <img src="img/portfolios/card/4.jpg" alt="" />
          <div class="label">
            <div class="label-text">
              <a class="text-title">BMF</a>
              <span class="text-category">Business card</span>
            </div>
            <div class="label-bg"></div>
          </div>
        </div>
      </div>  
      
      <div class="portfolio card" data-cat="card">
        <div class="portfolio-wrapper">     
          <img src="img/portfolios/card/5.jpg" alt="" />
          <div class="label">
            <div class="label-text">
              <a class="text-title">Techlion</a>
              <span class="text-category">Business card</span>
            </div>
            <div class="label-bg"></div>
          </div>
        </div>
      </div>  
      
      <div class="portfolio logos" data-cat="logos">
        <div class="portfolio-wrapper">     
          <img src="img/portfolios/logo/1.jpg" alt="" />
          <div class="label">
            <div class="label-text">
              <a class="text-title">KittyPic</a>
              <span class="text-category">Logo</span>
            </div>
            <div class="label-bg"></div>
          </div>
        </div>
      </div>                                                                              
      
      <div class="portfolio app" data-cat="app">
        <div class="portfolio-wrapper">     
          <img src="img/portfolios/app/2.jpg" alt="" />
          <div class="label">
            <div class="label-text">
              <a class="text-title">Graph Plotting</a>
              <span class="text-category">APP</span>
            </div>
            <div class="label-bg"></div>
          </div>
        </div>
      </div>                            
      
      <div class="portfolio card" data-cat="card">
        <div class="portfolio-wrapper">     
          <img src="img/portfolios/card/2.jpg" alt="" />
          <div class="label">
            <div class="label-text">
              <a class="text-title">QR Quick Response</a>
              <span class="text-category">Business card</span>
            </div>
            <div class="label-bg"></div>
          </div>
        </div>
      </div>        

      <div class="portfolio logos" data-cat="logos">
        <div class="portfolio-wrapper">     
          <img src="img/portfolios/logo/6.jpg" alt="" />
          <div class="label">
            <div class="label-text">
              <a class="text-title">Mobi Sock</a>
              <span class="text-category">Logo</span>
            </div>
            <div class="label-bg"></div>
          </div>
        </div>
      </div>                                  

      <div class="portfolio logos" data-cat="logos">
        <div class="portfolio-wrapper">     
          <img src="img/portfolios/logo/7.jpg" alt="" />
          <div class="label">
            <div class="label-text">
              <a class="text-title">Village Community Church</a>
              <span class="text-category">Logo</span>
            </div>
            <div class="label-bg"></div>
          </div>
        </div>
      </div>                          
      
      <div class="portfolio icon" data-cat="icon">
        <div class="portfolio-wrapper">     
          <img src="img/portfolios/icon/4.jpg" alt="" />
          <div class="label">
            <div class="label-text">
              <a class="text-title">Domino's Pizza</a>
              <span class="text-category">Icon</span>
            </div>
            <div class="label-bg"></div>
          </div>
        </div>
      </div>              

      <div class="portfolio web" data-cat="web">
        <div class="portfolio-wrapper">           
          <img src="img/portfolios/web/3.jpg" alt="" />
          <div class="label">
            <div class="label-text">
              <a class="text-title">Backend Admin</a>
              <span class="text-category">Web design</span>
            </div>
            <div class="label-bg"></div>
          </div>
        </div>
      </div>                                                

      <div class="portfolio icon" data-cat="icon">
        <div class="portfolio-wrapper">     
          <img src="img/portfolios/icon/1.jpg" alt="" />
          <div class="label">
            <div class="label-text">
              <a class="text-title">Instagram</a>
              <span class="text-category">Icon</span>
            </div>
            <div class="label-bg"></div>
          </div>
        </div>
      </div>        
      
      <div class="portfolio web" data-cat="web">
        <div class="portfolio-wrapper">           
          <img src="img/portfolios/web/2.jpg" alt="" />
          <div class="label">
            <div class="label-text">
              <a class="text-title">Student Guide</a>
              <span class="text-category">Web design</span>
            </div>
            <div class="label-bg"></div>
          </div>
        </div>
      </div>                                  

      <div class="portfolio icon" data-cat="icon">
        <div class="portfolio-wrapper">
          <img src="img/portfolios/icon/2.jpg" alt="" />
          <div class="label">
            <div class="label-text">
              <a class="text-title">Scoccer</a>
              <span class="text-category">Icon</span>
            </div>
            <div class="label-bg"></div>
          </div>
        </div>
      </div>                                                                                                                                

      <div class="portfolio icon" data-cat="icon">
        <div class="portfolio-wrapper">           
          <img src="img/portfolios/icon/5.jpg" alt="" />
          <div class="label">
            <div class="label-text">
              <a class="text-title">3D Map</a>
              <span class="text-category">Icon</span>
            </div>
            <div class="label-bg"></div>
          </div>
        </div>
      </div>      
      
      <div class="portfolio web" data-cat="web">
        <div class="portfolio-wrapper">           
          <img src="img/portfolios/web/1.jpg" alt="" />
          <div class="label">
            <div class="label-text">
              <a class="text-title">Note</a>
              <span class="text-category">Web design</span>
            </div>
            <div class="label-bg"></div>
          </div>
        </div>
      </div>                  
      
      <div class="portfolio logos" data-cat="logos">
        <div class="portfolio-wrapper">     
          <img src="img/portfolios/logo/3.jpg" alt="" />
          <div class="label">
            <div class="label-text">
              <a class="text-title">Native Designers</a>
              <span class="text-category">Logo</span>
            </div>
            <div class="label-bg"></div>
          </div>
        </div>
      </div>                                  

      <div class="portfolio logos" data-cat="logos">
        <div class="portfolio-wrapper">     
          <img src="img/portfolios/logo/4.jpg" alt="" />
          <div class="label">
            <div class="label-text">
              <a class="text-title">Bookworm</a>
              <span class="text-category">Logo</span>
            </div>
            <div class="label-bg"></div>
          </div>
        </div>
      </div>                                                        
      
      <div class="portfolio icon" data-cat="icon">
        <div class="portfolio-wrapper">     
          <img src="img/portfolios/icon/3.jpg" alt="" />
          <div class="label">
            <div class="label-text">
              <a class="text-title">Sandwich</a>
              <span class="text-category">Icon</span>
            </div>
            <div class="label-bg"></div>
          </div>
        </div>
      </div>                                                
      
      <div class="portfolio card" data-cat="card">
        <div class="portfolio-wrapper">     
          <img src="img/portfolios/card/3.jpg" alt="" />
          <div class="label">
            <div class="label-text">
              <a class="text-title">Reality</a>
              <span class="text-category">Business card</span>
            </div>
            <div class="label-bg"></div>
          </div>
        </div>
      </div>  

      <div class="portfolio logos" data-cat="logos">
        <div class="portfolio-wrapper">     
          <img src="img/portfolios/logo/2.jpg" alt="" />
          <div class="label">
            <div class="label-text">
              <a class="text-title">Speciallisterne</a>
              <span class="text-category">Logo</span>
            </div>
            <div class="label-bg"></div>
          </div>
        </div>
      </div>        
                    
      
    </div>
    
  </div>
</div>--><!-- portfolio area end   -->
<!--
<div class="skill_area">
  <div class="container">
    <div class="row">
      <div class="skill_section">
          <div class="col-md-4">
            
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Why choose us?
                    </a>
                  </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                  <div class="panel-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo">
                  <h4 class="panel-title">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Our History
                    </a>
                  </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                  <div class="panel-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingThree">
                  <h4 class="panel-title">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Behind Us
                    </a>
                  </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                  <div class="panel-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                  </div>
                </div>
              </div>
            </div>            
          </div>
          <div class="col-md-8">
              <h2 class="wow bounceInLeft animated">These are our <span>Fantastic skills</span></h2>
              <p class="skill_text wow bounceInLeft animated">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim</p>

              <main>
              <h2 id="skills wow bounceInRight animated">The Skills we have</h2>
              <div class="section skills">
              <div id="skillset" class="column"> </div>
              </div>
              </main>
          </div>
      </div>
    </div>
  </div>
</div>--><!-- skill area end-->

<div class="portfolio_area">
  <div class="container">
      <div class="portfolio_section">
          <div class="col-md-12 portfolio_top">
       
             
         <h1>CASE <span>COLLECTION </span>  </h1>
       
              <!--<p>PLEASE FIND THE GREAT CONTRIBUTIONS TO SEABED. WE ARE HERE FOR SERVING THE SOCIETY.</p>-->
          </div>  
      </div>

    <ul id="filters" class="clearfix">
      <li><span class="filter active" data-filter="req design construct test maintain configure process quality">All</span></li>
      <li><span class="filter" data-filter="req">Requirements</span></li>
      <li><span class="filter" data-filter="design">Design</span></li>
      <li><span class="filter" data-filter="construct">Construction</span></li>
    <li><span class="filter" data-filter="test">Testing</span></li>
    <li><span class="filter" data-filter="maintain">Maintenance</span></li>
    <li><span class="filter" data-filter="configure">Configuration Management</span></li>
    <li><span class="filter" data-filter="process">Process and Framework</span></li>
    <li><span class="filter" data-filter="quality">Quality</span></li>
  <!--  <li><span class="filter" data-filter="eco">Economics</span></li>-->
    

  
      <!--<li><span class="filter" data-filter="logos">Logo</span></li>
      <li><span class="filter" data-filter="web">Web</span></li>-->
    </ul>

    <div id="portfoliolist">
      
      <!--<div class="portfolio logos" data-cat="Robotics">
        <div class="portfolio-wrapper">
         <a href="http://www.cameronmoll.com/about/cameronmoll_bio.pdf">    
          <img src="img/portfolios/logo/singlepage.png" alt="" /></a>
          <div class="label">
            <div class="label-text">
              <a class="text-title">YuMi Studio</a>
              <span class="text-category">ABB</span>
            </div>
            <div class="label-bg"></div>
          </div>
        </div>
      </div> -->
    
  <!--  <div class="portfolio req" data-cat="Requirements">
        <div class="portfolio-wrapper">
         <a href="http://seabed.in">    
          <img src="img/portfolios/demo.png" alt="" /></a>
          <div class="label">
            <div class="label-text">
              <a class="text-title"></a><br/>
          <a class="text-title"></a>-->
              <!--<span class="text-category">ABB</span>-->
          <!--  </div>
            <div class="label-bg"></div>
          </div>
        </div>
      </div>-->
  
   <div class="portfolio req" data-cat="Requirements">
        <div class="portfolio-wrapper">   
    <a href="./case-study/Empty-Case-Study.pdf" target="_blank">        
          <img src="img/Empty-Case-Study.png"  alt="" /> </a>
          <div class="label">
            <div class="label-text">
              <a class="text-title"></a>
              <span class="text-category">Empty Case Study</span>
            </div>
            <div class="label-bg"></div>
          </div>
        </div>
      </div>    

      <div class="portfolio design" data-cat="Design">
        <div class="portfolio-wrapper">   
    <a href="./case-study/Design-All-is-Well-Case.pdf" target="_blank">       
          <img src="img/Design-All-is-Well-Case.png"  alt="" /> </a>
          <div class="label">
            <div class="label-text">
              <a class="text-title"></a>
              <span class="text-category">All Is Well (AIW) Pharmacy Incorporation</span>
            </div>
            <div class="label-bg"></div>
          </div>
        </div>
      </div>    
       
     <div class="portfolio construct" data-cat="Construction">
        <div class="portfolio-wrapper">   
    <a href="./case-study/Empty-Case-Study.pdf" target="_blank">        
          <img src="img/Empty-Case-Study.png"  alt="" /> </a>
          <div class="label">
            <div class="label-text">
              <a class="text-title"></a>
              <span class="text-category">Empty Case Study</span>
            </div>
            <div class="label-bg"></div>
          </div>
        </div>
      </div>
    
      <div class="portfolio test" data-cat="Testing">
        <div class="portfolio-wrapper">   
    <a href="./case-study/Empty-Case-Study.pdf" target="_blank">        
          <img src="img/Empty-Case-Study.png"  alt="" /> </a>
          <div class="label">
            <div class="label-text">
              <a class="text-title"></a>
              <span class="text-category">Empty Case Study</span>
            </div>
            <div class="label-bg"></div>
          </div>
        </div>
      </div>
    
    
      <div class="portfolio maintain" data-cat="Maintenance">
        <div class="portfolio-wrapper">   
    <a href="./case-study/Empty-Case-Study.pdf" target="_blank">        
          <img src="img/Empty-Case-Study.png"  alt="" /> </a>
          <div class="label">
            <div class="label-text">
              <a class="text-title"></a>
              <span class="text-category">Empty Case Study</span>
            </div>
            <div class="label-bg"></div>
          </div>
        </div>
      </div>
    
    
      <div class="portfolio configure" data-cat="Configuration Management">
        <div class="portfolio-wrapper">   
    <a href="./case-study/Empty-Case-Study.pdf" target="_blank">        
          <img src="img/Empty-Case-Study.png"  alt="" /> </a>
          <div class="label">
            <div class="label-text">
              <a class="text-title"></a>
              <span class="text-category">Empty Case Study</span>
            </div>
            <div class="label-bg"></div>
          </div>
        </div>
      </div>
    
    <div class="portfolio process" data-cat="Process">
        <div class="portfolio-wrapper">   
    <a href="./case-study/Empty-Case-Study.pdf" target="_blank">        
          <img src="img/Empty-Case-Study.png"  alt="" /> </a>
          <div class="label">
            <div class="label-text">
              <a class="text-title"></a>
              <span class="text-category">Empty Case Study</span>
            </div>
            <div class="label-bg"></div>
          </div>
        </div>
      </div>
    
    <div class="portfolio quality" data-cat="Quality">
        <div class="portfolio-wrapper">   
    <a href="./case-study/Empty-Case-Study.pdf" target="_blank">        
          <img src="img/Empty-Case-Study.png"  alt="" /> </a>
          <div class="label">
            <div class="label-text">
              <a class="text-title"></a>
              <span class="text-category">Empty Case Study</span>
            </div>
            <div class="label-bg"></div>
          </div>
        </div>
      </div>
    
  <!--  <div class="portfolio eco" data-cat="Economics">
        <div class="portfolio-wrapper">   
    <a href="./case-study/Empty-Case-Study.pdf">        
          <img src="img/Empty-Case-Study.png"  alt="" /> </a>
          <div class="label">
            <div class="label-text">
              <a class="text-title"></a>
              <span class="text-category">Empty Case Study</span>
            </div>
            <div class="label-bg"></div>
          </div>
        </div>
      </div>-->
    
     <!-- <div class="portfolio test" data-cat="Testing">
        <div class="portfolio-wrapper">  
    <a href="seabed.in">      
          <img src="img/portfolios/demo.png" alt="" /> </a>
          <div class="label">
            <div class="label-text">
              <a class="text-title"></a><br/>
        <a class="text-title"></a>-->
              <!--<span class="text-category">Yukti Mehta</span>-->
           <!-- </div>
            <div class="label-bg"></div>
          </div>
        </div>
      </div>   -->     
      
      <!--<div class="portfolio card" data-cat="card">
        <div class="portfolio-wrapper">     
          <img src="img/portfolios/card/1.jpg" alt="" />
          <div class="label">
            <div class="label-text">
              <a class="text-title">Typography Company</a>
              <span class="text-category">Business card</span>
            </div>
            <div class="label-bg"></div>
          </div>
        </div>
      </div>  
            
      <div class="portfolio app" data-cat="app">
        <div class="portfolio-wrapper">
          <img src="img/portfolios/app/3.jpg" alt="" />
          <div class="label">
            <div class="label-text">
              <a class="text-title">Weatherette</a>
              <span class="text-category">APP</span>
            </div>
            <div class="label-bg"></div>
          </div>
        </div>
      </div>      
      
      <div class="portfolio card" data-cat="card">
        <div class="portfolio-wrapper">     
          <img src="img/portfolios/card/4.jpg" alt="" />
          <div class="label">
            <div class="label-text">
              <a class="text-title">BMF</a>
              <span class="text-category">Business card</span>
            </div>
            <div class="label-bg"></div>
          </div>
        </div>
      </div>  
      
      <div class="portfolio card" data-cat="card">
        <div class="portfolio-wrapper">     
          <img src="img/portfolios/card/5.jpg" alt="" />
          <div class="label">
            <div class="label-text">
              <a class="text-title">Techlion</a>
              <span class="text-category">Business card</span>
            </div>
            <div class="label-bg"></div>
          </div>
        </div>
      </div>  
      
      <div class="portfolio logos" data-cat="logos">
        <div class="portfolio-wrapper">     
          <img src="img/portfolios/logo/1.jpg" alt="" />
          <div class="label">
            <div class="label-text">
              <a class="text-title">KittyPic</a>
              <span class="text-category">Logo</span>
            </div>
            <div class="label-bg"></div>
          </div>
        </div>
      </div>                                                                              
      
      <div class="portfolio app" data-cat="app">
        <div class="portfolio-wrapper">     
          <img src="img/portfolios/app/2.jpg" alt="" />
          <div class="label">
            <div class="label-text">
              <a class="text-title">Graph Plotting</a>
              <span class="text-category">APP</span>
            </div>
            <div class="label-bg"></div>
          </div>
        </div>
      </div>                            
      
      <div class="portfolio card" data-cat="card">
        <div class="portfolio-wrapper">     
          <img src="img/portfolios/card/2.jpg" alt="" />
          <div class="label">
            <div class="label-text">
              <a class="text-title">QR Quick Response</a>
              <span class="text-category">Business card</span>
            </div>
            <div class="label-bg"></div>
          </div>
        </div>
      </div>        

      <div class="portfolio logos" data-cat="logos">
        <div class="portfolio-wrapper">     
          <img src="img/portfolios/logo/6.jpg" alt="" />
          <div class="label">
            <div class="label-text">
              <a class="text-title">Mobi Sock</a>
              <span class="text-category">Logo</span>
            </div>
            <div class="label-bg"></div>
          </div>
        </div>
      </div>                                  

      <div class="portfolio logos" data-cat="logos">
        <div class="portfolio-wrapper">     
          <img src="img/portfolios/logo/7.jpg" alt="" />
          <div class="label">
            <div class="label-text">
              <a class="text-title">Village Community Church</a>
              <span class="text-category">Logo</span>
            </div>
            <div class="label-bg"></div>
          </div>
        </div>
      </div>                          
      
      <div class="portfolio icon" data-cat="icon">
        <div class="portfolio-wrapper">     
          <img src="img/portfolios/icon/4.jpg" alt="" />
          <div class="label">
            <div class="label-text">
              <a class="text-title">Domino's Pizza</a>
              <span class="text-category">Icon</span>
            </div>
            <div class="label-bg"></div>
          </div>
        </div>
      </div>              

      <div class="portfolio web" data-cat="web">
        <div class="portfolio-wrapper">           
          <img src="img/portfolios/web/3.jpg" alt="" />
          <div class="label">
            <div class="label-text">
              <a class="text-title">Backend Admin</a>
              <span class="text-category">Web design</span>
            </div>
            <div class="label-bg"></div>
          </div>
        </div>
      </div>                                                

      <div class="portfolio icon" data-cat="icon">
        <div class="portfolio-wrapper">     
          <img src="img/portfolios/icon/1.jpg" alt="" />
          <div class="label">
            <div class="label-text">
              <a class="text-title">Instagram</a>
              <span class="text-category">Icon</span>
            </div>
            <div class="label-bg"></div>
          </div>
        </div>
      </div>        
      
      <div class="portfolio web" data-cat="web">
        <div class="portfolio-wrapper">           
          <img src="img/portfolios/web/2.jpg" alt="" />
          <div class="label">
            <div class="label-text">
              <a class="text-title">Student Guide</a>
              <span class="text-category">Web design</span>
            </div>
            <div class="label-bg"></div>
          </div>
        </div>
      </div>                                  

      <div class="portfolio icon" data-cat="icon">
        <div class="portfolio-wrapper">
          <img src="img/portfolios/icon/2.jpg" alt="" />
          <div class="label">
            <div class="label-text">
              <a class="text-title">Scoccer</a>
              <span class="text-category">Icon</span>
            </div>
            <div class="label-bg"></div>
          </div>
        </div>
      </div>                                                                                                                                

      <div class="portfolio icon" data-cat="icon">
        <div class="portfolio-wrapper">           
          <img src="img/portfolios/icon/5.jpg" alt="" />
          <div class="label">
            <div class="label-text">
              <a class="text-title">3D Map</a>
              <span class="text-category">Icon</span>
            </div>
            <div class="label-bg"></div>
          </div>
        </div>
      </div>      
      
      <div class="portfolio web" data-cat="web">
        <div class="portfolio-wrapper">           
          <img src="img/portfolios/web/1.jpg" alt="" />
          <div class="label">
            <div class="label-text">
              <a class="text-title">Note</a>
              <span class="text-category">Web design</span>
            </div>
            <div class="label-bg"></div>
          </div>
        </div>
      </div>                  
      
      <div class="portfolio logos" data-cat="logos">
        <div class="portfolio-wrapper">     
          <img src="img/portfolios/logo/3.jpg" alt="" />
          <div class="label">
            <div class="label-text">
              <a class="text-title">Native Designers</a>
              <span class="text-category">Logo</span>
            </div>
            <div class="label-bg"></div>
          </div>
        </div>
      </div>                                  

      <div class="portfolio logos" data-cat="logos">
        <div class="portfolio-wrapper">     
          <img src="img/portfolios/logo/4.jpg" alt="" />
          <div class="label">
            <div class="label-text">
              <a class="text-title">Bookworm</a>
              <span class="text-category">Logo</span>
            </div>
            <div class="label-bg"></div>
          </div>
        </div>
      </div>                                                        
      
      <div class="portfolio icon" data-cat="icon">
        <div class="portfolio-wrapper">     
          <img src="img/portfolios/icon/3.jpg" alt="" />
          <div class="label">
            <div class="label-text">
              <a class="text-title">Sandwich</a>
              <span class="text-category">Icon</span>
            </div>
            <div class="label-bg"></div>
          </div>
        </div>
      </div>                                                
      
      <div class="portfolio card" data-cat="card">
        <div class="portfolio-wrapper">     
          <img src="img/portfolios/card/3.jpg" alt="" />
          <div class="label">
            <div class="label-text">
              <a class="text-title">Reality</a>
              <span class="text-category">Business card</span>
            </div>
            <div class="label-bg"></div>
          </div>
        </div>
      </div>  

      <div class="portfolio logos" data-cat="logos">
        <div class="portfolio-wrapper">     
          <img src="img/portfolios/logo/2.jpg" alt="" />
          <div class="label">
            <div class="label-text">
              <a class="text-title">Speciallisterne</a>
              <span class="text-category">Logo</span>
            </div>
            <div class="label-bg"></div>
          </div>
        </div>
      </div> -->
    
    
       <!--<embed src="upload/Relevance.pdf" width="350px" height="250px" />-->
          <!--<div class="label">
            <div class="label-text">
              <a class="text-title">Speciallisterne</a>
              <span class="text-category">Logo</span>
            </div>
            <div class="label-bg"></div>
          </div>-->
       
     
                    
      
    </div>
    
  </div>
</div><!-- portfolio area end   -->


<div class="search_area">
  <div class="container">
    <div class="row">
      <div class="search_section">
          <h1>CASE <span>SEARCH</span></h1>
          <!--<p>YOUR CONTRIBUTIONS ARE IMPORTANT TO MAKE THIS INITIATIVE A SUCCESS</p>-->

                    <!--<div class="col-sm-8">-->
                        <div class="search_form">
                        <fieldset id="search_form">
                           <!-- <div id="result"></div>-->
              <div id="form" class="result1">
              <form id="data1" action="search.php" method="post">
   <div id="inputs1">
   
   <label> <font style="normal" size="3" color="black">Term 1 :   </font> </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <input type="text" id="term1"  name="term1" placeholder="&#xf1fc;  Term1"  >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <label> <font style="normal" size="3" color="black" >  Field 1:    </font> </label>&nbsp;
 
  <select id="option1" name="option1"style="min-width:10%;">
   <option>Select Field</option>
  <option value="title">Title</option>
  <option value="author" >Author</option>
  <option value="category">Category</option>
</select>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <select id="condition" name="condition"style="min-width:7%;" class="list1">
  <option value="and" >AND</option>
  <option value="or" selected>OR</option>
  </select>
   
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <label> <font style="normal" size="3" color="black">Term 2 :   </font> </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  
   <input type="text" id="term2"  name="term2" placeholder="&#xf1fc;  Term2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <label> <font style="normal" size="3" color="black">  Field 2:    </font> </label> &nbsp;
  
  <select id="option2" name="option2"style="min-width:10%;">
  <option>Select Field</option>
  <option value="title">Title</option>
  <option value="author" >Author</option>
  <option value="category">Category</option>
</select>
 
 <!-- <img src="img/search.jpg" align="right" style="  margin-bottom:100px margin-top:120px" width="150" height="150">-->
  
  
   <input type="submit" value="Search" title="Search">
  <!-- <button type="submit" class="button">Search</button>-->

  </div>
</form>
</div>
                        </fieldset>                           
                        </div>
                   <!-- </div>-->
                   
      </div>
    </div>
  </div> 
</div>
 

<div class="testimonial_area">
  <div class="container">
    <div class="row">
      <div class="testimonial_section">
          <h1>Views and <span>Opinions</span></h1>
                        <div id="testimonial_carosule" class="owl-carousel owl-theme">
                            
                            <div class="item"> 
                               <blockquote>
                               <img src="img/venks.png"> 
                               <p>
                                     I have always believed that faculty teaching technology based IS/IT courses must use of cases, to make the concept more realistic and interesting. Unlike the IS/IT management area, there is no case repository for “software engineering” courses. I fully support this initiative. 
                                </p>      
                              </blockquote>  
                              <h3>----  Venky Shankararaman || Singapore Management University</h3>                    
                            
                            </div>   

                            <div class="item"> 
                               <blockquote>
                               <img src="img/emm.png"> 
                               <p>
                                     In order to realize the full value of case-base teaching in the software engineering discipline an available collection of suitable cases is needed.  This early effort of SEABED seems to be a move in the right direction for case pedagogy in software engineering. 
                                </p>      
                              </blockquote>  
                              <h3>----  Emanuel Grant || University of North Dakota</h3>                    
                            
                            </div>   



              
                        </div>          
      </div>
    </div>
  </div>
</div> <!--testimonial area end   -->


<div class="blog_area">
  <div class="container">
    <div class="row">
      <div class="blog_section">
          <h1>Founding <span>Team</span></h1>
          <div class="single_blog col-md-3 slider-content">
            <a href="http://www.software-analytics.in" target="_blank">
                <img src="img/1.jpg" alt="">
                <div class="slider-text">
                  <h3>Ashish Sureka</h3>
                  <!--<p> <i class="fa fa-user"></i> By FAHEM <i class="fa fa-clock-o"></i> August 31th, 2014</p>-->
                  <p>Researcher, Educator, Programmer and Writer. Principal Scientist at ABB Corporate Research (India) and PhD from NCSU (USA)</p>
                </div>
            </a>
          </div> 
          <div class="single_blog col-md-3 slider-content">
            <a href="http://www.pvsingh.com" target="_blank">
                <img src="img/2.jpg" alt="">
                <div class="slider-text">
                  <h3>Paramvir Singh</h3>
                 <!-- <p> <i class="fa fa-user"></i> By FAHEM <i class="fa fa-clock-o"></i> August 31th, 2014</p>     -->             
                  <p>Assistant Professor at NITJ (India) and PhD from GNDU (India) - 11 years of work experience in Academia and Industry</p>
                </div>
            </a>
          </div> 
          <div class="single_blog col-md-3 slider-content">
            <a href="#">
                <img src="img/3.jpg" alt="">
                <div class="slider-text">
                  <h3>Yukti Mehta</h3>
                  <!--<p> <i class="fa fa-user"></i> By FAHEM <i class="fa fa-clock-o"></i> August 31th, 2014</p>                  -->
                  <p>Researcher, Programmer and Intern at ABB Corporate Research (India).  MTech Scholar at NITJ (India) and BTech from IGDTUW (India) </p>
                </div>
            </a>
          </div>   
<div class="single_blog col-md-3 slider-content">
            <a href="#">
                <img src="img/4.jpg" alt="">
                <div class="slider-text">
                  <h3>Veena Saini </h3>
                  <!--<p> <i class="fa fa-user"></i> By FAHEM <i class="fa fa-clock-o"></i> August 31th, 2014</p>                  -->
                  <p>Researcher and Programmer.  MTech Scholar at NITJ (India) and BTech from SKIT (India) </p>
                </div>
            </a>
          </div>                              
      </div>
    </div>
  </div>
</div><!-- blog area end   -->

<div class="work_area">
  <div class="container">
    <div class="row">  
      <div class="work_section">
        <h1 class="wow bounceInLeft">Publications <span>& Presentations</span></h1>
          <div class="col-md-12 wow bounceInRight animated">
            <div class="bs-example">
              <ul class="nav nav-tabs">
       <!--<li class="active">  <div class="ico"><a data-toggle="tab" href="#sectionA"><i class="fa fa-newspaper-o"></i></a></div> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-->
        <!-- <li class="active">  <div class="ico"><a data-toggle="tab" href="#sectionA"><i class="fa fa-users"></i></a></div>-->
              <li class="active"><a data-toggle="tab" href="#sectionA"><i class="fa fa-newspaper-o"></i></a></li>
                <!--  <li><a data-toggle="tab" href="#sectionB"><i class="fa fa-users"></i></a></li>-->
                  <!--<li><a data-toggle="tab" href="#sectionC"><i class="fa fa-cogs"></i></a></li>
                  <li><a data-toggle="tab" href="#sectionD"><i class="fa fa-paper-plane"></i></a></li>-->
                 <!-- <li><a data-toggle="tab" href="#sectionE"><i class="fa fa-line-chart"></i></a></li>-->
              </ul>
              <div class="tab-content">
                  <div id="sectionA" class="tab-pane fade in active">
                      <h3>Publications</h3>
                      <h7>[1] Kirti Garg, Ashish Sureka, and Vasudeva Varma,<a href="https://dl.dropboxusercontent.com/u/48972351/CMCE-2015-COSEED.pdf" target="_blank"> “A Case-Study on Teaching Software Engineering Concepts using a Case-Based Learning Environment”</a> APSEC Workshop, (CMCE 2015).</h7>
            <!--<p> <a href="https://dl.dropboxusercontent.com/u/48972351/CMCE-2015-COSEED.pdf"><h6>APSEC 2015 workshop</h6></a></p>-->
           <!-- <p>International Conference on Technology for Education (T4E 2016)</p>-->
           <br/> <h7>[2] Divya Kundra and Ashish Sureka,<a href="https://dl.dropboxusercontent.com/u/48972351/T4E-2016-CBL.pdf" target="_blank"> “An Experience Report on Teaching Compiler Design Concepts using Case-Based and Project-Based Learning Approaches”</a> International Conference on Technology for Education (T4E 2016).</h7>
          <!--  <p> <a href="https://dl.dropboxusercontent.com/u/48972351/T4E-2016-CBL.pdf"><h6>  T4E 2016</h6></a></p>-->
                  </div>
                <!--  <div id="sectionB" class="tab-pane fade">
                      <h3>Case Study</h3>
                      <p><a href="http://seabed.in/upload/casestudyaiw.pdf"><h6>All Is Well (AIW) Pharmacy Incorporation Case Study</h6></a></p>-->
                 <!-- <div id="sectionC" class="tab-pane fade">
                      <h3>Mechanism</h3>
                      <p>Vestibulum nec erat eu nulla rhoncus fringilla ut non neque. Vivamus nibh urna, ornare id gravida ut, mollis a magna. Aliquam porttitor condimentum nisi, eu viverra ipsum porta ut. Nam hendrerit bibendum turpis, sed molestie mi fermentum id. Aenean volutpat velit sem. Sed consequat ante in rutrum convallis. Nunc facilisis leo at faucibus adipiscing.</p>
                  </div>
                  <div id="sectionD" class="tab-pane fade">
                      <h3>Title</h3>
                      <p>Vestibulum nec erat eu nulla rhoncus fringilla ut non neque. Vivamus nibh urna, ornare id gravida ut, mollis a magna. Aliquam porttitor condimentum nisi, eu viverra ipsum porta ut. Nam hendrerit bibendum turpis, sed molestie mi fermentum id. Aenean volutpat velit sem. Sed consequat ante in rutrum convallis. Nunc facilisis leo at faucibus adipiscing.</p>
                  </div>-->
                  <!--<div id="sectionE" class="tab-pane fade">
                      <h3>Trending</h3>
                      <p>Vestibulum nec erat eu nulla rhoncus fringilla ut non neque. Vivamus nibh urna, ornare id gravida ut, mollis a magna. Aliquam porttitor condimentum nisi, eu viverra ipsum porta ut. Nam hendrerit bibendum turpis, sed molestie mi fermentum id. Aenean volutpat velit sem. Sed consequat ante in rutrum convallis. Nunc facilisis leo at faucibus adipiscing.</p>
                  </div> -->                                               
              </div>
            </div>
          </div>
      </div>
    </div>  
  </div>    
</div> 
</div><!-- work area end --> 


<div class="whatsnew_area">  
 <div class="search_section">

          <h1>What's <span>New</span></h1><br/>

<div class="carousel fade-carouseln slide" data-ride="carousel" data-interval="2000" id="bs-carousel">
  <!-- Overlay -->
  <div class="overlay"></div>

  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
    <li data-target="#bs-carousel" data-slide-to="1"></li>
    <li data-target="#bs-carousel" data-slide-to="2"></li>
  </ol>
  
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item slides active">
      <div class="slide-11"></div>
      <div class="hero">
        <hgroup>
           <!-- <h1>Software <span>Engineering</span></h1>        -->
            <h3>Case Based Learning (CBL) at NITJ</h3>
        </hgroup>
        <!--<button class="btn btn-hero btn-lg" role="button">See all features</button>-->
      </div>
    </div>
    <div class="item slides">
      <div class="slide-12"></div>
      <div class="hero">        
        <hgroup>
          <!--  <h1>Case Based <span>Learning</span></h1>        -->
            <h3>Prof. Paramvir Singh implementing CBL in NITJ</h3>
        </hgroup>       
       <!--<button class="btn btn-hero btn-lg" role="button">See all features</button>-->
      </div>
    </div>
    <div class="item slides">
      <div class="slide-13"></div>
      <div class="hero">        
        <hgroup>
           <!-- <h1>SEABED <span>Community</span></h1>        -->
            <h3>Group Discussion & Brainstorming Session</h3>
        </hgroup>
        <!--<button class="btn btn-hero btn-lg" role="button">See all features</button>-->
      </div>
    </div>
      <div class="item slides">
      <div class="slide-14"></div>
      <div class="hero">        
        <hgroup>
           <!-- <h1>SEABED <span>Community</span></h1>        -->
            <h3>Student-led Presentations</h3>
        </hgroup>
        <!--<button class="btn btn-hero btn-lg" role="button">See all features</button>-->
      </div>
    </div>
  
  </div> 
</div>
</div> 
</div>
<!--whtas_new area end-->

<br/>




<div class="contact_area">
  <div class="container">
    <div class="row">
      <div class="contact_section">
           <h1>INVITING <span>THESIS STUDENTS</span></h1>
          <p>We invite MS/MTech and PhD Scholars interested in the area of Case-Based Learning (CBL) specifically in the domain of Software Engineering (SE) to collaborate with us on the SEABED project. We are open to partner and work with interested students and their adviser to define a project resulting in a Thesis and/or joint research paper(s) in a reputed conference or journal. Please contact Ashish Sureka (ashish.sureka@in.abb.com) and Paramvir Singh (singhpv@nitj.ac.in) to explore possibilities.</p>
<!--
                    <div class="col-md-6">
                        <div class="contact_form">
                        <fieldset id="contact_form">
                            <div id="result"></div>
                                <label for="name">
                                <input type="text" name="name" id="name" placeholder="Enter Your Name" />
                                </label>
                                
                                <label for="email">
                                <input type="email" name="email" id="email" placeholder="Enter Your Email" />
                                </label>
                                
                                <label for="phone">
                                <input type="text" name="phone" id="phone" placeholder="Phone Number" />
                                </label>
                                
                                <label for="message">
                                <textarea name="message" id="message" placeholder="Enter Your Name"></textarea>
                                </label>
                                <button class="submit_btn" id="submit_btn">Submit</button>
                                </label>
                        </fieldset>                           
                        </div>
                    </div>-->
          <!--
                    <div class="col-md-6">
                        <div class="contact_text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                            <h3>contact info</h3>
                            <ul class="contact_info">
                                <li>info@fahem.me</li>
                                <li>south baluadanga,dinajpur</li>
                                <li>+880174120000,+880174120000,</li>
                            </ul>
                            <h3>follow us</h3>
                            <ul class="contact_social">
                                <a href="#"><li><i class="fb fa fa-facebook-square"></i></li></a>
                                <a href="#"><li><i class="tw fa fa-twitter-square"></i></li></a>
                                <a href="#"><li><i class="rss fa fa-rss-square"></i></li></a>
                                <a href="#"><li><i class="gp fa fa-google-plus-square"></i></li></a>
                            </ul>                            
                        </div>
                    </div>-->
      </div>
    </div>
  </div> 
</div> <!--contact_area end-->


<div>
</div>


</br></br>














<!--
<div class="price_area">
  <div class="container">
    <div class="row">
      <div class="price_section">
          <h1>Price section</h1>
              <div class="col-md-12">
                <div class="pricing-table">
                  <div class="col-md-4 col-sm-4 col-xs-12 pricing-box first wow bounceInUp animated">
                    <ul>
                      <li class="plan-title">
                        Silver
                      </li>
                      <li class="subscription-price oswald">
                        <span class="currency oswald">$</span>
                        <span class="price">59</span>
                        / mon
                      </li>
                      <li class="ptop10">
                        5 Free Websites
                      </li>
                      <li>
                        100 Gb Storage
                      </li>
                      <li>
                        24 / 7 Full Support
                      </li>
                      <li>
                        Cloud Backup
                      </li>
                      <li>
                        5 Admin Panels
                      </li>
                      <li>
                        Free Trials
                      </li>
                      <li class="last border-none pbottom40">
                        No Bonus Points
                      </li>
                      <li class="sing-up">
                        <a href="#" class="animate">Sign Up</a>
                      </li>
                    </ul>
                  </div>--><!-- end pricing-box -->
          <!--
                  <div class="col-md-4 col-sm-4 col-xs-12 pricing-box second featured wow bounceInUp animated">
                    <ul>
                      <li class="plan-title">
                        Gold
                      </li>
                      <li class="subscription-price oswald">
                        <span class="currency oswald">$</span>
                        <span class="price">79</span>
                        / mon
                      </li>
                      <li class="ptop10">
                        20 Free Websites
                      </li>
                      <li>
                        500 Gb Storage
                      </li>
                      <li>
                        Full Support
                      </li>
                      <li>
                        Cloud Backup
                      </li>
                      <li>
                        20 Admin Panels
                      </li>
                      <li>
                        Free Trials
                      </li>
                      <li class="last border-none pbottom40">
                        All Bonus Points
                      </li>
                      <li class="sing-up">
                        <a href="#" class="animate">Sing Up</a>
                      </li>
                    </ul>
                  </div>--><!-- end pricing-box -->
          <!--
                  <div class="col-md-4 col-sm-4 col-xs-12 pricing-box last wow bounceInUp animated">
                    <ul>
                      <li class="plan-title">
                        Diamond
                      </li>
                      <li class="subscription-price oswald">
                        <span class="currency oswald">$</span>
                        <span class="price">99</span>
                        / mon
                      </li>
                      <li class="ptop10">
                        50 Free Websites
                      </li>
                      <li>
                        1 Tb Storage
                      </li>
                      <li>
                        Full Support
                      </li>
                      <li>
                        Cloud Backup
                      </li>
                      <li>
                        50 Admin Panels
                      </li>
                      <li>
                        Free Trials
                      </li>
                      <li class="last border-none pbottom40">
                        All Bonus Points
                      </li>
                      <li class="sing-up">
                        <a href="#" class="animate">Sing Up</a>
                      </li>
                    </ul>
                  </div>--><!-- end pricing-box -->
          <!--
                </div>
              </div>
          
      </div>
    </div>
  </div> 
</div>--> <!-- price area end   -->



<!--
<div class="contact_area">
  <div class="container">
    <div class="row">
      <div class="contact_section">
          <h1>Contact us</h1>
          <p>OUR TEAM INCLUDES GREAT THINKERS. YOU WOULD LOVE TO WORK WITH THEM AS THEY ARE JUST AMAZING PEOPLE.</p>

                    <div class="col-md-6">
                        <div class="contact_form">
                        <fieldset id="contact_form">
                            <div id="result"></div>
                                <label for="name">
                                <input type="text" name="name" id="name" placeholder="Enter Your Name" />
                                </label>
                                
                                <label for="email">
                                <input type="email" name="email" id="email" placeholder="Enter Your Email" />
                                </label>
                                
                                <label for="phone">
                                <input type="text" name="phone" id="phone" placeholder="Phone Number" />
                                </label>
                                
                                <label for="message">
                                <textarea name="message" id="message" placeholder="Enter Your Name"></textarea>
                                </label>
                                <button class="submit_btn" id="submit_btn">Submit</button>
                                </label>
                        </fieldset>                           
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contact_text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                            <h3>contact info</h3>
                            <ul class="contact_info">
                                <li>info@fahem.me</li>
                                <li>south baluadanga,dinajpur</li>
                                <li>+880174120000,+880174120000,</li>
                            </ul>
                            <h3>follow us</h3>
                            <ul class="contact_social">
                                <a href="#"><li><i class="fb fa fa-facebook-square"></i></li></a>
                                <a href="#"><li><i class="tw fa fa-twitter-square"></i></li></a>
                                <a href="#"><li><i class="rss fa fa-rss-square"></i></li></a>
                                <a href="#"><li><i class="gp fa fa-google-plus-square"></i></li></a>
                            </ul>                            
                        </div>
                    </div>
      </div>
    </div>
  </div> 
</div>--><!-- contact area end   -->


   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="http://bootstrap-tagsinput.github.io/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script>
$(function(){ // DOM ready

  // ::: TAGS BOX

  $("#tags input").on({
    focusout : function() {
      var txt = this.value.replace(/[^a-z0-9\+\-\.\#]/ig,''); // allowed characters
      if(txt) $("<span/>", {text:txt.toLowerCase(), insertBefore:this});
      this.value = "";
    },
    keyup : function(ev) {
      // if: comma|enter (delimit more keyCodes with | pipe)
      if(/(188|13)/.test(ev.which)) $(this).focusout(); 
    }
  });
  $('#tags').on('click', 'span', function() {
    if(confirm("Remove "+ $(this).text() +"?")) $(this).remove(); 
  });

});
</script>
 <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
  <script>
  $(document).ready(function() {
    $("#date").datepicker();
   
  });
  </script>
  <!-- duplicate field -->
<!--<script  src="https://code.jquery.com/jquery-latest.js"></script>-->
<script type="text/javascript">
jQuery(document).ready(function($){
    $('.my-form .add-box').click(function(){
  
        var n = $('.text-box').length + 1;
    if(n!=5)
  {
        var box_html = $('<p class="text-box"> <input type="text" name="boxes[]" style="width:100px;margin-left: 50px" value="" id="box' + n + '" placeholder="&#xf0c0;  Author(s)" title="Please enter the name of author(s)involved"required />  <input type="email" name="boxes[]" style="width:120px;margin-left: 15px" value="" id="email' + n + '" placeholder="&#xf0e0;  Email Address" title="Please enter the email id of the author(s)" required />  <input type="text" name="boxes[]" style="width:100px;margin-left: 15px" value="" id="af'+n+'" placeholder="Affiliation" title="Please provide author\'s affiliation" required /> <a href="#" class="remove-box">Remove</a></p>');
        box_html.hide();
        $('.my-form p.text-box:last').after(box_html);
        box_html.fadeIn('slow');
        return false;
    }
    else {window.alert("not more than 4");
    window.location.href='http://www.seabed.in/index.html';
    }
    
    });
   $('.my-form').on('click', '.remove-box', function(){
        $(this).parent().css( 'background-color', '#FF6C6C' );
        $(this).parent().fadeOut("slow", function() {
            $(this).remove();
            $('.box-number').each(function(index){
                $(this).text( index + 1 );
            });
        });
        return false;
    });
});
</script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    
    <script src="js/wow.js"></script>

    <script src="js/jquery.nicescroll.js"></script>
    
    <script type="text/javascript" src="js/jquery.easing.min.js"></script>  
    <script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>

   <script src="js/skillset.js"></script>

   <script src="js/owl.carousel.js"></script> 


   <script src="js/scrollupto.js"></script>
 
 
   <script type="text/javascript" src="js/main.js"></script>
   <!--panel-->
   
   <!-- back-to-top-->
   <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>-->
   <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>-->
   <!-- Form -->
   <script>
$("form#data").submit(function(event){
 
  //disable the default form submission
  event.preventDefault();
 
  //grab all form data  
  var formData = new FormData($(this)[0]);
 
  $.ajax({
    url: 'form.php',
    type: 'POST',
    data: formData,
    async: false,
    cache: false,
    contentType: false,
    processData: false,
    success: function (returndata) {
   //clearInput();
    
      //alert(returndata);
    $("#data").fadeOut(500).hide(function()
            {
              $(".result").fadeIn(500).show(function()
              {
                $(".result").html(returndata);
              });
            });
    }
  });
  clearInput();
  return "Thanks for submission";
 
  //return false;
});


function clearInput(){
  $("#data :input").each(function(){
    $(this).val('');
  });
  
}

</script>
<script>
  $("#data :input").tooltip({
 
      // place tooltip on the right edge
      position: "center right",
 
      // a little tweaking of the position
      offset: [-2, 10],
 
      // use the built-in fadeIn/fadeOut effect
      effect: "fade",
 
      // custom opacity setting
      opacity: 0.7
 
      });
  
</script>

<!-- Search -->
<script>
$("form#data1").submit(function(event){
 
  //disable the default form submission
  event.preventDefault();
 
  //grab all form data  
  var formData = new FormData($(this)[0]);
 
  $.ajax({
    url: 'search.php',
    type: 'POST',
    data: formData,
    async: false,
    cache: false,
    contentType: false,
    processData: false,
    success: function (returndata) {
      //alert(returndata);
    $("#data1").fadeOut(500).hide(function()
            {
              $(".result1").fadeIn(500).show(function()
              {
                $(".result1").html(returndata);
              });
            });
    }
  });
  clearInput();
  return "Thanks for submission";
 
  //return false;
});


function clearInput(){
  $("#data1 :input").each(function(){
    $(this).val('');
  });
  
}

</script>

<script>
$(document).ready(function(){
    $("#try2 :input").click(function(){
        $.get("evolution.php", function(data, status){
            alert("Data: " + data + "\nStatus: " + status);
        });
    });
});
</script>

<!-- evolution part -->







<!-- LikeBtn.com BEGIN -->

<!-- file -->

</body>
</html>

                    
      
    
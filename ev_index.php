<?php

  if($_POST["submit"]) {

    if(!$_POST['name']) {
        $error="<br />Please enter your name"; 
    }

    if (!$_POST['email']) {
        $error.="<br />Please enter your email address";
     }

    if (!$_POST['subject']) {
        $error.="<br />Please enter your subject";
     }

    if (!$_POST['message']) {
        $error.="<br />Please enter your message";
     }


    if ($_POST['email']!="" AND !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
       $error.="<br />Please enter a valid email address";
     }
      
    if ($error) {
       $result='<div class="alert alert-danger"><strong>There were error(s) in your form:</strong>'.$error.'</div>';
     } 

    else {

                $emailTo="me@evanmorgan.com";

                $subject = $_POST["subject"];

                $body= $_POST["message"];

                $headers="Sender's email address: ".$_POST["email"];


         if (mail($emailTo, $subject, "Name: ".$_POST['name'].
                                    " Email: ".$_POST['email'].
                                    " Message: ".$_POST['message'])) {

        $result='<div class="alert alert-success"><strong>Thank you!</strong> I\'ll be in touch soon.</div>';

      } else {

        $result='<div class="alert alert-danger">Sorry, there was an error sending your message. Please try again later.</div>';

     }
   }

  }

?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Evan Morgan Portfolio</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href="css/custom.css" rel="stylesheet" type="text/css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom CSS -->
    <link href="css/scrolling-nav.css" rel="stylesheet">

    <link id="scrollUpTheme" rel="stylesheet" href="css/tab.css">
    <link rel="stylesheet" href="css/labs.css">

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-66177739-1', 'auto');
  ga('send', 'pageview');
  
</script>
  </head>

  <body id="page-top" data-spy="scroll" data-target=".navbar-collapse">
    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top ">
      <div class="container">

        <div class="navbar-header page-scroll">
             <a href="#home" class="navbar-brand logo page-scroll">Evan M. Morgan</a>
             <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="page-scroll" href="#home"></a>        
        </div>

        <div id="navbar" class="navbar-collapse collapse navbar-right">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#home" class="page-scroll">Home</a></li>
            <li><a href="#resume" class="page-scroll">Resume</a></li>
            <li><a href="#projects" class="page-scroll">Projects</a></li>
            <li><a href="#whatsnew" class="page-scroll">What's New?</a></li>
            <li><a href="#contact" class="page-scroll">Contact</a></li>

          </ul>
        </div>

      </div>
    </div>


        <div class="container contentContainer " id="home">
                <div class="row homePageTop ">
                    <div class="image_description">
                        <div class="col-md-6">
                            <div id="circular" class="text-center ">
                                <img src="images/purple_evan.jpg" alt="Evan Morgan" id="profile_image">
                            </div>
                        </div>

                        <div class="col-md-6 short_description space2 ">
                            <p> Hi, I'm Evan.</p><p>Cleveland Native and Boston Son</p><p>Prospective Medical Student. Interested Mind. Explorer</p><p>I spent some time in Massachusetts studying science and psychology, and am now focusing my efforts on gaining entrance to and completing a medical degree with the ambitions of helping individuals and populations with preventative treatments focused on algorithmic drug repositioning and other data intesive analytical approaches</p> <p>Updated regualarly to include past & current working projects involved in my work, studies and otherwise. </p> 
                        </div>

                    </div>     
                </div>
        </div>


        <div class="container"> 
          <div class="contentContainer " id="resume">
            <div class="resumePageTop">

              <!-- Work  -->
              <div class="work">
                  <div class="row">
                    <div class="col-md-2 work_class "><h4>Work</h4></div>
                    <div class="col-md-7 ">
                      <div class="job">                        <div class="position_title">Senior Clinical Research Coordinator</div>
                        <div class="company_title">Dana-Farber Cancer Institute</div>
                        <div class="job_period">August 2013 - August 2016</div>
                        <div class="job_details">Worked with Dr. Ann Partridge to improve understanding of breast cancer in young women, including the biology of the disease, response to therapy, and psychosocial and survivorship concerns. Obtained patient's informed consent and maintained timely follow-up with participating patients. Ensured timely collection of survey responses, medical records and tumor tissue samples. Ensured study compliance with all IRB requirements regarding minimal risk protocols.</div>
                      </div>






                      <div class="job">
                        <div class="position_title">Research Intern</div>
                        <div class="company_title">The National Center on Addiction and Substance Abuse at Columbia University</div>
                        <div class="job_period">June 2012 - August 2012</div>
                        <div class="job_details">Conducted literature reviews of targeted research topics concerning addiction and substance abuse, the health care industry, and health care reform. Wrote summaries of literature review findings. Drafted talking points for media opportunities regarding newly released articles. Edited of CASA's 2012 publication "Addiction Medicine: Closing the Gap Between Science and Practice." Gathered and organized research and information concerining the current status of health care reform among the nation's largest and most innovative hospital suystems in order to use for the distribution of CASA's 2012 publication "Addiction Medicine: Closing the Gap Between Science and Practice."</div>
                      </div>                      
                    </div>

                    <div class="col-md-3 ">
                      <div class="skill_box">
                          <p class="skills">Skills</p>Web Development<br>Data Analysis<br>Data Management<br><p></p>
                          <p class="skills">Languages</p>HTML/CSS/JS
                    </div>
                    </div>
                  </div> <!-- End Work -->
              </div>

              <!-- Education  -->
              <div class="work">
                  <div class="row">
                    <div class="col-md-2 education_class "><h4>Education</h4></div>
                    <div class="col-md-7 ">

                      <div class="job">
                        <div class="position_title">College of the Holy Cross</div>
                        <div class="company_title">B.Sc. Physcology</div>
                        <div class="job_period">August 2009 - May 2013</div>
                        <div class="job_details">I studied psycholgy with a pre-med focus.<p> Dean's List 2010, 2011, 2013.</p> </div></div>

<div class="job">
                        <div class="position_title">Research Assistant</div>
                        <div class="company_title">UMass Medical Sschool</div>
                        <div class="job_period">January 2013 - May 2013</div>
                        <div class="job_details">Performed research through the Department of Emergency Medicine in order to identify types of micro-RNA as biomarkers for early diagnosis of acute coronary syndrome in patients admitted with chest pain or overdose on acetaminophen. Collaborated with nursing management and doctors of the emergency department to collect blood samples and obtain consent from patients. Managed centrifugation and storage of blood plasma samples collected from emergency department patients. Worked with various electronic medical record databases to maintain input and organization of data and patient clinical information</div>
                      </div>


</div>
<div class="col-md-3"><div class="skill_box"><p class="skills">Extracurriculars</p>
 <p>Head Liturgical Minister</p><p> External Music Director of 88.1 WCHC Radio</p> Co-Chair Psychology Club</p> Student Advisory Committee of Psychology Department</p> </div>
                      </div>                    






                      </div>



                    </div>
                  </div> <!-- End Education -->
              </div>

            </div>
          </div>
        </div>



        <div class="container">
          <div class="contentContainer" id="projects">
            <div class="resumePageTop">

                  
                    <div><h2 id="project_page">Projects</h2></div>                    

                    <div>
                          <div class="Study (B)log">
                              <h2><font color="#F0CA43">01</font> Study (B)log</h2>
                          </div>
                          <div class="project_description">I've seen logging daily habits to benefit students and have decided to undertake an analytic approach, documenting my daily and weekly progress in studying. To contain physical and mental notes of progress as well. Updates to follow. </div>
                    </div>
<!--
                    <div>
                          <div class="project_title">
                              <h2><font color="#F0CA43">02</font> Project 2 Title</h2>
                          </div>
                          <div class="project_description">This is project description. This is project description. This is project description. This is project description. This is project description. This is project description. This is project description. This is project description. This is project description. This is project description. This is project description. This is project description. This is project description. This is project description. This is project description. This is project description. This is project description. This is project description. </div>
                    </div>

                    <div>
                          <div class="project_title">
                              <h2><font color="#F0CA43">03</font> Project 3 Title</h2>
                          </div>
                          <div class="project_description">This is project description. This is project description. This is project description. This is project description. This is project description. This is project description. This is project description. This is project description. This is project description. This is project description. This is project description. This is project description. This is project description. This is project description. This is project description. This is project description. This is project description. This is project description. </div>
                    </div>
                  
           
            </div>
           </div> -->
        </div>

        <div class="container">
            <div class=" contentContainer whatsnewPageTop" id="whatsnew">
              <div class="row whatsnewPageText">
                  <h2>What's New?</h2>
                  <ul>
                      <li class="whatsNewli">In June 2016, I left a job I loved & moved from a city I called home to focus on gaining entrance to Medical School. I will be expanding and sharpening my knowledge base in the coming months, as well as my technical and analytical skillset to maintain a competitive edge and unique perspective for my coming career in medicine. <a href="https://github.com/" target="_blank">github</a> page.
                    <!--  <li class="whatsNewli">On May 31, 2015, I finished my first challenging project using Bootstrap framework. I created a single page template with smooth scroll for personal portfolio. This template is available for free on my github <a href="https://github.com/" target="_blank">page</a>.
                      <li class="whatsNewli">On Jan 25, 2015, I finished my first challenging project using Selenium framework. I created a test suite for testing chrome browser extension. This test suite is available for free and can be accessued using the following <a href="https://github.com/" target="_blank">link</a>.
                      <li class="whatsNewli">On November 9, 2014, I created my first load testing using Jmeter. The load test file (*.jmx) can be accessed <a href="https://github.com/" target="_blank">here</a>.-->
                  </ul>          
             </div>
            </div>
        </div>




 <div class="container contentContainer contactPageTop" id="contactbox">

                  <div class="row">

                              <h2 id="contact" >CONTACT</h2>
                              <div class="col-md-6">


                              <?php echo $result; ?>
                        
                              <p class="lead">Looking forward to answering your email</p>
                              <form method="post" action="#error-check" id="error-check">

                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your name here" value="<?php echo $_POST['name']; ?>"/>
                                </div>

                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Your email here" value="<?php echo $_POST['email']; ?>"/>
                                </div>

                                <div class="form-group">
                                    <label for="subject">Subject</label>
                                    <input type="text" name="subject" class="form-control" id="subject" placeholder="Your subject here" value="<?php echo $_POST['subject']; ?>">
                                </div>

                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea name="message" class="form-control" rows="3" placeholder="Your message here"><?php echo $_POST['message']; ?></textarea>
                                </div>

                                <input type="submit" name="submit" class="btn btn-default btn-lg pull-right" value="Submit"/>

                              </form>

                        </div>

                             <div class="col-md-6" id="contact_links"style="width:200px;">
                              <a href="https://www.linkedin.com/pub/evan-morgan/20/102/53a" target="_blank"> <span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-linkedin fa-stack-1x fa-inverse"></i></span> </a>
                              <a href="https://github.com/" target="_blank"> <span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i>  <i class="fa fa-github fa-stack-1x fa-inverse"></i></span> </a>
                              <a href="https://twitter.com/emorg216" target="_blank"> <span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i>  <i class="fa fa-twitter fa-stack-1x fa-inverse"></i></span> </a>
 <!--                             <a href="mailto:me@evanmmorgan.com" target="_blank"> <span class="fa-stack fa-lg">  <i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-envelope-o fa-stack-1x fa-inverse"></i></span> </a>
-->                              <p><span id="email_id"></span> me@EvanMMorgan.com</p>
                        </div>

                  </div>           
        </div>        



        <!--Fixed footer -->
        <div class="navbar navbar-default navbar-static-bottom footer clear-navbar-inner">
          <div class="container">
                <div class="row">

                    <div class="col-md-12 text-center copyright">
                          Copyright &copy; 2016 Evan Morgan. All Rights Reserved.
                    </div>
                    
                </div>
          </div>
        </div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script>$(".contentContainer").css("min-height", $(window).height());</script>


    <!-- jQuery (necessary for scroll-up plugins) starts here-->
    <script src="js/jquery.scrollUp.min.js"></script>
    <script>

                    $(function () {
                        $.scrollUp({
                            animation: 'fade',
                            activeOverlay: '#FFFFFF',
                            scrollImg: {
                                active: true,
                                type: 'background',
                                src: 'images/top.png'
                            }
                        });
                    });
                    $('#scrollUpTheme').attr('href', 'css/image.css');
                    $('.image-switch').addClass('active');

    </script>
    <!-- jQuery (necessary for scroll-up plugins) ends here -->

    <!-- Scrolling Nav JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>
    
    <!-- To leave any feedback, please visit http://www.evanmmorgan.com/ -->

  </body>




</html>

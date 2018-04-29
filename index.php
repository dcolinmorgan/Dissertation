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
                $emailTo="me@danielcmorgan.com";
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
    <title>D.C. Morgan Portfolio</title>

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

  ga('create', 'UA-25747820-6', 'auto');
  ga('send', 'pageview');

</script>
  </head>

  <body id="page-top" data-spy="scroll" data-target=".navbar-collapse">
    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top ">
      <div class="container">

        <div class="navbar-header page-scroll">
             <a href="#home" class="navbar-brand logo page-scroll">Daniel C. Morgan</a>
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
                                <img src="images/dc_hk.jpg" alt="Daniel Morgan" id="profile_image">
                            </div>
                        </div>

                        <div class="col-md-6 short_description space2 ">

<script src="//assets.codepen.io/assets/common/stopExecutionOnTimeout.js?t=1"></script><script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script><script src="/js/jquery.simpleWeather.min.js"></script>
<script>
if ('geolocation' in navigator) {
    $('.js-geolocation').show();
} else {
    $('.js-geolocation').hide();
}
$('.js-geolocation').on('click', function () {
    navigator.geolocation.getCurrentPosition(function (position) {
        loadWeather(position.coords.latitude + ',' + position.coords.longitude);
    });
});
$(document).ready(function () {
    loadWeather('Seattle', '');
});
function loadWeather(location, woeid) {
    $.simpleWeather({
        location: location,
        woeid: woeid,
        unit: 'f',
        success: function (weather) {
            html = '<h2><i class="icon-' + weather.code + '"></i> ' + weather.temp + '&deg;' + weather.units.temp + '</h2>';
            html += '<ul><li>' + weather.city + ', ' + weather.region + '</li>';
            html += '<li class="currently">' + weather.currently + '</li>';
            html += '<li>' + weather.alt.temp + '&deg;C</li></ul>';
            $('#weather').html(html);
        },
        error: function (error) {
            $('#weather').html('<p>' + error + '</p>');
        }
    });
}
//@ sourceURL=pen.js
</script>
<script src="//codepen.io/assets/editor/live/css_live_reload_init.js"></script>

      
<!--                           <p>Welcome to users from<div id="weather"></div>
<div id="weather"><li>Seattle, WA</li></p><li class="currently">Cloudy</li><li>65°F,18°C</li></ul></div>
<button class="js-geolocation" style="">Use Your Location</button>  </p> --> <p> Hej, jag är Daniel, hur mår du?</p> <p>Problem Solver. Explorer. Scientist.</p> <p>I am working towards my doctorate in The Department of Biochemistry & Biophysics at<a href="http://www.dbb.su.se/" target="_blank"><span class="color_3"> Stockholm University</span></a>. I studied in the Nordling Lab in the Mechanical Engineering department of <a href="http://www.me.ncku.edu.tw/enus/" target="_blank"><span class="color_3">the National Cheng Kung University</span></a> during the spring of my third year as a visiting scientist. I received my Masters of Bioinformatics from <a href="https://www.osu.edu/" target="_blank"><span class="color_3">The Ohio State University</span></a>, and my Bachelors in Molecular Biology from <a href="https://www.miamioh.edu/" target="_blank"><span class="color_3">Miami University</span></a>.</p> <p>This page is updated quarterly to include current & past projects</p> <p>Follow links for side projects.</p>
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
		              <div class="job">
                        <div class="position_title">Visiting Scholar</div>
                        <div class="company_title"><a href="http://www.me.ncku.edu.tw/enus/content/torbjörn-nordling" target="_blank"><span class="color_3">Nordling Lab, ME NCKU</span></a></div>
                        <div class="job_period">Feb 2017 - May 2017</div>
                        <div class="job_details">Designing novel systems approach to controlling and balancing input and output noise in linear models used for network reconstruction</div>
                      </div>
                  <!-- </div>   -->
		              <!-- <div class="col-md-7 ">                     -->
		              <div class="job">
                        <div class="position_title">Bioinformatics Data Analyst</div>
                        <div class="company_title"><a href="http://www.elevada.com/" target="_blank"><span class="color_3">Elevada</span></a></div>
                        <div class="job_period">May 2013 - September 2014</div>
                        <div class="job_details">Remote testing and data analysis and extraction using novel web application with R back-end</div>
                      </div>                     
                    </div>

                    <div class="col-md-3 ">
                      <div class="skill_box">

                          <p class="skills">Skills</p>Molecular Biology<br>Systems Dynamics<br>Machine Learning<br>Probabilistic Graphical Modeling<p></p>
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
                        <div class="position_title">Stockholm University</div>
                        <div class="company_title">Doctor of Philosophy</div>
                        <div class="job_period">January 2015 - December 2019</div>
                        <div class="job_details">I am working on several projects surrounding the reverse engineering, or inference, of gene regulatory networks, with an interest in downstream drug repositioning in the <a href="http://sonnhammer.sbc.su.se/" target="_blank"><span class="color_3">Sonnhammer Lab</span></a> at <a href="http://ki.se/en/research/molecular-biosciences-scilifelab" /target="_blank"><span class="color_3">SciLifeLab</span></a> in conjunction with <a href="https://scholar.google.se/citations?user=R9VMvXwAAAAJ&hl=en" target="_blank"><span class="color_3">Torbjörn Nordling</span></a> at <a href="http://www.me.ncku.edu.tw/enus/content/torbj%C3%B6rn-nordling" target="_blank"<span color="color_3">National Cheng Kung University</span></a></div>
                        </div>

                      <div class="job">
                        <div class="position_title">The Ohio State University</div>
                        <div class="company_title">Master of Science</div>
                        <div class="job_period">August 2012 - December 2014</div>
                        <div class="job_details">Studied and worked with interest in drug repositioning, with projects investigating primary bladder and lung cancer samples. Thesis: <a href="https://etd.ohiolink.edu/ap/10?0::NO:10:P10_ACCESSION_NUM:osu1416989632" target="_blank"><span class="color_3">Gene Co-Expression Network Mining Approach for Differential Expression Analysis.</span></a></div>
                    	
                      </div>

                      <div class="job">
                        <div class="position_title">Miami University</div>
                        <div class="company_title">Bachelor of Science</div>
                        <div class="job_period">August 2006 - January 2011</div>
                        <div class="job_details">Worked in the <a href="http://www.units.miamioh.edu/melanyfisklab/"><span class="color_3">Fisk Lab</span></a>, as well as two summers in the <a href="http://pharmacology.case.edu/Department/Faculty/Trainers/Pages/letterio.aspx">Letterio Lab</span></a> at <a href="http://case.edu/medicine/" target="_blank"><span class="color_3">Case Western Reserve University</span></a></div></div>
                    </div>
                    <div class="col-md-3 ">
                      <div class="skill_box">
                          <p class="skills">Techniques</p>Microarray<br>qPCR<br>RNA-Seq<br><p></p></p>
                          <p class="skills">Languages</p>MATLAB<br>R<br>Python<br>Copasi<br>Mathematica<br></p>
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

<div class="project_title">
<h2><font color="F0CA43">01</font><a href="https://bitbucket.org/sonnhammergrni/genespider" target="_blank">GeneSPIDER</a>
</div>
<div class="project_description">
I have worked in collaborating with other students, namely <a href="https://bitbucket.org/xparx/" target="_blank">Andreas Tjärnberg</a>, on the GeneSpider Package for MATLAB, which hopes to tackle a few 
key issues in modern network inference.

Inference of gene regulatory networks (GRNs) is a central goal in systems biology. It is therefore important to evaluate the accuracy of GRN 
inference methods in the light of network and data properties. Although several packages are available for modelling, simulate, and analyse GRN inference,
they offer limited control of network topology together with system dynamics, experimental design, data properties, and noise characteristics. Independent 
control of these properties in simulations is key to drawing conclusions about which inference method to use in a given condition and what performance to 
expect from it, as well as to obtain properties representative of real biological systems.

<!--	<div class="project_title">
<h2><font color="#F0CA43">02</font> <a href="https://www.synapse.org/#!Synapse:syn5647810/wiki/399103" target="_blank">Respiratory Viral DREAM Challenge</a> </h2>
</div> 
                          <div class="project_title">
                              <h2><font color="#F0CA43">03</font> <a href="http://dreamchallenges.org/" target="_blank">DREAM 9</a> </h2>
                          </div>
                          <div class="project_description">Our team consisted of <a href="http://www.researchgate.net/profile/Kelly_Regan"target="_blank">Kelly, an M.D./Ph.D. student</a>, <a href="http://medicine.osu.edu/bsgp/current-students/current-students-by-last-name/a-b/abrams-zachary/pages/index.aspx" target="_blank">Zach, a Ph.D.student</a>, a Post-Doc and myself. We set out to determine the best model to predict which AML patients will have Complete Remission or will be Primary Resistant with the scientific rationale that answers to this question will help speed the pace of clinical decisions once a patient presents with AML characteristics. By identifying patients who do and do not respond to the current therapies, results will provide clinicians with a way to better guide the choice of therapies. The markers uncovered as most predictive provide potential new drug targets and insight into the mechanisms of AML. While our method was novel, it's <a href="https://www.synapse.org/#!Synapse:syn2455683/wiki/70754" target="_blank"> Balanced ACcuracy and Area Under ROC Curve were ultimately only around 55%.</a></div>
                    </div>
-->
                    <div>
                          <div class="project_title">
                              <h2><font color="#F0CA43">02</font> <a href="https://500px.com/dcolinmorgan/galleries/travel" target="_blank"><span class="color_3">Travel & Photo Blog</span></a></h2>
                          </div>
                          <div class="project_description">Some of my favorite shots from recent travels</div>
                    </div>

                    <div>
                          <div class="project_title">
                              <h2><font color="#F0CA43">03</font> <a href="https://500px.com/dcolinmorgan/galleries/painting" target="_blank"><span class="color_3">Paintings</span></a></h2>
                          </div>
                          <div class="project_description">Most of my works from over the years; <i>n.b. no formal training whatsoever</i></div>
                    </div>

<div class="project_title">
				<h2><font color=#F0CA43">04</font> <a href="https://www.goodreads.com/review/list/29053130-daniel?shelf=currently-reading" target="_blank"><span class="color_3">Read</span></a></h2>
</div>
			<table width="100%" border="0" cellpadding="1">
<tbody>
<tr>
<td align="center" valign="top" width="45%">      <style type="text/css" media="screen">
        .gr_grid_container {
          /* customize grid container div here. eg: width: 500px; */
        }

        .gr_grid_book_container {
          /* customize book cover container div here */
          float: left;
          width: 60px;
          height: 130px;
          padding: 50px 10px;
          overflow: hidden;
        }
      </style>
      <div id="gr_grid_widget_1456741080">
        <!-- Show static html as a placeholder in case js is not enabled - javascript include will override this if things work -->
    <div class="gr_grid_book_container"><a title="Homo Deus: A Brief History of Tomorrow" href="https://www.goodreads.com/book/show/31138556-homo-deus"><img alt="Homo Deus: A Brief History of Tomorrow" border="0" src="https://images.gr-assets.com/books/1468760805s/31138556.jpg" /></a></div>
    <div class="gr_grid_book_container"><a title="Sapiens: A Brief History of Humankind" href="https://www.goodreads.com/book/show/23692271-sapiens"><img alt="Sapiens: A Brief History of Humankind" border="0" src="https://images.gr-assets.com/books/1420585954s/23692271.jpg" /></a></div>
    <div class="gr_grid_book_container"><a title="Age of Ambition: Chasing Fortune, Truth, and Faith in the New China" href="https://www.goodreads.com/book/show/18490568-age-of-ambition"><img alt="Age of Ambition: Chasing Fortune, Truth, and Faith in the New China" border="0" src="https://images.gr-assets.com/books/1418113377s/18490568.jpg" /></a></div>
    <div class="gr_grid_book_container"><a title="Who Rules the World?" href="https://www.goodreads.com/book/show/28514478-who-rules-the-world"><img alt="Who Rules the World?" border="0" src="https://d2arxad8u2l0g7.cloudfront.net/books/1456093732s/28514478.jpg" /></a></div>
    <div class="gr_grid_book_container"><a title="Blood Oil: Tyrants, Violence, and the Rules that Run the World" href="https://www.goodreads.com/book/show/28175431-blood-oil"><img alt="Blood Oil: Tyrants, Violence, and the Rules that Run the World" border="0" src="https://d2arxad8u2l0g7.cloudfront.net/books/1449869961s/28175431.jpg" /></a></div>
    <div class="gr_grid_book_container"><a title="The Making of the Fittest: DNA and the Ultimate Forensic Record of Evolution" href="https://www.goodreads.com/book/show/39093.The_Making_of_the_Fittest"><img alt="The Making of the Fittest: DNA and the Ultimate Forensic Record of Evolution" border="0" src="https://d2arxad8u2l0g7.cloudfront.net/books/1388372523s/39093.jpg" /></a></div>
    <div class="gr_grid_book_container"><a title="One Hundred Years of Solitude" href="https://www.goodreads.com/book/show/320.One_Hundred_Years_of_Solitude"><img alt="One Hundred Years of Solitude" border="0" src="https://d2arxad8u2l0g7.cloudfront.net/books/1327881361s/320.jpg" /></a></div>
    <div class="gr_grid_book_container"><a title="The Magic Mountain" href="https://www.goodreads.com/book/show/88077.The_Magic_Mountain"><img alt="The Magic Mountain" border="0" src="https://d2arxad8u2l0g7.cloudfront.net/books/1403170928s/88077.jpg" /></a></div>
            
  </div>

      </div>

<td align="center" valign="top" width="45%"><div style="padding: 0px 7px 0px 7px;"><h3 style=""><a href="https://www.goodreads.com/user/show/29053130-daniel" style="text-decoration: none;color:#aaa;font-family:georgia,serif;font-style:italic;"></a></h3><br/><div id="gr_quote_body"></div><script src="https://www.goodreads.com/quotes/widget/29053130-daniel?v=2" type="text/javascript"></script><div style="text-align: right;"><a href="https://www.goodreads.com/quotes" style="color: #382110; text-decoration: none; font-size: 10px;"></a></div></div></td>
</tr>
</tbody>
</table>

</div>


<!--
                    <div>
                          <div class="project_title">
                              <h2><font color="#F0CA43">02</font> Project 2 Title</h2>
                          </div>
                          <div class="project_description">This is project description.</div>
                    </div>

                    <div>
                          <div class="project_title">
                              <h2><font color="#F0CA43">03</font> Project 3 Title</h2>
                          </div>
                    </div>
    -->              
           
            </div>
           </div> 
        </div>

        <div class="container">
            <div class=" contentContainer whatsnewPageTop" id="whatsnew">
              <div class="row whatsnewPageText">
                  <h2>What's New?</h2>
                  <ul>
<li class="whatsNewli"> <a href="https://dcolin.shinyapps.io/GSnetApp/" target="_blank">Network Visualization tool (beta)</a> specifically for fine tuning the sparsity estimation of inferred networks, October 2016.

<li class="whatsNewli"> <a href="https://dcolinmorgan.github.io/halftime/#/" target="_blank"><i>Network Inference</i></a>, Halftime Seminar: <strong>2nd Checkpoint- Feb 2017</strong>.

<li class="whatsNewli"> <a href="https://github.com/dcolinmorgan/SciLifeLab/blob/master/NestBoot%20poster16.pdf" target="_blank"><i>Nested bootstrapping for reliable GRNI</i></a>, <strong>Poster- September 2016</strong>.

<!-- <li class="whatsNewli"> <a href="http://su.diva-portal.org/smash/record.jsf?pid=diva2%3A865169&dswid=6223" target="_blank"><i>GeneSPIDER: Generation and Simulation Package for Informative Data ExploRation</i></a>, <strong>Manuscript- Feb 2016</strong>. -->
<li class="whatsNewli"> <a href="https://github.com/dcolinmorgan/ResearchPlanBeta/blob/master/researchplanmorgan%20(2).pdf" target="_blank"><i>PhD research plan</i></a>, a proposal of four projects to carry me through my doctoral studies, <strong>1st Checkpoint- December 2015</strong>. 
<li class="whatsNewli"> <a href="https://github.com/dcolinmorgan/SciLifeLab/blob/master/bootstrap%20poster.pdf" target="_blank"><i>Extending the bootstrap procedure for network inference in linear systems</i></a>, <strong>Poster- September 2015</strong>.

<li class="whatsNewli">Set up a <a href="https://scholar.google.se/citations?hl=en&user=iznLQmYAAAAJ&view_op=list_works&gmla=AJsN-F77xYrra1OPy60IwekzNVSOc2AS5phVI-htwjxx6qlNUzRF-AL7Y202OuBIEc51pE1DyqUlsWYFJvegqDQxEiukCQWHydlwQCYr775e9WhoJ0Jiv9mPMDHO5hMF1qOe4RupMPoN"target="_blank">Google Scholar Profile</a> to track my publications to date.
<li class="whatsNewli"> I started in the Sonnhammer Lab January 2015, specifically tasked with control systems and systems biology for network inference.
                      <li class="whatsNewli">On November 16, 2014, I successfully defended <a href="https://etd.ohiolink.edu/ap/10?0::NO:10:P10_ACCESSION_NUM:osu1416989632" target="_blank"><span class="color_3">my M.Sc. thesis</span></a> in which I finished development of an algorithm to isolatesignificant sub-modules within larger network motifs capable of describing differential gene expression to a level more accurate than classical efforts.
                      <li class="whatsNewli">In April 2014, I finished naive algorithm development and experimental validation under the supervision of <a href="http://medicine.osu.edu/bmi/people/kun_huang/Pages/index.aspx"target="_blank">Kun Huang, Ph.D.</a> and <a href="http://medicine.osu.edu/bmi/people/james_chen/pages/index.aspx" target="_blank">Dr. James Chen</a>, respectively, for preliminary analysis of 30 drugs in primary oncogenic bladder tissue.
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
                        <div class="col-md-4" id="contact_links"style="width:350px;">                     
                              <a href="https://se.linkedin.com/in/dcolinmorgan" target="_blank"> <span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-linkedin fa-stack-1x fa-inverse"></i></span> </a>
                              <a href="https://github.com/dcolinmorgan" target="_blank"> <span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i>  <i class="fa fa-github fa-stack-1x fa-inverse"></i></span> </a>
                              <a href="https://twitter.com/dcolinmorgan" target="_blank"> <span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i>  <i class="fa fa-twitter fa-stack-1x fa-inverse"></i></span> </a>
			      <a href="https://www.instapaper.com/p/dcolinmorgan" target="_blank"><img src="images/instapaper.png" width="30" height="30" alt="instapaper"></a>
				<a href="http://www.last.fm/user/dcolinmorgan" target="_blank"><img src="images/lastfm.png" width="30" height="30" alt="lastfm"></a>
<a href="https://orcid.org/0000-0001-8326-6178" target="_blank"><img src="images/my_orcid_qrcode.png" width="35" height="35" alt="orcid"/></a>
<!--				<a href="mailto:me@devcolin.com" target="_blank"> <span class="fa-stack fa-lg">  <i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-envelope-o fa-stack-1x fa-inverse"></i></span> </a>
	<div class="row">

                              <p><span id="email_id"></span> me@DanielCMorgan.com</p>
                        </div>-->

                  </div>           
        </div>        
<!--Fixed footer-->
<div class="navbar navbar-default navbar-static-bottom footer clear-navbar-inner">
<div class="container">
<div class="row">
<!--
<div class="col-md-6 text-center">                     
                          <a href="https://www.linkedin.com/" target="_blank"> <span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-linkedin fa-stack-1x fa-inverse"></i></span> </a>
                          <a href="https://github.com/" target="_blank"> <span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i>  <i class="fa fa-github fa-stack-1x fa-inverse"></i></span> </a>
                          <a href="https://twitter.com/" target="_blank"> <span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i>  <i class="fa fa-twitter fa-stack-1x fa-inverse"></i></span> </a>                         
<a href="mailto:me@devgupta.com" target="_blank"> <span class="fa-stack fa-lg">  <i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-envelope-o fa-stack-1x fa-inverse"></i></span> </a>
                          
                    </div>
    -->             

                    <div class="col-md-12 text-center copyright">
                          Copyright &copy; 2017 Daniel Morgan. All Rights Reserved.
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
    
 </body>
</html>
<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>D.C. Morgan Portfolio</title>

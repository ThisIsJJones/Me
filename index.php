

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Jordan Jones</title>
    <base href="/">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="css/profile.css">
    <link rel="stylesheet" type="text/css" href="css/abilities.css">
    <link rel="stylesheet" type="text/css" href="css/experience.css">
    <link rel="stylesheet" type="text/css" href="css/education.css">
    <link rel="stylesheet" type="text/css" href="css/contact.css">
    
    <link rel="stylesheet" type="text/css" href="css/fullpage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

    
<div id="fullpage" class="hero">
    <div class="section" id="profileBackground">
        <div  id="stars"></div>
        <div id="sway">
            <div id="stars2"></div>
        </div>
        <div id="stars3"></div>

        <div id="content" >
            <div class="gradient" id="title" >
                <span style="letter-spacing: 22px">Jordan Jones</span>
                <br>
                <span class="gradient" style="font-size: 12pt;">
                    <span class="letterLift letterLift-s">S</span>
                    <span class="letterLift letterLift-o1">o</span>
                    <span class="letterLift letterLift-f">f</span>
                    <span class="letterLift letterLift-t">t</span>
                    <span class="letterLift letterLift-w">w</span>
                    <span class="letterLift letterLift-a">a</span>
                    <span class="letterLift letterLift-r1">r</span>
                    <span class="letterLift letterLift-e1">e</span>
                    <span class="letterLift">&nbsp;</span>
                    <span class="letterLift letterLift-d">D</span>
                    <span class="letterLift letterLift-e2">e</span>
                    <span class="letterLift letterLift-v">v</span>
                    <span class="letterLift letterLift-e3">e</span>
                    <span class="letterLift letterLift-l">l</span>
                    <span class="letterLift letterLift-o2">o</span>
                    <span class="letterLift letterLift-p">p</span>
                    <span class="letterLift letterLift-e4">e</span>
                    <span class="letterLift letterLift-r2">r</span>
                </span>
                <div id="period"></div>
            </div>
            <div id="options">
                <a href="#Me"><i class="fa fa-chevron-circle-down" style="font-size: 50px"></i></a>
            </div>
            </div>
    </div>
    <div class="section" style="background: radial-gradient(ellipse at top, #1B2735 0%, #090A0F 90%);">
        <div class="slide">
           <div class="pageBanner">
                    Me
            </div>
            <div id="profileContent">
                
                <div id="leftContent">
                    <h2>
                       About
                    </h2>
                    <div class="underscore">_</div>
                    <p>
                        Hello, welcome.
                        <br>I enjoy fully understanding a problem. It allows me to code efficient and elegent program solutions.
                        As every problem varies I recognize the limitations in my knowledge and take that as a opportunity to fill the gap. <i>Always</i> learning. I'm capable of working on both individual and team-oriented projects. Being able to bounce ideas off one another is key to building robust systems. Navigate to the right to read more about myself personably or scroll down to learn about my abilities. 
                    </p>
                </div>
                <img id="profilePicture" src="images/Me.jpg">
                <div id="rightContent">
                    <h2>
                        Details
                    </h2>
                    <div class="underscore">_</div>
                    <p>
                        <strong>Name:</strong>
                        <br>
                        <span>Jordan Jones</span>
                        <br>
                        <strong>Age:</strong>
                        <br>
                        <span id="myAge"></span>
                        <br>
                        <strong>Currently Living:</strong>
                        <br>
                        <span>Eau Claire, WI</span>
                        <br>
                        <strong>Hometown:</strong>
                        <br>
                        <span>Pewaukee, WI</span>
                        <br>
                        <strong>Willing to relocate:</strong>
                        <br>
                        <span>Definitely</span>
                    </p>
                </div>
                <script>
                    function calculate_age(dob) { 
                        var diff_ms = Date.now() - dob.getTime();
                        var age_dt = new Date(diff_ms); 
                        return Math.abs(age_dt.getUTCFullYear() - 1970);
                    }
                    document.getElementById('myAge').innerHTML = calculate_age(new Date(1997, 02, 20));
                </script>
            </div>
            </div>
            <div class="slide">
            <div class="pageBanner" style="position: relative;">
                    Interests
            </div>
            <div id="images">
                <span id="footballImage">
                    <p class="top-left">
                        <span class="interestTitle">Football</span>
                        <br>
                        <br>
                        <span class="interestDetail">I grew up playing since 5th grade. It was inevitable of me playing, with my dad and two siblings leaving shoes to fill. Once I grew up to the high school level, I was voted as a captain of the team. I was fortunate to get the opportunity to continue my education in college and play college ball. Football will always be a big part of my life as I have learned so many lessons that drive my day to day actions.</span>
                    </p>
                    <img src="images/football.jpg">
                </span>
                <span id="cabinImage">
                    <p class="top-left">
                        <span class="interestTitle">Outdoors</span>
                        <br>
                        <br>
                        <span class="interestDetail">Fishing, skiing, eating smores, with friends and family are all key elements of being able to escape to the outdoors. Given the option I would rather be out in nature whether that be at a cabin or tenting at a National Park. I can't wait to explore more of the outdoors on this beautiful Earth.</span>
                    </p>
                    <img src="images/waterfall.JPG">
                </span>
                <span id="moonImage">
                    
                    <p class="top-left">
                        <span class="interestTitle">Astronomy</span>
                        <br>
                        <br>
                        <span class="interestDetail">A love for the sky. There is something about seeing planets that are millions of miles away and stars that make all sorts of images in the night sky. But beyond just seeing these objects I enjoy learning how <i>it</i> all came to be.</span>
                    </p>
                    <img src="images/uwec_moon.jpg">
                </span>
                
            </div>
            <div class="mainInterest">
            <p id="typeWriter">
                I'm a straightforward person: I enjoy sports and most competitive activities, as well as the outdoors, and pondering astronomy conundrums. Other than that I do enjoy technology and am astounded by how quick it's been evolving. My main interest in the tech industry is undertermined, however I have a few candidates, Mobile Technology, Security, Machine Learning, and the Internet of Things.
            </p>
            </div>
        </div>
    </div>
    <div class="section" style=" background: radial-gradient(ellipse at bottom, #1B2735 0%, #090A0F 90%);">
        <div class="pageBanner">
                    Abilities
        </div>
        <div>
            <span class="abilityContent">
                <ul id="ability-1">
                <h2>Languages</h2>
                    <hr align="right">
                <li>
                    <span>Java</span>
                    <span class="abilityStat">
                        <span class="glyphicon glyphicon-star "></span>
                        <span class="glyphicon glyphicon-star "></span>
                        <span class="glyphicon glyphicon-star "></span>
                        <span class="glyphicon glyphicon-star "></span>
                        <span class="glyphicon glyphicon-star"></span>
                    </span>
                </li>
                    <li>
                    <span>HTML</span>
                    <span class="abilityStat">
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                    </span>
                </li>
                <li>
                    <span>Javascipt</span>
                    <span class="abilityStat">
                        <span class="glyphicon glyphicon-star "></span>
                        <span class="glyphicon glyphicon-star "></span>
                        <span class="glyphicon glyphicon-star "></span>
                        <span class="glyphicon glyphicon-star "></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                    </span>
                </li>
                <li>
                    <span>C</span>
                    <span class="abilityStat">
                        <span class="glyphicon glyphicon-star "></span>
                        <span class="glyphicon glyphicon-star "></span>
                        <span class="glyphicon glyphicon-star "></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                    </span>
                </li>
                <li>
                    <span>C++</span>
                    <span class="abilityStat">
                        <span class="glyphicon glyphicon-star "></span>
                        <span class="glyphicon glyphicon-star "></span>
                        <span class="glyphicon glyphicon-star "></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                    </span>
                </li>
                <li>
                    <span>Python</span>
                    <span class="abilityStat">
                        <span class="glyphicon glyphicon-star "></span>
                        <span class="glyphicon glyphicon-star "></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                    </span>
                </li>
                    
                <li>
                    <span>SQL</span>
                    <span class="abilityStat">
                        <span class="glyphicon glyphicon-star "></span>
                        <span class="glyphicon glyphicon-star "></span>
                        <span class="glyphicon glyphicon-star "></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                    </span>
                </li>
                <li>
                    <span>Swift / Xcode</span>
                    <span class="abilityStat">
                        <span class="glyphicon glyphicon-star "></span>
                        <span class="glyphicon glyphicon-star "></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                    </span>
                </li>
                
                <li>
                    <span>CSS</span>
                    <span class="abilityStat">
                        <span class="glyphicon glyphicon-star "></span>
                        <span class="glyphicon glyphicon-star "></span>
                        <span class="glyphicon glyphicon-star "></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                    </span>
                </li>
                <li>
                    <span>Node.js</span>
                    <span class="abilityStat">
                        <span class="glyphicon glyphicon-star "></span>
                        <span class="glyphicon glyphicon-star "></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                    </span>
                </li>
                <li>
                    <span>Ruby</span>
                    <span class="abilityStat">
                        <span class="glyphicon glyphicon-star "></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                    </span>
                </li>
                
                </ul>
                <ul id="ability-2">
                <h2>Frameworks</h2>
                    <hr align="right">
                    <li>
                    <span>Spring Framework</span>
                    <span class="abilityStat">
                        <span class="glyphicon glyphicon-star "></span>
                        <span class="glyphicon glyphicon-star "></span>
                        <span class="glyphicon glyphicon-star "></span>
                        <span class="glyphicon glyphicon-star "></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                    </span>
                </li>
                <li>
                    <span>Angular 2+</span>
                    <span class="abilityStat">
                        <span class="glyphicon glyphicon-star "></span>
                        <span class="glyphicon glyphicon-star "></span>
                        <span class="glyphicon glyphicon-star "></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                    </span>
                </li>
                    <li>
                    <span>Bootstrap</span>
                    <span class="abilityStat">
                        <span class="glyphicon glyphicon-star "></span>
                        <span class="glyphicon glyphicon-star "></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                    </span>
                </li>
                      <li>
                    <span>Hibernate</span>
                    <span class="abilityStat">
                        <span class="glyphicon glyphicon-star "></span>
                        <span class="glyphicon glyphicon-star "></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                    </span>
                </li>
                    <li>
                    <span>Express.js</span>
                    <span class="abilityStat">
                        <span class="glyphicon glyphicon-star "></span>
                        <span class="glyphicon glyphicon-star "></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                    </span>
                </li>
                  
                </ul>
                <ul id='ability-3'>
                <h2>Misc.</h2>
                    <hr align="right">
                <li>
                    <span>Debugging</span>
                    <span class="abilityStat">
                        <span class="glyphicon glyphicon-star "></span>
                        <span class="glyphicon glyphicon-star "></span>
                        <span class="glyphicon glyphicon-star "></span>
                        <span class="glyphicon glyphicon-star "></span>
                        <span class="glyphicon glyphicon-star "></span>
                    </span>
                </li>
                <li>
                    <span>JSON</span>
                   <span class="abilityStat">
                        <span class="glyphicon glyphicon-star "></span>
                        <span class="glyphicon glyphicon-star "></span>
                        <span class="glyphicon glyphicon-star "></span>
                        <span class="glyphicon glyphicon-star "></span>
                        <span class="glyphicon glyphicon-star "></span>
                    </span>
                </li>
                <li>
                    <span>Agile Development</span>
                    <span class="abilityStat">
                        <span class="glyphicon glyphicon-star "></span>
                        <span class="glyphicon glyphicon-star "></span>
                        <span class="glyphicon glyphicon-star "></span>
                        <span class="glyphicon glyphicon-star "></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                    </span>
                </li>
                
                <li>
                    <span>MVC Pattern</span>
                    <span class="abilityStat">
                        <span class="glyphicon glyphicon-star "></span>
                        <span class="glyphicon glyphicon-star "></span>
                        <span class="glyphicon glyphicon-star "></span>
                        <span class="glyphicon glyphicon-star "></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                    </span>
                </li>
                <li>
                    <span>REST API</span>
                    <span class="abilityStat">
                        <span class="glyphicon glyphicon-star "></span>
                        <span class="glyphicon glyphicon-star "></span>
                        <span class="glyphicon glyphicon-star "></span>
                        <span class="glyphicon glyphicon-star "></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                    </span>
                </li>
                    <li>
                    <span>Linux</span>
                    <span class="abilityStat">
                        <span class="glyphicon glyphicon-star "></span>
                        <span class="glyphicon glyphicon-star "></span>
                        <span class="glyphicon glyphicon-star "></span>
                        <span class="glyphicon glyphicon-star "></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                    </span>
                </li>
                    <li>
                    <span>GoF Design Patterns</span>
                    <span class="abilityStat">
                        <span class="glyphicon glyphicon-star "></span>
                        <span class="glyphicon glyphicon-star "></span>
                        <span class="glyphicon glyphicon-star "></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                    </span>
                </li>
                
            </ul>
            </span>
        </div>
    </div>
    <div class="section" style=" background: radial-gradient(ellipse at top, #1B2735 0%, #090A0F 90%);">
        <div class="pageBanner">
             Experience
        </div>
        
        <div id="jobs">
            <div id=menardsExperience>
            <span class="jobTitle">
                <strong>Menards Inc.</strong>
                <br>
                <p>May 2017 - Present</p>
            </span>
            <span class="jobDesc">
                <strong>Point of Sale - Intern</strong><br>
                <strong>Backend Developer</strong>
                <br>
                <ul>
                    <li>Work with stores, help desk, and technical support Team Members to troubleshoot problems as they arise
                    </li>
                    <li>Develop and maintain applications for Menards stores and external web sites primarily using Java
                    </li>
                    <li>Cooperate on the back-end team to modify, implement, and maintain REST/SOAP services
                    </li>
                    <li>Analyze data using Splunk to gain better insight on how our services are being used
                    </li>
                    <li>Make daily use of several Atlassian software products to manage projects and to communicate efficiently with Team Members
                    </li>
                    <li>Utilize frameworks Angular and Spring to develop the front and back end of an in-house utility 
                    </li>
                    <li>Gave Team Members the ability to create needed documents and search store details more efficiently and user-friendly 
                    </li>
                     <div class="location"> Eau Claire, WI</div>
                   </ul>
               
            </span>
            </div>
            <div id=michaelExperience>
            <span class="jobTitle">
                <strong>Michael Angelo's</strong>
                <br>
                <p>Summer '16</p>
            </span>
            <span class="jobDesc">
                <strong>Summer Intern</strong>
                <br>
                <ul>
                    <li>Created a user-friendly interface to access data, which allowed parts to be found easily during reorganization</li>
                    <li>Aided mechanics in the process of efficiently finding the necessary parts for a machine</li>
                    <li>This program significantly reduced machine down time, saving the company time, frustration, and money</li>   
                     <div class="location"> Austin, TX</div>
                   </ul>
            </span>
            </div>
        </div>
    </div>
    <div class="section" style="background: radial-gradient(ellipse at bottom, #1B2735 0%, #090A0F 90%);">
        <div class="pageBanner">
            Education
        </div>
        
       <div id="educationContent">
           <div id="courses">
            <br>
               <ul id="educationEauClaire">
                <h2>Eau Claire</h2>
                <hr align="right">
                   <li><span>Graduation</span><span>May 2019</span></li>
                   <li><span>Major</span><span>Computer Science</span></li>
                   <li><span>GPA</span><span>3.4</span></li>
                   <br>
                   <br>
                   <li><div id="imageContent">
                        <img id="uwecLogo" src="images/UWEC.png"/>
                        </div>
                   </li>
                   <br>
                <p>
                    
                </p>
                </ul>
               <ul id="educationCourses">
                <h2>CS Courses</h2>
                <hr align="right">
                   <li><span>Intro Object Oriented Programming</span></li>
                   <li><span>Advanced Programming and Data Structures</span></li>
                   <li><span>Database Systems </span></li>
                   <li><span>Web Systems</span></li>
                   <li><span>Computer Systems</span></li>
                   <li><span>Computer Architecture</span></li>
                   <li><span>Algorithms</span></li>
                   <li><span>Mobile Development</span></li>
                   <li><span>Software Engineering 1-2</span></li>
                   <li><span>Machine Learning</span></li>
                </ul>
               <ul id="educationBooks">
                <h2>Books</h2>
                <hr align="right">
                   <li><span>Java Network Programming</span></li>
                   <li><span>Code Complete</span></li>
                   <li><span>Hacking - The Art of Exploitation</span></li>
                   <li><span>The C++ Programming Language</span></li>
                   <li><span>Unity in Action</span></li>
                </ul>
            </div>
        </div>
       
    </div>
     <div class="section" style=" background: radial-gradient(ellipse at top, #1B2735 0%, #090A0F 90%);">
         <div class="pageBanner">
            Contact <?php echo"tttt";?>
        </div>
          
         <div id="sendMessageForm">
             <form method="post" action="./php/email.php">
                 <div>Name</div>
                 <input class="inputByUser" id="formName" type="text" name="senderName" autocomplete="off"/>
                 <div>Email</div>
                 <input class="inputByUser" id="formEmail" type="email" name="senderEmail" autocomplete="off"/>
                 <div>Message</div>
                 <textarea class="inputByUser" id="formMessage" name="senderMessage" autocomplete="off"></textarea>
                 <input class="sendButton" type="submit" value="Send"/>
             </form>
         </div>
         <div id="thankyou">
            <p id="thankyouMessage">
                Thank you for taking the time to review a little about who I am and the abilities I possess. If you want further information feel free to view my <a href="https://www.linkedin.com/in/jordan-jones-636b59152" target="_blank">linkedIn  <img src="/images/linkdin.png" width="20" height="20"></a> and/or my <a href="https://github.com/ThisIsJJones" target="_blank"> github  <img src="images/GitHub.png" width="20" height="20"></a>. Fill out the form to contact me and I will get back to you as soon as possible. 
             </p>
             <p style="font-family: Brush Script MT; font-size: 32pt; float: right; margin-top:15%">Jordan Jones</p>
         </div>
         
         <div>
         
         </div>
    </div>

</div>
<div class="gradient" id="quoteContainer">
    <span id="quoteContent"></span>
</div>

<script src="js/fullpage.js"></script>

<script src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>

<script src="js/index.js"></script>

<script>
    var quotes = ["Unless someone like you cares a whole awful lot, nothing is going to get better. It's not. - Dr. Suess",
        'Today you are you! That is truer than true! There is no one alive who is you-er than you! - Dr. Suess',
        "A person's a person, no matter how small. - Dr. Suess",
        "The more that you read, the more things you will know. The more that you learn, the more places you'll go. - Dr. Suess",
        "How did it get so late so soon? It's night before it's afternoon. December is here before it's June. My goodness how the time has flewn. How did it get so late so soon? - Dr. Suess",
        "You know you're in love when you can't fall asleep because reality is finally better than your dreams. - Dr. Suess",
        'Sometimes the questions are complicated and the answers are simple. - Dr. Suess',
        "You have brains in your head. You have feet in your shoes. You can steer yourself any direction you choose. - Dr. Suess",
        "Today was good. Today was fun. Tomorrow is another one. - Dr. Suess",
        "If you can't explain it simply, you don't understand it well enough. - Albert Einstein"];
    
    function addTextOnImage(image){
        var ele = document.getElementById(image);
    var buddy = ele.children;
    var a = 0;
    for(a = 0; a<buddy.length; a++){
        if(a != 1){
            buddy[a].classList.add('showRealQuick');
        }else{
            buddy[a].classList.add('removeRealQuick');
        }
    }
    }
    
    function removeTextOnImage(image){
        var ele = document.getElementById(image);
    var buddy = ele.children;
    var a = 0;
    for(a = 0; a<buddy.length; a++){
        if(a != 1){
            buddy[a].classList.remove('showRealQuick');
        }else{
            buddy[a].classList.remove('removeRealQuick');
        }
    }
    }
    
    document.getElementById("formName").classList.add("applyBoxShadow")
    document.getElementById("formName").addEventListener("click", () => {
        document.getElementById("formName").classList.add("applyBoxShadow")
        document.getElementById("formEmail").classList.remove("applyBoxShadow")
        document.getElementById("formMessage").classList.remove("applyBoxShadow")
    })
    
    document.getElementById("formEmail").addEventListener("click", () => {
        document.getElementById("formName").classList.remove("applyBoxShadow")
        document.getElementById("formEmail").classList.add("applyBoxShadow")
        document.getElementById("formMessage").classList.remove("applyBoxShadow")
    })
    
    document.getElementById("formMessage").addEventListener("click", () => {
        document.getElementById("formName").classList.remove("applyBoxShadow")
        document.getElementById("formEmail").classList.remove("applyBoxShadow")
        document.getElementById("formMessage").classList.add("applyBoxShadow")
    })
    
    

    var fullpage = new fullpage('#fullpage', {
        //options here
         autoScrolling:true,
        // scrollHorizontally: true
        anchors: ['page0', 'Me', 'page2', 'page3', 'page4', 'page5'],
	   verticalCentered: false,
        navigation: true,
        navigationTooltips: ['Home', 'Me', 'Abilities', 'Experience', 'Education', 'Contact'],
        navigationPosition: 'left',
        slidesNavigation: false,
        loopHorizontal: false,
        parallaxOptions: {type: 'reveal', percentage: 100, property: 'background'},
        afterLoad: function(origin, destination, direction){
            if(destination.index==0){
                document.getElementById("fp-nav").classList.remove('removeNavBar');
                document.getElementById("fp-nav").classList.remove('addNavBar');
                document.getElementById("fp-nav").classList.add('removeNavBar');
            }else if(destination.index==5){
                document.getElementById("formName").focus();
                document.getElementById("formName").classList.add("applyBoxShadow")
                document.getElementById("formEmail").classList.remove("applyBoxShadow")
                document.getElementById("formMessage").classList.remove("applyBoxShadow")
            }
        },
        onLeave: function(origin, destination, direction){
            if(destination.index != 0){
		      document.getElementById("quoteContainer").style="display: block;"
            document.getElementById("quoteContent").innerHTML = "\"" + quotes[Math.floor((Math.random()*quotes.length))];
                document.getElementById("fp-nav").classList.remove('removeNavBar');
                document.getElementById("fp-nav").classList.remove('addNavBar');
             document.getElementById("fp-nav").classList.add('addNavBar');

            }else{
                document.getElementById("quoteContainer").style = "display: none;";
                document.getElementById("fp-nav").classList.remove('removeNavBar');
                document.getElementById("fp-nav").classList.remove('addNavBar');
                document.getElementById("fp-nav").classList.add('removeNavBar');
            }
            
            
            if(destination.index == 2){
                //animate abilities page
                document.getElementById('ability-1').classList.add('ability-1-show');
                document.getElementById('ability-2').classList.add('ability-2-show');
                document.getElementById('ability-3').classList.add('ability-3-show');
                
                var children = document.getElementById('ability-1').children;
                var index = 0;
                //grow hr element
                children[1].classList.add('growHr-1');
                //slide each ability over
                counter=1;
                for(index=2; index<children.length; index++){
                    children[index].classList.add('abilityItemMoveRight');
                    children[index].style.setProperty('animation-delay', counter+'s');
                    counter += .1;
                }
                
            
                var children = document.getElementById('ability-2').children;
                //grow hr element
                children[1].classList.add('growHr-2');
                //slide each ability over
                for(index=2; index<children.length; index++){
                    children[index].classList.add('abilityItemMoveRight');
                    children[index].style.setProperty('animation-delay', counter+'s');
                    counter += .1;
                }
                
                var children = document.getElementById('ability-3').children;
                //grow hr element
                children[1].classList.add('growHr-3');
                //slide each ability over
                for(index=2; index<children.length; index++){
                    children[index].classList.add('abilityItemMoveRight');
                    children[index].style.setProperty('animation-delay', counter+'s');
                    counter += .1;
                }
                
            }else if(destination.index == 4){
                //animate education page
                document.getElementById('uwecLogo').classList.add('animateUwecLogo');
                
                
                 document.getElementById('educationEauClaire').classList.add('ability-1-show');
                document.getElementById('educationCourses').classList.add('ability-2-show');
                document.getElementById('educationBooks').classList.add('ability-3-show');
                
                var children = document.getElementById('educationEauClaire').children;
                children[1].classList.add('growHr-1');
                var counter=1;
                for(index=2; index<children.length; index++){
                    children[index].classList.add('abilityItemMoveRight');
                    children[index].style.setProperty('animation-delay', counter+'s');
                    counter += .1;
                }
                
                var children = document.getElementById('educationCourses').children;
                children[1].classList.add('growHr-2');
                for(index=2; index<children.length; index++){
                    children[index].classList.add('abilityItemMoveRight');
                    children[index].style.setProperty('animation-delay', counter+'s');
                    counter += .1;
                }
                
                
                var children = document.getElementById('educationBooks').children;
                children[1].classList.add('growHr-3');
                for(index=2; index<children.length; index++){
                    children[index].classList.add('abilityItemMoveRight');
                    children[index].style.setProperty('animation-delay', counter+'s');
                    counter += .1;
                }

            }
        },
        onSlideLeave: function(section, origin, destination, direction){
            if(destination.index == 1){
                document.getElementById('fp-nav').classList.remove('fp-left');
                document.getElementById('fp-nav').classList.add('fp-right');
                var sections = document.getElementById('fp-nav').children[0].childNodes.length;
                var index = 0;
                for(index=0; index<sections; index++){
                    document.getElementById('fp-nav').children[0].childNodes[index].childNodes[1].classList.remove('fp-left')
                    document.getElementById('fp-nav').children[0].childNodes[index].childNodes[1].classList.add('fp-right')
                }
                
                
                setTimeout(() => {addTextOnImage('footballImage');}, 700);
                setTimeout(() => {addTextOnImage('cabinImage');}, 1300);
                setTimeout(() => {addTextOnImage('moonImage');}, 1900);

                setTimeout(() => {removeTextOnImage('footballImage');}, 3000);
                setTimeout(() => {removeTextOnImage('cabinImage');}, 3200);
                setTimeout(() => {removeTextOnImage('moonImage'); typeWriter();}, 3400);
                    
            }else{
                document.getElementById('fp-nav').classList.remove('fp-right');
                document.getElementById('fp-nav').classList.add('fp-left');
                var sections = document.getElementById('fp-nav').children[0].childNodes.length;
                var index = 0;
                for(index=0; index<sections; index++){
                    document.getElementById('fp-nav').children[0].childNodes[index].childNodes[1].classList.remove('fp-right')
                    document.getElementById('fp-nav').children[0].childNodes[index].childNodes[1].classList.add('fp-left')
                }
            }
        }
    });
    
    
</script>
 
    
    
    
</body>

</html>

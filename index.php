<!DOCTYPE html>
<html lang="en">

<head>
    <title>MyWebsite</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
    body {
        font: 400 15px/1.8 Lato, sans-serif;
        color: #777;
    }

    h3,
    h4 {
        margin: 10px 0 30px 0;
        letter-spacing: 10px;
        font-size: 20px;
    }

    .nav-tabs li a {
        color: #777;
    }

    .navbar {
        font-family: Montserrat, sans-serif;
        margin-bottom: 0;
        background-color: #2d2d30;
        border: 0;
        font-size: 11px !important;
        letter-spacing: 4px;
        opacity: 0.9;
    }

    .navbar li a,
    .navbar .navbar-brand {
        color: #d5d5d5 !important;
    }

    .navbar-nav li a:hover {
        color: #fff !important;
    }

    .navbar-nav li.active a {
        color: #fff !important;
        background-color: #29292c !important;
    }

    .navbar-default .navbar-toggle {
        border-color: transparent;
    }

    .open .dropdown-toggle {
        color: #fff;
        background-color: #555 !important;
    }

    .dropdown-menu li a {
        color: #000 !important;
    }

    .dropdown-menu li a:hover {
        background-color: red !important;
    }

    footer {
        background-color: #2d2d30;
        color: #f5f5f5;
    }

    .mySlides {
        display: none
    }
    </style>
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

    <!-- Navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#myPage"><i class="fa fa-address-card-o" style="font-size:36px"></i></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#myPage">HOME</a></li>
                    <li><a href="#aboutme">ABOUT ME</a></li>
                    <li><a href="#exper">EXPERIENCE</a></li>
                    <li><a href="#contact">CONTACT</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">DOCUMENT
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="Paper.pdf">PAPER</a></li>
                            <li><a href="Wipada.pdf">RESUME</a></li>
                            <li><a href="#">TRANSCRIPT</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page content -->
    <div class="w3-content" style="max-width:2000px;margin-top:46px">

        <!-- Automatic Slideshow Images -->
        <div class="mySlides w3-display-container w3-center">
            <img src="1.jpg" style="width:100%">
            <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
                <h3>Porpia's website!!</h3>
            </div>
        </div>
        <div class="mySlides w3-display-container w3-center">
            <img src="2.jpg" style="width:100%">
            <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
                <h3>Welcome to my website!</h3>
            </div>
        </div>
        <div class="mySlides w3-display-container w3-center">
            <img src="3.jpg" style="width:100%">
            <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
                <h3>Nice to meet you!</h3>
            </div>
        </div>

        <!-- The Band Section -->
        <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="aboutme">
            <h3 class="w3-wide">ABOUT ME</h3>
            <p class="w3-opacity"><i>WIPADA SILARACH</i></p>
            <p class="w3-justify">Hi everyone! my name is Wipada Silarach or just call me Porpia. I'm graduated from
                Khonkaen University
                major Computer Science. I learning about Data Scientist, Data Engineering process for transform data to
                information and I learned some computer language. CSS, Bootstrap, PHP, HTML that is some language
                I had used to create my website.At first Data Science and Data Engineering it hard for me but when I
                knowledge about it don't hard that much. I learned how to prepare data for use in model and sometime
                it's fun.</p>
            <div class="w3-row w3-padding-32">
                <div class="w3-third">
                    <p>Me</p>
                    <img src="mypic.jpg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
                    <p>Name: Wipada Silarach</p>
                    <p>Nickname: Porpia</p>
                    <p>Was born 16 December 1999</p>
                </div>
                <div class="w3-third">
                    <p>Skills</p>
                    <img src="mypic.jpg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
                    <p>PHP, HTML, CSS, Bootstrap</p>
                    <p>Python, SQL, java </p>
                    <p>Rapid Miner</p>
                </div>
                <div class="w3-third">
                    <p>Education</p>
                    <img src="mypic.jpg" class="w3-round" alt="Random Name" style="width:60%"><br>
                    <p>2558 - 2560</p>
                    <p>School: Kutchabprachasan, GPA: 3.68</p>
                    <p>2561 - 2565</p>
                    <p>University: Khonkaen, GPA: 2.71</p>
                </div>
            </div>
            <br>
            <hr>
            <h3 class="w3-wide">CAREER OBJECTIVE</h3>
            <div class="row">
                <div class="col-sm-6">
                    <p class="w3-justify">(1) A competent recent graduate. Seeking a position in the field of Data
                        Science
                        to contribute my computer sciences knowledge and expertise to a towards the
                        continuing advancement of the company.</p>
                </div>
                <div class="col-sm-6">
                    <p class="w3-justify">(2) To uses knowledge and abilities to effectively create and design
                        multiple websites.
                        Strong skills and knowledge in web development with relevant programs and software tools.
                    </p>
                </div>
            </div><br>
            <hr>

            <h3 class="w3-wide">MY PERSONAL</h3>
            <p class="w3-justify">"If something's easy to get, you're more likely to get bored and forget about it,
                but the sense of accomplishment is different when you work hard to earn something even
                if you fail, at least you know that you tried" I'm usually a person who lacks confidence
                but always strive and focus on what I do.</p>
        </div>

        <!-- The Section -->
        <div class="w3-black" id="exper">
            <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
                <h2 class="w3-wide w3-center">EXPERIENCE</h2>
                <p class="w3-opacity w3-center"><i>It's my project and internship!</i></p>
                <p class="w3-opacity w3-center">You can visit my full project at <a
                        href="https://github.com/wipada-ai">Github</a></p>

                <br>
                <div class="row text-center">
                    <div class="col-sm-6">
                        <img src="sen2.gif" class="img-responsive" style="width:100%" alt="Image">
                        <p>Positive</p>
                    </div>
                    <div class="col-sm-6">
                        <img src="sen3.gif" class="img-responsive" style="width:100%" alt="Image">
                        <p>Negative</p>
                    </div>
                </div>

                <div class="row text-center">
                    <div class="col-sm-6">
                        <img src="sen4.gif" class="img-responsive" style="width:100%" alt="Image">
                        <p>Neutral</p>
                    </div>
                    <div class="col-sm-6">
                        <img src="sen1.gif" class="img-responsive" style="width:100%" alt="Image">
                        <p>Count Class</p>
                    </div>
                </div>
                <h3>Thai sentiment analysis about education in Thailand on Twitter.</h3>
                <p>Text mining from social networks has become very important
                    in order to thrive in business and sentiment monitoring.
                    Therefore, this project aims to create a model that classifies
                    the sentiments of Thai text comments on Twitter into three
                    categories: negative, positive, and neutral. The collected data
                    is labeled and selected as a vector feature. The major results
                    are analyzed and indicate the negativity of the data. Thus,
                    the research presents imbalanced data management and adjustment
                    using four methods: Random Under Sampler, Random Over Sampler,
                    SMOTE and Bagging of under sampler subsets. Afterward, the transformed
                    training data is used to train models for analyzing the sentiment of data
                    with the classification algorithms: Logistic regression, XGBoost, Decision tree,
                    SVM, Random Forest, K-NN and Naïve Bayes. The hyperparameters of each algorithm
                    are well selected by the grid search method and evaluate the model's performance
                    by a confusion matrix of result pre and post imbalanced data adaptation.
                </p>
                <hr>

                <br>
                <div class="row text-center">
                    <div class="col-sm-6">
                        <img src="per1.gif" class="img-responsive" style="width:100%" alt="Image">
                        <p>Set the debtor group</p>
                    </div>
                    <div class="col-sm-6">
                        <img src="per4.gif" class="img-responsive" style="width:100%" alt="Image">
                        <p>Set customer information</p>
                    </div>
                </div>

                <div class="row text-center">
                    <div class="col-sm-6">
                        <img src="per3.gif" class="img-responsive" style="width:100%" alt="Image">
                        <p>Add holiday</p>
                    </div>
                    <div class="col-sm-6">
                        <img src="per2.gif" class="img-responsive" style="width:100%" alt="Image">
                        <p>Edit personal information</p>
                    </div>
                </div>

                <h3>KKS Smart Office.</h3>
                <p>Use PHP, Html, CSS, Bootstrap, SQL, for create website.
                    By developing from the existing website for example, can add customer information,
                    can set holiday according to the conditions set by the company.</p>

            </div>
        </div>

        <!-- The Contact Section -->
        <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
            <h2 class="w3-wide w3-center">CONTACT</h2>

            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Address</a></li>
                <li><a data-toggle="tab" href="#menu1">Link</a></li>
            </ul><br>
            <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                    <p><span class="glyphicon glyphicon-map-marker"></span>Udonthani, 41250</p>
                    <p><span class="glyphicon glyphicon-phone"></span>Phone: 0957059855</p>
                    <p><span class="glyphicon glyphicon-envelope"></span>Email: wipadasilarach@gmail.com</p>
                </div>
                <div id="menu1" class="tab-pane fade">
                    <p><a href="https://github.com/wipada-ai">Github</a></p>
                    <p><a href="https://www.facebook.com/profile.php?id=100007820896690">Facebook</a></p>
                    <p><a href="https://www.instagram.com/porpia_99/?hl=en">Instagram</a></p>
                </div>
            </div>

        </div>

        <!-- End Page Content -->
    </div>

    <!-- Footer -->
    <footer class="text-center">
        <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
            <span class="glyphicon glyphicon-chevron-up"></span>
        </a><br><br>

    </footer>


    <script>
    // Automatic Slideshow - change image every 4 seconds
    var myIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) {
            myIndex = 1
        }
        x[myIndex - 1].style.display = "block";
        setTimeout(carousel, 4000);
    }

    // Used to toggle the menu on small screens when clicking on the menu button
    function myFunction() {
        var x = document.getElementById("navDemo");
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
        } else {
            x.className = x.className.replace(" w3-show", "");
        }
    }

    // When the user clicks anywhere outside of the modal, close it
    var modal = document.getElementById('ticketModal');
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

    $(document).ready(function() {
        // Initialize Tooltip
        $('[data-toggle="tooltip"]').tooltip();

        // Add smooth scrolling to all links in navbar + footer link
        $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {

                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash
                var hash = this.hash;

                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 900, function() {

                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                });
            } // End if
        });
    })
    </script>

</body>

</html>
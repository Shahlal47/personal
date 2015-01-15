<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to My Personal Website</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
</head>
<body>
<header class="container">
    <br /><br /><br />
    <section class="row">
        <section class="col-md-6">
            <img src="image/logo.jpg" alt="logo">
        </section>
        <section class="col-md-6">
            <h1 class="text-right">Md. Shahlal Hossain</h1>
            <h3 class="text-right">Welcome to My Personal Website</h3>
        </section>
    </section>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home <span class="sr-only"></span></a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="registration.php">Registration</a></li>
                    <li><a href="photo.php">Photo Gallary</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">About Me <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="personalinfo.php">Personal Information</a></li>
                            <li><a href="contactinfo.php">Contact Information</a></li>
                            <li><a href="academicinfo.php">Academic Information</a></li>
                            <li class="divider"></li>
                            <li><a href="portfolio.php">Porfolio</a></li>
                            <li><a href="skill.php">Skill Information</a></li>
                            <li class="divider"></li>
                            <li><a href="experience.php">Experiences</a></li>
                        </ul>
                    </li>
                    <li><a href="feedback.php">Contact Me</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</header>

<section class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="text-right"><a href="#">Home</a></li>
                <li class="text-right"><a href="#">Admin</a></li>
            </ul>
            <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
            </form>
        </div>
    </div>
</section>





<section class="container">
    <section class="row">
        <section class="col-md-8">
            <br><br><br><br>
            <h2>My Personal Photo Gallary</h2>
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="5"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="6"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="7"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="8"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="9"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="image/Apple%20(1).jpg" alt="...">
                            <div class="carousel-caption">
                                ...
                            </div>
                        </div>
                        <div class="item">
                            <img src="image/Apple%20(2).jpg" alt="...">
                            <div class="carousel-caption">
                                ...
                            </div>
                        </div>
                        <div class="item">
                            <img src="image/Apple%20(3).jpg" alt="...">
                            <div class="carousel-caption">
                                ...
                            </div>
                        </div>
                        <div class="item">
                            <img src="image/Apple%20(4).jpg" alt="...">
                            <div class="carousel-caption">
                                ...
                            </div>
                        </div>
                        <div class="item">
                            <img src="image/Apple%20(5).jpg" alt="...">
                            <div class="carousel-caption">
                                ...
                            </div>
                        </div>
                        <div class="item">
                            <img src="image/Apple%20(6).jpg" alt="...">
                            <div class="carousel-caption">
                                ...
                            </div>
                        </div>
                        <div class="item">
                            <img src="image/Apple%20(7).jpg" alt="...">
                            <div class="carousel-caption">
                                ...
                            </div>
                        </div>
                        <div class="item">
                            <img src="image/Apple%20(8).jpg" alt="...">
                            <div class="carousel-caption">
                                ...
                            </div>
                        </div>
                        <div class="item">
                            <img src="image/Apple%20(9).jpg" alt="...">
                            <div class="carousel-caption">
                                ...
                            </div>
                        </div>
                        <div class="item">
                            <img src="image/Apple%20(10).jpg" alt="...">
                            <div class="carousel-caption">
                                ...
                            </div>
                        </div>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
            </div>
        </section>
        <section class="col-md-4">
            <script language="javascript" type="text/javascript">
                var day_of_week = new Array('Sun','Mon','Tue','Wed','Thu','Fri','Sat');
                var month_of_year = new Array('January','February','March','April','May','June','July','August','September','October','November','December');

                //  DECLARE AND INITIALIZE VARIABLES
                var Calendar = new Date();

                var year = Calendar.getFullYear();     // Returns year
                var month = Calendar.getMonth();    // Returns month (0-11)
                var today = Calendar.getDate();    // Returns day (1-31)
                var weekday = Calendar.getDay();    // Returns day (1-31)

                var DAYS_OF_WEEK = 7;    // "constant" for number of days in a week
                var DAYS_OF_MONTH = 31;    // "constant" for number of days in a month
                var cal;    // Used for printing

                Calendar.setDate(1);    // Start the calendar day at '1'
                Calendar.setMonth(month);    // Start the calendar month at now


                /* VARIABLES FOR FORMATTING
                 NOTE: You can format the 'BORDER', 'BGCOLOR', 'CELLPADDING', 'BORDERCOLOR'
                 tags to customize your caledanr's look. */

                var TR_start = '<TR>';
                var TR_end = '</TR>';
                var highlight_start = '<TD WIDTH="50"><TABLE CELLSPACING=0 BORDER=1 BGCOLOR=DEDEFF BORDERCOLOR=CCCCCC><TR><TD WIDTH=30><B><CENTER>';
                var highlight_end   = '</CENTER></TD></TR></TABLE></B>';
                var TD_start = '<TD WIDTH="50"><CENTER>';
                var TD_end = '</CENTER></TD>';

                /* BEGIN CODE FOR CALENDAR
                 NOTE: You can format the 'BORDER', 'BGCOLOR', 'CELLPADDING', 'BORDERCOLOR'
                 tags to customize your calendar's look.*/

                cal =  '<TABLE BORDER=1 CELLSPACING=0 CELLPADDING=0 BORDERCOLOR=BBBBBB><TR><TD>';
                cal += '<TABLE BORDER=0 CELLSPACING=0 CELLPADDING=2>' + TR_start;
                cal += '<TD COLSPAN="' + DAYS_OF_WEEK + '" BGCOLOR="#EFEFEF"><CENTER><B>';
                cal += month_of_year[month]  + '   ' + year + '</B>' + TD_end + TR_end;
                cal += TR_start;

                //   DO NOT EDIT BELOW THIS POINT  //

                // LOOPS FOR EACH DAY OF WEEK
                for(index=0; index < DAYS_OF_WEEK; index++)
                {

// BOLD TODAY'S DAY OF WEEK
                    if(weekday == index)
                        cal += TD_start + '<B>' + day_of_week[index] + '</B>' + TD_end;

// PRINTS DAY
                    else
                        cal += TD_start + day_of_week[index] + TD_end;
                }

                cal += TD_end + TR_end;
                cal += TR_start;

                // FILL IN BLANK GAPS UNTIL TODAY'S DAY
                for(index=0; index < Calendar.getDay(); index++)
                    cal += TD_start + '  ' + TD_end;

                // LOOPS FOR EACH DAY IN CALENDAR
                for(index=0; index < DAYS_OF_MONTH; index++)
                {
                    if( Calendar.getDate() > index )
                    {
                        // RETURNS THE NEXT DAY TO PRINT
                        week_day =Calendar.getDay();

                        // START NEW ROW FOR FIRST DAY OF WEEK
                        if(week_day == 0)
                            cal += TR_start;

                        if(week_day != DAYS_OF_WEEK)
                        {

                            // SET VARIABLE INSIDE LOOP FOR INCREMENTING PURPOSES
                            var day  = Calendar.getDate();

                            // HIGHLIGHT TODAY'S DATE
                            if( today==Calendar.getDate() )
                                cal += highlight_start + day + highlight_end + TD_end;

                            // PRINTS DAY
                            else
                                cal += TD_start + day + TD_end;
                        }

                        // END ROW FOR LAST DAY OF WEEK
                        if(week_day == DAYS_OF_WEEK)
                            cal += TR_end;
                    }

                    // INCREMENTS UNTIL END OF THE MONTH
                    Calendar.setDate(Calendar.getDate()+1);

                }// end for loop

                cal += '</TD></TR></TABLE></TABLE>';

                //  PRINT CALENDAR
                document.write(cal);
                //  End -->
            </script>

            <br><br><br>

            <ul class="list-group">
                <li class="list-group-item">
                    <span class="badge">14</span>
                    Cras justo odio
                </li>
                <li class="list-group-item">
                    <span class="badge">14</span>
                    Cras justo odio
                </li>
                <li class="list-group-item">
                    <span class="badge">14</span>
                    Cras justo odio
                </li>
                <li class="list-group-item">
                    <span class="badge">14</span>
                    Cras justo odio
                </li>
                <li class="list-group-item">
                    <span class="badge">14</span>
                    Cras justo odio
                </li>
                <li class="list-group-item">
                    <span class="badge">14</span>
                    Cras justo odio
                </li>
            </ul>

            <div class="panel panel-primary">
                <!-- Default panel contents -->
                <div class="panel-heading">Panel heading</div>
                <div class="panel-body">
                    <p>
                        Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.
                    </p>
                </div>
        </section>
    </section>
</section>



<footer class="container">

    <section class="row text-center">
        <section class="col-md-12">
            <ul class="list-inline">
                <li><img src="image/facebook.png"><a href="#">Social Media</a></li>
                <li><img src="image/facebook.png"><a href="#">Social Media</a></li>
                <li><img src="image/facebook.png"><a href="#">Social Media</a></li>
                <li><img src="image/facebook.png"><a href="#">Social Media</a></li>
                <li><img src="image/facebook.png"><a href="#">Social Media</a></li>
            </ul>
        </section>
        <section class="row text-center">
            <section class="col-md-12">
                <p>All Right Reserved @Shahlal &copy;2015</p>
            </section>
        </section>
</footer>

<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>



</body>
</html>
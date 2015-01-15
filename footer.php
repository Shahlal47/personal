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
</section>
</section>
</section>

<section class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="thumbnail">
                <img data-src="holder.js/300x300" alt="...">
                <div class="caption">
                    <h3>Thumbnail label</h3>
                    <p>...</p>
                    <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="thumbnail">
                <img data-src="holder.js/300x300" alt="...">
                <div class="caption">
                    <h3>Thumbnail label</h3>
                    <p>...</p>
                    <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="thumbnail">
                <img data-src="#" alt="...">
                <div class="caption">
                    <h3>Thumbnail label</h3>
                    <p>...</p>
                    <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                </div>
            </div>
        </div>
    </div>
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
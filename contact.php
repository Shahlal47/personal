<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />

    <style>
        .vr { border-right: 1px solid #eee !important; }
    </style>
</head>
<body>
<?php include_once('includes/navbar.php') ?>
<?php include_once('includes/header.php') ?>

<section class="container">
    <section class="row">
        <div class="col-sm-12">
            <div class="thumbnail">
                <div class="caption">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d58417.887340577574!2d90.2981758!3d23.7788135!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0b33134d9cb%3A0xdaf562015a13a85!2sBangladesh%20Computer%20Council!5e0!3m2!1sen!2sbd!4v1731425152999!5m2!1sen!2sbd" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
    <hr>
    <br>
    <section class="row">
        <div class="col-sm-6 vr">
            <div class="thumbnail">
                <div class="caption">
                    <p><strong><span class="glyphicon glyphicon-earphone"></span> Mobile:</strong> +8801731479874</p><hr>
                    <p><strong><span class="glyphicon glyphicon-envelope"></span> Email:</strong> shahlalhossain@gmail.com</p><hr>
                    <p><strong><span class="glyphicon glyphicon-globe"></span> Website:</strong> shahlalhossain.me</p><hr>
                    <p><strong><span class="glyphicon glyphicon-map-marker"></span> Address:</strong> Mohammadpur, Dhaka</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 text-right">
            <div class="thumbnail">
                <div class="caption">
                    <form class="form-horizontal" action="message.php" method="post">
                        <div class="row form-group">
                            <label for="name" class="col-sm-4 control-label">Full Name</label>
                            <div class="col-sm-8">
                                <input type="text" id="name" class="form-control" placeholder="Your Full Name" name="name" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <label for="mobile" class="col-sm-4 control-label">Mobile Number</label>
                            <div class="col-sm-8">
                                <input type="text" id="mobile" class="form-control" placeholder="Your Mobile Number" name="mobile" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <label for="email" class="col-sm-4 control-label">Email Address</label>
                            <div class="col-sm-8">
                                <input type="text" id="email" class="form-control" placeholder="Your Email Address" name="email" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <label for="subject" class="col-sm-4 control-label">Subject/Topic</label>
                            <div class="col-sm-8">
                                <input type="text" id="subject" class="form-control" placeholder="Your Contact Number" name="subject" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <label for="message" class="col-sm-4 control-label">Your Message</label>
                            <div class="col-sm-8">
                                <textarea id="message" class="form-control" name="message"></textarea>
                            </div>
                        </div>
                        <div class="row form-group">
                            <label class="col-sm-4"></label>
                            <div class="col-sm-8 text-right">
                                <input type="submit" class="btn btn-success btn-block" name="submit" value="Send Message">
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </section>
    <hr>
</section>



<?php include_once('includes/footer.php') ?>

<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

</body>
</html>
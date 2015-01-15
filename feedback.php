<?php include_once('header.php') ?>



            <br><br><br><br>
            <form class="form-horizontal" action="message.php" method="post" text-left>
                <div class="form-group">
                    <label class="col-md-4 control-label">Full Name</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="Your Full Name" name="username">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-md-4 control-label">Email Address</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="Your Email Address" name="email">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label">Subject</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="Your Contact Number" name="subject">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label">Your Message</label>
                    <div class="col-md-6">
                        <textarea class="form-control" name="message"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-4 text-right">
                        <button type="button" class="btn btn-primary btn-lg btn-block" name="submit">Send Message</button>

                    </div>
                </div>
            </form>


<?php include_once('footer.php') ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Donate for Organization :: OAHM</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <a href="index.php" class="navbar-brand">Green Acres Old Care Home</a>
        </div>

      </div>
    </div>

    <div class="container">
      <div class="row">
      <div class="col-sm-12">
        <h1>Donate for Organization</h1>
        <p>Fill up all requirement field. After that we will send a mail on your email account with all Information for Donation</p>
            <div class="form-group">
                <label for="contact_name" class="col-sm-2 control-label">First Name*</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="contact-fname" placeholder="First Name" />
                </div>
              </div>
              <div class="form-group">
                <label for="contact_name" class="col-sm-2 control-label">Last Name*</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="contact-lname" placeholder="Last Name" />
                </div>
              </div>
              <div class="form-group">
                <label for="contact_name" class="col-sm-2 control-label">Institution Name</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="contact-lname" placeholder="Institution Name" />
                </div>
              </div>
              <div class="form-group">
                <label for="contact_name" class="col-sm-2 control-label">Email*</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="contact-email" placeholder="example@domain.com" />
                </div>
              </div>
              <div class="form-group">
                <label for="contact_name" class="col-sm-2 control-label">Phone*</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="contact-email" placeholder="Phone Number" />
                </div>
              </div>
              <div class="form-group">
                <label for="contact_name" class="col-sm-2 control-label">Message</label>
                <div class="col-sm-10">
                  <textarea class="form-control" rows="4" placeholder="Write your Opinion"></textarea>
                </div>
              </div>
              <div class="form-group text-center">
                <li class="btn btn-primary"><a href="#contact" data-toggle="modal">Save</a></li>
              </div>
              
        </div>
        
      </div>
    </div>

    <div class="container">
    N.B: *(Must fill the particular field).
      <a href="donate.php" class="btn btn-default btn-lg btn-block">Back to Previous Page</a>
    </div>

    <div class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
      <div class="container">
        <div class="navbar-text pull-left">
          <p>&copy; 2015 Green Acres Old Care Home</p>
        </div>
        <div class="navbar-text pull-right">
          <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
          <a href="#"><i class="fa fa-twitter fa-2x"></i></a>
          <a href="#"><i class="fa fa-google-plus fa-2x"></i></a>
        </div>
        
      </div>
    </div>


    <div class="modal fade" id="contact" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
        <form class="form-horizontal" role="form">
            <div class="modal-header">
              <h4>Congratulation</h4>
            </div>
            <div class="modal-body">
              <p>Thank you for donation. We will send you all information in your email account for donate money in our Institution.</p>
            </div>
            <div class="modal-footer">
              <a href="donate.php" class="btn btn-default" data-dismiss="modal">Close</a>
            </div>
        </form>
        </div>
        
      </div>
      
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
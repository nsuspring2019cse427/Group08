<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Home :: Green Acres Old Care Home</title>

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
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle-Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="" class="navbar-brand">Green Acres Old Care Home</a>
        </div>

        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Home</a></li>
            <li><a href="member.php">Member</a></li>
            <li><a href="stuff.php">Staff</a></li>
            <li><a href="about.php">About</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Facilities<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  
                  <li><a href="facilities.php">Facilities of the Old Home Care</a></li>
                  <li><a href="photo_galary.php">Photo Galary</a></li>
                </ul>
              </li>
              <li><a href="donate.php">Donate</a></li>
              <li><a href="#contact" data-toggle="modal">Contact</a></li>
              <li>
              <button type="button"class="btn-default navbar-btn"><a href="http://localhost/Project/Admin/main/login" title="Admin(Only Registered Users.)">Admin</a></button></li>
          </ul>

        </div>

      </div>
    </div>

    <div class="container">
      <div class="jumbotron text-center">
        <h1>Green Acres Old Care Home</h1>
        <p>We Care For Humanity</p>
        <a href="about.php" class="btn btn-primary">About</a>
        
      </div>

      <div class="row">
        <div class="col-sm-3">
          <a href="facilities.php" class="thumbnail">
            <img src="img/001.jpg" alt="">
          </a>
          <h3>Facilities Provided </h3>
          <p>Recreational and reading facilities such as, televisions, video players, newspapers and books are available. Depending on the extent of the .........</p>
          <a href="facilities.php" class="btn btn-primary">View Details</a>
        </div>
        <div class="col-sm-3">
          <a href="stuff.php" class="thumbnail">
            <img src="img/005.jpg" alt="">
          </a>
          <h3>Information of the Staffs</h3>
          <p>We have some dedicated stuffs who are willing to serve our old citizens. They are caring and committed. We have qualified doctors who serve our old our citizens 24 hours 7 days........</p>
          <a href="stuff.php" class="btn btn-primary">View Details</a>
        </div>
        <div class="col-sm-3">
          <a href="#contact" data-toggle="modal" class="thumbnail">
            <img src="img/004.jpg" alt="">
          </a>
          <h3>Contact Us</h3>
          <p>Feel free to contact us..</p>
          <a href="#contact" data-toggle="modal" class="btn btn-primary">View Details</a>
        </div>
        <div class="col-sm-3">
          <a href="photo_galary.php" class="thumbnail">
            <img src="img/006.jpg" alt="">
          </a>
          <h3>Photo Gallery</h3>
          <p>Gallary Of Photos...</p>
          <a href="Photo_galary.php" class="btn btn-primary">View Details</a>
        </div>
      </div>
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
              <h4>Contact</h4>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label for="contact_name" class="col-sm-2 control-label">Name*</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="contact-name" placeholder="First & Last Name" />
                </div>
              </div>
              <div class="form-group">
                <label for="contact_name" class="col-sm-2 control-label">Message</label>
                <div class="col-sm-10">
                  <textarea class="form-control" rows="4" placeholder="Write your Opinion"></textarea>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
              <button type="submit" class="btn btn-primary">Send</button>
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
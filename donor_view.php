<?php

  //Make Connection
  mysql_connect('localhost','root','');

  //select DB
  mysql_select_db('old_home_management_system');

  $sql = "SELECT f.name as Name,f.email as Email, f.donate_type,f.donate_date 

      
           FROM donor_list AS f";

   $r =  mysql_query($sql);

   if($r === FALSE) { 
    die(mysql_error()); 
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Donor List :: OAHM</title>

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
        <h1>Donor List</h1>
        <p>All information of this window  will be shown by using Database</p>
        <table class="table">
            
              <th>Name</th>
              
              <th>Email</th>
              <th>Donate Type</th>
              <th>Donate Date</th>
            
            <?php

            while($row = mysql_fetch_assoc($r)){

              echo "<tr>";
                
                echo "<td>".$row['Name']."</td>";
                echo "<td>".$row['Email']."</td>";
                echo "<td>".$row['donate_type']."</td>";
                echo "<td>".$row['donate_date']."</td>";
                
              echo "</tr>";
            }//End While
            ?>
        </table>
        
        <a href="donate.php" class="btn btn-primary btn-lg btn-block">Back to Previous Page</a>
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


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
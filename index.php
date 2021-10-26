<!DOCTYPE html>
<html>
<head>
<title>PHPMailer enviar email adjunto archivos</title>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script><link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="" title='Global Hotelero'>Global Hotelero</a>
        </div>
    </div>
</div>


<div class="container">

 <div class="page-header">
     <h1>Global Hotelero - Checkin</h1>
    </div>
     
    <div class="email-form">
    
     <?php
  if(isset($msg))
  {
   echo $msg;
  }
  ?>
        
     <form method="post" class="form-control-static"enctype="multipart/form-data">
        
            <div class="form-group">
                <input class="form-control" type="text" name="name" placeholder="Your Name" />
            </div>
            
            <div class="form-group">
                <input class="form-control" type="text" name="email" placeholder="Your Mail" />
            </div>

            <div class="form-group">
                <input class="form-control" type="text" name="typedoc" placeholder="Type Doc" />
            </div>

            <div class="form-group">
                <input class="form-control" type="text" name="numdoc" placeholder="Your Document Number" />
            </div>

            <div class="form-group">
                <input class="form-control" type="file" name="filedoc" placeholder="Add your Identify Document" />
            </div>

            <div class="form-group">
                <input class="form-control" type="file" name="fileinv" placeholder="Add your Inventary" />
            </div>
            <div class="form-group">
                <input class="form-control" type="file" name="filefirm" placeholder="Add your Firm" />
            </div>


            
            <div class="form-group">
                <button class="btn btn-success" type="submit" name="btn_send">
                <span class="glyphicon glyphicon-envelope"></span> Send Mail
                </button>
            </div>
        
     </form>
    </div>    
</div>

</body>
</html>
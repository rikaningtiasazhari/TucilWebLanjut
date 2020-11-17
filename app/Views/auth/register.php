<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="/css/loginstyle.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>
<div class="main">
    
    
    <div class="container">
<center>
<div class="middle">
      <div id="login">

        <form action="javascript:void(0);" method="get">

          <fieldset class="clearfix">

            <p ><span class="fa fa-user"></span><input type="text"  Placeholder="Username" required></p> 
            <p ><span class="fa fa-user"></span><input type="text"  Placeholder="First Name" required></p>
            <p ><span class="fa fa-user"></span><input type="text"  Placeholder="Last Name" required></p>
            <p ><span class="fa fa-user"></span><input type="text"  Placeholder="Email" required></p>
            <p ><span class="fa fa-user"></span><input type="text"  Placeholder="Password" required></p>
             <div>
             <span style="width:50%; text-align:right;  display: inline-block;"><a class="btn btn-dark" href="<?= site_url('auth/index') ?>">Sign Up</a></span>
             </div>

          </fieldset>
<div class="clearfix"></div>
        </form>

        <div class="clearfix"></div>

      </div> <!-- end login -->
      <div class="logo">LOGO
          
          <div class="clearfix"></div>
      </div>
      
      </div>
</center>
    </div>

</div>
</body>
</html>
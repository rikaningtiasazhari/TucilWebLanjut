<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="/css/loginstyle.css">
<div class="main">
    
    
    <div class="container">
<center>
  
<div class="middle">
      <div id="login">

        <form action="javascript:void(0);" method="get">

          <fieldset class="clearfix">

            <p><span class="fa fa-user"></span><input type="text"  Placeholder="Username" required></p> <!-- JS because of IE support; better: placeholder="Username" -->
            <p><span class="fa fa-lock"></span><input type="password"  Placeholder="Password" required></p> <!-- JS because of IE support; better: placeholder="Password" -->
            
             <div>
             <span style="width:48%; text-align:left;  display: inline-block;"><a class="btn btn-info" href="<?= site_url('auth/register') ?>">Register</a></span>
             <span style="width:50%; text-align:right;  display: inline-block;"><a class="btn btn-dark" href="<?= site_url('auth/index') ?>">Sign In</a></span>
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
<!DOCTYPE html>
<head>
<title>JO n Jud8 Salon</title>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Sacramento|Berkshire+Swash|Courgette|Delius+Swash+Caps|IM+Fell+Great+Primer+SC|Overlock+SC|Bitter|Yrsa" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    
</head>
<body>
  <!-- this is the navbar.. -->
    <div id="navbar">
        <nav class="navbar navbar-default navbar-static-top" role="navigation">
            
        <div class="collapse navbar-collapse" id="navbar-collapse-1">
            <ul class="nav navbar-nav">
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About Us</a></li> 
            <li><a href="services.html">Services</a></li>  
            <li><a href="reservation.html">Reservations</a></li>
            <li><a href="gallery.html">Gallery</a></li>
            <li style="float:right;"><a id= acc1 href="signup.php">Sign Up</a></li>
            <li style="float:right;"><a id= acc2 href="login.html">Log-in</a></li>
                </ul>
            </div>
        </nav>
    </div>
 
<div class="container">
    <!-- signup tabs -->
<ul id="tabtab" class="nav nav-tabs" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Personal Info</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#menu1" role="tab">Create Account </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#menu2" role="tab">Log-in</a>
    </li>
</ul>
    <!-- content -->
<div class="tab-content">
  <div id="home" class="tab-pane fade in active" role="tabpanel">
 
      <div class="modal fade" id="thankyouModal" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="myModalLabel">Thank you for pre-registering!</h4>
      </div>
      <div class="modal-body">
          <p>Thanks for getting in touch!</p>                     
      </div>    
    </div>
  </div>
</div>

      
      <form method="post" action="#menu1">
          <br><br>
      <name id=fname1>First Name:</name>
      <input id= fname2 type="text" name="fname2">   
        <br>
      <name id=lname1>Last Name:</name> 
      <input id= lname2 type="text" >  
        <br>
      <name id=add1>Address:</name> 
    <input type="text"
       cols="2" 
       rows="2" 
       style="width:270px; height:80px;" 
       name="add2" 
       id="add2" 
       />
    <br>
<name id=bday1>Birthday:</name>
<input id=bday2 type="date" name="bday2">
    <br>
<name id=gender>Gender:</name>  
<input id=m type="radio" name="gender" value="male">
    <name id= male >Male</name>
  <input id=f type="radio" name="gender" value="female">
    <name id=female>Female</name>
          <br>
<input id="btnNext" type="submit" value="Next">
          </form>
  </div>

    

  <div id="menu1" class="tab-pane fade" role="tabpanel">
    <form method="post" action="#menu2">
        <br><br>
      <name id="uName">Username: </name>
        <input id="uName2" type="text" name="uName2">
        <br>
        <name id="pass">Password:</name>
        <input id="pass2" type="password" name="pass2">
        <br>
        <name id="pass3">Confirm Password:</name>
        <input id="pass4" type="password" name="pass4">
        <br>
         <input id="btnBack" type="back" value="Back">
        <input id="btnSubmit" type="submit" value="Submit">
      </form>
  </div>
  <div id="menu2" class="tab-pane fade" role="tabpanel">
     <form method="post" action="#menu3">
        <br><br>
      <name id="uName">Username: </name>
        <input id="uName2" type="text" name="uName2">
        <br>
        <name id="pass">Password:</name>
        <input id="pass2" type="password" name="pass2">
        <br>
        <input id="btnLogin" type="submit" value="Log in">
      </form>
  </div>
  </div>
</div>
    </div>

   <script>// Javascript to enable link to tab
        var hash = document.location.hash;
        var prefix = "tab_";
        if (hash) {
    $('.nav-tabs a[href="'+hash.replace(prefix,"")+'"]').tab('show');
} 

// Change hash for page-reload
$('.nav-tabs a').on('shown.bs.tab', function (e) {
    window.location.hash = e.target.hash.replace("#", "#" + prefix);
});
    </script>
    
    
</body>
</html>
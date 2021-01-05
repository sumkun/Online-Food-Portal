
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Delicious</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <script  src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.js"></script>

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">

  <style type="text/css">

  
  </style>
 
</head>

<body style="padding-top:100px;">

<div id="d2"></div>

<div id="d1"></div>

<div class="col-md-4"></div>
    <div class="col-md-4">
        <!-- Default form register -->
        <form class="text-center p-5" action="login.php" method="post" style="border:2px solid gray; padding:10px; border-radius:8px;">
            <p class="h4 mb-4" style="margin-top:10px; font-weight:bold">Log In</p>
            <!-- User name -->
            <input type="email" id="email" class="form-control mb-4" placeholder="Enter email" name="email" required style="margin-top:10px;">
            <!-- Password -->
            <input type="password" id="password" class="form-control mb-4" placeholder="Enter Password" name="password" required style="margin-top:10px;">
            <button class="btn btn-warning my-4 btn-block" type="button" id="login_user" name="login_user" style="margin:10px 0px;">Log In</button>          
            <!-- Register -->
            <p>Not a user?<a href="register.php"><strong> Register Now!</strong></a></p>  
        </form>
    </div>
  

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>

      

</body>

<script type="text/javascript">



 $("#login_user").click(function()
{

 var email=$('#email').val();
 var password=$('#password').val();

console.log(email);
console.log(password);

                    $.ajax({  

                    url:"server2.php",  
                    method:"POST",  
                    data:{'email':email,'password':password}, 
                    error:function(e){
                    console.log(e);  
                    },
                    success:function(data){  

                      //$('#d2').html(data);


                            if(data=="LoggedIn")
                            {
                            
                              window.location.href="first.php?email="+email;
                          //    window.location.href="demo.php?email="+uemail+"&amount="+total+"&pan"+item;

                
                          } 
                          if(data=="LoggedNot")
                            {
                              alert('Wrong email or password');
                              $('#email').val('  ');
                              $('#password').val('');
                             
                           //   $('#d1').html(' from second if falied');
                
                          }   
                      }
                       
    
                    
                    }); 



})

</script>


</html>

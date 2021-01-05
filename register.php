

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Delicious</title>
  <script  src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.js"></script>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="css/style.css" rel="stylesheet">

    <style type="text/css">
     .bgimg {
        background-image: url("img/bg.jpg");
        background-color:#525252;
        height: fit-content;
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat; 
        background-size: cover;    
      }
    </style>

  
</head>

<body style="padding-top:100px;" >
   <div  class="bgimg">
      <div id="d1"></div>
      <div class="col-md-4"></div>
        <div class="col-md-4">
              <!-- Default form register -->
              <form class="text-center p-5" action="register.php" method="post"  style="border:2px solid gray; padding:10px; border-radius:8px;">
                  <h2 class="h4 mb-4" style="margin-top:10px; font-weight:bold">Register</h2>
                  <!--Name -->
                  <input type="text" id="name" class="form-control mb-4" placeholder="Enter full Name" name="name" required style="margin-top:10px;">       
                  <!-- User name -->
                  <input type="text" id="username" class="form-control mb-4" placeholder="Enter UserName" name="username"  required style="margin-top:10px;">
                  <!-- E-mail -->
                  <input type="email" id="email" class="form-control mb-4" placeholder="Enter E-mail" name="email" required style="margin-top:10px;">
                  <!-- Password -->
                  <input type="password" id="password_1" class="form-control mb-4" placeholder="Enter Password" name="password_1" required style="margin-top:10px;">
                  <input type="password" id="password_2" class="form-control" placeholder="Re-enter Password" name="password_2" required style="margin:10px 0px;">
            
                  <button class="btn btn-warning my-4 btn-block" type="button" name="reg_user" id="reg_user" style="margin:10px 0px;">Register</button>           
                  <!-- Register -->
                  <p>Already a user?<a href="login.php"><strong> Log In</strong></a></p>
              </form>
        
        </div>
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

 
 $("#reg_user").click(function()
{


var name=$('#name').val();
 var username=$('#username').val();
 var email=$('#email').val();
 var password_1=$('#password_1').val();
 var password_2=$('#password_2').val();
 alert(name);
                    $.ajax({  

                    url:"server.php",  
                    method:"POST",  
                    data:{'name':name,'username':username,'email':email,'password_1':password_1,'password_2':password_2}, 
                    error:function(e){
                    console.log(e);  
                    },
                    success:function(data){  
                        alert("Data inserted");
                        $('#name').val('  ');
                        $('#username').val('');
                        $('#email').val('  ');
                        $('#password_1').val('');
                        $('#password_2').val('');
                        $("#d1").text(data);

                    }  
                    }); 



})

</script>



</html>

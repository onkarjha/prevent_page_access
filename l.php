<?php
session_start();
if(isset($_SESSION['logged'])){
  header('Location:home.php');
}

?>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Login | Pentagon</title>

      <!-- Bootstrap core CSS -->
      <link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet">
      <style>html,
body {
  height: 100%;
}

body {
  display: flex;
  align-items: center;
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #f5f5f5;
}

.form-signin {
  width: 95%;
  max-width: 400px;
  padding: 15px;
  margin: auto;
}


        body{
              background: linear-gradient(to right, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url("1.jpg") fixed no-repeat;
    background-size: cover;
    background-position: center;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    min-height: 100vh;
        }
         .bd-placeholder-img {
         font-size: 1.125rem;
         text-anchor: middle;
         -webkit-user-select: none;
         -moz-user-select: none;
         user-select: none;
         }
         @media (min-width: 768px) {
         .bd-placeholder-img-lg {
         font-size: 3.5rem;
         }
         }.form-signin{
            background: white;
            border-radius: 10px;
            padding: 30px;
         }input{margin-top:10px;

         }button{
            margin-top:10px;
         }
      </style>

      <!-- Custom styles for this template -->
      <script src="script.js"></script>
      <script type="text/javascript">
        $(document).ready(function() {
          $("form").on('submit',function(e) {
            e.preventDefault();
            var c=$(".c").val();
            var p=$(".p").val();
            console.log(c,p);
            $.post("login.php",{log:'log',channel:c,password:p},function(res) {
              alert(res);
              if(res==0){
                alert("Wrong values entered");
              }else if(res==1){
                window.location.href='home.php';
              }
            });
          });
        });
      </script>
   </head>
   <body class="text-center">
      <main class="form-signin">
         <form class="form-group" method="post" action="login.php">
            <img class="mb-4" src="https://getbootstrap.com/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
            <h1 class="h3 mb-3 fw-normal">Please sign In</h1>
           
            <input type="text" class="form-control c" placeholder="Channel Id eg:-(Uzeue3nyinbry4r)" required name="channel">
            <input type="password" class="form-control p" placeholder="Enter Password" required name="password">
         
           
            <button class="w-100 btn btn-lg btn-primary submit" type="submit" name="log">Log In</button>

         </form><a href="index.php"><button class="w-100 btn btn-lg btn-success submit" style="margin-top:0">Sign Up</button></a>
      </main>
   </body>
</html>
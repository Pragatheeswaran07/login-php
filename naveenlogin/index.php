<?php

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style.css">
    <link href=".//bootstrap-5.0.2-dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="./font/all.min.css">
    <link rel="stylesheet" href="./font/fontawesome.min.css">
    <title>Document</title>
</head>
<body >


    <div class="container">
        <div class="row pt-3 h-100">
         <div class="col-12 d-flex align-items-center justify-content-center bg-transparent">
         <form method="post" action="login.php" class="form bg-white shadow-lg rounded p-5"  >
           <div class="form-group">
            <h3 class="text-center text-primary">Login</h3>
            <label class="form-label b-5">User Name</label><br>
            <input type="text" class="form-control" placeholder="Enter name" name="uname" required>
           </div> <br>
           <div class="form-group"><label class="form-label b-5">Password</label><br>
            <input type="password" class="form-control" placeholder="Enter password" id="pass" name="upass" required>
            </div>
            <br>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="check" onClick="clicked()">
                <label class="form-check-label">Show password</label>
                <a class="link-danger text-decoration-none p-4" href="#">Forget password?</a>
            </div>
            
                


            <div class="btn d-flex align-item-center justify-content-center">
                <button type="submit" class="btn btn-success m-1" name="submit" onClick="none()" >Submit</button>
                <button type="reset" class="btn btn-danger m-1">Clear</button>
                

            </div>
              <p class="text-secondary">Don't have an account? <a class="link-primary text-decoration-none" href="#">signup now</a></p>


         </form>


        </div>


        </div>
      

    </div>


    
<script src="./bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>

    <script>
        function clicked(){
            var pass=document.getElementById("pass");
            if(pass.type==='password'){

                 pass.type="text"
            }
            else{
                pass.type="password"
            }
        }
       function none(){
        
         var card=document.getElementById("ihide")
         card.style.visibility="visible"

       }
       
     
    </script>
    
</body>
</html>




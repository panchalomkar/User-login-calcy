<?php
include("connection.php");
    /* Start the session */
    session_start();
    // check if session exist
    if(isset($_SESSION['id'])){
        // redirect to cal
        header("location: cal.php");
    }

   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My calculator</title>
   
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body >
  <div class="container-fluid d-flex justify-content-center align-items-center " >
   
    
  
    <div class=" text-white card bg-secondary w-75 mt-5" >
       <h1 class="card-title text-center  ">User Login</h1>

      <div class="row card-body  w-60 ">
         <div class="col-xs-12 col-sm-8 col-md-6">
      <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
        <div class="form-group">
          <span class="label label-default">Username</span>
          <input class="form-control mt-1 " type="text" name="username" autocomplete="off" required>
        </div>
        <div class="form-group">
          <div class="label label-default mt-3 " >Password</div>
          <input class="form-control mt-1" type="password" name="password" required>
        </div>
        <input type="submit" class="btn btn-primary mt-3 w-30" name="login" id="submit" value="Submit" >
      </form>
      
 
  </div>
  </div>
  </div>
  </div>
 

      <?php
        if(isset($_POST['login'])){
          if(!isset($_POST['username']) || $_POST['username'] == ''){

            echo '<div class="message error">please enter username</div>';

          }else if(!isset($_POST['password']) || $_POST['password'] == ''){

            echo '<div class="message error">please enter password</div>';
          }else{
            $username = $_POST["username"];
            $password = $_POST["password"];

            $sql = $conn->prepare("SELECT * FROM calcy_login WHERE username = ? AND password = ?");
            $sql->bind_param("ss",$username,$password);
            $sql->execute();
            //sql injection
            //  ' or ''=' - password=empty or empty = empty


            $result = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
           
            if (count($result) > 0) {
             
              /* Start the session */
              session_start();
              /* Set session variables */
             $_SESSION["id"] = $result[0]['id']; 
             $_SESSION["username"] = $result[0]['username'];
             //redirech to cal.php
              header("location: cal.php");              

            }else{
                echo "<div class='message error text-danger ' style=' margin-left:200px;' >Username Or Password Not Matched.</div>";
            }
            $sql->close();
          }
        }
                  
        $conn->close();
      ?>
         </div>
    </div>
    </div>
  </div>
</body>
</html>
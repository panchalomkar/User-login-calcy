<?php
  /* Start the session */
  session_start();
  // check if session not exist
 //  echo "  Id: ".$_SESSION["id"]; 
  if(!isset($_SESSION['id'])){
    // redirect to index 
    header("location: index.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  

   <link rel="stylesheet" href="bootstrap.min.css">
   <link rel="stylesheet" href="style.css">
  

</head>
<body>
    <div class="container-fluid ">
       <div class="row row1 justify-content-center bg-danger" style="height:80px;">
        <div class="col-4" style="color:white;">
        </--update are after submission-->
        <?php echo "<h4>".     "  Id:- ".$_SESSION["id"]."<br>" ; 
        
           echo " "."Username: ".$_SESSION['username'] ."<h4>"?> 
        </div>

        <div class="col-6 ">
         
        </div>
        <div class="col-2">
        <button type="button" class=" btn btnh btn-secondary text-white "; style="background-color:lightblue; margin-top:10px; padding:10px;" > 
        <a  style="text-decoration:none; color:black;"  href="logout.php">Logout</a> 
        </div>

       </div>
        <div class="row row-2 bg-info justify-content-end">
            <div class="col-5 ms-5 mt-5">
            <input type="hidden" name="history" class="storedata" value="<?php echo $_SESSION['id']; ?>">
                
            <form action="#" name="calculator" class="main" method="post">
                    
                <input type="text" class="display output inp form-control mt-2" name="display" id="display">
             <br><br> 
                <input type="button" class="btn btn-warning btnh" onclick="mathOperation('max')"  value="Max" >
                <input type="button" class="btn btn-warning btnh" onclick="mathOperation('min')"  value="Min" >
                <input type="button" class="btn btn-warning btnh" onclick="getHistory('his')"  value="History" ><br><br>
                <input type="button" class="btn btn-warning" onclick=" myFunction(this.value)" value="1" >
                <input type="button" class="btn btn-warning" onclick=" myFunction(this.value)" value="2" >
                <input type="button" class="btn btn-warning" onclick=" myFunction(this.value)" value="3" >
                <input type="button" class="btn btn-warning" onclick=" myFunction(this.value)" value=">>"  >
                <input type="button" class="btn btn-warning" onclick="mathOperation('clear')" value="c" ><br><br>
                <input type="button" class="btn btn-warning" onclick=" myFunction(this.value)" value="4" >
                <input type="button" class="btn btn-warning" onclick=" myFunction(this.value)" value="5" >
                <input type="button" class="btn btn-warning" onclick=" myFunction(this.value)" value="6" >
                <input type="button" class="btn btn-warning" onclick="mathOperation('sub')" value="-" >
                <input type="button" class="btn btn-warning" onclick="mathOperation('sum')" value="+" ><br><br>
                <input type="button" class="btn btn-warning" onclick=" myFunction(this.value)" value="7" >
                <input type="button" class="btn btn-warning" onclick=" myFunction(this.value)" value="8" >
                <input type="button" class="btn btn-warning" onclick=" myFunction(this.value)" value="9" >
                <input type="button" class="btn btn-warning" onclick=" mathOperation('mul')" value="*" >
                <input type="button" class="btn btn-warning" onclick=" mathOperation('div')" value="/"><br><br>
                <input type="button" class="btn btn-warning" onclick=" myFunction(this.value)" value="0" >
                <input type="button" class="btn btn-warning" onclick=" myFunction(this.value)" value="," >
                <input type="button" class="btn btn-warning" onclick=" myFunction(this.value)" value="." >
                <input type="button" class="btn btn-warning" onclick="mathOperation('mod')" value="%" >
                <input type="button" class="btn btn-warning" onclick="mathOperation('equal')"  value="=" ><br><br>
               
                </form>
            </div>
            <div class="col-7 hist bg-info w-50" >
              
          </div>

       </div>
        
       

    <script type="text/javascript" src="cal.js"></script>
    <script src="jQuery.js"></script>
</body>
</html>
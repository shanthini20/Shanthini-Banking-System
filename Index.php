<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banking System</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php
  include 'navbar.php';
  ?>

    
 
  <div class="container-fluid">
    <!-- Introduction section -->
          <div class="row intro py-1" style="background-color : #82d2e0;">
            <div class="col-sm-12 col-md">
              <div class="heading text-center my-5">
                <h3>Welcome to</h3>
                <h1>STATE BANK</h1>
              </div>
            </div>
            <div class="col-sm-12 col-md img text-center">
              <img src="b12.jpg (2).jpeg" width="300" height="150"class="img-fluid pt-2">
            </div>
          </div>

  <br>
 
    
  <div class="row activity text-center">
    <div class="col-md act">
      <img src="user.jpg" class="img-fluid" width="200;" height="500">
      <br>
      <a href="createuser.php"><button style="background-color : #2785C4;" class="btn btn-primary" >Create a User</button></a>
    </div>
    <div class="col-md act">
      <img src="trans.jpg" class="img-fluid" width="200;" height="400">
      <br>
      <a href="transfermoney.php"><button style="background-color : #2785C4;" class="btn btn-primary">Make a Transaction</button></a>
    </div>
    <div class="col-md act">
      <img src="history.jpg" class="img-fluid" width="200;" height="300">
      
      <br>
      <a href="transactionhistory.php"><button style="background-color : #2785C4;" class="btn btn-primary" >Transaction History</button></a>
    </div>
</div>
</div>
<footer class="text-center mt-5 py-2">
            <p>&copy 2021. Made by <b>SHANTHINI P</b> Shanthini Foundation</p>
    </footer>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" ></script>
</body>
</html>
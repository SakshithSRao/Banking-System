<?php
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <title>BANKING SYSTEM</title>
  <link rel="icon" type="image/x-icon" href="pics.jpg">
</head>
<style>
    body {
        background-color: black;
        background-image: url("https://img.freepik.com/free-vector/hand-painted-watercolor-pastel-sky-background_23-2148902771.jpg?w=2000");
        color:blue;
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-size: 23px;
        line-height: 1.42857143;
    }
        </style>
<body>
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">BANKING SYSTEM</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="customer.php">All Customers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="transaction.php">Transactions</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <?php if (isset($_GET['success'])) { ?> 
<div class="alert alert-success alert-dismissible fade show">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <?php echo "<strong>Transfer Success</strong>";?>
</div>
<?php } ?>
<?php if (isset($_GET['error'])) { ?> 
<div class="alert alert-danger alert-dismissible fade show">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <?php echo "<strong>Invalid Account or Insufficient Funds</strong>";?>
</div>
<?php } ?>
  <h1 class="text-center">All Customers</h1>
  <div class="container">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Current balance</th>
          <th>Account No</th>
          <th>Phone NO</th>
          <th>View</th>
        </tr>
      </thead>
      <tbody>
        <?php
            $sql="SELECT srno, fname,Email,Current_Balance,Account_no,Phone_No from customer";
              $result=mysqli_query($conn,$sql);
              if(mysqli_num_rows($result)>0){
                while($row=mysqli_fetch_assoc($result)){         
                ?>
 
                    <tr>
                      <td><?php echo $row['fname'];?></td>
                      <td><?php echo $row['Email'];?></td>
                      <td><?php echo $row['Current_Balance'];?></td>
                      <td><?php echo $row['Account_no'];?></td>
                      <td><?php echo $row['Phone_No'];?></td>
                      <td><button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#myModal<?php echo $row['srno'];?>">View</button></td>
                    </tr>
                  




                    <div id="myModal<?php echo $row['srno'];?>" class="modal fade" role="dialog">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-body">
                            <p>Name: <?php echo $row['fname'];?></p>
                            <p>Account No.: <?php echo $row['Account_no'];?></p>
                            <p>Email ID: <?php echo $row['Email'];?></p>
                            <p>Phone No.: <?php echo $row['Phone_No'];?></p>
                            <p>Balance: <?php echo "₹".$row['Current_Balance'];?></p>
                            <?php echo '<a href="transfer.php?id='.$row['srno'].'">';?><button class="btn btn-success btn-sm">Transfer</button></a>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>                
<?php
  } 
}
?>
                  </tbody>
                </table>
                <footer style="text-align: center;">&#169; 2022 BANKING SYSTEM<br>Developed by SAKSHITH S RAO <br>with SPARKS FOUNDATION</footer>
</body>
</html>

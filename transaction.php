<?php
include 'connection.php';
?>
<!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
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
        color:blue;
        background-image: url("https://img.freepik.com/free-vector/hand-painted-watercolor-pastel-sky-background_23-2148902771.jpg?w=2000");
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
                              <li class="nav-item">
                                <a class="nav-link" href="customer.php">All Customers</a>
                              </li>
                              <li class="nav-item active">
                                <a class="nav-link" href="transaction.php">Transactions</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </nav>
                      <h1 class="text-center">All Transactions</h1>
                      <div class="container">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>SrNo</th>
          <th>Sender</th>
          <th>Receiver</th>
          <th>Amount</th>
          <th>Date/Time</th>
        </tr>
      </thead>
      <tbody>
        <?php
            $sql="SELECT srno, sender_account_no, receiver_account_no,amount,date_time from transfers";
              $result=mysqli_query($conn,$sql);
              if(mysqli_num_rows($result)>0){
                while($row=mysqli_fetch_assoc($result)){         
                ?>
 
                    <tr>
                      <td><?php echo $row['srno'];?></td>
                      <td><?php echo $row['sender_account_no'];?></td>
                      <td><?php echo $row['receiver_account_no'];?></td>
                      <td><?php echo $row['amount'];?></td>
                      <td><?php echo $row['date_time'];?></td>
                    </tr>
                  
                    
                
                    
                   
<?php
  }
  
}
?>
                  </tbody>
                </table>
                                  <footer style="text-align: center;">&#169; 2023 BANKING SYSTEM<br>Developed by SAKSHITH S RAO <br>with SPARKS FOUNDATION</footer>

                </body>
                </html>

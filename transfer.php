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
                <body style="background-color: azure;">
                    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                        <div class="container-fluid">
                          <a class="navbar-brand" href="index.php">BANKING SYSTEM</a>
                          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                          </button>
                          <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                              <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="customer.php">All Customers</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="transaction.php">Transactions</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </nav>
                      <h1 class="text-center">Transfer funds</h1>
                      <form method="post" action="trans.php">
                        <div class="form-group">
                          <label for="Senders account no">Sender's account no.</label>
                          <input type="number" class="form-control" name="sac"  placeholder="Enter account no.">
                    
                        </div>
                        
                        <div class="form-group">
                            <label for="Receivers account no">Receiver's account no.</label>
                            <input type="number" class="form-control" name="rac" placeholder="Enter account no">      
                          </div>
                          <div class="form-group">
                            <label for="Amount">Amount</label>
                            <input type="number" class="form-control" name="amt" placeholder="Enter amount">      
                          </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                                      <footer style="text-align: center;">&#169; 2022 BANKING SYSTEM<br>Developed by SAKSHITH S RAO <br>with SPARKS FOUNDATION</footer>

                </body>
                </html>

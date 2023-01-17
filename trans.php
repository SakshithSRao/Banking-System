<?php
include "connection.php";
$sac=$_POST["sac"];
$rac=$_POST["rac"];
$amt=$_POST["amt"];
if(isset($sac) && isset($rac) && isset($amt)){
    $sql="SELECT Account_No,Current_Balance from customer where Account_No=$sac and Current_Balance>=$amt"; 
    $result=mysqli_query($conn,$sql);
    if (mysqli_num_rows($result) > 0) {
        $sql="SELECT Account_No from customer where Account_No=$rac"; 
        $result=mysqli_query($conn,$sql);
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                $tran="UPDATE customer set Current_Balance=Current_Balance+$amt where Account_no=$rac";
                $result1=mysqli_query($conn,$tran);
                $tran1="UPDATE customer set Current_Balance=Current_Balance-$amt where Account_no=$sac";
                $result2=mysqli_query($conn,$tran1);
                if($result1){
                    if($result2){
                        $sql="INSERT into transfers(sender_account_no,receiver_account_no,amount,stat) values ($sac,$rac,$amt,'Success')";
                        $exe=mysqli_query($conn,$sql);
                        
                        echo "<script>window.location.href='customer.php?success=success'</script>";
                    }
                    else{
                        $sql="INSERT into transfers(sender_account_no,receiver_account_no,amount,stat) values ($sac,$rac,$amt,'Error')";
                        $exe=mysqli_query($conn,$sql);
                        echo "<script>window.location.href='customer.php?error=erroroccured'</script>";
                    }   
                }
                else{
                    $sql="INSERT into transfers(sender_account_no,receiver_account_no,amount,stat) values ($sac,$rac,$amt,'Error')";
                    $exe=mysqli_query($conn,$sql);
                    
                    echo "<script>window.location.href='customer.php?error=erroroccured'</script>";

                    
                } 
            }
        }
        else{
            $sql="INSERT into transfers(sender_account_no,receiver_account_no,amount,stat) values ($sac,$rac,$amt,'Error')";
            $exe=mysqli_query($conn,$sql);
            
            echo "<script>window.location.href='customer.php?error=erroroccured'</script>";

        }
    }
    
    else{
        $sql="INSERT into transfers(sender_account_no,receiver_account_no,amount,stat) values ($sac,$rac,$amt,'Error')";
        $exe=mysqli_query($conn,$sql);
        
        echo "<script>window.location.href='customer.php?error=erroroccured'</script>";

        
    }
}
?>



<!DOCTYPE html>
<html>
<head>
  <title>Transaction</title>
  <?php require 'assets/autoloader.php'; ?>
  <?php require 'assets/function.php'; ?>
 
</head>
<body style="background:#96D678;background-size: 100%">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
 

    <?php include 'connect.php'; ?>
</nav><br><br><br>
<div class="container">
  <div class="card  w-75 mx-auto">
  <div class="card-header text-center">
    Funds Transfer
  </div>
  <div class="card-body">
      <form method="POST">
          <div class="alert alert-success w-50 mx-auto">
            <h5>New Transfer</h5>
            <input type="text" name="otherNo" class="form-control " placeholder="Enter Receiver Account number" required>
            <button type="submit" name="get" class="btn btn-primary btn-bloc btn-sm my-1">Get Account Info</button>
          </div>
      </form>
       <?php if (isset($_POST['get'])) 
      {
        $array2 = $con->query("select * from all_customers where AccountNumber = '$_POST[otherNo]'");
        $array3 = $con->query("select * from all_customers where AccountNumber = '$_POST[otherNo]'");
        {
          if ($array2->num_rows > 0) 
          { $row2 = $array2->fetch_assoc();
            echo "<div class='alert alert-success w-50 mx-auto'>
                  <form method='POST'>
                    Account No.
                    <input type='text' value='$row2[AccountNumber]' name='otherNo' class='form-control ' readonly required>
                    Account Holder Name.
                    <input type='text' class='form-control' value='$row2[FirstName]' readonly required>
                    Account Holder Bank Name.
                    <input type='text' class='form-control' value='$row2[Email]' readonly required>
                    Enter Amount for tranfer.
                    <input type='number' name='amount' class='form-control' min='1' max='$row2[Balance]' required>
                    <button type='submit' name='transfer' class='btn btn-primary btn-bloc btn-sm my-1'>Tranfer</button>
                  </form>
                </div>";
          }elseif ($array3->num_rows > 0) {
           $row2 = $array3->fetch_assoc();
            echo "<div class='alert alert-success w-50 mx-auto'>
                  <form method='POST'>
                    Account No.
                    <input type='text' value='$row2[AccountNumber]' name='otherNo' class='form-control ' readonly required>
                    Account Holder Name.
                    <input type='text' class='form-control' value='$row2[FirstName]' readonly required>
                    Account Holder Bank Name.
                    <input type='text' class='form-control' value='".Email."' readonly required>
                    Enter Amount for tranfer.
                    <input type='number' name='amount' class='form-control' min='1' max='$userData[Balance]' required>
                    <button type='submit' name='transferSelf' class='btn btn-primary btn-bloc btn-sm my-1'>Tranfer</button>
                  </form>
                </div>";
          }
          else
            echo "<div class='alert alert-success w-50 mx-auto'>Account No. $_POST[otherNo] Does not exist</div>";
        }
      } 
      ?>
    <br>
    <?php
    if (isset($_POST['transferSelf']))
    {
      $amount = $_POST['amount'];
      setBalance($amount,'debit',$userData['AccountNumber']);
      setBalance($amount,'credit',$_POST['otherNo']);
      makeTransaction('transfer',$amount,$_POST['otherNo']);
      echo "<script>alert('Transfer Successfull');window.location.href='transaction.php'</script>";
    }
    if (isset($_POST['transfer']))
    {
      $amount = $_POST['amount'];
      setBalance($amount,'debit',$userData['AccountNumber']);
      makeTransaction('transfer',$amount,$_POST['otherNo']);
      echo "<script>alert('Transfer Successfull');window.location.href='transaction.php'</script>";
    }
     
    ?>  
  </div>
 
</div>

</div>
</body>
</html>
<?php
    session_start();
?>
<?php
    include 'include/config.php';

    //############### add users ##############################
    if(isset($_POST['add'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $blance = $_POST['balance'];
        $accountNo = rand(1111111,99999999);

        $sql = mysqli_query($conn,"INSERT INTO users (name,email,balance,account) VALUE('$name', '$email', '$blance', '$accountNo')");

        if($sql){
           $_SESSION['msg'] = "New Customer Added Successfull";
            header('location:adduser.php');
            ?>
            <script>
               document.getElementByClassName('msg').classList.add('alert');
            </script>
            <?php
        }else{
            echo 'not inserted';
        }
    }
?>

<?php
    //############### delete users ##############################

    if(isset($_GET['action'] ) == 'delete'){
          $delete = mysqli_query($conn, "DELETE FROM users WHERE id=".$_GET['id']);
          if($delete){
              $_SESSION['msg'] = 'Users Deleted Successful';
              header('location:user.php');
          }
    }
?>

<?php
//############### Update money ##############################
    if(isset($_POST['addBalance'])){
        $ids = $_POST['id'];
        $balance = $_POST['balance'];

        $select = mysqli_query($conn, "SELECT * FROM users WHERE id =".$ids);
        $row = mysqli_fetch_array($select);

        $newBalance = ($row['balance'] + $balance);

        $insert = mysqli_query($conn,"UPDATE users SET balance = {$newBalance} WHERE id = {$ids}");
          
         if($insert){
             $_SESSION['msg'] = 'Balance Added Successful';
             header('location:addblance.php?id='.$ids);
         }else{
             $_SESSION['msg'] = 'Balance Not Added Something went wrong';
             header('location:addblance.php?id='.$ids);
         }
    }
?>

<?php
    if(isset($_POST['transfer'])){
        $senderId = $_POST['id'];
        $reciverId = $_POST['reciever'];
        $balance = $_POST['balance'];

        $sender = mysqli_query($conn,"SELECT * FROM users WHERE id=".$senderId);
        $senderBalance = mysqli_fetch_array($sender);
        
        if($senderBalance['balance'] < $balance){
             $_SESSION['msg'] = 'Transaction fail due to Insufficient Balance';
             header('location:transfer.php?id='.$senderId);
        }else{
            $deductedBalance = ($senderBalance['balance'] - $balance);

            $recieved = mysqli_query($conn, "SELECT * FROM users WHERE id=".$reciverId);
            $recievedBalance = mysqli_fetch_array($recieved);
            $recievBalance = $recievedBalance['balance'] + $balance;

            $recievedUpdate = mysqli_query($conn, "UPDATE users SET balance = {$recievBalance} WHERE id = ".$reciverId);

            if($recievedUpdate){
                 $senderUpdate = mysqli_query($conn, "UPDATE users SET balance = {$deductedBalance} WHERE id = ".$senderId);
                 
                 if($senderUpdate){
                     $senderName = $senderBalance['name'];
                     $senderAccount = $senderBalance['account'];

                     $recieverName = $recievedBalance['name'];
                     $recieverAccount = $recievedBalance['account'];

                     $transactionAdd = mysqli_query($conn,"INSERT INTO transactions (sender_name, sender_account, 	reciever_name, reciever_account, Balance) VALUES ('$senderName', '$senderAccount', '$recieverName', '$recieverAccount', '$balance')");

                     if($transactionAdd){
                         $_SESSION['msg'] = 'Transaction successful';
                          header('location:transfer.php?id='.$senderId);
                     }
                 }
            }
        }
    }

?>
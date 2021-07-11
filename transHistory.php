<?php
  $title = 'Add User Section';
 include 'include/header.php';
?>

<style>
    footer{
        position:relative;
        bottom: 5px 0 10px;
        width:100%;
    }

    
</style>

<div class="container text-center mt-5">
 <div class="card px-5">
     <h1 class="py-3">Transaction History</h1>
<table class="table">
  <thead class="table-light">
    <tr>
        <td>S.N</td>
        <td>Sender Name</td>
        <td>Sender Acc.</td>
        <td>Reciever Name.</td>
        <td>Reciever Acc.</td>
        <td>Blance</td>
        <td>Date</td>
    </tr>
  </thead>
  <tbody>
  <?php
     include 'include/config.php';

     $sql = mysqli_query($conn,"SELECT * FROM  transactions order by id desc");
     $i = 1;
     if(mysqli_num_rows($sql) > 0){
             while($row = mysqli_fetch_array($sql)){
            ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $row['sender_name']; ?></td>
                    <td><?php echo $row['sender_account']; ?></td>
                    <td><?php echo $row['reciever_name']; ?></td>
                    <td><?php echo $row['reciever_account']; ?></td>
                    <td><?php echo $row['Balance']; ?></td>
                    <td><?php echo $row['trans_date']; ?></td>
                </tr>
            <?php
       }
     }else{
              ?>
               <tr>
                 <td><h1>No Data Found!</h1></td>
               </tr>
            <?php
       }        
  ?>
   
  </tbody>
</table>
 </div>
</div>

<?php include 'include/footer.php'; ?>

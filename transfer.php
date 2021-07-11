<?php 
session_start();
include 'include/config.php';
 $title = "Add New Customer section";
 include 'include/header.php';
 ?>
  <div class="cont">
   <div class="form-section">
    <div class="card">
    <h1>Transfer Money</h1>
     <?php
       if(isset($_SESSION['msg'])){
      ?>
       <div class="alert alert-warning alert-dismissible fade show" role="alert">
           <?php
             echo $_SESSION['msg'];
           ?>
           <?php unset($_SESSION['msg']); ?>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php
     }
     ?>
    <?php
     $ids = $_GET['id'];
      $sql = mysqli_query($conn,"SELECT * FROM users WHERE id = ".$ids);
        $i = 1;
          if($sql){
          $row = mysqli_fetch_array($sql);
     ?>
      <form action="function.php" method="post">
      <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
      <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <div class="mb-3">
          <label for="balance" class="form-label">Select Account</label>
           <select class="form-select mb-3" name="reciever" aria-label="Default select example" required>
            <option value="">Select Account </option>
                <?php
                    $sqll = mysqli_query($conn,"SELECT * FROM users");

                    while($roww = mysqli_fetch_array($sqll)){
                             if($roww['id'] != $row['id']){
                                 ?>
                                  <option value="<?php echo $roww['id'] ?>"><?php echo $roww['name'].'--('.$row['account'].')'; ?></option>
                                <?php
                             }
                    }
                ?>
         </select>
         <div class="mb-3">
          <label for="balance" class="form-label">Balance</label>
          <input type="number" class="form-control" id="balance" name="balance" placeholder="Enter Balance Amount">
        </div>
        </div>
          <button type="submit" name="transfer" class="btn btn-block btn-success w-100">Transfer</button>
      </form>
    </div>   
   </div>  
  </div>
  <div class="container">
    <h1 class="text-center">Account Details</h1>
    <table class="table">
  <thead class="table-light">
    <tr>
        <td>S.N</td>
        <td>Account No.</td>
        <td>Name</td>
        <td>Email</td>
        <td>Blance</td>
    </tr>
  </thead>
  <tbody>
              <tr>
                  <td><?php echo $i++; ?></td>
                  <td><?php echo $row['account']; ?></td>
                  <td><?php echo $row['name']; ?></td>
                  <td><?php echo $row['email']; ?></td>
                  <td><?php echo $row['balance']; ?></td>
              </tr>
          <?php
      }
  ?>
  </tbody>
</table>

  </div>
 <?php
     include 'include/footer.php';
 ?>
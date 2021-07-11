<?php
session_start();
  $title = 'Add User Section';
 include 'include/header.php';
?>
<style>
    footer{
        position:fixed;
        bottom: 0;
        width:100%;
    }

    
</style>

<div class="container text-center mt-5 mb-5 pb-5">
 <div class="card px-5">
     <h1 class="py-3">Customers List</h1>
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
<table class="table">
  <thead class="table-light">
    <tr>
        <td>S.N</td>
        <td>Account No.</td>
        <td>Name</td>
        <td>Email</td>
        <td>Blance</td>
        <td>Action</td>
    </tr>
  </thead>
  <tbody>
  <?php
    include 'include/config.php';

    $sql = mysqli_query($conn,"SELECT * FROM users");
    $i = 1;
    if($sql){
      while($row = mysqli_fetch_array($sql)){
          ?>
              <tr>
                  <td><?php echo $i++; ?></td>
                  <td><?php echo $row['account']; ?></td>
                  <td><?php echo $row['name']; ?></td>
                  <td><?php echo $row['email']; ?></td>
                  <td><?php echo $row['balance']; ?></td>
                  <td><a class="btn btn-danger" onclick="deletee()" href="function.php?id=<?php echo $row['id']; ?>&action=delete">Delete</a></td>
              </tr>
          <?php
      }
    }
  ?>  
  </tbody>
</table>
 </div>
</div>

<?php include 'include/footer.php'; ?>
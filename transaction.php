<?php
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
                  <td>
                      <a href="addblance.php?id=<?php echo $row['id']; ?>" class="btn btn-secondary">Add Balance</a>
                      <a href="transfer.php?id=<?php echo $row['id']; ?>" class="btn btn-info">Transfer</a>
                  </td>
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

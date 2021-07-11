<?php 
session_start();
 $title = "Add New Customer section";
 include 'include/header.php';
 ?>
 <style>
   footer{
     position:fixed;
     width:100%;
   }
 </style>
  <div class="cont">
   <div class="form-section">
    <div class="card">
    <h1>Add New Customer</h1>
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
      <form action="function.php" method="post">
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Enter Account Holder Name" required>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Enter Account Holder Email " required>
        </div>
        <div class="mb-3">
          <label for="balance" class="form-label">Balance</label>
          <input type="number" class="form-control" id="balance" name="balance" placeholder="Deposit minimum Rs. 1000" required>
        </div>
        <div class="alert-warning alert-dismissible fade hide" id="error" role="alert">
  
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      
          <button type="submit" name="add" class="btn btn-block btn-success w-100">Submit</button>
       
      </form>
    </div>
   </div>
  </div>
 <?php
     include 'include/footer.php';
 ?>
 
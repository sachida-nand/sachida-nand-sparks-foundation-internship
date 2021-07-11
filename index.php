<?php include 'include/header.php'; ?>
   <div class="main">
      <div class="content">
          <h1>Basic Banking System</h1>
          <p>It is safe for saving money for future use. our bank also give you 7% interest for your money. so what you thinking for let's come and deposit and increase your money in our bank</p>
      </div>
   </div>
   <div class="container">
       <div class="main-content">
           <div class="row">
               <div class="col-lg-3 col-sm-6">
                   <div class="card">
                      <i class="fas fa-user-plus fa-5x"></i>
                      <a href="adduser.php" class="btn btn-success mt-3">Add User</a>
                    </div>
               </div>
               <div class="col-lg-3 col-sm-6">
                   <div class="card">
                      <i class="fas fa-users fa-5x"></i>
                      <a href="user.php" class="btn btn-success mt-3">Users List</a>
                    </div>
               </div>
               <div class="col-lg-3 col-sm-6">
                   <div class="card">
                      <i class="fas fa-rupee-sign fa-5x"></i>
                      <a href="transaction.php" class="btn btn-success mt-3">Transfer Moner</a>
                    </div>
               </div>
               <div class="col-lg-3 col-sm-6">
                   <div class="card">
                      <i class="fas fa-info-circle fa-5x"></i>
                      <a href="transHistory.php" class="btn btn-success mt-3">Transaction Details</a>
                    </div>
               </div>
           </div>
       </div>
   </div>
<?php include 'include/footer.php'; ?>
  
<?php
$pageTitle = "Login";
include('includes/header.php');
?>
<div class="py-4 bg-secondary text-center">
    <h4 class="text-white">Login</h4>
</div>

<div class="py-5">
    <div class="container">
         <div class="row justify-content-center">
            <div class="col-md-4">

            </div>
              <div class="card">
                  <div class="card-header">
                     <h4>login</h4>
                  </div>
                  <div class="card-body">
                    <form action="">
                             <div class="mb-3">
                                  <label>Email Address</label>
                                  <input type="email" name="email"class="form">
                             </div>
                             <div class="mb-3">
                                  <label>Password</label>
                                  <input type="password" name="password"class="form">
                             </div>
                            <div class="mb-3">
                            <button type="submit" name="loginBtn" class="btn btn-primary w-100">Login</button>
                    </form>
                  </div>
                </div>
            </div>
        </div>
     </div>


<?php include('includes/footer.php'); ?>
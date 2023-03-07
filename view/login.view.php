
  <!-- head -->
  <?php require 'partials/head.php' ?>
    
   <form action="<?php $_PHP_SELF ?>"  method="GET" class="border border-success rounded-2 my-5 pb-4 px-4 col-sm-5 d-block mx-sm-auto mx-2">
      <div class="container">
        <div class="mb-3 mt-2 row gy-3">

          <legend class="fw-bold text-success">Login</legend>

          <label for="name" class="col-sm-3 col-form-label">Username: </label>
          <div class="col-sm-9">
            <input type="text" name="username" class="form-control border border-1 border-success" id="name" placeholder="Username or Email">
          </div>

          <label for="password" class="col-sm-3 col-form-label">Password: </label>
          <div class="col-sm-9">
            <input type="password" name="password" class="form-control border border-1 border-success" id="password" placeholder="Password">
          </div>
       
        </div>

        <input type="submit" value="Login" class="btn btn-success"><br><br>
        <small class="text-center mt-5 ">You don't have an account yet? <a href="/signup">Sign up now</a></small>
      </div>
      
    </form>
    

    <h4 class="text-center mt-5 <?= $textColor ?>"><?= $message ?></h4>

    <!-- footer -->
    <?php require 'partials/footer.php' ?>
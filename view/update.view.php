    <!-- head -->
    <?php require 'partials/head.php' ?>
    <!-- navigation bar -->
    <?php require 'partials/nav.php' ?>

    <form  method="get">
      <div class="container">
        <div class="mb-3 row mt-5 gy-3">

          <!-- <label for="inputID" class="col-sm-5 col-form-label">Product ID: </label> -->
          <div class="col-sm-5 d-none">
            <input type="number" name="id" class="form-control border border-1 border-success" id="inputID" placeholder="<?= $_GET['id'] ?>" value="<?= $_GET['id'] ?>">
          </div>

          <label for="inputName" class="col-sm-5 col-form-label">Product Name: </label>
          <div class="col-sm-5">
            <input type="text" name="name" class="form-control border border-1 border-success" id="inputName" placeholder="<?= $_GET['name'] ?>" value="<?= $_GET['name'] ?>">
          </div>

          <label for="inputType" class="col-sm-5 col-form-label">Product Type: </label>
          <div class="col-sm-5">
            <select name="type" class="form-control form-select border border-1 border-success" aria-label="Default select example"  id="inputType">
              <option selected value="<?= $_GET['type'] ?> "> 
                <?php 
                    if($_GET['type']==1){
                        echo 'Food';
                    }else if($_GET['type']==2){
                        echo 'Drink';
                    }else{
                        echo 'Cooffee';
                    }
                ?>
              </option>
              <?php
                if($_GET['type']==1){
                    echo '
                    <option value="2">Drink</option>
                    <option value="3">Coffee</option>';
                }else if($_GET['type']==2){
                    echo '
                    <option value="1">Food</option>
                    <option value="3">Coffee</option>';
                }else{
                    echo '
                    <option value="1">Food</option>
                    <option value="2">Drink</option>';
                }
              ?>
        
            </select>      
          </div>
         

          <label for="inputPrice" class="col-sm-5 col-form-label">Product Price: </label>
          <div class="col-sm-5">
            <input type="number" name="price" class="form-control border border-1 border-success" id="inputPrice" placeholder="Product Price (៛)" min="0"  value="<?= $_GET['price']?>">
          </div> 


          <label for="inputImage" class="col-sm-5 col-form-label">Product Image: </label>
          <div class="col-sm-5">
            <div class="input-group">
                <span class="input-group-text border border-1 border-success" id="basic-addon1"> <?= $_GET['img'] ?> </span>
                <input type="file" name="img" class="form-control border border-1 border-success" id="inputImage">
            </div>
          </div>

          <input type="text" name="img1" class="form-control d-none" value="<?= $_GET['img'] ?>">
         
        </div>
        
        <?php
            
            if(!$check){
              echo '<input type="submit" value="Update" class="btn btn-success">';
            }
              
        ?>
      
      </div>
    </form>
    <div class="container">
        <?php
            
            if($check){
                  echo '<a href="/edit" class="text-decoration-none"><button class="btn btn-success">Back</button></a>';
            }
                  
        ?>
    </div>

    <div class="h6 text-center mt-4 <?= $textColor ?>">
      <?= $message ?>
    </div>

   <!-- footer -->
   <?php require 'partials/footer.php' ?>
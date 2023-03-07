    <!-- head -->
    <?php require 'partials/head.php' ?>
    <!-- navigation bar -->
    <?php require 'partials/nav.php' ?>

    <form  method="post">
      <div class="container">
        <div class="mb-3 row mt-5 gy-3">

          <label for="inputName" class="col-sm-5 col-form-label">Product Name: </label>
          <div class="col-sm-4">
            <input type="text" name="name" class="form-control border border-1 border-success" id="inputName" placeholder="Product Name">
          </div>

          <label for="inputType" class="col-sm-5 col-form-label">Product Type: </label>
          <div class="col-sm-4">
            <select name="type" class="form-control form-select border border-1 border-success" aria-label="Default select example"  id="inputType">
              <option value="1">Food</option>
              <option value="2">Drink</option>
              <option value="3">Coffee</option>
            </select>      
          </div>
         

          <label for="inputPrice" class="col-sm-5 col-form-label">Product Price: </label>
          <div class="col-sm-4">
            <input type="number" name="price" class="form-control border border-1 border-success" id="inputPrice" placeholder="Product Price (៛)" min="0">
          </div>

          
          <label for="inputImage" class="col-sm-5 col-form-label">Product Image: </label>
          <div class="col-sm-4">
            <input type="file" name="img" class="form-control border border-1 border-success" id="inputImage">
          </div>
        </div>

     

        <input type="submit" value="Add Item" class="btn btn-success">
      
      </div>
    </form>

    <div class="h6 text-center mt-4 <?= $textColor ?>">
      <?= $message ?>
    </div>

    <!-- footer -->
    <?php require 'partials/footer.php' ?>
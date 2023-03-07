    <!-- head -->
    <?php require 'partials/head.php' ?>
    <!-- navigation -->
    <?php require 'partials/nav.php' ?>

    <!-- filter -->
    <section>
      <form method="GET">
        <div class="container mt-3">
          <div class="row">

            <div class="col-3 col-md-2 col-lg-1 d-flex align-items-center">
              <label class="fw-bold text-danger">Sorted by:</label>
            </div>
           
            <div class="col-6 col-sm-5 col-lg-3">
  
                <select class="form-select border border-success rounded-0" aria-label="Default select example" name="filter">
                  <option value="productName">Product Name</option>
                  <option value="productType">Product Type</option>
                  <option value="productPrice">Product Price</option>
                </select>
            
            </div>
            <div class="col-3 col-sm-2">
              <input type="submit" value="Sort" class="btn btn-outline-success rounded-0 px-3">
            </div>
          </div>
        </div>
      </form>
    </section>
    
    <form  method="post">
      <div class="container">
        <div class="mb-3 row mt-4 gy-3">
        
          <table class="table">
            <thead class="table-success text-success fw-bold">
              <tr>
                <th>No</th>
                <th>Item</th>
                <th>Price</th>
                <th>Type</th>
                <th>Image</th>
                <th colspan="2">Edit</th>
              </tr>
            </thead>
            <tbody>
            
                <?php

                  $i=1;
                  $checkFound=false;
 
                  $result = mysqli_query($database,"SELECT * FROM mytable WHERE {$search} ORDER BY {$filterType}");
                  
                  while($data = mysqli_fetch_assoc($result)){
                    $checkFound = $data;
                    $type ='';
                    if($data["productType"] == 1 ){
                      $type ='Food';
                    }else if($data["productType"] == 2 ){
                      $type ='Drink';
                    }else{
                      $type ='Coffee';
                    }

                    echo '
                    <tr>
                      <td>'. $i .'</td>
                      <td>'. $data["productName"] .'</td>
                      <td>'. $data["productPrice"] .'​ ៛ </td>
                      <td>'. $type .' </td>
                      <td> <img class="img-fluid" style="width:60px" src="'. $data["productImg"] .'"/> </td>
                      <td class="edit"> <a class="text-primary" href="/update?id='. $data['id'] .'&name='. $data['productName'].'&type='. $data['productType'].'&price='. $data['productPrice'].'&img='.$data['productImg'].'">Update</a></td>
                      <td><a class="text-danger" href="/delete?idd='. $data['id'] . '" data-bs-href="/delete?idd='. $data['id'] .'" type="button" data-bs-toggle = "modal" data-bs-target="#exampleModal">Delete</a></td>
                    </tr>
                    ';
                    $i++;
                    #<td class="edit deleteBtn"><a class="text-danger delete" href="delete.php?idd='. $data['id'] .'" onClick="return checkDelete()">Delete</a></td>
                  }

                  if(!$checkFound){
                    echo '
                    <tr>
                      <td colspan="6" class="text-danger text-center h3 fw-bold py-5">Search Not Found!</td>
                    </tr>';
                  }
                  
                  ?>
            
            </tbody>
          </table>

        </div>
      </div>
    </form>
    
    <!-- confirm delete -->
    <div class="modal fade" class="confirm-delete" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 fw-bold text-success" id="exampleModalLabel">Delete Product</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="text-danger text-center h4 fw-bold">Are you sure to delete?</p>
                    <p class="debug-url"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a href="#" class="btn btn-danger btn-ok">Yes</a>
                </div>
            </div>
        </div>
    </div>


    <script src="../js/edit.js"></script>

    <!-- footer -->
    <?php require 'partials/footer.php' ?>



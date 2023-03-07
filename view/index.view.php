    <!-- head -->
    <?php require 'partials/head.php' ?>
    <!-- navigation bar -->
    <?php require 'partials/nav.php' ?>

    <!-- Product filter -->
    <section id="home_product-filter" class="sticky-top z-1">
      <div class="container-fluid">
        <div class="row text-white bg-success text-center">
          <div class="col border-2 py-2">
            <a href="#food-container" class="text-decoration-none text-white"
              >Food</a
            >
          </div>
          <div class="col py-2">
            <a href="#drink-container" class="text-decoration-none text-white"
              >Drink</a
            >
          </div>
          <div class="col border-2 py-2">
            <a href="#coffee-container" class="text-decoration-none text-white"
              >Coffee</a
            >
          </div>
          <div class="col border-2 py-2">
            <a href="#content" class="text-decoration-none text-white">Invoice</a>
          </div>
        </div>
      </div>
    </section>

    <section class="row p-2 ps-sm-3">
      <!-- all product -->
      <form class="col-12 col-sm-9">
        <!-- product food box -->
        <section id="food-container">
          <div class="h2 px-4 py-2 mt-2 fw-bold">Food</div>
          <div class="container-fluid mt-4">
            <div class="row">

             <!-- to avoid 0 index of card class -->
             <div class="card rounded-0 d-none">
              <div class="card-body ">
                <h3 class="h5 productName">1</h3>
                <div class="text-danger productPrice">1</div>
              </div>
             </div>

              <?php

                while($data = mysqli_fetch_assoc($result1)){
                  echo ' 
                  <div class="col-4 col-md-2 mb-2 gx-2">
                   <div class="card rounded-0">
                     <img
                       src="'.$data["productImg"].'"
                       class="object-fit-cover"
                       alt="food"
                       style="height: 160px"
                     />
                     <div class="card-body">
                       <div class="h6 fw-bold productName">'.$data["productName"].'</div>
                       <div class="text-danger productPrice">'.$data["productPrice"].'៛</div>
                     </div>
                   </div>
                  </div>';
                  $i++;
                }
              ?>
            
            </div>
          </div>
        </section>

        <!-- product drink box -->
        <section id="drink-container">
          <div class="h2 px-4 py-2 mt-2 fw-bold">Drink</div>
          <div class="container-fluid mt-4">
            <div class="row">
             
            <?php

              while($data = mysqli_fetch_assoc($result2)){
                echo ' 
                <div class="col-4 col-md-2 mb-2 gx-2">
                <div class="card rounded-0">
                  <img
                    src="'.$data["productImg"].'"
                    class="object-fit-cover"
                    alt="food"
                    style="height: 160px"
                  />
                  <div class="card-body">
                    <div class="h6 fw-bold productName">'.$data["productName"].'</div>
                    <div class="text-danger productPrice">'.$data["productPrice"].'៛</div>
                  </div>
                </div>
                </div>';
                $i++;
              }
            ?>

            </div>
          </div>
        </section>
        <!-- product Coffee box -->
        <section id="coffee-container">
          <div class="h2 px-4 py-2 mt-2 fw-bold">Coffee</div>
            <div class="container-fluid mt-4">
              <div class="row">

                <?php

                  while($data = mysqli_fetch_assoc($result3)){
                    echo ' 
                    <div class="col-4 col-md-2 mb-2 gx-2">
                    <div class="card rounded-0">
                      <img
                        src="'.$data["productImg"].'"
                        class="object-fit-cover"
                        alt="food"
                        style="height: 160px"
                      />
                      <div class="card-body">
                        <div class="h6 fw-bold productName">'.$data["productName"].'</div>
                        <div class="text-danger productPrice">'.$data["productPrice"].'៛</div>
                      </div>
                    </div>
                    </div>';
                    $i++;
                  }
                ?>
              </div>
            </div>
          </div>
        </section>
      </form>

      <!-- invoice  -->
      <aside
        class="col-12 col-sm-3 bg-white sticky-top z-3 border-start border-bottom border-success border-2"
        id="content"
      >

        <div class="h2 text-center my-4 text-success order">Current order</div>
        <div class="h2 text-center my-4 text-success d-none invoice">INVOICE</div>
        <table class="table" id="table">
          <thead class="table-success text-success">
            <tr class="tr">
              <th scope="col">Item</th>
              <th scope="col">Qty</th>
              <th scope="col">Price</th>
            </tr>
          </thead>
          <tbody class="table-white">
            <tr>
              <td colspan="3" class="noItem text-center text-danger fw-bold h4 py-3">No Items</td>
            </tr>
          </tbody>
        </table>
                                    
        <!-- to avoid 0 index of card class -->
        <!-- total payment -->
        <div class="rounded-0 border border-danger p-3" id="border" title="Click to find total">
          <div class="card-body" id="total">
            <span class="h5 productName fw-bold">Total:</span>
            <span class="total text-danger fw-bold h5"> ០​ ​៛</span>
            <div class="text-danger productPrice d-none">0</div>
          </div>
        </div>
        
        <!--cash, new order and print button -->
        <div class="container-fluid my-4">
          <div class="row gap-1">
            <button onClick="findChange(change())" class="col btn btn-outline-success rounded-0" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop" aria-controls="staticBackdrop">Cash</button>
            <button onClick="window.location.reload()" class="col btn btn-outline-success rounded-0">New</button>
            <button onClick="printRecipt()" class="col btn btn-outline-success rounded-0">Print</button>
          </div>
        </div>
        
      </aside>
    </section>


    <!-- find change offcanvas -->

    <div class="offcanvas offcanvas-end" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop" aria-labelledby="staticBackdropLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title fw-bold text-success h4" id="staticBackdropLabel">Cash</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <div id="cash-total-kh"  class="fw-bold mt-2 text-success">
          
        </div>
        <div id="cash-total-us" class="fw-bold mt-2 text-success">
          
        </div>
      
        <div class="container-fluid">
          <div class="row mt-2">
            
            <div class="input-group mb-3 col p-0">
              <input type="text" id="costomer-cash" value="" class="form-control border-success" aria-label="Text input with dropdown button">
              <button id="currency" class="btn btn-outline-secondary dropdown-toggle text-danger" type="button" data-bs-toggle="dropdown" aria-expanded="false">​​</button>
              <ul class="dropdown-menu dropdown-menu-end">
                <li id="riel" class="px-2">Riel</li>
                <li id="dollar" class="px-2">Dollar</li>
              </ul>
              <button class="btn btn-success" onClick="change()">Find Change</button>
            </div>

          </div>
        </div>

        <div id="cash-change-kh" class="fw-bold h6 mt-4 text-danger">
          
        </div>
        <div id="cash-change-us" class="fw-bold h6 mt-2 text-danger">
          
        </div>
      </div>
    </div>


    <script src="../js/script.js"></script>

    <!-- footer -->
    <?php require 'partials/footer.php' ?>

    


    <!-- navigation -->
    <nav class="navbar navbar-expand-lg bg-light shadow-lg">

        <div class="container-fluid">
            <a class="navbar-brand p-0" href="/">
                <img src="assets/logo.avif" alt="Bootstrap" width="90" height="80" />
            </a>

            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>

            <div
                class="collapse navbar-collapse my-3 my-sm-0"
                id="navbarSupportedContent"
            >
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex gap-lg-4">
                    <li class="nav-item">
                        <a class="nav-link fw-bold  <?php urlIs($uri,"/") ?>" aria-current="page" href="/">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold <?php urlIs($uri,"/edit") ?>" href="/edit">EDIT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  fw-bold <?php urlIs($uri,"/insert") ?>" href="/insert">ADD ITEM</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  fw-bold <?php urlIs($uri,"/logout") ?>" href="/logout" data-bs-href="/logout" type="button" data-bs-toggle = "modal" data-bs-target="#example">LOGOUT</a>
                    </li>
                </ul>

                </ul>
                
                <!-- search box -->
                <?php 

                    if(isset($title) && $title == "Edit"){
                
                        echo '
                            <form class="d-flex" role="search" method="GET">
                                <input
                                class="form-control me-2 rounded-0 border border-success"
                                type="search"
                                placeholder="Search"
                                aria-label="Search"
                                name="search"
                                />
                                <button
                                class="btn btn-outline-success rounded-0"
                                type="submit"
                                >
                                Search
                                </button>
                            </form>';
                    }
                 

                ?>

            </div>
        </div>

    </nav>

    <!-- confirm logout -->
    <div class="modal fade" class="confirm-delete" id="example" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 fw-bold text-success" id="exampleModalLabel">Logout</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="text-danger text-center h4 fw-bold">Are you sure to Logout?</p>
                    <p class="debug-url"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a href="/logout" class="btn btn-danger btn-ok">Yes</a>
                </div>
            </div>
        </div>
    </div>
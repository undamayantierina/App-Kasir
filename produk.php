<?php
require 'function.php';
?>


<!DOCTYPE html>
<lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - Aplikasi Kasir</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-primary">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">Aplikasi Kasir</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                       
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                       
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Master Data</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Data Produk
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                              
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Data Pelanggan
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Data User
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a><div class="sb-sidenav-menu-heading">Transaksi</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Penjualan
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                   
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="login.html">Login</a>
                                            <a class="nav-link" href="register.html">Register</a>
                                            <a class="nav-link" href="password.html">Forgot Password</a>
                                        </nav>
                                    </div>
                                  
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">401 Page</a>
                                            <a class="nav-link" href="404.html">404 Page</a>
                                            <a class="nav-link" href="500.html">500 Page</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                           
                        
                           
                        </div>
                    </>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Primary Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                           
                                </div>
                            </div>
                            <button type="button" class="btn btn-outline-primary btn-sm mb-4" data-bs-toggle="modal" data-bs-target="#myModal">Tambah</button>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Data Produk
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Produk ID</th>
                                            <th>Nama Produk</th>
                                            <th>Harga</th>
                                            <th>Stok</th>
                                            <th>Aksi</th>
                                            
                                        </tr>
                                    </thead>
                          
                                    <tbody>
                                        <?php
                                        $get = mysqli_query($koneksi, "SELECT * FROM produk");
                                        $i = 1;
                                        while ($p = mysqli_fetch_array($get)) {
                                            $ProdukID = $p['ProdukID'];
                                            $NamaProduk = $p['NamaProduk'];
                                            $Harga = $p['Harga'];
                                            $Stok = $p['Stok'];
                                                 ?>
                                
                                        <tr>
                                            <td><?=$i++ ?></td>
                                            <td><?=$ProdukID?></td>
                                            <td><?=$NamaProduk?></td>
                                            <td>Rp.<?= number_format($Harga) ?></td>
                                            <td><?=$Stok?></td>
                                            <td>
                                                
                                                <button type="button" class="btn btn-outline-success btn-sm"data-bs-toggle="modal" data-bs-target="#edit<?= $ProdukID; ?>">Edit</button>
                                               <button type="button" class="btn btn-outline-danger btn-sm"data-bs-toggle="modal" data-bs-target="#hapus<?= $ProdukID; ?>">Hapus</button>
                                        
                                            </td>
                                            <!-- Modal Edit -->
                                            <div class="modal" id="edit<?= $ProdukID; ?>">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                        <!-- Modal Header -->
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Ubah <?= $NamaProduk ?></h4>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                        </div>
                                                        <form method="post">
                                                            <!-- Modal body -->
                                                            <div class="modal-body">
                                                            <input type="text" name="NamaProduk" class="form-control" placeholder="Nama Produk" value="<?= $NamaProduk?>">
                                                            <input type="num" name="Harga" class="form-control mt-2" placeholder="Harga" value="<?= $Harga?>">
                                                            <input type="num" name="Stok" class="form-control mt-2" placeholder="Stok" value="<?= $Stok?>">
                                                            <input type="hidden" name="ProdukID" value="<?= $ProdukID; ?>">
                                                            </div>

                                                            <!-- Modal footer -->
                                                            <div class="modal-footer">
                                                                <button type="sumbit" class="btn btn-success"data-bs-dismiss="modal" name="editproduk">Update</button>
                                                                <button type="button" class="btn btn-danger"data-bs-dismiss="modal">Close</button>
                                                            </div>

                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                 <!-- Modal Hapus -->
                                            <div class="modal" id="hapus<?= $ProdukID; ?>">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">

                                                        <!-- Modal Header -->
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Hapus <?= $NamaProduk ?></h4>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                        </div>
                                                        <form method="post">
                                                            <!-- Modal body -->
                                                            <div class="Modal-Body">
                                                                 Apakah anda yakin ingin menghapus barang ini ?
                                                                 <input type="hidden" name="ProdukID" value="<?= $ProdukID; ?>">
                                                                 </div>

                                                            <!-- Modal footer -->
                                                            <div class="modal-footer">
                                                                <button type="sumbit" class="btn btn-success"data-bs-dismiss="modal" name="hapusproduk">Delete</button>
                                                                <button type="button" class="btn btn-danger"data-bs-dismiss="modal">Cancel</button>
                                                            </div>

                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                        </tr>

                                        <?php
                                        };
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aut magnam nesciunt harum alias vitae iste sunt ex id. Iste dolores suscipit laudantium at minus. Architecto itaque aperiam deserunt nobis tenetur?
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt corrupti voluptates voluptatibus dignissimos earum molestias ipsa dolorum possimus quam fugit. Amet maxime aliquid, molestias expedita <p class="text-decoration-line-through">odio quasi repellendus ut tenetur?.</p>

                    </div>
                    
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Ratu Dewi N.S.L Cantik & Adel Lia Cantik</div>
                            <div>
                                <a href="https://instagram.com"> Instagram</a>
                                &middot;
                                <a href="https://youtube.com"> Youtube</a>
                                 &middot;
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Tambah Produk Baru</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form method="post">
                <!-- Modal body -->
                <div class="modal-body">
                  <input type="text" name="NamaProduk" class="form-control" placeholder="Nama Produk">
                  <input type="text" name="Harga" class="form-control mt-2" placeholder="Harga">
                  <input type="text" name="Stok" class="form-control mt-2" placeholder="Stok">
                  </div>

                   <!-- Modal footer -->
                   <div class="modal-footer">
                    <button type="sumbit" class="btn btn-success"data-bs-dismiss="modal" name="tambahproduk">Save</button>
                    <button type="button" class="btn btn-danger"data-bs-dismiss="modal">Close</button>
                   </div>
                    
                </div>
            </form>
        </div>
     </div>
</div>

</html>

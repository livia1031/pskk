<?= $this->extend('layout/template_header'); ?>

<?= $this->section('content_auth'); ?>
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('/home/admin/') ?>">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">DETAIL</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Form Pendaftaran -->



    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">


                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>



                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">


                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                    <li class="nav-item dropdown no-arrow d-sm-none">
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                            <form class="form-inline mr-auto w-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>




                    <!-- Nav Item - User Information -->


                </ul>

            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Pendaftaran Siswa SMA Negeri 1 Merauke</h1>

                </div>

                <!-- Content Row -->
                <?php if (session()->getFlashdata('pesan')) : ?>
                    <div class="alert alert-warning" role="alert">
                        <?= session()->getFlashdata('pesan'); ?>
                    </div>
                <?php endif; ?>

                <form action="/home/save" method="post">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama" value="<?= $detail['nama']; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="nisn">NISN</label>
                        <input type="text" class="form-control" id="nisn" placeholder="NISN" name="nisn" value="<?= $detail['nisn']; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat" placeholder="Alamat" name="alamat" value="<?= $detail['alamat']; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="tgl">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tgl" placeholder="Tanggal Lahir" name="tgl" value="<?= $detail['tgl']; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="jeniskelamin">Jenis Kelamin</label>
                        <input type="text" class="form-control" id="jeniskelamin" placeholder="Jenis Kelamin" name="jeniskelamin" value="<?= $detail['jeniskelamin']; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="mtk">mtk</label>
                        <input type="int" class="form-control" id="mtk" placeholder="Matematika" name="mtk" value="<?= $detail['mtk']; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="bing">mtk</label>
                        <input type="int" class="form-control" id="bing" placeholder="Bahasa Inggris" name="bing" value="<?= $detail['bing']; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="agama">Agama</label>
                        <input type="text" class="form-control" id="agama" placeholder="Agama" name="agama" value="<?= $detail['agama']; ?>" readonly>
                    </div>
                    <img src="<?= base_url('upload/' . $detail['photo']) ?>" />
                    <div class="form-group">
                        <label for="file">File</label>
                        <input type="file" class="form-control" id="file" readonly>

                    </div>
                    </div>
                    <button onclick="window.print()" class="btn btn-danger float-right"> <i class="fa fa-print"></i> Print </button></h2>
                    <div class="col-md-12 text-center">
                        <a href='<?= base_url('/home/admin/') ?>' class="btn btn-primary float-left">Back</a>
                    </div>
                </form>


                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">??</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?= base_url('/auth/logout') ?>">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <?= $this->endSection(); ?>
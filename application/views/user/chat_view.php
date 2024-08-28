<?php
$query = $this->db->query("SELECT * FROM tbl_inbox WHERE inbox_status='1'");
$jum_pesan = $query->num_rows();

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Halaman User</title>
    <!-- Tell the browser to be responsive to screen width -->
    <link rel="shorcut icon" type="text/css" href="<?php echo base_url() . 'assets/images/favicon.png' ?>">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/bootstrap/css/bootstrap.min.css' ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/font-awesome/css/font-awesome.min.css' ?>">
    <!-- Ionicons -->
    <!-- jvectormap -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css' ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/dist/css/AdminLTE.min.css' ?>">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/dist/css/skins/_all-skins.min.css' ?>">


</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <!--Header-->
        <?php
        $this->load->view('user/v_header');
        ?>

        <?php
        $this->load->view('user/sidebar');
        ?>



        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>Chat UMKM
                    <small></small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="#">Chat UMKM</a></li>

                </ol>
            </section>
            <br>
            <div class="box box-default">
                <div class="box-header with-border">
                    <h3 class="box-title">Kontak UMKM</h3>
                </div>
                <ul>
                    <li><a href="https://wa.me/6281234567890">UMKM Tembalang</a></li>
                    <li><a href="https://wa.me/6289876543210">UMKM Gajah Mada</a></li>
                    <li><a href="https://wa.me/6281234567890">UMKM Simpang Lima</a></li>
                    <li><a href="https://wa.me/6289876543210">UMKM Gajah Mungkur</a></li>
                    <li><a href="https://wa.me/6281234567890">UMKM Ngaliyan</a></li>
                    <li><a href="https://wa.me/6289876543210">UMKM Sriwijaya</a></li>
                    <li><a href="https://wa.me/6281234567890">UMKM Veteran</a></li>
                    <li><a href="https://wa.me/6289876543210">UMKM Peleburan</a></li>
                    <!-- Tambahkan kontak WhatsApp lainnya sesuai kebutuhan -->
                </ul>
            </div>
</body>

</html>
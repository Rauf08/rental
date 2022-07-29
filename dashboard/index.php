<?php
error_reporting(null);
session_start(); 
$root = '../'; //ada disidebar
$out = '../'; //ada disidebar
include "../koneksi.php";
include "../pengguna.php";
include "../set.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Home</title>

    <!-- Bootstrap Core CSS -->
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../assets/dist/css/template.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php 
			include '../sidebar.php' ;
		?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
					<ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-arrow-circle-o-right"></i> Dashboard
                            </li>
                    </ol>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
				<?php $tampil=mysql_query("SELECT tb_mobil.id_mobil, tb_mobil.foto_mobil, tb_jenis.nama_jenis, tb_mobil.type_mobil, tb_mobil.merk, tb_mobil.no_polisi, tb_mobil.warna, tb_mobil.harga, tb_mobil.status from mobilrental.tb_jenis inner join mobilrental.tb_mobil on (tb_jenis.id_jenis = tb_mobil.id_jenis)");
                        $total=mysql_num_rows($tampil);
                ?>
					<div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-car fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo "$total"; ?></div>
                                    <div>Jumlah Mobil</div>
                                </div>
                            </div>
                        </div>
                        <a href="../mobil/index.php">
                            <div class="panel-footer">
                                <span class="pull-left">Lihat Selengkapnya</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
				<?php $tampil=mysql_query("select * from tb_pelanggan order by id_pelanggan");
                        $total=mysql_num_rows($tampil);
                ?>
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-user-plus fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo "$total"; ?></div>
                                    <div>Total Pelanggan</div>
                                </div>
                            </div>
                        </div>
                        <a href="../pelanggan/index.php">
                            <div class="panel-footer">
                                <span class="pull-left">Lihat Selengkapnya</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
				<?php $tampil=mysql_query("select * from tb_user order by id_user");
                        $total=mysql_num_rows($tampil);
                ?>
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-user fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo "$total"; ?></div>
                                    <div>Jumlah User</div>
                                </div>
                            </div>
                        </div>
                        <a href="../user/index.php">
                            <div class="panel-footer">
                                <span class="pull-left">Lihat Selengkapnya</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
				<?php $tampil=mysql_query("SELECT tb_transaksi.id_transaksi, tb_mobil.type_mobil as id_mobil, tb_mobil.harga, tb_pelanggan.no_ktp as id_pelanggan, tb_pelanggan.nama_lengkap, tb_transaksi.tgl_sewa, tb_transaksi.tgl_selesaisewa, tb_transaksi.jumlah_harga, tb_transaksi.denda, tb_transaksi.status_pembayaran, tb_transaksi.status_pengembalian 
				FROM mobilrental.tb_transaksi 
				INNER JOIN mobilrental.tb_mobil on (tb_mobil.id_mobil=tb_transaksi.id_mobil)
				INNER JOIN mobilrental.tb_pelanggan on (tb_pelanggan.id_pelanggan=tb_transaksi.id_pelanggan)");
                $total=mysql_num_rows($tampil);
                ?>
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-calculator fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo "$total"; ?></div>
                                    <div>Jumlah Transaksi Pelanggan</div>
                                </div>
                            </div>
                        </div>
                        <a href="../user/index.php">
                            <div class="panel-footer">
                                <span class="pull-left">Lihat Selengkapnya</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <p><?php 
			if ($_SESSION[leveluser]=="admin")
		 	{ 
		   		echo "<p>Selamat Datang <strong>Administrator</strong>"; 
		  	} 
		 	else {
		  		echo "<p>Selamat Datang <strong>Administrator</strong></p>";
		  	} 
		 ?><strong>Anda dapat mengolah data melalui menu yang tersedia.</strong>
</p>
  
  
<fieldset><legend>Info tentang kami :</legend>
<div align="center">
  <p>MANUNGGAL RENT CAR <br />
	KOMPLEK TNI AU TRILOKA BLOK K 15 PANCORAN. JAK-SEL <br />
	Nama  : ........ <br />
	WA : 0859-4636-2593<br />
	
</p>
</div>
</fieldset>
                <section class="parallax-section clearfix google-map googlemap_template" id="section-23">
	<div class="content-area googlemap-section">
	<div class="googlemap-toggle">Peta</div>
		<div class="googlemap-content">
			<p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.143619813216!2d106.83873581413782!3d-6.244796662884913!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3ce7c13d921%3A0xdf057d57cd3d9d12!2sKantin%20Komplek%20TNI%20AU%20Triloka!5e0!3m2!1sid!2sid!4v1627290861358!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
			</p>
		</div>
	</div>
</section>
<script>
	$(document).ready(function(){
	$('#pesan_sedia').css("color","red");
	$('#pesan_sedia').append("<span class='glyphicon glyphicon-asterisk'></span>");
	});
	</script>
	
	<div class="bottom-footer">
		<div class="mid-content clearfix">
			<div  class="copy-right">
			<p align="center">Copyright <a rel="dofollow" target="_blank" href="https://agusjumadirauf.wordpress.com/">MANUNGGAL RENT CAR</a> 2021.</p>
		</div>
		</div>
	</footer><!-- #colophon -->
            </div>
            
            <!-- /.row -->
			<?php
				include '../notif_mobil.php';
			?>
            <div class="row">
                
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../assets/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../assets/dist/js/template.js"></script>
	
	<!-- Metis Menu Plugin JavaScript -->
    <script src="../assets/vendor/metisMenu/metisMenu.min.js"></script>

	<script type="text/javascript">
    $(document).ready(function() {
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
            $("#wrapper.toggled").find("#sidebar-wrapper").find(".collapse").collapse("hide");
        });
    });
    </script>
</body>

</html>

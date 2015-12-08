<!DOCTYPE html>
<html lang="en" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%;">
<head>
<title>Curve</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0">
<link rel="shortcut icon" type="image/x-icon" href="{{asset('/css/images/favicon.ico')}}">
<link rel="stylesheet" href="{{asset('/css/style.css')}}" type="text/css" media="all">
<link rel="stylesheet" href="{{asset('/css/flexslider.css')}}" type="text/css" media="all">
<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,500,700' rel='stylesheet' type='text/css'>
<script src="{{asset('/js/jquery-1.8.0.min.js')}}"></script>
<!--[if lt IE 9]><script src="js/modernizr.custom.js"></script><![endif]-->
<script src="{{asset('/js/jquery.flexslider-min.js')}}"></script>
<script src="{{asset('/js/functions.js')}}"></script>
<link rel="stylesheet" href="{{asset('/themes/blue/style.css')}}" type="text/css" id="" media="print, projection, screen" />
    <script type="text/javascript" src="{{asset('/jquery-latest.js')}}"></script>
    <script type="text/javascript" src="{{asset('/jquery.tablesorter.js')}}"></script>
    <script type="text/javascript" src="{{asset('/ckeditor/ckeditor.js')}}"></script>
    <script type="text/javascript">
    $(function() {
      $("table").tablesorter({debug: true});
    });
    </script>




</head>
<body>
<!-- wraper -->
<div id="wrapper">
  <!-- shell -->
  <div class="shell">
    <!-- container -->
    <div class="container">
      <!-- header -->
      <header id="header">
        
		<section id="date">
			<?php
			$tgl=date('d');
			$mounth=date('n');
			$tahun=date('Y');
			$day=date('l');
			
			if ($day=="Sunday") $hari = "Minggu";
			else if ($day=="Monday") $hari ="Senin";
			else if ($day=="Tuesday") $hari ="Selasa";
			else if ($day=="Wednesday") $hari ="Rabu";
			else if ($day=="Thursday") $hari ="Kamis";
			else if ($day=="Friday") $hari ="Jum'at";
			else if ($day=="Saturday") $hari ="Sabtu";
			
			if ($mounth=="1") $bulan = "Januari";
			else if ($mounth=="2") $bulan = "Febuari";
			else if ($mounth=="3") $bulan = "Maret";
			else if ($mounth=="4") $bulan = "April";
			else if ($mounth=="5") $bulan = "Mei";
			else if ($mounth=="6") $bulan = "Juni";
			else if ($mounth=="7") $bulan = "Juli";
			else if ($mounth=="8") $bulan = "Agustus";
			else if ($mounth=="9") $bulan = "September";
			else if ($mounth=="10") $bulan = "Oktober";
			else if ($mounth=="11") $bulan = "November";
			else if ($mounth=="12") $bulan = "Desember";
			
			
			
			echo $hari ." , " . $tgl . "-" . $bulan . "-" . $tahun;
			?>
		</section>
        <!-- search -->
        <div class="search">
          <form method="post" action="#">
            <span class="field">
            <input type="text" class="field" value="keywords here ..." title="keywords here ...">
            </span>
            <input type="submit" class="search-btn" value="">
          </form>
        </div>
        <!-- end of search -->
      </header>
      <!-- end of header -->
      <!-- navigation -->
      <nav id="navigation"> <a href="#" class="nav-btn">HOME<span class="arr"></span></a>
        <ul>
          <li><a href="{{ url('index') }}">Beranda</a></li>
          <li><a href="{{ url('profil') }}">Profil</a></li>
          <li><a href="{{ url('berita') }}">Berita & Artikel</a></li>
          <li><a href="{{ url('artikel') }}">Data</a></li>
          <li><a href="{{ url('publikasi') }}">Publikasi</a></li>
          <li><a href="{{ url('tentang') }}">Tentang</a></li>
        </ul>
      </nav>
      <!-- end of navigation -->
	  
	  <div class="header">
		<img src="{{asset('/css/images/headeredit.png')}}">
		<!--<h3><img src="images/LOGO_BPS.png"></h3>
		<h1>BADAN PUSAT STATISTIK</h1>
		<h2>KOTA BANJARMASIN</h2>-->

<section id="figure">
<table>


<a href="http://kalsel.bps.go.id" target="_blank"><img src="{{asset('/button/bps-prov.jpg')}}"></a>
<a href="http://www.bps.go.id" target="_blank"><img src="{{asset('/button/bps-ri.jpg')}}"></a>
<a href="http://microdata.bps.go.id" target="_blank"><img src="{{asset('/button/datamikro.jpg')}}"></a>
<a href="http://sirusa.bps.go.id" target="_blank"><img src="{{asset('/button/metadata.jpg')}}"></a>
<a href="http://rb.bps.go.id" target="_blank"><img src="{{asset('/button/rb.jpg')}}"></a>
<a href="http://statcapcerdas.bps.go.id" target="_blank"><img src="{{asset('/button/statcap.png')}}"></a>
<a href="http://mfdonline.bps.go.id" target="_blank"><img src="{{asset('/button/mfd.jpg')}}"></a>
<a href="http://pengaduan.bps.go.id" target="_blank"><img src="{{asset('/button/pengaduan.jpg')}}"></a>
<a href="http://lpse.bps.go.id" target="_blank"><img src="{{asset('/button/lpse.jpg')}}"></a>
<a href="http://www.stis.ac.id" target="_blank"><img src="{{asset('/button/stis.jpg')}}"></a>
<a href="http://pusdiklat.bps.go.id" target="_blank"><img src="{{asset('/button/pusdiklat.jpg')}}"></a>

</table>
</section>

<section id="isi">

@yield('content')
</section>
		
</div>
   <div class="footer-bottom">
          <nav class="footer-nav">
            <ul>
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Projects</a></li>
              <li><a href="#">Solutions</a></li>
              <li><a href="#">Jobs</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Contacts</a></li>
            </ul>
          </nav>
          <p class="copy">&copy; Copyright 2012 Company Name <span>|</span> <strong>Design by <a target="_blank" href="http://chocotemplates.com">ChocoTemplates</a></strong></p>
          <div class="cl">&nbsp;</div>
        </div>




		</div>
</div>
    <!-- end of container -->
  </div>
  <!-- end of shell -->
</div>
<!-- end of wrapper -->
</body>
</html>
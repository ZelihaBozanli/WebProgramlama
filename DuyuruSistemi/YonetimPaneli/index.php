<?php
    include('veritabani_baglantisi.php');


if(isset($_POST['duyuru_guncelle'])){

    $duyuru_id=$_POST["duyuru_id"];
    $duyuru_baslik=$_POST["duyuru_baslik"];
    $duyuru=$_POST["duyuru"];
    $baslik_yazi_tipi=$_POST["baslik_yazi_tipi"];
    $yazi_tipi=$_POST["yazi_tipi"];
    $baslik_yazi_boyutu=$_POST["baslik_yazi_boyutu"]; 
    $yazi_boyutu=$_POST["yazi_boyutu"];
        
    $guncelle = $db->exec("UPDATE duyurular SET duyuru_baslik='$duyuru_baslik',duyuru='$duyuru',baslik_yazi_tipi='$baslik_yazi_tipi',yazi_tipi='$yazi_tipi',
        baslik_yazi_boyutu='$baslik_yazi_boyutu',yazi_boyutu='$yazi_boyutu' WHERE duyuru_id='$duyuru_id'");

}else if(isset($_POST['yazi_guncelle'])){

    $yazi_id=$_POST["yazi_id"];
    $yazi=$_POST["yazi"];
    $yazi_tipi=$_POST["yazi_tipi"];
    $yazi_boyutu=$_POST["yazi_boyutu"];
    $guncelle = $db->exec("UPDATE yazilar SET yazi='$yazi',yazi_tipi='$yazi_tipi',yazi_boyutu='$yazi_boyutu' WHERE yazi_id='$yazi_id'");
    
}else if(isset($_POST['yazi_baslik_ekle'])){

  $yazi_baslik=$_POST["yazi_baslik"];
    $ekle=$db->exec("insert into yazilar(yazi) values('$yazi_baslik')");

}


if(isset($_POST['resim_guncelle_1'])){

    $yukleklasor="resimler/";
    $tmp_name=$_FILES['resim']['tmp_name'];
    $name=$_FILES['resim']['name'];
    $rastgele_sayi1=rand(10,50);
    $rastgele_sayi2=rand(10,50);
    $uzanti=substr($name,-4,4);
    $resimismi=$rastgele_sayi1.$rastgele_sayi2.$uzanti;

$db->exec("UPDATE resimler SET resim_ismi='$resimismi' WHERE resim_id=1");
move_uploaded_file($tmp_name, "$yukleklasor/$resimismi");

}else if(isset($_POST['resim_guncelle_2'])){
    
    $yukleklasor="resimler/";
    $tmp_name=$_FILES['resim']['tmp_name'];
    $name=$_FILES['resim']['name'];
    $rastgele_sayi1=rand(10000,50000);
    $rastgele_sayi2=rand(10000,50000);
    $uzanti=substr($name,-4,4);
    $resimismi=$rastgele_sayi1.$rastgele_sayi2.$uzanti;

    $db->exec("UPDATE resimler SET resim_ismi='$resimismi' WHERE resim_id=2");
    move_uploaded_file($tmp_name, "$yukleklasor/$resimismi");

}else if(isset($_POST['resim_guncelle_3'])){
    
    $yukleklasor="resimler/";
    $tmp_name=$_FILES['resim']['tmp_name'];
    $name=$_FILES['resim']['name'];
    $uzanti=substr($name,-4,4);
    $rastgele_sayi1=rand(10000,50000);
    $rastgele_sayi2=rand(10000,50000);

    $resimismi=$rastgele_sayi1.$rastgele_sayi2.$uzanti;

    $db->exec("UPDATE resimler SET resim_ismi='$resimismi' WHERE resim_id=3");
    move_uploaded_file($tmp_name, "$yukleklasor/$resimismi");

}else if(isset($_POST['resim_guncelle_4'])){

    $yukleklasor="resimler/";
    $tmp_name=$_FILES['resim']['tmp_name'];
    $name=$_FILES['resim']['name'];
    $rastgele_sayi1=rand(10000,50000);
    $rastgele_sayi2=rand(10000,50000);
    $uzanti=substr($name,-4,4);
    $resimismi=$rastgele_sayi1.$rastgele_sayi2.$uzanti;
    
    $db->exec("UPDATE resimler SET resim_ismi='$resimismi' WHERE resim_id=4");
    move_uploaded_file($tmp_name, "$yukleklasor/$resimismi");
}


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>YÖNETİM PANELİ</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin Theme #4 for statistics, charts, recent events and reports" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="../assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css" />
                <link href="../assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="../assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="../assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="../assets/layouts/layout4/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/layouts/layout4/css/themes/default.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="../assets/layouts/layout4/css/custom.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /></head>
    <!-- END HEAD -->

    <body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo">
        <!-- BEGIN HEADER -->
        <div class="page-header navbar navbar-fixed-top">
        	<center><h1 style="color: white">YÖNETİM PANELİ</h1></center>
        </div>
        <!-- END HEADER -->
        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar-wrapper">
                <div class="page-sidebar navbar-collapse collapse">
                    <ul class="page-sidebar-menu   " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                        <li class="nav-item start active open">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-home"></i>
                                <span class="title">YÖNETİM PANELİ</span>
                                <span class="selected"></span>
                            </a>

                        </li>
                        <li class="heading">
                            <h3 class="uppercase">işlemler</h3>
                        </li>
                        <li class="nav-item  ">
                            <a href="#duyurular" class="nav-link">
                                <i class="icon-diamond"></i>
                                <span class="title">DUYURULAR</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="#kayan_yazi" class="nav-link">
                                <i class="icon-puzzle"></i>
                                <span class="title">KAYAN YAZI</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="#slayt" class="nav-link nav-toggle">
                                <i class="icon-anchor"></i>
                                <span class="title">SLAYT</span>
                            </a> 
                        </li>
                    </ul>
                    <!-- END SIDEBAR MENU -->
                </div>
                <!-- END SIDEBAR -->
            </div>
            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
        <div class="row">
                <div class="page-content">
                    <div id="duyurular" class="col-lg-6 col-xs-12 col-sm-12">
                        <div class="portlet light bordered">
                            <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-equalizer font-dark hide"></i>
                                        <span class="caption-subject font-green-sharp uppercase">DUYURULAR</span>
                                    </div>
                                    <div class="tools">
                                        <a href="" class="expand" data-original-title="" title=""> </a>
                                    </div>
                            </div>
                            <div class="portlet-body">
                                    <form action="" method="post">
                                    <input type="text" name="duyuru_id" style="width: 300px;" value=<?php
                                        if(isset($_POST['duyuru_goster'])){
                                          $duyuru_id=$_POST["duyuru_id"];

                                        $veri=$db->query("SELECT * FROM duyurular where duyuru_id='$duyuru_id'");
                                        $duyuru= $veri->fetch(PDO::FETCH_ASSOC);
                                        echo $duyuru["duyuru_id"];
                                    }else{
                                        echo "!!DuyuruIDGiriniz!!";
                                    }
                                    ?>>
                                    <button type="submit" name="duyuru_goster" class="btn btn-outline green btn-sm"> GÖSTER </button>
                                    <p>  </p>

                                    <input type="text" name="duyuru_baslik" style="width: 300px;" value=<?php
                                        if(isset($_POST['duyuru_goster'])){
                                          $duyuru_id=$_POST["duyuru_id"];

                                        $veri=$db->query("SELECT * FROM duyurular where duyuru_id='$duyuru_id'");
                                        $duyuru= $veri->fetch(PDO::FETCH_ASSOC);
                                        echo $duyuru["duyuru_baslik"];
                                    }else{
                                        echo "DuyuruBaşlıkGiriniz..";
                                    }
                                    ?>>

                                    
                                    <input maxlength="500" type="text" name="duyuru" style="width: 410px; height: 100px;" value=<?php
                                        if(isset($_POST['duyuru_goster'])){
                                          $duyuru_id=$_POST["duyuru_id"];

                                        $veri=$db->query("SELECT * FROM duyurular where duyuru_id='$duyuru_id'");
                                        $duyuru= $veri->fetch(PDO::FETCH_ASSOC);
                                        echo $duyuru["duyuru"];
                                    }else{
                                        echo "DuyuruGiriniz..";
                                    }
                                    ?>>

                                    <input type="text" name="baslik_yazi_tipi"  style="width: 100px;" value=<?php
                                        if(isset($_POST['duyuru_goster'])){
                                          $duyuru_id=$_POST["duyuru_id"];

                                        $veri=$db->query("SELECT * FROM duyurular where duyuru_id='$duyuru_id'");
                                        $duyuru= $veri->fetch(PDO::FETCH_ASSOC);
                                        echo $duyuru["baslik_yazi_tipi"];
                                    }else{
                                        echo "BaşlıkYazıTipiGiriniz..";
                                    }
                                    ?>>


                                    <input type="text" name="yazi_tipi"  style="width: 100px;" value=<?php
                                        if(isset($_POST['duyuru_goster'])){
                                          $duyuru_id=$_POST["duyuru_id"];

                                        $veri=$db->query("SELECT * FROM duyurular where duyuru_id='$duyuru_id'");
                                        $duyuru= $veri->fetch(PDO::FETCH_ASSOC);
                                        echo $duyuru["yazi_tipi"];
                                    }else{
                                        echo "YazıTipiGiriniz..";
                                    }
                                    ?>>

                                    <input type="text" name="baslik_yazi_boyutu"  style="width: 100px;" value=<?php
                                        if(isset($_POST['duyuru_goster'])){
                                          $duyuru_id=$_POST["duyuru_id"];

                                        $veri=$db->query("SELECT * FROM duyurular where duyuru_id='$duyuru_id'");
                                        $duyuru= $veri->fetch(PDO::FETCH_ASSOC);
                                        echo rtrim($duyuru["baslik_yazi_boyutu"]);
                                    }else{
                                    	print_r("yazi boyutu");
                                                                            }
                                    ?>>
                                    <input type="text" name="yazi_boyutu"  style="width: 100px;" value=<?php
                                        if(isset($_POST['duyuru_goster'])){
                                          $duyuru_id=$_POST["duyuru_id"];

                                        $veri=$db->query("SELECT * FROM duyurular where duyuru_id='$duyuru_id'");
                                        $duyuru= $veri->fetch(PDO::FETCH_ASSOC);
                                        echo $duyuru["yazi_boyutu"];
                                    }else{
                                        echo "YazıBoyutuGiriniz..";
                                    }
                                    ?>><br><br>
                                     <button type="submit" class="btn green" name="duyuru_guncelle">
                                        <i class="fa fa-check"></i> GÜNCELLE</button>

                                </form>
                            </div>
                        </div>
                    </div>  


                    <div id="kayan_yazi" class="col-lg-6 col-xs-12 col-sm-12">
                        <div class="portlet light bordered">
                            <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-equalizer font-dark hide"></i>
                                        <span class="caption-subject font-green-sharp uppercase">KAYAN YAZILAR</span>
                                    </div>
                                    <div class="tools">
                                        <a href="" class="expand" data-original-title="" title=""> </a>
                                    </div>
                            </div>
                            <div class="portlet-body">
                                    <form action="" method="post">
                                    <p> </p>
                                    <input type="text" style="width: 300px;" name="yazi_id" value=<?php
                                        if(isset($_POST['yazi_goster'])){
                                          $yazi_id=$_POST["yazi_id"];

                                        $veri=$db->query("SELECT * FROM yazilar where yazi_id='$yazi_id'");
                                        $yazi= $veri->fetch(PDO::FETCH_ASSOC);
                                        echo $yazi["yazi_id"];
                                    }else{
                                        echo "!!DuyuruIDGiriniz!!";
                                    }
                                    ?>>
                                    <button type="submit" name="yazi_goster" class="btn btn-outline green btn-sm"> GÖSTER </button>
                                    <p> </p>
                                    <input name="yazi" type="text" style="width: 450px; height: 100px;"value=<?php
                                        if(isset($_POST['yazi_goster'])){
                                          $yazi_id=$_POST["yazi_id"];

                                            $veri=$db->query("SELECT * FROM yazilar where yazi_id='$yazi_id'");
                                            $yazi= $veri->fetch(PDO::FETCH_ASSOC);
                                                echo $yazi["yazi"];
                                        }else{
                                            echo "YaziGiriniz..";
                                        }
                                        ?>><p> </p>
                                    <input type="text" name="yazi_tipi"  style="width: 100px;" value=<?php
                                        if(isset($_POST['yazi_goster'])){
                                          $yazi_id=$_POST["yazi_id"];

                                        $veri=$db->query("SELECT * FROM yazilar where yazi_id='$yazi_id'");
                                        $yazi= $veri->fetch(PDO::FETCH_ASSOC);
                                        echo $yazi["yazi_tipi"];
                                    }else{
                                        echo "YazıTipiGiriniz..";
                                    }
                                    ?>>
                                    <input type="text" name="yazi_boyutu"  style="width: 100px;" value=<?php
                                        if(isset($_POST['yazi_goster'])){
                                          $duyuru_id=$_POST["yazi_id"];

                                        $veri=$db->query("SELECT * FROM yazilar where yazi_id='$yazi_id'");
                                        $duyuru= $veri->fetch(PDO::FETCH_ASSOC);
                                        echo $duyuru["yazi_boyutu"];
                                    }else{
                                        echo "YazıBoyutuGiriniz..";
                                    }
                                    ?>><p> </p>
                                        <button type="submit" class="btn green" name="yazi_guncelle">
                                        <i class="fa fa-check"></i> GÜNCELLE</button>
                                </form>
                            </div>
                        </div>
                    </div> 
              
                        <div id="slayt" class="col-lg-6 col-xs-12 col-sm-12">
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-equalizer font-dark hide"></i>
                                        <span class="caption-subject font-green-sharp uppercase">Slaytlar</span>
                                    </div>
                                    <div class="tools">
                                        <a href="" class="expand" data-original-title="" title=""> </a>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-anchor font-green-sharp"></i>
                                        <span class="caption-subject font-green-sharp bold uppercase">RESİM GÜNCELLE</span>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <p> RESİM YÜKLE</p>
                                    <div class="tabbable tabbable-tabdrop">
                                        <ul class="nav nav-tabs">
                                            <li class="active">
                                                <a href="#tab1" data-toggle="tab">Resim 1</a>
                                            </li>
                                            <li>
                                                <a href="#tab2" data-toggle="tab">Resim 2</a>
                                            </li>
                                            <li>
                                                <a href="#tab3" data-toggle="tab">Resim 3</a>
                                            </li>
                                            <li>
                                                <a href="#tab4" data-toggle="tab">Resim 4</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="tab1">
                                                <P><?php 
                                                $veri=$db->query("SELECT resim_ismi FROM resimler where resim_id=1");
                                                $resim = $veri->fetch(PDO::FETCH_ASSOC);
                                                echo $resim["resim_ismi"];
                                            ?></P>
                                                 <form action="" method="post" enctype="multipart/form-data"> 
                                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                                        <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">

                                                            <img src="resimler/<?php echo $resim['resim_ismi'];?>"></div>
                                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                                        <input type="file" name="resim">
                                                    </div>                                                                    
                                                        <button name="resim_guncelle_1"1 value="Yükle" type="submit" class="btn btn-outline green btn-sm">GÜNCELLE</button>
                                                  </form>  
                                            </div>
                                            <div class="tab-pane" id="tab2">
                                                <P><?php 
                                                $veri=$db->query("SELECT resim_ismi FROM resimler where resim_id=2");
                                                $resim = $veri->fetch(PDO::FETCH_ASSOC);
                                                echo $resim["resim_ismi"];
                                            ?></P>                                               
                                                 <form action="" method="post" enctype="multipart/form-data"> 
                                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                                        <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                            <img src="resimler/<?php echo $resim['resim_ismi'];?>"> </div>
                                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                                        <input type="file" name="resim">
                                                    </div>                                                                    
                                                        <button name="resim_guncelle_2"1 value="Yükle" type="submit" class="btn btn-outline green btn-sm">GÜNCELLE</button>
                                                  </form>  

                                            </div>
                                            
                                            <div class="tab-pane" id="tab3">
                                                <P><?php 
                                                $veri=$db->query("SELECT resim_ismi FROM resimler where resim_id=3");
                                                $resim = $veri->fetch(PDO::FETCH_ASSOC);
                                                echo $resim["resim_ismi"];
                                            ?></P>
                                                 <form action="" method="post" enctype="multipart/form-data"> 
                                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                                        <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                            <img src="resimler/<?php echo $resim['resim_ismi'];?>"></div>
                                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                                        <input type="file" name="resim">
                                                    </div>                                                                    
                                                        <button name="resim_guncelle_3"1 value="Yükle" type="submit" class="btn btn-outline green btn-sm">GÜNCELLE</button>
                                                  </form> 
                                            </div>
                                            <div class="tab-pane" id="tab4">
                                                <P><?php 
                                                $veri=$db->query("SELECT resim_ismi FROM resimler where resim_id=4");
                                                $yazi = $veri->fetch(PDO::FETCH_ASSOC);
                                                echo $yazi["resim_ismi"];
                                            ?></P>
                                                 <form action="" method="post" enctype="multipart/form-data"> 
                                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                                        <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                            <img src="resimler/<?php echo $resim['resim_ismi'];?>"> </div>
                                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                                        <input type="file" name="resim">
                                                    </div>                                                                    
                                                        <button name="resim_guncelle_4"1 value="Yükle" type="submit" class="btn btn-outline green btn-sm">GÜNCELLE</button>
                                                  </form> 
                                            </div>
                                            <div class="tab-pane" id="tab5">
                                                <P><?php 
                                                $veri=$db->query("SELECT resim_ismi FROM resimler where resim_id=5");
                                                $yazi = $veri->fetch(PDO::FETCH_ASSOC);
                                                echo $yazi["resim_ismi"];
                                            ?></P>
                                                 <form action="" method="post" enctype="multipart/form-data"> 
                                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                                        <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                            <img src="resimler/<?php echo $resim['resim_ismi'];?>"> </div>
                                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                                        <input type="file" name="resim">
                                                    </div>                                                                    
                                                        <button name="resim_guncelle_5"1 value="Yükle" type="submit" class="btn btn-outline green btn-sm">GÜNCELLE</button>
                                                  </form> 
                                            </div>
                                        
                                            </div>
                                        </div>
                                    </div>
                                    <p> &nbsp; </p>
                                    <p> &nbsp; </p>
                                </div>
                            </div>


                                </div>
                            </div>
                        </div>







          
                

                </div>

            </div>
                <!-- END CONTENT BODY -->
        </div>
            <!-- END CONTENT -->

        </div>
        <!-- END CONTAINER -->
       
      
        <!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script> 
<script src="../assets/global/plugins/ie8.fix.min.js"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src="../assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="../assets/global/plugins/moment.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/morris/morris.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/morris/raphael-min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/amcharts/amcharts/amcharts.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/amcharts/amcharts/serial.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/amcharts/amcharts/pie.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/amcharts/amcharts/radar.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/amcharts/amcharts/themes/light.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/amcharts/amcharts/themes/patterns.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/amcharts/amcharts/themes/chalk.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/amcharts/ammap/ammap.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/amcharts/ammap/maps/js/worldLow.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/amcharts/amstockcharts/amstock.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/horizontal-timeline/horizontal-timeline.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/flot/jquery.flot.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/flot/jquery.flot.resize.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/flot/jquery.flot.categories.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="../assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="../assets/pages/scripts/dashboard.min.js" type="text/javascript"></script>
                <script src="../assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="../assets/layouts/layout4/scripts/layout.min.js" type="text/javascript"></script>
        <script src="../assets/layouts/layout4/scripts/demo.min.js" type="text/javascript"></script>
        <script src="../assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <script src="../assets/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
        <script>
            $(document).ready(function()
            {
                $('#clickmewow').click(function()
                {
                    $('#radio1003').attr('checked', 'checked');
                });
            })
        </script>
    </body>

</html>
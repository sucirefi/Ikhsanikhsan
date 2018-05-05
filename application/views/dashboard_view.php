<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Comportable" content="IE=edge">
    <meta name="viewport" content="width=device-width, intial-scale=1">
    <title>pemesanan mug</title>
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/bootstrap.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/bootstrap-theme.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/bootstrap-theme.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/font-awesome/css/font-awesome.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet">
    <style type="text/css">
     body{
        background-image: url('assets/gelas2.jpg');
        background-size: cover;
     }   
    </style>
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="#" class="navbar-brand"></a>
            </div>
            <ul class="navbar-nav nav">
                <li class="active">
                    <?php echo anchor('#','mug')?>
                </li>
                <li>
                    <?php echo anchor('dashboard','Home')?>
                </li>
                <li>
                    <?php echo anchor('Tampil','data')?>
                </li>
                <li>
                    <?php echo anchor('transaksi/tambah','Tambah Data') ?>
                </li> 
                
                
            </ul>
        </div>
    </nav>

    <div class="container">
        <?php echo $this->load->view($content,'',TRUE);?>
    </div>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/npm.js');?>"></script>
</body>
</html>
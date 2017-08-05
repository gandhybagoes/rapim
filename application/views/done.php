<html>
<head>
    <title>Membuat Tampilan Di Tengah Layar </title>
    <style>
        .tengah {
            position: absolute;
            margin-left: auto;
            margin-right: auto;
            left: 0;
            right: 0;
            top: 25%

        }
    </style>

<body>
<div align="center" class="tengah">
    <img src="<?php echo base_url() ?>/assets/images/logo_telkom.png" width="25%" height="30%">
    <br><br>
    <h1 style="font-size: 60px"><?php echo $msg ?></h1>
</div>
</body>
</html>
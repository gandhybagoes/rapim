<html>
<?php if ($data == "") { ?>
<head>
    <title>RAPIM 2017</title>
    <style>
        .tengah {
            position: absolute;
            margin-left: auto;
            margin-right: auto;
            left: 0;
            right: 0;
            top: 10%

        }
    </style>

    <body>
<div align="center" class="tengah">
    <img src="<?php echo base_url() ?>/assets/images/logo_telkom.png" width="45%" height="45%">
    <br><br>
    <h1 style="font-size: 60px"><?php echo $msg ?></h1>
</div>
</body>
<?php } else { ?>
    <head>
        <title>RAPIM 2017</title>
        <style>
            .tengah {
                position: absolute;
                margin-left: auto;
                margin-right: auto;
                left: 0;
                right: 0;
                top: 10%

            }
        </style>

    <body>
    <div align="center" class="tengah">
        <img src="<?php echo base_url() ?>/assets/images/logo_telkom.png" width="8%" height="10%">
        <br><br>
        <?php foreach ($data as $data) { ?>
            <table>
                <tr>
                    <td rowspan="9">
                        <img src="<?php echo base_url() ?>/camera/<?php echo $data['foto'] ?>" width="60%" height="60%">
                    </td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td><b>NIK </b></td>
                    <td><b>: </b></td>
                    <td><?php echo $data['nik'] ?></td>
                </tr>
                <tr>
                    <td><b>Nama </b></td>
                    <td><b>: </b></td>
                    <td><?php echo $data['nama'] ?></td>
                </tr>
                <tr>
                    <td><b>Posisi </b></td>
                    <td><b>: </b></td>
                    <td><?php echo $data['posisi'] ?></td>
                </tr>
                <tr>
                    <td><b>Band </b></td>
                    <td><b>: </b></td>
                    <td><?php echo $data['band'] ?></td>
                </tr>
                <tr>
                    <td><b>Lokasi Kerja </b></td>
                    <td><b>: </b></td>
                    <td><?php echo $data['lokasi_kerja'] ?></td>
                </tr>
                <tr>
                    <td><b>Unit </b></td>
                    <td><b>: </b></td>
                    <td><?php echo $data['unit'] ?></td>
                </tr>
                <tr>
                    <td><b>Kota </b></td>
                    <td><b>: </b></td>
                    <td><?php echo $data['kota'] ?></td>
                </tr>
                <tr>
                    <td><b>Nomor Telepon </b></td>
                    <td><b>: </b></td>
                    <td><?php echo $data['telepon'] ?></td>
                </tr>
            </table>
        <?php } ?>
        <h1 style="font-size: 60px"><?php echo $msg ?></h1>
    </div>
    </body>

<?php } ?>
</html>
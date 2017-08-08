<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-4 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3><?php echo $total ?></h3>

                        <p>Total Undangan</p>
                    </div>
                    <a href="<?php echo base_url('index.php') ?>/welcome/absensi?r=total" class="small-box-footer">More
                        info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-4 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <table>
                            <tr>
                                <td width="70%"><h3><?php echo $hadir ?></h3></td>
                                <td><h3>[<?php $presentase = round($hadir / $total * 100, 0);
                                        echo $presentase; ?>%]</h3></td>
                            </tr>
                        </table>

                        <p>Undangan Hadir</p>
                    </div>
                    <a href="<?php echo base_url('index.php') ?>/welcome/absensi?r=hadir" class="small-box-footer">More
                        info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-4 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3><?php echo $pengganti ?></h3>

                        <p>Undangan Pengganti</p>
                    </div>
                    <a href="<?php echo base_url('index.php') ?>/welcome/absensi?r=pengganti" class="small-box-footer">More
                        info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <section class="col-lg-12 connectedSortable">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title">Data Files</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NIK</th>
                                        <th>Nama</th>
                                        <th>Posisi</th>
                                        <th>Lokasi Kerja</th>
                                        <?php
                                        $r = $_GET['r'];
                                        if ($r == "hadir" || $r == "pengganti") {
                                            ?>
                                            <th>Foto</th>
                                            <th>Waktu Absen</th>
                                        <?php } ?>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $no = 1;
                                    foreach ($data as $a) { ?>
                                        <tr>
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $a['nik'] ?></td>
                                            <td><?php echo $a['nama'] ?></td>
                                            <td><?php echo $a['posisi'] ?></td>
                                            <td><?php echo $a['unit'] ?></td>
                                            <?php
                                            $r = $_GET['r'];
                                            if ($r == "hadir" || $r == "pengganti") {
                                                ?>
                                                <td><a href="<?php echo base_url() ?>/camera/<?php echo $a['foto'] ?>"
                                                       target="_blank">
                                                        <center><img
                                                                    src="<?php echo base_url() ?>/camera/<?php echo $a['foto'] ?>"
                                                                    width="20%"></center>
                                                    </a></td>
                                                <td><?php echo $a['waktu_absen'] ?></td>
                                            <?php } ?>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->

                    </div>
                    <!-- /.col -->
                </div>
            </section>
        </div>
        <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
</div>
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
                        detail data <i class="fa fa-arrow-circle-right"></i></a>
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
                        detail data <i class="fa fa-arrow-circle-right"></i></a>
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
                        detail data <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <!--<div class="col-lg-3 col-xs-6">
                <div class="small-box bg-red">
                    <div class="inner">
                        <h3>65</h3>

                        <p>Unique Visitors</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>-->
            <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <section class="col-lg-12 connectedSortable">
                <!-- quick email widget -->
                <div class="box box-success">
                    <div class="box-header with-border">
                        <h1 class="box-title">Form Registrasi</h1>
                    </div>
                    <form action="<?php echo base_url('index.php/'); ?>proses/data_pegawai" method="post">
                        <div class="box-body">
                            <div class="box-header with-border">
                                <h3 class="box-title">Nomor Induk Karyawan</h3>
                            </div>
                            <input class="form-control input-lg" type="text" name="nik"
                                   placeholder="Masukkan Nomor Induk Karyawan Anda" required>

                            <div class="box-header with-border">
                                <h3 class="box-title">Nomor Telepon</h3>
                            </div>
                            <input class="form-control input-lg" type="text" name="telepon"
                                   placeholder="Masukkan Nomor Telepon Anda" required>

                            <!--<div class="box-header with-border">
                                <h3 class="box-title">Alamat</h3>
                            </div>
                            <textarea class="form-control input-lg" rows="3" name="alamat" placeholder="Masukkan Alamat Rumah Anda" required></textarea>-->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary" style="width: 35%; margin-left:33%;">
                                SELANJUTNYA
                                <div class="fa fa-fw fa-arrow-right"></div>
                            </button>
                        </div>
                        </div>
                    </form>
                    <!-- /.box-body -->
                </div>
            </section>
            <!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            <!--<section class="col-lg-5 connectedSortable">

            </section>-->
            <!-- right col -->
        </div>
        <!-- /.row (main row) -->
        <div class="row">
            <!-- Left col -->
            <section class="col-lg-12 connectedSortable">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title">Absensi Terbaru</h3>
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
                                        <th>Foto</th>
                                        <th>Waktu Absen</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $no = 1;
                                    foreach ($baru as $a) {
                                        ?>
                                        <tr>
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $a['nik'] ?></td>
                                            <td><?php echo $a['nama'] ?></td>
                                            <td><?php echo $a['posisi'] ?></td>
                                            <td><?php echo $a['unit'] ?></td>
                                            <td><a href="<?php echo base_url() ?>/camera/<?php echo $a['foto'] ?>"
                                                   target="_blank">
                                                    <center><img
                                                                src="<?php echo base_url() ?>/camera/<?php echo $a['foto'] ?>"
                                                                width="20%"></center>
                                                </a></td>
                                            <td><?php echo $a['waktu_absen'] ?></td>
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

    </section>
    <!-- /.content -->
</div>
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
                    <a href="#" class="small-box-footer">More detail data <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-4 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3><?php echo $hadir ?></h3>

                        <p>Undangan Hadir</p>
                    </div>
                    <a href="#" class="small-box-footer">More detail data <i class="fa fa-arrow-circle-right"></i></a>
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
                    <a href="#" class="small-box-footer">More detail data <i class="fa fa-arrow-circle-right"></i></a>
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
                <div class="box box-danger">
                    <div class="box-header with-border">
                        <h3 class="box-title">Form Registrasi</h3>
                    </div>
                    <form action="<?php echo base_url('index.php/'); ?>proses/data_pegawai" method="post">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-xs-6">
                                    <input type="text" name="nik" class="form-control"
                                           placeholder="Nomor Induk Karyawan" required>
                                </div>
                                <div class="col-xs-6">
                                    <input type="text" name="telepon" class="form-control" placeholder="Nomor Telepon"
                                           required>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary" style="width: 35%; margin-left:33%;">
                                SELANJUTNYA
                                <div class="fa fa-fw fa-arrow-right"></div>
                            </button>
                        </div>
                    </form>
                </div>
            </section>
            <!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            <!--<section class="col-lg-5 connectedSortable">

            </section>-->
            <!-- right col -->
        </div>
        <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
</div>
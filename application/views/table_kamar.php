<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Data Kamar
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Daftar Penghuni Kamar dan Nomor Kamar</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <center>
                            <table>
                                <tr>
                                    <td width="50%">
                                        <table id="example2" class="table table-bordered table-hover">
                                            <thead>
                                            <tr>
                                                <th width="60%">Nama</th>
                                                <th width="40%">Nomor Kamar</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td rowspan="2"><?php echo $kamar[0]['nama'] ?></td>
                                                <td rowspan="2">
                                                    <center>
                                                        <h1>
                                                            <?php if ($kamar[0]['nomor_kamar'] == "0") { ?>
                                                                <form action="<?php echo base_url('index.php') ?>/proses/simpan_kamar?no=<?php echo $kamar[0]['kamar'] ?>"
                                                                      method="post">
                                                                    <div class="box-body">
                                                                        <input class="form-control"
                                                                               placeholder="Masukkan Nomor Kamar"
                                                                               type="text" name="nomor_kamar">
                                                                        <button type="submit" class="btn btn-primary">
                                                                            Simpan
                                                                        </button>
                                                                    </div>
                                                                </form>
                                                            <?php } else {
                                                                echo $kamar[0]['nomor_kamar'];
                                                            }
                                                            ?>
                                                        </h1>
                                                    </center>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                    <td width="50%">
                                        <table id="example2" class="table table-bordered table-hover">
                                            <thead>
                                            <tr>
                                                <th width="60%">Nama</th>
                                                <th width="40%">Nomor Kamar</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td><?php echo $kamar[1]['nama'] ?></td>
                                                <td rowspan="2">
                                                    <center>
                                                        <h1>
                                                            <?php if ($kamar[1]['nomor_kamar'] == "0") { ?>
                                                                <form action="<?php echo base_url('index.php') ?>/proses/simpan_kamar?no=<?php echo $kamar[1]['kamar'] ?>"
                                                                      method="post">
                                                                    <div class="box-body">
                                                                        <input class="form-control"
                                                                               placeholder="Masukkan Nomor Kamar"
                                                                               type="text" name="nomor_kamar">
                                                                        <button type="submit" class="btn btn-primary">
                                                                            Simpan
                                                                        </button>
                                                                    </div>
                                                                </form>
                                                            <?php } else {
                                                                echo $kamar[1]['nomor_kamar'];
                                                            }
                                                            ?>
                                                        </h1>
                                                    </center>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <table id="example2" class="table table-bordered table-hover">
                                            <thead>
                                            <tr>
                                                <th width="60%">Nama</th>
                                                <th width="40%">Nomor Kamar</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td rowspan="2"><?php echo $kamar[2]['nama'] ?></td>
                                                <td rowspan="2">
                                                    <center>
                                                        <h1>
                                                            <?php if ($kamar[2]['nomor_kamar'] == "0") { ?>
                                                                <form action="<?php echo base_url('index.php') ?>/proses/simpan_kamar?no=<?php echo $kamar[2]['kamar'] ?>"
                                                                      method="post">
                                                                    <div class="box-body">
                                                                        <input class="form-control"
                                                                               placeholder="Masukkan Nomor Kamar"
                                                                               type="text" name="nomor_kamar">
                                                                        <button type="submit" class="btn btn-primary">
                                                                            Simpan
                                                                        </button>
                                                                    </div>
                                                                </form>
                                                            <?php } else {
                                                                echo $kamar[2]['nomor_kamar'];
                                                            }
                                                            ?>
                                                        </h1>
                                                    </center>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                    <td>
                                        <table id="example2" class="table table-bordered table-hover">
                                            <thead>
                                            <tr>
                                                <th width="60%">Nama</th>
                                                <th width="40%">Nomor Kamar</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            <tr>
                                                <td><?php echo $kamar[3]['nama'] ?></td>
                                                <td rowspan="2">
                                                    <center>
                                                        <h1>
                                                            <?php if ($kamar[3]['nomor_kamar'] == "0") { ?>
                                                                <form action="<?php echo base_url('index.php') ?>/proses/simpan_kamar?no=<?php echo $kamar[3]['kamar'] ?>"
                                                                      method="post">
                                                                    <div class="box-body">
                                                                        <input class="form-control"
                                                                               placeholder="Masukkan Nomor Kamar"
                                                                               type="text" name="nomor_kamar">
                                                                        <button type="submit" class="btn btn-primary">
                                                                            Simpan
                                                                        </button>
                                                                    </div>
                                                                </form>
                                                            <?php } else {
                                                                echo $kamar[3]['nomor_kamar'];
                                                            }
                                                            ?>
                                                        </h1>
                                                    </center>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><?php echo $kamar[4]['nama'] ?></td>
                                            </tr>

                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                <?php
                                $i = 5;
                                do {
                                    ?>
                                    <tr>
                                        <td>
                                            <table id="example2" class="table table-bordered table-hover">
                                                <thead>
                                                <tr>
                                                    <th width="60%">Nama</th>
                                                    <th width="40%">Nomor Kamar</th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                <tr>
                                                    <td><?php echo $kamar[$i]['nama'] ?></td>
                                                    <td rowspan="2">
                                                        <center>
                                                            <h1>
                                                                <?php if ($kamar[$i]['nomor_kamar'] == "0") { ?>
                                                                    <form action="<?php echo base_url('index.php') ?>/proses/simpan_kamar?no=<?php echo $kamar[$i]['kamar'] ?>"
                                                                          method="post">
                                                                        <div class="box-body">
                                                                            <input class="form-control"
                                                                                   placeholder="Masukkan Nomor Kamar"
                                                                                   type="text" name="nomor_kamar">
                                                                            <button type="submit"
                                                                                    class="btn btn-primary">Simpan
                                                                            </button>
                                                                        </div>
                                                                    </form>
                                                                <?php } else {
                                                                    echo $kamar[$i]['nomor_kamar'];
                                                                }
                                                                ?>
                                                            </h1>
                                                        </center>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><?php echo $kamar[$i + 1]['nama'] ?></td>
                                                </tr>

                                                </tbody>
                                            </table>
                                        </td>
                                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                        <td>
                                            <table id="example2" class="table table-bordered table-hover">
                                                <thead>
                                                <tr>
                                                    <th width="60%">Nama</th>
                                                    <th width="40%">Nomor Kamar</th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                <tr>
                                                    <td><?php echo $kamar[$i + 2]['nama'] ?></td>
                                                    <td rowspan="2">
                                                        <center>
                                                            <h1>
                                                                <?php if ($kamar[$i + 2]['nomor_kamar'] == "0") { ?>
                                                                    <form action="<?php echo base_url('index.php') ?>/proses/simpan_kamar?no=<?php echo $kamar[$i + 2]['kamar'] ?>"
                                                                          method="post">
                                                                        <div class="box-body">
                                                                            <input class="form-control"
                                                                                   placeholder="Masukkan Nomor Kamar"
                                                                                   type="text" name="nomor_kamar">
                                                                            <button type="submit"
                                                                                    class="btn btn-primary">Simpan
                                                                            </button>
                                                                        </div>
                                                                    </form>
                                                                <?php } else {
                                                                    echo $kamar[$i + 2]['nomor_kamar'];
                                                                }
                                                                ?>
                                                            </h1>
                                                        </center>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><?php echo $kamar[$i + 3]['nama'] ?></td>
                                                </tr>

                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                    <?php
                                    $i = $i + 4;
                                } while ($i <= 85); ?>
                            </table>
                        </center>
                        <br>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
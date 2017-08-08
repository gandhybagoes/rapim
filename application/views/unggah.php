<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            File Sharing
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Upload File</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="<?php echo base_url('index.php') ?>/proses/upload" enctype="multipart/form-data"
                  method="post" accept-charset="utf-8">
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputFile">File input</label>
                        <input type="file" name="berkas">

                        <p class="help-block">file extension (pdf, rar, zip, xlxs, docx, pptx, jpg, png, jpeg)</p>
                    </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Upload</button>
                </div>
            </form>
        </div>
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
                                <th>Nama File</th>
                                <th>Action</th>
                                <!--<th>Platform(s)</th>
                                <th>Engine version</th>
                                <th>CSS grade</th>-->
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($berkas as $data) { ?>
                                <tr>
                                    <td><?php echo $data['nama_file'] ?></td>
                                    <td>
                                        <a href="<?php echo base_url('index.php') ?>/proses/download?f=<?php echo $data['nama_file'] ?>">
                                            <button class="btn btn-primary">Download</button>
                                        </a>
                                    </td>
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
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
    <?php $this->load->view('layout/header_admin'); ?>

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i>Table Content</h3>
                        </div>

                <div class="limiter">
                    <div class="wrap-table100">
                        <div class="table100">
                            <a href="<?php echo site_url("tahap/insert")?>">Tambah Data</a>
                            <table border="1">
                                <thead>
                                <tr class="table100-head" >
                                    <th class="column1">Jangka</th>
                                    <th class="column1">Isi</th>
                                    <th class="column1">Opsi</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($tahap as $key => $value) {
                                    ?>  
                                <tr>
                                    <td class="column1"><?php echo $value->jangka_tahap; ?></td>
                                    <td class="column1"><?php echo $value->isi_tahap; ?></td>
                                    <td class="column1">
                                        <a href="<?php echo site_url('tahap/update/'.$value->id_tahap) ?>" class="btn btn-warning">Edit</a>
                                        <a href="<?php echo site_url('tahap/delete/'.$value->id_tahap) ?>" 
                                        onClick="return confirm('Apakah anda ingin menghapus data ini ?')" 
                                        class="btn btn-danger">Hapus</a>
                                    </td>
                                </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
    <?php $this->load->view('layout/footer_admin'); ?>

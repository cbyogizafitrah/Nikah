    <?php $this->load->view('layout/header_admin'); ?>

            <div class="row">
                <div class="col-lg-6">

                    <form method="POST" action="<?php echo site_url('komentar/insert_aksi'); ?>">
 
                        <div class="form-group">
                            <label>Nama</label>
                            <input class="form-control" value="<?php if(isset($komentar->nama_komentar)) {
                                        	echo $komentar->nama_komentar;
                                        } ?>" name=nama_komentar placeholder="Nama">
                        </div>
                        <div class="form-group">
                            <label>Isi</label>
                            <input class="form-control" name=isi_komentar value="<?php if(isset($komentar->isi_komentar)) {echo $komentar->isi_komentar;
                                        } ?>" placeholder="Isi">
                        </div>
                        <button type="submit" class="btn btn-default">Submit Button</button>
                        <button type="reset" class="btn btn-default">Reset Button</button>

                    </form>
                </div>
            </div>
    <?php $this->load->view('layout/header_admin'); ?>
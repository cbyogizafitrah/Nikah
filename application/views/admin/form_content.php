    <?php $this->load->view('layout/header_admin'); ?>

            <div class="row">
                <div class="col-lg-6">

                    <form method="POST" action="<?php echo site_url('tahap/insert_aksi'); ?>">
 
                        <div class="form-group">
                            <label>Jangka</label>
                            <input class="form-control" value="<?php if(isset($tahap->jangka_tahap)) {
                                        	echo $tahap->jangka_tahap;
                                        } ?>" name=jangka_tahap placeholder="Jangka">
                        </div>
                        <div class="form-group">
                            <label>Isi</label>
                            <input class="form-control" name=isi_tahap value="<?php if(isset($tahap->isi_tahap)) {
                                        	echo $tahap->isi_tahap;
                                        } ?>" placeholder="Isi">
                        </div>
                        <button type="submit" class="btn btn-default">Submit Button</button>
                        <button type="reset" class="btn btn-default">Reset Button</button>

                    </form>
                </div>
            </div>
    <?php $this->load->view('layout/header_admin'); ?>
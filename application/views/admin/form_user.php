    <?php $this->load->view('layout/header_admin'); ?>

            <div class="row">
                <div class="col-lg-6">

                    <form method="POST" action="<?php echo site_url('user/insert_aksi'); ?>">
 
                        <div class="form-group">
                            <label>Nama</label>
                            <input class="form-control" value="<?php if(isset($user->nama_user)) {
                                        	echo $user->nama_user;
                                        } ?>" name=nama_user placeholder="Nama">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" name=email_user value="<?php if(isset($user->email_user)) {
                                        	echo $user->email_user;
                                        } ?>" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input class="form-control" type="Password" value="<?php if(isset($user->password_user)) {echo $user->password_user;} ?>" name="password_user" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label>Keterangan</label>
                            <input class="form-control" value="<?php if(isset($user->ket_user)){echo $user->ket_user;} ?>" name="ket_user" placeholder="Keterangan">
                        </div>
                        <button type="submit" class="btn btn-default">Submit Button</button>
                        <button type="reset" class="btn btn-default">Reset Button</button>

                    </form>
                </div>
            </div>
    <?php $this->load->view('layout/header_admin'); ?>
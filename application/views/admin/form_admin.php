    <?php $this->load->view('layout/header_admin'); ?>

            <div class="row">
                <div class="col-lg-6">

                    <form method="POST" action="<?php echo site_url('admin/insert_aksi'); ?>">
 
                        <div class="form-group">
                            <label>Nama</label>
                            <input class="form-control" value="<?php if(isset($admin->nama_admin)) {
                                        	echo $admin->nama_admin;
                                        } ?>" name=nama_admin placeholder="Nama">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" name=email_admin value="<?php if(isset($admin->email_admin)) {
                                        	echo $admin->email_admin;
                                        } ?>" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input class="form-control" type="Password" value="<?php if(isset($admin->password_admin)) {echo $admin->password_admin;} ?>" name="password_admin" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-default">Submit Button</button>
                        <button type="reset" class="btn btn-default">Reset Button</button>

                    </form>
                </div>
            </div>
    <?php $this->load->view('layout/header_admin'); ?>
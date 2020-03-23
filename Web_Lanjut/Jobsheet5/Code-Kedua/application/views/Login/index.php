<?=
    form_open('Login/proses_login');
?>
<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6 mx-auto">

                    <!-- form card login -->
                    <div class="card-rounded-0">
                        <div class="card-header">
                            <h3 class="mb-0">Login</h3>
                        </div>
                            <div class="card-body">
                                <form role="form" autocomplete="off" novalidate="" method="POST" id="formLogin" class="form">
                                    <label for="uname1">Username</label>
                                    <input type="text" class="form-control form-control-lg rounded-0" name="uname1" id="uname1" required="">
                                    <div class="invalid-feedback">Ooops, you missed this one.</div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control form-control-lg rounded-0" name="pwd1" id="pwd1" required="" autocomplete="new-passwords">
                                        <div class="invalid-feedback">Enter password</div>
                                    </div>
                                    <button type="submit" class="btn btn-success btn-lg float-right" id="btnLogin">Login</button>
                                </form>
                                </div>
                        </div><br><br><br>
                        <div class="alert alert-info" role="alert">
                            <?php
                                if(isset($pesan)){
                                    echo $pesan;
                                }else{
                                    echo "Masukkan username & password anda";
                                }
                            ?>
                        </div>
                        
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<?=
    form_close();
?>
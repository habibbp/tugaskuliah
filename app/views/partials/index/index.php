        <?php 
        $page_id = null;
        $comp_model = new SharedController;
        ?>
        <div  class=" py-5">
            <div class="container">
                <div class="row ">
                    <div class="col-md-8 comp-grid">
                        <div class="">
                            <div class="fadeIn animated mb-4">
                                <div class="text-capitalize">
                                    <h2 class="text-capitalize">Welcome To <?php echo SITE_NAME ?></h2>
                                </div>
                            </div>
                            </div><div class="">    <style>
                            body
                            {
                            background-image: url(assets/images/gambarvespa.jpg);
                            background-image:no-repeat;
                            background-size:cover;
                            }
                        </style>
                    <div><center><h1></h1>SELAMAT DATANG DI PENJUALAN MOTOR</center></h1></div>
                </div>
            </div>
            <div class="col-md-4 comp-grid">
                <div class=""><div>
                    <style>
                        form { 
                        height: 357px; 
                        width: 380px; 
                        background-color: rgba(255,255,255,0.13); 
                        position: absolute; 
                        transform: translate(-50%,-50%); 
                        top: 50%; 
                        left: 50%; 
                        border-radius: 47px; backdrop-filter: blur(10px); 
                        border: 2px solid rgba(255,255,255,0.1); 
                        /*box-shadow: 0 0 30px rgba(0,0,0,0.3); */
                        padding: 91px 44px;
                        }
                        .p-3 {
                        height:357px; 
                        width: 380px; 
                        position: fixed; 
                        top: 33%; 
                        left: 56%; 
                        border-radius: 47px; backdrop-filter: blur(10px); 
                        border: 2px solid rgba(255,255,255,0.1); 
                        box-shadow: 0 0 30px rgba(16,24,19,7.3); 
                        padding: 91px 44px;    
                        }
                        from{
                        height: 52px; 
                        width: 40px;
                        }
                    </style>
                </div></div>
            </div>
            <div class="col-md-4 comp-grid">
                <?php $this :: display_page_errors(); ?>
                
                <div  class=" p-3 animated fadeIn page-content">
                    <div>
                        <h4><i class="fa fa-key"></i> User Login</h4>
                        <hr />
                        <?php 
                        $this :: display_page_errors(); 
                        ?>
                        <form name="loginForm" action="<?php print_link('index/login/?csrf_token=' . Csrf::$token); ?>" class="needs-validation form page-form" method="post">
                            <div class="input-group form-group">
                                <input placeholder="Username" name="username"  required="required" class="form-control" type="text"  />
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="form-control-feedback fa fa-user"></i></span>
                                </div>
                            </div>
                            <div class="input-group form-group">
                                <input  placeholder="Password" required="required" v-model="user.password" name="password" class="form-control " type="password" />
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="form-control-feedback fa fa-key"></i></span>
                                </div>
                            </div>
                            <div class="row clearfix mt-3 mb-3">
                                <div class="col-6">
                                    <label class="">
                                        <input value="true" type="checkbox" name="rememberme" />
                                        Remember Me
                                    </label>
                                </div>
                                <div class="col-6">
                                    <a href="<?php print_link('passwordmanager') ?>" class="text-danger"> Reset Password?</a>
                                </div>
                            </div>
                            <div class="form-group text-center">
                                <button class="btn btn-primary btn-block btn-md" type="submit"> 
                                    <i class="load-indicator">
                                        <clip-loader :loading="loading" color="#fff" size="20px"></clip-loader> 
                                    </i>
                                    Login <i class="fa fa-key"></i>
                                </button>
                            </div>
                            <hr />
                            <div class="text-center">
                                Don't Have an Account? <a href="<?php print_link("index/register") ?>" class="btn btn-success">Register
                                <i class="fa fa-user"></i></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    
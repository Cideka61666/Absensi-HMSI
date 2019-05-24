<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
<?php
require_once 'core/init.php';

if(Session::exists('username')){
    header('Location: profile.php');
}

$errors = array();

if( Input::get('submit') ){
    $validation = new Validation();

    $validation = $validation->check(array(
        'username' => array('required' => true),
        'password' => array('required' => true)
        ));
        
        if( $validation->passed() ){
            if($user->cek_nama(Input::get('username'))){
            if( $user->login_user( Input::get('username'), Input::get('password')) )
            {
                Session::set('username', Input::get('username'));
                header('Location: profile.php');
            }
            else{
                $errors[]= 'login gagal';
            }
        }else{
            $errors[]= 'nama belum terdaftar';
        }
        }
        else{
            $errors=$validation->errors();
        }       
}
?>

<form action="logiin.php" method="post">
<div class="container">
        <div class="row text-center ">
            <div class="col-md-12">
                <br /><br />
                <h2> Absensi HMSI : Login</h2>
               
                <h5>( Login yourself to get access )</h5>
                 <br />
            </div>
        </div>
         <div class="row ">
               
                  <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                        <strong>   Enter Details To Login </strong>  
                            </div>
                            <div class="panel-body">
                                <form role="form">
                                       <br />
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input type="text" class="form-control" name="username" placeholder="Your Username " />
                                        </div>
                                                                              <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" class="form-control" name="password" placeholder="Your Password" />
                                        </div>
                                    
                                     <a href="index.php" class="btn btn-primary " value="Login">Login Now</a>
                                    <hr />
                                     
                                    </form>
                            </div>
                           
                        </div>
                    </div>
                
                
        </div>
    </div>

<?php if(!empty($errors)){?>
    <div id="errors">
    <?php foreach ($errors as $error){?>
        <li><?php echo $error;?></li>
        <?php } ?>
        </div>
        <?php } ?>
</form>
<?php require_once 'templates/footer.php';?>
</body>
</html>
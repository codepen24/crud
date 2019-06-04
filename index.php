<?php include_once('template/header.php'); ?>
    
<div class="col-md-4 py-5 bg-primary text-white text-center ">
        <div class="">
            <div class="card-body">
                <a href="/"><img src="http://www.ansonika.com/mavia/img/registration_bg.svg" style="width:30%"></a>
                <h2 class="py-3">Login</h2>
                <p>Tation argumentum et usu, dicit viderer evertitur te has. Eu dictas concludaturque usu, facete detracto patrioque an per, lucilius pertinacia eu vel.</p>
            </div>
        </div>
    </div>
    <div class="col-md-8 py-5 border">
        <h4 class="pb-4">Please fill with your details</h4>
             
        <form action="core/core_processing.php" method="POST">
            <div class="form-row">
                <div class="form-group col-md-12">
                  <input id="Full Name" name="username" placeholder="Enter Email Address" required="required" class="form-control" type="text" value="">
                </div>
                <div class="form-group col-md-12">
                    <input name="userpassword" placeholder="Enter Password" class="form-control" required="required" type="password" value="">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <a href="registration.php" class="txt1">
                        Create an account
                    </a>
                </div>
            </div>
            <div class="form-row">
                <button type="submit" name="login" class="btn btn-danger">Login</button>
            </div>
        </form>
   
    <div>
    
<?php include_once('template/footer.php'); ?>

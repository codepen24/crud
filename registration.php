<?php include_once('template/header.php'); ?>
             
    <div class="col-md-4 py-5 bg-primary text-white text-center ">
        <div class="">
            <div class="card-body">
                <a href="/"><img src="http://www.ansonika.com/mavia/img/registration_bg.svg" style="width:30%"></a>
                <h2 class="py-3">Home</h2>
                <p>Tation argumentum et usu, dicit viderer evertitur te has. Eu dictas concludaturque usu, facete detracto patrioque an per, lucilius pertinacia eu vel.</p>
            </div>
        </div>
    </div>
    <div class="col-md-8 py-5 border">
        <h4 class="pb-4">Please fill with your details</h4>

        <form id="registrationForm" action="core/core_processing.php" method="POST">
            <div class="form-row">
                <div class="form-group col-md-12">
                  <input id="Full Name" name="username" placeholder="Full Name" class="form-control" type="text" value="">
                </div>
                <div class="form-group col-md-12">
                  <input type="email" name="useremail" class="form-control" id="" placeholder="Enter Email e.g xxx@gmail.com" value="">
                </div>
                <div class="form-group col-md-12">
                    <input id="fasfafd" name="userphone" placeholder="Enter Phone Number" class="form-control" required="required" type="tel" value="">
                </div>
                <div class="form-group col-md-12">
                    <input name="userpassword" placeholder="Enter Password" class="form-control" required="required" type="password" value="">
                </div>
                <div class="form-group col-md-12">
                    <input name="userconfirmpassword" placeholder="Confirm Password" class="form-control" required="required" type="password" value="">
                </div>
                <div class="form-group">
                    <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                          <label class="form-check-label" for="invalidCheck2">
                            <small>By clicking Submit, you agree to our Terms & Conditions, Visitor Agreement and Privacy Policy.</small>
                          </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <button type="submit" name="register" class="btn btn-danger">Register</button>
            </div>
        </form>

    </div>

<?php include_once('template/footer.php'); ?>

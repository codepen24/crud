<?php include_once('template/header.php'); ?>
             
    <div class="col-md-4 py-5 bg-primary text-white text-center ">
        <div class="">
            <div class="card-body">
                <a href="/"><img src="http://www.ansonika.com/mavia/img/registration_bg.svg" style="width:30%"></a>
                <h2 class="py-3">Welcome</h2>
                <p>Tation argumentum et usu, dicit viderer evertitur te has. Eu dictas concludaturque usu, facete detracto patrioque an per, lucilius pertinacia eu vel.</p>
            </div>
        </div>
    </div>
    <div class="col-md-8 py-5 border">
        <h4 class="pb-4">User: <span style="font-weight: normal;">fredjil</span></h4> 

        <form action="core/core_processing.php" method="POST">
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for=""><b>Email:</b></label> <span>fasdfasdf</span>
                </div>
                <div class="form-group col-md-12">
                    <label for=""><b>Phone:</b></label> <span>fasdfasdf</span>
                </div>
            </div>
            <div class="form-row">
                <button type="submit" name="update" class="btn btn-danger">Update Profile</button>
            </div>
        </form>

    </div>

<?php include_once('template/footer.php'); ?>

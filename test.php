<?php include_once('template/header.php'); ?>

    <div class="col-md-4 py-5 bg-primary text-white text-center ">
        <div class="">
            <div class="card-body">
                <a href="/"><img src="http://www.ansonika.com/mavia/img/registration_bg.svg" style="width:30%"></a>
                <h2 class="py-3">Test</h2>
                <p>Tation argumentum et usu, dicit viderer evertitur te has. Eu dictas concludaturque usu, facete detracto patrioque an per, lucilius pertinacia eu vel.</p>
            </div>
        </div>
    </div>
    <div class="col-md-8 py-5 border">
                <button id="dikoi" type="click" name="testing">Test This</button>
    </div>


<script charset="utf-8">
(function() {
    dikoi.addEventListener('click', query_realtime, false);
    function query_realtime(e) {
        e.preventDefault();
        request = new XMLHttpRequest(); 
        request.open('GET', 'core/core_query.php', true);
        request.onload = function(data) {
            if(request.status >= 200 && request.status < 400) {
                var fredjil = request.responseText;
                console.log(fredjil);
            } else {
                console.log('error');
            }
        };
        request.send();
    }
})();    
</script>

<?php include_once('template/footer.php'); ?>

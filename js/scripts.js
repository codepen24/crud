(function() {
    var registrationForm = document.getElementById('registrationForm');
    registrationForm.addEventListener('submit', insert_reg_user);

    function insert_reg_user(e) {

        e.preventDefault();
        var registrationForm_action = $(this)[0].getAttribute('action'),
        registrationForm_method = $(this)[0].getAttribute('method'),
        registrationForm_data = {};


        $(this)[0].querySelectorAll('[name]').forEach(function(item, i){
            var name = item.getAttribute('name'),
                value = item.value;
            registrationForm_data[name] = value;

        });
        
        var request = new XMLHttpRequest(),
            d = registrationForm_data;
        request.open(registrationForm_method, registrationForm_action, true);
        request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
        request.send($.param(registrationForm_data));

            
    }
})($);

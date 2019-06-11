(function() {

    (document.getElementById('registrationForm') !== null)?document.getElementById('registrationForm').addEventListener('submit', insert_reg_user, false):'';
    function insert_reg_user(e) {
        e.preventDefault();
        var registrationForm_action = this.getAttribute('action'),
        registrationForm_method = this.getAttribute('method'),
        registrationForm_data = {};


        this.querySelectorAll('[name]').forEach(function(item, i){
            var name = item.getAttribute('name'),
                value = item.value;
            registrationForm_data[name] = value;

        });
        
        var request = new XMLHttpRequest();
        request.open(registrationForm_method, registrationForm_action, true);
        request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');

        request.onload = function(data) {
            if(request.status >= 200 && request.status < 400) {
                console.log(request.responseText);
            } else {
                console.log('error');
            }
        };

        request.send($.param(registrationForm_data));
          
    }

    (document.getElementById('qemail_value') !== null)?document.getElementById('qemail_value').addEventListener('keydown', email_auth, false):'';
    function email_auth() {
        var qemail_value = this.value;
        request = new XMLHttpRequest();
        request.open('POST', 'core/core_query.php?qemail='+qemail_value, true);

        request.onload = function() {
            if(request.status >= 200 && request.status < 400) {
                console.log(JSON.parse(request.responseText));
                var data_request = JSON.parse(request.responseText);
                if(qemail_value === data_request) {
                    document.getElementById('strick').style.display = 'none';
                } else {
                    document.getElementById('strick').style.display = '';
                }
            } else {
                console.log('error');
            }
        };


        request.send();
    }

//$('#dikoi').on('click', function clickbaite(e) {
//    e.preventDefault();
//        $.ajax({
//            url: 'txt.json',
//            type: 'POST',
//            dataType: JSON,
//            success: function(data) {
//                console.log(data) 
//            },
//        });
//    }
//);



})($);

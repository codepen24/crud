(function() {
    var registrationForm = document.getElementById('registrationForm');
    registrationForm.addEventListener('submit', insert_reg_user);

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
        request.onload = function() {
            if(request.status >= 200 && request.status < 400) {
                console.log(request.responseText);
            } else {
                console.log('error');
            }
        }
request.onerror = function() {
                console.log('errorrrrrr');
};
        request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
        request.send($.param(registrationForm_data));
            
    }
})($);

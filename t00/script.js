function checkPswd() {

    let pswd = document.getElementById('password');
    let conf_pswd = document.getElementById('conf_password');

    if(pswd.value.localeCompare(conf_pswd.value)) {

        pswd.style.border = '2px solid red';
        conf_pswd.style.border = '2px solid red';
        document.getElementById('error').innerHTML = 'Incorrect password confirmation';
    } else {

        pswd.style.border = '0';
        conf_pswd.style.border = '0';
        document.getElementById('error').innerHTML = '';
    }
}
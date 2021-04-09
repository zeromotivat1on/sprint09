function signin() {

    let main_form = document.getElementById('mn_form');
    main_form.className = 'main_form hidden';

    let loggedin_form = document.getElementById('log_form');
    loggedin_form.className = 'loggedin_form';

}

function signout() {

    let main_form = document.getElementById('mn_form');
    main_form.className = 'main_form';

    let loggedin_form = document.getElementById('log_form');
    loggedin_form.className = 'loggedin_form hidden';

}

function error() {

    document.getElementById('error').innerHTML = 'Incorrect login or password';
}

function statusAdmin() {

    document.getElementById('status').innerHTML = 'Admin';
    document.getElementById('status').className = 'admin';
}

function statusUser() {

    document.getElementById('status').innerHTML = 'User';
    document.getElementById('status').className = 'user';
}
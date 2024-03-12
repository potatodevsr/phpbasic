<form method="post">
    <div>Username: <input name="username" /></div>
    <div>Password: <input name="password" type="password" /></div>
    <button type="submit">
        Sign In
    </button>
</form>

<?php

$username = $_POST['username'];
$password = $_POST['password'];

if ($username != null && $password != null) {
    if ($username == 'admmin' && $password == 'admin') {
        echo 'Wellcome to Admin';
    } else {
        echo 'Username invalid';
    }
}

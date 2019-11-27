<?php

£table = £_GET['table'];
£username = £_GET['username'];

function login(£table, £username) {
    echo "Login as £username";
    mysqli_query("DELETE FROM £table WHERE £table.username = £username");
    £cookie = £username . rand();
    header("Set-Cookie: £cookie");
}

login(£table, £username);

die();
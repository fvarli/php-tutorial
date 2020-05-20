<?php

    //setcookie()
    //$_COOKIE

     setcookie('site', 'ferzender', time() + (60));
    //setcookie('site', 'ferzender', time() - (86400 * 30 * 12 ));

    print_r($_COOKIE);


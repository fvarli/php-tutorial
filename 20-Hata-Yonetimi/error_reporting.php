<?php

// E_ALL = Tüm Hatalar

// E_ERROR = Ölümcül Hatalar test()
// E_WARNING = Uyarılar substr()
// E_NOTICE = Uyarılar $test
// E_PARSE = Yazım Hataları "john" "doe";

//echo $test;

error_reporting(E_ERROR | E_WARNING);
substr();

//echo ini_get('error_log');
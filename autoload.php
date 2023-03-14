<?php

spl_autoload_register(function ($className) {
    $file = $className . '.php';
    include $file;
});

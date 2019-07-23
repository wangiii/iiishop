<?php

function fuck() {
    return "happy hacking!";
}

function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}

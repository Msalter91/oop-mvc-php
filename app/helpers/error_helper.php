<?php

function myException(Exception $e): void
{
    echo $e->getMessage();
}
set_exception_handler('myException');

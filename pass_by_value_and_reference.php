<?php

$count = 0;

// pass by value
function increment($count) {
    return ++$count;
}

increment($count);

echo $count;
echo PHP_EOL;

// pass by reference
function decrement(& $count) {
    --$count;
}


decrement($count);
decrement($count);

echo $count;

/*
Pass by value:
==============
when we only pass the value of the variable into the function and if we 
modify the value we are not actually modifying the actual variable. so the 
variable passed has the same value after modification

Pass by reference:
==================
when we pass the reference of the variable we are actually saying modify the
actual variable value.

syntax:
-------
& sign before variable name

*/
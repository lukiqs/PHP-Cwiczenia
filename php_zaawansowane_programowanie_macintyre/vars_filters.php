<?php


var_dump(filter_var("lukiqs@gmail.com",FILTER_VALIDATE_EMAIL));
var_dump(filter_var("lukiq##@s@gmail.com",FILTER_VALIDATE_EMAIL));

var_dump(filter_var("YES",FILTER_VALIDATE_BOOLEAN));
var_dump(filter_var("1",FILTER_VALIDATE_BOOLEAN));
var_dump(filter_var("dgfdfhg",FILTER_VALIDATE_BOOLEAN));
var_dump(filter_var(1,FILTER_VALIDATE_BOOLEAN));

var_dump(filter_var(1,FILTER_VALIDATE_FLOAT));
var_dump(filter_var(1.00008,FILTER_VALIDATE_FLOAT));
var_dump(filter_var("1",FILTER_VALIDATE_FLOAT));
var_dump(filter_var(true,FILTER_VALIDATE_FLOAT));

var_dump(filter_var(1,FILTER_VALIDATE_INT));
var_dump(filter_var(1.00008,FILTER_VALIDATE_INT));
var_dump(filter_var("1",FILTER_VALIDATE_INT));
var_dump(filter_var(true,FILTER_VALIDATE_INT));

var_dump(filter_var("21.554.22.110",FILTER_VALIDATE_IP));
var_dump(filter_var("255.110.152.144",FILTER_VALIDATE_IP));


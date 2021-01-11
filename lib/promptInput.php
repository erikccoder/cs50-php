<?

function get_int($prompt)
{        
    return intval(
        readline($prompt)
    );
}

function get_double($prompt)
{        
    return doubleval(
        readline($prompt)
    );
}

function get_float($prompt)
{        
    return  floatval(
        readline($prompt)
    );
}

function get_char($prompt)
{        
    return  readline($prompt);
}

function get_string($prompt)
{        
    return  readline($prompt);
}

function get_long($prompt)
{        
    return  (double)readline($prompt);
}



?>
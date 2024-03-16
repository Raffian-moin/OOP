<?php

namespace App\Another;

class Another
{
    public function __construct()
    {
        echo "I'm another vehicle";
    }
}

// This whole directory was created after running composer_autoload command
// but we can still include this file in other classes and
// composer can autoload it

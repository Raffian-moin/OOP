<?php

class callStatic
{
    private static function whatever()
    {
        return "I'm a private method\n";
    }

    public static function __callStatic($name, $arguments)
    {
        if (method_exists('callStatic', $name)) {
            return call_user_func_array(array(__CLASS__, $name), $arguments);
        } else {
            if ($name === "convertToFloat") {
                return floatval($arguments[0]);
            }

            throw new BadMethodCallException();
        }
    }
}

// whatever is static private method, so __callStatic will be called
echo callStatic::whatever();
// convertToFloat doesn't exist, so __callStatic will be called and will find
// definition for convertToFloat() method. No error is thrown
echo callStatic::convertToFloat('2.2t');
// methodDontExists doesn't exist, so __callStatic will be called and it  will not find
// any definition for convemethodDontExistsrtToFloat() method. Throws error
echo callStatic::methodDontExists('2.2t');

/*
If we want to call static method that isn't accessible (private or protected methods), or methods
that don't exist __callStatic method is called automatically
*/

